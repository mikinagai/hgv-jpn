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
  <meta name="description" content="Located in the quaint coastal village of Carlsbad, the Hilton Grand Vacations Club at MarBrisa resort features 27 villa buildings designed in classic Spanish Mediterranean style." />
  <title>Hilton Grand Vacations Resort at MarBrisa in Carlsbad, California</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Pool at MarBrisa Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at MarBrisa Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Bedroom at MarBrisa Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Kitchen at MarBrisa Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Exterior of MarBrisa Resort in Carlsbad, California" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Studio Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Studio Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>スタジオ</p>
              <?php
			    }
  			    else {
			  ?>
              <p>Studio</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="One Bedroom Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="One Bedroom Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1 ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>1-Bedroom</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two Bedroom Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two Bedroom Floor Plan at MarBrisa Resort in Carlsbad, California" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2 ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom</p>
              <?php
				}
			  ?>
            </div>
          </div>
        </div>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 21週, 43 &ndash; 50週</th>
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
                    <td>スタジオ / スタジオ・プラス</td>
                    <td>250</td>
                    <td>340</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プレミア</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 22 &ndash; 42週, 51 &ndash; 52週</th>
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
                    <td>スタジオ / スタジオ・プラス</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プレミア</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
          <!-- <div class="row">
            <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div>
          </div> -->
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 21, 43 &ndash; 50</th>
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
                    <td>Studio / Studio Plus</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
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
                    <td>2-Bedroom Premier</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 22 &ndash; 42, 51 &ndash; 52</th>
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
                    <td>Studio / Studio Plus</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
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
                    <td>2-Bedroom Premier</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="floorplans-link">間取り</a></li>
          <li><a href="#" id="points-link">必要ポイント数</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>アメリカ、カリフォルニア州カールスバッド</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at MarBrisa</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="floorplans-link">Floor Plans (<span id="floorplan-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Carlsbad, California</h2>
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
          <address>5500 Grand Pacific Dr, Carlsbad, CA 92008</address>
          <p>古風な趣が漂う海岸の町、カールズバッドにあるヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサは、スペイン地中海風の伝統様式で建てられた27棟（完成時）の新しいスイートで、太平洋を遠景に雄大な眺めを誇ります。レゴランド®・カリフォルニア・リゾートのすぐ隣にあり、シーワールド、ワイルド・アニマル・パーク、さらに世界的に有名なサンディエゴ動物園などの南カリフォルニアならではのアトラクションへも車でわずかの距離に位置します。また、周辺には数々のワールドクラスのゴルフコースが広がり、ザ・クロッシング・アット・カールズバット・チャンピオンシップ・ゴルフコースがリゾートに隣接しています。カールズバッド・プレミアム・アウトレットでのショッピングもお見逃しなく。</p>
          <p>スペイン地中海風の伝統様式で建てられた、海岸の町カールズバッドに広がる当リゾートは、太平洋を遠景に雄大な眺めを誇ります。レゴランド®・カリフォルニア・リゾートとザ・クロッシング・アット・カールズバッド・ゴルフ・コースに隣接し、シーワールド、ワイルド・アニマル・パーク、さらに世界的に有名なサンディエゴ動物園などの南カリフォルニアの人気アトラクションへも車でわずかの距離に位置します。カールズバッド・プレミアム・アウトレットでのショッピングもお見逃しなく。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、スタジオ・プラス（調理設備なし）</li>
            <li>1～3ベッドルーム・スイート（バルコニー付き）</li>
            <li>各スイートにフルキッチン完備</li>
            <li>1ベッドルーム・スイートに浴槽付きのマスターバスルーム完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（有料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>海を見渡す優雅なプール、噴水による水遊び場とスパ</li>
            <li>レストランとワインバー（隣接するホテルにて）</li>
            <li>スパ（有料、隣接するホテルにて）</li>
            <li>お子様向けアクティビティー・プログラム</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>5年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-828-4520</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
          
          <h3>Overview</h3>
          <address>5500 Grand Pacific Dr, Carlsbad, CA 92008</address>
          <p>Located in the quaint coastal village of Carlsbad, the Hilton Grand Vacations Club at MarBrisa resort features 27 villa buildings designed in classic Spanish Mediterranean style. This sprawling resort overlooks the coastal city of Carlsbad and offers distant ocean views of the Pacific Ocean, as well as immediate access to neighboring LEGOLAND&reg; California Resort. Other Southern California attractions, such as SeaWorld, the Wild Animal Park and the world-famous San Diego Zoo, are only a short drive away. Golfers delight in dozens of excellent nearby courses, including The Crossings at Carlsbad Championship Golf Course adjacent to the resort. Superb shopping at the Carlsbad Premium Outlet stores is within a quick drive.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious studios and 1, 2 and 3 bedroom suites with private patios or balconies</li>
            <li>Each suite features fully equipped kitchen</li>
            <li>Soaking tub in master bath of 1 bedroom suites</li>
            <li>High-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Elegantly designed swimming pool with lush tropical decks, private cabanas and spas</li>
            <li>Full-service restaurant and wine bar (at adjacent hotel)</li>
            <li>Full-service spa (at adjacent hotel)</li>
            <li>Resort-coordinated children's activity programs</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 760-828-4520</p>
          
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
            <a href="../carlsbad-seapointe/">
              <div class="col-xs-4">
                <img src="../img/seapointe-t.jpg" alt="Carlsbad Seapointe Resort" />
              </div>
              <div class="col-xs-8">
                Carlsbad Seapointe Resort
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../club-intrawest-palm-desert/">
              <div class="col-xs-4">
                <img src="../img/palmdesert-t.jpg" alt="Club Intrawest &ndash; Palm Desert" />
              </div>
              <div class="col-xs-8">
                Club Intrawest &ndash; Palm Desert
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../grand-pacific-palisades/">
              <div class="col-xs-4">
                <img src="../img/palisades-t.jpg" alt="Grand Pacific Palisades Resort" />
              </div>
              <div class="col-xs-8">
                Grand Pacific Palisades Resort
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
	  getMap(33.1287884, -117.3079629, 14);
    });
  </script>

</body>
</html>