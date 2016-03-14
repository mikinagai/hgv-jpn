<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of California resorts that Hilton Grand Vacations has to offer." />
<title>Florida &ndash; Atlantic Resorts by Hilton Grand Vacations</title>
    <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner01.jpg');">
      
      <div class="banner-caption">
        <h1>フロリダ、大西洋側</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
    </div>
    
    <div class="content">
    
      <!-- <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder"></div>
        </div>
      </div> -->
    
      <div id="resort-collection" class="sub-content resort-gallery-container">
        
        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="hgvc-mcalpin-ocean-plaza/" style="background-image: url('img/mcalpin.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・マックアルピン—オーシャンプラザ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州マイアミビーチ</p>
            <p>オープンテラスのカフェや、アールデコ調の建物が並ぶマイアミのサウスビーチは、多様な文化が交錯する都会的で洗練された街です。ヒルトン・グランド・バケーションズ・クラブは、サウスビーチの中心、オーシャンドライブの一等地にあり、周辺は地元で評判のビストロやブティック、画廊などで賑わっています。</p>
            <p><a href="hgvc-mcalpin-ocean-plaza//" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="plantation-beach-club-indian-river/" style="background-image: url('img/plantationirpr.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>プランテーション・ビーチ･クラブ・アット・インディアン・リバー・プランテーション・リゾート</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州スチュアート</p>
            <p>大西洋に面した広大なプランテーション・ビーチ・クラブ・アット・インディアン・リバー・プランテーション・リゾートで、フロリダならではのバケーションをお楽しみください。ハッチンソン島の美しいビーチフロント沿いに位置し、自然散策、海水浴、サーフィン、セーリング、スノーケリングなど、さまざまなレクリエーションに理想的な環境を備えています。</p>
            <p><a href="plantation-beach-club-indian-river/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->
      
      </div> <!-- resort-collection -->
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>