@extends('website.layouts.master')

@section('title', 'Home')



@section('body')
    <!-- START SECTION BANNER -->
    <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item background_bg active" data-img-src="{{asset('/')}}website/assets/images/banner16.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">LED 75 INCH F58</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s">Get up to <span class="text_default">50%</span> off Today Only!</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="{{asset('/')}}website/assets/images/banner17.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">Smart Phones</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s"><span class="text_default">50%</span> off in all products</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="{{asset('/')}}website/assets/images/banner18.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-10">
                                    <div class="banner_content overflow-hidden">
                                        <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="0.5s">Beat Headphone</h2>
                                        <h5 class="mb-3 mb-sm-4 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="1s">Taking your Viewing Experience to Next Level</h5>
                                        <a class="btn btn-fill-out staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i class="ion-chevron-left"></i></a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i class="ion-chevron-right"></i></a>
        </div>
    </div>
    <!-- END SECTION BANNER -->
    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION BANNER -->
        <div class="section pb_20 small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{asset('/')}}website/assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{asset('/')}}website/assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{asset('/')}}website/assets/images/shop_banner_img9.jpg" alt="shop_banner_img9">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START SECTION CATEGORIES -->
        <div class="section small_pb small_pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s4 text-center">
                            <h2>Top Categories</h2>
                        </div>
                        <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                            @foreach($categories as $category)
                                <div class="item">
                                    <div class="categories_box">
                                        <a href="#">
                                            <img src="{{ $category->image }}" height="120" width="80" alt="cat_img1"/>
                                            <span>{{ $category->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CATEGORIES -->

        <!-- START SECTION SHOP -->
        <div class="section small_pb small_pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Exclusive Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="tab_slider tab-content">
                            <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                <div id="product_box" class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    @foreach($products as $product)
                                        <div class="item">
                                            <div class="product_wrap">
                                                <div class="">
                                                    <a href="{{ route('product.detail', $product->id) }}">
                                                        <img src="{{ $product->main_image }}" height="220" class="rounded-2" alt="el_img1">
{{--                                                        @if(isset($product?->otherImages[1]))--}}
{{--                                                            <img class="product_hover_img" src="{{ $product?->otherImages[1]->image }}" alt="el_hover_img1">--}}
{{--                                                        @endif--}}
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="{{ route('product.detail', $product->id) }}">{{ substr($product->name, 0, 22) }}</a></h6>
                                                    <div class="product_price">
                                                        <span class="price">Tk.{{ $product->selling_price }}</span>
                                                        <del>Tk.{{ $product->regular_price }}</del>
{{--                                                        @if($product->discount)--}}
{{--                                                            <div class="on_sale">--}}
{{--                                                                <span>{{ $product->discount }} Off</span>--}}
{{--                                                            </div>--}}
{{--                                                        @endif--}}
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:80%"></div>
                                                        </div>
                                                        <span class="rating_num">(21)</span>
                                                    </div>
                                                    <div class="row flex-column mt-2">
                                                        <button
                                                            @if(isProductInCart($product->id))
                                                                disabled
                                                            @endif
                                                            type="button"
                                                            class="d-block btn btn-sm btn-pink mb-1 text-white"
                                                            style="background: #FF324D"
                                                            onclick="addToCart({{ $product->id }})"
                                                            id="cartAddBtn{{$product->id}}"
                                                        >{{ isProductInCart($product->id) ? 'Added in cart' : 'Add to cart' }}</button>

                                                        <a href="{{ route('direct.checkout', $product->id) }}" class=" btn btn-sm btn-dark ms-0">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img7.jpg" alt="el_img7">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img8.jpg" alt="el_img8">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img8.jpg" alt="el_hover_img8">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img9.jpg" alt="el_img9">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img9.jpg" alt="el_hover_img9">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-success">Sale</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img10.jpg" alt="el_img10">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img10.jpg" alt="el_hover_img10">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">classical Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img11.jpg" alt="el_img11">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed HDMI</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img12.jpg" alt="el_img12">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img8.jpg" alt="el_img8">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img8.jpg" alt="el_hover_img8">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Surveillance camera</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img4.jpg" alt="el_img4">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img4.jpg" alt="el_hover_img4">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio Equipment</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img11.jpg" alt="el_img11">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img11.jpg" alt="el_hover_img11">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Basics High-Speed HDMI</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$69.00</span>
                                                    <del>$89.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:70%"></div>
                                                    </div>
                                                    <span class="rating_num">(22)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img1.jpg" alt="el_img1">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img1.jpg" alt="el_hover_img1">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Red & Black Headphone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img7.jpg" alt="el_img7">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <span class="pr_flash bg-danger">Hot</span>
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img6.jpg" alt="el_img6">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img6.jpg" alt="el_hover_img6">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Samsung Smart Phone</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img2.jpg" alt="el_img2">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img2.jpg" alt="el_hover_img2">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Watch External</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$55.00</span>
                                                    <del>$95.00</del>
                                                    <div class="on_sale">
                                                        <span>25% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img9.jpg" alt="el_img9">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img9.jpg" alt="el_hover_img9">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">oppo Reno3 Pro</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$68.00</span>
                                                    <del>$99.00</del>
                                                    <div class="on_sale">
                                                        <span>20% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:87%"></div>
                                                    </div>
                                                    <span class="rating_num">(25)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img7.jpg" alt="el_img7">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img7.jpg" alt="el_hover_img7">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Audio Theaters</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img5.jpg" alt="el_img5">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img5.jpg" alt="el_hover_img5">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Smart Televisions</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <img src="{{asset('/')}}website/assets/images/el_img12.jpg" alt="el_img12">
                                                    <img class="product_hover_img" src="{{asset('/')}}website/assets/images/el_hover_img12.jpg" alt="el_hover_img12">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="shop-product-detail.html">Sound Equipment for Low</a></h6>
                                                <div class="product_price">
                                                    <span class="price">$45.00</span>
                                                    <del>$55.25</del>
                                                    <div class="on_sale">
                                                        <span>35% Off</span>
                                                    </div>
                                                </div>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>
                                                <div class="pr_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION BANNER -->
        <div class="section pb_20 small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sale-banner mb-3 mb-md-4">
                            <a class="hover_effect1" href="#">
                                <img src="{{asset('/')}}website/assets/images/shop_banner_img11.png" alt="shop_banner_img11">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Trending Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
                            @foreach($trendingProducts as $product)
                                <div class="item">
                                    <div class="product_wrap">
                                        <div class="">
                                            <a href="{{ route('product.detail', $product->id) }}">
                                                <img src="{{ $product->main_image }}" height="220" class="rounded-2" alt="el_img1">
{{--                                                @if(isset($product?->otherImages[1]))--}}
{{--                                                    <img class="product_hover_img" src="{{ $product?->otherImages[1]->image }}" alt="el_hover_img1">--}}
{{--                                                @endif--}}
                                            </a>

                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="{{ route('product.detail', $product->id) }}">{{ $product->name }}</a></h6>
                                            <div class="product_price">
                                                <span class="price">Tk.{{ $product->selling_price }}</span>
                                                <del>Tk.{{ $product->regular_price }}</del>
{{--                                                @if($product->discount)--}}
{{--                                                    <div class="on_sale bg-danger p-2 absolute top-2 left-5">--}}
{{--                                                        <span>{{ $product->discount }} Off</span>--}}
{{--                                                    </div>--}}
{{--                                                @endif--}}
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num">(21)</span>
                                            </div>
                                            <div class="row flex-column mt-2">
                                                <button
                                                    @if(isProductInCart($product->id))
                                                        disabled
                                                    @endif
                                                    type="button"
                                                    class="d-block btn btn-sm btn-pink mb-1 text-white"
                                                    style="background: #FF324D"
                                                    onclick="addToCart({{ $product->id }})"
                                                    id="cartAddBtn{{$product->id}}"
                                                >{{ isProductInCart($product->id) ? 'Added in cart' : 'Add to cart' }}</button>

                                                <a href="{{ route('direct.checkout', $product->id) }}" class=" btn btn-sm btn-dark ms-0">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION TESTIMONIAL -->
        <div class="section bg_redon">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Our Client Say!</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items='1'>
                            <div class="testimonial_box">
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                                </div>
                                <div class="author_wrap">
                                    <div class="author_img">
                                        <img src="{{asset('/')}}website/assets/images/user_img1.jpg" alt="user_img1" />
                                    </div>
                                    <div class="author_name">
                                        <h6>Lissa Castro</h6>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_box">
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                                </div>
                                <div class="author_wrap">
                                    <div class="author_img">
                                        <img src="{{asset('/')}}website/assets/images/user_img2.jpg" alt="user_img2" />
                                    </div>
                                    <div class="author_name">
                                        <h6>Alden Smith</h6>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_box">
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                                </div>
                                <div class="author_wrap">
                                    <div class="author_img">
                                        <img src="{{asset('/')}}website/assets/images/user_img3.jpg" alt="user_img3" />
                                    </div>
                                    <div class="author_name">
                                        <h6>Daisy Lana</h6>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_box">
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem.</p>
                                </div>
                                <div class="author_wrap">
                                    <div class="author_img">
                                        <img src="{{asset('/')}}website/assets/images/user_img4.jpg" alt="user_img4" />
                                    </div>
                                    <div class="author_name">
                                        <h6>John Becker</h6>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION TESTIMONIAL -->

        <!-- START SECTION CLIENT LOGO -->
        <div class="section small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo1.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo2.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo3.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo4.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo5.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo6.png" alt="cl_logo"/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="{{asset('/')}}website/assets/images/cl_logo7.png" alt="cl_logo"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CLIENT LOGO -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="newsletter_text text_white">
                            <h3>Join Our Newsletter Now</h3>
                            <p> Register now to get updates on promotions. </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form2">
                            <form>
                                <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    </div>
    <!-- END MAIN CONTENT -->
@endsection

@push('scripts')
    <script>
        function addToCart( productId) {

            $.ajax({
                method: 'POST',
               url: '/cart-add-via-ajax',
                data: {
                    product_id: productId,
                    qty: 1,
                    _token: '{{ csrf_token() }}'
                },
                success: (data) => {
                    if(data.success) {
                        const btn = document.querySelector('#cartAddBtn'+ productId);
                        btn.setAttribute('disabled', true);
                        btn.innerText = "Added To Cart";
                        toastr.success(data.success)
                    }
                    if(data.warning) {
                        toastr.warning(data.warning)
                    }
                },
                error: (error) => {
                    console.error(error)
                }
            });

        }
    </script>
@endpush
