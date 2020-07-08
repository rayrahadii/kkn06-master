<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        
        <meta name="author" content="Muhammad Morshed">
		
        <title>Meghna | Responsive Multipurpose Parallax HTML5 Template</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>frontend/img/favicon.png" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/media-queries.css">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="<?=base_url()?>frontend/js/modernizr-2.6.2.min.js"></script>

	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="<?=base_url()?>frontend/img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<img class="wow fadeInUp" src="<?=base_url()?>frontend/img/meghna.png" alt="Meghna">
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Meghna</h2>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">Highly Responsive</h2>
								<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Get Started</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">One Page Parallax HTML Template</h2>
								<h3 class="animated fadeInLeft">Clean and Professional Design</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Learn More</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <?php $this->load->view('include/navbar');
		?>
		
		<!--
		Start About Section
		==================================== -->
		<section id="tentang" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Tentang <span class="color">Kami</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="ddd">We're Creative</h3>								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		
		<!-- Start Portfolio Section
		=========================================== -->
		
		<section id="showcase">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Gallery <span class="color">Kegiatan</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					
						<!-- portfolio item filtering -->
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".app">Mobile App</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Web Design</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Photoshop</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".illustrator">Illustrator</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
				
					<!-- single portfolio item -->	
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="<?=base_url()?>frontend/javascript:void(0)" data-largesrc="<?=base_url()?>frontend/img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=base_url()?>frontend/img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->
			
		</section>   <!-- End section -->
		
		
		<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
				
					
				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Our Team
		=========================================== -->
		
		<section id="our-team">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Divisi <span class="color">Kami</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="<?=base_url()?>frontend/img/team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="<?=base_url()?>frontend/#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?=base_url()?>frontend/#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="<?=base_url()?>frontend/#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="<?=base_url()?>frontend/#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Abul Mal Muhit</h3>
								<span>CEO/Founder</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
				
				</div>  	<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!-- Start Twitter Feed
		=========================================== -->
		
		<section id="twitter-feed" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
					
						<!-- twitter bird -->
						<div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">
							<span>
								<i class="fa fa-instagram fa-4x"></i>
							</span>
							<h2>kkn06upnvjatim</h2>
						</div>
						<!-- /twitter bird -->
						
						<!-- follow us button -->
						<a href="<?=base_url()?>frontend/https://www.instagram.com/kkn06upnvjatim/?hl=id" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Cek Disini !</a>						
						<!-- /follow us button -->
						
					</div>
				</div>       <!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Blog Section
		=========================================== -->
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Artikel <span class="color">Terbaru</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">

                    <!-- single blog post -->
                    <?php 
                    foreach($row->result() as $key => $data) { ?>
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="<?=base_url('uploads/artikel/'.$data->image_artikel)?>" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3><?=$data->judul_artikel?></h3>
									<div class="post-meta">
									<span class="post-date">
										<i class="fa fa-calendar"></i><?=$data->tanggal_dibuat?>
									</span>
									<span class="author">
										<i class="fa fa-user"></i><?=$data->penulis_artikel?>
									</span>
									<span class="post-tags">
										<i class="fa fa-tags"></i><?=$data->nama_divisi?>
									</span>
								</div>
									<a class="btn btn-transparent" href="<?=site_url('artikel/detailartikel/'.$data->artikel_id)?>">Lihat Selengkapnya</a>
								</div>
							</div>						
                        </article>
                        <?php 
                    } ?>
                    <!-- single blog post -->

                    
					</div>

					<div class="all-post text-center">
						<a class="btn btn-transparent" href="<?=base_url('artikel/artikel_list')?>">View All Post</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->
		
		<!-- Srart Contact Us
		=========================================== -->		
		<section id="contact-us">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span class="color">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +880-31-000-000</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Fax: +880-31-000-000</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: hello@meghna.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== -->
		
		<?php $this->load->view('include/footer');
		?>
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="<?=base_url()?>frontend/js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="<?=base_url()?>frontend/js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="<?=base_url()?>frontend/js/jquery.slitslider.js"></script>
		<script src="<?=base_url()?>frontend/js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="<?=base_url()?>frontend/js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="<?=base_url()?>frontend/js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="<?=base_url()?>frontend/js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="<?=base_url()?>frontend/js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="<?=base_url()?>frontend/js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="<?=base_url()?>frontend/js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="<?=base_url()?>frontend/js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="<?=base_url()?>frontend/js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="<?=base_url()?>frontend/js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="<?=base_url()?>frontend/js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="<?=base_url()?>frontend/js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="<?=base_url()?>frontend/js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="<?=base_url()?>frontend/js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="<?=base_url()?>frontend/js/grid.js"></script>
		<!-- Custom js -->
		<script src="<?=base_url()?>frontend/js/custom.js"></script>

    </body>
</html>