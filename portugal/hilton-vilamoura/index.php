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
  <meta name="description" content="This resort is designed in a contemporary style reflecting the natural colors of the surrounding Algarve region. This magnificent property is encircled by beautifully landscaped gardens and gold courses, spectacular pools and cascading waterfalls." />
  <title>Hilton Vilamoura Vacation Club in Vilamoura, Portugal</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Pool of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Exterior of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Lobby of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The-Bedroom of Hilton Vilamoura Vacation Club in Vilamoura, Portugal" />
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
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 1 &ndash; 6週、46 &ndash; 50週</th>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 7 &ndash; 13週、16 &ndash; 19週、44週、45週</th>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 14週、15週、20 &ndash; 43週、51週、52週</th>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> Silver: Weeks 1 &ndash; 6, 46 &ndash; 50</th>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> Gold: Weeks 7 &ndash; 13, 16 &ndash; 19, 44, 45</th>
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
          
        </div> 
        
        <br /> 
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: Weeks 14, 15, 20 &ndash; 43, 51, 52</th>
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
        <h1>ヒルトン・ヴィラモウラ・バケーション・クラブ</h1>
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
      <h2>ポルトガル、ヴィラモウラ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Vilamoura Vacation Club</h1>
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
      <h2>Vilamoura, Portugal</h2>
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
          <address>R. Da Torre D'&Aacute;gua, Lote 4.11.1B, 8125-615, Vilamoura, Portugal</address>
          <p>自然の色合いを生かした現代風のデザイン建築が、ポルトガル南部アルガルヴェの賑やかな港町に見事に調和しています。壮大なヒルトン・ヴィラモウラ・アスカスカタス・ゴルフリゾート＆スパに隣接するこのリゾートには、手入れの行き届いた庭園、ゴルフコース、華やかなプール、そして美しい滝といった贅沢な設備の数々が施されています。これらの充実した施設に加え、アルガルヴェ地方最大と称される豪華なスパも、是非ご利用ください。ゆったりとした優美な客室は、寛ぎを追求される方にとっては最適の空間と言えるでしょう。一歩足を踏み出せば、ワールドクラスのショッピング、ナイトライフ、ウォータースポーツと、楽しみは尽きません。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート（バルコニー付き）</li>
            <li>キッチン（冷凍庫なし）、洗濯機、乾燥機、</li>
            <li>浴槽付きのマスターバスルーム完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（有料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>噴水による水遊び場、スパを備えた5つの屋外プールと</li>
            <li>1つの屋内プール</li>
            <li>スパ（有料）</li>
            <li>レストラン</li>
            <li>お子様向けインストラクター付きレクリエーション･プログラム（季節限定）</li>
            <li>ゴルフショップとゴルフシミュレーター</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>6年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: + 351 289 304 000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>R. Da Torre D'&Aacute;gua, Lote 4.11.1B, 8125-615, Vilamoura, Portugal</address>
          <p>The Hilton Vilamoura Vacation Club is designed in a contemporary style reflecting the natural colors of the surrounding Algarve region, a thriving marina town in southern Portugal. Adjoining the magnificent Hilton Vilamoura As Cascatas Golf Resort and Spa, this magnificent property is encircled by beautifully landscaped gardens and golf courses, spectacular pools and cascading waterfalls. Luxurious suites offer guests the space and freedom to vacation in comfort with all the amenities of a grand Hilton hotel at its doorstep, including the largest and most luxurious spa in Algarve. Just minutes away are world-class shopping, nightlife and water sports.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious 1- and 2-bedroom suites with balconies</li>
            <li>Each suite features well-equipped kitchen (no freezer unit), washer and dryer, master bath with soaking tub</li>
            <li>High-speed, wireless Internet access (fees apply)</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>5 outdoor swimming pools with interactive water-play features, 1 covered swimming pool</li>
            <li>Full-service spa (fees apply)</li>
            <li>On-property restaurants</li>
            <li>Kids' Club supervised recreation program</li>
            <li>Golf shop and golf simulator</li>
            <li>Fitness room</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: +351 289 304 000</p>
          
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
	  getMap(37.0716619, -8.0940881, 15);
    });
  </script>

</body>
</html>