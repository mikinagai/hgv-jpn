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
  <meta name="description" content="The sleek, 52-story Elara resort boasts a premier Center Strip location. This property offers adjoining access to the Miracle Mile and the Planet Hollywood Casino." />
  <title>Elara Resort, a Hilton Grand Vacations Club in Las Vegas, Nevada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The-Bedroom at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Living and Dining Area at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Kitchen and Dining Area at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Kitchen at Elara Resort in Las Vegas, Nevada" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Pool at Elara Resort in Las Vegas, Nevada" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、23 &ndash; 34週、46 &ndash; 50週</th>
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
                    <td>スタジオ</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>400</td>
                    <td>800</td>
                    <td>4,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド・プラス</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド</td>
                    <td>660</td>
                    <td>1,320</td>
                    <td>6,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド・プラス</td>
                    <td>800</td>
                    <td>1,600</td>
                    <td>8,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; スタジオ</td>
                    <td>740</td>
                    <td>1,480</td>
                    <td>7,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; スタジオ</td>
                    <td>950</td>
                    <td>1,900</td>
                    <td>9,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; 1ベッドルーム</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; 1ベッドルーム</td>
                    <td>1,100</td>
                    <td>2,200</td>
                    <td>11,000</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム</td>
                    <td>1,080</td>
                    <td>2,160</td>
                    <td>10,800</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>1,350</td>
                    <td>2,700</td>
                    <td>13,500</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 22週、35 &ndash; 45週、51週、52週</th>
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
                    <td>スタジオ</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド・プラス</td>
                    <td>780</td>
                    <td>1,560</td>
                    <td>7,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド・プラス</td>
                    <td>1,140</td>
                    <td>2,280</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; スタジオ</td>
                    <td>1,060</td>
                    <td>2,120</td>
                    <td>10,600</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; スタジオ</td>
                    <td>1,310</td>
                    <td>2,620</td>
                    <td>13,100</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; 1ベッドルーム</td>
                    <td>1,320</td>
                    <td>2,640</td>
                    <td>13,200</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; 1ベッドルーム</td>
                    <td>1,510</td>
                    <td>3,020</td>
                    <td>15,100</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム</td>
                    <td>1,540</td>
                    <td>3,080</td>
                    <td>15,400</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>1,860</td>
                    <td>3,720</td>
                    <td>18,600</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 6, 23 &ndash; 34, 46 &ndash; 50</th>
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
                    <td>Studio Plus</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>400</td>
                    <td>800</td>
                    <td>4,000</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Grand</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Grand Plus</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Grand</td>
                    <td>660</td>
                    <td>1,320</td>
                    <td>6,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Grand Plus</td>
                    <td>800</td>
                    <td>1,600</td>
                    <td>8,000</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom w/ Studio</td>
                    <td>740</td>
                    <td>1,480</td>
                    <td>7,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus w/ Studio</td>
                    <td>950</td>
                    <td>1,900</td>
                    <td>9,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom w/ 1-Bedroom</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus w/ 1-Bedroom</td>
                    <td>1,100</td>
                    <td>2,200</td>
                    <td>11,000</td>
                  </tr>
                  <tr>
                    <td>4-Bedroom</td>
                    <td>1,080</td>
                    <td>2,160</td>
                    <td>10,800</td>
                  </tr>
                  <tr>
                    <td>4-Bedroom Plus</td>
                    <td>1,350</td>
                    <td>2,700</td>
                    <td>13,500</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash; 22, 35 &ndash; 45, 51, 52</th>
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
                    <td>Studio Plus</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Grand</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Grand Plus</td>
                    <td>780</td>
                    <td>1,560</td>
                    <td>7,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Grand</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Grand Plus</td>
                    <td>1,140</td>
                    <td>2,280</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom w/ Studio</td>
                    <td>1,060</td>
                    <td>2,120</td>
                    <td>10,600</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus w/ Studio</td>
                    <td>1,310</td>
                    <td>2,620</td>
                    <td>13,100</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom w/ 1-Bedroom</td>
                    <td>1,320</td>
                    <td>2,640</td>
                    <td>13,200</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus w/ 1-Bedroom</td>
                    <td>1,510</td>
                    <td>3,020</td>
                    <td>15,100</td>
                  </tr>
                  <tr>
                    <td>4-Bedroom</td>
                    <td>1,540</td>
                    <td>3,080</td>
                    <td>15,400</td>
                  </tr>
                  <tr>
                    <td>4-Bedroom Plus</td>
                    <td>1,860</td>
                    <td>3,720</td>
                    <td>18,600</td>
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
        <h1>エララ・ア・ヒルトン・グランド・バケーションズ・クラブ</h1>
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
      <h2>アメリカ、ネバダ州ラスベガス</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Elara, a Hilton Grand Vacations Club</h1>
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
          <address>80 E Harmon Ave, Las Vegas, NV 89109</address>
          <p>洗練された52階建てのエララは、ストリップ中心のロケーションを誇っています。この壮大なリゾートは、ミラクルマイル・ショップスに直結し、有名なカジノ、9つのレストラン、マンダラ・スパがあるプラネット・ハリウッド・リゾート・アンド・カジノ・コンプレックスと隣接しています。光瞬くラスベガスの理想的なロケーションにありながら、壮観な街の景色、ストリップ、山や砂漠を一望できる広々としたモダンな空間で安らぎを皆様に提供します。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>エキゾチックな屋外プールとジャグジー、カバナとプールサイドバー（季節限定）</li>
            <li>ロビーバーとラウンジ</li>
            <li>フィットネス施設</li>
            <li>ビジネスセンター</li>
            <li>会議室</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>加盟リゾート</li>
            <li>無料駐車場</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4:00 p.m.<br />チェックアウト: 10:00 a.m.<br />電話番号: 702-669-6700</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>80 E Harmon Ave, Las Vegas, NV 89109</address>
          <p>The sleek, 52-story Elara resort boasts a premier Center Strip location. This spectacular property offers adjoining access to the Miracle Mile, which has 21 restaurants and bars and 100 retail shops, and is adjacent to the Planet Hollywood Resort &amp; Casino complex featuring a renowned casino, nine restaurants and the Mandara Spa. Elara enjoys an ideal location in the midst of Las Vegas' full splendor, while offering comfortable luxury in airy, contemporary spaces with the magnificent views of the city, the Strip, the mountains and the desert. </p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious studios, plus 1-, 2-, 3- and 4-bedroom suites</li>
            <li>Studios and 1-bedroom suites feature kitchenettes; larger suites include well-equipped kitchens</li>
            <li>High speed, wireless Internet access (fees may apply)</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Exotic outdoor swimming pool with spa tubs, cabanas and a seasonal poolside bar and grill</li>
            <li>Lobby Bar &amp; Lounge</li>
            <li>Exercise Facilities</li>
            <li>Business Center</li>
            <li>Meeting Rooms</li>
            <li>Starbucks in lobby open 24 hours a day</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 702-669-6700</p>
          
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
            <a href="../hgvc-flamingo/">
              <div class="col-xs-4">
                <img src="../img/flamingo-t.jpg" alt="Hilton Grand Vacations Club at the Flamingo" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at the Flamingo
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
	  getMap(36.1084415, -115.1691841, 14);
    });
  </script>

</body>
</html>