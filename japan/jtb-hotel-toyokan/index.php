<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ホテル東洋館</title>
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
        <li>幼児施設使用料：1080円（5歳以下）</li>
        <li>設定除外日: 2015/4/25 - 5/6、6/5 &amp; 6/6、8/8 - 8/16、9/19 - 9/22、2015/12/26 - 2016/1/4</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>ホテル東洋館</h1>
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
      <h2>長崎県雲仙温泉</h2>
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
          <address>長崎県雲仙市小浜町雲仙128</address>
          <p>東の館に雲仙初の屋上展望露天風呂があります。他にも陶芸風呂・多目的風呂があり、温泉三昧が堪能できます。地元で採れる旬の食材をたっぷり使った会席料理は好評です。心のこもったおもてなしに努めています。</p>
          <p>ホテル東洋館は雲仙温泉でいちばん大きな規模を誇る大型旅館！ <br>
          その壱　雲仙温泉内最大級の宴会場... 10名以上の和宴会場23ヶ所<br>
          その弐　雲仙温泉内最大級の室数... 全115室<br>
          その参　雲仙温泉内最大級の収容数... 約650名収容<br>
          その四　雲仙温泉内最大級のロビー... 約500m&sup2;の広さ<br>
          その五　雲仙温泉内最大級の大浴場... 約50m&sup2;の湯舟<br>
          その六　雲仙温泉内最大級の駐車場... 約100台収容</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>10畳＋踏込の部屋となります。</p>
          <br />
          
          <h3>リゾート設備</h3>
          <p>当館の最上階には、雲仙でただひとつの屋上展望大浴場があります。展望露天風呂より雲仙の星空を眺めながらの入浴も格別。 </p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 0957-73-3243</p>
          
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
	  getMap(32.743925, 130.260129, 14);
    });
  </script>

</body>
</html>