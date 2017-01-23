<!DOCTYPE html>

<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>SOOMA Real Estate</title>
	<!-- ========= Favicon Icons ========= -->
	<link rel="shortcut icon" href="#">
	<!-- Standard iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="#">
	<!-- Retina iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<!-- Standard iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<!-- Retina iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="144x144" href="#">
	<!-- include Google fonts  -->
	<link href="<?php echo base_url();?>Assets/assets/css" rel="stylesheet" type="text/css">
	<!-- include the site stylesheet of bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>Assets/assets/bootstrap.css">
	<!-- include the font awesome stylesheet  -->
	<link rel="stylesheet" href="<?php echo base_url();?>Assets/assets/font-awesome/font-awesome/css/font-awesome.min.css">
	<!-- include the stylesheets of headers and footer of the page  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/assets/page-assets.css">
	<!-- include the helping elements stylesheets of  the page  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/assets/helper-elements.css">
	<!-- include the site stylesheet  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/assets/style.css">
	<!-- include the site color stylesheet  -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/assets/di-serria.css">
    <!-- include the site animation stylesheet  -->
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/assets/animate.css" type="text/css">
<style>
	#header #nav .nav-top > li > a {
	visibility: visible;
	color: white;
	}

	#header #nav .nav-top > li.active > a {
	visibility: visible;
	color: #cea35f;
	}

</style>
<style type="text/css">.js-tab-hidden{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}</style><style type="text/css">.fancybox-margin{margin-right:21px;}</style><link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/assets/di-serria.css"></head>
<body class="">
	<!-- Page pre loader -->
    <div id="pre-loader" style="">
         <div class="loader-holder">
            <div class="frame">
                <img src="<?php echo base_url();?>Assets/assets/Logo1B.png" style="width:200px;text-align:center; " alt="Sooma">
                <div class="spinner7" style="width: 200px;">
                    <div class="circ1"></div>
                    <div class="circ2"></div>
                    <div class="circ3"></div>
                    <div class="circ4"></div>
                </div>
            </div>
        </div>
    </div>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<div class="w1" >
			
			<header id="header" class="">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="<?php echo base_url();?>Assets/assets/Logo2W.png"  alt="Sooma" style="height: 50px;width: auto;" class="img-responsive w-logo">
									<img src="<?php echo base_url();?>Assets/assets/Logo2B.png" alt="Sooma" style="height: 50px;width: auto;" class="img-responsive b-logo">
								</a>
							</div>
							<div class="holder">
								<!-- icon list -->
								<ul class="list-unstyled icon-list">
									
									<li>
										<a href="#" class="search-opener opener-icons"><i class="fa fa-search"></i></a>
									</li>
									
								</ul>
								<!-- main navigation of the page -->
								<nav id="nav">
									<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
									<div class="nav-holder">
										<img src="<?php echo base_url();?>Assets/assets/Logo2W.png" id="SoomaLogoMob" alt="Sooma" style="width:50%;margin:10px auto 0 auto;   " class="img-responsive b-logo">
									<ul class="list-inline nav-top">
										<li class="">
											<a href="<?php echo base_url();?>index.php//Home">Home</a>
										</li>
										
										<!-- <li <?php if ($pagename==="aboutus"){ echo'class="active"'; }else{ echo'class=""'; }?> >
											<a href="<?php echo base_url();?>index.php/Home/Aboutus">About us</a>
										</li> -->
										
										<li class="has-drop" <?php if ($pagename==="project"){ echo'class="active"'; }else{ echo'class=""'; }?> >
											<a href="">Projects</a>
											<div class="drop">
												<ul class="list-unstyled">
													<li <?php if ($pagename==="project"){ echo'class="active"'; }else{ echo'class=""'; }?>>
														<a href="<?php echo base_url();?>index.php/Home/Project">Al Fouad</a>
													</li>
													
													
												</ul>
											</div>
										</li>
										<li <?php if ($pagename==="gallery"){ echo'class="active"'; }else{ echo'class=""'; }?> >
												<a href="<?php echo base_url();?>index.php/Properties/Gallery">Live Gallery</a>
											</li>
											<li <?php if ($pagename==="property"){ echo'class="active"'; }else{ echo'class=""'; }?> >
												<a href="<?php echo base_url();?>index.php/Home/Listing">Property Listings</a>
											</li>
										
										<li <?php if ($pagename==="contact"){ echo'class="active"'; }else{ echo'class=""'; }?> >
											<a href="<?php echo base_url();?>index.php/Home/Contact">Contact us</a>
										</li>
									</ul>
								</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			
			<!-- search popup -->
			<div class="search-popup win-height">
				<div class="holder">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<a href="http://creative-wp.com/demos/fekra/services3.html#" class="close-btn">close</a>
								<form action="http://creative-wp.com/demos/fekra/services3.html#" class="search-form">
									<fieldset>
										<input type="search" placeholder="search..." class="search">
										<button class="submit"><i class="fa fa-search"></i></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			