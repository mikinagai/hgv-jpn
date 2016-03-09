<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Canada resorts that Hilton Grand Vacations has to offer." />
  <title>Canada Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Canada with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Canada</h1>
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
            <img src="img/bluemountain.jpg" alt="Club Intrawest &ndash; Blue Mountain" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Blue Mountain</h3>
            <p class="location">Blue Mountain, Ontario, Canada</p>
            <p>A picturesque wonderland in the winter and a recreational haven in the summer, Blue Mountain is Ontario's new cottage country. Less than a two-hour drive from Toronto, Ontario, Club Intrawest &ndash; Blue Mountain is a complete escape from the hustle of urban life.</p>
            <p><a href="club-intrawest-blue-mountain/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/tremblant.jpg" alt="Club Intrawest &ndash; Tremblant" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Tremblant</h3>
            <p class="location">Mont Tremblant, Quebec, Canada</p>
            <p>Vacationers at this elegant mountain resort indulge in relaxation, outdoor recreation and the joie de vivre of French Canada. Perched on the foothills of the Laurentian Mountains, the property is set on the picturesque Le Geant fairways overlooking the waters of Lac Tremblant.</p>
            <p><a href="club-intrawest-tremblant/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/vancouver.jpg" alt="Club Intrawest &ndash; Vancouver" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Vancouver</h3>
            <p class="location">Vancouver, British Columbia, Canada</p>
            <p>Vancouver is one of the world’s most naturally spectacular and cosmopolitan cities. This unique urban resort offers floor-to-ceiling windows providing breathtaking panoramic views of the harbor, city and mountains.</p>
            <p><a href="club-intrawest-vancouver/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/whistler.jpg" alt="Club Intrawest &ndash; Whistler" />
          </div>
          <div class="col-sm-8">
            <h3>Club Intrawest &ndash; Whistler</h3>
            <p class="location">Whistler, British Columbia, Canada</p>
            <p>In the center of one of North America's most celebrated ski destinations, this magnificent resort blends rustic elegance with ski lodge chic. People from all over the world descend here to ski Whistler's unparalleled slopes.</p>
            <p><a href="club-intrawest-whistler/" class="btn btn-primary">Learn More &raquo;</a></p>
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