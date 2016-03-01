<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Florida Panhandle resorts that Hilton Grand Vacations has to offer." />
  <title>Florida &ndash; Panhandle Resort by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Family Vacation in the Florida Panhandle with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Romantic Vacation in the Florida Panhandle with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Florida &ndash; Panhandle</h1>
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
            <img src="img/sandestin.jpg" alt="Club Intrawest &ndash; Sandestin" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Sandestin</h3>
            <p class="location">Sandestin, Florida, USA</p>
            <p>Nestled between the Emerald Coast and the Choctawhatchee Bay, Club Intrawest – Sandestin offers a stunning setting for warm-weather fun. Indulge in the casual elegance of this distinctive resort.</p>
            <p><a href="club-intrawest-sandestin/" class="btn btn-primary">Learn More &raquo;</a></p>
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