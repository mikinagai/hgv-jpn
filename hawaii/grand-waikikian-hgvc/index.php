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
  <meta name="description" content="The exquisite Grand Waikikian brings Honolulu vacation accommodations to a peerless new level." />
  <title>Grand Waikikian Resort by Hilton Grand Vacations Club in Honolulu, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living / Dining Area at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Dining Area at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom at Grand Waikikian Resort in Honolulu, Hawaii" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-1-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-1.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
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
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-2-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-2.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
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
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-3-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-3.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
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
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-pent-1-t.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-pent-1.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルーム・ペントハウス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom Penthouse</p>
              <?php
				}
			  ?>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-pent-2-t.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-pent-2.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルーム・ペントハウス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom Penthouse</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-pent-3-t.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-pent-3.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルームペント・ハウス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom Penthouse</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-pent-t.jpg" alt="Three-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/three-pent.jpg" alt="Three-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム・ペントハウス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom Penthouse</p>
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
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・ペントハウス</td>
                    <td>1,750</td>
                    <td>3,500</td>
                    <td>17,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・ペントハウス</td>
                    <td>2,400</td>
                    <td>4,800</td>
                    <td>24,000</td>
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
                    <td>2ベッドルーム</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,440</td>
                    <td>2,880</td>
                    <td>14,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・ペントハウス</td>
                    <td>2,400</td>
                    <td>4,800</td>
                    <td>24,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・ペントハウス</td>
                    <td>2,875</td>
                    <td>5,750</td>
                    <td>28,750</td>
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
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Penthouse</td>
                    <td>1,750</td>
                    <td>3,500</td>
                    <td>17,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Penthouse</td>
                    <td>2,400</td>
                    <td>4,800</td>
                    <td>24,000</td>
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
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>1,440</td>
                    <td>2,880</td>
                    <td>14,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Penthouse</td>
                    <td>2,400</td>
                    <td>4,800</td>
                    <td>24,000</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Penthouse</td>
                    <td>2,875</td>
                    <td>5,750</td>
                    <td>28,750</td>
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
        <h1>グランド・ワイキキアン・バイ・<br/>ヒルトン･グランド・バケーションズ・クラブ</h1>
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
      <h2>アメリカ、ハワイ州ホノルル</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Grand Waikikian by Hilton Grand Vacations Club</h1>
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
          <address>1811 Ala Moana Blvd, Honolulu, HI 96815</address>
          <p>広大なヒルトン・ハワイアン・ ビレッジ&reg;・ワイキキ･ビーチ・リゾートの中心部に建設されたグランド・ワイキキアンでは、リゾートからの壮大な眺望、グランドホテルならではの高級感と行き届いたサービス、そして豪華なコンドミニアムの安らぎと利便性に至るまで、かつてない贅沢なホノルルでのバケーションを皆様に提供しています。38階建てのタワーは、ワイキキが誇る海辺の楽園に立地し、ロマンスと夢が溢れる憧れの場所としての新時代を築き上げることでしょう。</p>
          <p>さまざまな文化と世界中の料理が集まるこの地で、優雅なひとときをお過ごしください。さらにヒルトン・ハワイアン・ビレッジ内にてお楽しみいただけるルアウ、カタマランでのセーリング、ショッピングやお食事と幅広いアクティビティーがグランド・ワイキキアンの魅力を一層引き立てます。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～3ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>10,000平方フィート（900m&sup2;）のスーパープールを含む4つのプール</li>
            <li>ビーチと海水ラグーン、スノーケリングやビーチ用品レンタル（有料）</li>
            <li>マンダラ・スパ（有料）</li>
            <li>お子様向けインストラクター付きレクリエーション･プログラム</li>
            <li>到着／出発ラウンジ</li>
            <li>レストラン、ラウンジ</li>
            <li>フィットネス施設</li>
            <li>日本語デスク</li>
            <li>バレーパーキングと駐車場（有料）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>4年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ハワイ州宿泊税が加算されます。</li>
            <li>ペントハウスのオープンシーズン予約は、グランド・ワイキキアンのペントハウスの所有権を有するクラブメンバー様のみを対象としています。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-953-2700</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>1811 Ala Moana Blvd, Honolulu, HI 96815</address>
          <p>Presiding over the expansive Hilton Hawaiian Village&reg; Waikiki Beach Resort, the exquisite Grand Waikikian brings Honolulu vacation accommodations to a peerless new level. Spectacular views&hellip; the ambience and service of a grand hotel&hellip; all the comforts and conveniences of a luxury condominium home. This 38-story tower heralds a new era of elegance in the oceanfront paradise of Waikiki, a destination of romance and dreams, of cultures and cuisines. The extraordinary Grand Waikikian setting is further enhanced by the surrounding grandeur of Hilton Hawaiian Village, renowned for its signature luau celebrations, Catamaran sailing trips, spectacular shopping and an array of dining experiences.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious 1-, 2- and 3-bedroom suites with private balconies</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>4 swimming pools including 10,000-square-foot super pool</li>
            <li>Beach and salt-water lagoon, both offering swimming, snorkeling and watercraft equipment rentals (fees apply)</li>
            <li>Mandara Spa (fees apply)
            <li>Supervised children's recreation programs</li>
            <li>Arrival / Departure Lounge</li>
            <li>Restaurants and lounges</li>
            <li>Exercise Facilities</li>
            <li>Valet and Self Parking (fees apply)</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-953-2700</p>
          
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
            <a href="../kalia-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kalia-t.jpg" alt="Kalia Suites by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kalia Suites by Hilton Grand Vacations Club
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
	  getMap(21.2838294, -157.8377796, 15);
    });
  </script>

</body>
</html>