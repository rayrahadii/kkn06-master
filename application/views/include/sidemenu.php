<!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
								
							<div class="widget-content">
								<!-- tab nav -->
								<ul class="tab-post-nav clearfix">
									<li class="active"><a href="#popular" data-toggle="tab">New Post</a></li>
                                    <li><a href="#recent" data-toggle="tab">Random Post</a></li>
									<li><a href="#lawas" data-toggle="tab">Lates Post</a></li>
								</ul>
								<!-- /tab nav -->
								
								
								<!-- tab content -->
								<div class="tab-content">
									<article class="tab-pane active tab-post" id="popular">
									<?php
                                    $query = $this->db->query('SELECT * FROM artikel ORDER BY artikel_id DESC LIMIT 4');
                                    foreach ($query->result() as $data1) { ?>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="<?=base_url('uploads/artikel/'.$data1->image_artikel)?>" class="img-responsive" alt="">
											</div>
											<div class="tab-excerpt">
												<h4><a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>"><?=$data1->judul_artikel?></a></h4>
												<span><?=$data1->tanggal_dibuat?></span>
												<p style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis; "><?=$data1->keterangan_artikel?></p>
											</div>
										</div>
										<?php 
                                    } ?>
                                    </article>		
                                    
                                    <article class="tab-pane tab-post" id="recent">
									<?php
                                    $query = $this->db->query('SELECT * FROM artikel ORDER BY rand() LIMIT 4');
                                    foreach ($query->result() as $data1) { ?>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="<?=base_url('uploads/artikel/'.$data1->image_artikel)?>" class="img-responsive" alt="">
											</div>
											<div class="tab-excerpt">
												<h4><a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>"><?=$data1->judul_artikel?></a></h4>
												<span><?=$data1->tanggal_dibuat?></span>
												<p style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis; "><?=$data1->keterangan_artikel?></p>
											</div>
										</div>
										<?php 
                                    } ?>
                                    </article>
                                    
                                    <article class="tab-pane tab-post" id="lawas">
									<?php
                                    $query = $this->db->query('SELECT * FROM artikel ORDER BY artikel_id ASC LIMIT 4');
                                    foreach ($query->result() as $data1) { ?>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="<?=base_url('uploads/artikel/'.$data1->image_artikel)?>" class="img-responsive" alt="">
											</div>
											<div class="tab-excerpt">
												<h4><a href="<?=site_url('artikel/detailartikel/'.$data1->artikel_id)?>"><?=$data1->judul_artikel?></a></h4>
												<span><?=$data1->tanggal_dibuat?></span>
												<p style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis; "><?=$data1->keterangan_artikel?></p>
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
                       
