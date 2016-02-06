<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Scotland resorts that Hilton Grand Vacations has to offer." />
  <title>Scotland Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Scotland with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>Scotland</h1>
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
            <img src="img/coylumbridge.jpg" alt="Hilton Grand Vacations Club at Coylumbridge" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Coylumbridge</h3>
            <p class="location">Coylumbridge, Inverness-shire, Scotland</p>
            <p>Located in the heart of Cairngorm National Park in a 65-acre woodland estate, this charming hideaway provides a relaxing retreat for guests seeking a serene Scotland holiday. The distinctive Nordic design of each lodge evoke the beauty of the surrounding countryside.</p>
            <p><a href="hgvc-coylumbridge/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/craigendarrochlodges.jpg" alt="Hilton Grand Vacations Club at Craigendarroch Lodges" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Craigendarroch Lodges</h3>
            <p class="location">Ballater, Royal Deeside, Scotland</p>
            <p>Set amid the lush rolling farmland of Royal Deeside, this celebrated resort occupies a spectacular private country estate. Centuries of cultural tradition are brought to life in the property's Nordic architecture and gourmet cuisine.</p>
            <p><a href="hgvc-craigendarroch-lodges/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/craigendarrochsuites.jpg" alt="Hilton Grand Vacations Club at Craigendarroch Suites" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Craigendarroch Suites</h3>
            <p class="location">Ballater, Royal Deeside, Scotland</p>
            <p>Nestled near the banks of the River Dee, this elegantly appointed resort provides a taste of luxury steeped in cultural tradition. This property sits on a spectacular private estate within the bounds of the Cairngorms National Park and just a few miles from Balmoral Castle.</p>
            <p><a href="hgvc-craigendarroch-suites/" class="btn btn-primary">Learn More &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/dunkeld.jpg" alt="Hilton Grand Vacations Club at Dunkeld" />
          </div>
          <div class="col-sm-8">
            <h3>Hilton Grand Vacations Club at Dunkeld</h3>
            <p class="location">Dunkeld, Perthshire, Scotland</p>
            <p>Built in the Edwardian period for the seventh Duke of Atholl, Hilton Dunkeld is located in the heart of a 280-acre estate of moor and forest in Perthshire, Scotland. The resort features its own private stretch of the River Tay, with superb salmon and trout fishing year-round.</p>
            <p><a href="hgvc-dunkeld/" class="btn btn-primary">Learn More &raquo;</a></p>
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