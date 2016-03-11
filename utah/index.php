<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Utah resorts that Hilton Grand Vacations has to offer." />
  <title>Utah Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>ユタ州</h1>
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
            <a class="photo-tile" href="sunrise-lodge-hgvc/" style="background-image: url('img/thumbnails/sunrise.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>サンライズ・ロッジ・ア・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、ユタ州パークシティ</p>
            <p>その自然環境とパークシティの山岳地帯の影響を受け、丸太作りの建築とモダンな優雅さが調和したサンライズ・ロッジ・ア・ヒルトン・グランド・バケーションズ・クラブは、「日常から抜け出す」本当の意味を教えてくれるバケーションを提供してくれることでしょう。このスキー・ロッジはパークシティー・マウンテン・リゾート地域にあるキャニオンズのサンライズリフト乗り場のベースに立地しています。歴史的なメインストリート、ユタ・オリンピック・パークへわずか数分の場所に位置し、豊富なアウトドアを満喫していただけます。また、パークシティはアメリカ代表スキーチームの本拠地でり、またアメリカ最大のインディペンデント映画祭であるサンダンス映画祭の開催地にもなっています。</p>
            <p><a href="sunrise-lodge-hgvc/" class="btn btn-primary">詳細</a></p>
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