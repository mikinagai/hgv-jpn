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
  <meta name="description" content="On the southern shores of the Mexican Pacific, Fiesta Americana Villas Acapulco puts guests in the heart of a thriving entertainment and restaurant district. Located on spectacular Condesa Beach, this resort provides a vibrant setting for an unforgettable vacation in Mexico." />
  <title>Fiesta Americana Villas Acapulco in Mexico</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Pool of Fiesta Americana Villas Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of Fiesta Americana Villas Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Bedroom of Fiesta Americana Villas Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Dining Area of Fiesta Americana Villas Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bedroom of Fiesta Americana Villas Acapulco in Mexico" />
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
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level"> ブロンズ: 38 &ndash; 42週</th>
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
                    <td>スタジオ</td>
                    <td>80</td>
                    <td>160</td>
                    <td>800</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 18 &ndash; 26週, 43 &ndash; 45週, 48 &ndash; 50週</th>
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
                    <td>スタジオ</td>
                    <td>110</td>
                    <td>220</td>
                    <td>1,110</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 1 &ndash; 11週, 14 &ndash; 17週, 34 &ndash; 37週, 46週, 47週</th>
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
                    <td>スタジオ</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 12週, 13週, 27 &ndash; 33週, 51週, 52週</th>
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
                    <td>スタジオ</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
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
          <!-- <div class="row">
            <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div>
          </div> -->
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
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level"> Bronze: Weeks 38 &ndash; 42</th>
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
                    <td>80</td>
                    <td>160</td>
                    <td>800</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> Silver: Weeks 18 &ndash; 26, 43 &ndash; 45, 48 &ndash; 50</th>
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
                    <td>110</td>
                    <td>220</td>
                    <td>1,110</td>
                  </tr>
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
          
        </div> 
        
        <br /> 
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> Gold: Weeks 1 &ndash; 11, 14 &ndash; 17, 34 &ndash; 37, 46, 47</th>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: Weeks 12, 13, 27 &ndash; 33, 51, 52</th>
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
        <h1>フィエスタ・アメリカーナ・ヴィラ・アカプルコ</h1>
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
      <h2>メキシコ、太平洋側アカプルコ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Fiesta Americana Villas Acapulco</h1>
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
      <h2>Acapulco Guerrero, Pacific Coast, Mexico</h2>
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
          <address>Av. Costera Miguel Al&Eacute;man 97, Acapulco Guerrero, Pacific Coast, Mexico</address>
          <p>メキシコの南沿岸、コンデサ・ビーチに位置する、フィエスタ・アメリカーナ・ヴィラ・アカプルコ。各種エンターテイメントやレストランも充実しています。温かいおもてなし、素晴らしい施設、豊富なレクリエーションの数々を、心ゆくまでお楽しみください。湾岸地域の温暖な水域と自然のままの海岸線が続くアカプルコは、世界の伝統的な旅行先の１つとして、今もなお多くの人々を惹きつけてやみません。また、華やかなナイトライフ、息を呑むほど美しいビーチ、無限のウォータースポーツにワールドクラスのレストランと、たくさんの魅力に満ち溢れていることでも有名です。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ（調理設備なし）、1～3ベッドルーム・スイート</li>
            <li>各スイートにキッチン完備（オーブンなし）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つのプール</li>
            <li>洗濯機、乾燥機</li>
            <li>フィエスタ・キッズ（お子様向けエンターテイメント・プログラム）</li>
            <li>レストラン、デリ</li>
            <li>スパ（有料）</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>42年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: + 52-744-435-1600</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Av. Costera Miguel Al&Eacute;man 97, Acapulco Guerrero, Pacific Coast, Mexico</address>
          <p>On the southern shores of the Mexican Pacific, Fiesta Americana Villas Acapulco puts guests in the heart of a thriving entertainment and restaurant district. Located on spectacular Condesa Beach, this resort provides a vibrant setting for an unforgettable vacation in Mexico. Visitors enjoy signature personal service as well as multiple on-site amenities and recreation activities. The region's temperate bay waters and pristine shorelines continue to delight visitors, making Acapulco one of the world's legendary travel destinations. The area is also renowned for its exciting nightlife, stunning beaches, endless water sports and world-class restaurants.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Studios and 1- and 2-bedroom suites</li>
            <li>Each suite features well-equipped, ovenless kitchen</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 swimming pools</li>
            <li>Fiesta Kids entertainment club for children</li>
            <li>On-property restaurants, deli</li>
            <li>Spa (fees apply)</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 11 a.m.<br />Phone: +52 744 435 1600</p>
          
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
	  getMap(16.85614, -99.866529, 15);
    });
  </script>

</body>
</html>