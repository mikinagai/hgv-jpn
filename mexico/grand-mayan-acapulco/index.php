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
  <meta name="description" content="Experience the warmth of the Mexican sun on your face and unwind in the Pacific breeze at The Grand Mayan Acapulco luxury resort as you enter a world of extravagance and excitement." />
  <title>Grand Mayan Resort &ndash; Acapulco in Mexico</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Grand Mayan &ndash; Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior of the Grand Mayan &ndash; Acapulco in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Exterior of the Grand Mayan &ndash; Acapulco in Mexico" />
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
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="2"><img src="../../img/platinum.gif" alt="" class="level"> 1 &ndash; 52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>4,800</td>
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
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="2"><img src="../../img/platinum.gif" alt="" class="level"> Weeks 1 &ndash; 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
        <h1>グランド・マヤ・アカプルコ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
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
        <h1>Grand Mayan &ndash; Acapulco</h1>
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
          <address>Av. Costera de las Palmas No. 1121, Acapulco, Guerrero, Pacific Coast, Mexico</address>
          <p>終りのないエキサイトメントと贅沢な世界、グランド・マヤ・アカプルコの高級リゾートでメキシコの暖かな日差しを浴び、太平洋からのそよ風をご満喫ください。より優れた顧客サービスとアカプルコの自然の美しさが溶け込んだ素晴らしさにご満足いただけることでしょう。アカプルコで有名な断崖での飛び込み観賞、熱気球に乗ったり、イルカと一緒に泳いだりとアカプルコではありとあらゆることが可能です。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>最高級品に囲まれた生活を提供いたします。快適で美しく洗練されたモダンなデザインは、グランド・マヤの室内にて実感いただけることでしょう。すべての部屋には、洗練されたインテリアが施され、輝く太平洋、または熱帯植物が咲き誇る庭園を一望いただけます。広々としたお部屋は、それぞれ落ち着いた雰囲気を醸し出しています。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ATM機</li>
            <li>ベビーシッター</li>
            <li>レンタカー</li>
            <li>客室清掃</li>
            <li>コマーシャルギャラリー</li>
            <li>インターネット・カフェ</li>
            <li>エンターテイメント・センター</li>
            <li>家族で参加できるアクティビティ</li>
            <li>製氷機</li>
            <li>キッズクラブ</li>
            <li>コインランドリー</li>
            <li>クリーニングサービス</li>
            <li>医療扶助</li>
            <li>両替</li>
            <li>リゾート内シャトルサービス</li>
            <li>ルームサービス</li>
            <li>フロントデスクに金庫</li>
            <li>身障者向けサービス</li>
            <li>日曜日のミサ</li>
            <li>タクシー</li>
            <li>トレインツアー</li>
            <li>旅行会社</li>
            <li>バレー・パーキング</li>
            <li>結婚式などのイベントプランナー</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 5 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: +52-744-469-60-03</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Av. Costera de las Palmas No. 1121, Acapulco, Guerrero, Pacific Coast, Mexico</address>
          <p>Experience the warmth of the Mexican sun on your face and unwind in the Pacific breeze at The Grand Mayan Acapulco luxury resort as you enter a world of extravagance and excitement. Here you will find all of the magnificence and excellent customer service of The Grand Mayan Acapulco luxury resort, steeped in the carefree attitude and natural beauty of Acapulco. Only here can you watch the famous Acapulco cliff divers, ride a hot-air balloon, or swim with dolphins. In Acapulco, anything is possible.</p>
          
          <br />
          
          <h3>Accommodations</h3>
		  <p>Surround yourself with the finest things life has to offer. Comfort, beauty and sleek modern design are the details found in the accommodations at The Grand Mayan. Every room is exquisitely furnished and offers spectacular views of either the sparkling waters of the Pacific, or the exuberant tropical gardens. The interior design of each room offers an atmosphere of distinction and tranquility within spacious areas.</p>
                      
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>ATM machine</li>
            <li>Babysitters</li>
            <li>Car rental</li>
            <li>Cleaners</li>
            <li>Commercial gallery</li>
            <li>Cyber cafe</li>
            <li>Entertainment center</li>
            <li>Family activities</li>
            <li>Ice machines</li>
            <li>Kids' club</li>
            <li>Launderette</li>
            <li>Laundry Services</li>
            <li>Medical assistance</li>
            <li>Money exchange</li>
            <li>On-premise transportation</li>
            <li>Room service</li>
            <li>Safety-deposit box in Front Desk</li>
            <li>Special services for the handicapped</li>
            <li>Sunday mass</li>
            <li>Taxis</li>
            <li>Train tour</li>
            <li>Travel agency</li>
            <li>Valet parking</li>
            <li>Wedding and social-event planners</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 5 p.m.<br />Check Out: 10 a.m.<br />Phone: +52 744 469 60 03</p>
          
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
	  getMap(16.7857793, -99.8090137, 12);
    });
  </script>

</body>
</html>