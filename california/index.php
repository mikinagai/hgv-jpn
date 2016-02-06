<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of California resorts that Hilton Grand Vacations has to offer." />
  <title>California Resorts by Hilton Grand Vacations</title>
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
        <h1>California</h1>
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
            <img src="img/seapointe.jpg" alt="Carlsbad Seapointe Resort" />
          </div>
          <div class="col-sm-8">
            <h3>Carlsbad Seapointe Resort</h3>
            <p class="location">Carlsbad, California, USA</p>
            <p>Carlsbad Seapointe Resort is ideally perched atop a seaside bluff overlooking the Pacific Ocean and Coastal Highway 101. After a day of sightseeing or enjoying the beach, unwind to the relaxing sound of the ocean amid stylish d&eacute;cor and comfortable amenities.</p>
            <p><a href="carlsbad-seapointe/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/palmdesert.jpg" alt="Club Intrawest &ndash; Palm Desert" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Palm Desert</h3>
            <p class="location">Palm Desert, California, USA</p>
            <p>Revitalize your spirit at this Southern California oasis. Inspired by the region’s dramatic desert landscape, this mission-style resort was designed with seclusion and relaxation in mind.</p>
            <p><a href="club-intrawest-palm-desert/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/palisades.jpg" alt="Grand Pacific Palisades Resort" />
          </div>
          <div class="col-sm-8">
            <h3>Grand Pacific Palisades Resort</h3>
            <p class="location">Carlsbad, California, USA</p>
            <p>This resort offers breathtaking views of the Pacific Ocean and the Carlsbad Flower Fields. This resort treats visitors to luxurious furnishings, extensive on-site amenities and close proximity to Southern California's most popular attractions.</p>
            <p><a href="grand-pacific-palisades/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
    
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/marbrisa.jpg" alt="Hilton Grand Vacations Club at MarBrisa" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at MarBrisa</h3>
            <p class="location">Carlsbad, California, USA</p>
            <p>Located in the coastal village of Carlsbad, this resort features 27 villa buildings designed in classic Spanish Mediterranean style. This resort offers distant views of the Pacific Ocean, as well as immediate access to neighboring LEGOLAND&reg; California Resort.</p>
            <p><a href="hgvc-marbrisa/" class="btn btn-primary">Learn More &raquo;</a></p>
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