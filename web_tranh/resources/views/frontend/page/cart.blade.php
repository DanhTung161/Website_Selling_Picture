<!DOCTYPE html>
<html>

<head>
    @include('frontend.header.header')
</head>

<body data-plugin-page-transition>

    <div id="cart" class="body">

        @include('frontend.header.header_item')

        <div role="main" class="main shop pb-4">
            <div class="container">

                @include('frontend.header.header_cart')

                <div class="row pb-4 mb-5">
                    <div class="col-lg-8 mb-6 mb-lg-0">
                        <form method="post" action="">
                            <div class="table-responsive">
                                <table  class="shop_table cart">
                                    <thead>
                                        <tr class="text-color-dark">
                                            <th class="product-thumbnail" width="15%">
                                                &nbsp;
                                            </th>
                                            <th class="product-name text-uppercase" width="30%">
                                                Product
                                            </th>
                                            <th class="product-price text-uppercase" width="15%">
                                                Price
                                            </th>
                                            <th class="product-quantity text-uppercase" width="15%">
                                                Quantity
                                            </th>
                                            <th class="product-subtotal text-uppercase text-end" width="15%">
                                                Subtotal
                                            </th>
                                            <th class="product-subtotal text-uppercase text-end" width="20%">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $subtotal = 0 ?>
                                        @if(session('cart'))
                                            @foreach (session('cart') as $key => $item)

                                            <?php $subtotal += $item['price'] * $item['quantity'] ?>
                                            <tr class="cart_table_item" id="rowProduct{{$item['id']}}">
                                                <td class="product-thumbnail">
                                                    <div class="product-thumbnail-wrapper">
                                                        <a href="#" class="product-thumbnail-remove"
                                                            title="Remove Product">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                        <a href="shop-product-sidebar-right.html"
                                                            class="product-thumbnail-image" title="Photo Camera">
                                                            <img width="90" height="90" alt=""
                                                                class="img-fluid"
                                                                 src="{{ $item['image'] }}"
                                                                 >
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="product-name">
                                                    <a href="shop-product-sidebar-right.html"
                                                        class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">
                                                        {{ $item['title'] }}
                                                    </a>
                                                </td>
                                                <td class="product-price">
                                                    <span
                                                        class="amount font-weight-medium text-color-grey">
                                                        {{ $item['price'] }}
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity float-none m-0">
                                                        <input type="button"
                                                            class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                            value="-" onclick="changeQuanity(this, {{$item['id']}}, 'sub')" id="sub{{$item['id']}}">
                                                        <input type="text" class="input-text qty text"
                                                            title="Qty" value="{{$item['quantity']}}" id="quantity{{$item['id']}}"
                                                            min="1" step="1" onkeyup="changeQuanity(this.value, {{$item['id']}})">
                                                        <input type="button"
                                                            class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                            value="+" onclick="changeQuanity(this, {{$item['id']}}, 'plus')">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal text-end">
                                                    <span
                                                        class="amount text-color-dark font-weight-bold text-4" id="cart{{$item['id']}}">
                                                        {{ $item['price'] * $item['quantity'] }}
                                                    </span>
                                                </td>
                                                <td class="product-subtotal text-end">
                                                    <button type="button" class="btn btn-link" onclick="deleteItem({{$item['id']}})"
                                                        style="background-color: white; color:black">
                                                        <i class="fas fa-times" ></i>
                                                </button>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                            <tr>
                                                <td colspan="5">
                                                    <div class="row justify-content-between mx-0">
                                                        <div class="col-md-auto px-0 mb-3 mb-md-0">
                                                            <div class="d-flex align-items-center">
                                                                <input type="text"
                                                                    class="form-control h-auto border-radius-0 line-height-1 py-3"
                                                                    name="couponCode" placeholder="Coupon Code" />
                                                                <button type="submit"
                                                                    class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Apply
                                                                    Coupon</button>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-md-auto px-0">
                                                            <button type="submit"
                                                                class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3">
                                                                Update
                                                                Cart
                                                            </button>
                                                        </div> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 position-relative">
                        <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky
                            data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                            <div class="card-body">
                                <h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
                                <table class="shop_table cart-totals mb-4">
                                    <tbody>

                                        <tr class="cart-subtotal">
                                            <td class="border-top-0">
                                                <strong class="text-color-dark">Subtotal</strong>
                                            </td>
                                            <td class="border-top-0 text-end">
                                                <strong>
                                                    <span class="amount font-weight-medium" id="total">{{ $total }}</span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <td colspan="2">
                                                <strong class="d-block text-color-dark mb-2">Shipping</strong>

                                                <div class="d-flex flex-column">
                                                    <label class="d-flex align-items-center text-color-grey mb-0"
                                                        for="shipping_method1">
                                                        <input id="shipping_method1" type="radio" class="me-2"
                                                            name="shipping_method" value="free" checked />
                                                        Free Shipping
                                                    </label>
                                                    {{-- <label class="d-flex align-items-center text-color-grey mb-0"
                                                        for="shipping_method2">
                                                        <input id="shipping_method2" type="radio" class="me-2"
                                                            name="shipping_method" value="local-pickup" />
                                                        Local Pickup
                                                    </label>
                                                    <label class="d-flex align-items-center text-color-grey mb-0"
                                                        for="shipping_method3">
                                                        <input id="shipping_method3" type="radio" class="me-2"
                                                            name="shipping_method" value="flat-rate" />
                                                        Flat Rate: $5.00
                                                    </label> --}}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td>
                                                <strong class="text-color-dark text-3-5">Total</strong>
                                            </td>
                                            <td class="text-end">
                                                <strong class="text-color-dark">
                                                    <span class="amount text-color-dark text-5" id="total">{{ $total }}</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('check')}}"
                                    class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Proceed
                                    to Checkout <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        @include('frontend.footer.footer');
        
    </div>
    @include('frontend.footer.js');
    <script>
        function changeQuanity(event, id, type) {
            var quantity = $(`#quantity${id}`).val();
            if (type == 'sub') {
                quantity = parseInt(quantity) - 1;
            } else if (type == 'plus') {
                quantity = parseInt(quantity) + 1;
            } else {
                quantity = parseInt(event);
            }
            
            if (quantity > 0) {
                $.get(`/update-cart/${id}?quantity=${quantity}`, function(ketqua) {
                    $('#cart' + id).empty().html(ketqua.price);
                    $('#total').text(ketqua.total)
                });
            }
        }
        function deleteItem(id) {
            $.ajax({
                type: "GET",
                url: "/delete-product/" + id,
                success: function(data) {
                    if (data && data.status === true) {
                        // nếu xóa thành công => xóa luôn hàng đó đi
                        $("#rowProduct" + id).remove();
                    }
                }
            })
        }
    </script>

</body>

</html>

