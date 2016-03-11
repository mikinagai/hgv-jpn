<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of South Carolina resorts that Hilton Grand Vacations has to offer." />
  <title>South Carolina Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>サウスカロライナ州</h1>
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
            <a class="photo-tile" href="hgvc-anderson-ocean-club/" style="background-image: url('img/thumbnails/anderson.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・<br>アンダーソン・オーシャン・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、サウス・カロライナ州マートルビーチ</p>
            <p>グランド・ストランドの中心部に位置するヒルトン・グランド・バケーションズ・クラブ・アット・アンダーソン・オーシャン・クラブは、皆様に最上級のバケーションを提供します。エレガントに装飾されたパティオ付きのオーシャンビューとオーシャンフロントのスイートは、我が家で過ごすような快適さを備えています。また、リゾートの周辺のチャンピオンシップ・ゴルフコース、バラエティーに富んだ数々のレストラン、ショッピングやエンターテイメントがお楽しみいただける場所へのアクセスも便利です。</p>
            <p><a href="hgvc-anderson-ocean-club/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="hgvc-ocean22/" style="background-image: url('img/thumbnails/ocean22.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>オーシャン22バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、サウス・カロライナ州マートルビーチ</p>
            <p>オーシャン22バイ・ヒルトン・グランド・バケーションズ・クラブは砂浜と波、そしてアメリカで多くの人から愛されているこのビーチタウンが持つアメリカ南部独特の魅力を満喫できる理想的なリゾートです。マートルビーチ沿いに建ち、有名なオーシャン・ブルバードからアクセス可能な22階建てのタワーは、我が家で暮らすような快適さと便利さを提供し、リゾートスタイルの充実したアメニティで贅沢な時間を過ごしていただけます。</p>
            <p><a href="hgvc-ocean22/" class="btn btn-primary">詳細</a></p>
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