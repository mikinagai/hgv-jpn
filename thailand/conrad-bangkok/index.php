<?php include("../../server-side/library.php");
if(isset($_GET["lang"])){
  $lang = $_GET["lang"];
}
else {
  $lang = "eng";	
}
?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Rising proudly in a 38-floor twin tower design, this resort offers a stylish, relaxing and fulfilling urban lifestyle. Enjoy refreshing seclusion from the bustling city outside as you unwind on the sun deck and swim in the 32 metre long infinity edge swimming pool." />
  <title>Conrad Bangkok in Thailand</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="Conrad Bangkok in Thailand" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>コンラッド・バンコク</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>タイ、バンコク</h2>
    </div>
    
    <div id="subcontent" class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder-container">
            <div id="placeholder"></div>
          </div>
        </div>
      </div>
    
      <div class="row">
      
        <div class="col-sm-8 main-column">
          
          <h3>概要</h3>
          <address>87 Wireless Rd., Phatumwan, Bangkok, Thailand</address>
          <p>バンコクの中心部、スタイリッシュなオール・ シーズンズ・プレイスに位置しており、主要な商業施設やショッピングモールに近接するラグジュアリーホテルです。洗練された贅沢な雰囲気と充実した最新設備を備え、きめ細やかなサービスを提供するコンラッド・バンコクで快適な時間をお過ごしください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>エグゼクティブ・フロア・ホテルルーム </p>
          <ul>
            <li>推奨宿泊人数：2 名様</li>
            <li>宿泊人数の上限：3 名様</li>
          </ul>
          <p>レジデンス1 &amp; 2ベッドルーム・アパートメント</p>
          <ul>
            <li>推奨宿泊人数：</li>
            <li>2名様（ 1ベッドルーム）</li>
            <li>4名様（ 2ベッドルーム）</li>
            <li>宿泊人数の上限：</li>
            <li>3名様（ 1ベッドルーム）</li>
            <li>5名様（ 2ベッドルーム）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>エグゼクティブの特典</p>
          <ul>
            <li>エグゼクティブ・ラウンジにての朝食</li>
            <li>ソフトドリンク</li>
            <li>スイーツ付きアフタヌーンティー</li>
            <li>イブニング・カクテル</li>
          </ul>
          <p>レジデンスの特典 </p>
          <ul>
            <li>専用チェックイン＆チェックアウト</li>
            <li>24時間対応ルームサービス</li>
            <li>ホテル全ての施設利用</li>
            <li>毎日の部屋清掃</li>
          </ul>
          <p>クラブメンバーのみの特典 </p>
          <ul>
            <li>ホテル内の5つのレストランやバーでの食事料金の20%割引（ 食事のみ）</li>
            <li>滞在中のルームサービス料金の20%割引（ 食事のみ）</li>
            <li>午後6時までの無料レイト・チェックアウト</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 12 p.m.<br />電話番号: +66 2 210 9000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
        </div>
        
      </div>
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
  <script type="text/javascript" src="../../js/swipe.js"></script>
  <script type="text/javascript" src="../../js/resorts.js"></script>
  <script type="text/javascript">
	$(document).ready(function(e){ 
	  getMap(13.7369677, 100.5489427, 14);
    });
  </script>

</body>
</html>