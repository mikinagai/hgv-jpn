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
  <meta name="description" content="Hokulani Waikiki by Hilton Grand Vacations Club offers ideal access to Waikiki's most vibrant showcase for dining, shopping and entertainment." />
  <title>Hokulani Waikiki Resort by Hilton Grand Vacations Club in Honolulu, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Hokulani Waikiki Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at Hokulani Waikiki Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The-Bedroom at Hokulani Waikiki Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bathroom at Hokulani Waikiki Resort in Honolulu, Hawaii" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 19 &ndash; 22週、36 &ndash; 41週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td height="20">1ベッドルーム・プレミア</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 &ndash; 18週、23 &ndash; 35週、42 &ndash; 52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 19 &ndash; 22, 36 &ndash; 41</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 18, 23 &ndash; 35, 42 &ndash; 52</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
        <h1>ホクラニ・ワイキキ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h1>
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
      <h2>アメリカ、ハワイ州ホノルル</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hokulani Waikiki by Hilton Grand Vacations Club</h1>
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
      <h2>Honolulu, Hawaii</h2>
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
          <address>2181 Kalakaua Ave, Honolulu, HI 96815</address>
          <p>有名なワイキキ・ビーチ・ウォーク&reg;最北端のエンターテイメント地区に位置し、ダイニング、ショッピング、エンターテイメントとワイキキで最も活気のあるワイキキ・ビーチ・ウォーク&reg;に理想的なアクセスを提供しています。2013年後半にオープン予定のこのリゾートは、プールラウンジ、バー、プライベートカバナ、そしてダイナミックなワイキキの景観をお楽しみいただけるナラニが特徴です。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1ベッドルーム・スイート</li>
            <li>緑豊かなハワイ文化を反映したインテリア</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外プール</li>
            <li>屋上のプールとラウンジ</li>
            <li>フィットネス施設</li> 
            <li>ビジネスセンター</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-983-7995</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2181 Kalakaua Ave, Honolulu, HI 96815</address>
          <p>Anchoring the northernmost stretch of the celebrated Waikiki Beach Walk&reg; entertainment district, Hokulani Waikiki by Hilton Grand Vacations Club offers ideal access to Waikiki's most vibrant showcase for dining, shopping and entertainment. Just a brief walk from the famed beaches of Waikiki and the nearby Hilton Hawaiian Village Waikiki Beach Resort&reg;, this unique property also features Na Lani Sky Lounge &ndash; an exclusive rooftop deck with pool lounge, bar, private cabanas and dynamic views of Waikiki.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious 1-bedroom suites</li>
            <li>D&eacute;cor reflects lush Hawaiian setting and cultural heritage</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Outdoor plunge pool</li>
            <li>Rooftop deck, pool and lounge</li>
            <li>Exercise Facilities</li>
            <li>Business Center</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-983-7995</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
          <br />
          
          <h3>Nearby Resorts</h3>
          <div class="row nearby">
            <a href="../grand-waikikian-hgvc/">
              <div class="col-xs-4">
                <img src="../img/grandwaikikian-t.jpg" alt="Grand Waikikian by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Grand Waikikian by Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../kalia-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kalia-t.jpg" alt="Kalia Suites by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kalia Suites by Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../lagoon-tower-hgvc/">
              <div class="col-xs-4">
                <img src="../img/lagoon-t.jpg" alt="Lagoon Tower by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Lagoon Tower by Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          
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
	  getMap(21.2800578, -157.8302132, 16);
    });
  </script>

</body>
</html>