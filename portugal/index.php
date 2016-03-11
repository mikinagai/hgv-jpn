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
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>ポルトガル</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
    </div>
    
    <div class="content">
    
      <div id="resort-collection" class="sub-content resort-gallery-container">
        
        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="hilton-vilamoura/" style="background-image: url('img/thumbnails/vilamoura.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell">
            <h3>ヒルトン・ヴィラモウラ・バケーション・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>ポルトガル、ヴィラモウラ</p>
            <p>自然の色合いを生かした現代風のデザイン建築が、ポルトガル南部アルガルヴェの賑やかな港町に見事に調和しています。壮大なヒルトン・ヴィラモウラ・アスカスカタス・ゴルフリゾート＆スパに隣接するこのリゾートには、手入れの行き届いた庭園、ゴルフコース、華やかなプール、そして美しい滝といった贅沢な設備の数々が施されています</p>
            <p><a href="hilton-vilamoura/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->
      
      </div>
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>