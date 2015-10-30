<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          
    <?php // SEO setup ?>
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Motionlab Marketing Ltd." />
    
    <?php // touch viewport issues ?>
    <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable = no">

    <?php // Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading ?>
    <meta http-equiv="cleartype" content="on">

    <?php // <IE7 fallback ?>
    <!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php // less compiling
		require 'lessc.inc.php';
		$less = new lessc('base/styles/less/compile.less');
		$less->setFormatter("compressed");
		file_put_contents('base/styles/style.css', $less->parse());
	?>
	   
    <?php // fontawesome ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <?php // normalize ?>
    <?php /* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css"> */ ?>
    
    <?php // call the main stylesheet ?>
    <link rel="stylesheet" href="base/styles/style.css">

    <?php // modernizr ?>
    <script src="base/js/libs/modernizr-2.6.2.min.js"></script>
    
    <?php // stuff to make things work in IE ?>
    <!--[if lt IE 9]>
    	<script src="base/js/libs/selectivizr.js"></script>
    	<script src="base/js/libs/respond.min.js"></script>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	    
    <?php // if using font embedding service please place the call here ?>
    
</head>

<body lang="en" class="<?php echo $GLOBALS['bodyClass']; ?> loading" >

	<header class="border-bottom p2 clearfix fixed bg-white right-0 left-0 z4">
		
		<a href="#!" class="left relative z4">
			<img src="../base/img/motionlab.svg" alt="motionlab_logo">
		</a>
			
		<nav class="absolute center right-0 left-0 z1 lg-show">
			<ul class="list-reset m0">
				<li class="inline-block">
					<a href="#!" class="p1 caps small">home</a>	
				</li>
				<li class="inline-block"> 
					<a href="#!" class="p1 caps small">about</a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1 caps small">work</a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1 caps small">studio</a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1 caps small">news</a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1 caps small">careers</a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1 caps small">contact</a>	
				</li>
			</ul>	
		</nav>
	
		<aside class="right relative z4">
			
			<ul class="list-reset m0">
				<li class="inline-block">
					<a href="#!" class="p1"><i class="fa fa-twitter"></i></a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1"><i class="fa fa-linkedin"></i></a>	
				</li>
				<li class="inline-block">
					<a href="#!" class="p1"><i class="fa fa-facebook"></i></a>	
				</li>
			</ul>	
			
		</aside>	
				
					
	</header>		
	
	
	
	
			

		
		
		