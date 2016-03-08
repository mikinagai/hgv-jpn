<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Las Vegas resorts that Hilton Grand Vacations has to offer." />
  <title>Nevada Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="destinationslideshow">
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Las Vegas, Nevada with Hilton Grand Vacations" />
        <img src="img/banner02.jpg" alt="Enjoy A Couple's Vacation in Las Vegas, Nevada with Hilton Grand Vacations" />
        <img src="img/banner03.jpg" alt="Enjoy A Casino Vacation in Las Vegas, Nevada with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Nevada</h1>
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
            <img src="img/elara.jpg" alt="Elara, a Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>Elara, a Hilton Grand Vacations Club</h3>
            <p class="location">Las Vegas, Nevada, USA</p>
            <p>The sleek, 52-story Elara resort boasts a premier Center Strip location. This property offers adjoining access to the Miracle Mile, which has restaurants, bars and retail shops, and is adjacent to the Planet Hollywood Resort &amp; Casino complex featuring a renowned casino.</p>
            <p><a href="elara-hgvc/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
      
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/flamingo.jpg" alt="Hilton Grand Vacations Club at the Flamingo" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at the Flamingo</h3>
            <p class="location">Las Vegas, Nevada, USA</p>
            <p>Revel in the thrills of Las Vegas from the magnificent grandeur of Hilton Grand Vacations' flagship vacation ownership resort. Superbly situated, this resort is just steps away from the spectacle of sights and sounds that can only be found on the Las Vegas Strip.</p>
            <p><a href="hgvc-flamingo/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/trump.jpg" alt="Hilton Grand Vacations Club at Trump International Hotel Las Vegas" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Trump International Hotel Las Vegas</h3>
            <p class="location">Las Vegas, Nevada, USA</p>
            <p>Hilton Grand Vacations Club at Trump International Hotel provides a spectacular experience that is uniquely sophisticated and completely luxurious. This exclusive property offers extensive amenities and an iconic Las Vegas setting.</p>
            <p><a href="hgvc-trump/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/paradise.jpg" alt="Hilton Grand Vacations Club on Paradise" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club on Paradise</h3>
            <p class="location">Las Vegas, Nevada, USA</p>
            <p>The spectacular allure of the Las Vegas Strip delivers a one-of-a-kind vacation experience. The relaxing setting of Hilton Grand Vacations Club provides a serene oasis within easy access to the best of Las Vegas.</p>
            <p><a href="hgvc-paradise/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/boulevard.jpg" alt="Hilton Grand Vacations Club on the Boulevard" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club on the Boulevard</h3>
            <p class="location">Las Vegas, Nevada, USA</p>
            <p>Situated at the northern end of the Las Vegas Strip, this elegant resort combines the comforts of a luxurious home with ideal access to the city's signature attractions. Among the upscale collection of amenities is the eforea Spa, offering an enticing collection of spa treatments.</p>
            <p><a href="hgvc-boulevard/" class="btn btn-primary">Learn More &raquo;</a></p>
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