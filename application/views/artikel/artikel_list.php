<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blog | Meghna - Responsive Multipurpose Parallax Theme</title>
		
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
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
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
                           
                        <?php 
                    	foreach($row->result() as $key => $data1) { ?>
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                            
                                <div class="post-thumb">
                                    <a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>">
										<img src="<?=base_url('uploads/artikel/'.$data1->image_artikel)?>" alt="3D Beach Art | Meghna" class="img-responsive">
									</a>
                                </div>
								<div class="post-excerpt">
									<h3><a href="<?=base_url()?>frontend/single-post.html"><?=$data1->judul_artikel?></a></h3>
									<p><?=$data1->keterangan_artikel?></p>
									<a class="btn btn-transparent" href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>">Read more</a>
								</div>
								<div class="post-meta">
									<span class="post-date">
										<i class="fa fa-calendar"></i><?=$data1->tanggal_dibuat?>
									</span>
									<span class="author">
										<i class="fa fa-user"></i><a href="#"><?=$data1->penulis_artikel?></a>
                                    </span>
                                    <span class="post-tags">
										<i class="fa fa-tags"></i><a href="#"><?=$data1->nama_divisi?></a>
									</span>
                                </div>
                            </article>
                            <!-- End Single Post -->
                            <?php 
                            } ?>

                            <?=$pagination;?>
    
                        </div>
                    </div>
                    
                    <?php 
					 $data['row'] = $this->artikel_m->getArtikel();
					 $this->load->view('include/sidemenu',$data);
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