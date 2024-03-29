<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
        <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
            <div class="container">
                <div class="header-row justify-content-between">
                    <div class="header-column col-auto px-0">
                        <div class="header-row">
                            <p class="font-weight-semibold text-1 mb-0 d-none d-sm-block d-md-none">FREE
                                SHIPPING ORDERS $99+</p>
                            <p class="font-weight-semibold text-1 mb-0 d-none d-md-block">FREE RETURNS, STANDARD
                                SHIPPING ORDERS $99+</p>
                        </div>
                    </div>
                    <div class="header-column justify-content-end col-auto px-0">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills font-weight-semibold text-2">
                                    <li class="nav-item dropdown nav-item-left-border d-lg-none">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                            role="button" id="dropdownMobileMore" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            More
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMobileMore">
                                            <a class="dropdown-item" href="">Trang chủ</a>
                                            <a class="dropdown-item" href="#">Our Stores</a>
                                            <a class="dropdown-item" href="#">Blog</a>
                                            <a class="dropdown-item" href="#">Contact</a>
                                            <a class="dropdown-item" href="#">Help & FAQs</a>
                                            <a class="dropdown-item" href="#">Track Order</a>
                                        </div>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="{{ route('home_user') }}"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Trang chủ</a>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="{{ route('about')}}"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Liên hệ </a>
                                    </li>
                                    {{-- <li class="nav-item d-none d-lg-inline-block">
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Contact</a>
                                    </li>
                                    <li class="nav-item d-none d-xl-inline-block">
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Help
                                            & FAQs</a>
                                    </li>
                                    <li class="nav-item d-none d-xl-inline-block">
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-primary">Track
                                            Order</a>
                                    </li> --}}
                                    <li class="nav-item dropdown nav-item-left-border">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                            role="button" id="dropdownCurrency" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            USD
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0"
                                            aria-labelledby="dropdownCurrency">
                                            <a class="dropdown-item" href="#">EUR</a>
                                            <a class="dropdown-item" href="#">USD</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown nav-item-right-border">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                            role="button" id="dropdownLanguage" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ENG
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0"
                                            aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#">ESP</a>
                                            <a class="dropdown-item" href="#">FRA</a>
                                            <a class="dropdown-item" href="#">ENG</a>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray">
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-linkedin">
                                        <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row py-2">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82"
                                    data-sticky-height="40" data-sticky-top="84"
                                    src="/user/images/logo-default-slim.png">
                            </a>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border col-lg-5 col-xl-6 px-0 ms-0">
                            <div class="header-nav-feature ps-lg-5 pe-lg-4">
                                <form role="search" action="" method="get">
                                    <div class="search-with-select">
                                        <a href="#" class="mobile-search-toggle-btn me-2"
                                            data-porto-toggle-class="open">
                                            <i
                                                class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
                                        </a>
                                        <div class="search-form-wrapper input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q"
                                                type="search" value="" placeholder="Search...">
                                            <div class="search-form-select-wrapper">
                                                <div class="custom-select-1">
                                                    
                                                    <select name="category_id" class="form-control form-select">
                                                        
                                                        <option value="all" selected>All Categories</option>
                                                        @foreach ($cate as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                        
                                                        @endforeach
                                                    </select>
                                                    
                                                </div>
                                                <button class="btn" type="submit">
                                                    <i
                                                        class="icons icon-magnifier header-nav-top-icon text-color-dark"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="header-extra-info col-lg-3 col-xl-2 ps-2 ps-xl-0 ms-lg-3 d-none d-lg-block">
                            <li class="d-none d-sm-inline-flex ms-0">
                                <div class="header-extra-info-icon ms-lg-4">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
                                </div>
                                <div class="header-extra-info-text">
                                    <label class="text-1 font-weight-semibold text-color-default">CALL US
                                        NOW</label>
                                    <strong class="text-4"><a href="tel:+1234567890"
                                            class="text-color-hover-primary text-decoration-none">+123 4567
                                            890</a></strong>
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex col-auto col-lg-2 pe-0 ps-0 ps-xl-3">
                            <ul class="header-extra-info">
                                <li class="ms-0 ms-xl-4">
                                    <div class="header-extra-info-icon">
                                        <a href="{{ route('logout') }}"
                                            class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                            <i class="icons icon-user"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="me-2 ms-3">
                                    <div class="header-extra-info-icon">
                                        <a href="#"
                                            class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                            <i class="icons icon-heart"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-nav-features ps-0 ms-1">
                                <div
                                    class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                    
                                

                                    <a href="#" class="header-nav-features-toggle">
                                        <img src="img/icons/icon-cart-big.svg" height="30" alt=""
                                            class="header-nav-top-icon-img">
                                        <span class="cart-info">
                                            <span class="cart-qty">1</span>
                                        </span>
                                    </a>
                                

                                    <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <?php $subtotal = 0 ?>
                                    @if(session('cart'))
                                        @foreach (session('cart') as $key => $item)
                                        <?php $subtotal += $item['price'] * $item['quantity'] ?>
                                        <ol class="mini-products-list">
                                            <li class="item">
                                                <a href="#" title="" class="product-image">
                                                    <img src="{{ $item['image'] }}" alt=""></a>
                                                    
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#">{{ $item['title'] }} </a>
                                                    </p>
                                                    
                                                    <p class="qty-price" id="quantity{{$item['id']}}">
                                                        {{ $item['quantity'] }} X <span class="price">{{ $item['price'] }}</span>
                                                    </p>
                                                    
                                                    <button type="button" title="Remove This Item" class="btn btn-link" 
                                                    style="background-color: white; color:black">
                                                    <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ol>
                                        @endforeach
                                    @endif
                                        <div class="totals">
                                            <span class="label">Total:</span>
                                            <span class="price-total"><span class="price" id="subtotal">{{ $subtotal }}</span></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-dark" href="{{ route('cart') }}">View Cart</a>
                                            <a class="btn btn-primary" href="{{ route('check') }}">Checkout</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">

                    </div>
                </div>
            </div>
        </div>
        @include('frontend.header.nav')
    </div>
    
</header>
