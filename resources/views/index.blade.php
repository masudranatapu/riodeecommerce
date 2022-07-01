@extends('layouts.frontend.app')

@section('title')
    {{$title}}
@endsection

@section('meta')

@endsection

@push('css')

@endpush

@section('content')
    <div class="page-content">
        <section class="intro-section container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 mb-4 mb-lg-0">
                    <div class="intro-slider animation-slider owl-carousel owl-theme owl-dot-inner row cols-1 gutter-no"
                        data-owl-options="{
                        'items': 1,
                        'dots': true,
                        'loop': true
                    }">
                        <div class="intro-slide1 banner banner-fixed" style="background-color: #e8e8ea">
                            <figure>
                                <img src="images/slides/1.jpg" alt="banner" width="580"
                                    height="460" />
                            </figure>
                        </div>
                        <div class="intro-slide2 banner banner-fixed" style="background-color: #7a7675">
                            <figure>
                                <img src="images/slides/2.jpg" alt="banner" width="580"
                                    height="460" />
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 mb-4 d-md-show">
                    <div class="intro-banner banner banner-fixed overlay-dark">
                        <figure>
                            <img class="x-50" src="images/banner/drone.png" alt="product"
                                width="346" height="193" />
                        </figure>
                        <div class="banner-content x-50 y-50 text-center d-flex flex-column align-items-center">
                            <p class="text-white font-primary text-uppercase flex-1 lh-1 appear-animate"
                                data-animation-options="{
                                'name': 'maskUp'
                            }">Through <br /><span class="d-inline-block mt-1 ls-normal">Riode Birthday</span>
                            </p>
                            <h4 class="banner-subtitle mb-1 text-uppercase ls-normal font-weight-normal appear-animate"
                                data-animation-options="{
                                'name': 'fadeInDownShorter',
                                'delay': '.3s'
                            }">Up to 70% Off</h4>
                            <h3 class="banner-title ls-md font-weight-bold appear-animate"
                                data-animation-options="{
                                'name': 'fadeInDownShorter',
                                'delay': '.2s'
                            }">Portable Drone SD9</h3>
                            <a href="#" class="btn btn-dark btn-md btn-rounded appear-animate"
                                data-animation-options="{
                                'name': 'fadeInDownShorter'
                            }">Buy drone</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-categories pt-5 pb-5 grey-section d-md-show">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0">Top Categories</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="owl-carousel hot-carousel">
                
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/1.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/2.png" alt="category" class="p-2" />
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Fashion &amp; Clothings</a></h4>                               
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/3.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Computers</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.4s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/4.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Home &amp; Kitchen</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/5.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Beauty &amp; Fragrance</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/6.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Jewelry &amp; Watches</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/categories/6.png" alt="category" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Jewelry &amp; Watches</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="brands pt-5 pb-5 d-md-show">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0 text-capitalize">our brands</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/ab.png" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">AB Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/ag-food-logo.png" alt="Brands" class="p-2" />
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">AG Foods</a></h4>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/apex.png" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Apex Shoes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.4s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/bajaj.png" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Bajaj motors</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/bdfood.png" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">BD Foods</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/canonlogo.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Canon Camera</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/click-logo.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Click Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/electro.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Electro Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/eshop.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Eshop</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/fellows.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Fellows</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/fresh.png" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Fresh Groceries</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/hero.jpg" alt="Brands" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Hero Motors</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shops pt-5 pb-5 grey-section  d-md-show">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0 text-capitalize">our shops</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/minister.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Minister</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/mk.png" alt="Shop" class="p-2" />
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">MK Electronics</a></h4>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/onestop.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">One Stop</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.4s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/rangs.png" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Rangs</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/samsung.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Samsung electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/square.png" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Square Group</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/TCL-Logo.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">TCL Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/vigo-logo.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">VIGO Electronics</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/vision.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Vision Accessories</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/Vivo-logo.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">VIVO Smart Phones</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/walton.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Walton Accessories</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  col-6 mb-4">
                        <div class="category category-group-image p-2 d-block h-100 appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="#">
                                <figure class="category-media">
                                    <img src="images/custom/hero.jpg" alt="Shop" class="p-2"/>
                                </figure>
                            </a>
                            <div class="category-content pb-2 pt-2 text-center d-block border-top">
                                <h4 class="category-name mb-0"><a href="shop.html">Hero Motors</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hot-products pt-5 pb-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0">Hot Products</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="owl-carousel hot-carousel">
                    
                <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/1.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Fashion Sports Cap</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/4.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Women's Fashion HandBag</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </section>
        <section class="new-products pt-5 pb-5 grey-section">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0">New Products</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="owl-carousel hot-carousel">
                    
                <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/1.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Fashion Sports Cap</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/4.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Women's Fashion HandBag</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </section>
        <section class="tranding-now pt-5 pb-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                    <h2 class="title title-line mb-0 pb-0">Tranding Now</h2>
                    <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="owl-carousel hot-carousel">
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/4.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Women's Fashion HandBag</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/3.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Black Jeans Trousers</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/2.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Men's Fashion Hood</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="">
                        <div class="product text-center appear-animate">
                            <figure class="product-media">
                                <a href="demo22-product.html">
                                    <img src="images/products/1.jpg" alt="product"
                                        width="220" height="206">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist"
                                        title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo22-product.html">Fashion Sports Cap</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#2547 199.00</ins><del
                                        class="old-price">&#2547 210.00</del>
                                </div>
                                <div class="product-action">
                                    <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
        </section>
        <section class="pt-5 pb-5 grey-section">
            <div class="container pb-4">
            <div class="d-flex justify-content-between align-items-center border-bottom border-1 mb-4 pb-3">
                <h2 class="title title-line mb-0 pb-0 text-capitalize">All Products</h2>
                <a href="#" class="text-capitalize">view more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
                <div class="product-wrapper gutter-no appear-animate">
                    <div class="">
                        <div class="row line-custom">
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-label-group">
                                            <span class="product-label label-sale">25% off</span>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-label-group">
                                            <span class="product-label label-new">New</span>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/1.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Fashion Sports Cap</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/2.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Men's Fashion Hood</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/5.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Dark Blue Suede Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/6.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Brown Leather Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/4.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Women's Fashion HandBag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-5">
                                <div class="product text-center appear-animate">
                                    <figure class="product-media">
                                        <a href="demo22-product.html">
                                            <img src="images/products/3.jpg" alt="product"
                                                width="220" height="206">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="demo22-product.html">Black Jeans Trousers</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">&#2547 199.00</ins><del
                                                class="old-price">&#2547 210.00</del>
                                        </div>
                                        <div class="product-action">
                                            <a href="product.html" class="btn-product btn-sm ml-0 text-capitalize rounded-pill" title="Quick View">buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-sm-custom btn-rounded" type="submit">Load More <i class="fas fa-angle-double-right pl-1"></i></button>
                    </div>
                </div>
                
                
                
            </div>
        </section>
        <section class="container appear-animate">
            <div class="service-list">
                <div class="owl-carousel owl-theme owl-middle row cols-lg-4 cols-md-3 cols-sm-2 cols-2"
                    data-owl-options="{
                    'items': 4,
                    'margin': 20,
                    'dots': false,
                    'autoplay': true,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
                    <div class="icon-box text-center appear-animate" data-animation-options="{
                    'name':'zoomInLeft',
                    'delay': '.2s'
                }">
                        <i class="icon-box-icon d-icon-truck" style="font-size: 4.4rem;"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Free Shipping &amp; Return</h4>
                            <p>Free shipping on orders over &#2547 99</p>
                        </div>
                    </div>
                    <div class="icon-box text-center appear-animate" data-animation-options="{
                    'name':'zoomInLeft',
                    'delay': '.3s'
                }">
                        <i class="icon-box-icon d-icon-headphone" style="font-size: 3.4rem"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Customer Support 24/7</h4>
                            <p>Instant access to perfect support</p>
                        </div>
                    </div>
                    <div class="icon-box text-center appear-animate" data-animation-options="{
                    'name':'zoomInLeft',
                    'delay': '.4s'
                }">
                        <i class="icon-box-icon d-icon-secure" style="font-size: 3.7rem"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">100% Secure Payment</h4>
                            <p>We ensure secure payment!</p>
                        </div>
                    </div>
                    <div class="icon-box text-center appear-animate" data-animation-options="{
                    'name':'zoomInLeft',
                    'delay': '.5s'
                }">
                        <i class="icon-box-icon d-icon-money" style="font-size: 3.2rem"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Money Back guarantee</h4>
                            <p>Any back within 30days</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')

@endpush