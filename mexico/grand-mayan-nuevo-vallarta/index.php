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
  <meta name="description" content="Experience the warmth of the Mexican sun on your face and unwind in the Pacific breeze at The Grand Mayan Nuevo Vallarta luxury resort as you enter a world of indulgence and excitement." />
  <title>Grand Mayan Resort &ndash; Nuevo Vallarta in Mexico</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Grand Mayan &ndash; Nuevo Vallarta in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior of the Grand Mayan &ndash; Nuevo Vallarta in Mexico" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Exterior of the Grand Mayan &ndash; Nuevo Vallarta in Mexico" />
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
        <h1>グランド・マヤ・ヌエボ・バヤルタ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>メキシコ、太平洋側ヌエボ・バヤルタ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Grand Mayan &ndash; Nuevo Vallarta</h1>
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
      <h2>Nuevo Vallarta, Nayarit, Pacific Coast, Mexico</h2>
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
          <address>Av. Paseo de las Moras s/n, Nuevo Vallarta, Nayarit, Pacific Coast, Mexico</address>
          <p>終りのないエキサイトメントと贅沢な世界、グランド・マヤ・ヌエボ・バヤルタの高級リゾートでメキシコの暖かな日差しを浴び、太平洋からのそよ風をご満喫ください。</p>
          <p>より優れた顧客サービスとヌエバ・バヤルタの自然の美しさが溶け込んだ素晴らしさにご満足いただけることでしょう。この高級感漂うグランド・マヤ・ヌエボ・バヤルタでは、誰にでもお楽しみいただける何かがあります。太平洋を望む壮観と緑豊かな熱帯植物に囲まれた18ホールのゴルフ場でのプレイや、ボディーサーフィンで波と戯れたり、シュノーケリングをしたり、または単にビーチで日光浴。ビーチでの日差しやアドベンチャーに疲れたら、リゾート内にある豪華なスパでのトリートメントはいかがでしょうか。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>グランド・マスタールーム - 603平方フィート（約54平方メートル）の部屋は、理想のバケーションに必要なものすべてを提供いたします。この部屋には、キングサイズベッド、ソファーベッド、大理石をあしらったシャワールーム、ジャグジー付きのバスタブ、2つの洗面台、LCDテレビとヌエボ・バヤルタの素晴らしい眺めを見渡せるバルコニーが完備されています。</p>
          <p>- 宿泊人数の上限：大人2名様と子供2名様</p>
          <p>グランド・スイート - 広々とした1,295平方フィート（約117平方メートル）の部屋には、寝室とダイニングテーブルのあるリビングルームに家にいるように料理ができるキッチンが配されています。小さなプライベート・プールが配されているバルコニーからサンセットをお楽しみください。各部屋にはLCDテレビが完備されています。 </p>
          <p>- 宿泊人数の上限：大人4名様と子供2名様 </p>
          <p>グランド・マスタースイート - 宮殿を思わせるような1,898平方フィート（約171平方メートル）を有するこの部屋には、2つの寝室と2つの浴室が配されているため、家族や友達とリラックスしてバケーションを過ごすのに充分な広さを提供しています。バルコニーにはプールがあり、ラウンジとしてもお寛ぎいただけます。この部屋は、グランド・マスタールームとグランド・スイートを兼備したものです。 </p>
          <p>- 宿泊人数の上限：大人6名様と子供2名様 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>リゾート内シャトルサービス</li>
            <li>ニコラウスがデザインした18ホールのゴルフ場</li>
            <li>ジャック・ニコラウスのゴルフスクール</li>
            <li>ブリオ・スパとフィットネス施設</li>
            <li>5～12歳までのお子様を対象としたキッズクラブ（有料）</li>
            <li>ベビーシッター（要事前予約、有料）</li>
            <li>24時間利用可能な医師による医療サービス</li>
            <li>結婚式のイベントプランナー</li>
            <li>ジェイド・ブティック、タバコ販売店、薬局</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 5 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: +52-322-226-40-03</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Av. Paseo de las Moras s/n, Nuevo Vallarta, Nayarit, Pacific Coast, Mexico</address>
          <p>Experience the warmth of the Mexican sun on your face and unwind in the Pacific breeze at The Grand Mayan Nuevo Vallarta luxury resort as you enter a world of indulgence and excitement. Here you will find all of the luxury and excellent customer service of The Grand Mayan steeped in the carefree attitude and natural beauty of Nuevo Vallarta. At The Grand Mayan Nuevo Vallarta luxury resort, there's something for everyone. Enjoy 18 holes of golf surrounded by spectacular Pacific Ocean views and lush, tropical foliage or hit the beach for body surfing on the waves, snorkeling, or just relaxing in the sun. When you tire of the sand, sun, and adventure, head to the spa on-site at The Grand Mayan Nuevo Vallarta luxury resort to indulge in some luxurious spa treatments. </p>
          
          <br />
          
          <h3>Accommodations</h3>
		  <p>GRAND MASTER ROOM - The Grand Master is a 603 square foot room offering everything you need for a perfect vacation: king size bed, sleeper sofa, marble shower, whirlpool bath tub, double sink vanity, LCD television and balcony with breathtaking view of Nuevo Vallarta. Accommodates 2 adults and 2 children.</p>
          <p>GRAND SUITE - The Grand Suite is a large 1,295 square foot suite with a bedroom and living room complete with a dining table and kitchen, allowing you to cook like you are at home. Guests can step out onto their balcony and dip into their private plunge pool as they watch the sunset. Each room has an LCD television. Capacity 4 adults and 2 children. </p>
          <p>GRAND MASTER SUITE -The Grand Master Suite is a palatial 1,898 square foot two-bedroom, two-bath suite which gives your family and friends plenty of space to relax between vacation adventures. The balcony has a large plunge pool, chaise lounges and extra seating. This room is a combination of a Master Room and a Grand Suite. Accommodates 6 adults and 2 children. </p>
                      
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Shuttle service throughout resort</li>
            <li>Nicklaus Design 18-hole golf course</li>
            <li>Jack Nicklaus Academy of Golf</li>
            <li>Brio Spa &amp; Fitness Center</li>
            <li>Kid's Club available for children age 5 to 12 (fee applies)</li>
            <li>Babysitting available upon request (fee applies)</li>
            <li>24-hour medical service available by certified physician</li>
            <li>Wedding Event planning services</li>
            <li>Jade Boutique, Tobacco Shop and pharmacy </li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 5 p.m.<br />Check Out: 10 a.m.<br />Phone: +52 322 226 40 03</p>
          
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
	  getMap(20.682898, -105.287947, 12);
    });
  </script>

</body>
</html>