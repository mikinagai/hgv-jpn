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
            <a class="photo-tile" href="hgvc-borgo-alle-vigne/" style="background-image: url('img/thumbnails/hgvc-borgo-alle-vigne.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・<br>ボルゴ・アレ・ヴィ二ェ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>イタリア、トスカーナ州テッリッチョーラ</p>
            <p>ヒルトン・グランド・バケーションズ・クラブ・アット・アレ・ヴィニェは、イタリア、タスカニーの中央に位置し、本物のイタリアを体験いただけます。世界で最も絵になる素晴らしいこの地の静寂に包まれた趣きあるリゾートで存分にお寛ぎください</p>
            <p><a href="hgvc-borgo-alle-vigne/" class="btn btn-primary">詳細</a></p>
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