<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	 Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link			http://cakephp.org CakePHP(tm) Project
 * @package		 app.View.Layouts
 * @since		 CakePHP(tm) v 0.10.0.1076
 * @license		 http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		TechII | Plastics Innovators | <?php echo $title_for_layout; ?>
	</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Azurite Web">
	<?php

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('/plugins/animate/animate');
		echo $this->Html->css('/plugins/flexslider/flexslider');
		echo $this->Html->css('/plugins/clingify/clingify');
		echo $this->Html->css('theme-style');
		echo $this->Html->css('colour-blue', array('id' => 'colour-scheme'));
		echo $this->Html->css('custom-style');
		
	?>
		
		<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
		<!--[if lt IE 9]>
			<script src="/plugins/html5shiv/dist/html5shiv.js"></script>
			<script src="/plugins/respond/respond.min.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
		<link rel="shortcut icon" href="/img/icons/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/72x72.png">
		<link rel="apple-touch-icon-precomposed" href="/img/icons/default.png">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
		
		<!--Retina.js plugin - @see: http://retinajs.com/-->
		<script src="/plugins/retina/js/retina-1.1.0.min.js"></script>
</head>
<body class="page page-index">
<a href="#content" class="sr-only">Skip to content</a>
<div id="navigation" class="wrapper">
	<div class="navbar-static-top">
		<div class="header-hidden">
			<div class="header-hidden-inner container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<h3>About Us</h3>
					<p><?=$headerSettings['Settings']['about']?></p>
					<a href="/AboutPages/view/1" class="btn btn-sm btn-primary">Find out more</a>
				</div>
				<div class="col-sm-4 col-md-4"> 
					<h3>Contact Us</h3>
					<address>
						<p><abbr title="Phone"><i class="fa fa-phone"></i></abbr> <a href="tel://<?=$headerSettings['Settings']['phone']?>"><?=$headerSettings['Settings']['phone']?></a></p>
						<p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> <a href="mailto:<?=$headerSettings['Settings']['email']?>"><?=$headerSettings['Settings']['email']?></a></p>
						<p><abbr title="Address"><i class="fa fa-home"></i></abbr> <a href="http://maps.google.com/?q=<?=$headerSettings['Settings']['address']?>" target="_blank"><?=$headerSettings['Settings']['address']?></a></p>
					</address>
				</div>
			</div>
			</div>
		</div>
		
		<!--Header & Branding region-->
		<div class="header">
			<div class="header-inner container">
			<div class="row">
			
				<div class="col-md-8"> 
				<!--branding/logo--> 
				<a class="navbar-brand" href="/" title="Home">
					<img src="/img/logo3.png"> | Packaging <span>Innovators</span>
				</a>
				</div>
				
				<!--header rightside-->
				<div class="col-md-4"> 
                    <!--social media icons-->
                    <div class="social-media"><?PHP
                    
                    foreach($headerSocials as $social){
                    
                    ?><a href="<?=$social['Socials']['url']?>" target="_blank"><i class="fa fa-<?=$social['Socials']['service']?>"></i></a> <?PHP
                    
                    }
                    
                    ?>
					</div>
				</div>
			</div>
			<div id="header-hidden-link"> <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a> </div>
			</div>
		</div>
		
		<div class="container" data-toggle="clingify">
			<div class="navbar"> 
			<!--
			mobile collapse menu button
			- data-toggle="toggle" = default BS menu
			- data-toggle="jpanel-menu" = jPanel Menu
			--> 
			<a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
			
			<!--user menu-->
			<div class="btn-group user-menu pull-right">
				<?php if($this->Session->read('Auth.User')){ ?>
					<a href="/users/logout" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Logout</a>
				<?PHP }else{ ?>
					<!-- <a href="#signup-modal" class="btn btn-primary signup" data-toggle="modal">Sign Up</a> -->
					<a href="#login-modal" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Login</a> 
				<?PHP }; ?>
			</div>
			
			<!--everything within this div is collapsed on mobile-->
			<div class="navbar-collapse collapse"> 
				
				<!--main navigation-->
				<ul class="nav navbar-nav">
				<li class="home-link"><a href="/"><img src="/img/atom.png" /><span class="hidden">Home</span></a></li><?PHP
				
				foreach($menuContents as $content){
				
					$model = $content['Contents']['name'].'Pages';
					
					//pretty version
					if(isset($content['Contents'][$model][0][$model]['nav_image'])){
				?>
				<li class="dropdown"> 
					<a href="" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown"><?=$content['Contents']['name']?> +</a> 
					<ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
						<li role="presentation" class="dropdown-header"><?=$content['Contents']['byline']?></li>
						<li role="presentation">
							<ul class="row list-unstyled" role="menu"><?PHP
					
						foreach($content['Contents'][$model] as $subContent){
						
						?>
								<li class="col-md-4" role="presentation">
									<a role="menuitem" href="<?=$subContent[$model]['link']?>" class="img-link">
										<img src="/img/features/<?=$subContent[$model]['nav_image']?>" alt="Feature 1" />
									</a>
									<a role="menuitem" href="<?=$subContent[$model]['link']?>" tabindex="-1" class="menu-item">
										<strong><?=$subContent[$model]['name']?></strong>
									</a>
									<span><?=$subContent[$model]['description']?></span>
								</li><?PHP
						
						}
						
						?>
							</ul>
						</li>
					</ul>
				</li><?PHP
				
					//simple version
					}else{
						?>
				<li class="dropdown"> <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown"><?=$content['Contents']['name']?> +</a> 
					<!-- Dropdown Menu -->
					<ul class="dropdown-menu" role="menu" aria-labelledby="about-drop"><?PHP
					
						foreach($content['Contents'][$model] as $subContent){
						
						?>
						<li role="presentation">
							<a role="menuitem" href="<?=$subContent[$model]['link']?>" tabindex="-1" class="menu-item">
								<?=$subContent[$model]['name']?>
							</a>
						</li><?PHP
						
						}
						
						?>
					</ul>
				</li><?PHP
					}
					
				}
				
				?>
				</ul>
			</div>
			<!--/.navbar-collapse --> 
			</div>
		</div>
	</div>
</div><?

	if($flash = $this->Session->flash()){

?>
<div id="content-small">
	<div class="container">
		<?php echo $flash; ?>
	</div>
</div><?

	}

?>

	<?php echo $this->fetch('content'); ?>
	
	<?php echo $this->element('sql_dump'); ?>
			
<div id="content-below" class="wrapper">
	<div class="container">
	<div class="row">
		<div class="upsell"> <small class="muted">quality <span class="spacer">//</span> design <span class="spacer">//</span> leading edge <span class="spacer">//</span> inequivical <span class="spacer">//</span> </small> <a href="contact.htm" class="btn btn-primary">Contact Us For a Quote! <i class="fa fa-arrow-right"></i></a> </div>
	</div>
	</div>
</div>

<!-- FOOTER -->
<footer id="footer">
	<div class="container">
	<div class="row">
		<div class="col-md-3 col">
		<div class="block contact-block"> 
			<h3>Contact Us</h3>
			<address>
                <p><abbr title="Phone"><i class="fa fa-phone"></i></abbr> <a href="tel://<?=$headerSettings['Settings']['phone']?>"><?=$headerSettings['Settings']['phone']?></a></p>
                <p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> <a href="mailto:<?=$headerSettings['Settings']['email']?>"><?=$headerSettings['Settings']['email']?></a></p>
                <p><abbr title="Address"><i class="fa fa-home"></i></abbr> <a href="http://maps.google.com/?q=<?=$headerSettings['Settings']['address']?>" target="_blank"><?=$headerSettings['Settings']['address']?></a></p>
			</address>
		</div>
		</div>
		<div class="col-md-5 col">
		<div class="block">
			<h3>About Us</h3>
			<?=$headerSettings['Settings']['about']?>
		</div>
		</div>
		<div class="col-md-4 col">
		<div class="block newsletter">
			<!--<h3>Newsletter</h3>-->
			<!--<p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>-->
			<!--<form role="form">-->
			<!--<div class="input-group input-group-sm">-->
			<!--	<label class="sr-only" for="email-field">Email</label>-->
			<!--	<input type="text" class="form-control" id="email-field" placeholder="Email">-->
			<!--	<span class="input-group-btn">-->
			<!--	<button class="btn btn-primary" type="button">Go!</button>-->
			<!--	</span> -->
            <!--</div>-->
			<!--</form>-->
		</div>
		</div>
	</div>
	<div class="row">
		<div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a></div>
		<div class="subfooter">
		<div class="col-md-6">
			<p>Copyright 2013-<?php echo date("Y"); ?> &copy; Azurite Design</p>
		</div>
		<div class="col-md-6">
			<ul class="list-inline footer-menu">
			<li><a href="terms">Terms</a></li>
			<li><a href="privacy">Privacy</a></li>
			<li><a href="contact">Contact Us</a></li>
			</ul>
		</div>
		</div>
	</div>
	</div>
</footer>

<!--Hidden elements - excluded from jPanel Menu on mobile-->
<div class="hidden-elements jpanel-menu-exclude"> 
	<!--@modal - signup modal-->
	<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Sign Up</h4>
		</div>
		<div class="modal-body">
			<form action="signup.htm" role="form">
			<h5>Price Plan</h5>
			<select class="form-control">
				<option>Basic</option>
				<option>Pro</option>
				<option>Pro +</option>
			</select>
			<h5>Account Information</h5>
			<div class="form-group">
				<label class="sr-only" for="signup-first-name">First Name</label>
				<input type="text" class="form-control" id="signup-first-name" placeholder="First name">
			</div>
			<div class="form-group">
				<label class="sr-only" for="signup-last-name">Last Name</label>
				<input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
			</div>
			<div class="form-group">
				<label class="sr-only" for="signup-username">Userame</label>
				<input type="text" class="form-control" id="signup-username" placeholder="Username">
			</div>
			<div class="form-group">
				<label class="sr-only" for="signup-email">Email address</label>
				<input type="email" class="form-control" id="signup-email" placeholder="Email address">
			</div>
			<div class="form-group">
				<label class="sr-only" for="signup-password">Password</label>
				<input type="password" class="form-control" id="signup-password" placeholder="Password">
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="term">
				I agree with the Terms and Conditions. </label>
			</div>
			<button class="btn btn-primary" type="submit">Sign up</button>
			</form>
		</div>
		<div class="modal-footer"> <small>Already signed up? <a href="login.htm">Login here</a>.</small> </div>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
	</div>
	<!-- /.modal --> 
	
	<!--@modal - login modal-->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
			<form action="/users/login" id="UserLoginForm" method="post" accept-charset="utf-8">
				<div style="display:none;">
					<input type="hidden" name="_method" value="POST"/>
				</div>
				<fieldset>
					<div class="input text required">
						<input name="data[User][username]" class="form-control email" maxlength="50" type="text" id="UserUsername" required="required"/>
					</div>
					<div class="input password">
						<input name="data[User][password]" class="form-control password" type="password" id="UserPassword"/>
					</div>
				</fieldset>
				<div class="submit">
					<!-- <button type="button" class="btn btn-primary">Login</button> -->
					<input type="submit" class="btn btn-primary" value="Login"/>
				</div>
			</form>
		</div>
		<div class="modal-footer"> <small>Not a member? <a href="#" class="signup">Sign up now!</a></small><br />
			<small><a href="#">Forgotten password?</a></small> </div>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
	</div>
	<!-- /.modal --> 
</div>

<!--Scripts --> 
<?
	
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('jquery-migrate-1.2.1.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('/plugins/flexslider/jquery.flexslider-min');
	echo $this->Html->script('/plugins/clingify/jquery.clingify.min');
	echo $this->Html->script('/plugins/jPanelMenu/jquery.jpanelmenu.min');
	echo $this->Html->script('/plugins/jRespond/js/jRespond');
	echo $this->Html->script('/plugins/quicksand/jquery.quicksand');
	echo $this->Html->script('script');
	echo $this->Html->script('/plugins/ckeditor/ckeditor.js');
	echo $this->Html->script('/plugins/tweetie/tweetie.js');
	
?>
</body>
</html>
