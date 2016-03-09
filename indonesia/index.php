<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Canada resorts that Hilton Grand Vacations has to offer." />
  <title>Indonesia Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Indonesia with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Indonesia</h1>
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
            <img src="img/bali.jpg" alt="Anantara Vacation Club Bali Seminyak" />
          </div>
          <div class="col-sm-8">
            <h3>Anantara Vacation Club Bali Seminyak</h3>
            <p class="location">Seminyak, Bali, Indonesia</p>
            <p>Discover one of the island's most sought after destinations, characterised by a charming laid back vibe, great restaurants, chic bars and designer shops. Your Seminyak escape can also be combined with exploration of the island's rich artistic scenes and endless stunning beaches.</p>
            <p><a href="anantara-bali-seminyak/" class="btn btn-primary">Learn More &raquo;</a></p>
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