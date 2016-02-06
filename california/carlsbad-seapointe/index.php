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
  <meta name="description" content="This family-friendly resort is just minutes away from LEGOLAND California Resort, SeaWorld, the Wild Animal Park and San Diego Zoo." />
  <title>Carlsbad Seapointe Resort in Carlsbad, California</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Carlsbad Seapointe Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of Carlsbad Seapointe Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Pool of Carlsbad Seapointe Resort in Carlsbad, California" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 〜 21週、 43 〜 50週</th>
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
                    <td>1 ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 22 〜 42週、 51 〜 52週</th>
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
                    <td>1 ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
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
                    <td>1-Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
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
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
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
        <h1>カールスバッド・シーポイント・リゾート</h1>
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
      <h2>アメリカ、カリフォルニア州カールスバッド</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Carlsbad Seapointe Resort</h1>
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
          <address>6400 Surfside Ln, Carlsbad, CA 92011</address>
          <p>カールズバッド・シーポイント・リゾートは、南カリフォルニアの海岸線エリアで最も人気の高い観光地に位置する、素晴らしいリゾートです。観光やビーチでの一日をお楽しみいただいた後、心地よい太平洋の海を感じながら、スタイリッシュな装飾と充実したアメニティーの中でお寛ぎいただけます。レゴランド®・カリフォルニア・リゾートをはじめ、シーワールドやワイルド・アニマル・パーク、世界でも有名なサンディエゴ動物園など、ご家族連れや全ての方にお楽しみいただける数々のアトラクションへのアクセスを提供するコースター駅へも至近距離。エキサイティングな海辺のアクティビティーや、忘れがたい思い出を作り出す拠点となるカールズバッド・シーポイント・リゾートで、理想の海辺での休息のひとときをお過ごしください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート</li>
            <li>(バルコニー付き、ほとんどの部屋がオーシャンビュー）</li>
            <li>フルキッチン完備</li>
            <li>カラーテレビ、DVD、CDプレーヤー完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外温水プール、スパ、サウナ</li>
            <li>噴水による水遊び場付き温水お子様プール</li>
            <li>ファミリー・スパ</li>
            <li>テニスコート、バスケットボールコート、ビーチバレーコート</li>
            <li>洗濯機、乾燥機</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>17年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m. <br />電話番号: 760-603-1700</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
            
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>6400 Surfside Ln, Carlsbad, CA 92011</address>
          <p>Carlsbad Seapointe Resort is ideally perched atop a seaside bluff overlooking the Pacific Ocean and Coastal Highway 101. After a day of sightseeing or enjoying the beach, unwind to the relaxing sound of the ocean amid stylish d&eacute;cor and comfortable amenities. The family-friendly resort is just minutes away from LEGOLAND&reg; California Resort, SeaWorld, the Wild Animal Park and San Diego Zoo. Offering convenient access to many of San Diego's celebrated attractions is a Coaster rail station located just a short walk from the resort. Indulge yourself in the exciting seaside activities, tranquil surroundings and extraordinary sunsets of Carlsbad Seapointe Resort.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom suites with private balconies, many with ocean views</li>
            <li>Each suite features fully equipped kitchen</li>
            <li>Color TV, DVD and CD players in all units</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated outdoor adult swimming pool, spa and sauna</li>
            <li>Heated children's swimming pool with splash 'n' play feature</li>
            <li>Family spa</li>
            <li>Tennis court, basketball court and sand volleyball court</li>
            <li>On-site laundry facilities</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 760-603-1700</p>
          
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
          <div class="row nearby">
            <a href="../hgvc-marbrisa/">
              <div class="col-xs-4">
                <img src="../img/marbrisa-t.jpg" alt="Hilton Grand Vacations Club at MarBrisa" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at MarBrisa
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
	  getMap(33.112667, -117.321613, 15);
    });
  </script>

</body>
</html>