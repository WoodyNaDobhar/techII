
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
							if($section['AboutPages']['id'] == $this->request->params['item']){
								$active = ' class="active"';
							}else{
								$active = '';
							}
						?>
						<li<?=$active?>><a href="/<?=$section['AboutPages']['link']?>"><?=$section['AboutPages']['name']?> <small><?=$section['AboutPages']['byline']?></small><i class="fa fa-angle-right"></i></a></li><?PHP
						
						}
						
						?>
					</ul>
				</div>
			</div>
			
			<!--main content-->
			<div class="col-md-9">
				<h2 class="title-divider"><span><?=$pageContent['AboutPages']['name1']?> <span class="de-em"><?=$pageContent['AboutPages']['name2']?></span></span> <small><?=$pageContent['AboutPages']['description']?></small></h2>
				<?=$pageContent['AboutPages']['content']?>
                <?PHP
                
				if(isset($isContact) && $isContact){
					?>
				<div class="row">
					<div class="col-md-6">
						<form id="contact-form" action="contact" role="form" method="post">
							<div class="form-group">
								<label class="sr-only" for="contact-name">Name</label>
								<input name="name" type="text" class="form-control" id="name" placeholder="Name" value="<?=isset($name)?$name:''?>">
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-email">Email</label>
								<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?=isset($email)?$email:''?>">
							</div>
							<div class="form-group">
								<label class="sr-only" for="contact-message">Message</label>
								<textarea name="message" rows="12" class="form-control" id="message" placeholder="Message"><?=isset($message)?$message:''?></textarea>
							</div>
                            <?=recaptcha_get_html(RECAPTCHA_PUBLIC_KEY)?>
							<input type="button" class="btn btn-primary" value="Send Message" onclick="$(this).closest('form').submit();">
						</form>
					</div>
					<div class="col-md-6">
						<p><abbr title="Phone"><i class="fa fa-phone"></i></abbr> <a href="tel://<?=$headerSettings['Settings']['phone']?>"><?=$headerSettings['Settings']['phone']?></a></p>
						<p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> <a href="mailto:<?=$headerSettings['Settings']['email']?>"><?=$headerSettings['Settings']['email']?></a></p>
						<p><abbr title="Address"><i class="fa fa-home"></i></abbr> <a href="http://maps.google.com/?q=<?=$headerSettings['Settings']['address']?>" target="_blank"><?=$headerSettings['Settings']['address']?></a></p>
                        <p><iframe width="298" height="198" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?=urlencode($headerSettings['Settings']['address'])?>&amp;sll=37.0625,-95.677068&amp;sspn=0.177254,0.362892&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=<?=urlencode($headerSettings['Settings']['address'])?>&amp;z=14&amp;ll=40.028343,-83.828846&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=<?=urlencode($headerSettings['Settings']['address'])?>&amp;sll=37.0625,-95.677068&amp;sspn=0.177254,0.362892&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=<?=urlencode($headerSettings['Settings']['address'])?>&amp;z=14&amp;ll=40.028343,-83.828846" style="color:#0000FF;text-align:left">View Larger Map</a></small></p>
					</div>
				</div><?PHP	
				}
				
				?>
			</div>
		</div>
	</div>
</div>