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
  <meta name="description" content="Within minutes of Walt Disney World Resort and adjacent to the Orlando Premium Outlets, Hilton Grand Vacations Club at Tuscany Village treats guests to extraordinary amenities and an ideal setting for fun and relaxation." />
  <title>Hilton Grand Vacations Club Resort at Tuscany Village in Orlando, Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior / Pool at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Bedroom at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Bedroom at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Kitchen at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Business Center at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Gaming Room at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Conference / Meeting Room at Hilton Grand Vacations Club at Tuscany Village in Orlando, Florida" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 5週, 16 &ndash; 23週, 33 &ndash; 50週</th>
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
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 6 &ndash; 15週, 24 &ndash; 32週, 51週, 52週</th>
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
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
            <!-- <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div> -->
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 5, 16 &ndash; 23, 33 &ndash; 50</th>
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
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 6 &ndash; 15, 24 &ndash; 32, 51, 52</th>
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
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・<br/>タスカニー・ビレッジ</h1>
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
      <h2>アメリカ、フロリダ州オーランド</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at Tuscany Village</h1>
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
      <h2>Orlando, Florida</h2>
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
          <address>8122 Arrezzo Way, Orlando, FL 32821</address>
          <p>風光明媚なイタリア・トスカーナ地方の雰囲気が漂うヒルトン・グランド・バケーションズ・クラブ・アット・タスカニー・ビレッジは、フロリダ州オーランドの観光地に位置します。アメリカを代表するさまざまなアトラクションが周囲に点在し、中でも人気のウォルト・ディズニー・ワールド&reg;・リゾートへは便利な距離にあります。また、有名ブランドが揃っているオーランド・プレミアム・アウトレットが隣接し、スーパーマーケットもリゾートのすぐ向かいにあります。リゾート内では素敵な遊歩道がクラブハウスや見事な曲線を描くプールやジャグジー、湖畔へと続き、憩いと安らぎのひとときに、最高の環境を備えています。オーランドならではの充実したエンターテイメント、ゴルフ場、ショッピング、食事を心ゆくまでお楽しみください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ(調理設備なし) 1〜3ベッドルーム・スイート(バルコニー付き)</li>
            <li>各スイートにフルキッチン、洗濯機、乾燥機完備</li>
            <li>各スイートにジャグジー付きのマスターバスルーム完備</li>
            <li>ワイヤレス・インターネットアクセス完備(無料)</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>フレスコ・マーケット＆デリ、トスカーナ・プールバー＆グリルと<br/>フレッシュ・トスカン・ピザ</li>
            <li>2つの温水プール、水遊び場、3つのジャグジー</li>
            <li>コンピューター・ラウンジ</li>
            <li>レクリエーション・プログラム</li>
            <li>フィットネス施設（ヒルトン・フィットネス・バイ・プリコー）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>11年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 407-465-2600</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>8122 Arrezzo Way, Orlando, FL 32821</address>
          <p>Inspired by the beauty and ambiance of Tuscany, this distinguished resort in the heart of Orlando provides easy access to the region's top attractions. Here, a grand piazza opens up to a Clubhouse, lakefront walking path and dazzling swimming pools and water features. Within minutes of Walt Disney World&reg; Resort and adjacent to the Orlando Premium Outlets, Hilton Grand Vacations Club at Tuscany Village treats guests to extraordinary amenities and an ideal setting for fun and relaxation. Enjoy the region's abundant venues for entertainment, golf, shopping and dining before retreating to the elegant Mediterranean theme of this spectacular Orlando resort. </p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Cozy studios, and spacious 1-, 2- and 3-bedroom suites with screened balconies</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Whirlpool jet tub in suite master bath</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Fresco Market &amp; Deli, Toscana Pool Bar &amp; Grill and Fresh Tuscan Pizza</li>
            <li>2 heated swimming pools, interactive children’s water feature and 3 whirlpool spas</li>
            <li>Computer Lounge</li>
            <li>Recreation programs for all ages</li>
            <li>Hilton Fitness by Precor</li>
            <li>Accessible Guest room has 32" entry or passage doors</li>
            <li>Accessible Transportation</li>
            <li>TTY for guest use</li>
            <li>Assistance listening devices for meetings</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 407-465-2600</p>
          
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
            <a href="../hgvc-seaworld/">
              <div class="col-xs-4">
                <img src="../img/seaworld-t.jpg" alt="Hilton Grand Vacations Club at SeaWorld" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at SeaWorld
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../parc-soleil-hgvc/">
              <div class="col-xs-4">
                <img src="../img/parcsoleil-t.jpg" alt="Parc Soleil by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Parc Soleil by Hilton Grand Vacations Club
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
	  getMap(28.384766, -81.487445, 13);
    });
  </script>

</body>
</html>