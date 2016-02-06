<?php include("server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <meta name="keywords" content="" /> 
  <title>Experiences by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <section class="row content">
      <div class="col-md-4">
        <div class="intro-copy">
          <img alt="" src="img/illustration02.jpg" />
          <p>Welcome to the EXPERIENCES by Hilton Grand Vacations program. We have exclusive participating partners that have agreed to offer you exceptional values.</p>
          <img alt="" src="img/illustration01.jpg" />
        </div>
      </div>
      <div class="col-md-8">
        <div class="map text-right">
        
          <img src="img/map.gif" alt="" />
          
          <a href="anaheim/restaurants" rel="tooltip" data-toggle="tooltip" title="Anaheim, CA" id="anaheim-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="carlsbad/restaurants" rel="tooltip" data-toggle="tooltip" title="Carlsbad, CA" id="carlsbad-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="myrtlebeach/attractions" rel="tooltip" data-toggle="tooltip" title="Myrtle Beach, SC" id="myrtle-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="parkcity/restaurants" rel="tooltip" data-toggle="tooltip" title="Park City, UT" id="parkcity-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="orlando/restaurants" rel="tooltip" data-toggle="tooltip" title="Orlando, FL" id="orlando-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="bigisland/restaurants" rel="tooltip" data-toggle="tooltip" title="Big Island, HI" id="bigisland-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="oahu/restaurants" rel="tooltip" data-toggle="tooltip" title="Oahu, HI" id="oahu-dot" class="dot">
            <img src="img/dot.gif" alt="" />
          </a>
          
          <a href="phoenix/restaurants" rel="tooltip" data-toggle="tooltip" title="Phoenix, AZ" id="phoenix-dot" class="dot">
           <img src="img/dot.gif" alt="" />
          </a>
          
        </div>
      </div>
    </section>

    
    <?php addFooter(); ?>
  
  </div>

  <?php addScripts(); ?>

</body>
</html>