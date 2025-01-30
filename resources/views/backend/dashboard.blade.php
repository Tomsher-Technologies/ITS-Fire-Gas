@extends('backend.layouts.app')

@section('content')
    @if (env('MAIL_USERNAME') == null && env('MAIL_PASSWORD') == null)
        <div class="">
            <div class="alert alert-danger d-flex align-items-center">
                Please Configure SMTP Setting to work all email sending functionality,
                <a class="alert-link ml-2" href="{{ route('smtp_settings.index') }}">Configure Now</a>
            </div>
        </div>
    @endif
    @if (Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
        <div class="row gutters-10">
            <div class="col-lg-12 text-right">
                <a href="{{ route('cache.clear', ['type' => 'counts']) }}"
                    class="btn btn-sm btn-soft-secondary btn-circle mr-2 mb-2">
                    <i class="la la-refresh fs-24"></i>
                </a>
            </div>
            
            
            
            <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-1">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/team.png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Customer</div>
                                                    <div class="text-muted mb-1 fs-12 count-n "> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                                             {{ $counts['totalUsersCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
            
            
                <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-2">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/Products.png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Products</div>
                                                    <div class="text-muted mb-1 fs-12 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom ">
                                                             {{ $counts['totalProductsCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
                  
                <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-3">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/application.png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Product category</div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                                             {{ $counts['categoryCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
            
                     <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-4">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/badge.png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Product brand</div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                                        {{ $counts['brandCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
            
                        <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-5">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/sale (2).png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Sales Amount </div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                                       {{ $counts['salesAmount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
                
                
                
                
                <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-6">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/box (3).png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Orders </div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                               {{ $counts['orderCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
                
                
                
                
                      <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-7">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/shopping-bag (5).png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Completed Orders </div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                                    {{ $counts['orderCompletedCount'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
            
            
            
                     <div class="col-lg-3 col-sm-6 col-md-3 col-xl-3">
                
                   <div class="card custom-card ">
                                        <div class="card-body bg-8">
                                            <div class="row">
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0"> 
                                                <span class="">
                                                         <img width="50" src="{{ static_asset('assets/img/sign.png') }}">
                                                        </span> 
                                                 </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0"
                                                >
                                                    <div class="mb-2 fs-15 count-t">Total Products Sold </div>
                                                    <div class="text-muted mb-1 count-n"> <span
                                                            class="text-dark fw-semibold fs-35 lh-1 vertical-bottom">
                                           {{ $counts['productsSold'] }}
                                                            </span> </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                </div>
            
            
            
            
            
            
            
            
            
            
            <!--<div class="col-lg-12">-->
            <!--    <div class="row gutters-10">-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Customer-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">-->
            <!--                        {{ $counts['totalUsersCount'] }}-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class="d-block">Total</span>-->
            <!--                        Products-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['totalProductsCount'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Product category-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['categoryCount'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Product brand-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['brandCount'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
           
           
            <!--<div class="col-lg-12">-->
            <!--    <div class="row gutters-10">-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Sales Amount-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">-->
            <!--                        {{ $counts['salesAmount'] }}-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class="d-block">Total</span>-->
            <!--                        Orders-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['orderCount'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Completed Orders-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['orderCompletedCount'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-3">-->
            <!--            <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">-->
            <!--                <div class="px-3 pt-3">-->
            <!--                    <div class="fs-20">-->
            <!--                        <span class=" d-block">Total</span>-->
            <!--                        Products Sold-->
            <!--                    </div>-->
            <!--                    <div class="h3 fw-700 mb-3">{{ $counts['productsSold'] }}</div>-->
            <!--                </div>-->
            <!--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
            <!--                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"-->
            <!--                        d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">-->
            <!--                    </path>-->
            <!--                </svg>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    @endif


    @if (Auth::user()->user_type == 'admin' || in_array('1', json_decode(Auth::user()->staff->role->permissions)))
        <div class="row gutters-10">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">Orders This Month</h6>
                        <a href="{{ route('cache.clear', ['type' => 'orderMonthGraph']) }}"
                            class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                            <i class="la la-refresh fs-24"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-1" class="w-100" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">Orders Past 12 Months</h6>
                        <a href="{{ route('cache.clear', ['type' => 'orderYearGraph']) }}"
                            class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                            <i class="la la-refresh fs-24"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-2" class="w-100" height="400"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">Total Sales This Month</h6>
                        <a href="{{ route('cache.clear', ['type' => 'salesYearGraph']) }}"
                            class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                            <i class="la la-refresh fs-24"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-3" class="w-100" height="400"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">Total Sales 12 Months</h6>
                        <a href="{{ route('cache.clear', ['type' => 'salesYearGraph']) }}"
                            class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                            <i class="la la-refresh fs-24"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-4" class="w-100" height="400"></canvas>
                    </div>
                </div>
            </div>

        </div>
    @endif


    <div class="card">
        <div class="card-header row gutters-5">
            <div class="col">
                <h6 class="mb-0">Latest User Searches</h6>
            </div>

            <a href="{{ route('cache.clear', ['type' => 'searches']) }}"
                class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                <i class="la la-refresh fs-24"></i>
            </a>

            <a href="{{ route('user_search_report.index') }}" class="btn btn-primary">View All</a>
        </div>
        <div class="card-body">
            <table aria-describedby="" class="table table-bordered aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Search Key</th>
                        <th>User</th>
                        <th>IP Address</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($searches as $key => $searche)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $searche->query }}</td>
                            <td>
                                @if ($searche->user_id)
                                    <a href="{{ route('user_search_report.index', ['user_id' => $searche->user_id]) }}">
                                        {{ $searche->user->name }}
                                    </a>
                                @else
                                    GUEST
                                @endif
                            </td>
                            <td>{{ $searche->ip_address }}</td>
                            <td>{{ $searche->created_at->format('d-m-Y h:i:s A') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Top Selling Products</h6>

            <a href="{{ route('cache.clear', ['type' => 'topProducts']) }}"
                class="btn btn-sm btn-soft-secondary btn-circle mr-2">
                <i class="la la-refresh fs-24"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"
                data-md-items="3" data-sm-items="2" data-arrows='true'>
                @foreach ($topProducts as $key => $product)
                    <div class="carousel-box">
                        <div
                            class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="{{ route('product', $product->slug) }}" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px"
                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                        data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                        alt="{{ $product->name }}"
                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    @if (home_base_price($product) != home_discounted_base_price($product))
                                        <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                                    @endif
                                    <span class="fw-700 text-primary">{{ home_discounted_base_price($product) }}</span>
                                </div>
                                <h3 class="fw-600 fs-14 text-truncate-2 lh-1-4 mb-0">
                                    <a href="{{ route('product', $product->slug) }}"
                                        class="d-block text-reset">{{ $product->name }}</a>
                                </h3>
                                <div class="fs-13">
                                    Total sales: {{ $product->order_details_sum_quantity }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        AIZ.plugins.chart('#graph-1', {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($days as $day)
                        '{{ $day }}',
                    @endforeach
                ],
                datasets: [{
                    label: 'No:of orders recived this month',
                    data: [
                        {{ $orderMonthGraph['monthOrdersData'] }}
                    ],
                    backgroundColor: [
                        @foreach ($days as $key => $day)
                            'rgba(55, 125, 255, 0.4)',
                        @endforeach
                    ],
                    borderColor: [
                        @foreach ($days as $key => $day)
                            'rgba(55, 125, 255, 1)',
                        @endforeach
                    ],
                    borderWidth: 1
                }, {
                    label: 'No:of orders completed this month',
                    data: [
                        {{ $orderMonthGraph['monthOrdersCompletedData'] }}
                    ],
                    backgroundColor: [
                        @foreach ($days as $key => $day)
                            'rgba(43, 255, 112, 0.4)',
                        @endforeach
                    ],
                    borderColor: [
                        @foreach ($days as $key => $day)
                            'rgba(43, 255, 112, 1)',
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true,
                            precision: 0
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    }
                }
            }
        });


        AIZ.plugins.chart('#graph-2', {
            type: 'bar',
            data: {
                labels: {!! $orderYearGraph['all']['months'] !!},
                datasets: [{
                    type: 'bar',
                    label: 'No:of orders recived',
                    data: {{ $orderYearGraph['all']['counts'] }},
                    backgroundColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(55, 125, 255, 0.4)',
                        @endfor
                    ],
                    borderColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(55, 125, 255, 1)',
                        @endfor
                    ],
                    borderWidth: 1
                }, {
                    type: 'bar',
                    label: 'No:of orders completed',
                    data: {{ $orderYearGraph['completed']['counts'] }},
                    backgroundColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(43, 255, 112, 0.4)',
                        @endfor
                    ],
                    borderColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(43, 255, 112, 1)',
                        @endfor
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true,
                            precision: 0
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    }
                }
            }
        });

        AIZ.plugins.chart('#graph-3', {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($days as $day)
                        '{{ $day }}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Sales this month',
                    data: [
                        {{ $salesMonthGraph['monthSalesData'] }}
                    ],
                    backgroundColor: [
                        @foreach ($days as $key => $day)
                            'rgba(55, 125, 255, 0.4)',
                        @endforeach
                    ],
                    borderColor: [
                        @foreach ($days as $key => $day)
                            'rgba(55, 125, 255, 1)',
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true,
                            precision: 0
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    }
                }
            }
        });

        AIZ.plugins.chart('#graph-4', {
            type: 'line',
            data: {
                labels: {!! $orderYearGraph['all']['months'] !!},
                datasets: [{
                    type: 'line',
                    label: 'Total sales',
                    data: {{ $salesYearGraph['counts'] }},
                    backgroundColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(43, 255, 112, 0.4)',
                        @endfor
                    ],
                    borderColor: [
                        @for ($i = 0; $i < 12; $i++)
                            'rgba(43, 255, 112, 1)',
                        @endfor
                    ],
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10,
                            beginAtZero: true,
                            precision: 0
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Poppins',
                            fontSize: 10
                        }
                    }]
                },
                legend: {
                    labels: {
                        fontFamily: 'Poppins',
                        boxWidth: 10,
                        usePointStyle: true
                    }
                }
            }
        });
    </script>
@endsection


fire-gas
fire-detection
area-gas-detectors
gas-detection
fixed-gas-detection
portable-gas-detectors
wireless-gas-detection
fire-detection
fire-alarm-panels
smoke-detectors
heat-detectors
smoke-and-heat-detectors
flame-detectors
call-points
alarm-bells
bases
accessories-2
fire-suppression
fire-hose-reel

527,536,750,751,752,754,756,766,884,1062,1063,1232,1234,1235,1236,1310,1313,1314,1315,1316,1317,1320,1322,1323,1325,1326,1327,1488,1490,1491,1503,2502,2766,2815,2817,2818,300,309,886,887,888,1044,1149,1150,1151,1152,1153,1154,1155,1156,1157,1158,1159,1233,1489,1611,1613,1954,2158,2486,2487,2488,2489,2490,2491,2492,2493,2496,2497,2499,2500,2747,2823,3971,17,19,22,27,32,33,35,36,38,40,43,44,46,47,51,53,54,55,57,58,59,60,61,62,63,65,76,77,78,79,305,307,311,315,316,567,568,574,753,769,889,890,1043,1619,2139,2140,2141,2481,2482,2483,2765,80,592,608,610,612,619,998,999,1038,1090,1091,1092,1093,1094,1129,1130,1131,1132,1338,1339,1340,1341,1342,1343,1344,1345,1346,1347,1348,1349,1350,1351,1352,1353,1354,1355,1356,2756,2757,488,494,502,513,514,515,521,525,529,1328,1329,1330,1332,1333,1334,1335,1336,1337,2767,2814,2819,489,495,496,507,511,512,516,517,533,740,743,745,746,747,755,757,758,759,760,761,770,783,786,787,788,789,798,801,802,806,817,820,825,843,848,857,862,863,864,869,870,1694,1695,1696,1697,1698,1699,1700,1702,1703,1705,1706,1707,1708,1709,1710,1711,1712,1713,1714,1715,1716,1717,1718,1719,1720,1721,1722,1723,1724,1725,1727,1728,1729,1730,1731,1732,1733,1734,1736,1737,1739,1740,1741,1742,1743,1744,1745,1746,1747,1748,1749,1750,1751,1753,1754,1755,1756,1757,1758,1759,1760,1761,1762,1763,1764,1765,1766,1791,1792,1793,1794,1795,1799,1827,1828,1829,1830,1831,1832,1833,1834,1835,1836,1837,1838,1839,1840,1841,1842,1843,1844,1845,1846,1847,1848,1849,1850,1851,1852,1853,1854,1855,1856,1857,1858,1859,1860,1861,1862,1863,1864,1865,1866,1867,1868,1869,1870,1871,1872,1873,1874,1875,1876,1877,1878,1879,1880,1881,1882,1883,1884,1885,1886,1887,1888,1889,1890,1891,1892,1893,1894,1895,1896,1897,1898,1899,1900,1901,1902,1903,1904,1905,1906,1907,1908,1909,1910,1911,1912,1913,1914,1915,1916,1917,1918,1919,1920,1921,1922,2142,2143,2144,2145,2146,2147,2309,2469,2470,2742,2755,2759,2760,2761,490,491,492,493,497,498,499,500,504,505,509,510,518,520,522,523,524,526,528,530,531,532,535,537,538,741,742,744,748,749,762,763,764,765,767,771,772,773,774,775,776,777,778,780,781,782,784,785,790,791,792,795,797,799,800,803,804,805,807,808,809,810,811,812,813,814,815,816,818,819,821,822,826,827,829,830,831,832,833,834,835,836,837,838,839,840,841,842,844,845,846,847,849,851,852,853,854,855,856,859,860,865,867,868,871,872,873,875,877,878,879,880,881,882,883,1224,1788,1789,1811,1812,1813,1814,1815,1816,1817,1818,1819,1820,1821,1822,1823,1824,1825,1826,2504,2505,2749,2754,2758,2762,2763,2764,2816,2846,2847,3,4,5,6,7,8,16,25,29,50,74,318,319,320,328,331,542,892,893,894,895,900,904,906,913,915,917,920,922,924,926,928,930,1002,1009,1010,1011,1012,1013,1014,1015,1016,1017,1018,1019,1020,1021,1022,1023,1024,1025,1039,1040,1194,1195,2820,2821,2822,2849,10,11,12,14,15,39,41,48,49,64,66,68,70,71,72,73,299,301,302,303,304,306,308,310,312,317,321,322,323,324,325,326,327,330,539,540,541,654,680,682,684,891,1041,1042,1223,1241,1498,1726,1955,18,21,23,24,26,28,34,37,42,52,56,67,69,75,313,314,2278,9,768,794,850,866,876,1026,1027,1028,1029,1030,1031,1032,1033,1034,1035,1036,1037,1767,1768,1769,1770,1771,1772,1773,1774,1775,1776,1777,1778,1779,1780,1781,1782,1783,1784,1785,1786,1787,1790,1796,1797,1798,1800,1801,1802,1803,1804,1805,1806,1807,1808,1809,1810,2170,2171,2172,2173,2174


