<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of New York resorts that Hilton Grand Vacations has to offer." />
  <title>New York Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>ニューヨーク</h1>
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
            <a class="photo-tile" href="west-57th-street/" style="background-image: url('img/thumbnails/west57th.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ウエスト57ストリート・バイ・ヒルトン・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、ニューヨーク州マンハッタン</p>
            <p>ニューヨーク市で初のタイムシェア物件として大きな注目を集めている、ウエスト57ストリート・バイ・ヒルトン・クラブ。28階建てのモダンなビルに贅沢を駆使したワールドクラスの施設で、この上ない快適さをお届けします。マンハッタンの中心であるプラザ・ディストリクトに位置し、リンカーンセンター、セントラルパーク、カーネギーホール、５番街の高級ショッピング街にも近い抜群のロケーション。</p>
            <p><a href="west-57th-street/" class="btn btn-primary">詳細</a></p>
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