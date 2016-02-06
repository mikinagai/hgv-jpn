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
  <meta name="description" content="Fiesta Americana Villas Cancun delivers all the standards of excellence that guests have come to expect from the Fiesta Americana brand. This cozy resort offers a welcome haven of hospitality, ideal for those who prefer a relaxing and calming vacation experience." />
  <title>Fiesta Americana Villas Cancun in Mexico</title>
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
          
        </div>
        <!--span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span-->
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
        
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Studio Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Studio Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
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
          
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="One-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="One-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
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
          
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-1-t.jpg" alt="Two-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
              <p class="large"><img src="floorplans/two-1.jpg" alt="Two-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
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
              <p class="small"><img src="floorplans/two-2-t.jpg" alt="Two-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
              <p class="large"><img src="floorplans/two-2.jpg" alt="Two-Bedroom Floor Plan at Fiesta Americana Villas Acapulco in Mexico" /></p>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 19 &ndash; 25週、35 &ndash; 39週</th>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 1 &ndash; 3週、26 &ndash; 34週、40 &ndash; 50週</th>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 4 &ndash; 18週、51週、52週</th>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level"> Silver: Weeks 19 &ndash; 25, 35 &ndash; 39</th>
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
          
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> Gold: Weeks 1 &ndash; 3, 26 &ndash; 34, 40 &ndash; 50</th>
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
          
        </div> 
        
        <br /> 
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: Weeks 4 &ndash; 18, 51, 52</th>
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
        <h1>フィエスタ・アメリカーナ・ヴィラ・カンクーン</h1>
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
      <h2>メキシコ、メキシコ湾側カンクーン</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Fiesta Americana Villas Cancun</h1>
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
      <h2>Cancun, Gulf of Mexico, Mexico</h2>
    </div>
    
      <?php
		}
	  ?>
    
    <div id="subcontent" class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder-container">
            <!--div id="placeholder"></div-->
          </div>
        </div>
      </div>
    
      <div class="row">
      
        <div class="col-sm-8 main-column">
        
          <?php
			if($lang == "jpn"){
		  ?>
          
          <h3>概要</h3>
          <address>Bulevar Kukulcan Km. 8.5, Lote 3 Z.H., Cancun, Gulf of Mexico, Mexico</address>
          <p>色鮮やかに塗り分けられた壁が印象的なフィエスタ・アメリカーナ・ヴィラ・カンクーンは、伝統的なメキシコ風建築を特徴としています。フィエスタ・アメリカーナならではの贅沢なリゾートで、温かいおもてなしと、カリブ海の美しい眺望に是非ご期待ください。リラックスした休暇だけでなく、充実した施設でお楽しみいただくにも最適の環境です。家族揃って思い出に残るバケーションをお過ごしください。眩しく輝く紺碧の海と砂が創り出す美しい自然の造形美を堪能しながら、一流の食事、ショッピング、ナイトライフを満喫するにも最高の立地です。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ（調理設備なし）、1～2ベッドルーム・スイート</li>
            <li>各スイートにキッチン完備（オーブンなし）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>温水プール</li>
            <li>洗濯機、乾燥機</li>
            <li>フィエスタ・キッズ（お子様向けエンターテイメント・プログラム）</li>
            <li>レストラン、デリ</li>
            <li>スパ（有料）</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>31年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: + 52-998-881-1400</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Bulevar Kukulcan Km. 8.5, Lote 3 Z.H., Cancun, Gulf of Mexico, Mexico</address>
          <p>With its traditional Mexican architecture, Fiesta Americana Villas Cancun delivers all the standards of excellence that guests have come to expect from the Fiesta Americana brand. This cozy resort offers a welcome haven of hospitality, ideal for those who prefer a relaxing and calming vacation experience. With a breathtaking view of the Caribbean Sea, Fiesta Americana Villas Cancun treats visitors to a host of amenities and services, all designed to create unforgettable family vacations. At this resort, the sand and sea create a fusion of splendor and charm for the senses, while upscale shopping, dining and nightlife are just minutes away.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Studios and 1- and 2-bedroom suites</li>
            <li>Each suite features well-equipped, ovenless kitchen</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated swimming pool</li>
            <li>Fiesta Kids entertainment club for children</li>
            <li>On-property restaurant, deli</li>
            <li>Spa (fees apply)</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 11 a.m.<br />Phone: +52 998 881 1400</p>
          
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
	  getMap(21.138748, -86.751572, 15);
    });
  </script>

</body>
</html>