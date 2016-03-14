<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Canada resorts that Hilton Grand Vacations has to offer." />
  <title>Indonesia Resorts by Hilton Grand Vacations</title>  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner01.jpg');">
      
      <div class="banner-caption">
        <h1>インドネシア</h1>
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
            <a class="photo-tile" href="anantara-bali-seminyak/" style="background-image: url('img/thumbnails/anantara-bali-seminyak.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>サンライズ・ロッジ・<br>ア・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>インドネシア、バリ島スミニャック</p>
            <p>バリ島で最も人気があるエリアの１つで、魅力的で寛げるレストランやカフェ、シックなバーやデザイナーショップが特徴的なスミニャックの魅力を是非発見してください。セレブや著名人が好んで訪れる場所にとどまらず、スタイリッシュなスミニャックの滞在は、豊かな芸術の世界や癒しの地、伝統的な農村文化の探求、そして果てしなく続く美しいビーチを容易に組み合わせることができます。</p>
            <p><a href="anantara-bali-seminyak/" class="btn btn-primary">詳細</a></p>
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