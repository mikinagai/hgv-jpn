<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Florida Panhandle resorts that Hilton Grand Vacations has to offer." />
  <title>Florida &ndash; Panhandle Resort by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>フロリダ  &ndash; Panhandle</h1>
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
    
      <div id="resort-collection" class="sub-content resort-gallery-container">
        
        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="club-intrawest-sandestin/" style="background-image: url('img/thumbnails/sandestin.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>クラブ・イントラウエスト ー サンデスティン</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州サンデスティン</p>
            <p>エメラルドコーストとチョクトハチー湾の間に位置し、自然のままの白い砂浜がどこまでも続く海辺のリゾートです。月明かりが美しい夜にテラスで寛ぎながら、マリーナのボートが静かに揺れる音に耳を澄ませ、海辺の情緒に浸ってみませんか。</p>
            <p><a href="club-intrawest-sandestin/" class="btn btn-primary">詳細</a></p>
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