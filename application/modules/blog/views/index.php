		<title><?php echo $title;?> | Society Ambassadors</title>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="<?php echo base_url(); ?>contact">Contact</a>
						<a href="<?php echo base_url(); ?>login">Login</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="<?php echo prep_url('facebook.com/societyambassadorsgroup') ?>" target="_blank" class="grow"><i class="icon-facebook2"></i></a>
						<a href="<?php echo prep_url('youtube.com/channel/UC_GTkH-A7KtZBdWfeZA7feA') ?>" target="_blank" class="grow"><i class="icon-youtube2"></i></a>
						<a href="<?php echo prep_url('instagram.com/societyambassadorsfoundation'); ?>" target="_blank" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo base_url(); ?>">Society Ambassadors</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>
							<li >
								<a href="<?php echo base_url(); ?>about">About</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url(); ?>blog">Blog</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>events">Events</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(public/images/blog-view.jpeg);">
				<div class="desc animate-box">
					<h2>Our <strong>Blog &amp; News</strong></h2>
					<span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
				</div>
			</div>

		</div>
		
		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Read. Learn. Share</h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-bottom-padded-md">
					
						<div class="col-md-12 text-center heading-section">
							<div class="fh5co-blog animate-box">
								<?php echo img(base_url('uploads/blog/'.$blog['img'])); ?>
							</div>
							<div class="blog-text">
								<div class="prod-title">
									<h3><?php echo ucwords($blog['title']); ?></h3>
									<h5 class="posted_by">
										<?php 
											$date = strtotime($blog['date']);
											$view = date("jS F, Y ", $date);
											echo $view; 
										?>
											
									</h5>
									<p><?php echo $blog['about']; ?></p>	
								</div>
							</div> 
						</div>
						<div class="clearfix visible-md-block"></div>
					
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center animate-box">
						<a href="<?php echo base_url();?>blog" class="btn btn-primary btn-lg">Our Blog</a>
					</div>
				</div>

			</div>
		</div>
		<!-- fh5co-blog-section -->
