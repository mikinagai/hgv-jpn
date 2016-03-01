<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ビッグウィーク蓼科</title>
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
                    <th>日 &ndash; 木</th>
                    <th>金・土・祝前日・特定日</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1〜3名様</td>
                    <td>1,840</td>
                    <td>2,890</td>
                  </tr>
                  <tr>
                    <td>4〜6名様</td>
                    <td>2,490</td>
                    <td>3,680</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>ビッグウィーク蓼科</h1>
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
      <h2>長野県茅野市</h2>
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
          <address>長野県茅野市北山字鹿山4026-1926 東急リゾートタウン蓼科内</address>
          <p>美しい高原の自然に溶け込むシックな外観、石積みの壁と木の梁、重量感のある調度品、大きな窓に広がる森。また、東急リゾートタウン蓼科内には白樺とカラマツ林に囲まれたレストランや温泉、ゴルフコース、テニス場、スキー場と施設が充実しており、思い思いの休日をお楽しみいただけます。施設の周辺も、高山植物が楽しめるトレッキングコースなど、おすすめスポットが充実しています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>お部屋の大きな窓からは明るい日が差し込み、蓼科の大自然が望め、解放感とくつろぎに満ちた空間があなたをお迎えいたします。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>ビッグウィークはお部屋の広さが７０㎡以上の２ＬＤＫ、２世帯、ご友人や様々な方とのご滞在を楽しめるプライベート空間を提供しております。ユニークなところとしてトイレは２カ所、滞在中の客室清掃はリネン設置も含め立ち入らない事などを徹底しております。大切なお時間を心ゆくまでお客様にあったペースでご利用ください。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0266-71-9901</p>
          
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
	  getMap(36.067115, 138.252581, 14);
    });
  </script>

</body>
</html>