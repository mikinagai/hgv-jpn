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
  <meta name="description" content="Located in the heart of the Yucatan Peninsula jungle, this resort combines luxury and comfort amid spectacular natural surroundings. From the privacy of your bungalow, hear the sound of wild fauna as you immerse yourself in the tranquil tropical scenery." />
  <title>The Explorean Kohunlich in Mexico</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Explorean Kohunlich in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior of the Explorean Kohunlich in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Exterior of the Explorean Kohunlich in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Exterior of the Explorean Kohunlich in Mexico" />
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 1 &ndash; 11週, 15 &ndash; 26週, 34 &ndash; 50週</th>
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
                    <td>バンガロー</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
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
                    <td>バンガロー</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level"> Gold: Weeks 1 &ndash; 11, 15 &ndash; 26, 34 &ndash; 50</th>
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
                    <td>Bungalow</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
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
                    <td>Bungalow</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
        <h1>ザ・エクスプロリアン・コフンリッチ</h1>
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
      <h2>メキシコ、ユカタン半島チェトゥマル</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>The Explorean Kohunlich</h1>
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
      <h2>Chetumal, Yucatan Peninsula, Mexico</h2>
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
          <address>KM. 5.6 Desviaci&Oacute;n A Ruinas De Kohunlich, Chetumal, Yucatan Peninsula, Mexico</address>
          <p>ユカタン半島のジャングルに位置するザ・エクスプロリアン・コフンリッチでは素晴らしい自然環境の下、贅沢で快適な最高のサービスを提供します。プライベートなバンガローから、のどかな熱帯風景に耳を澄ますと、野生動物の鳴き声が聞こえてきます。リゾート内のレストランで美味しい地元の料理をご堪能ください。付近にはコフンリッチ遺跡もあり、心からのリラクゼーションはもちろん、自転車ツアー、ハイキング、セーリング、カヤック、ラッペリングといった、ユニークで爽快な思い出に残るアウトドアのオプショナルツアーも用意されています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>ダブルサイズベッド２台またはキングサイズベッド１台、ソファ、バスルーム、小ポーチ、ハンモックのあるプライベートバンガロー</li>
            <li>空調設備</li>
            <li>テレビはありません。（自然環境をお楽しみください。）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>プールとジャグジー</li>
            <li>レストランとロビー・バー</li>
            <li>ブティックとスパ（有料）</li>
            <li>洗濯機、乾燥機</li>
            <li>加盟リゾート</li>
            <li>13年間の実績</li>
            <li>予約制限あり</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: +52-55-52-01-83500</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>KM. 5.6 Desviaci&Oacute;n A Ruinas De Kohunlich, Chetumal, Yucatan Peninsula, Mexico</address>
          <p>Located in the heart of the Yucatan Peninsula jungle, The Explorean Kohunlich combines luxury, comfort and superb service amid spectacular natural surroundings. From the privacy of your bungalow, hear the sound of wild fauna as you immerse yourself in the tranquil tropical scenery. At mealtimes, indulge in delicious regional cuisine at the resort's on-site restaurant. Secluded near the archaeological site of Kohunlich, this exclusive getaway delivers complete relaxation as well as the option to participate in uniquely invigorating and unforgettable excursions into the wilderness, including bike tours, hiking, sailing, kayaking and rappelling.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Private bungalows with two double beds or one king bed, reading sofa, bathroom, small porch and hammock</li>
            <li>Air conditioning</li>
            <li>No television (to inspire more complete immersion in the natural surroundings)</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Swimming pool and Jacuzzi</li>
            <li>On-property restaurant, lobby bar</li>
            <li>Spa and boutique</li>
            <li>Laundry facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 11 a.m.<br />Phone: +52 55 52 01 8350</p>
          
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
	  getMap(18.4305, -88.8119, 9);
    });
  </script>

</body>
</html>