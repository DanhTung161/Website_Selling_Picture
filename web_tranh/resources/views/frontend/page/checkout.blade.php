<!DOCTYPE html>
<html>
	<head>

		@include('frontend.header.header')

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			@include('frontend.header.header_item')

			<div role="main" class="main shop pb-4">

				<div class="container">

					@include('frontend.header.header_cart')

					<div class="row">
						<div class="col">
							<p class="mb-1">Returning customer? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-bs-toggle="collapse" data-bs-target=".login-form-wrapper">Login</a></p>
						</div>
					</div>

					<div class="row login-form-wrapper collapse mb-5">
						<div class="col">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark">
								<div class="card-body">
									<form action="/" id="frmSignIn" method="post">
										<div class="row">
											<div class="form-group col">
												<label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
												<input type="text" value="" class="form-control form-control-lg text-4" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
												<input type="password" value="" class="form-control form-control-lg text-4" required>
											</div>
										</div>
										<div class="row justify-content-between">
											<div class="form-group col-md-auto">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="rememberme">
													<label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
												</div>
											</div>
											<div class="form-group col-md-auto">
												<a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Forgot Password?</a>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
												<div class="divider">
													<span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
												</div>
												<a href="#" class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Login With Facebook</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<p>Have a coupon? <a href="#" class="text-color-dark text-color-hover-primary text-uppercase text-decoration-none font-weight-bold" data-bs-toggle="collapse" data-bs-target=".coupon-form-wrapper">Enter your code</a></p>
						</div>
					</div>

					<div class="row coupon-form-wrapper collapse mb-5">
						<div class="col">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark">
								<div class="card-body">
									<form role="form" method="post" action="">
										<div class="d-flex align-items-center">
											<input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" placeholder="Coupon Code" required />
											<button type="submit" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Apply Coupon</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<form role="form" class="needs-validation" method="post" action="{{ route('checkout')}}">
						@csrf
						<div class="row">
							<div class="col-lg-7 mb-4 mb-lg-0">
								
								<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
								<div class="row">
									<div class="form-group col-md-6">
										<label class="form-label" >Full Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" id="fullname" name="fullname" value="{{$user->fullname}}" required />
									</div>
									
								</div>
								
								<div class="row">
									<div class="form-group col">
										<label class="form-label">Street Address <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" id="address" name="address" value="{{$user->address}}" placeholder="House number and street name" required />
									</div>
								</div>
							
								<div class="row">
									<div class="form-group col">
										<label class="form-label">Phone <span class="text-color-danger">*</span></label>
										<input type="number" class="form-control h-auto py-2" id="phone_number" name="phone_number" value="{{$user->phone_number}}" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label">Email Address <span class="text-color-danger">*</span></label>
										<input type="email" class="form-control h-auto py-2" id="email" name="email" value="{{$user->email}}" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label">Shipping date <span class="text-color-danger">*</span></label>
										<input type="date" class="form-control h-auto py-2" id="shipping_date" name="shipping_date" value="{{$user->shipping_date}}" required />
									</div>
								</div>
								<div class="row">
									<label class="form-label">Payment-methods <span class="text-color-danger">*</span></label>
									<select name="payment_methor" id="payment_methor">
										<option value="COD">
											COD
										</option>
										<option value="momo">
											MOMO
										</option>
									</select>
									
								</div>
								{{-- <div class="row">
									<div class="form-group col">
										<div class="custom-checkbox-1">
											<input id="createAccount" type="checkbox" name="createAccount" value="1" />
											<label for="createAccount">Create an account ?</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<div class="custom-checkbox-1" data-bs-toggle="collapse" data-bs-target=".shipping-field-wrapper">
											<input id="shipAddress" type="checkbox" name="shipAddress" value="1" />
											<label for="shipAddress">Shop to a different address ?</label>
										</div>
									</div>
								</div> --}}
								<!-- Ship to a differente address fields -->
								{{-- <div class="shipping-field-wrapper collapse">
									<div class="row">
										<div class="form-group col-md-6">
											<label class="form-label">First Name <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingFirstName" value="" required />
										</div>
										<div class="form-group col-md-6">
											<label class="form-label">Last Name <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingLastName" value="" required />
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">Company Name</label>
											<input type="text" class="form-control h-auto py-2" name="shippingCompanyName" value="" />
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">Country/Region <span class="text-color-danger">*</span></label>
											<div class="custom-select-1">
												<select class="form-select form-control h-auto py-2" name="shippingCountry" required>
													<option value="" selected></option>
													<option value="usa">United States</option>
													<option value="spa">Spain</option>
													<option value="fra">France</option>
													<option value="uk">United Kingdon</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">Street Address <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingAddress1" value="" placeholder="House number and street name" required />
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<input type="text" class="form-control h-auto py-2" name="shippingAddress2" value="" placeholder="Apartment, suite, unit, etc..." required/>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">Town/City <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingCity" value="" required />
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">State <span class="text-color-danger">*</span></label>
											<div class="custom-select-1">
												<select class="form-select form-control h-auto py-2" name="shippingState" required>
													<option value="" selected></option>
													<option value="ny">Nova York</option>
													<option value="ca">California</option>
													<option value="tx">Texas</option>
													<option value="">Florida</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">ZIP <span class="text-color-danger">*</span></label>
											<input type="text" class="form-control h-auto py-2" name="shippingZip" value="" required />
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<label class="form-label">Phone <span class="text-color-danger">*</span></label>
											<input type="number" class="form-control h-auto py-2" name="shippingPhone" value="" required />
										</div>
									</div>
									<!-- End of Ship to a differente address fields -->
								</div> --}}

								{{-- <div class="row">
									<div class="form-group col">
										<label class="form-label">Order Notes</label>
										<textarea class="form-control h-auto py-2" name="orderNotes" rows="5" placeholder="Notes about you orderm e.g. special notes for delivery"></textarea>
									</div>
								</div> --}}
								
							</div>
							<div class="col-lg-5 position-relative">
								<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
									<div class="card-body">
										<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
										<table class="shop_table cart-totals mb-3">
											<tbody>
												<?php $subtotal = 0 ?>
												@if(session('cart'))
												@foreach(session('cart') as $key => $item)
												<?php $subtotal += $item['price'] * $item['quantity'] ?>
												<tr>
													<td colspan="2" class="border-top-0">
														<strong class="text-color-dark">Product</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{$item['title']}} <span class="product-qty" id="quantity{{$item['id']}}"> x {{ $item['quantity'] }}</span></strong>
														
													</td>
													<td class="text-end align-top">
														<span class="amount font-weight-medium text-color-grey" id="cart{{$item['id']}}">{{ $item['price'] * $item['quantity'] }}</span>
													</td>
												</tr>
												@endforeach
												@endif
												<tr class="cart-subtotal">
													<td class="border-top-0">
														<strong class="text-color-dark">Subtotal</strong>
													</td>
													<td class="border-top-0 text-end">
														<strong>
															<span class="amount font-weight-medium" id="subtotal">{{ $subtotal }}</span>
														</strong>
													</td>
												</tr>
												{{-- <tr class="shipping">
													<td colspan="2">
														<strong class="d-block text-color-dark mb-2">Shipping</strong>

														<div class="d-flex flex-column">
															<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
																<input id="shipping_method1" type="radio" class="me-2" name="shipping_method" value="free" checked />
																Free Shipping
															</label>
															
														</div>
													</td>
												</tr> --}}
												<tr class="total">
													<td>
														<strong class="text-color-dark text-3-5">Total</strong>
													</td>
													<td class="text-end">
														<strong class="text-color-dark"><span class="amount text-color-dark text-5">{{ $total}}</span></strong>
													</td>
												</tr>
												
												{{-- <tr class="payment-methods">
													<td colspan="2">
														<strong class="d-block text-color-dark mb-2">Payment Methods</strong>

														<div class="d-flex flex-column">
															<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
																<input id="payment_method1" type="radio" class="me-2" name="payment_method" value="cash-on-delivery" checked />
																Cash On Delivery
															</label>
															<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method2">
																<input id="payment_method2" type="radio" class="me-2" name="payment_method" value="paypal" />
																PayPal
															</label>
														</div>
													</td>
												</tr> --}}
												<tr>
													<td colspan="2">
														Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
													</td>
												</tr>
											</tbody>
										</table>
										<button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3" >Place Order <i class="fas fa-arrow-right ms-2"></i></button>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>

			@include('frontend.footer.footer');
		</div>

		@include('frontend.footer.js');
		
	</body>

</html>