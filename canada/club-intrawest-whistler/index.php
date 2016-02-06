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
  <meta name="description" content="Vancouver is one of the world’s most naturally spectacular and cosmopolitan cities. This unique urban resort offers floor-to-ceiling windows providing breathtaking panoramic views of the harbor, city and mountains." />
  <title>Club Intrawest &ndash; Whistler by Hilton Grand Vacations in British Columbia, Canada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Club Intrawest &ndash; Whistler in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Lobby of Club Intrawest &ndash; Whistler in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area of Club Intrawest &ndash; Whistler in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom of Club Intrawest &ndash; Whistler in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Lounge of Club Intrawest &ndash; Whistler in British Columbia, Canada" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
      
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/bronze.gif" alt="" class="level" /> Bronze: Weeks 18 &ndash; 20, 42 &ndash; 46</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>224</td>
                    <td>160</td>
                    <td>448</td>
                    <td>2,016</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>288</td>
                    <td>224</td>
                    <td>608</td>
                    <td>2,464</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 17, 21, 22, 37 &ndash; 40</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>416</td>
                    <td>256</td>
                    <td>768</td>
                    <td>3,136</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>512</td>
                    <td>384</td>
                    <td>1,088</td>
                    <td>4,352</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 23, 24</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>480</td>
                    <td>320</td>
                    <td>960</td>
                    <td>3,840</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>672</td>
                    <td>512</td>
                    <td>1,440</td>
                    <td>5,760</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 6, 8 &ndash; 10, 13 &ndash; 16, 25 &ndash; 35, 47 &ndash; 50</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>544</td>
                    <td>384</td>
                    <td>1,280</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>832</td>
                    <td>576</td>
                    <td>1,664</td>
                    <td>6,720</td>
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
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Silver / Bronze: Week 41</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>416/224</td>
                    <td>160</td>
                    <td>448</td>
                    <td>2,016</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>512/288</td>
                    <td>224</td>
                    <td>608</td>
                    <td>2,688</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Platinum / Silver: Week 36</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>544/416</td>
                    <td>256</td>
                    <td>768</td>
                    <td>3,264</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>832/512</td>
                    <td>384</td>
                    <td>1,088</td>
                    <td>4,672</td>
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
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Holiday / Platinum: Weeks 7, 11, 12, 51, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>928</td>
                    <td>928</td>
                    <td>1,280</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,280</td>
                    <td>1,280</td>
                    <td>1,664</td>
                    <td>9,728</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>クラブ・イントラウエスト – ウィスラー</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>カナダ、ブリティッシュコロンビア州ウィスラー</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Whistler</h1>
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
      <h2>Whistler, British Columbia, Canada</h2>
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
          <address>4580 Chateau Blvd, Whistler, British Columbia, Canada</address>
          <p>北米随一の規模を誇るウィスラーは、ブラッコム山とウィスラー山の２つの山からなる大型スキーリゾートです。世界中のスキーヤーを惹きつける多彩なコースを完備したゲレンデに、壮大なフェアウェイを誇るチャンピオンシップコースのゴルフ場。美しく澄んだ湖での遊泳や、野生動物や高山植物とのふれあいで貴重な体験をした後は、素朴さと優雅さを兼備した上品なスキーロッジでお寛ぎください。活気ある街の中心部では、買い物や華やかなナイトライフを満喫いただけます。贅沢な食事もお見逃しなく。バンクーバーから景色の美しいシートゥースカイ・ハイウェイを通って約2時間のドライブで到着します。他に類を見ないバケーションをお楽しみください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機、リビングルームにガス式暖炉、</li>
            <li>ジャグジー付きのマスターバスルーム完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>年間を通して利用可能な大人向け屋外温水プールと</li>
            <li>2つのジャグジー</li>
            <li>年間を通して利用可能な家族向け屋外温水プール、</li>
            <li>ウォータースライダーとジャグジー</li>
            <li>ユーカリプスの蒸し風呂</li>
            <li>映画館</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>18年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 604-938-3030</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>4580 Chateau Blvd, Whistler, British Columbia, Canada</address>
          <p>In the center of one of North America's most celebrated ski destinations, this magnificent resort blends rustic elegance with ski lodge chic. People from all over the world descend here to ski Whistler's unparalleled slopes, golf its spectacular fairways and swim its crystalline lakes. Outdoor adventures bring sightings of deer, bears and other local wildlife, while at the heart of it all is a vibrant village with shopping, elegant dining and electrifying nightlife. Visitors enjoy a perfect mix of world-class entertainment and natural splendor. Whistler is a spectacular two-hour drive from beautiful Vancouver, British Columbia, along the Sea to Sky highway.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom suites with private balconies</li>
            <li>Each suite features fully equipped kitchen, gas fireplace in living room, whirlpool tub in master bedroom, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Adult environment has outdoor heated swimming pool and two hot tubs, open year round</li>
            <li>Mountain Beach family environment has outdoor heated swimming pool with waterslide and hot tub, open year round</li>
            <li>Eucalyptus steam room</li>
            <li>Movie theater</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 604-938-3030</p>
          
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
	  getMap(50.1178019, -122.9454237, 14);
    });
  </script>

</body>
</html>