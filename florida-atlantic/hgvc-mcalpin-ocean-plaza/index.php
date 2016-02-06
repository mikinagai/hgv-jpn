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
  <meta name="description" content="With a premier Ocean Drive address in the heart of South Beach, Hilton Grand Vacations Club puts you just steps away from the neighborhood's most celebrated bistros, boutiques, art galleries and cultural venues." />
  <title>Hilton Grand Vacations Club Resort at McAplin &ndash; Ocean Plaza</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Kitchen of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bedroom of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Bathroom of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Lobby of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Patio Lounge of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
          </div>
          
          <div class="slide">
            <img src="img/09.jpg" alt="The Hot Tub of Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza in Miami Beach" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 18 〜 22週、 34 〜 50週</th>
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
                    <td>1 ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 〜 17週、 23 〜 33週、 51 〜 52週</th>
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
                    <td>1 ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
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
		  else {
		?>	
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 18 &ndash; 22, 34 &ndash; 50</th>
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
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 17, 23 &ndash; 33, 51, 52</th>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・マックアルピン<br/>&mdash;オーシャンプラザ</h1>
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
      <h2>アメリカ、フロリダ州マイアミビーチ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at McAplin &ndash; Ocean Plaza</h1>
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
      <h2>Miami Beach, Florida</h2>
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
          <address>1430 Ocean Dr, Miami Beach, FL 33139</address>
          <p>オープンテラスのカフェや、アールデコ調の建物が並ぶマイアミのサウスビーチは、多様な文化が交錯する都会的で洗練された街です。ヒルトン・グランド・バケーションズ・クラブは、サウスビーチの中心、オーシャンドライブの一等地にあり、周辺は地元で評判のビストロやブティック、画廊などで賑わっています。スタイリッシュな部屋では、刺激的なサウスビーチの余韻と共に、寛ぎのひとときをお過ごしください。歴史的名所として登録されているこの独特なリゾートは、都会的で国際色豊かなサウスビーチの時を越えた魅力がいっぱいです。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート</li>
            <li>キッチン完備（オーブンなし）</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋上にジャグジー（このリゾートにプールはありません）</li>
            <li>洗濯機、乾燥機</li>
            <li>24時間バレーパーキング（有料）</li>
            <li>このリゾートに駐車場はありません。</li>
            <li>小さなリゾートにつき、アメニティーには限りがあります。</li>
            <li>フィットネス施設</li>
            <li>ビジネスセンター</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>14年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>フロリダ・グリーン・ロッヂング認定</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 305-604-8225</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>1430 Ocean Dr, Miami Beach, FL 33139</address>
          <p>Miami's South Beach defines urban sophistication, with its al fresco cafes, art deco architecture, mosaic of culture and world-class attitude. With a premier Ocean Drive address in the heart of South Beach, Hilton Grand Vacations Club puts you just steps away from the neighborhood's most celebrated bistros, boutiques, art galleries and cultural venues. Each stylishly designed suite offers a haven of relaxation that is sure to complement every exhilarating South Beach agenda. As a registered historical site, this distinctive property reflects the timeless appeal of cosmopolitan, international South Beach.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Cozy 1- and 2-bedroom suites</li>
            <li>Each suite features ovenless, well-equipped kitchen</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Rooftop whirlpool spa (no on-site swimming pool)</li>
            <li>Laundry facilities on property</li>
            <li>24-hour valet parking available, for a fee (no on-site parking)</li>
            <li>Boutique property with limited amenities</li>
            <li>Exercise Facilities</li>
            <li>Business Center</li>
            <li>Accessible guest room has 32" entry or passage doors</li>
            <li>TTY for guest use</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 305-604-8225</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
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
	  getMap(25.7862831, -80.1297516, 15);
    });
  </script>

</body>
</html>