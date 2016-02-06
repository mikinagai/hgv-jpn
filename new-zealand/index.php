<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of New Zealand resorts that Hilton Grand Vacations has to offer." />
  <title>New Zealand Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in New Zealand with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>New Zealand</h1>
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
            <img src="img/oakshores.jpg" alt="Anantara Vacation Club at Oaks Shores" />
          </div>
          <div class="col-sm-8">
            <h3>Anantara Vacation Club at Oaks Shores</h3>
            <p class="location">Queenstown, New Zealand</p>
            <p>Discover the adventure capital of the southern hemisphere and New Zealand's most popular ski resort town from Oaks Shores' comfortable year round retreat. The resort is edging vast Lake Wakatipu in Queenstown and boasting breathtaking waterfront and mountain views.</p>
            <p><a href="anantara-oaks-shores/" class="btn btn-primary">Learn More &raquo;</a></p>
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