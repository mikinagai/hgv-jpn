<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>月岡ホテル</title>
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
                    <th>和室　1泊　朝食付き</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2名様</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>3名様</td>
                    <td>3,900</td>
                  </tr>
                  <tr>
                    <td>4名様</td>
                    <td>5,200</td>
                  </tr>
                  <tr>
                    <td>5名様</td>
                    <td>6,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
        <br/>
        <ul>
            <li>利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。</li>
            <li>3歳以下無料(3名まで)</li>
            <li>設定除外日: 2015/4/25 - 5/6、8/5 - 8/7、8/8 - 8/16、2015/12/26 - 2016/1/4</li>
            </ul>
        <br/>
        
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>月岡ホテル</h1>
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
      <h2>山形県上山温泉</h2>
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
          <address>山形県上山市新湯1-33</address>
          <p>1644年創業の老舗宿。美肌効果の高いやさしい癒しの温泉でゆったりとお過ごしいただけます。</p>
          <p>上山城外濠跡に佇む日本庭園の四季折々の彩りや姿が、訪れた人々を和ませてくれます。皆様にくつろぎのお時間をお過ごしいただけるよう、創業から長い時間をかけて育んだ「おもてなしの心」でお迎えいたします。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>それぞれに造りの異なる客室を準備しております。各特別室の浴室には温泉を引いておりますので、プライベートの温泉をお楽しみいただけます。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>男女別の大浴場には露天風呂も併設。エステコーナーもあり存分にリラクゼーションを堪能いただけます。他にも地元料理などが好評な居酒屋も営業。コーヒーの香り漂うロビーでは、無料Wifiでインターネット接続可能です。（パソコン機材の貸し出しはございません）</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 023-672-1212</p>
          
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
	  getMap(38.158255, 140.273373, 14);
    });
  </script>

</body>
</html>