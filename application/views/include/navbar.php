<!-- 
        Fixed Navigation
        ==================================== -->
        <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>frontend/index.html">
						<h1 id="logo">
							<img src="<?=base_url()?>frontend/img/logo-meghna.png" alt="Meghna" />
						</h1>
					</a>
                </div>

                <nav class="collapse navbar-collapse navbar-right" >
                    <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="<?=base_url('home')?>">Home</a></li>
                        <li><a href="<?=base_url('home')?>#tentang">Tentang</a></li>
                        <li><a href="<?=base_url('home')?>#showcase">Galery</a></li>
                        <li><a href="<?=base_url('home')?>#our-team">Divisi</a></li>
                        <li><a href="<?=base_url('home')?>#blog">Blog</a></li>
                        <li><a href="<?=base_url('home')?>#contact-us">Contact</a></li>
                    </ul>

                </nav><!-- /.navbar-collapse -->
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->