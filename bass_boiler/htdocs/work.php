<?php
$GLOBALS['bodyClass'] = 'home-body';
$current = 'home';
include('includes/header.php');
?>

<div class="clearfix">	
	<ul class="list-reset">
		<?php for($x = 0; $x < 6; $x++): ?>
		<li class="col lg-col-6 xl-col-4 project">
			<div class="relative">
				<img src="base/img/Header_1600x800_04.jpg" alt="Header_1600x800_04" width="1600" height="800" />
				<a href="#!">
					<div class="content p1 xl-px4 center">
						<h2 class="white mt0">Delivering over 5,00 leads a month to more than 20 dealers across the UK</h2>
						<p class="hide white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, officia iusto nobis dicta obcaecati consectetur laboriosam labore veniam. Expedita ipsum earum ullam explicabo blanditiis ut cupiditate animi dolor provident est?	</p>
						<p class="btn-small caps bg-white inline-block black">continue the conversation</p>		
					</div>
				</a>
			</div>
		</li>
		<?php endfor; ?>
	</div>	
</div>

<section class="container overflow-hidden">	
	<div class="clearfix mxn2">
		<?php for($x = 0; $x < 4; $x++): ?>
	    <div class="col md-col-6 px2">
	        <div>
	            <h3>Get started today</h3>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	            <hr>	
	        </div>
	    </div>
	    <?php endfor;?>
	</div>
</section>

<section class="container overflow-hidden">	
	<div class="clearfix mxn2">
		<?php for($x = 0; $x < 4; $x++): ?>
	    <div class="col md-col-6 px2">
	        <div>
	            <h3>Get started today</h3>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	            <hr>	
	        </div>
	    </div>
	    <?php endfor;?>
	</div>
</section>


<?php include('includes/footer.php'); ?>
        
            
        
        
        
        
