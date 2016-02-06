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
  <meta name="description" content="Grand Pacific Palisades Resort treats visitors to luxurious furnishings, extensive on-site amenities and close proximity to Southern California's most popular attractions." />
  <title>Grand Pacific Palisades Resort in Carlsbad, California</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Grand Pacific Palisades Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Bedroom of Grand Pacific Palisades Resort in Carlsbad, California" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Pool of Grand Pacific Palisades Resort in Carlsbad, California" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 〜 21週, 43 〜 50週</th>
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
                    <td>1 ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プレミア</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 22 〜 42週, 51 〜 52週</th>
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
                    <td>1 ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プレミア</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・プラス</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 21, 43 &ndash; 50</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 22 &ndash; 42, 51 &ndash; 52</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
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
        <h1>グランド・パシフィック・パラセイド・リゾート</h1>
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
      <h2>アメリカ、カリフォルニア州カールスバッド</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Grand Pacific Palisades Resort</h1>
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
      <h2>Carlsbad, California</h2>
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
          <address>5805 Armada Dr, Carlsbad, CA 92008</address>
          <p>太平洋とカールズバッド・フラワー・フィールドが織り成す色彩豊かな景色。海を臨む美しい山あいに位置する、グランド・パシフィック・パラセイド・リゾートから、目の覚めるような眺望をお楽しみいただけます。贅沢で充実した設備が整い、カリフォルニア南部の人気スポットにも、気軽にお出かけいただけます。その美しさで有名なサンセットや、どこまでも続く広大な砂浜、世界有数のゴルフ場、美味しい食事も見逃せません。海辺の街、カールズバッドは、ゆったりした散策にもぴったりです。さらに、レゴランド®・カリフォルニア・リゾートもすぐ近くにあります。ご家族揃って思い出に残る、カリフォルニアの素晴らしいバケーションをお過ごしください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～3ベッドルーム・スイート（バルコニー付き）</li>
            <li>マスターバスルーム完備</li>
            <li>フルキッチン完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（有料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つのプール、3つのジャグジー、噴水による水遊び場</li>
            <li>カール・ストラウス・ブルワリー・レストラン</li>
            <li>お子様向けアクティビティーとレクリエーション･プログラム</li>
            <li>マッサージ・セラピスト（有料）</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>15年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-827-3200</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>5805 Armada Dr, Carlsbad, CA 92008</address>
          <p>This exquisite resort offers breathtaking views of both the Pacific Ocean and the Carlsbad Flower Fields, a display of multi-colored horticultural grandeur. Poised atop a lushly landscaped ridge overlooking the sea, Grand Pacific Palisades Resort treats visitors to luxurious furnishings, extensive on-site amenities and close proximity to Southern California's most popular attractions. Guests indulge in legendary sunsets, miles of sandy beaches, world-class golf, fine dining and peaceful strolls in the charming seaside village of Carlsbad. With LEGOLAND&reg; California Resort just steps away, this spectacular setting delivers an unforgettable California vacation for the entire family.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Luxurious 1-, 2- and 3-bedroom suites with private patios or balconies</li>
            <li>Master bath in all suites</li>
            <li>Each suite features fully equipped kitchen</li>
            <li>High-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 swimming pools, 3 spas, interactive water play park</li>
            <li>Karl Strauss Brewery Restaurant</li>
            <li>Children's activities and recreation programs</li>
            <li>On-site massage therapists</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 760-827-3200</p>
          
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
            <a href="../carlsbad-seapointe/">
              <div class="col-xs-4">
                <img src="../img/seapointe-t.jpg" alt="Carlsbad Seapointe Resort" />
              </div>
              <div class="col-xs-8">
                Carlsbad Seapointe Resort
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../club-intrawest-palm-desert/">
              <div class="col-xs-4">
                <img src="../img/palmdesert-t.jpg" alt="Club Intrawest &ndash; Palm Desert" />
              </div>
              <div class="col-xs-8">
                Club Intrawest &ndash; Palm Desert
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../hgvc-marbrisa/">
              <div class="col-xs-4">
                <img src="../img/marbrisa-t.jpg" alt="Hilton Grand Vacations Club at MarBrisa" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at MarBrisa
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
	  getMap(33.125003, -117.315112, 14);
    });
  </script>

</body>
</html>