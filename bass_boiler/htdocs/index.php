<?php
$GLOBALS['bodyClass'] = 'home-body';
$current = 'home';
include('includes/header.php');
?>


<?php include('components/panel-parallax.php'); ?>


<header class="white bg-gray bg-cover bg-center"
  style="background-image: url(https://d262ilb51hltx0.cloudfront.net/max/2000/1*DZwdGMaeu-rvTroJYui6Uw.jpeg)">
  <nav class="clearfix white">
    <div class="sm-col">
      <a href="/" class="btn py2">Home</a>
      <a href="/" class="btn py2">Burgers</a>
      <a href="/" class="btn py2">Fries</a>
    </div>
    <div class="sm-col-right">
      <a href="/" class="btn py2">About</a>
    </div>
  </nav>
  <div class="center px2 py4">
    <h1 class="h1 h0-responsive caps mt4 mb0 regular">Hamburgers</h1>
    <p class="h3">Artisinal ground chuck creations</p>
    <a href="#" class="h3 btn btn-primary mb4">Pancake</a>
  </div>
</header>

<section class="container px2 py3">
  <div class="clearfix mxn2"> 
	<?php for($x = 0; $x < 6; $x++): ?>
    <div class="sm-col sm-col-4 px2">
      <h2 class="h1 mb0">Bacon</h2>
      <p>Bacon ipsum dolor sit amet chuck prosciutto landjaeger ham hock filet mignon shoulder hamburger pig venison. Ham bacon corned beef, sausage kielbasa flank tongue pig drumstick capicola swine short loin ham hock kevin.</p>
    </div>
    <?php endfor; ?>
  </div>
</section>

<footer class="white bg-black">
  <div class="px2 py3 container">
    <div class="clearfix mxn2">
	  <?php for($x = 0; $x < 4; $x++): ?>
      <div class="col col-6 md-col-3">
        <ul class="list-reset">
          <li>
            <h3 class="h4 m0">
              <a href="#" class="btn block">Home</a>
            </h3>
          </li>
          <li><a href="#" class="h5 btn block">Bacon</a></li>
          <li><a href="#" class="h5 btn block">Bratwurst</a></li>
          <li><a href="#" class="h5 btn block">Andouille</a></li>
          <li><a href="#" class="h5 btn block">Pork Loin</a></li>
        </ul>
      </div>
      <?php endfor; ?>
    <p class="h6 mb0">&copy; 2014 Hamburgers, LLC</p>
  </div>
</footer>

<?php include('includes/footer.php'); ?>
        
            
        
        
        
        
