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
  <meta name="description" content="Situated at the northern end of the Las Vegas Strip, this elegant resort combines the comforts of a luxurious home with ideal access to the city's signature attractions." />
  <title>Hilton Grand Vacations Resort on the Boulevard in Las Vegas, Nevada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Lobby at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Kitchen at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Pool at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Spa Lounge at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Theater at Hilton Grand Vacations on the Boulevard in Las Vegas, Nevada" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.gif" alt="One Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <p class="large"><img src="floorplans/one.gif" alt="One Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1ベッドルーム</p>
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
              <p class="small"><img src="floorplans/two-t.gif" alt="Two Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <p class="large"><img src="floorplans/two.gif" alt="Two Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルーム</p>
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
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-t.gif" alt="Three Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <p class="large"><img src="floorplans/three.gif" alt="Three Bedroom Floor Plan at Hilton Grand Vacations on Paradise in Las Vegas, Nevada" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom</p>
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
           <!-- Points table in japanese starts -->

           <div class="row">
        
            <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 1 &ndash; 8週, 21 &ndash; 36週, 44 &ndash; 50週</th>
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
                    <td>3ベッドルーム・プラス</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 9 &ndash; 20週, 37 &ndash; 43週, 51週, 52週</th>
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
                    <td>3ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>

          
           <!-- Points table in japanese ends -->

<!--               <div class="row">
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 8, 21 &ndash; 36, 44 &ndash; 50</th>
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
                    <td>1&ndash;Bedroom</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1&ndash;Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2&ndash;Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2&ndash;Bedroom Plus</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3&ndash;Bedroom Plus</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 9 &ndash; 20, 37 &ndash; 43, 51, 52</th>
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
                    <td>1&ndash;edroom</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1&ndash;edroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2&ndash;edroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2&ndash;edroom Plus</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3&ndash;edroom Plus</td>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・オン・ザ・ブルバード</h1>
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
      <h2>アメリカ、ネバダ州ラスベガス</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club on the Boulevard</h1>
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
          <address>2650 S Las Vegas Blvd, Las Vegas, NV 89109</address>
          <p>ラスベガス目抜き通りのストリップの北端に位置する優雅なリゾートで、豪邸のような快適さと街の賑わいを同時に満喫することができます。高層建築の隅々まで、「 砂漠のアールデコ」をテーマにしたドラマチックな雰囲気を漂わせるこのリゾートは、さまざまなトリートメントをお届けするヒルトン･グランド･バケーションズのリゾート直営で初登場となるグランド・バケーションスパをはじめ、その他の設備も充実しています。バリエーション豊かなプール、配慮の行き届いた各施設など、活気に満ちたラスベガスで最高のバケーションを体験してください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ（調理設備なし）、1～3 ベッドルーム・スイート</li>
            <li>各スイートにフルキッチン、洗濯機、乾燥機完備</li>
            <li>タワー1の各スイートにiPodドッキングステーション付きAMFMラジオ、リビングルームとベッドルームに液晶テレビ完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つの温水プールと3つのジャグジー</li>
            <li>ウェーブス・プール・バー&amp;グリル（季節・天候により限定）</li>
            <li>4,000平方フィート（360m2）の広さを誇るeforeaスパ（有料）</li>
            <li>デリと食料品店</li>
            <li>オーナーズ・ラウンジ</li>
            <li>フィットネス施設</li>
            <li>日本語デスク</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>9年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 702-765-8300</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2650 S Las Vegas Blvd, Las Vegas, NV 89109</address>
          <p>Situated at the northern end of the Las Vegas Strip, this elegant resort combines the comforts of a luxurious home with ideal access to the city's signature attractions. A magnificent "Desert Deco" design is showcased throughout the resort's towering architecture and dramatic d&eacute;cor. Among the upscale collection of amenities is the eforea Spa, offering an enticing collection of rejuvenating spa treatments. From elaborate swimming pools to superbly appointed accommodations, this extraordinary resort provides guests with an exceptional vacation headquarters in the heart of thriving Las Vegas.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious studios and 1-, 2- and 3-bedroom suites</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Suites offer AM/FM radios with iPod docking stations, LCD TVs in both living room and bedroom</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 heated swimming pools, 3 whirlpool spas</li>
            <li>Waves Pool Bar &amp; Grill (open seasonally, weather permitting)</li>
            <li>4,000-square-foot eforea Spa (fees apply)</li>
            <li>Deli and grocery store</li>
            <li>Owners Lounge</li>
            <li>Exercise Facilities</li>
            <li>All guest units are Non-Smoking</li>
            <li>Accessible Route from Entrance &ndash; Registration Area, Guest room, Restaurant, Meeting Space/Ballroom, Exercise Facilities, Swimming Pool, business center, Spa</li>
            <li>Complementary Business Center</li>
            <li>Accessible Transportation</li>
            <li>Accessible guest room has 32" entry or passage doors</li>
            <li>TTY for guest use</li>
            <li>Assistance listening devices for meetings</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 702-765-8300</p>
          
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
            <a href="../hgvc-trump/">
              <div class="col-xs-4">
                <img src="../img/trump-t.jpg" alt="Hilton Grand Vacations Club at Trump International Hotel Las Vegas" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at Trump International Hotel
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
	  getMap(36.1399028, -115.1608424, 15);
    });
  </script>

</body>
</html>