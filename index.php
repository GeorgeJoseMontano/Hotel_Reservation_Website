
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Luxe Hotel - Demo for ITCC13</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Final Project - ITCC13" />

		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">
		<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

		<!-- Stylesheets -->
		<!-- Dropdown Menu -->
		<link rel="stylesheet" href="css/superfish.css">
		
		<!-- CS Select -->
		<link rel="stylesheet" href="css/cs-select.css">
		<link rel="stylesheet" href="css/cs-skin-border.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- Themify Icons -->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Flat Icon -->
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- Icomoon -->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">
		
		<!-- Style -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<div id="fh5co-header">
				<header id="fh5co-header-section">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
							<h1 id="fh5co-logo"><a href="index.html">Luxe</a></h1>
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li><a class="active" href="index.html">Home</a></li>
									<li>
										<a href="hotel.html" class="fh5co-sub-ddown">Hotel</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#">Luxe Hotel</a></li>
											<li><a href="#">Deluxe Hotel</a></li>
											<li>
												<a href="#" class="fh5co-sub-ddown">King Hotel</a>
												<ul class="fh5co-sub-menu">
													<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
													<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
													<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
													<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
													<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
													<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
												</ul>
											</li>
											<li><a href="#">Five Star Hotel</a></li> 
										</ul>
									</li>
									<li><a href="exampleModalCenter1" data-toggle="modal" data-target="#exampleModalCenter1">Book</a></li>
									<li><a href="search_modal" data-toggle="modal" data-target="#search_modal">Check Reservation</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>	
			</div>
			<!-- end:fh5co-header -->

  
			<!-- Modal -->
			<div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="search_modalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="search_modalTitle">Check Reservation</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">

							<!--create two entry forms-->
							<form action="insert.php" method="POST">
								<div class="form-group">
									<label for="exampleInputEmail1">Email Address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Last Name</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</form>
							
							<input class="btn btn-primary" type="button" onclick="location.href='reservation.html';" value="Search Reservation" />
						</div>
					</div>
				</div>
			</div>
			<!--Modal end -->

			<!--create a modal for registration-->
			<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Registration</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						
						<form action="insert.php" method="POST">
							<div class="form-row">
							  <div class="form-group col-md-4">
								<label for="inputFName">First Name</label>
								<input type="text" class="form-control" id="inputFName" name="inputFName" required>
							  </div>
							  <div class="form-group col-md-4">
								<label for="inputMName">Middle Name</label>
								<input type="text" class="form-control" id="inputMName" name="inputMName">
							  </div>
							  <div class="form-group col-md-4">
								<label for="inputFamName">Family Name</label>
								<input type="text" class="form-control" id="inputFamName" name="inputFamName" required>
							  </div>
							</div>

                            <div class="form-group">
								<label for="inputEmail">Email Address</label>
								<input type="text" class="form-control" id="inputEmail" name="inputEmail" required>
							</div>
							
							<div class="form-group">
							  <label for="inputNumberGuests">Number of Guests</label>
							  <input type="number" class="form-control" id="inputNumberGuests" name="inputNumberGuests" placeholder="0" min="1" max="5" required>
							</div>
													  
							<div class="form-group">
							<label for="inputHotel">Hotel</label>
							<select id="inputHotel" class="form-control" name="inputHotel" required>
								<option selected value="">Choose...</option>
								<option value="Manila">Manila</option>
								<option value="Cebu">Cebu</option>
								<option value="Cagayan de Oro">Cagayan de Oro</option>
							</select>
							</div>

							<div class="form-group">
								<label for="inputRoom">Room</label>
								<select id="inputRoom" class="form-control" name="inputRoom" required>
									<option selected value="">Choose...</option>
									<option value="Single Economy">Single Economy</option>
									<option value="Double Economy">Double Economy</option>
									<option value="Premium">Premium</option>
									<option value="Deluxe">Deluxe</option>
									<option value="Presidential Suite">Presidential Suite</option>
								</select>
								</div>
							

							
							<!-- insert a date picker -->
							<div class="form-group">
								<label for="arrival-date-input">Arrival Date</label>
								<input class="form-control" type="date" value="2022-08-19" id="arrival-date-input" name="arrival" required>
							</div>

							<div class="form-group">
								<label for="departure-date-input">Departure Date</label>
								<input class="form-control" type="date" value="2022-08-19" id="departure-date-input" name="departure" required>
							</div>
							<!-- end of date picker -->

							<div class="form-group">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="gridCheck" required>
								  <label class="form-check-label" for="gridCheck">
									I agree to the <a href=rules.pdf>rules and policies</a> of the hotel
								  </label>
								</div>
							  </div>

							<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
					</div>	
				</div>	
				</div>
			</div>		


			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					<li style="background-image: url(images/slider1.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>Bora Hotel</span></p>
										<h2>Reserve Room for Family Vacation</h2>
										<p>
											<a href="reservation.html" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter1">Book Now</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/slider2.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>Deluxe Hotel</span></p>
										<h2>Make Your Vacation Comfortable</h2>
										<p>
											<a href="reservation.html" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter1">Book Now</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/slider3.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-12 col-md-offset-0 text-center slider-text">
								<div class="slider-text-inner js-fullheight">
									<div class="desc">
										<p><span>Luxe Hotel</span></p>
										<h2>A Best Place To Enjoy Your Life</h2>
										<p>
											<a href="reservation.html" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter1">Book Now</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					
					</ul>
				</div>
			</aside>
			

			<div id="hotel-facilities">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Hotel Facilities</h2>
							</div>
						</div>
					</div>

					<div id="tabs">
						<nav class="tabs-nav">
							<a href="#" class="active" data-tab="tab1">
								<i class="flaticon-restaurant icon"></i>
								<span class="text-responsive">Restaurant</span>
							</a>
							<a href="#" data-tab="tab2">
								<i class="flaticon-cup icon"></i>
								<span class="text-responsive">Bar</span>
							</a>
							<a href="#" data-tab="tab3">
							
								<i class="flaticon-car icon"></i>
								<span class="text-responsive">Pick-up</span>
							</a>
							<a href="#" data-tab="tab4">
								
								<i class="flaticon-swimming icon"></i>
								<span class="text-responsive">Swimming Pool</span>
							</a>
							<a href="#" data-tab="tab5">
								
								<i class="flaticon-massage icon"></i>
								<span class="text-responsive">Spa</span>
							</a>
							<a href="#" data-tab="tab6">
								
								<i class="flaticon-bicycle icon"></i>
								<span class="text-responsive">Gym</span>
							</a>
						</nav>
						<div class="tab-content-container">
							<div class="tab-content active show" data-tab-content="tab1">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://upserve.com/media/sites/2/Featured-image_Meritage.jpg" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Restaurant</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab-content="tab2">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://media.afar.com/uploads/images/afar_post_headers/images/aAMChVTjW3/original_LEDE_The_20Living_20Room_20Bar_courtesy.jpg" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Bars</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab-content="tab3">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://www.kcourtaa.com/application/files/2315/7567/8428/travel-and-transportation-information.jpg" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Pick Up</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab-content="tab4">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://media.cntraveler.com/photos/59dc0961d74f3663416ffe8b/3:2/w_2046,h_1364,c_limit/Pool-COMOMetropolitanMiamiBeach-Florida-CRHotel.jpg" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Swimming Pool</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab-content="tab5">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://info.ehl.edu/hubfs/Blog-EHL-Insights/Blog-Header-EHL-Insights/hotel-spa.jpg" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Spa</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab-content="tab6">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<img src="https://elitetraveler.com/wp-content/uploads/2020/02/Screen-Shot-2020-02-07-at-12.46.26.png" class="img-responsive" alt="Image">
										</div>
										<div class="col-md-6">
											<span class="super-heading-sm">World Class</span>
											<h3 class="heading">Gym</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
											<p class="service-hour">
												<span>Service Hours</span>
												<strong>7:30 AM - 8:00 PM</strong>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<d	iv id="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Happy Customer Says...</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
								</blockquote>
								<p class="author"><cite>John Doe</cite></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
								</blockquote>
								<p class="author"><cite>Rob Smith</cite></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimony">
								<blockquote>
									&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
								</blockquote>
								<p class="author"><cite>Jane Doe</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="fh5co-blog-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title text-center">
								<h2>Our Blog</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="blog-grid" style="background-image: url(images/image-1.jpg);">
								<div class="date text-center">
									<span>09</span>
									<small>Aug</small>
								</div>
							</div>
							<div class="desc">
								<h3><a href="#">Most Expensive Hotel</a></h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="blog-grid" style="background-image: url(images/image-2.jpg);">
								<div class="date text-center">
									<span>09</span>
									<small>Aug</small>
								</div>
							</div>
							<div class="desc">
								<h3><a href="#">1st Anniversary of Luxe Hotel</a></h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="blog-grid" style="background-image: url(images/image-3.jpg);">
								<div class="date text-center">
									<span>09</span>
									<small>Aug</small>
								</div>
							</div>
							<div class="desc">
								<h3><a href="#">Discover New Adventure</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer id="footer" class="fh5co-bg-color">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-3">
									<h3>Company</h3>
									<ul class="link">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Customer Care</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<h3>Our Facilities</h3>
									<ul class="link">
										<li><a href="#">Resturant</a></li>
										<li><a href="#">Bars</a></li>
										<li><a href="#">Pick-up</a></li>
										<li><a href="#">Swimming Pool</a></li>
										<li><a href="#">Spa</a></li>
										<li><a href="#">Gym</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<h3>Subscribe</h3>
									<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
									<form action="#" id="form-subscribe">
										<div class="form-field">
											<input type="email" placeholder="Email Address" id="email">
											<input type="submit" id="submit" value="Send">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<ul class="social-icons">
								<li>
									<a href="#"><i class="icon-twitter-with-circle"></i></a>
									<a href="#"><i class="icon-facebook-with-circle"></i></a>
									<a href="#"><i class="icon-instagram-with-circle"></i></a>
									<a href="#"><i class="icon-linkedin-with-circle"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<div class="copyright">
								<p><small>&copy; ITCC 13.1 Final Project <br> All Rights Reserved. <br>
								Designed by <a href="https://github.com/Yoshilute" target="_blank">Team Group Squad</a> </small></p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>
		<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->
		
		<!-- Javascripts -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<!-- Dropdown Menu -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Counters -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Owl Slider -->
		<!-- // <script src="js/owl.carousel.min.js"></script> -->
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.min.js"></script>
		<!-- CS Select -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>

		<script src="js/custom.js"></script>

	</body>
</html>