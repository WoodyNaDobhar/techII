
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
							if($section['LegalPages']['id'] == $this->request->params['item']){
								$active = ' class="active"';
							}else{
								$active = '';
							}
						?>
						<li<?=$active?>><a href="/<?=$section['LegalPages']['link']?>"><?=$section['LegalPages']['name']?> <small><?=$section['LegalPages']['byline']?></small><i class="fa fa-angle-right"></i></a></li><?PHP
						
						}
						
						?>
					</ul>
				</div>
			</div>
			
			<!--main content-->
			<div class="col-md-9">
				<h2 class="title-divider"><span><?=$pageContent['LegalPages']['name1']?> <span class="de-em"><?=$pageContent['LegalPages']['name2']?></span></span> <small><?=$pageContent['LegalPages']['description']?></small></h2>
				<?=$pageContent['LegalPages']['content']?>
			</div>
		</div>
	</div>
</div>