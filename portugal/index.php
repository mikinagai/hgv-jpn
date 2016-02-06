<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Portugal resorts that Hilton Grand Vacations has to offer." />
  <title>Portugal Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Portugal with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Portugal</h1>
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
            <img src="img/vilamoura.jpg" alt="Hilton Vilamoura Vacation Club" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Vilamoura Vacation Club</h3>
            <p class="location">Vilamoura, Portugal</p>
            <p>This resort is designed in a contemporary style reflecting the natural colors of the surrounding Algarve region. This magnificent property is encircled by beautifully landscaped gardens and gold courses, spectacular pools and cascading waterfalls.</p>
            <p><a href="hilton-vilamoura/" class="btn btn-primary">Learn More &raquo;</a></p>
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