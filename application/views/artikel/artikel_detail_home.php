<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Single Post | Meghna - Responsive Multipurpose Parallax Theme</title>
		
        <meta name="description" content="description">
		
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
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="<?=base_url()?>frontend/css/responsive.css">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Titillium Web -->
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,200' rel='stylesheet' type='text/css'>
		<!-- Source Sans Pro -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
		<!-- Oswald -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<!-- Raleway -->
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->
        <script src="<?=base_url()?>frontend/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body class="blog-page">
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
        
        <?php $this->load->view('include/navbar');
		?>
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Welcome to Our Blog</h1>
                        </div>
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">                               
                                <div class="post-thumb">
                                    <a href="<?=site_url('artikel/detailartikel/'.$row->artikel_id)?>">
										<img src="<?=base_url('uploads/artikel/'.$row->image_artikel)?>" alt="Image" class="img-responsive">
									</a>
                                </div>
								<div class="post-excerpt">
									<h3><a href="<?=site_url('artikel/detailartikel/'.$row->artikel_id)?>"><?=$row->judul_artikel?></a></h3>
									
									<p><?=$row->isi_artikel?></p>

								</div>

								<div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="<?=$row->link_video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
                                </div>

								<div class="post-meta">
									<span class="post-date">
										<i class="fa fa-calendar"></i><?=$row->tanggal_dibuat?>
									</span>
									<span class="author">
										<i class="fa fa-user"></i><a href="#"><?=$row->penulis_artikel?></a>
									</span>
									<span class="post-tags">
										<i class="fa fa-tags"></i><a href="#"><?=$row->nama_divisi?></a>
									</span>
								</div>
                            </article>
                            <!-- End Single Post -->
							
                            <div class="next-prev clearfix">
                                <a href="<?=base_url()?>frontend/" class="prev-post">
                                    <i class="fa fa-angle-left fa-2x"></i>Previous Post
                                </a>
                                <a href="<?=base_url()?>frontend/" class="next-post pull-right">
                                    Next Post<i class="fa fa-angle-right fa-2x"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                   
					<?php 
					 $this->load->view('include/sidemenu');
					?>
					
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        

		<?php 
		$this->load->view('include/footer');
		?>
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp"><i class="fa fa-angle-up fa-2x"></i></a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="<?=base_url()?>frontend/js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="<?=base_url()?>frontend/js/bootstrap.min.js"></script>
		<!-- Back to Top -->
		<script src="<?=base_url()?>frontend/js/jquery.scrollUp.min.js"></script>
		<script src="<?=base_url()?>frontend/js/classie.js"></script>
		<!-- Owl Carousel -->
		<script src="<?=base_url()?>frontend/js/owl.carousel.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="<?=base_url()?>frontend/js/jquery.nicescroll.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?=base_url()?>frontend/js/jquery.easing-1.3.pack.js"></script>
		<!-- wow.min Script -->
		<script src="<?=base_url()?>frontend/js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="<?=base_url()?>frontend/js/jquery.fitvids.js"></script>
		<!-- Custom js -->
		<script src="<?=base_url()?>frontend/js/custom.js"></script>

    </body>
</html>