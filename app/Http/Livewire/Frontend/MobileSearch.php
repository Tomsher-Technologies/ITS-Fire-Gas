<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Category;
use App\Models\Product;
use App\Models\Search;
use Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class MobileSearch extends Component
{

    public $query = "";
    public $products;
    public $categories;
    public $first_load = true;

    public function updatedQuery()
    {
        $this->first_load = false;

        $this->categories = $this->products = null;

        if ($this->query !== '' && $this->query !== null) {
            $this->save();
            $keyword = $this->query;

            $this->products = Product::where('published', 1)
                ->select([
                    'id',
                    'name',
                    'sku',
                    'category_id',
                    'brand_id',
                    'thumbnail_img',
                    'unit_price',
                    'purchase_price',
                    'rating',
                    'slug',
                    'discount',
                    'discount_type',
                    'discount_end_date',
                    'discount_start_date',
                    'hide_price',
                ])
                ->where(function ($subQuery) use ($keyword){
                    $subQuery->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('tags', 'LIKE', '%' .$keyword . '%')
                            ->orWhereHas('stocks', function ($subQuery) use ($keyword) {
                                $subQuery->where('sku', 'like',  $keyword);
                            });
                })
                // ->where(function ($q) {
                //     foreach (explode(' ', trim($this->query)) as $word) {
                //         $q->where('name', 'like', '%' . $word . '%')
                //             ->orWhere('tags', 'like', '%' . $word . '%')
                //             ->orWhereHas('stocks', function ($q) use ($word) {
                //                 $q->where('sku', 'like', '%' . $word . '%');
                //             });
                //     }
                // })
                ->limit(8)
                ->get();

            $this->categories = Category::where('name', 'like', '%' . $this->query . '%')->get()->take(3);
        }
    }
    
    public function search()
    {
    }

    public function save()
    {
        Search::create([
            'query' => $this->query,
            'ip_address' => Request::ip(),
            'user_id' => Auth::id(),
            'temp_user_id' => Auth::check() ? null : getTempUserId(),
        ]);
    }

    public function render()
    {
        return view('livewire.frontend.mobile-search');
    }
}
