<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Canada resorts that Hilton Grand Vacations has to offer." />
  <title>Indonesia Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in Indonesia with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>インドネシア</h1>
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
            <img src="img/bali.jpg" alt="Anantara Vacation Club Bali Seminyak" />
          </div>
          <div class="col-sm-8">
            <h3>サンライズ・ロッジ・<br>ア・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location">インドネシア、バリ島スミニャック</p>
            <p>バリ島で最も人気があるエリアの１つで、魅力的で寛げるレストランやカフェ、シックなバーやデザイナーショップが特徴的なスミニャックの魅力を是非発見してください。セレブや著名人が好んで訪れる場所にとどまらず、スタイリッシュなスミニャックの滞在は、豊かな芸術の世界や癒しの地、伝統的な農村文化の探求、そして果てしなく続く美しいビーチを容易に組み合わせることができます。</p>
            <p><a href="anantara-bali-seminyak/" class="btn btn-primary">詳細 &raquo;</a></p>
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