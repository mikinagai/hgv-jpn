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
  <meta name="description" content="With a premier location in the heart of Marco Island's thriving new entertainment and retail district, this exquisite property treats guests to tastefully appointed accommodations and close proximity to all this island paradise has to offer." />
  <title>Sunset Cove Resort in Marco Island, Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Pool at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Pool at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Living Area at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Kitchen at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Bedroom at Sunset Cove Resort in Marco Island, Florida" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-1-t.jpg" alt="Floor Plan at Casa Ybel Resort in Sanibel Island, Florida" /></p>
              <p class="large"><img src="floorplans/three-1.jpg" alt="Floor Plan at Casa Ybel Resort in Sanibel Island, Florida" /></p>
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
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-2-t.jpg" alt="Three Bedroom Floor Plan at Casa Ybel Resort in Sanibel Island, Florida" /></p>
              <p class="large"><img src="floorplans/three-2.jpg" alt="Three Bedroom Floor Plan at Casa Ybel Resort in Sanibel Island, Florida" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム・プラス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom Plus</p>
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
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 19 &ndash; 23週、34 &ndash; 42週、49週、50週</th>
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
                    <td>3ベッドルーム</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 14 &ndash; 18週、43 &ndash; 48週</th>
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
                    <td>3ベッドルーム</td>
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
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 &ndash; 13週、24 &ndash; 33週、51週、52週</th>
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
                    <td>3ベッドルーム</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 19 &ndash; 23, 34 &ndash; 42, 49, 50</th>
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
                    <td>3-Bedroom</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 14 &ndash; 18, 43 &ndash; 48</th>
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
                    <td>3-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 13, 24 &ndash; 33, 51, 52</th>
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
                    <td>3-Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
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
        <h1>サンセット・コーブ・リゾート</h1>
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
      <h2>アメリカ、フロリダ州マルコ島</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Sunset Cove Resort</h1>
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
      <h2>Marco Island, Florida</h2>
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
          <address>571 W Elkcam Circle, Marco Island, FL 34145</address>
          <p>マルコ島は、ワールドクラスのゴルフコースとさまざまなウォーター・レクリエーションでその名を知られています。マルコ島の素敵なお店やレストランが立ち並ぶ、新たなエンターテイメントの中心街に位置するこのリゾートは、リオの水路を見下ろし、ビーチからも車でわずかの距離です。また、各地へのアクセスにも理想的な場所に位置し、この島のあらゆる名所にも気軽にお出かけいただけることでしょう。近郊のおしゃれな街並みのネープルズでは、ショッピングや食事をお楽しみいただけます。高級感溢れるトロピカル風のインテリアが、この島らしい優雅で華やかな雰囲気を演出します。ゆったりと贅沢な休暇が過ごせるマルコ島の魅力を、存分にご堪能ください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>3ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>プラズマスクリーンテレビ、DVD完備</li>
            <li>高速インターネット･アクセス完備（無料、ロビーとオーナーズ・ラウンジに高速ワイヤレス・インターネットアクセス）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>温水プールとジャグジー</li>
            <li>ボートピアとキャネルアクセス</li>
            <li>ビーチへのシャトルサービス（無料）</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>8年間の実績</li>
            <li>予約制限あり</li>
            <li>全室禁煙</li>
            <li>身障者向け施設なし</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 239-393-3460</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>571 W Elkcam Circle, Marco Island, FL 34145</address>
          <p>Marco Island is renowned for world-class golf and spectacular water recreation, and is home to a superb collection of shops and restaurants in the neighborhood and in nearby Naples. Just a quick drive from the beach, Sunset Cove overlooks the Smokehouse Bay waterway and features upscale décor that creates a relaxing environment of island elegance. With a premier location in the heart of Marco Island's thriving new entertainment and retail district, this exquisite property treats guests to tastefully appointed accommodations and close proximity to all this island paradise has to offer. Experience the undeniable allure of Marco Island from this comfortable and luxurious getaway.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 3-bedroom suites with screened balconies</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
            <li>Plasma screen TV/DVD</li>
            <li>Complimentary high-speed Internet access in units (wireless in lobby and Owners Lounge)</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated swimming pool and whirlpool spa</li>
            <li>Dock and canal access</li>
            <li>Complimentary beach shuttle</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 239-393-3460</p>
          
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
	  getMap(25.951077, -81.7278164, 15);
    });
  </script>

</body>
</html>