@extends('frontend.layouts.app')

@section('content')
<!--****************** home section*************** -->
    <div class="section-home">
        <div class="container-fluid">
            <div class="home-slider owl-carousel owl-theme">
                <div class="home-item">
                    <div class="image">
                        <div class="image-lg">
                            <img class=" img-slide" src="{{ asset('frontend/assets/images/bac1.png') }}" alt="">
                        </div>
                        <div class="image-xs">
                            <img class=" img-slide" src="{{ asset('frontend/assets/images/bac22.png') }}" alt="">
                        </div>
                    </div>
                    <div class="slider-content col-md-6 col-sm-6 col-xs-6">
                        <h1 class="first-title">Natural Beauty</h1>
                        <h2 class="secound-title"> Dark Secret Eyeliner</h2>
                        <div class="shop">
                            <span class="btn">SHOP NOW</span>
                        </div>
                    </div>
                </div>

                <div class="home-item background-two">
                    <div class="image">
                        <div class="image-lg">
                            <img class=" img-slide" src="{{ asset('frontend/assets/images/bac2.png') }}" alt="">
                        </div>
                        <div class="image-xs">
                            <img class=" img-slide" src="{{ asset('frontend/assets/images/bac11.png') }}" alt="">
                        </div>
                    </div>
                    <div class="slider-content col-md-6 col-sm-6 col-xs-6">
                        <h1 class="first-title">Natural Beauty</h1>
                        <h2 class="secound-title"> Dark Secret Eyeliner</h2>
                        <div class="shop">
                            <span class="btn">SHOP NOW</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--****************** shopping section*************** -->
    <div class="section-shopping">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a href="">
                        <div class="item mb-3">
                            <div class="media shopping-item">
                                <div class="shopping-img">
                                    <img class="" src="{{ asset('frontend/assets/images/3.png') }}" alt="">
                                </div>
                                <div class="item-desc">
                                    <div class="shopping-desc">
                                        <h3 class="shopping-title">
                                            Make Up
                                        </h3>
                                        <h4 class="shopping-subtitle">
                                            Brush
                                        </h4>
                                    </div>
                                    <span class="shop-now">
                                        SHOP NOW
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-12">
                    <a href="">
                        <div class="item mb-3">
                            <div class="media shopping-item">
                                <div class="shopping-img">
                                    <img class="" src="{{ asset('frontend/assets/images/4.png') }}" alt="">
                                </div>
                                <div class="item-desc">
                                    <div class="shopping-desc">
                                        <h3 class="shopping-title">
                                            Make Up
                                        </h3>
                                        <h4 class="shopping-subtitle">
                                            Brush
                                        </h4>
                                    </div>
                                    <span class="shop-now">
                                        SHOP NOW
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-12">
                    <a href="">
                        <div class="item mb-3">
                            <div class="media shopping-item">
                                <div class="shopping-img">
                                    <img class="" src="{{ asset('frontend/assets/images/5.png') }}" alt="">
                                </div>
                                <div class="item-desc">
                                    <div class="shopping-desc">
                                        <h3 class="shopping-title">
                                            Make Up
                                        </h3>
                                        <h4 class="shopping-subtitle">
                                            Brush
                                        </h4>
                                    </div>
                                    <span class="shop-now">
                                        SHOP NOW
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<!--****************** products section*************** -->
    <div class="section-products non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">THE LATEST</h1>
                <h2 class="first-title primary-title">Trending Products</h2>
            </div>
            <div class="row slider-tablet">
                <div class="product-col col-lg-3 col-md-6">
                    <a href="">
                        <div class="item mb-5">
                            <div class="product-item slider-slide">
                                <div class="card-wrapper">
                                    <div class="card">
                                        <div class="media media--transparent media--square media--hover-effect">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/7.png') }}" alt="">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/6.png') }}" alt="">
                                        </div>
                                        <span class="sale">Sale</span>
                                        <div class="stars">
                                            <div class="star-icons">
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <div class="btn-info quick-view">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                            <div class="btn-info wishlist">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-information">
                                        <h5 class="product-title">
                                            Base Foundation
                                        </h5>
                                        <div class="price">
                                            <s class="price-item price-compare">
                                                $12.99
                                            </s>
                                            <span class="price-item">
                                                $10.00
                                            </span>
                                        </div>
                                        <div class="cart-btn-bottom">
                                            <span class="cart-btn btn"> Add to cart </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-col col-lg-3 col-md-6">
                    <a href="">
                        <div class="item mb-5">
                            <div class="product-item slider-slide">
                                <div class="card-wrapper">
                                    <div class="card">
                                        <div class="media media--transparent media--square media--hover-effect">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/7.png') }}" alt="">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/6.png') }}" alt="">
                                        </div>
                                        <span class="sale">Sale</span>
                                        <div class="stars">
                                            <div class="star-icons">
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <div class="btn-info quick-view">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                            <div class="btn-info wishlist">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-information">
                                        <h5 class="product-title">
                                            Base Foundation
                                        </h5>
                                        <div class="price">
                                            <s class="price-item price-compare">
                                                $12.99
                                            </s>
                                            <span class="price-item">
                                                $10.00
                                            </span>
                                        </div>
                                        <div class="cart-btn-bottom">
                                            <span class="cart-btn btn"> Add to cart </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-col col-lg-3 col-md-6">
                    <a href="">
                        <div class="item mb-5">
                            <div class="product-item slider-slide">
                                <div class="card-wrapper">
                                    <div class="card">
                                        <div class="media media--transparent media--square media--hover-effect">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/7.png') }}" alt="">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/6.png') }}" alt="">
                                        </div>
                                        <span class="sale">Sale</span>
                                        <div class="stars">
                                            <div class="star-icons">
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <div class="btn-info quick-view">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                            <div class="btn-info wishlist">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-information">
                                        <h5 class="product-title">
                                            Base Foundation
                                        </h5>
                                        <div class="price">
                                            <s class="price-item price-compare">
                                                $12.99
                                            </s>
                                            <span class="price-item">
                                                $10.00
                                            </span>
                                        </div>
                                        <div class="cart-btn-bottom">
                                            <span class="cart-btn btn"> Add to cart </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-col col-lg-3 col-md-6">
                    <a href="">
                        <div class="item mb-5">
                            <div class="product-item slider-slide">
                                <div class="card-wrapper">
                                    <div class="card">
                                        <div class="media media--transparent media--square media--hover-effect">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/7.png') }}" alt="">
                                            <img class="product-img" width="1000"
                                                src="{{ asset('frontend/assets/images/6.png') }}" alt="">
                                        </div>
                                        <div class="stars">
                                            <div class="star-icons">
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="star-icon">
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <div class="btn-info quick-view">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                            <div class="btn-info wishlist">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-information">
                                        <h5 class="product-title">
                                            Base Foundation
                                        </h5>
                                        <div class="price">
                                            <s class="price-item price-compare">
                                                $12.99
                                            </s>
                                            <span class="price-item">
                                                $10.00
                                            </span>
                                        </div>
                                        <div class="cart-btn-bottom">
                                            <span class="cart-btn btn"> Add to cart </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="slider-buttons no-js-hidden">
                <div class="slider-counter caption">
                    <span class="slider-counter--current">1</span>
                    <span aria-hidden="true"> / </span>
                    <span class="visually-hidden">of</span>
                    <span class="slider-counter--total">3</span>
                </div>
                <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left"
                    disabled="disabled">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                        viewBox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                            fill="currentColor"></path>
                    </svg>



                </button>
                <button type="button" class="slider-button slider-button--next" name="next"
                    aria-label="Slide right">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                        viewBox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                            fill="currentColor"></path>
                    </svg>



                </button>
            </div>

            <span class="btn" aria-label="View all">
                View all
            </span>
        </div>
    </div>

<!--****************** category section*************** -->
    <div class="section-category non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">THE LATEST</h1>
                <h2 class="first-title primary-title">Our Category</h2>
            </div>
            <div class="slider-content">
                <div class="galleryfilter">
                    <button class="btn active" data-rel="Lipstick" onclick="filterObjects('all')">
                        Lipstick
                    </button>
                    <button class="btn" data-rel="Make-Up-Brush" onclick="filterObjects('Make-Up-Brush')">
                        Make-Up-Brush
                    </button>
                    <button class="btn" data-rel="Nail-Art" onclick="filterObjects('Nail-Art')">
                        Nail-Art
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 all" data-category="Lipstick">
                    <a href="">
                        <div class="item mb-3">
                            <div class="category-item box Lipstick">
                                <div class="image-container">
                                    <div class="media image-hover scale" style="padding-bottom: 108.10810810810811%;">
                                        <img class="category-img" alt="Category Image"
                                            src="{{ asset('frontend/assets/images/8.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12" data-category="Make-Up-Brush">
                    <a href="">
                        <div class="item mb-3">
                            <div class="category-item box Make-Up-Brush ">
                                <div class="image-container">
                                    <div class="media image-hover scale" style="padding-bottom: 108.10810810810811%;">
                                        <img class="category-img" alt="Category Image"
                                            src="{{ asset('frontend/assets/images/10.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 " data-category="Nail-Art">
                    <a href="">
                        <div class="item mb-3">
                            <div class="category-item box Nail-Art">
                                <div class="image-container">
                                    <div class="media image-hover scale" style="padding-bottom: 108.10810810810811%;">
                                        <img class="category-img" alt="Category Image"
                                            src="{{ asset('frontend/assets/images/9.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

<!--****************** services section*************** -->

    <div class="section-service non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">THE LATEST</h1>
                <h2 class="first-title primary-title">Our Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="">
                        <div class="item mb-3">
                            <div class="service-item">
                                <div class="service-img">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="service-block">
                                    <div class="service-title">Free Delivery</div>
                                    <p class="service-desc">Lorem Ipsum is simply dummy text of the Testing online.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="">
                        <div class="item mb-3">
                            <div class="service-item">
                                <div class="service-img">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="service-block">
                                    <div class="service-title">Free Delivery</div>
                                    <p class="service-desc">Lorem Ipsum is simply dummy text of the Testing online.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="">
                        <div class="item mb-3">
                            <div class="service-item">
                                <div class="service-img">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="service-block">
                                    <div class="service-title">Free Delivery</div>
                                    <p class="service-desc">Lorem Ipsum is simply dummy text of the Testing online.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="">
                        <div class="item mb-3">
                            <div class="service-item">
                                <div class="service-img">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="service-block">
                                    <div class="service-title">Free Delivery</div>
                                    <p class="service-desc">Lorem Ipsum is simply dummy text of the Testing online.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--****************** brands section************ -->
    <div class="section-brands">
        <div class="container">
            <div class="brands-slider owl-carousel owl-theme">
                <div class="brands-item">
                    <div class="image">
                        <img class=" img-slide" src="{{ asset('frontend/assets/images/brand.png') }}" alt="">
                    </div>
                </div>
                <div class="brands-item">
                    <div class="image">
                        <img class=" img-slide" src="{{ asset('frontend/assets/images/brand.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

<!--****************** blog section************ -->
    <div class="section-blog non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">NEWS & EVENTS</h1>
                <h2 class="first-title primary-title">Latest Blog</h2>
            </div>

            <div class="blog-slider owl-carousel owl-theme">
                <a href="">
                    <div class="item mb-3">
                        <div class="blog-item">
                            <div class="blog-desc">
                                <div class="blog-img">
                                    <img alt="Scelerisque vestibulum urna"
                                        src="{{ asset('frontend/assets/images/blog1.png') }}">
                                </div>
                                <div class="blog-date">
                                    <span class="date">
                                        <span class="day-date">29</span>
                                        <span class="day-month">Jun</span>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title">
                                    Scelerisque vestibulum urna
                                </h4>
                                <p class="rte content-desc">
                                    Faded short sleeves t-shirt with high neckline. Soft and stretchy material
                                    for a comfor...
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="">
                    <div class="item mb-3">
                        <div class="blog-item">
                            <div class="blog-desc">
                                <div class="blog-img">
                                    <img alt="Scelerisque vestibulum urna"
                                        src="{{ asset('frontend/assets/images/blog1.png') }}">
                                </div>
                                <div class="blog-date">
                                    <span class="date">
                                        <span class="day-date">29</span>
                                        <span class="day-month">Jun</span>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title">
                                    Scelerisque vestibulum urna
                                </h4>
                                <p class="rte content-desc">
                                    Faded short sleeves t-shirt with high neckline. Soft and stretchy material
                                    for a comfor...
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

<!--****************** follow section************ -->

    <div class="section-follow non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">FOLLOW US</h1>
                <h2 class="first-title primary-title">@glamour</h2>
            </div>


            <div class="follow-slider owl-carousel owl-theme">
                <a href="">
                    <div class="item">
                        <div class="follow-item" style="margin-right: 0px; margin-left: 0px;">
                            <div class="follow-image">
                                <img alt="Instagram" src="{{ asset('frontend/assets/images/follow.png') }}">
                                <div class="follow-overlay">
                                    <span></span>
                                </div>
                                <span class="instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="follow-content">
                                <span class="likes"><span class="likes-count">18k</span>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </span>
                                <span class="comments">
                                    <span class="comments-count">1k</span>
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
