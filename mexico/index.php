<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Mexico resorts that Hilton Grand Vacations has to offer." />
  <title>Mexico Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Mexico with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Mexico</h1>
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
            <img src="img/zihuatanejo.jpg" alt="Club Intrawest &ndash; Zihuatanejo" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Zihuatanejo</h3>
            <p class="location">Zihuatanejo, Pacific Coast, Mexico</p>
            <p>Carved out of the sloping mountainside overlooking Playa La Ropa, this resort provides a tranquil oceanfront retreat with old-world charm. Reflecting the dramatic landscape, interiors blend seamlessly with private outdoor spaces and magnificent views of the Pacific Ocean.</p>
            <p><a href="club-intrawest-zihuatanejo/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/acapulco.jpg" alt="Fiesta Americana Villas Acapulco" />
          </div>
          <div class="col-sm-8">
            <h3>Fiesta Americana Villas Acapulco</h3>
            <p class="location">Acapulco Guerrero, Pacific Coast, Mexico</p>
            <p>On the southern shores of the Mexican Pacific, Fiesta Americana Villas Acapulco puts guests in the heart of a thriving entertainment and restaurant district. Located on spectacular Condesa Beach, this resort provides a vibrant setting for an unforgettable vacation in Mexico.</p>
            <p><a href="fiesta-americana-villas-acapulco/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/cancun.jpg" alt="Fiesta Americana Villas Cancun" />
          </div>
          <div class="col-sm-8">
            <h3>Fiesta Americana Villas Cancun</h3>
            <p class="location">Cancun, Gulf of Mexico, Mexico</p>
            <p>Fiesta Americana Villas Cancun delivers all the standards of excellence that guests have come to expect from the Fiesta Americana brand. This cozy resort offers a welcome haven of hospitality, ideal for those who prefer a relaxing and calming vacation experience.</p>
            <p><a href="fiesta-americana-villas-cancun/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/loscabos.jpg" alt="Fiesta Americana Villas Los Cabos" />
          </div>
          <div class="col-sm-8">
            <h3>Fiesta Americana Villas Los Cabos</h3>
            <p class="location">Cabo San Lucas, Pacific Coast, Mexico</p>
            <p>This flagship Fiesta Americana Vacation Club resort offers a sprawling all-inclusive retreat atop dramatic hillside and oceanfront property in the exclusive Cabo del Sol area of Los Cabos, at the southern tip of the Baja Peninsula.</p>
            <p><a href="fiesta-americana-villas-los-cabos/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/explorean.jpg" alt="The Explorean Kohunlich" />
          </div>
          <div class="col-sm-8">
            <h3>The Explorean Kohunlich</h3>
            <p class="location">Chetumal, Yucatan Peninsula, Mexico</p>
            <p>Located in the heart of the Yucatan Peninsula jungle, this resort combines luxury and comfort amid spectacular natural surroundings. From the privacy of your bungalow, hear the sound of wild fauna as you immerse yourself in the tranquil tropical scenery.</p>
            <p><a href="explorean-kohunlich/" class="btn btn-primary">Learn More &raquo;</a></p>
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