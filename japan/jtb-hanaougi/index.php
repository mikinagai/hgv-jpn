<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>飛騨亭花扇</title>
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
                </tbody>
              </table> 
            </div>
            
          </div>
        </div>
        <br/>
        <ul>
        <li>利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。</li>
        <li>幼児施設使用料：3230円（6歳以下2名まで）</li>
        <li>設定除外日: 2015/4/14、4/25 - 5/6、8/8 - 8/16、9/19 - 9/22、10/8 - 11/22、2015/12/26 - 2016/1/4</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>飛騨亭花扇</h1>
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
      <h2>岐阜県高山温泉</h2>
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
          <address>岐阜県高山市本母町411-1</address>
          <p>静かな田園地帯にある和風旅館。内装は神代杉、神代欅、吉野杉等を使った客室で料理は「飛騨牛」を中心とした地のものを使い、北陸の海のものを入れた会席膳を提供させて頂きます。</p>
          <p>神代欅・神代杉を館内にあしらった重厚感ある飛騨の匠建築、天然温泉の湧き出る「神代の湯」は、飛騨高山温泉旅館のなかでも数少ない自家源泉、とろみのある美容液のような柔らかい泉質が魅力です。飛騨牛をメインとした最高級ブランドのステーキを焼ながら四季折々の山の幸、海の幸を取り入れた会席膳で、飛騨の地酒を堪能しながら至福のひとときをどうぞ。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>純和風の木の持つゆらぎを感じながらゆっくりとお寛ぎ頂けます。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>世界遺産白川郷、上高地、新穂高ロープウェイ、乗鞍スカイライン、飛騨古川、飛騨高山古い町並・飛騨の里・朝市などの観光拠点としてとっても便利な立地に有ります。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0577-36-2000</p>
          
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
	  getMap(36.161437, 137.249709, 14);
    });
  </script>

</body>
</html>