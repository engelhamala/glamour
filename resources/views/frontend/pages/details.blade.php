@extends('frontend.layouts.app')

@section('content')
    <!--******************  section*************** -->


    <!--****************** trend section************ -->
    <div class="section-trend non-after text-center">
        <div class="container">


            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div id="trend-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren3.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren3.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/tren3.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-6 col-sm-12">
                    <div class="trend-description">
                        <h5 class="product-title">
                            Base Foundation
                        </h5>
                        <div class="review d-flex align-items-center">
                            <div class="star">
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
                            <a href="" class="write">
                                <span>Write Review</span>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="price">
                            <s class="price-item price-compare">
                                $12.99
                            </s>
                            <span class="price-item">
                                $10.00
                            </span>
                        </div>
                        <div class="product-information">
                            <p class="product-single">Vendor : <span>glamour</span></p>
                            <p class="product-single">Product Type : <span>beauty</span></p>
                        </div>

                        <div class="wishlist-sizechart">
                            <div class="wishlist">
                                <a class="wishlist-btn">
                                    <i class="fa fa-heart"></i>
                                    <span class="tooltip-label"> Add to wishlist</span></a>
                            </div>
                            <div class="size-chart">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon"
                                    viewBox="0 0 640 512">
                                    <svg x="0%" y="4%">
                                        <path fill="currentColor"
                                            d="M608 128H32c-17.67 0-32 14.33-32 32v192c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V160c0-17.67-14.33-32-32-32zm-16 208H48V176h64v56c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-56h64v56c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-56h64v56c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-56h64v56c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-56h64v56c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-56h64v160z">
                                        </path>
                                    </svg>
                                </svg>
                                <span class="tooltip-label">Sizechart</span>
                            </div>

                        </div>

                        <div class="progress-information">
                            <div class="progress-content" data-quantity="10">
                                <div class="quantity-value">
                                    Hurry! Only
                                    <div id="variant-stock" class="variant-quantity">
                                        5
                                    </div>
                                    units left in stock!
                                </div>
                                <div id="progress-bar">
                                    <span style="width: 40%;"></span>
                                </div>
                            </div>
                            <span id="variant-32531043811399" data-stock="5" class="selected-variant"></span>
                            <span id="variant-32531043844167" data-stock="4"></span>
                            <span id="variant-32531043876935" data-stock="7"></span>
                            <span id="variant-32531043909703" data-stock="4"></span>
                            <span id="variant-32531043942471" data-stock="1"></span>
                            <span id="variant-32531043975239" data-stock="4"></span>
                            <span id="variant-32531044008007" data-stock="78"></span>
                            <span id="variant-32531044040775" data-stock="5"></span>
                            <span id="variant-32531044073543" data-stock="0"></span>
                        </div>

                        <div class="variant-space">
                            <div class="no-js-hidden" data-section="template--14210350841927__main">
                                <div class="product-form size">
                                    <legend class="form-label">Size</legend>
                                    <input type="radio" id="template--14210350841927__main-1-0" name="Size"
                                        value="M" form="product-form-template--14210350841927__main" checked="">
                                    <label for="template--14210350841927__main-1-0" class="square">
                                        M
                                    </label>
                                    <input type="radio" id="template--14210350841927__main-1-1" name="Size"
                                        value="L" form="product-form-template--14210350841927__main">
                                    <label for="template--14210350841927__main-1-1" class="square">
                                        L
                                    </label>
                                    <input type="radio" id="template--14210350841927__main-1-2" name="Size"
                                        value="XL" form="product-form-template--14210350841927__main">
                                    <label for="template--14210350841927__main-1-2" class="square">
                                        XL
                                    </label>
                                </div>
                                <div class="product-form color">
                                    <legend class="form-label">Color</legend>
                                    <input type="radio" id="template--14210350841927__main-2-0" name="Color"
                                        value="Red" form="product-form-template--14210350841927__main" checked="">
                                    <label for="template--14210350841927__main-2-0" style="background-color: red; ">
                                    </label>
                                    <input type="radio" id="template--14210350841927__main-2-1" name="Color"
                                        value="Salmon" form="product-form-template--14210350841927__main">
                                    <label for="template--14210350841927__main-2-1" style="background-color: salmon; ">
                                    </label>
                                    <input type="radio" id="template--14210350841927__main-2-2" name="Color"
                                        value="Pink" form="product-form-template--14210350841927__main">
                                    <label for="template--14210350841927__main-2-2" style="background-color: pink; ">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="product-form product-form-quantity">
                            <label class="form-label" for="Quantity-template--14210350841927__main">
                                Quantity
                            </label>
                            <div class="quantity">
                                <button class="quantity-button no-js-hidden" name="minus" type="button">
                                    <span class="visually-hidden">Decrease quantity for Impulse Duffle</span>
                                    <svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 10 2"
                                        class="icon">
                                        <svg x="0%" y="0%">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </svg>
                                </button>
                                <input class="quantity-input" type="number" name="quantity"
                                    id="Quantity-template--14210350841927__main" min="1" value="1"
                                    form="product-form-template--14210350841927__main">
                                <button class="quantity-button no-js-hidden" name="plus" type="button">
                                    <span class="visually-hidden">Increase quantity for Impulse Duffle</span>
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon"
                                        viewBox="0 0 10 10">
                                        <svg x="0%" y="0%">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="product-form-buttons">
                            <button type="submit" name="add" class="submit button-full-width" disabled="disabled">
                                Add to cart
                            </button>
                            <button type="button" class="payment button-full-width data-testid="Checkout-button"
                                disabled="">
                                Buy it now
                            </button>
                        </div>

                        <div class="reassurance-space" style="margin-bottom: 20px;">
                            <div class=" reassurance-block">
                                <div class="reassurance-content row">
                                    <div class="reassurance col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="reassurance-img">
                                            <img src="{{ asset('frontend/assets/images/reas.png') }}"
                                                alt="Reassurance Image">
                                        </div>
                                        <div class="reassurance-text">
                                            <div class="reassurance-title">Free Delivery</div>
                                            <div class="reassurance-desc">Lorem Ipsum dummy</div>
                                        </div>
                                    </div>
                                    <div class="reassurance col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="reassurance-img">
                                            <img src="{{ asset('frontend/assets/images/reas.png') }}"
                                                alt="Reassurance Image">
                                        </div>
                                        <div class="reassurance-text">
                                            <div class="reassurance-title">Big Savings</div>
                                            <div class="reassurance-desc">Lorem Ipsum dummy</div>
                                        </div>
                                    </div>
                                    <div class="reassurance col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="reassurance-img">
                                            <img src="{{ asset('frontend/assets/images/reas.png') }}"
                                                alt="Reassurance Image">
                                        </div>
                                        <div class="reassurance-text">
                                            <div class="reassurance-title">Customer Support</div>
                                            <div class="reassurance-desc">Lorem Ipsum dummy</div>
                                        </div>
                                    </div>
                                    <div class="reassurance col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <div class="reassurance-img">
                                            <img src="{{ asset('frontend/assets/images/reas.png') }}"
                                                alt="Reassurance Image">
                                        </div>
                                        <div class="reassurance-text">
                                            <div class="reassurance-title">Gift Voucher</div>
                                            <div class="reassurance-desc">Lorem Ipsum dummy</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trusted-img" style="margin-bottom: 20px;">
                            <img class=" lazyloaded" alt="Trusted Image"
                                src="{{ asset('frontend/assets/images/trus.png') }}">
                        </div>

                        <div class="share_this_btn">
                            <div class="addthis_toolbox addthis_default_style">
                                <a class="addthis_button_facebook at300b" title="Facebook" href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-facebook-2" title="Facebook" alt="Facebook"
                                            class="at-icon at-icon-facebook">
                                            <title id="at-svg-facebook-2">Facebook</title>
                                            <g>
                                                <path
                                                    d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                                                    fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a class="addthis_button_twitter at300b" title="Twitter" href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-twitter-3" title="Twitter" alt="Twitter"
                                            class="at-icon at-icon-twitter">
                                            <title id="at-svg-twitter-3">Twitter</title>
                                            <g>
                                                <path
                                                    d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"
                                                    fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a class="addthis_button_print at300b" title="Print" href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-print-4" title="Print" alt="Print"
                                            class="at-icon at-icon-print">
                                            <title id="at-svg-print-4">Print</title>
                                            <g>
                                                <path
                                                    d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a class="addthis_button_email at300b" target="_blank" title="Email" href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-email-5" title="Email" alt="Email"
                                            class="at-icon at-icon-email">
                                            <title id="at-svg-email-5">Email</title>
                                            <g>
                                                <g fill-rule="evenodd"></g>
                                                <path
                                                    d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z">
                                                </path>
                                                <path
                                                    d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a class="addthis_button_pinterest_share at300b" target="_blank" title="Pinterest"
                                    href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-pinterest_share-6" title="Pinterest" alt="Pinterest"
                                            class="at-icon at-icon-pinterest_share">
                                            <title id="at-svg-pinterest_share-6">Pinterest</title>
                                            <g>
                                                <path
                                                    d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z"
                                                    fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <a class="addthis_button_compact at300m" href="#">
                                    <span class="at-icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" version="1.1" role="img"
                                            aria-labelledby="at-svg-addthis-1" title="More" alt="More"
                                            class="at-icon at-icon-addthis">
                                            <title id="at-svg-addthis-1">AddThis</title>
                                            <g>
                                                <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

 <!--****************** details section************ -->

    <section class="section-details">
        <div class="container">
            <div class="row">
                <div class="product-tab">
                    <ul class="tabs-list">
                        <li class="active tab-item">
                            <a class="tab-link" data-href="#tab-1">
                                Description
                            </a>
                        </li>
                        <li class="tab-item">
                            <a class="tab-link review-tab" data-href="#tab-2">
                                Reviews
                            </a>
                        </li>
                        <li class="tab-item">
                            <a class="tab-link" data-href="#tab-3">
                                Shipping &amp; Returns
                            </a>
                        </li>
                        <li class="tab-item">
                            <a class="tab-link" data-href="#tab-4">
                                Custom Tab1
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="active tab-pane">
                            <p class="tap-desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                material for a comfortable fit. Accessorize with a straw hat and you're
                                ready for summer!</p>
                            <h4 class="tap-list-title">Sample Unordered List</h4>
                            <ul class="tap-list">
                                <li>Comodous in tempor ullamcorper miaculis</li>
                                <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                <li>Divamus sit amet purus justo.</li>
                                <li>Proin molestie egestas orci ac suscipit risus posuere loremou.</li>
                            </ul>
                            <h4 class="tap-list-title">Sample Ordered Lista</h4>
                            <ol class="tap-list">
                                <li>Comodous in tempor ullamcorper miaculis</li>
                                <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                <li>Divamus sit amet purus justo.</li>
                                <li>Proin molestie egestas orci ac suscipit risus posuere loremous.</li>
                            </ol>
                            <h4 class="tap-list-title">Sample Paragraph Text</h4>
                            <blockquote>
                                <p class="tap-desc">Faded short sleeves t-shirt with high neckline. Soft and stretchy
                                    material for a comfortable fit. Accessorize with a straw hat and
                                    you're ready for summer!Faded short sleeves t-shirt with high
                                    neckline. Soft and stretchy material for a comfortable fit.
                                    Accessorize with a straw hat and you're ready for summe!
                                </p>
                            </blockquote>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>






    <!--****************** products section*************** -->
    <div class="section-products non-after text-center">
        <div class="container">
            <div class="section-header">
                <h1 class="sub-title">THE PRODUCTS</h1>
                <h2 class="first-title primary-title">You May Also Like</h2>
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

            <span class="btn" aria-label="View all">
                View all
            </span>
        </div>
    </div>
@endsection
