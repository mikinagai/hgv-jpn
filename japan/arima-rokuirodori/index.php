<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>有馬六彩</title>
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
          
        </div>
        <!--span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span-->
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
        <h1>有馬六彩</h1>
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
      <h2>兵庫県神戸市北区</h2>
    </div>
    
    <div id="subcontent" class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <!--div id="placeholder-container">
            <div id="placeholder"></div>
          </div-->
        </div>
      </div>
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>兵庫県神戸市北区有馬町341-1 </address>
          <p>〜 関西の奥座敷、情緒溢れる和のリゾート 〜 </p>
          <p>豊かな自然が広がる敷地には、有馬六景をモチーフとした竹林や滝や池を配し、情趣溢れる空間を再現。多彩な食のひとときをお楽しみいただけるように、山並みの眺めと開放感を愉しみながらご賞味いただけるフォーマルレストランとカジュアルレストラン、そして新鮮な食材を目の前で調理する割烹カウンターをご用意しました。お好みのスタイルで旬の食材をお楽しみいただけます。また、有馬温泉の代名詞でもある「金湯」と「銀湯」は自家源泉です。二大名湯を心ゆくまで満喫いただけます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタンダードルーム　</li>
            <li>推奨宿泊人数： 2名様</li>
            <li>宿泊人数の上限： 3名様</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>レストラン（日本料理・イタリアン・ブッフェ）</li>
            <li>露天風呂付温泉大浴場（サウナ・湯上りラウンジ）</li>
            <li>家族風呂</li>
            <li>足湯</li>
            <li>屋内温水プール</li>
            <li>エステサロン「タルゴスパ」</li>
            <li>ボディケアスタジオ・スタジオプール</li>
            <li>ライブラリーラウンジ</li>
            <li>ショップ</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 078-903-5631</p>
          
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
	  getMap(34.794533, 135.249574, 14);
    });
  </script>

</body>
</html>