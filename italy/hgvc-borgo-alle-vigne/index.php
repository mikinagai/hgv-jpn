<?php include("../../server-side/library.php");
if(isset($_GET["lang"])){
  $lang = $_GET["lang"];
}
else {
  $lang = "eng";	
}
?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Located in the heart of Tuscany, Italy, Hilton Grand Vacations Club at Borgo alle Vigne provides a truly authentic Italian experience. This unique property offers the ideal haven of tranquility in one of the world's most picturesque vacation destinations." />
  <title>Hilton Grand Vacations Club at Borgo alle Vigne Resort in Tuscany, Italy</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Dining Area of Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The-Bedroom of Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Pool of Borgo alle Vigne Resort in Tuscany, Italy" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
        <?php
		  if($lang == "jpn"){
		?>
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 2 &ndash; 12週、40 &ndash; 49週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 1週、13 &ndash; 39週、52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>1,150</td>
                    <td>2,300</td>
                    <td>11,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> 
        <?php
		  }
		  else {
		?>	
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> Gold: Weeks 2 &ndash; 12, 40 &ndash; 49</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: Weeks 1, 13 &ndash; 39, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>1,150</td>
                    <td>2,300</td>
                    <td>11,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>  
         <?php
		  }
		?>   
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・<br/>ボルゴ・アレ・ヴィ二ェ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>イタリア、トスカーナ州テッリッチョーラ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at Borgo alle Vigne</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Selvatelle, Terricciola, Italy</h2>
    </div>
    
      <?php
		}
	  ?>
    
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
        
          <?php
			if($lang == "jpn"){
		  ?>
          
          <h3>概要</h3>
          <address>Via Casanova 11, Selvatelle, Terricciola, Italy</address>
          <p>ヒルトン・グランド・バケーションズ・クラブ・アット・アレ・ヴィニェは、イタリア、タスカニーの中央に位置し、本物のイタリアを体験いただけます。世界で最も絵になる素晴らしいこの地の静寂に包まれた趣きあるリゾートで存分にお寛ぎください。イタリアの伝統が色濃く残るタスカニーの田園風景に囲まれたボルゴ・アレ・ヴィニェは、有名なフィレンツェやピサにも近く、イタリアで人気のある海岸やゴルフコースからも数分の距離でアクセスも充実しています。2015年は、通常通りの予約期間が適用されます。予約は、空室状況により、電話でのみ申し受けます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>エレガントな1～3ベッドルーム・スイート </li>
            <li>大理石、御影石仕上げと高級イタリア家具のインテリア </li>
            <li>部屋によりバルコニー付き </li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>トスカーナ地方の田園風景を見渡せる屋外プール </li>
            <li>ロビーバーとラウンジ </li>
            <li>フィットネス施設 </li>
            <li>ビジネスセンター </li>
            <li>会議室 </li>
          </ul>
          
          <br />
          
          <h3>リゾートの特徴</h3>
          <ul>
            <li>ヒルトン・グランド・バケーションズが管理 </li>
            <li>加盟リゾート </li>
            <li>無料地下駐車場 </li>
            <li>全室禁煙 </li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Via Casanova 11, Selvatelle, Terricciola, Italy</address>
          <p>Located in the heart of Tuscany, Italy, Hilton Grand Vacations Club at Borgo alle Vigne provides a truly authentic Italian experience. This unique property offers the ideal haven of tranquility in one of the world's most picturesque vacation destinations. Steeped in Italian heritage and nestled amidst rolling Tuscan countryside, Borgo alle Vigne is also within close proximity to the celebrated cities of Florence and Pisa, with the famed beaches of Italy and exclusive golf courses just minutes away.</p>
          <p>In 2014, reservations at this resort are available to owners of the resort only. For the remaining Club members, reservations may be requested for travel in 2015 on a limited space availability basis.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Elegant 1-, 2-, and 3-bedroom suites, all with balconies</li>
            <li>Stone and marble finishes along with fine Italian furnishings</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Seasonal outdoor swimming pool with views of the Tuscan countryside</li>
            <li>Reception Lounge</li>
            <li>Computer &ndash; Printer Room</li>
            <li>Complimentary underground parking</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: +39 0587 092500</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
          <?php
			}
		  ?>
          
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
	  getMap(43.55048, 10.68989, 12);
    });
  </script>

</body>
</html>