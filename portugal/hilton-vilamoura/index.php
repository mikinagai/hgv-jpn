<?php include("../../server-side/library.php");?>
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

      <div class="container-max">
        <div id="resorts-options" class="hidden-xs">
          <ul>
            <li><a href="#" id="photos-link" class="active">写真</a></li>
<!--            <li><a href="#" id="floorplans-link">間取り</a></li>-->
            <li><a href="#" id="points-link">必要ポイント数</a></li>
            <li><a href="#" id="map-link">地図</a></li>
          </ul>
        </div>
      </div>
    
       <div id="homeslideshow"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active" id="slide1" style="background-image: url('img/banner01-s.jpg');"></div>
              <div class="item" id="slide2" style="background-image: url('img/banner02-s.jpg');"></div>
              <div class="item" id="slide3" style="background-image: url('img/banner03-s.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner04-s.jpg');"></div>
              <div class="item" id="slide5" style="background-image: url('img/banner05-s.jpg');"></div>
              <div class="item" id="slide6" style="background-image: url('img/banner06-s.jpg');"></div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div><!-- destinationslideshow -->
<!--start floorplans -->
<!-- floorplan-container -->
      
      <div id="points-container">
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
          
        </div> <!-- row -->
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
    
      
      <div class="banner-caption resort-title">
        <h1>ヒルトン・ヴィラモウラ・バケーション・クラブ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>ポルトガル、ヴィラモウラ</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

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
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: + 351 289 304 000</p>


          
   
          
          
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