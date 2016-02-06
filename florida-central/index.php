<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Central Florida resorts that Hilton Grand Vacations has to offer." />
  <title>Florida &ndash; Central Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Beach Vacation in California with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Legoland Vacation in California with Hilton Grand Vacations" />
        <img src="img/banner03.jpg" alt="Enjoy A Beach Vacation in California with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Florida &ndash; Central</h1>
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
            <img src="img/seaworld.jpg" alt="Hilton Grand Vacations Club at SeaWorld" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at SeaWorld</h3>
            <p class="location">Orlando, Florida, USA</p>
            <p>Amid the irresistible energy of the world's most famous theme parks, this Bermuda-styled retreat awaits your enjoyment. Located across the street from SeaWorld&reg; Orlando, the resort features stunning pools, colorful gardens and a serene lake promenade.</p>
            <p><a href="hgvc-seaworld/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/tuscany.jpg" alt="Hilton Grand Vacations Club at Tuscany Village" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Tuscany Village</h3>
            <p class="location">Orlando, Florida, USA</p>
            <p>Within minutes of Walt Disney World&reg; Resort and adjacent to the Orlando Premium Outlets, Hilton Grand Vacations Club at Tuscany Village treats guests to extraordinary amenities and an ideal setting for fun and relaxation.</p>
            <p><a href="hgvc-tuscany-village/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/parcsoleil.jpg" alt="Parc Soleil by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>Parc Soleil by Hilton Grand Vacations Club</h3>
            <p class="location">Orlando, Florida, USA</p>
            <p>The resort features extensive on-site recreational facilities and amenities, tranquil waterfront walking paths and ideal proximity to Orlando's most popular theme parks, golf courses, dining and shopping.</p>
            <p><a href="parc-soleil-hgvc/" class="btn btn-primary">Learn More &raquo;</a></p>
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