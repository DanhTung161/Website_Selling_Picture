<div class="col-lg-3 order-2 order-lg-1">
    <aside class="sidebar">
        {{-- <form action="" method="get">
            <div class="input-group mb-3 pb-1">
                <input class="form-control text-1" placeholder="Search" name="table_search" id="s" type="text">
                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
            </div>
        </form> --}}
        <h5 class="font-weight-semi-bold pt-3">Danh mục</h5>
        <ul class="nav  flex-column">
            @foreach ($cate as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{route('home_user',['category_id' => $item->id])}}" >{{$item->name}}</a>                                    
            </li>
            @endforeach
        </ul>
        <h5 class="font-weight-semi-bold pt-3">Màu Sắc</h5>
        <ul class="nav  flex-column">
            @foreach ($color as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home_user',['color_id' => $item->id])}}">{{$item->name}}</a>                                    
            </li>
            @endforeach
        </ul>
        <h5 class="font-weight-semi-bold pt-3">Tông màu </h5>
        <ul class="nav  flex-column">
            @foreach ($tone as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home_user',['tone_id' => $item->id])}}">{{$item->name}}</a>                                    
            </li>
            @endforeach
        </ul>
        <h5 class="font-weight-semi-bold pt-3">Chất liệu </h5>
        <ul class="nav  flex-column">
            @foreach ($material as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home_user',['material_id' => $item->id])}}">{{$item->name}}</a>                                    
            </li>
            @endforeach
        </ul>
        
        {{-- <h5 class="font-weight-semi-bold pt-3">Kích thước</h5>
        <ul class="nav  flex-column">
            @foreach ($product as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home_user')}}">{{$item->size}}</a>                                    
            </li>
            @endforeach
        </ul> --}}

        {{-- <h5 class="font-weight-semi-bold pt-5">Tags</h5>
        <div class="mb-3 pb-1">
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Nike</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Travel</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Sport</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">TV</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Books</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Tech</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Adidas</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Promo</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Reading</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Social</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Books</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Tech</span></a>
            <a href="#"><span
                    class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">New</span></a>
        </div>
        <div class="row mb-5">
            <div class="col">
                <h5 class="font-weight-semi-bold pt-5">Top Rated Products</h5>
                <div class="product row row-gutter-sm align-items-center mb-4">
                    <div class="col-5 col-lg-5">
                        <div class="product-thumb-info border-0">
                            <a href="shop-product-sidebar-left.html">
                                <div class="product-thumb-info-image">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                        <a href="#"
                            class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a>
                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                            <a href="shop-product-sidebar-right.html"
                                class="text-color-dark text-color-hover-primary text-decoration-none">Blue
                                Hat</a>
                        </h3>
                        <div title="Rated 5 out of 5">
                            <input type="text" class="d-none" value="5" title=""
                                data-plugin-star-rating
                                data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                        </div>
                        <p class="price text-4 mb-0">
                            <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                            <span class="amount">$289,00</span>
                        </p>
                    </div>
                </div>
                <div class="product row row-gutter-sm align-items-center mb-4">
                    <div class="col-5 col-lg-5">
                        <div class="product-thumb-info border-0">
                            <a href="shop-product-sidebar-left.html">
                                <div class="product-thumb-info-image">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                        <a href="#"
                            class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
                        <h3
                            class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                            <a href="shop-product-sidebar-right.html"
                                class="text-color-dark text-color-hover-primary text-decoration-none">Adventurer
                                Bag</a>
                        </h3>
                        <div title="Rated 5 out of 5">
                            <input type="text" class="d-none" value="5" title=""
                                data-plugin-star-rating
                                data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                        </div>
                        <p class="price text-4 mb-0">
                            <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                            <span class="amount">$79,00</span>
                        </p>
                    </div>
                </div>
                <div class="product row row-gutter-sm align-items-center mb-4">
                    <div class="col-5 col-lg-5">
                        <div class="product-thumb-info border-0">
                            <a href="shop-product-sidebar-left.html">
                                <div class="product-thumb-info-image">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                        <a href="#"
                            class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
                        <h3
                            class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                            <a href="shop-product-sidebar-right.html"
                                class="text-color-dark text-color-hover-primary text-decoration-none">Baseball
                                Ball</a>
                        </h3>
                        <div title="Rated 5 out of 5">
                            <input type="text" class="d-none" value="5" title=""
                                data-plugin-star-rating
                                data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                        </div>
                        <p class="price text-4 mb-0">
                            <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                            <span class="amount">$299,00</span>
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
    </aside>
</div>
