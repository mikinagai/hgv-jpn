<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of New Zealand resorts that Hilton Grand Vacations has to offer." />
  <title>New Zealand Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div><!--div id="destinationslideshow"-->
        <img src="img/banner01.jpg" alt="Enjoy A Vacation in New Zealand with Hilton Grand Vacations" />
      </div>
      
      <div class="banner-caption">
        <h1>ニュージーランド</h1>
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
            <img src="img/oakshores.jpg" alt="Anantara Vacation Club at Oaks Shores" />
          </div>
          <div class="col-sm-8">
            <h3>アナンタラ・バケーション・クラブ・アット・オークス・ショアーズ</h3>
            <p class="location">ニュージーランド、クイーンズタウン</p>
            <p>年間を通して快適な南半球のニュージーランドで最も人気のあるスキーリゾート「オークス･ショアーズ」のアドベンチャーライフをお楽しみください。広大なクイーンズタウンのワカティプ湖、絶景のウォーターフロントと山岳を誇るオークス・ショアーズは、空港からわずか15分の距離に位置し、タウンセンターとコンベンション事務局へは徒歩30分、そしてアロータウン、ミルブルック、リマーカブルズ、コロネット・ピークとカードローナ行きのバスへ直接アクセスいただけます。 クイーンズタウンは、四季折々の湖とアルパインの目的地として一年中豊富なアクティビティに恵まれ、水、空、地と遊びにはこと欠きません。オークス・ショアーズの滞在では、ゆったりと湖の周りを散歩、ワールドクラスのスキー場、ゴルフコース、ワイナリー巡り、ドキドキするような冒険を手軽にお楽しみいただけます。</p>
            <p><a href="anantara-oaks-shores/" class="btn btn-primary">詳細 &raquo;</a></p>
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