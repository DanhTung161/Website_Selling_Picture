@extends('frontend.layout')
@section('content1')
    <div class="col-lg-9 order-1 order-lg-2">
        <div class="masonry-loader masonry-loader-loaded">
            <div class="row products product-thumb-info-list"  style="position: relative; height: 929.436px;">
                <div class="col-sm-6 col-lg-4" style="position: absolute; left: 0px; top: 0px;">
                    <div class="product mb-0">
                        @foreach ($product as $item)
                            {{-- <form action="/product" method="GET"> --}}
                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce badge-success">NEW</span>
                                    <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                                </div>

                                <div class="addtocart-btn-wrapper">
                                    
                                        <a href="{{route('addToCart',[$item->id])}}" class="text-decoration-none addtocart-btn"
                                        title="Add to Cart"  >
                                        <i class="icons icon-bag"></i> 
                                    </a>

                                </div>

                                <a data-toggle="modal" data-target="#modalproduct{{ $item->id }}" data-whatever="@mdo"
                                    class="quick-view text-uppercase font-weight-semibold text-2">
                                    QUICK VIEW
                                </a>
                                <a href="">
                                    <div class="product-thumb-info-image product-thumb-info-image-effect">
                                        <img alt="" class="img-fluid" src="{{ asset($item->image) }}">

                                        <img alt="" class="img-fluid" src="{{ asset($item->image) }}">
                                    </div>
                                </a>
                            </div>
                            {{-- </form> --}}

                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#"
                                        class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $item->description }}</a>
                                    <h3
                                        class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html"
                                            class="text-color-dark text-color-hover-primary">{{ $item->title }}</a>
                                    </h3>
                                </div>
                                <a href="#"
                                    class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                        class="far fa-heart"></i></a>
                            </div>

                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                                    data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">{{ $item->price }}</span>
                                {{-- <span class="amount">$99,00</span> --}}
                            </p>
                            <div class="modal fade" id="modalproduct{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="shop dialog dialog-lg fadeIn animated">
                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <div class="thumb-gallery-wrapper">
                                                            <div
                                                                class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                                                                <div>
                                                                    <img alt="" class="img-fluid"
                                                                        src="{{ asset($item->image) }}"
                                                                        data-zoom-image="{{ asset($item->image) }}">
                                                                </div>
                                                            </div>
                                                            {{-- <div
                                                                class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                                                                <div class="cur-pointer">
                                                                    <img alt="" class="img-fluid"
                                                                        src="{{ asset($item->image) }}">
                                                                </div>
                                                            </div> --}}
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="summary entry-summary position-relative">

                                                            <h1 class="font-weight-bold text-7 mb-0"><a
                                                                    href="shop-product-full-width.html"
                                                                    class="text-decoration-none text-color-dark text-color-hover-primary">{{ $item->title }}</a>
                                                            </h1>

                                                            <div class="pb-0 clearfix d-flex align-items-center">
                                                                <div title="Rated 3 out of 5" class="float-start">
                                                                    <input type="text" class="d-none" value="3"
                                                                        title="" data-plugin-star-rating
                                                                        data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                                                </div>

                                                                {{-- <div class="review-num">
                                                                    <span class="count" itemprop="ratingCount">(2</span>
                                                                    reviews)
                                                                </div> --}}
                                                            </div>

                                                            <div class="divider divider-small">
                                                                <hr class="bg-color-grey-scale-4">
                                                            </div>

                                                            <p class="price mb-3">
                                                                <span
                                                                    class="sale text-color-dark">{{ $item->price }}</span>
                                                                {{-- <span class="amount">$22,00</span> --}}
                                                            </p>

                                                            <p class="text-3-5 mb-3">{{ $item->description }}</p>

                                                            {{-- <ul class="list list-unstyled text-2">
                                                                <li class="mb-0">AVAILABILITY: <strong
                                                                        class="text-color-dark">AVAILABLE</strong></li>
                                                                <li class="mb-0">SKU: <strong
                                                                        class="text-color-dark">1234567890</strong></li>
                                                            </ul> --}}


                                                            <form enctype="multipart/form-data" method="post"
                                                                class="cart">
                                                                <table class="table table-borderless"
                                                                    style="max-width: 300px;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="align-middle text-2 px-0 py-2">SIZE:
                                                                            </td>
                                                                            <td class="px-0 py-2">
                                                                                <div class="custom-select-1">
                                                                                    {{ $item->size }}
                                                                                    {{-- <select name="size"
                                                                                        class="form-control form-select text-1 h-auto py-2">
                                                                                        <option value="">PLEASE CHOOSE</option>
                                                                                        <option value="blue">Small
                                                                                        </option>
                                                                                        <option value="red">Normal
                                                                                        </option>
                                                                                        <option value="green">Big</option>
                                                                                    </select> --}}
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td for="material" class="align-middle text-2 px-0 py-2">Chất liệu:</td>
                                                                            <td class="px-0 py-2">
                                                                                @foreach ($material as $item)
                                                                                    <div class="custom-select-1"  id="material" name="id">
                                                                                        {{ $item->name }}
                                                                                    </div>
                                                                                @endforeach
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                {{-- <div class="quantity quantity-lg">
                                                                    <input type="button"
                                                                        class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                                        value="-">
                                                                    <input type="text" class="input-text qty text"
                                                                        title="Qty" value="1" name="quantity"
                                                                        min="1" step="1">
                                                                    <input type="button"
                                                                        class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                                        value="+">
                                                                </div> --}}
                                                                {{-- <button href="shop-cart.html"
                                                                    class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add
                                                                    to cart</button> --}}
                                                                <hr>
                                                            </form>

                                                            <div class="d-flex align-items-center">
                                                                <ul
                                                                    class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
                                                                    <!-- Facebook -->
                                                                    <li class="social-icons-facebook">
                                                                        <a href="http://www.facebook.com/sharer.php?u=https://www.okler.net"
                                                                            target="_blank" data-bs-toggle="tooltip"
                                                                            data-bs-animation="false"
                                                                            data-bs-placement="top"
                                                                            title="Share On Facebook">
                                                                            <i class="fab fa-facebook-f"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!-- Google+ -->
                                                                    <li class="social-icons-googleplus">
                                                                        <a href="https://plus.google.com/share?url=https://www.okler.net"
                                                                            target="_blank" data-bs-toggle="tooltip"
                                                                            data-bs-animation="false"
                                                                            data-bs-placement="top"
                                                                            title="Share On Google+">
                                                                            <i class="fab fa-google-plus-g"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!-- Twitter -->
                                                                    <li class="social-icons-twitter">
                                                                        <a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons"
                                                                            target="_blank" data-bs-toggle="tooltip"
                                                                            data-bs-animation="false"
                                                                            data-bs-placement="top"
                                                                            title="Share On Twitter">
                                                                            <i class="fab fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                    <!-- Email -->
                                                                    <li class="social-icons-email">
                                                                        <a href="mailto:?Subject=Share This Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://www.okler.net"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-animation="false"
                                                                            data-bs-placement="top"
                                                                            title="Share By Email">
                                                                            <i class="far fa-envelope"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <a href="#"
                                                                    class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2">
                                                                    <i class="far fa-heart me-1"></i> SAVE TO WISHLIST
                                                                </a>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
            @include('frontend.paginate.paginate')
        </div>
    </div>
@endsection
