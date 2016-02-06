<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of South Carolina resorts that Hilton Grand Vacations has to offer." />
  <title>South Carolina Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Myrtle Beach, South Carolina with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Vacation in Myrtle Beach, South Carolina with Hilton Grand Vacations" />
        <img src="img/banner03.jpg" alt="Enjoy A Vacation in Myrtle Beach, South Carolina with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>South Carolina</h1>
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
            <img src="img/anderson.jpg" alt="Hilton Grand Vacations Club at Anderson Ocean Club" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Anderson Ocean Club</h3>
            <p class="location">Myrtle Beach, South Carolina, USA</p>
            <p>Ideally situated in the heart of the Grand Strand on magnificent Myrtle Beach, Hilton Grand Vacations Club at Anderson Ocean Club offers a spectacular vacation setting featuring elegantly appointed ocean view and oceanfront suites.</p>
            <p><a href="hgvc-anderson-ocean-club/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/ocean22.jpg" alt="Ocean 22 by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>Ocean 22 by Hilton Grand Vacations Club</h3>
            <p class="location">Myrtle Beach, South Carolina, USA</p>
            <p>Ocean 22 by Hilton Grand Vacations Club provides the ideal setting to savor the sand, surf and southern charm of one of the most beloved beach towns in America. Located directly on Myrtle Beach, with access from the famed Ocean Boulevard, this 22-story tower provides all the comforts and conveniences of home, complimented by a splendid collection of resort-style amenities. </p>
            <p><a href="hgvc-ocean22/" class="btn btn-primary">Learn More &raquo;</a></p>
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