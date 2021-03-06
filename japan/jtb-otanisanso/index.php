<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>大谷山荘</title>
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
        <li>幼児施設使用料：1620円（2歳以下）</li>
        <li>設定除外日: 2015/4/25 - 5/6、8/8 - 8/16、2015/12/26 - 2016/1/4、全ての休前日</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>大谷山荘</h1>
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
      <h2>山口県長門湯元温泉</h2>
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
          <address>山口県長門市深川湯本字平町2208</address>
          <p>客室から山峡を流れる清流、音信川が眺望でき、対岸の山の四季の移り変りに心が安らぎます。近代的建築に、純和風の客室で、くつろぎ優先のゆったりした間取りとなっています。アルカリ性単純泉の大浴場は、旅のつかれをいやしてくれます。仙崎漁港に水揚げされる新鮮な魚介類を京風を偲ばす味付けの長州割烹料理が好評。石見神楽、世界のショーなど宴会時のアトラクションも多彩です。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>清流｢音信川｣を望む落ち着いた雰囲気の10畳和室です。目の前に広がる山々と川のせせらぎ、豊かな自然と調和した｢和｣をお愉しみください。</p>
          <br />
          
          <h3>リゾート設備</h3>
          <p>館内では生バンドの演奏や天体ドームなどをお愉しみ頂けます。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2:30 p.m.<br />チェックアウト: 10:30 a.m.<br />電話番号: 0837-25-3221</p>
          
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
	  getMap(34.326037, 131.175106, 14);
    });
  </script>

</body>
</html>