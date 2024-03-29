@extends('fornt-end.master')
@section('content')

    <div class="popup_wrapper">
        <div class="test">
            <span class="popup_off"><i class="ion-android-close"></i></span>
            <div class="subscribe_area">
                <h2>Sign Up Newsletter</h2>
                <p>Subscribe to the our store mailing list to receive updates on new arrivals, special offers and other
                    discount information.</p>
                <div class="subscribe-form-group">
                    <form class="subscribe-form" action="#">
                        <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                        <button type="submit">subscribe</button>
                    </form>
                </div>
                <div class="subscribe-bottom">
                    <input type="checkbox" id="newsletter-permission">
                    <label for="newsletter-permission">Don't show this popup again</label>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Newsletter Popup Area Here -->

    <!-- Begin Hiraola's Header Main Area -->


    <div class="hiraola-banner_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_2.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_3.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_4.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Area -->
    <div class="hiraola-product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hiraola-section_title">
                        <h4>New Arrival</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hiraola-product_slider">
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Pendant, Made of White
                                                Pl...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£120.80</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Swirl 1 Medium Pendant
                                                La...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£120.80</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">Sale</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Work Lamp Silver Proin
                                                he...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£135.20</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Work Lamp Silver Proin
                                                he...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£135.20</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-1.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker-2">Sale</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Vitra Sunburst Clock
                                                pret...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£1199.60</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Light Inverted Pendant
                                                Qu...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£110.00</span>
                                            <span class="old-price">£110.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">JWDA Penant Lamp Brshed</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="new-price">£602.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                        <!-- Begin Hiraola's Slide Item Area -->
                        <div class="slide-item">
                            <div class="single_product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                        <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                            </li>
                                            <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                        class="ion-ios-shuffle-strong"></i></a></li>
                                            <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                        class="ion-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hiraola-product_content">
                                    <div class="product-desc_info">
                                        <h6><a class="product-name" href="single-product.html">Suspensions Aplomb Large
                                                ...</a></h6>
                                        <div class="price-box">
                                            <span class="new-price">£602.00</span>
                                        </div>
                                        <div class="additional-add_action">
                                            <ul>
                                                <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                            class="ion-android-favorite-outline"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li><i class="fa fa-star-of-david"></i></li>
                                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hiraola's Slide Item Area End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Area End Here -->

    <div class="static-banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="static-banner-image">
                        <div class="static-banner-content">
                            <p><span>-25% Off</span>This Week</p>
                            <h2>Featured Product</h2>
                            <h3>Meito Accessories 2022</h3>
                            <p class="schedule">
                                Starting at
                                <span> £1209.00</span>
                            </p>
                            <div class="hiraola-btn-ps_left">
                                <a href="shop-left-sidebar.html" class="hiraola-btn">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Tab Area -->
    <div class="hiraola-product-tab_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <div class="hiraola-tab_title">
                            <h4>New Products</h4>
                        </div>
                        <ul class="nav product-menu">
                            <li><a class="active" data-bs-toggle="tab" href="#necklaces"><span>Necklaces</span></a></li>
                            <li><a data-bs-toggle="tab" href="#earrings"><span>Earrings</span></a></li>
                            <li><a data-bs-toggle="tab" href="#bracelet"><span>Bracelet</span></a></li>
                            <li><a data-bs-toggle="tab" href="#anklet"><span>Anklet</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="necklaces" class="tab-pane active show" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="earrings" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="bracelet" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="anklet" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£99.60</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Tab Area End Here -->

    <div class="hiraola-banner_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_5.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_6.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Tab Area Two -->
    <div class="hiraola-product-tab_area-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-bs-toggle="tab" href="#necklaces-1"><span>Necklaces</span></a></li>
                            <li><a data-bs-toggle="tab" href="#earrings-1"><span>Earrings</span></a></li>
                            <li><a data-bs-toggle="tab" href="#bracelet-1"><span>Bracelet</span></a></li>
                            <li><a data-bs-toggle="tab" href="#anklet-1"><span>Anklet</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="necklaces-1" class="tab-pane active show" role="tabpanel">
                            <div class="hiraola-product-tab_slider-3">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="earrings-1" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-3">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="bracelet-1" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-3">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="anklet-1" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-3">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£99.60</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Tab Area TwoEnd Here -->

    <div class="hiraola-banner_area-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_5.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_6.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-item img-hover_effect">
                        <a href="shop-left-sidebar.html">
                            <img class="img-full" src="{{asset('fornt-end-assets')}}/assets/images/banner/1_5.jpg" alt="Hiraola's Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Hiraola's Product Tab Area Three -->
    <div class="hiraola-product-tab_area-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab">
                        <div class="hiraola-tab_title">
                            <h4>Trending Products</h4>
                        </div>
                        <ul class="nav product-menu">
                            <li><a class="active" data-bs-toggle="tab" href="#necklaces-2"><span>Necklaces</span></a></li>
                            <li><a data-bs-toggle="tab" href="#earrings-2"><span>Earrings</span></a></li>
                            <li><a data-bs-toggle="tab" href="#bracelet-2"><span>Bracelet</span></a></li>
                            <li><a data-bs-toggle="tab" href="#anklet-2"><span>Anklet</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content hiraola-tab_content">
                        <div id="necklaces-2" class="tab-pane active show" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£99.60</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="earrings-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">1 - 2 Person Outdoor
                                                        Camp...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£30.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Puoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">George Nelson
                                                        Sunburst Cl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£70.00</span>
                                                    <span class="old-price">£85.00</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="bracelet-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                        <div id="anklet-2" class="tab-pane" role="tabpanel">
                            <div class="hiraola-product-tab_slider-2">
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£90.36</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£76.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-3.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker-2">Sale</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Work Lamp Silver
                                                        Proin
                                                        he...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£35.20</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-2.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Global Knives:
                                                        Profession...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£60.25</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-6.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Flash Furniture
                                                        Alonza Se...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£77.44</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-5.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Pwoly and Bark Eames
                                                        Styl...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£23.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                                <!-- Begin Hiraola's Slide Item Area -->
                                <div class="slide-item">
                                    <div class="single_product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="primary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-4.jpg" alt="Hiraola's Product Image">
                                                <img class="secondary-img" src="{{asset('fornt-end-assets')}}/assets/images/product/medium-size/1-7.jpg" alt="Hiraola's Product Image">
                                            </a>
                                            <div class="add-actions">
                                                <ul>
                                                    <li><a class="hiraola-add_cart" href="cart.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                    </li>
                                                    <li><a class="hiraola-add_compare" href="compare.html" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                class="ion-ios-shuffle-strong"></i></a>
                                                    </li>
                                                    <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hiraola-product_content">
                                            <div class="product-desc_info">
                                                <h6><a class="product-name" href="single-product.html">Utensils and Knives
                                                        Block...</a></h6>
                                                <div class="price-box">
                                                    <span class="new-price">£50.43</span>
                                                </div>
                                                <div class="additional-add_action">
                                                    <ul>
                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li><i class="fa fa-star-of-david"></i></li>
                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hiraola's Slide Item Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Product Tab Area Three End Here -->

    <!-- Begin Hiraola's Shipping Area -->
    <div class="hiraola-shipping_area">
        <div class="container">
            <div class="shipping-nav">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="{{asset('fornt-end-assets')}}/assets/images/shipping-icon/1.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Free Uk Standard Delivery</h6>
                                <p>Designated day delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="{{asset('fornt-end-assets')}}/assets/images/shipping-icon/2.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Freshyly Prepared Ingredients</h6>
                                <p>Made for your delivery date</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="{{asset('fornt-end-assets')}}/assets/images/shipping-icon/3.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>98% Of Anta Clients</h6>
                                <p>Reach their personal goals set</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img src="{{asset('fornt-end-assets')}}/assets/images/shipping-icon/4.png" alt="Hiraola's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Winner Of 15 Awards</h6>
                                <p>Healthy food and drink 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Shipping Area End Here -->
@endsection
