<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Portugal resorts that Hilton Grand Vacations has to offer." />
  <title>Portugal Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Portugal with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>ポルトガル</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
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
            <img src="img/vilamoura.jpg" alt="Hilton Vilamoura Vacation Club" />
          </div>
          <div class="col-sm-8">
            <h3>ヒルトン・ヴィラモウラ・バケーション・クラブ</h3>
            <p class="location">ポルトガル、ヴィラモウラ</p>
            <p>自然の色合いを生かした現代風のデザイン建築が、ポルトガル南部アルガルヴェの賑やかな港町に見事に調和しています。壮大なヒルトン・ヴィラモウラ・アスカスカタス・ゴルフリゾート＆スパに隣接するこのリゾートには、手入れの行き届いた庭園、ゴルフコース、華やかなプール、そして美しい滝といった贅沢な設備の数々が施されています</p>
            <p><a href="hilton-vilamoura/" class="btn btn-primary">詳細 &raquo;</a></p>
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