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
  <meta name="description" content="Just a stroll away from Waikiki Beach, this resort treats visitors to elegantly appointed accommodations with panoramic mountain or ocean views." />
  <title>Kalia Suites by Hilton Grand Vacations Club in Honolulu, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at the Kalia Suites in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at the Kalia Suites in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The-Bedroom at the Kalia Suites in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Pool at the Kalia Suites in Honolulu, Hawaii" />
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
                    <td>スタジオ</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
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
                    <td>スタジオ</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480/720</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
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
                    <td>Studio</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
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
                    <td>Studio</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>480/720</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
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
        <h1>カリア・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h1>
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
        <h1>Kalia Suites by Hilton Grand Vacations Club</h1>
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
          <address>22005 Kalia Rd, Honolulu, HI 96815</address>
          <p>トロピカルな雰囲気溢れるカリアタワーは、22エーカー（約0.089km&sup2;）のヒルトン・ハワイアン・ビレッジ&reg;・ワイキキ･ビーチ・リゾートの敷地内という理想的な立地条件を誇ります。カリアタワーの12階から18階にある客室から、最高のワイキキを実感いただけることでしょう。世界的に有名なワイキキビーチがビレッジ目前に広がる絶好の環境で、海の見えるオーシャンビュー、または山に面したマウンテンビューの部屋でお寛ぎください。徒歩圏内にはレストラン、エンターテイメントそして一流ブティックなどが立ち並び、スキューバダイビング、スノーケリング、サーフィンなどのアクティビティーも存分にお楽しみいただけます。ハワイならではの至高のバケーションを是非満喫してください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ（調理設備なし）</li>
            <li>1ベッドルーム・スイート（バルコニー付き）</li>
            <li>スイートにフルキッチン完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>各階に洗濯機、乾燥機</li>
            <li>10,000平方フィート（900m&sup2;）のスーパープールを含む4つのプール</li>
            <li>ビーチと海水ラグーン、スノーケリングやビーチ用品レンタル（有料）</li>
            <li>マンダラ・スパ（有料）</li>
            <li>お子様向けインストラクター付きレクリエーション･プログラム</li>
            <li>レストラン、ラウンジ</li>
            <li>フィットネス施設</li>
            <li>日本語デスク</li>
            <li>バレーパーキングと駐車場（有料）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>9年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙ハワイ州宿泊税が加算されます。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-949-4321</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2005 Kalia Rd, Honolulu, HI 96815</address>
          <p>Tropical treasures abound for guests at Kalia Suites by Hilton Grand Vacations Club. Ideally situated within the 22-acre Hilton Hawaiian Village&reg; Waikiki Beach Resort, this alluring getaway occupies floors 12 through 18 of the stately Kalia Tower and delivers the best of Waikiki. Just a stroll away from world-famous Waikiki Beach, the resort treats visitors to elegantly appointed accommodations with panoramic mountain or ocean views. This unforgettable destination is located adjacent to a tantalizing variety of restaurants, entertainment and world-class shopping. Unforgettable adventures including scuba diving, snorkeling and surfing are close at hand, providing unsurpassed opportunities to experience Hawaii's legendary offshore recreation. </p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Cozy studios and spacious 1-bedroom suites with private lanais</li>
            <li>Each suite features fully equipped kitchen</li>
            <li>Complimentary high-speed, wireless Internet access</li>
            <li>Washer and dryer on each floor</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>4 swimming pools including 10,000-square-foot super pool</li>
            <li>Beach and salt-water lagoon, both offering swimming, snorkeling and watercraft equipment rentals (fees apply)</li>
            <li>Mandara Spa (fees apply)</li>
            <li>Supervised children's recreation programs</li>
            <li>Restaurants and lounges</li>
            <li>Exercise Facilities</li>
            <li>Valet and Self Parking (fees apply)</li>
            <li>Accessible transportation</li>
            <li>TTY for guest use</li>
            <li>Assistance listening devices for meetings</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-949-4321</p>
          
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
            <a href="../hokulani-waikiki-hgvc/">
              <div class="col-xs-4">
                <img src="../img/hokulaniwaikiki-t.jpg" alt="Hokulani Waikiki by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Hokulani Waikiki by Hilton Grand Vacations Club
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
	  getMap(21.2823791, -157.8366664, 16);
    });
  </script>

</body>
</html>