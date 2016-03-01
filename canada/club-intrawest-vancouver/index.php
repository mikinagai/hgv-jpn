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
  <title>Club Intrawest &ndash; Vancouver by Hilton Grand Vacations in British Columbia, Canada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="Club Intrawest &ndash; Vancouver in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of Club Intrawest &ndash; Vancouver in British Columbia, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="Club Intrawest &ndash; Vancouver in British Columbia, Canada" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
      
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 6, 42 &ndash; 46, 48, 49</th>
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
                    <td>Studio</td>
                    <td>544</td>
                    <td>448</td>
                    <td>672</td>
                    <td>3,776</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>672</td>
                    <td>544</td>
                    <td>832</td>
                    <td>4,640</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash; 25, 37 &ndash; 41</th>
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
                    <td>Studio</td>
                    <td>608</td>
                    <td>512</td>
                    <td>800</td>
                    <td>4,352</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>736</td>
                    <td>640</td>
                    <td>992</td>
                    <td>5,376</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Gold / Platinum: Week 47</th>
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
                    <td>Studio</td>
                    <td>544/608</td>
                    <td>448/448/512</td>
                    <td>800</td>
                    <td>4,160</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>672/736</td>
                    <td>544/544/640</td>
                    <td>992</td>
                    <td>5,120</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Holiday / Platinum: Week 36</th>
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
                    <td>Studio</td>
                    <td>640/608</td>
                    <td>512</td>
                    <td>800</td>
                    <td>4,384</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>800/736</td>
                    <td>640</td>
                    <td>992</td>
                    <td>5,440</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Gold / Holiday: Week 50</th>
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
                    <td>Studio</td>
                    <td>544</td>
                    <td>448</td>
                    <td>1,056</td>
                    <td>4,544</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>672</td>
                    <td>544</td>
                    <td>1,280</td>
                    <td>5,536</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level" /> Holiday: Weeks 26 &ndash; 35, 51, 52</th>
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
                    <td>Studio</td>
                    <td>640</td>
                    <td>640</td>
                    <td>1,056</td>
                    <td>5,312</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>800</td>
                    <td>800</td>
                    <td>1,280</td>
                    <td>6,560</td>
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
        <h1>クラブ・イントラウエスト – バンクーバー</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>カナダ、ブリティッシュコロンビア州バンクーバー</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Vancouver</h1>
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
      <h2>Vancouver, British Columbia, Canada</h2>
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
          <address>1001 Hornby St, Vancouver, British Columbia, Canada</address>
          <p>バンクーバーは世界で最も自然な壮観で、コスモポリタンな都市のひとつです。このユニークな都市リゾートは、床から天井までの窓が配され、港、街そして山々の息を呑むような絶景を提供しています。バンクーバーのユニークな西海岸の文化は、自然の素晴らしさとシックなスタイル、アウトドア・アクティビティーとメトロポリタンのエンターテイメントが調和しています。多くの劇場やコンサートホールで生のパフォーマンスを見たり、国際的なダイニングを堪能したり、ウィンドウショッピング、またはダウンタウンを海岸線に沿ってハイキングをお楽しみいただけます。ウィスラー、ビクトリアそしてソルト・スプリング・アイランドといった人気の観光地へも車やフェリーにて簡単に足を延ばせます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1ベッドルーム・スイート</li>
            <li>スイートにミニキッチン</li>
            <li>スイートにテレビ、CDプレーヤー完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋内温水プールとホットタブ</li>
            <li>ヘルスクラブとウェルネス・スパ</li>
            <li>レストランとバー</li>
            <li>ビジネスセンター</li>
            <li>ラウンジ</li>
            <li>ギフトショップ</li>
            <li>加盟リゾート</li>
            <li>11年間の実績</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 604-893-7444</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>1001 Hornby St, Vancouver, British Columbia, Canada</address>
          <p>Vancouver is one of the world’s most naturally spectacular and cosmopolitan cities. This unique urban resort offers floor-to-ceiling windows providing breathtaking panoramic views of the harbor, city and mountains. Vancouver’s unique west coast culture blends chic style with natural splendor, metropolitan entertainment with outdoor adventure. Catch a live performance at one of the many theatres and concert halls, indulge in international dining, explore an array of retail shops, or simply enjoy a hike along the downtown coastline. Popular destinations including Whistler, Victoria and Salt Spring Island are easily accessible by car or ferry.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious studios and 1-bedroom suites</li>
            <li>Each suite features a mini-kitchen</li>
            <li>TV, CD player in each suite</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Indoor heated pool and hot tubs</li>
            <li>Health Club and Wellness Spa</li>
            <li>On-site Restaurant and Bar</li>
            <li>Business Center</li>
            <li>On-site laundry facilities (fees apply)</li>
            <li>Lounge</li>
            <li>Gift Shop</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 604-893-7444</p>
          
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
	  getMap(49.2804818, -123.1250537, 14);
    });
  </script>

</body>
</html>