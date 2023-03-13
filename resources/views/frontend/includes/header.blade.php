<header>
    {{-- spinner --}}
    {{-- <div class="spinner">

    </div> --}}


    {{-- ..........................topbar.................... --}}

    <div class="top-bar">
        <div class="container">
            <div class="topbar-item d-flex align-items-center justify-content-center gap-2">
                <div class="top-icon">
                    <img class="" src="{{ asset('frontend/assets/images/icon.png') }}" alt="">
                </div>
                <div class="top-title">
                    Welcome To Our Beauty Store
                </div>
            </div>
        </div>
    </div>

    {{-- ..........................middlebar.................... --}}

    <div class="middle-bar">
        <div class="container">
            <div class="middle d-flex align-items-center justify-content-between">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="toggle">
                        <button class="btn navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRightScrolling" aria-controls="offcanvasRightScrolling">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
                <div class="left-middle">
                    <ul
                        class="middle-list topbar-list list-unstyled d-flex justify-content-center align-items-center gap-3">
                        <li class="middle-item">
                            <a class="top-link" href="">
                                wishlist
                            </a>
                        </li>
                        <li class="middle-item">
                            <a class="top-link" href="">
                                contact
                            </a>
                        </li>
                        <li class="middle-item">
                            <div class="accordion-item">
                                <div class="accordion-header top-link" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        USD $
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="middle-menu list-unstyled" aria-labelledby="navbarScrollingDropdown"
                                            id="middle">
                                            <li><a class="dropdown-middle" href="#">CAD $</a></li>
                                            <li><a class="dropdown-middle" href="#">GBP £</a></li>
                                            <li><a class="dropdown-middle" href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="middle-item">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header top-link" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            English
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="middle-menu list-unstyled"
                                                aria-labelledby="navbarScrollingDropdown" id="middle">
                                                <li><a class="dropdown-middle" href="#">English</a></li>
                                                <li><a class="dropdown-middle" href="#">العربية</a></li>
                                                <li><a class="dropdown-middle" href="#">Español</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="logo">
                    <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                </a>
                <div class="right-middle">
                    <div class="middle-icone d-flex align-items-center gap-3">
                        <div class="header-search">
                            <button class="search-toggle icon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <div class="search-wrap">
                                <form action="#">
                                    <input type="text" class="search-txt" placeholder="Search">
                                    <button><i class="fa fa-search icon" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-login">
                            <button class="login icon">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </button>
                            <div class="login-wrap">
                                <h2 class="log-in">
                                    Login
                                </h2>
                                <form class="form-data form-login" method="post" role="form">
                                    <input type="email" class="form-control form-ask" id="Email"
                                        name="Email" placeholder="Email">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                </form>
                                <span class="forgot">
                                    <a href="">
                                        Forgot your password?
                                    </a>
                                </span>
                                <span class="btn sign-in">
                                    <a href="">
                                        Sign in
                                    </a>
                                </span>
                                <span class="create-account">
                                    <a href="">
                                        Create account
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="header-cart">
                            <button class="shopping-cart icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>
                            <div class="cart-wrap">
                                <div class="cart-top d-flex align-items-center justify-content-between">
                                    <h2 class="cart-title">CART</h2>
                                    <div class="cart-close">
                                        <i class="fa fa-close icon" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="cart-body">
                                    <div class="nots d-flex align-items-center justify-content-start">
                                        <div class="note-icon rounded-circle">
                                            <i class="fa fa-exclamation" aria-hidden="true"></i>
                                        </div>
                                        <span class="note">
                                            spend $80.00 more and get free shipping!
                                        </span>
                                    </div>
                                    <span class="empty translate-middle">
                                        Your Cart is currently empty!
                                    </span>
                                </div>
                                <div class="cart-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ..........................navbar.................... --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRightScrolling"
                aria-labelledby="offcanvasRightScrollingLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                {{-- -------------mobile----------- --}}
                <div class="offcanvas-body">
                    <div class="mobile-menu">
                        <nav class="primary-nav">
                            <ul class="nav-list list-unstyled">
                                <li class="has-secondary nav-item">
                                    <a class="nav-link" href="">Beauty</a><span
                                        class="item-toggle-button"></span>
                                    <div class="secondary-nav">
                                        <ul class="sub-menu list-unstyled">
                                            <li class="has-tertiary">
                                                <a class="nav-link">make up</a><span
                                                    class="item-toggle-button"></span>
                                                <div class="tertiary-nav">
                                                    <ul class="sub-menu-col">
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">Face wash</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">eye cream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">suncream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">skin scrub</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">moisturise</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">facials</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">deodorants</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-tertiary">
                                                <a class="nav-link" href="">skin care</a><span
                                                    class="item-toggle-button"></span>
                                                <div class="tertiary-nav">
                                                    <ul class="sub-menu-col">
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">Face wash</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">eye cream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">suncream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">skin scrub</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">moisturise</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">facials</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">deodorants</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-tertiary">
                                                <a class="nav-link">fragrances</a><span
                                                    class="item-toggle-button"></span>
                                                <div class="tertiary-nav">
                                                    <ul class="sub-menu-col">
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">Face wash</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">eye cream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">suncream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">skin scrub</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">moisturise</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">facials</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">deodorants</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="">Category</a></li>
                                <li class="has-secondary nav-item">
                                    <a class="nav-link" href="">Accessories</a><span
                                        class="item-toggle-button"></span>
                                    <div class="secondary-nav">
                                        <ul class="sub-menu list-unstyled">
                                            <li class="has-tertiary">
                                                <a class="">make up</a><span class="item-toggle-button"></span>
                                                <div class="tertiary-nav">
                                                    <ul class="sub-menu-col">
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">Face wash</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">eye cream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">suncream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">skin scrub</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">moisturise</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">facials</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">deodorants</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-tertiary">
                                                <a href="#sub2">skin care</a><span
                                                    class="item-toggle-button"></span>
                                                <div class="tertiary-nav">
                                                    <ul class="sub-menu-col">
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">Face wash</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">eye cream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">suncream</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">skin scrub</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">moisturise</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">facials</a></li>
                                                        <li class="dropdown-item"><a class="link-item-dropmenu"
                                                                href="#">deodorants</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Collection</a></li>
                                <li class="has-secondary nav-item">
                                    <a class="nav-link" href="">Accessories</a><span
                                        class="item-toggle-button"></span>
                                    <div class="secondary-nav">
                                        <ul class="sub-menu list-unstyled">
                                            <li class="has-tertiary">
                                                <ul class="sub-menu-col">
                                                    <li class="dropdown-item"><a class="link-item-dropmenu"
                                                            href="#">Face wash</a></li>
                                                    <li class="dropdown-item"><a class="link-item-dropmenu"
                                                            href="#">eye cream</a></li>
                                                    <li class="dropdown-item"><a class="link-item-dropmenu"
                                                            href="#">Face wash</a></li>
                                                    <li class="dropdown-item"><a class="link-item-dropmenu"
                                                            href="#">eye cream</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>

                                <div class="accordion" id="accordionExample">
                                    <ul
                                        class="middle-list topbar-list list-unstyled d-flex justify-content-center align-items-center gap-3">
                                        <li class="middle-item">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header top-link" id="headingOne">
                                                    <button class="accordion-button collapsed about-title"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        USD $
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="middle-menu list-unstyled"
                                                            aria-labelledby="navbarScrollingDropdown" id="middle">
                                                            <li><a class="dropdown-middle" href="#">CAD $</a>
                                                            </li>
                                                            <li><a class="dropdown-middle" href="#">GBP £</a>
                                                            </li>
                                                            <li><a class="dropdown-middle" href="#">USD $</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="middle-item">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header top-link" id="headingTwo">
                                                    <button class="accordion-button collapsed about-title"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        English
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="middle-menu list-unstyled"
                                                            aria-labelledby="navbarScrollingDropdown" id="middle">
                                                            <li><a class="dropdown-middle" href="#">English</a>
                                                            </li>
                                                            <li><a class="dropdown-middle" href="#">العربية</a>
                                                            </li>
                                                            <li><a class="dropdown-middle" href="#">Español</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu">
                    <ul class="nav-list list-unstyled d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Beauty
                            </a>
                            <div class="dropdown-menu">
                                <ul class="sub-menu list-unstyled">
                                    <li class="sub-item">
                                        <h2 class="menu-title">make up</h2>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">eye cream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">suncream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">skin scrub</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">moisturise</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">facials</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">deodorants</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-item">
                                        <h2 class="menu-title">skin care</h2>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">eye cream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">suncream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">skin scrub</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">moisturise</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">facials</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">deodorants</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-item">
                                        <h2 class="menu-title">fragrances</h2>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">eye cream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">suncream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">skin scrub</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">moisturise</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">facials</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">deodorants</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-item">
                                        <div class="header-img">
                                            <img src="{{ asset('frontend/assets/images/2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li class="sub-item">
                                        <div class="header-img">
                                            <img src="{{ asset('frontend/assets/images/1.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Category
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Accessories
                            </a>
                            <span class="badge sale">sale</span>
                            <div class="dropdown-menu dropdown-two">
                                <ul class="sub-menu list-unstyled">
                                    <li class="sub-item">
                                        <h2 class="menu-title">make up</h2>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">eye cream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">suncream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">skin scrub</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">moisturise</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">facials</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">deodorants</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-item">
                                        <h2 class="menu-title">skin care</h2>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">eye cream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">suncream</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">skin scrub</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">moisturise</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">facials</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">deodorants</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-item">
                                        <h2 class="menu-title">skin care</h2>
                                        <div class="header-img">
                                            <img src="{{ asset('frontend/assets/images/2.png') }}" alt="">
                                        </div>
                                        <ul class="sub-menu-col">
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">Face wash</a></li>
                                            <li class="dropdown-item"><a class="link-item-dropmenu"
                                                    href="#">$54.00 </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Collection
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                Include Pages
                            </a>
                            <div class="dropdown-menu dropdown-three">
                                <ul class="sub-menu list-unstyled">
                                    <li class="dropdown-item"><a class="link-item-dropmenu" href="#">Face
                                            wash</a></li>
                                    <li class="dropdown-item"><a class="link-item-dropmenu" href="#">Face
                                            wash</a></li>
                                    <li class="dropdown-item"><a class="link-item-dropmenu" href="#">Face
                                            wash</a></li>
                                    <li class="dropdown-item"><a class="link-item-dropmenu" href="#">Face
                                            wash</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                About Us
                            </a>
                            <span class="badge new">new</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                FAQs
                            </a>
                            <span class="badge hot">hot</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>




    {{-- ********************************mobile menu**************************** --}}

</header>
