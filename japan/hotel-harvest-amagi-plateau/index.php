<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ホテルハーヴェスト天城高原</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      <div id="points-container">
          
          <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>平日/日曜日</th>
                    <th>土曜日/休前日</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1部屋2名様</td>
                    <td>1,500</td>
                    <td>2,000</td>
                  </tr>
                  <tr>
                    <td>1部屋3名様</td>
                    <td>2,250</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>1部屋4名様</td>
                    <td>3,000</td>
                    <td>4,000</td>
                  </tr>
                  <tr>
                    <td>1部屋5名様</td>
                    <td>3,750</td>
                    <td>5,000</td>
                  </tr>
                </tbody>
              </table>
              <p>ホテルハーヴェストでは、利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。<br>
              必要なクラブポイント数、事前の予告無しに変更される可能性があります。交通費や入湯税等その他の費用は、別途お支払いいただく必要があります。予約対象除外日があります。予約は直接クラブカウンセラーに電話にて申し込みください。</p>
            </div>
            
          </div>
        </div>
      </div>
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>ホテルハーヴェスト天城高原</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="points-link">必要ポイント数</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>静岡県伊豆市</h2>
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
          <address>静岡県伊豆市冷川1524</address>
          <p>〜 霊峰・富士山を一望。大自然を満喫する高原のリゾートホテル 〜 </p>
          <p>伊豆半島の中央、天城連山に位置し、360度の眺望に恵まれた約1,000万m&sup2;という日本屈指のスケールを誇る天空リゾート。客室や温泉大浴場からは富士山や天城の山々が一望でき、遠く駿河湾や相模湾沿いのきらめく夜景もご覧いただけます。また、ホテルが建つリゾートタウン内にはゴルフやテニスなどの本格的なスポーツ施設から、パターゴルフやベゴニアガーデンなどもあります。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタンダードルーム</li>
            <li>推奨宿泊人数： 2名様</li>
            <li>宿泊人数の上限： 5名様</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>展望温泉大浴場（サウナ・ミストサウナ）</li>
            <li>ショップ</li>
            <li>カラオケボックス</li>
            <li>ゲームルーム</li>
            <li>ラウンジ</li>
            <li>天城高原ゴルフコース（ タウン内）</li>
            <li>天城高原ファミリーパーク、</li>
            <li>ベゴニアガーデン</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0557-29-1155</p>
          
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
	  getMap(34.892161, 139.02842, 14);
    });
  </script>

</body>
</html>