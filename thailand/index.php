<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Thailand resorts that Hilton Grand Vacations has to offer." />
  <title>Thailand Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Thailand with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Thailand</h1>
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
            <img src="img/bangkok.jpg" alt="Anantara Vacation Club Bangkok Sathorn" />
          </div>
          <div class="col-sm-8">
            <h3>Anantara Vacation Club Bangkok Sathorn</h3>
            <p class="location">Yannawa, Bangkok, Thailand</p>
            <p>Rising proudly in a 38-floor twin tower design, this resort offers a stylish, relaxing and fulfilling urban lifestyle. Enjoy refreshing seclusion from the bustling city outside as you unwind on the sun deck and swim in the 32 metre long infinity edge swimming pool.</p>
            <p><a href="anantara-bangkok-sathorn/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/bophut.jpg" alt="Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa" />
          </div>
          <div class="col-sm-8">
            <h3>Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa</h3>
            <p class="location">Koh Samui, Surat Thani, Thailand</p>
            <p>Enjoy water sports on the Gulf of Thailand's placid warm waters whilst residing at our elegant Samui resort. Soak in the sun by Anantara's elegant infinity edge pool or on Bophut's soft white sand.</p>
            <p><a href="anantara-bophut-koh-samui/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/phuket.jpg" alt="Anantara Vacation Club Phuket Mai Khao" />
          </div>
          <div class="col-sm-8">
            <h3>Anantara Vacation Club Phuket Mai Khao</h3>
            <p class="location">Mai Khao, Thalang, Phuket, Thailand</p>
            <p>Just minutes away are the tranquil sun kissed sands of Mai Khao &ndash; Phuket's longest beach. While the green forest of Sirinath National Park that fringes our resort is your gateway to an impressive natural playground of sea caves, mangroves, coral reefs and dazzling islands.</p>
            <p><a href="anantara-phuket-mai-khao/" class="btn btn-primary">Learn More &raquo;</a></p>
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