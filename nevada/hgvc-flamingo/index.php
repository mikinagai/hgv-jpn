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
  <meta name="description" content="Superbly situated, this resort is just steps away from the spectacle of sights and sounds that can only be found on the Las Vegas Strip." />
  <title>Hilton Grand Vacations Resort at the Flamingo in Las Vegas, Nevada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Lobby at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living and Dining Area at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Lobby at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Suite at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Pool at the Flamingo Resort in Las Vegas, Nevada" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.gif" alt="One-Bedroom Floor Plan at the Flamingo Resort in Las Vegas, Nevada" /></p>
              <p class="large"><img src="floorplans/one.gif" alt="One-Bedroom Floor Plan at the Flamingo Resort in Las Vegas, Nevada" /></p>
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
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.gif" alt="Two-Bedroom Floor Plan at the Flamingo Resort in Las Vegas, Nevada" /></p>
              <p class="large"><img src="floorplans/two.gif" alt="Two-Bedroom Floor Plan at the Flamingo Resort in Las Vegas, Nevada" /></p>
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
            <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 1 &ndash; 4週、49週、50週</th>
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
                    <td>110</td>
                    <td>220</td>
                    <td>1,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 5 &ndash; 8週、21 &ndash; 36週、44 &ndash; 48週</th>
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
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> 
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 9 &ndash; 20週、37 &ndash; 43週、51週、52週</th>
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
                </tbody>
              </table>
            </div>
            
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
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 1 &ndash; 4, 49, 50</th>
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
                    <td>110</td>
                    <td>220</td>
                    <td>1,100</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 5 &ndash; 8, 21 &ndash; 36, 44 &ndash; 48</th>
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
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> 
        
        <br />
        
        <div class="row">
        
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・ザ・フラミンゴ</h1>
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
        <h1>Hilton Grand Vacations Club at the Flamingo</h1>
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
          <address>3575 S Las Vegas Blvd, Las Vegas, NV 89109</address>
          <p>フラミンゴは、ヒルトン・グランド・バケーションズ・クラブを代表する豪華で壮大なリゾートです。15エーカー（約0.06km&sup2;）の敷地を誇るリゾートの周りには、ラスベガスならではのアトラクションが盛りだくさん。</p>
          <p>世界的に有名なカジノはもちろん、豪華キャストのライブショー、目にも鮮やかな料理が並ぶレストラン街、大規模なショッピングモールなど、想像をはるかに超えるエンターテイメントは無限です。リゾートには大きなプールがあり、賑やかな街の中で、落ち着いた寛ぎの場を提供しています。エネルギーに満ち溢れるラスベガスの魅力を、存分にお楽しみください。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ（調理設備なし）、1～2ベッドルーム・スイート</li>
            <li>ジャグジー付きのマスターバスルーム完備</li>
            <li>各スイートにフルキッチン、洗濯機、乾燥機完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>温水プールとジャグジー</li>
            <li>サウナ</li>
            <li>デザートガーデン・ギフトショップとデリ</li>
            <li>オーナーズ・ラウンジ</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>19年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 702-697-2900</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>3575 S Las Vegas Blvd, Las Vegas, NV 89109</address>
          <p>Revel in the thrills of Las Vegas from the magnificent grandeur of Hilton Grand Vacations' flagship vacation ownership resort. Superbly situated within the 15-acre Flamingo property, this resort is just steps away from the spectacle of sights and sounds that can only be found on the Las Vegas Strip. The venues are vast and vibrant and offer non-stop action at world-famous casinos, live entertainment and star-studded shows, and an electrifying array of restaurants and shops. The resort's sprawling swimming pools and serene setting provide a relaxing haven amid the excitement and exuberance of the adventures beyond.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious studios and 1- and 2-bedroom suites</li>
            <li>Each studio, 1 and 2-bedroom suite features master bath with whirlpool jet tub</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated swimming pool and whirlpool spa</li>
            <li>Sauna</li>
            <li>Desert Garden Gift Shop and Deli</li>
            <li>Owners Lounge</li>
            <li>Exercise Facilities</li>
            <li>Accessible Route from Entrance &ndash; Registration area, guest Room, restaurant, Meeting Space/Ballroom, Exercise Facilities, Swimming pool, Business Center</li>
            <li>Accessible Guest room has 32" entry or passage doors. Accessible Transportation</li>
            <li>TTY for guest use</li>
            <li>Assistance listening devices for meetings</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 702-697-2900</p>
          
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
	  getMap(36.1167444, -115.1690824, 14);
    });
  </script>

</body>
</html>