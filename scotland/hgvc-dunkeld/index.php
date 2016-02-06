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
  <meta name="description" content="Built in the Edwardian period for the seventh Duke of Atholl, Hilton Dunkeld is located in the heart of a 280-acre estate of moor and forest in Perthshire, Scotland. The resort features its own private stretch of the River Tay, with superb salmon and trout fishing year-round." />
  <title>Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Patio at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Living Area at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The-Bedroom at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The-Bedroom at Hilton Grand Vacations Club Resort at Dunkeld in Perthshire, Scotland" />
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
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level" /> ブロンズ: 1 &ndash; 4週、48 &ndash; 50週</th>
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
                    <td>2ベッドルーム</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 5週、6週、44 &ndash; 47週</th>
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
                    <td>2ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 7 &ndash; 13週、16 &ndash; 20週</th>
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
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 14週、15週、21 &ndash; 43週、51週、52週</th>
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
                    <td>2ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level" /> Bronze: Weeks 1 &ndash; 4, 48 &ndash; 50</th>
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
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 5, 6, 44 &ndash; 47</th>
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
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 7 &ndash; 13, 16 &ndash; 20</th>
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
                    <td>3-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 14, 15, 21 &ndash; 43, 51, 52</th>
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
                    <td>3-Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・ダンケルド</h1>
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
      <h2>スコットランド、パースシャー</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at Dunkeld</h1>
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
      <h2>Dunkeld, Perthshire, Scotland</h2>
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
          <address>Dunkeld, Perthshire PH8 0HX, Scotland</address>
          <p>280エーカー（約1.1km2）の美しい森に囲まれた、ヒルトン・ダンケルド。その歴史はエドワード朝にさかのぼり、当時の第7代アソール公爵のために建築されました。敷地内を流れるテイ河で、年間を通じてサケ・マス釣りをお楽しみいただけるだけでなく、ヨーロッパ最高水準の射撃訓練場など、各種アウトドアの環境も抜群です。ロッジに隣接するヒルトン・ダンケルド・ホテルでも、レストラン、カクテルバーなどの各種施設と行き届いたサービスをご利用いただけます。スコットランドの見事な大自然と、寛ぎの時間をご堪能ください。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>2～3ベッドルーム・ロッジ（サンテラス付き）</li>
            <li>フルキッチン完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋内プール、ジャグジー、サウナ、サンルーム</li>
            <li>美容セラピー･センター</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>27年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 5 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: +44 (0) 1350 727243</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Dunkeld, Perthshire PH8 0HX, Scotland</address>
          <p>Built in the Edwardian period for the seventh Duke of Atholl, Hilton Dunkeld is located in the heart of a 280-acre estate of moor and forest in Perthshire, Scotland. The resort features its own private stretch of the River Tay, with superb salmon and trout fishing year-round. The expansive estate grounds also feature one of Europe's finest shooting academies and an abundance of additional outdoor adventures. The superbly appointed lodges are adjacent to the four-star Hilton Dunkeld hotel, which features a renowned restaurant, cocktail bar and extensive amenities and services. Indulge in a peaceful, private retreat amid the unrivaled beauty of the Scottish highlands.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 2- and 3-bedroom lodges with private sun terraces</li>
            <li>Each lodge features fully equipped kitchen</li>
            <li>Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Indoor swimming pool, whirlpool spa, sauna, solarium</li>
            <li>Beauty therapy center</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 5 p.m.<br />Check Out: 10 a.m.<br />Phone: +44 (0) 1350 727243</p>
          
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
	  getMap(56.564622, -3.610923, 14);
    });
  </script>

</body>
</html>