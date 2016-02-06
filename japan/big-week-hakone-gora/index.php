<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ビッグウィーク箱根強羅</title>
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
                    <th>日 &ndash; 木</th>
                    <th>金・土・祝前日・特定日</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1〜3名様</td>
                    <td>2,100</td>
                    <td>3,150</td>
                  </tr>
                  <tr>
                    <td>4〜6名様</td>
                    <td>2,630</td>
                    <td>4,200</td>
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
        <h1>ビッグウィーク箱根強羅</h1>
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
      <h2>神奈川県足柄下郡箱根町</h2>
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
          <address>神奈川県足柄下郡箱根町強羅向山1320-599</address>
          <p>お洒落な洋館や庭園のある独特の景観と文化が育まれた強羅。<br />和の様式美に現代のテイストを取り入れた内観。ゆったりとしたロビーには、和風のインテリアや間接照明の和らいだ雰囲気が広がり心落ち着く大人の空間。<br />大涌谷温泉を源泉とする大浴場には、自然の趣のある露天風呂を併設。伝統の湯で日頃の疲れを癒してください。  </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>箱根の雄大な自然を望む広々としたリビングと、ゆったりしたスペースのベッドルームをご用意しました。1週間を滞在の基本として設計された空間には、キッチンをはじめ生活に必要な設備を完備しております。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>ビッグウィークはお部屋の広さが７０㎡以上の２ＬＤＫ、２世帯、ご友人や様々な方とのご滞在を楽しめるプライベート空間を提供しております。ユニークなところとしてトイレは２カ所、滞在中の客室清掃はリネン設置も含め立ち入らない事などを徹底しております。大切なお時間を心ゆくまでお客様にあったペースでご利用ください。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0460-86-1109</p>
          
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
	  getMap(35.25168, 139.038171, 14);
    });
  </script>

</body>
</html>