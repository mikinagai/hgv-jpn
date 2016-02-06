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
  <meta name="description" content="Carved out of an ancient lava field, this 112-acre oasis occupies a superb location between two of Hawaii's finest golf courses. Guests of the resort also enjoy access to the restaurants, boutiques, beaches and water recreation." />
  <title>Kings' Land Resort by Hilton Grand Vacations Club in Waikoloa, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Pool at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Kitchen at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Kitchen / Dining Area at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The-Bedroom at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Pool Bar at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="A Nearby Golf Course at Kings' Land Resort in Waikoloa, Hawaii" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-4 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="1-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="1-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
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
              <p class="small"><img src="floorplans/two-t.jpg" alt="2-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="2-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
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
              <p class="small"><img src="floorplans/three-t.jpg" alt="3-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
              <p class="large"><img src="floorplans/three.jpg" alt="3-Bedroom Floor Plan at Kings' Land Resort in Waikoloa, Hawaii" /></p>
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
                    <td>1ベッドルーム</td>
                    <td>340/510</td>
                    <td>680/1,020</td>
                    <td>3,400/5,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420/630</td>
                    <td>840/1,260</td>
                    <td>4,200/6,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500/750</td>
                    <td>1,000/1,500</td>
                    <td>5,000/7,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>580/870</td>
                    <td>1,160/1,740</td>
                    <td>5,800/8,700</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>1,440</td>
                    <td>2,880</td>
                    <td>14,400</td>
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
                    <td>1ベッドルーム</td>
                    <td>480/720</td>
                    <td>960/1,440</td>
                    <td>4,800/7,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620/930</td>
                    <td>1,240/1,860</td>
                    <td>6,200/9,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700/1,050</td>
                    <td>1,400/2,100</td>
                    <td>7,000/10,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>840/1,260</td>
                    <td>1,680/2,520</td>
                    <td>8,400/12,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,400</td>
                    <td>2,880</td>
                    <td>14,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>1,725</td>
                    <td>3,450</td>
                    <td>17,250</td>
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
                    <td>1-Bedroom</td>
                    <td>340/510</td>
                    <td>680/1,020</td>
                    <td>3,400/5,100</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>420/630</td>
                    <td>840/1,260</td>
                    <td>4,200/6,300</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500/750</td>
                    <td>1,000/1,500</td>
                    <td>5,000/7,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>580/870</td>
                    <td>1,160/1,740</td>
                    <td>5,800/8,700</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Premier</td>
                    <td>1,440</td>
                    <td>2,880</td>
                    <td>14,400</td>
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
                    <td>1-Bedroom</td>
                    <td>480/720</td>
                    <td>960/1,440</td>
                    <td>4,800/7,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>620/930</td>
                    <td>1,240/1,860</td>
                    <td>6,200/9,300</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>700/1,050</td>
                    <td>1,400/2,100</td>
                    <td>7,000/10,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>840/1,260</td>
                    <td>1,680/2,520</td>
                    <td>8,400/12,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>1,400</td>
                    <td>2,880</td>
                    <td>14,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Premier</td>
                    <td>1,725</td>
                    <td>3,450</td>
                    <td>17,250</td>
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
        <h1>キングス・ランド・バイ・ヒルトン･グランド・バケーションズ・クラブ</h1>
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
        <h1>Kings' Land by Hilton Grand Vacations Club</h1>
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
          <address>69-699 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>有名なコハラ・コーストにあるヒルトン・グランド・バケーションズ・クラブの最新リゾート、キングス・ランド。美しいフェアウェイと、壮大なワイコロアの眺望をお楽しみください。溶岩原を切り開いた、112エーカー（約0.45km&sup2;）の広大な敷地を誇り、ハワイ島で最高のゴルフ場として定評のある、キングスコースとビーチコースの間に位置しています。また、すぐ近くのヒルトン・ワイコロア・ビレッジ・リゾート・ホテル内のレストラン、ブティック、ビーチや各種ウォーター・レクリエーションなどもご利用いただけます。ハワイの大自然に恵まれ、明るい陽射しに包まれたこのリゾートは、世界で最もバケーションで訪れたい場所の１つとして、ワールドクラスの設備を誇っています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1〜3ベッドルーム・スイート（バルコニー付き）</li>
            <li>1～2ベッドルームの必要ポイント数は、</li>
            <li>部屋の間取りやデザインによって異なります。</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>4つのスライダー、ジャグジー、流れるプール、お子様向け</li>
            <li>プール、噴水による水遊び場、和み所が付いた20,000平方</li>
            <li>フィート（約1,800m&sup2;）のスーパープール</li>
            <li>ビストロ・レストランとプールバー</li>
            <li>33,000平方フィート（約2,970m&sup2;）のセントラルクラブハウス</li>
            <li>ビジネスセンターとワイヤレス・インターネットアクセス</li>
            <li>チルドレンズ・クラブ</li>
            <li>（リゾート内でのお子様向けエンターテイメント・プログラム）</li>
            <li>お子様向けゲームルーム</li>
            <li>バーベキューエリア</li>
            <li>フィットネス施設（ヒルトン・フィットネス・バイ・プリコーとデイリーフィットネスクラス）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>３年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ハワイ州宿泊税が加算されます。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-881-3000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>69-699 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>Kings' Land, the newest Hilton Grand Vacations Club resort on the famed Kohala Coast, offers expansive fairway views and stunning Waikoloa panoramas. Carved out of an ancient lava field, this 112-acre oasis occupies a superb location directly between two of Hawaii's finest golf courses, the Kings' Course and the Beach Course. Guests of the resort also enjoy access to the restaurants, boutiques, beaches and water recreation at the nearby Hilton Waikoloa Village Resort. In this spectacular region of Hawaii, perpetually sunny skies, dramatic vistas and world-class amenities combine to create one of the world's most desirable vacation destinations.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1, 2 and 3-bedroom suites with private lanais</li>
            <li>Point values for 1 and 2-bedroom suites vary to reflect a variety of floor plans and design</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>20,000-square-foot super pool featuring 4 slides, lazy river, whirlpool spas, serenity section, children's beach and water activity play area</li>
            <li>Bistro Restaurant and Pool Bar</li>
            <li>33,000-square-foot central Clubhouse</li>
            <li>Business Center and wireless Internet access</li>
            <li>Children's Club with daily drop-in activities</li>
            <li>Game room for children of all ages</li>
            <li>BBQ areas throughout resort</li>
            <li>Hilton Fitness by Precor and daily fitness classes</li>
            <li>Accessible guest room has 32" entry or passage doors</li>
            <li>Accessible transportation</li>
            <li>TTY for guest use</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-881-3000</p>
          
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
            <a href="../kohala-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kohala-t.jpg" alt="Kohala Suites by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kohala Suites by Hilton Grand Vacations Club
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
	  getMap(19.926804, -155.865824, 14);
    });
  </script>

</body>
</html>