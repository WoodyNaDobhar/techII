
<div id="content">
	<div class="container" id="legal">
		<div class="row">
			<!-- sidebar -->
			<div class="col-md-3 sidebar">
				<div class="section-menu">
					<ul class="nav nav-list">
						<li class="nav-header">In This Section</li><?PHP
						
						foreach($pageSections as $section){
						
							//active?
							if($section['FeaturePages']['id'] == $this->request->params['item']){
								$active = ' class="active"';
							}else{
								$active = '';
							}
						?>
						<li<?=$active?>><a href="/<?=$section['FeaturePages']['link']?>"><?=$section['FeaturePages']['name']?> <small><?=$section['FeaturePages']['byline']?></small><i class="fa fa-angle-right"></i></a></li><?PHP
						
						}
						
						?>
					</ul>
				</div>
			</div>
			
			<!--main content-->
			<div class="col-md-9">
				<h2 class="title-divider"><span><?=$pageContent['FeaturePages']['name1']?> <span class="de-em"><?=$pageContent['FeaturePages']['name2']?></span></span> <small><?=$pageContent['FeaturePages']['description']?></small></h2>
				<?PHP
				
					//news doesn't get the feature content
					if(isset($newsContent) || isset($newsContents)){
						
				?>
				<div class="row">
					<!--Blog Roll Content-->
					<div class="col-md-9 blog-roll blog-list"><?PHP
					
						//lots of news
						if(isset($newsContent)){

							foreach($newsContent as $news){
								
								$month = date('M', strtotime($news['created']));
								$day = date('d', strtotime($news['created']));
								?>

								<!-- Blog post -->
								<div class="media row">
									<div class="col-md-1 date-md">
										<!-- Date desktop -->
										<div class="date-wrapper"> <span class="date-m"><?=$month?></span> <span class="date-d"><?=$day?></span> </div>
										<!-- Meta details desktop -->
										<!--<p class="text-muted"> <i class="fa fa-user"></i> <a href="#">Erin</a> </p>-->
									</div>
									<div class="col-md-11 media-body">
										<!--<div class="tags"><a href="#" class="tag">coding</a> / <a href="#" class="type">feature</a></div>-->
										<h3 class="title media-heading"><?=$news['name']?></h3>
									   
										<!-- Meta details mobile -->
										<ul class="list-inline meta text-muted">
											<li><i class="fa fa-calendar"></i> <?=date('D jS M Y', strtotime($news['created']))?></li>
											<!--<li><i class="fa fa-user"></i> <a href="#">Erin</a></li>-->
										</ul>
										<img src="img/news/<?=$news['image']?>" alt="<?=$news['name']?>" class="media-object img-responsive" />
										<?=$news['content']?>
									</div>
								</div>
							   
								<!--Comments-->
								<!--<div class="comments" id="comments">
									<h3>Comments (10)</h3>
									<ul class="media-list">
										<li class="media"> <a class="pull-left" href="#"> <img src="img/team/bono.jpg" alt="Picture of Erin" class="media-object img-thumbnail img-responsive" /> </a>
											<div class="media-body">
												<ul class="list-inline meta text-muted">
													<li><i class="fa fa-calendar"></i> Wed 23rd Oct 2013</li>
													<li><i class="fa fa-user"></i> <a href="#">Tom</a></li>
												</ul>
												<h5 class="media-heading">Enim augue elit adipiscing placerat natoque</h5>
												<p>Enim augue elit adipiscing placerat natoqueEnim augue elit adipiscing placerat natoqueEnim augue elit adipiscing placerat natoqueEnim augue elit adipiscing placerat natoque</p>
											</div>
										</li>
										
									</ul>
									<form id="comment-form" class="comment-form" role="form">
										<h4>Add Comment</h4>
										<div class="form-group">
											<label class="sr-only" for="comment-name">Name</label>
											<input type="text" class="form-control" id="comment-name" placeholder="Name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="comment-name">Email</label>
											<input type="email" class="form-control" id="comment-email" placeholder="Email">
										</div>
										<div class="form-group">
											<label class="sr-only" for="comment-comment">Comment</label>
											<textarea rows="8" class="form-control" id="comment-comment" placeholder="Comment"></textarea>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox">
												Subscribe to updates</label>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>-->
								<?PHP
							}
							
						//one news item
						}elseif(isset($newsContents)){

							foreach($newsContents as $news){
								
								$month = date('M', strtotime($news['News']['created']));
								$day = date('d', strtotime($news['News']['created']));
								
						?>
							
						<!-- Blog post -->
						<div class="media row">
							<div class="col-md-1 date-md">
								<!-- Date desktop -->
								<div class="date-wrapper"> <span class="date-m"><?=$month?></span> <span class="date-d"><?=$day?></span> </div>
								<!-- Meta details desktop -->
								<!--<p class="muted"> <i class="fa fa-user"></i> <a href="#">Alex</a> </p>-->
							</div>
							<div class="col-md-11 media-body">
								<!--<div class="tags"><a href="#" class="tag">design</a> / <a href="#" class="type">podcast</a></div>-->
								<h4 class="title media-heading"><a href="news/<?=$news['News']['id']?>"><?=$news['News']['name']?></a></h4>
								
								<!-- Meta details mobile -->
								<ul class="list-inline meta text-muted">
									<li><i class="fa fa-calendar"></i> <?=date('D jS M Y', strtotime($news['News']['created']))?></li>
									<!--<li><i class="fa fa-user"></i> <a href="#">Alex</a></li>-->
								</ul>
								<a href="news/<?=$news['News']['id']?>" class="media-object"> <img src="img/news/<?=$news['News']['image']?>" alt="<?=$news['News']['name']?>" class="img-responsive" /> </a>
								<p><?=substr(strip_tags($news['News']['content']), 0, 500)?>...</p>
								<ul class="list-inline links">
									<li><a href="news/<?=$news['News']['id']?>" class="btn btn-default btn-xs"><i class="fa fa-circle-arrow-right"></i> Read more</a></li>
									<!--<li><a href="news/<?=$news['News']['id']?>#comments" class="btn btn-default btn-xs"><i class="fa fa-comment"></i> 28 Comments</a></li>-->
								</ul>
							</div>
						</div><?
							}
						}
					
					?>
					</div>
					
					<!--Sidebar-->
					<div class="col-md-3 sidebar sidebar-right">
						<div class="inner">
							<div class="block">
								<form role="form">
									<div class="input-group">
										<label class="sr-only" for="search-field">Search</label>
										<input type="search" class="form-control" id="search-field" placeholder="Coming Soon!">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">Go!</button>
										</span>
									</div>
								</form>
							</div>
							<!--<div class="block">
								<h4 class="title-divider"><span>Tags</span></h4>
								<div class="tag-cloud"> <span><a href="#">culture</a> (88)</span> <span><a href="#">general</a> (71)</span> <span><a href="#">coding</a> (56)</span> <span><a href="#">design</a> (46)</span> <span><a href="#">weather</a> (17)</span> <span><a href="#">jobs</a> (40)</span> <span><a href="#">health</a> (23)</span> </div>
							</div>
							<div class="block">
								<h4 class="title-divider"><span>Archive</span></h4>
								<ul class="big-list tags">
									<li><a href="#">October 2013</a> (41)</li>
									<li><a href="#">September 2013</a> (30)</li>
									<li><a href="#">August 2013</a> (3)</li>
									<li><a href="#">July 2013</a> (7)</li>
									<li><a href="#">June 2013</a> (28)</li>
									<li><a href="#">May 2013</a> (50)</li>
									<li><a href="#">April 2013</a> (84)</li>
								</ul>
							</div>
							<div class="block"> <a href="#" class="btn btn-warning"><i class="fa fa-rss"></i> Subscribe via RSS feed</a> </div>-->
						</div>
					</div>
				</div><?
				
					}else{
					
						echo $pageContent['FeaturePages']['content'];
						
					}
					
				?>
			</div>
		</div>
	</div>
</div>