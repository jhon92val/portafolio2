<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Jesús Konde - @yield('titulo' , 'Diseñador')</title>
		<!-- Favicons-->
		<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
		<!-- Fuentes Web-->
		<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600,700|Open+Sans:400,400i,700" rel="stylesheet">
		<!-- Bootstrap core CSS-->
		<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Fuentes de Iconos-->
		<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/et-line.css')}}" rel="stylesheet">
		<!-- Plugins-->
		<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/vertical.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
		<!-- Template core CSS-->
		<link href="{{asset('assets/css/template.css')}}" rel="stylesheet">
	</head>
	<body>

		<!-- Preloader-->
		<div class="page-loader">
			<div class="cssload-container">
				<div class="cssload-whirlpool"></div>
			</div>
		</div>
		<!-- Preloader end-->

		<!-- Barra de Menú-->
		
		@include('layouts.header')

		<!-- Fin Barra de Menú-->

		<!-- Wrapper-->
<div class="wrapper">

	
	@yield('banner')

			<!-- Profile-->
			<section class="module" id="profile">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="m-title c-align">
								<h2>Daniel Raleway</h2>
								<h6>Visual Designer & Front-end Developer</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<p><img src="assets/images/im.jpg" alt=""></p>
						</div>
						<div class="col-md-4">
							<h5>Profesional Profile</h5>
							<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest. Map where your photos.</p>
							<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest. Map where your photos.</p>
						</div>
						<div class="col-md-4">
							<h5>My Skills</h5>
							<div class="progress-item">
								<div class="progress-title">Gulp</div>
								<div class="progress">
									<div class="progress-bar progress-bar-brand" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
								</div>
							</div>
							<div class="progress-item">
								<div class="progress-title">UX Design</div>
								<div class="progress">
									<div class="progress-bar progress-bar-brand" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
								</div>
							</div>
							<div class="progress-item">
								<div class="progress-title">HTML / CSS3 / SASS</div>
								<div class="progress">
									<div class="progress-bar progress-bar-brand" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
								</div>
							</div>
							<div class="progress-item">
								<div class="progress-title">Gulp</div>
								<div class="progress">
									<div class="progress-bar progress-bar-brand" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="pb-number-box"><span class="pb-number"></span>%</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Profile end-->

			<!-- Counters-->
			<section class="module module-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="counter">
								<div class="counter-icon"><span class="icon-telescope"></span></div>
								<h5 class="counter-number">
									<div class="counter-timer" data-from="0" data-to="785">0</div>
								</h5>
								<h5 class="counter-title">Pixels Pushed</h5>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter">
								<div class="counter-icon"><span class="icon-strategy"></span></div>
								<h5 class="counter-number">
									<div class="counter-timer" data-from="0" data-to="4017">0</div>
								</h5>
								<h5 class="counter-title">Cups of Coffee</h5>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter">
								<div class="counter-icon"><span class="icon-circle-compass"></span></div>
								<h5 class="counter-number">
									<div class="counter-timer" data-from="0" data-to="546">0</div>
								</h5>
								<h5 class="counter-title">Awards Won</h5>
							</div>
						</div>
						<div class="col-md-3">
							<div class="counter">
								<div class="counter-icon"><span class="icon-global"></span></div>
								<h5 class="counter-number">
									<div class="counter-timer" data-from="0" data-to="468">0</div>
								</h5>
								<h5 class="counter-title">Theme Users</h5>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Counters end-->

			<!-- Portfolio-->
			<section class="module p-b-0" id="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="m-title c-align">
								<h2>My Portfolio</h2>
								<h6>An eye for detail makes our works excellent</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="filters h6" id="filters">
								<li><a class="current" href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".branding">Branding</a></li>
								<li><a href="#" data-filter=".design">Design</a></li>
								<li><a href="#" data-filter=".photo">Photo</a></li>
								<li><a href="#" data-filter=".web">Web</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row row-portfolio" data-columns="4">
						<div class="grid-sizer"></div>
						<div class="portfolio-item js-tilt branding photo large">
							<div class="portfolio-wrapper">
								<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-5.jpg"></div>
								<div class="portfolio-overlay"></div>
								<div class="portfolio-caption">
									<h5 class="portfolio-title">Raleway</h5>
									<h6 class="portfolio-subtitle">Branding</h6>
								</div>
							</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
						</div>
						<div class="portfolio-item js-tilt web design ">
							<div class="portfolio-wrapper">
								<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-1.jpg"></div>
								<div class="portfolio-overlay"></div>
								<div class="portfolio-caption">
									<h5 class="portfolio-title">Hilltop</h5>
									<h6 class="portfolio-subtitle">Design</h6>
								</div>
							</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
						</div>
						<div class="portfolio-item js-tilt photo web ">
							<div class="portfolio-wrapper">
								<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-4.jpg"></div>
								<div class="portfolio-overlay"></div>
								<div class="portfolio-caption">
									<h5 class="portfolio-title">Popcorn</h5>
									<h6 class="portfolio-subtitle">Design</h6>
								</div>
							</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
						</div>
						<div class="portfolio-item js-tilt design branding ">
							<div class="portfolio-wrapper">
								<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-3.jpg"></div>
								<div class="portfolio-overlay"></div>
								<div class="portfolio-caption">
									<h5 class="portfolio-title">Color</h5>
									<h6 class="portfolio-subtitle">Design</h6>
								</div>
							</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
						</div>
						<div class="portfolio-item js-tilt design photo ">
							<div class="portfolio-wrapper">
								<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-2.jpg"></div>
								<div class="portfolio-overlay"></div>
								<div class="portfolio-caption">
									<h5 class="portfolio-title">Bicycles</h5>
									<h6 class="portfolio-subtitle">Design</h6>
								</div>
							</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
						</div>
					</div>
				</div>
			</section>
			<!-- Portfolio end-->

			<!-- Services-->
			<section class="module" id="services">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-telescope"></span></div>
								<div class="icon-box-title">
									<h5>Free Plugins</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-mobile"></span></div>
								<div class="icon-box-title">
									<h5>Fully Responsive</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-chat"></span></div>
								<div class="icon-box-title">
									<h5>Friendly Support</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-gears"></span></div>
								<div class="icon-box-title">
									<h5>Unlimited Colors</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-strategy"></span></div>
								<div class="icon-box-title">
									<h5>Unlimited Headers</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="icon-box">
								<div class="icon-box-icon"><span class="icon-linegraph"></span></div>
								<div class="icon-box-title">
									<h5>Google Web Fonts</h5>
								</div>
								<div class="icon-box-content">
									<p>Foundry offers you the modularity and ease-of-use of a template with the style and aesthetic of contemporary, bespoke web design.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Services end-->

			<!-- Resume-->
			<section class="module module-gray" id="resume">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="m-title c-align">
								<h2>Resume</h2>
								<h6>My education and experience</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="timeline">
								<li>
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-preview"><img src="assets/images/features/1.jpg" alt=""></div>
										<div class="timeline-body">
											<h5 class="timeline-title">Computer science</h5>
											<h6 class="timeline-description">Stanford University | 1998 - 2004</h6>
											<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-preview"><img src="assets/images/features/2.jpg" alt=""></div>
										<div class="timeline-body">
											<h5 class="timeline-title">Visual designer</h5>
											<h6 class="timeline-description">Stanford University | 2004 - 2008</h6>
											<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-preview"><img src="assets/images/features/3.jpg" alt=""></div>
										<div class="timeline-body">
											<h5 class="timeline-title">Frontend-developer</h5>
											<h6 class="timeline-description">Design Corporation | 2008 - 2012</h6>
											<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge"></div>
									<div class="timeline-panel">
										<div class="timeline-preview"><img src="assets/images/features/4.jpg" alt=""></div>
										<div class="timeline-body">
											<h5 class="timeline-title">Lead Developer</h5>
											<h6 class="timeline-description">Creative Design Studio | 2012 - 2017</h6>
											<p>Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover local points of interest.</p>
										</div>
									</div>
								</li>
								<div class="timeline-top"></div>
							</ul>
							<div class="text-center"><a class="btn btn-lg btn-gray" href="#"><span>Download CV</span></a></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Resume end-->

			<!-- Clients and Testimonials-->
			<section class="module module-dark">
				<div class="container">

					<!-- Clients-->
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel clients-carousel">
								<div class="client"><a href="#"><img src="assets/images/clients/logo-1.png" alt=""></a></div>
								<div class="client"><a href="#"><img src="assets/images/clients/logo-2.png" alt=""></a></div>
								<div class="client"><a href="#"><img src="assets/images/clients/logo-3.png" alt=""></a></div>
								<div class="client"><a href="#"><img src="assets/images/clients/logo-4.png" alt=""></a></div>
							</div>
						</div>
					</div>
					<!-- Clients end-->

					<!-- Testimonials-->
					<div class="row">
						<div class="col-md-8 m-auto">
							<div class="spacer m-t-140"></div>
							<div class="tms-slides owl-carousel" data-carousel-options="{&quot;autoPlay&quot;: &quot;5000&quot;}">
								<div class="tms-item">
									<div class="tms-icons">
										<h2 class="icon-chat"></h2>
									</div>
									<div class="tms-content">
										<blockquote>
											<p>If you want to know what a man's like, take a good look at how he treats his inferiors, not his equals.</p>
										</blockquote>
									</div>
									<div class="tms-author">
										<h6>J.K. Rowling</h6>
									</div>
								</div>
								<div class="tms-item">
									<div class="tms-icons">
										<h2 class="icon-chat"></h2>
									</div>
									<div class="tms-content">
										<blockquote>
											<p>To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</p>
										</blockquote>
									</div>
									<div class="tms-author">
										<h6>Ralph Waldo Emerson</h6>
									</div>
								</div>
								<div class="tms-item">
									<div class="tms-icons">
										<h2 class="icon-chat"></h2>
									</div>
									<div class="tms-content">
										<blockquote>
											<p>Imperfection is beauty, madness is genius and it's better to be absolutely ridiculous than absolutely boring.</p>
										</blockquote>
									</div>
									<div class="tms-author">
										<h6>Marilyn Monroe</h6>
									</div>
								</div>
							</div>
							<div class="spacer m-b-140"></div>
						</div>
					</div>
					<!-- Testimonials end-->

				</div>
			</section>
			<!-- Clients and Testimonials end-->

			<!-- Posts-->
			<section class="module module-gray" id="blog">
				<div class="container">
					<div class="row blog-grid" style="margin-top: -200px;">
						<div class="col-md-4 post-item">

							<!-- Post-->
							<article class="post">
								<div class="post-preview"><a href="#"><img src="assets/images/blog/1.jpg" alt=""></a>
									<div class="post-category"><a href="#">Lifestyle</a></div>
								</div>
								<div class="post-wrapper">
									<div class="post-header">
										<h2 class="post-title"><a href="blog-single.html">New Trends</a></h2>
									</div>
									<div class="post-content">
										<p>Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case.</p>
									</div>
								</div>
								<div class="post-info"><a href="#">Mike Ross</a> on February 14, 2017</div>
							</article>
							<!-- Post end-->
						</div>
						<div class="col-md-4 post-item">

							<!-- Post-->
							<article class="post">
								<div class="post-preview"><a href="#"><img src="assets/images/blog/3.jpg" alt=""></a>
									<div class="post-category" data-background-color="#ffbb44"><a href="#">Science</a></div>
								</div>
								<div class="post-wrapper">
									<div class="post-header">
										<h2 class="post-title"><a href="blog-single.html">Behind the color</a></h2>
									</div>
									<div class="post-content">
										<p>Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case.</p>
									</div>
								</div>
								<div class="post-info"><a href="#">Mike Ross</a> on February 14, 2017</div>
							</article>
							<!-- Post end-->
						</div>
						<div class="col-md-4 post-item">

							<!-- Post-->
							<article class="post">
								<div class="post-preview"><a href="#"><img src="assets/images/blog/5.jpg" alt=""></a>
									<div class="post-category" data-background-color="#4CAF50"><a href="#">Business</a></div>
								</div>
								<div class="post-wrapper">
									<div class="post-header">
										<h2 class="post-title"><a href="blog-single.html">Bicycles</a></h2>
									</div>
									<div class="post-content">
										<p>Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case.</p>
									</div>
								</div>
								<div class="post-info"><a href="#">Mike Ross</a> on February 14, 2017</div>
							</article>
							<!-- Post end-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<div class="spacer m-b-30"></div><a class="btn btn-brand" href="#"><span>View All Posts</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Posts end-->

			<!-- Contact-->
			<section class="module" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="m-title c-align">
								<h2>Let's talk</h2>
								<h6>Drop us a line or give us a ring</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form id="contact-form" method="post" novalidate>
								<div class="row">
									<div class="form-group col-sm-4">
										<input class="form-control" type="text" name="name" placeholder="Name" required="">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group col-sm-4">
										<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group col-sm-4">
										<input class="form-control" type="text" name="phone" placeholder="Phone" required="">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group col-sm-12">
										<textarea class="form-control" name="message" placeholder="Message" rows="8" required="" style="height: 184px; ;"></textarea>
									</div>
									<div class="form-group col-sm-12">
										<div class="text-center m-t-20">
											<button class="btn btn-round btn-brand" type="submit"><span>Send Message</span></button>
										</div>
									</div>
								</div>
							</form>
							<!-- Ajax response-->
							<div class="ajax-response text-center" id="contact-response"></div>
						</div>
					</div>
				</div>
			</section>

			<!-- Map-->
			<section class="maps-container">
				<div class="map" data-addresses="[48.859822, 2.352647]" data-info="[Lorem ipsum dolor sit amet.]" data-icon="assets/images/map-icon.png" data-zoom="15"></div>
			</section>
			<!-- Map end-->

			@include('layouts.footer')
		</div>
		<!-- Wrapper end-->

		<!-- Scripts-->
		<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
		<!--<script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>-->
		<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
		<script src="{{asset('assets/js/plugins.min.js')}}"></script>
		<script src="{{asset('assets/js/custom.min.js')}}"></script>
	</body>

<!-- Mirrored from themes.2the.me/MStone/2.3.1/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2019 20:27:27 GMT -->
</html>