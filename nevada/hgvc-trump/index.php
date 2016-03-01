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
  <meta name="description" content="Hilton Grand Vacations Club at Trump International Hotel provides a spectacular experience that is uniquely sophisticated and completely luxurious. This exclusive property offers extensive amenities and an iconic Las Vegas setting." />
  <title>Hilton Grand Vacations Club at Trump International Hotel in Las Vegas, Nevada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Trump International Hotel in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at Trump International Hotel in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The-Bedroom at Trump International Hotel in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The-Bedroom at Trump International Hotel in Las Vegas, Nevada" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、23 &ndash; 34週、46 &ndash; 50週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 〜 木</th>
                    <th>金 〜 日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Studio Plus</td>
                    <td>375</td>
                    <td>750</td>
                    <td>3,750</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>630</td>
                    <td>1,260</td>
                    <td>6,300</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>750</td>
                    <td>1,500</td>
                    <td>7,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 22週、35 &ndash; 45週、51週、52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 〜 木</th>
                    <th>金 〜 日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>525</td>
                    <td>1,050</td>
                    <td>5,250</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>930</td>
                    <td>1,860</td>
                    <td>9,300</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム Plus</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 6, 23 &ndash; 34, 46 &ndash; 50</th>
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
                    <td>Studio Plus</td>
                    <td>375</td>
                    <td>750</td>
                    <td>3,750</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>630</td>
                    <td>1,260</td>
                    <td>6,300</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>750</td>
                    <td>1,500</td>
                    <td>7,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash; 22, 35 &ndash; 45, 51, 52</th>
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
                    <td>Studio Plus</td>
                    <td>525</td>
                    <td>1,050</td>
                    <td>5,250</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>930</td>
                    <td>1,860</td>
                    <td>9,300</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・<br/>トランプ･インターナショナル・ホテル・ラスベガス</h1>
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
      <h2>アメリカ、ネバダ州ラスベガス</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at Trump International Hotel</h1>
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
      <h2>Las Vegas, Nevada</h2>
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
          <address>2000 Fashion Show Dr, Las Vegas, NV 89109</address>
          <p>ヒルトン・グランド・バケーションズ・クラブ・アット・トランプ・インターナショナル・ホテル・ラスベガスは、洗練された完璧で豪華な素晴らしい体験を提供します。</p>
          <p>トランプ・ポートフォリオの宝の一つとして、充実した設備と理想的なロケーションを提供し、ファッション・ショー・モールと全てのラスベガスのアトラクションへ徒歩圏内です。ゴールドガラスで覆われた64階建てのタワーは、ラスベガスのライフスタイルを全く新しいレベルへと導くスタイリッシュな客室、グルメダイニング、贅沢なアメニティを備え、ラスベガスならではの魅力的な景色を一望できるリゾートです。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1～2ベッドルーム・スイート</li>
            <li>各スイートにジャグジー完備</li>
            <li>ゲストルームにキチネット、各スイートにフルキッチン完備</li>
            <li>インターネットアクセス完備（デイリーリゾート料金に含まれます。）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>豪華な屋外プールとホットタブ、プライベートカバナ、</li>
            <li>H2(EAU)プールサイド・ビストロとバー</li>
            <li>ミシュランの格付けを受賞したDJTレストランとバー</li>
            <li>6 階に110フィート（33.5ｍ）の温水プール</li>
            <li>コンシェルジュサービス</li>
            <li>フルサービスのビジネスセンター</li>
            <li>ルームサービスとプライベートシェフサービス</li>
            <li>ワールドクラス・スパ、サロンとフィットネス施設</li>
            <li>滞在中のデイリーリゾート料金はチェックアウト時に請求されます。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 702-982-0000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2000 Fashion Show Dr, Las Vegas, NV 89109</address>
          <p>Hilton Grand Vacations Club at Trump International Hotel Las Vegas provides a spectacular experience that is uniquely sophisticated and completely luxurious. A jewel of the Trump portfolio, this exclusive property offers extensive amenities and an iconic Las Vegas setting, just steps from the Fashion Show Mall and all the Vegas action. This 64-story tower of golden glass is a one-of-a-kind resort that takes the Las Vegas lifestyle to a whole new level with stylish accommodations, gourmet dining, indulgent amenities, along with stunning panoramas of the electrifying city.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Immaculate studios; 1- and 2-bedroom suites; all units feature whirlpool tubs</li>
            <li>Guestrooms feature well-equipped kitchenettes; suites offer fully equipped kitchens</li>
            <li>Internet Access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Luxurious outdoor swimming pool and hot tubs, private cabanas, H2(EAU) poolside bistro and bar</li>
            <li>Michelin award-winning DJT restaurant and bar</li>
            <li>6th floor deck with 110-foot heated pool</li>
            <li>Concierge service</li>
            <li>Full-service business center</li>
            <li>In-room dining and private chef services</li>
            <li>World-class spa, salon and fitness center</li>
            <li>Valet Parking</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 11 a.m.<br />Phone: 702-982-0000</p>
          
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
            <a href="../elara-hgvc/">
              <div class="col-xs-4">
                <img src="../img/elara-t.jpg" alt="Elara, a Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Elara, a Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../hgvc-flamingo/">
              <div class="col-xs-4">
                <img src="../img/flamingo-t.jpg" alt="Hilton Grand Vacations Club at the Flamingo" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at the Flamingo
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../hgvc-paradise/">
              <div class="col-xs-4">
                <img src="../img/paradise-t.jpg" alt="Hilton Grand Vacations Club on Paradise" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club on Paradise
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../hgvc-boulevard/">
              <div class="col-xs-4">
                <img src="../img/boulevard-t.jpg" alt="Hilton Grand Vacations Club on the Boulevard" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club on the Boulevard
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
	  getMap(36.1279296875, -115.167945861816, 15);
    });
  </script>

</body>
</html>