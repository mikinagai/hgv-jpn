<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Colorado resorts that Hilton Grand Vacations has to offer." />
  <title>Colorado Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>コロラド州</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>私たちのリゾート</h2>
    </div>
    
    <div class="content">
    
      <div id="resort-collection" class="sub-content resort-gallery-container">

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="valdoro-mountain-lodge/" style="background-image: url('img/thumbnails/valdoro-mountain-lodge.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヴァルドロ・マウンテン・ロッジ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、コロラド州ブリッケンリッジ</p>
            <p>建築物としての美術性が高く評価されているヴァルドロ・マウンテン・ロッジは、賑やかなスキーリゾートの麓にあります。かつて炭鉱で栄えたブレッケンリッジの古き良き歴史を感じさせ、優雅さが程よく調和しています。国際水準のスキー場はもちろん、スノーボード、スノーモービル、ゴルフ、フライフィッシング、乗馬、ホワイトウォーター・ラフティングなど、四季を通じて、さまざまなアウトドアのアクティビティーも盛りだくさん。</p>
            <p><a href="valdoro-mountain-lodge/" class="btn btn-primary">詳細</a></p>
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