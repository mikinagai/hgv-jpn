<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Canada resorts that Hilton Grand Vacations has to offer." />
  <title>Italy Resorts by Hilton Grand Vacations</title>
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
        <h1>イタリア</h1>
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
            <img src="img/borgo.jpg" alt="Hilton Grand Vacations Club at Borgo alle Vigne" />
          </div>
          <div class="col-sm-8">
            <h3>"ヒルトン・グランド・バケーションズ・クラブ・アット・<br>ボルゴ・アレ・ヴィ二ェ"</h3>
            <p class="location">イタリア、トスカーナ州テッリッチョーラ</p>
            <p>ヒルトン・グランド・バケーションズ・クラブ・アット・アレ・ヴィニェは、イタリア、タスカニーの中央に位置し、本物のイタリアを体験いただけます。世界で最も絵になる素晴らしいこの地の静寂に包まれた趣きあるリゾートで存分にお寛ぎください。</p>
            <p><a href="hgvc-borgo-alle-vigne/" class="btn btn-primary">詳細 &raquo;</a></p>
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