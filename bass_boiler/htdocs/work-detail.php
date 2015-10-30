<?php
$GLOBALS['bodyClass'] = 'home-body';
$current = 'home';
include('includes/header.php');
?>

<section class="container px2 py3 mb4">
	<h1 class="h1-responsive">Motionlab cleans up in four-way johnson pitch</h1>
	<div class="clearfix mxn2">
		<div class="sm-col sm-col-8 md-col-9 px2">
			<?php for($x = 0; $x < 8; $x++): ?>
				<figure class="m0 mb2">
					<img src="base/img/Header_1600x800_04.jpg" alt="Header_1600x800_04" width="1600" height="800" />
				</figure>
			<?php endfor; ?>		
		</div>
		<div class="sm-col sm-col-4 md-col-3 px2 sm-show">
			<h3>Categories</h3>
			<ul class="list-reset mb3">
				<li><a href="#!" class="">All</a></li>
				<li><a href="#!" class="">Awards</a></li>
				<li><a href="#!" class="">Branding</a></li>
				<li><a href="#!" class="">Charity</a></li>
				<li><a href="#!" class="">Graphic Design</a></li>
				<li><a href="#!" class="">Web Design</a></li>
			</ul>
			<ul class="list-reset">
				<li class="mb1"><a href="#!" class="btn btn-outline btn-caps full-width center black"><i class="fa fa-share-alt mr1"></i>share</a></li>
				<li><a href="#!" class="btn btn-outline btn-caps full-width center black">see case study</a></li>
			</ul>	
						
		</div>
	</div>
</section>

<?php include('components/panel-links.php'); ?>

<?php include('includes/footer.php'); ?>
        
            
        
        
        
        
