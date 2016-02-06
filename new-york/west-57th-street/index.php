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
  <meta name="description" content="West 57th Street by Hilton Club delivers a Manhattan experience that is luxurious and, above all, unforgettable." />
  <title>West 57th Street Resort by Hilton Club in New York</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Terrace of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Terrace of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Living Area of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The-Bedroom of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Lounge of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Fitness Center of West 57th Street Resort by Hilton Club in New York" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Studio Floor Plan at West 57th Street Resort by Hilton Club" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Studio Floor Plan at West 57th Street Resort by Hilton Club" /></p>
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
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="One-Bedroom Floor Plan at West 57th Street Resort by Hilton Club" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="One-Bedroom Floor Plan at West 57th Street Resort by Hilton Club" /></p>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、29 &ndash; 34週</th>
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
                    <td>375</td>
                    <td>750</td>
                    <td>3,750</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プレミア</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
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
                    <td>1ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・ペントハウス</td>
                    <td>1,160</td>
                    <td>2,320</td>
                    <td>11,600</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 28週、35 &ndash; 52週</th>
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
                    <td>スタジオ・プレミア</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
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
                    <td>1ベッドルーム・プレミア</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・ペントハウス</td>
                    <td>1,680</td>
                    <td>3,360</td>
                    <td>16,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 6, 29 &ndash; 34</th>
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
                    <td>Studio Premier</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
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
                    <td>1-Bedroom Premier</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Penthouse</td>
                    <td>1,160</td>
                    <td>2,320</td>
                    <td>11,600</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash; 28, 35 &ndash; 52</th>
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
                    <td>Studio Premier</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
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
                    <td>1-Bedroom Premier</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Penthouse</td>
                    <td>1,680</td>
                    <td>3,360</td>
                    <td>16,800</td>
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
        <h1>ウエスト57ストリート・バイ・ヒルトン・クラブ</h1>
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
      <h2>アメリカ、ニューヨーク州マンハッタン</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>West 57th Street by Hilton Club</h1>
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
      <h2>New York, New York</h2>
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
          <address>102-108 West 57th St, New York, NY 10019</address>
          <p>ニューヨーク市で初のタイムシェア物件として大きな注目を集めている、ウエスト57ストリート・バイ・ヒルトン・クラブ。28階建てのモダンなビルに贅沢を駆使したワールドクラスの施設で、この上ない快適さをお届けします。マンハッタンの中心であるプラザ・ディストリクトに位置し、リンカーンセンター、セントラルパーク、カーネギーホール、５番街の高級ショッピング街にも近い抜群のロケーション。リゾート内にはプライベート・ラウンジ横に市内を見下ろす広々としたアウトドア・テラスがあります。至福のおもてなしに是非ご期待ください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1ベッドルーム・スイートとペントハウス</li>
            <li>各部屋にスタイリッシュなインテリアや最高級のリネン、</li>
            <li>最新のエンターテイメント・システム完備</li>
            <li>1ベッドルームに優雅なオーク材、大理石、御影石を使用</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ゆったりとした屋外テラス</li>
            <li>このリゾートの所有権を有するクラブメンバー様のみ</li>
            <li>利用可能なプライベート・ラウンジ</li>
            <li>コンシェルジュ</li>
            <li>バレーパーキングのみ（有料、規制あり）</li>
            <li>洗濯・ドライクリーニング・サービス（有料）</li>
            <li>ハウスキーピング料（3泊以下有料）</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>4年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ホームウィーク、ホームリゾート、オープンシーズン予約はオーナー様のみが対象としています。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 212-379-0103</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>102-108 West 57th St, New York, NY 10019</address>
          <p>With a truly distinctive setting complemented by world-class amenities, West 57th Street by Hilton Club delivers a Manhattan experience that is luxurious and, above all, unforgettable. This 28-story building is the first ground-up residential shared ownership property ever developed in New York City. Located in the heart of midtown Manhattan's prestigious Plaza District, West 57th Street by Hilton Club is close to the city's most celebrated destinations, including Lincoln Center, Central Park, Carnegie Hall and Fifth Avenue’s world-famous shopping. Highlighting the gracious list of property features is a spacious outdoor terrace adjoining the Owners Lounge.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Contemporary studios, 1-bedroom suites and penthouses</li>
            <li>Each unit features stylish furnishings, fine-quality linens, and state-of-the-art entertainment systems</li>
            <li>Elegant oak, marble and granite throughout each suite</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Spacious outdoor terrace</li>
            <li>Private lounge for West 57th Street Owners only</li>
            <li>Concierge</li>
            <li>Valet parking only (fees and restrictions apply)</li>
            <li>Valet laundry (fees apply)</li>
            <li>Exercise Facilities</li>
            <li>Accessible guest room has 32" entry or passage doors</li>
            <li>Accessible transportation</li>
            <li>TTY for guest use</li>
            <li>Closed captioning for in room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 212-379-0103</p>
          
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
            <a href="../hilton-club/">
              <div class="col-xs-4">
                <img src="../img/hiltonclub-t.jpg" alt="The Hilton Club &ndash; New York" />
              </div>
              <div class="col-xs-8">
                The Hilton Club &ndash; New York
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
	  getMap(40.764376, -73.97805, 14);
    });
  </script>

</body>
</html>