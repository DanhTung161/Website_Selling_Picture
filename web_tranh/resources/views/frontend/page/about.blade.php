<!DOCTYPE html>
<html>
	<head>

		@include('frontend.header.header')

	</head>
	<body data-plugin-page-transition>

		<div class="body">
			@include('frontend.header.header_item')

			<div role="main" class="main">

				<div class="container pt-5">

					<div class="row py-4 mb-2">
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Alice Doe</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Marketing</p>
							</div>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
							<p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									<a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
								</div>
								<div class="col-sm-6 text-lg-end my-4 my-lg-0">
									<strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
									<ul class="social-icons float-lg-end">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<img src="img/team/team-7.jpg" class="img-fluid mb-2" alt="">
						</div>
					</div>
				</div>

				<section class="section section-default border-0 mt-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1200">
					<div class="container py-4">

						<div class="row featured-boxes featured-boxes-style-4">
							<div class="col-md-6 col-lg-3 my-2">
								<div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
									<div class="box-content p-0 text-start">
										<i class="icon-featured icon-screen-tablet icons text-12 m-0 p-0"></i>
										<h4 class="font-weight-bold text-color-dark">Mobile Apps</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 my-2">
								<div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1400">
									<div class="box-content p-0 text-start">
										<i class="icon-featured icon-layers icons text-12 m-0 p-0"></i>
										<h4 class="font-weight-bold text-color-dark">Creative Websites</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 my-2">
								<div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400">
									<div class="box-content p-0 text-start">
										<i class="icon-featured icon-magnifier icons text-12 m-0 p-0"></i>
										<h4 class="font-weight-bold text-color-dark">SEO Optimization</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 my-2">
								<div class="m-0 featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600">
									<div class="box-content p-0 text-start">
										<i class="icon-featured icon-screen-desktop icons text-12 m-0 p-0"></i>
										<h4 class="font-weight-bold text-color-dark">Brand Solutions</h4>
										<p class="mb-0">Lorem ipsum dolor sit amet, coctetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>

				<div class="container pt-5 pb-2">
					<div class="overflow-hidden">
						<h2 class="text-color-dark font-weight-normal text-6 mb-0 appear-animation" data-appear-animation="maskUp"><strong class="font-weight-extra-bold">Projects</strong></h2>
					</div>
					<div class="overflow-hidden mb-3">
						<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
					</div>
					<div class="row">
						<div class="col">

							<div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
								<div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Presentation</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-1.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Watch</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-1.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-2.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Identity</span>
													<span class="thumb-info-type">Logo</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-2.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-27.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Screens</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-27.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-4.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Three Bottles</span>
													<span class="thumb-info-type">Logo</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-4.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-5.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Company T-Shirt</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-5.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-6.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Mobile Mockup</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-6.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-7.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Porto Label</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-7.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-23.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Business Folders</span>
													<span class="thumb-info-type">Logo</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-23.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-24.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Tablet Screen</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-24.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-25.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Black Watch</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-25.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

									<div class="portfolio-item">
										<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="img/projects/project-26.jpg" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">Monitor Mockup</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
													</a>
													<a href="img/projects/project-26.jpg" class="lightbox-portfolio">
														<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
													</a>
												</span>
											</span>
										</span>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<footer id="footer" class="footer-texts-more-lighten">
				<div class="container">
					<div class="row py-4 my-5">
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
							<ul class="list list-unstyled">
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
									1234 Street Name, City, State, USA
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
									<a href="tel:+1234567890">Toll Free (123) 456-7890</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
									<a href="mailto:mail@example.com">mail@example.com</a>
								</li>
								<li class="pb-1 mb-2">
									<span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
									Mon - Sun / 9:00AM - 8:00PM
								</li>
							</ul>
							<ul class="social-icons social-icons-clean-with-border social-icons-medium">
								<li class="social-icons-instagram">
									<a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
								</li>
								<li class="social-icons-twitter mx-2">
									<a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="social-icons-facebook">
									<a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
							<h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
								<li class="mb-0"><a href="about-us.html">About Us</a></li>
								<li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
								<li class="mb-0"><a href="page-careers.html">Careers</a></li>
								<li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
								<li class="mb-0"><a href="#">Our Location</a></li>
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-4 mb-5 mb-md-0">
							<h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article class="mb-3">
								<a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
							<article>
								<a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
								<p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
							</article>
						</div>
						<div class="col-md-6 col-lg-3">
							<h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
							<p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
								<div class="row">
									<div class="form-group col">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" />
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
						<div class="row">
							<div class="col-12 text-center">
								<p class="mb-0">Porto Template © 2022. All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		@include('frontend.footer.js');
	</body>
</html>