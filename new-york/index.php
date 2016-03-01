<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of New York resorts that Hilton Grand Vacations has to offer." />
  <title>New York Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in New York with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Family Vacation in New York with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>New York</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Our Resorts</h2>
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
            <img src="img/hiltonclub.jpg" alt="The Hilton Club &ndash; New York" />
          </div>
          <div class="col-sm-8">
            <h3>The Hilton Club &ndash; New York</h3>
            <p class="location">New York, New York, USA</p>
            <p>This unique retreat in the heart of Manhattan serves as a spectacular getaway, delivering signature Hilton service and accommodations. Owners enjoy an array of amenities tailored to their distinctive expectations, including extensive dining and entertainment options.</p>
            <p><a href="hilton-club/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/west57.jpg" alt="West 57th Street by Hilton Club" />
          </div>
          <div class="col-sm-8">
            <h3>West 57th Street by Hilton Club</h3>
            <p class="location">New York, New York, USA</p>
            <p>Located in the heart of midtown Manhattan's prestigious Plaza District, West 57 th Street by Hilton Club is close to the city's most celebrated destinations, including Lincoln Center, Central Park, Carnegie Hall and Fifth Avenue's world-famous shopping.</p>
            <p><a href="west-57th-street/" class="btn btn-primary">Learn More &raquo;</a></p>
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