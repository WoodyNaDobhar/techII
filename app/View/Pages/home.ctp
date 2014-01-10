
<div id="highlighted">
	<div class="inner"> 
		<!--Showshow-->
		<section class="flexslider-wrapper container">
			<div class="flexslider" data-slidernav="auto" data-transition="slide">
				<div class="slides"><?PHP
				 
			$i = 2;
			foreach($homeSplashes as $splash){
			
				//layout alts
				if($i%2 == 0){
					$imgIn = "bounceInLeft";
				}else{
					$imgIn = "fadeInUp";
				}
				$i++;
				
				//video or image
				if(isset($splash['Splashes']['video']) && $splash['Splashes']['video'] != ''){
					$media = $splash['Splashes']['video'];
				}else{
					$media = '<img src="'.$splash['Splashes']['image'].'" alt="Slide '.$splash['Splashes']['id'].'" />';
				}
			?>
					<div class="slide">
						<div class="slide-content">
							<div class="row">
								<div class="col-md-7"><div align="center" data-animate-in="<?=$imgIn?>" data-animate-delay="de-08"><?=$media?></div></div>
								<div class="col-md-5 caption">
									<h2 data-animate-in="bounceInRight"><?=$splash['Splashes']['name']?></h2>
									<h4 data-animate-in="bounceInRight" data-animate-delay="de-02"><?=$splash['Splashes']['byline']?></h4>
									<p data-animate-in="bounceInRight" data-animate-delay="de-04"><?=$splash['Splashes']['shortdesc']?></p>
									<a href="<?=$splash['Splashes']['link']?$splash['Splashes']['link']:'#'?>" class="btn btn-lg btn-primary" data-animate-in="bounceInRight" data-animate-delay="de-06">Read More</a> </div>
							</div>
						</div>
					</div><?PHP
			
			}
		
		?>
				</div>
			</div>
		</section>
	</div>
</div>
<div id="content">
	<div class="container">
		<!-- Services -->
		<div class="block features">
			<h2 class="title-divider"><span>What's <span class="de-em">New?</span></span> <small>Keep up with Tech II</small></h2>
			<div class="row"><?PHP
			
			$i = 0;
			foreach($homeFeatures as $feature){
				
				$i++;
				//image handling
				if(isset($feature['FeaturePages']['image']) && $feature['FeaturePages']['image'] != ''){
					$image = $feature['FeaturePages']['image'];
				}else{
					$image = 'img/features/feature-'.$i.'.png';
				}
				
				//prep title
				$text = $feature['FeaturePages']['name'];
				$middle = strpos($text, ' ');
				$title1 = $middle?substr($text, 0, $middle):$text;
				$title2 = $middle?substr($text, $middle):''; 
			?>
				<div class="feature col-sm-6 col-md-3"> <a href="<?=$feature['FeaturePages']['link']?$feature['FeaturePages']['link']:'#'?>"><img src="<?=$image?>" alt="<?=$feature['FeaturePages']['name']?>" class="img-responsive" /></a>
					<h3 class="title"><a href="<?=$feature['FeaturePages']['link']?$feature['FeaturePages']['link']:'#'?>"><?=$title1?> <span class="de-em"><?=$title2?></span></a></h3>
					<p><?=$feature['FeaturePages']['description']?></p>
				</div><?PHP
				
			}
		
		?>
				<div class="feature col-sm-6 col-md-3">
                    <div class="tweet"></div>
                    <div class="button"></div>
				</div>
			</div>
		</div>
		
		<!--Customer testimonial-->
		<div class="block testimonials margin-top-large">
			<h2 class="title-divider"><span>Highly <span class="de-em">Recommended</span></span> <small>our customers love us!</small></h2>
			<div class="row"><?PHP
			
			foreach($homeTestimonials as $testimonial){
			
			?>
				<div class="col-md-4">
					<blockquote>
						<p>"<?=$testimonial['Testimonials']['testament']?>"</p>
						<small><img src="<?=isset($testimonial['Testimonials']['image']) && $testimonial['Testimonials']['image'] != ''?$testimonial['Testimonials']['image']:'img/team/jimi.jpg'?>" alt="<?=$testimonial['Testimonials']['testifier']?>" class="img-circle" /> <?=$testimonial['Testimonials']['testifier']?> <span class="spacer">/</span> <a href="<?=$testimonial['Testimonials']['link']?>" target="_blank"><?=$testimonial['Testimonials']['link']?></a></small> 
					</blockquote>
				</div><?PHP
				
			}
				
			?>
			</div>
		</div>
	</div>
</div>

<script class="source" type="text/javascript">
	$('.feature .tweet').twittie({
		dateFormat: '%b. %d, %Y',
		template: '{{tweet}} <div class="date">{{date}}</div>',
		count: 1,
		hideReplies: true
	});
</script>