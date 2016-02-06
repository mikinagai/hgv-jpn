<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ホテルハーヴェスト熱海伊豆山</title>
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
          
          <div class="slide">
            <img src="img/03.jpg" alt="" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="" />
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
                    <td>2,000</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>1部屋3名様</td>
                    <td>3,000</td>
                    <td>4,500</td>
                  </tr>
                  <tr>
                    <td>1部屋4名様</td>
                    <td>4,000</td>
                    <td>6,000</td>
                  </tr>
                  <tr>
                    <td>1部屋5名様</td>
                    <td>5,000</td>
                    <td>7,500</td>
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
        <h1>ホテルハーヴェスト熱海伊豆山</h1>
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
      <h2>静岡県熱海市</h2>
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
          <address>静岡県熱海市伊豆山 824-5</address>
          <p>〜海を望み森に囲まれるリゾートホテル〜 </p>
          <p>美しい海と緑が響きあう熱海伊豆山は、五感を潤し、時を満たす場所です。ホテルハーヴェストが求めていたかけがえのない日本の恵みは、熱海伊豆山で見つけることができました。眼下に広がる紺碧の相模湾、四季折々の表情を見せる熱海伊豆山の豊かな自然ととけ合うように佇むホテルハーヴェスト熱海伊豆山。今ここから、歓びと安らぎに満ちたひとときが始まります。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタンダードルーム</li>
            <li>推奨宿泊人数：4名様</li>
            <li>宿泊人数の上限：5名様</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>眺望テラス</li>
            <li>露天風呂付き温泉大浴場</li>
            <li>家族風呂</li>
            <li>屋外プール</li>
            <li>レストラン(和食・洋食・ブッフェの3タイプ)</li>
            <li>スパ</li>
            <li>カラオケルーム</li>
            <li>ショップ</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0577-80-0112</p>
          
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
	  getMap(35.116308, 139.091361, 14);
    });
  </script>

</body>
</html>