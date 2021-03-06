<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ビッグウィーク伊豆高原愛犬家族</title>
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
        <h1>ビッグウィーク伊豆高原愛犬家族</h1>
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
      <h2>静岡県伊東市</h2>
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
          <address>静岡県伊東市池字中野614-91</address>
          <p>緑に囲まれた伊豆高原の高台に、静かにたたずむ外観。明るいベージュ色にコーディネートされて、軽快感を醸し出すロビー。一歩足を踏み入れた瞬間から心和む雰囲気に包まれます。温泉大浴場は心豊かな休日を演出してくれます。周辺には城ヶ崎の吊り橋や大室山、少し足を延ばせば河津桜や白浜海岸など、愛犬が思いきり遊べるネイチャースポットが充実しています。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>2家族でもゆったり過ごせる開放感のある客室。<br />キッチンを備えたリビング・ダイニングでは、ご家族やご友人との食事や団欒が楽しめます。<br />室内は素材や機能まで配慮した愛犬仕様。気になる汚れやにおいにも万全の対応をしています。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>ビッグウィークはお部屋の広さが７０㎡以上の２ＬＤＫ、２世帯、ご友人や様々な方とのご滞在を楽しめるプライベート空間を提供しております。ユニークなところとしてトイレは２カ所、滞在中の客室清掃はリネン設置も含め立ち入らない事などを徹底しております。大切なお時間を心ゆくまでお客様にあったペースでご利用ください。 </p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0557-55-3109</p>
          
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
	  getMap(34.8971824, 139.0945639, 14);
    });
  </script>

</body>
</html>