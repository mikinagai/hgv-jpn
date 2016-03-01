<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Colorado resorts that Hilton Grand Vacations has to offer." />
  <title>Colorado Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Skiing Vacation in Colorado with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Vacation in Colorado with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Colorado</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Our Resort</h2>
    </div>
    
    <div class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder"></div>
        </div>
      </div>
    
      <div id="resort-collection">
    
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/valdoro.jpg" alt="Valdoro Mountain Lodge" />
          </div>
          <div class="col-sm-8">
            <h3>Valdoro Mountain Lodge</h3>
            <p class="location">Breckenridge, Colorado, USA</p>
            <p>Nestled near the base of the vibrant Breckenridge Ski Resort, Valdoro Mountain Lodge offers visitors access to the region's year-round array of outdoor adventures including skiing, snowboarding, golfing, fly fishing, snowmobiling, horseback riding and whitewater rafting.</p>
            <p><a href="valdoro-mountain-lodge/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
      
      </div>
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>