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
  <meta name="description" content="Superbly positioned on the sunny Kohala Coast of Hawaii's Big Island, Kohala Suites provides a relaxing haven in the heart of magnificent Waikoloa." />
  <title>Kohala Suites by Hilton Grand Vacations Club in Waikoloa, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Exterior at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The-Bedroom at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The-Bedroom at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Patio at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          <div class="slide">
            <img src="img/08.jpg" alt="The Pool at Kohala Suites in Waikoloa, Hawaii" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two-Bedroom Floor Plan at Kohala Suites in Waikoloa, Hawaii" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two-Bedroom Floor Plan at Kohala Suites in Waikoloa, Hawaii" /></p>
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
                    <td>2ベッドルーム・プレミア</td>
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
                    <td>2ベッドルーム・プレミア</td>
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
        <h1>コハラ・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h1>
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
      <h2>アメリカ、ハワイ州ワイコロア</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Kohala Suites by Hilton Grand Vacations Club</h1>
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
      <h2>Waikoloa, Hawaii</h2>
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
          <address>69-550 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>ビッグ・アイランドの澄み切ったコハラ・コーストに位置するヒルトン・グランド・バケーションズ・ クラブ・アット・ワイコロア・ビーチ・リゾートは、壮大なワイコロアの中心地として、リラックスしたオアシスを提供しています。上品な部屋には、カジュアルでエレガントなトロピカルスタイルといった独特なアメニティーと家具が調和されています。ビッグ・アイランドならではの活火山やコーヒー農園の見学、チャンピオンシップコースでのゴルフはいかがでしょうか。またはプールサイドで寛げば、ゆったりと時間の流れる楽園の気分を満喫いただけることでしょう。リゾート滞在の方は、すぐ近くのヒルトン・ワイコロア・ビレッジ・リゾート・ホテルにあるレストラン、ブティック、プール、ラグーンビーチ、スパ、各種ウォーター・レクリエーション施設に加え、隣接するザ・ベイクラブのフィットネスやテニス施設もご利用いただけます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>2ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>お子様向けプール付き温水プールとジャグジー</li>
            <li>プールバー</li>
            <li>バーベキュー・グリル付きピクニック場</li>
            <li>ゴルフ場（有料）</li>
            <li>ビジネスセンター</li>
            <li>日本語デスク</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>7年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-886-8700</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>69-550 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>Superbly positioned on the sunny Kohala Coast of Hawaii's Big Island, Kohala Suites by Hilton Grand Vacations Club provides a relaxing haven in the heart of magnificent Waikoloa. Tastefully appointed suites blend a casually elegant tropical style with distinctive amenities and furnishings. The extraordinary Big Island gives visitors the opportunity to witness the sight of an active volcano, visit a working coffee plantation, golf at championship courses or just enjoy relaxing poolside days in paradise. Resort guests also have access to the restaurants, boutiques, pools, lagoon beach, spa and water recreation at the nearby Hilton Waikoloa Village Resort, as well as the amenities, fitness center and tennis facilities at the neighboring Bay Club resort. </p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 2-bedroom suites with private lanais</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated swimming pool with children's area and whirlpool spa</li>
            <li>Pool bar</li>
            <li>Picnic area with BBQ grills</li>
            <li>Golf Course (fees apply)</li>
            <li>Business Center</li>
            <li>Accessible guest room has 32" entry or passage doors</li>
            <li>Accessible transportation</li>
            <li>TTY for guest use</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-886-8700</p>
          
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
            <a href="../kings-land-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kingsland-t.jpg" alt="Kings' Land by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kings' Land by Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../bay-club-waikoloa-beach/">
              <div class="col-xs-4">
                <img src="../img/bayclub-t.jpg" alt="The Bay Club at Waikoloa Beach Resort" />
              </div>
              <div class="col-xs-8">
                The Bay Club at Waikoloa Beach Resort
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
	  getMap(19.922555, -155.877794, 14);
    });
  </script>

</body>
</html>