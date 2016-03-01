<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Utah resorts that Hilton Grand Vacations has to offer." />
  <title>Utah Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Park City, Utah with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Vacation in Park City, Utah with Hilton Grand Vacations" />
        <img src="img/banner03.jpg" alt="Enjoy A Vacation in Park City, Utah with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Utah</h1>
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
            <img src="img/sunrise.jpg" alt="Sunrise Lodge, a Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>Sunrise Lodge, a Hilton Grand Vacations Club</h3>
            <p class="location">Park City, Utah, USA</p>
            <p>This ski-in mountain lodge located at the base of the Sunrise lift at Canyons Resort, puts you in the heart of Park City's signature treasures, with historic Park Avenue and the Utah Olympic Park just minutes away, and expansive outdoor adventures in every direction.</p>
            <p><a href="sunrise-lodge-hgvc/" class="btn btn-primary">Learn More &raquo;</a></p>
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