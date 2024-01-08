
<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>
	
	<!-- Meta -->
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="HugeBinary">
	<meta name="robots" content="">
	<meta name="description" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:title" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:description" content="MoonCart Shop & eCommerce HTML Template">
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON https://mooncart.dexignzone.com/xhtml/index-2.html -->
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri( );?> /assets/images/favicon.png">
	
	<!-- PAGE TITLE HERE -->
	<title><?php bloginfo('name');?></title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	
	<?php wp_head();?>
</head>	
<body <?php body_class();?>>

<div class="page-wraper">
	<!-- <div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="assets/images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div> -->
	
	<!-- Header -->
	<header class="site-header mo-left header style-2">		
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.html"><img class="mc_logo" src="<?php echo get_theme_mod('mc_logo');?>" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav d-md-flex d-none">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item info-box pe-3 d-xl-flex d-none">
								<div class="nav-link">
									<div class="dz-icon">
										<i class="flaticon flaticon-ship"></i>
									</div>
									<div class="info-content">
										<span>FREE</span>
										<h6 class="title mb-0">Shipping</h6>
									</div>
								</div>
							</li>
							<li class="nav-item info-box ">

								<div class="mc-right-nav nav-link">
									<div class="dz-icon">
										<i class="flaticon flaticon-call-center"></i>
									</div>
									<div class="info-content">
										<span class='add-support-text'><?php echo get_theme_mod('add_support_text');?></span>
										<h6 class="add_contact_number title mb-0"><?php echo get_theme_mod('add_contact_number');?></h6>
									</div>
								</div>							

							</li>

						</ul>
					</div>
				</div>
				
				<!-- header search nav -->

				<div class="header-search-nav">
					<form class="header-item-search">
						<div class="input-group search-input">
							<select class="default-select">
								<option>All Categories</option>
								<option>Photography </option>
								<option>Arts</option>
								<option>Adventure</option>
								<option>Action</option>
								<option>Games</option>
								<option>Movies</option>
								<option>Comics</option>
								<option>Biographies</option>
								<option>Children’s Books</option>
								<option>Historical</option>
								<option>Contemporary</option>
								<option>Classics</option>
								<option>Education</option>
							</select>
							<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search for products">
							<button class="btn" type="button">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</button>
						</div>
					</form>
				</div>

			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar dark clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="<?php echo get_template_directory_uri( );?> /assets/images/svg/logo.svg" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">							
							<ul class="header-right">
								<li class="nav-item login-link">
									<a class="nav-link" href="shop-my-account.html">
										LOGIN / REGISTER
									</a>
								</li>
								<li class="nav-item search-link">
									<a class="nav-link"  href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="10.0535" cy="10.55" r="7.49047" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.2632 16.1487L18.1999 19.0778" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</li>
								<li class="nav-item wishlist-link">
									<a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2.64119 10.4097C1.74702 7.61808 2.79202 4.42724 5.72285 3.48308C7.26452 2.98558 8.96619 3.27891 10.2479 4.24308C11.4604 3.30558 13.2245 2.98891 14.7645 3.48308C17.6954 4.42724 18.747 7.61808 17.8537 10.4097C16.462 14.8347 10.2479 18.2431 10.2479 18.2431C10.2479 18.2431 4.07952 14.8864 2.64119 10.4097Z" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M13.5813 6.32781C14.473 6.61614 15.103 7.41197 15.1788 8.34614" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</li>
								<li class="nav-item cart-link">
									<a href="javascript:void(0);" class="nav-link cart-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M1.08374 2.61947C1.08374 2.27429 1.36356 1.99447 1.70874 1.99447H3.29314C3.91727 1.99447 4.4722 2.39163 4.67352 2.98239L5.06379 4.1276H15.4584C17.6446 4.1276 19.4168 5.89981 19.4168 8.08593V11.5379C19.4168 13.7241 17.6446 15.4963 15.4584 15.4963H9.22182C7.30561 15.4963 5.66457 14.1237 5.32583 12.2377L4.00967 4.90953L3.49034 3.3856C3.46158 3.30121 3.3823 3.24447 3.29314 3.24447H1.70874C1.36356 3.24447 1.08374 2.96465 1.08374 2.61947ZM5.36374 5.3776L6.55614 12.0167C6.78791 13.3072 7.91073 14.2463 9.22182 14.2463H15.4584C16.9542 14.2463 18.1668 13.0337 18.1668 11.5379V8.08593C18.1668 6.59016 16.9542 5.3776 15.4584 5.3776H5.36374Z" fill="var(--white)"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M8.16479 17.8278C8.16479 17.1374 8.72444 16.5778 9.4148 16.5778H9.42313C10.1135 16.5778 10.6731 17.1374 10.6731 17.8278C10.6731 18.5182 10.1135 19.0778 9.42313 19.0778H9.4148C8.72444 19.0778 8.16479 18.5182 8.16479 17.8278Z" fill="var(--white)"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8315 17.8278C14.8315 17.1374 15.3912 16.5778 16.0815 16.5778H16.0899C16.7802 16.5778 17.3399 17.1374 17.3399 17.8278C17.3399 18.5182 16.7802 19.0778 16.0899 19.0778H16.0815C15.3912 19.0778 14.8315 18.5182 14.8315 17.8278Z" fill="var(--white)"/>
										</svg>
										<span class="badge badge-circle">5</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.html"><img src="<?php echo get_template_directory_uri( );?> /assets/images/svg/logo.svg" alt=""></a>
						</div>
						<div class="browse-category-menu">
							<a href="javascript:void(0);" class="category-btn">
								<svg class="me-3" width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="0.248047" y="12" width="20" height="1" fill="white"/>
									<rect x="0.248047" width="20" height="1" fill="white"/>
									<rect x="0.248047" y="6" width="20" height="1" fill="white"/>
								</svg>
								<span class="category-btn-title">
									Browse Categories
								</span>
								<span class="toggle-arrow ms-auto">
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.24805 9L12.248 15L18.248 9" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</span>
							</a>
							<div class="category-menu-items" style="display: none;">
								<ul class="nav navbar-nav">
									<li class="has-mega-menu cate-drop">
										<a href="javascript:void(0);">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_12)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_82">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Bamboo Products</span>
											<span class="menu-icon">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 12L10 8L6 4" stroke="#24262B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
										</a>
										<div class="mega-menu">
											<div class="row">
												<div class="col-md-3 col-sm-4 col-6"><a href="javascript:void(0);" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems<span class="badge bg-primary">NEW</span></a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
														<li><a href="shop-standard.html">Blinds And Shades</a></li>
														<li><a href="shop-standard.html">Water Monitors</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"><a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
														<li><a href="shop-standard.html">Blinds And Shades</a></li>
														<li><a href="shop-standard.html">Water Monitors</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"> <a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
														<li><a href="shop-standard.html">Blinds And Shades</a></li>
														<li><a href="shop-standard.html">Water Monitors<span class="badge bg-red">Offer</span></a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"> <a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting<span class="badge bg-secondary">Exclusive</span></a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
														<li><a href="shop-standard.html">Blinds And Shades</a></li>
														<li><a href="shop-standard.html">Water Monitors</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"><a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting<span class="badge bg-orange">Feture</span></a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"> <a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks<span class="badge bg-purple">SALE</span></a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
														<li><a href="shop-standard.html">Blinds And Shades</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"> <a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
														<li><a href="shop-standard.html">Home Entertainment Systems</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-4 col-6"> <a href="shop-standard.html" class="menu-title">Smart Home Products</a>
													<ul>
														<li><a href="shop-standard.html">Thermostats</a></li>
														<li><a href="shop-standard.html">Lighting</a></li>
														<li><a href="shop-standard.html">Security Systems</a></li>
														<li><a href="shop-standard.html">Locks</a></li>
														<li><a href="shop-standard.html">Home Assistants</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li class="cate-drop">
										<a href="javascript:void(0);">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_182)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_14822">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Fitness Trackers</span>
											<span class="menu-icon">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 12L10 8L6 4" stroke="#24262B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
										</a>
										<ul class="sub-menu">
											<li><a href="shop-standard.html">Thermostats</a></li>
											<li><a href="shop-standard.html">Lighting</a></li>
											<li><a href="shop-standard.html">Security Systems</a></li>
											<li><a href="shop-standard.html">Locks</a></li>
											<li><a href="shop-standard.html">Home Assistants</a></li>
											<li><a href="shop-standard.html">Entertainment Systems</a></li>
											<li><a href="shop-standard.html">Blinds And Shades</a></li>
											<li><a href="shop-standard.html">Appliances</a></li>
											<li><a href="shop-standard.html">Water Monitors</a></li>
											<li><a href="shop-standard.html">Gardening Systems</a></li>
										</ul>
									</li>
									
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_14821)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_02">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Protein Supplements</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_2)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_14825">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Fitness Equipment</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_14826)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_14827">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Reusable Bags</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_10_1482)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_0_1482">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Water Bottles </span>
											<span class="badge bg-purple">SALE</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_90_1482)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_14">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Home Assistants</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_14829)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_90_12">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Water Monitors</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_1236)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip_0_1482">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Baby Monitors</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_18)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_99">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Convertible Car Seats</span>
										</a>
									</li>
									<li>
										<a href="shop-standard.html">
											<svg class="me-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_190_10)">
												<path d="M9.64305 2.11035L9.06095 2.76886L14.1811 7.2949H0.748047V8.17381H14.1811L9.06095 12.6999L9.64305 13.3584L15.748 7.96173V7.50698L9.64305 2.11035Z" fill="#0D775E"/>
												</g>
												<defs>
												<clipPath id="clip0_190_11">
												<rect width="15" height="15" fill="white" transform="translate(0.748047 0.234375)"/>
												</clipPath>
												</defs>
											</svg>
											<span>Convertible Car Seats</span>
										</a>
									</li>
									<li class="menu-items">
										<a href="javascript:void(0);">
											<img class="me-3" src="<?php echo get_template_directory_uri( );?> /assets/images/svg/menu.svg" alt="">
											<span>More Products</span>
											<span class="menu-icon">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 12L10 8L6 4" stroke="#24262B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
<?php
wp_nav_menu(
    array(
        'theme_location'  => 'header_menu', // Specify the registered menu location
        'menu'            => '', // Menu ID, slug, or name from wp_terms
        'container'       => 'nav', // Container element type (e.g., 'div' or 'nav')
        'container_class' => 'main-navigation', // Class of the container element
        'container_id'    => 'site-navigation', // ID of the container element
        'menu_class'      => 'nav navbar-nav dark-nav', // Class for the <ul> element
        'menu_id'         => '', // ID for the <ul> element
        'before'          => '', // Text before the link text
        'after'           => '', // Text after the link text
        'link_before'     => '', // Text before each link
        'link_after'      => '', // Text after each link
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Custom wrapper for the menu
        'depth'           => 0, // Depth of the menu (0 means all levels)
        'walker'          => '', // Custom walker class for advanced customization
        'fallback_cb'     => 'wp_page_menu', // Fallback function if the menu doesn't exist
    )
);
?>

						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="javascript:void(0);"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="javascript:void(0);"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="javascript:void(0);"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- SearchBar -->
		<div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				&times;
			</button>
			<div class="container">
				<form class="header-item-search">
					<div class="input-group search-input">
						<select class="default-select">
							<option>All Categories</option>
							<option>Wooden Bottles </option>
							<option>Wooden Furniture</option>
							<option>Metal Utensils</option>
							<option>Wooden Utensils</option>
							<option>Baby Products</option>
							<option>Yoga Mats</option>
							<option>Eco-Friendly</option>
							<option>Childern's Strollers</option>
							<option>Bamboo products</option>
							<option>Healthy Products</option>
							<option>Luxury Couch</option>
							<option>Video Instructors</option>
						</select>
						<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Product">
						<button class="btn" type="button">
							<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
					<ul class="recent-tag">
						<li class="pe-0"><span>Quick Search :</span></li>
						<li><a href="shop-list.html">Wooden Products</a></li>
						<li><a href="shop-list.html">Metal Products</a></li>
						<li><a href="shop-list.html">Baby Products</a></li>
						<li><a href="shop-list.html">Yoga Mats</a></li>
					</ul>
				</form>
				<div class="row">
					<div class="col-xl-12">
						<h5 class="mb-3">You May Also Like</h5>
						<div class="swiper category-swiper2">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/1.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Water Bottles</a></h6>
											<h6 class="price">$40.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/3.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Bamboo toothbrushes</a></h6>
											<h6 class="price">$30.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/4.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Eco friendly bags</a></h6>
											<h6 class="price">$35.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/2.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Cup</a></h6>
											<h6 class="price">$20.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/3.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Bamboo toothbrushes</a></h6>
											<h6 class="price">$70.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/3.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Eco friendly bags</a></h6>
											<h6 class="price">$45.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/7.png" alt="image">	
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Bottles</a></h6>
											<h6 class="price">$40.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/4.png" alt="image">	
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Paper Bags</a></h6>
											<h6 class="price">$60.00</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SearchBar -->
		
		<!-- Sidebar cart -->
		<div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				&times;
			</button>
			<div class="offcanvas-body">
				<div class="product-description">
					<div class="dz-tabs">
						<ul class="nav nav-tabs center" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="shopping-cart" data-bs-toggle="tab" data-bs-target="#shopping-cart-pane" type="button" role="tab" aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
									<span class="badge badge-light">5</span>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane" type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false">Wishlist
									<span class="badge badge-light">2</span>
								</button>
							</li>
						</ul>
						<div class="tab-content pt-4" id="dz-shopcart-sidebar">
							<div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel" aria-labelledby="shopping-cart" tabindex="0">
								<div class="shop-sidebar-cart">
									<ul class="sidebar-cart-list">
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic1.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Water Bottles</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$50.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic2.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Bamboo Cups</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$40.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i> 
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic3.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Toothbrushes</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$65.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>	
									</ul>
									<div class="cart-total">
										<h5 class="mb-0">Subtotal:</h5>
										<h5 class="mb-0">300.00$</h5>
									</div>
									<div class="mt-auto">
										<div class="shipping-time">													
											<div class="dz-icon">
												<i class="flaticon flaticon-ship"></i>
											</div>
											<div class="shipping-content">
												<h6 class="title pe-4">Congratulations , you've got free shipping!</h6>
												<div class="progress">
													<div class="progress-bar progress-animated border-0" style="width: 75%;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
											</div>
										</div>
										<a href="shop-checkout.html" class="btn btn-light btn-block m-b20">Checkout</a>	
										<a href="shop-cart.html" class="btn btn-secondary btn-block">View Cart</a>	
									</div>	
								</div>	
							</div>
							<div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist" tabindex="0">
								<div class="shop-sidebar-cart">
									<ul class="sidebar-cart-list">
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic1.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Water Bottles</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$50.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic2.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Cup</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$40.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i> 
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="<?php echo get_template_directory_uri( );?> /assets/images/shop/shop-cart/pic3.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Bamboo toothbrushes</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$65.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>	
									</ul>
									<div class="mt-auto">
										<a href="shop-wishlist.html" class="btn btn-secondary btn-block">Check Your Favourite</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sidebar cart -->
	</header>
	<!-- Header End -->
