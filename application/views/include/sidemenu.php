<!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInUp"  data-wow-duration="1000ms">
							<div class="widget-title">
                               <h3>Search</h3>
							</div>
                           <div class="widget-content">
                                <form action="#" id="search-form" method="get" role="search">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="on" name="seach">
                                    <button type="submit" title="Search" id="search-submit">
										<i class="fa fa-search"></i>
									</button>
                                </form>
                           </div>
                        </aside>
                        <!-- End Single Widget -->
						
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Text Widget</h3>
							</div>
							<div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ducimus in dolorum accusantium voluptate nostrum, excepturi dolores voluptatem vel rerum at, recusandae inventore nobis ex eveniet sunt eligendi, qui provident.</p>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
								<h3>Tab	 Widget</h3>
							</div>
								
							<div class="widget-content">
								<!-- tab nav -->
								<ul class="tab-post-nav clearfix">
									<li class="active"><a href="<?=base_url()?>frontend/#popular" data-toggle="tab">Popular Post</a></li>
									<li><a href="<?=base_url()?>frontend/#recent" data-toggle="tab">Recent Post</a></li>
									<li><a href="<?=base_url()?>frontend/#most-viewed" data-toggle="tab">Most Viewed</a></li>
								</ul>
								<!-- /tab nav -->
								
								
								<!-- tab content -->
								<div class="tab-content">
									<article class="tab-pane active tab-post" id="popular">
									<?php 
                    				foreach($row->result() as $key => $data) { ?>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="<?=base_url('uploads/artikel/'.$data->image_artikel)?>" class="img-responsive" alt="">
											</div>
											<div class="tab-excerpt">
												<h4><a href="<?=site_url('artikel/detailartikel/'.$data->artikel_id)?>"><?=$data->judul_artikel?></a></h4>
												<span><?=$data->tanggal_dibuat?></span>
												<p style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis; "><?=$data->keterangan_artikel?></p>
											</div>
										</div>
										<?php 
                    } ?>
									</article>								
									
								</div>
								<!-- /tab content -->
								
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Newsletter</h3>
                               <p>Signup to receive email updates and to hear what's going on with my blog!</p>
							</div>
							<div class="widget-content">
                                <form action="">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
                                    <input type="submit" value="Subscribe" class="btn btn-transparent">
                                </form>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Categories</h3>
							</div>
							<div class="widget-content">
                                <ul class="categories">
                                    <li><i class="fa fa-plus"></i> <a href="<?=base_url()?>frontend/#">Marketing Policy</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="<?=base_url()?>frontend/#">Business Strategy</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="<?=base_url()?>frontend/#">Web Research</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="<?=base_url()?>frontend/#">Web Development</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="<?=base_url()?>frontend/#">Business Model</a></li>
                                </ul>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Tag Cloud</h3>
							</div>
							<div class="widget-content">
                                <a class="tag" href="<?=base_url()?>frontend/#">Mobile</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">Web</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">Electronics</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">SEO</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">Business Story</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">Post Query</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">HTML5</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">CSS3</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">jQuery</a>
                                <a class="tag" href="<?=base_url()?>frontend/#">Javascript</a>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->
