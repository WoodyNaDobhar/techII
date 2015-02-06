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
			echo $this->Html->css('/plugins/fancybox/jquery.fancybox.css?v=2.1.5');
			echo $this->Html->css('/plugins/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5');
			echo $this->Html->css('/plugins/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7');
			echo $this->Html->css('theme-style');
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
		<div class="menu-logo">
			<a href="index.htm"><img src="img/logo.png"></a>
		</div>
		<a href="#content" class="sr-only">Skip to content</a>
		<div id="navigation" class="wrapper">
			<div class="navbar-static-top">
				<div class="navbar"> 
					<div class="container">
						<!--
							mobile collapse menu button
							- data-toggle="toggle" = default BS menu
							- data-toggle="jpanel-menu" = jPanel Menu
					--> 
						<a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
						
						<!--user menu-->
						<!--<div class="btn-group user-menu pull-right"> <a href="#signup-modal" class="btn btn-primary signup" data-toggle="modal">Sign Up</a> <a href="#login-modal" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Login</a> </div>-->
						
						<!--everything within this div is collapsed on mobile-->
						<div class="navbar-collapse collapse"> 
							
							<!--main navigation-->
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Products</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="features-drop">
								<li role="presentation">
									<ul class="row list-unstyled" role="menu">
										<li class="dropdown-header" role="presentation">
											Products
										</li>
										<li class="col-md-12" role="presentation">
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Containers</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Overcaps</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Extrusion</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Barrier</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Build YOUR Package</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Product Finder</strong></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown"> <a href="#" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Decoration</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="features-drop">
								<li role="presentation">
									<ul class="row list-unstyled" role="menu">
										<li class="dropdown-header" role="presentation">
											Decoration
										</li>
										<li class="col-md-12" role="presentation">
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>IML</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Print</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Emboss</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Label</strong></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="logo-spacer">&nbsp;</li>
						<li class="dropdown"> <a href="#" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Sustainability</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="features-drop">
								<li role="presentation">
									<ul class="row list-unstyled" role="menu">
										<li class="dropdown-header" role="presentation">
											Sustainability
										</li>
										<li class="col-md-12" role="presentation">
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Recyclable</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Self Sufficient</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Expanded PP</strong></a>
											<a role="menuitem" href="containers.htm" tabindex="-1" class="menu-item"><strong>Biodegradable</strong></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="about.htm" class="menu-item">About Us</a></li>
					</ul>
						</div>
						<!--/.navbar-collapse --> 
						<i class="fa fa-search" id="searchIcon"></i>
					</div>
				</div>
			</div>
		</div>
		<div id="search">
			<form action="search.htm" role="form">
				<div class="row">
					<div class="col-sm-4 col-md-2">
						&nbsp;
					</div>
					<div class="col-sm-16 col-md-8">
						<input id="query" class="form-control">
						<button type="button" class="search-button"><i class="fa fa-search"></i></button>
						<button type="button" class="search-button" id="searchCloseIcon"><i class="fa fa-times"></i></button>
					</div>
					<div class="col-sm-4 col-md-2">
						&nbsp;
					</div>
				</div>
			</form>
		</div>
	
	<?
	
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
	
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col">
						<div class="block" style="margin-top: 18px;">
							<ul class="nav navbar-nav footer-nav">
								<li><a href="about.htm" class="menu-item">About Us</a></li>
								<li class=""><a href="javascript:void(0);" onclick="$('#productsFoot').toggle('slow');" class="">Products</a>
									<ul class="footer-item" id="productsFoot" role="menu">
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Containers</strong></a>
										</li>
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Lids</strong></a>
										</li>
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Specialty</strong></a>
										</li>
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Sheet (Extruded)</strong></a>
										</li>
									</ul>
								</li>
								<li class=""><a href="javascript:void(0);" onclick="$('#processesFoot').toggle('slow');" class="">Processes</a>
									<ul class="footer-item" id="processesFoot" role="menu">
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Injection</strong></a>
										</li>
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Thermoform</strong></a>
										</li>
										<li role="presentation">
											<a role="menuitem" href="#"><strong>Extrusion</strong></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col">
						<div class="block social-media" style="margin-top: 18px;"> 
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
		<!-- 			<div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a></div> -->
					<!--@todo: replace with company copyright details-->
					<div class="col-md-6">
						<!--@todo: replace with company contact details-->
						<p>Tech II | 3100 Upper Valley Pike | Springfield, Ohio 45504 | (123)456-7890<p>
					</div>
					<div class="col-md-6">
						<ul class="list-inline footer-menu">
							<li>&copy; 2014</li>
							<li><a class="fancybox" data-fancybox-type="iframe" href="/terms.html">Terms</a></li>
							<li><a class="fancybox" data-fancybox-type="iframe" href="/terms.html">Privacy</a></li>
							<li><a href="contatct.htm">Contact Us</a></li>
							<li><a href="contatct.htm">Careers</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	
	<!--Scripts --> 
	<?
		
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery-migrate-1.2.1.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('/plugins/flexslider/jquery.flexslider-min');
		echo $this->Html->script('/plugins/jPanelMenu/jquery.jpanelmenu.min');
		echo $this->Html->script('/plugins/jRespond/js/jRespond');
		echo $this->Html->script('/plugins/quicksand/jquery.quicksand');
		echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true');
		echo $this->Html->script('jquery.gmap.min.js');
		echo $this->Html->script('script');
		echo $this->Html->script('/plugins/ckeditor/ckeditor.js');
		echo $this->Html->script('/plugins/tweetie/tweetie.js');
		
	?>
	</body>
</html>
