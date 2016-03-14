<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Carved out of an ancient lava field, this 112-acre oasis occupies a superb location between two of Hawaii's finest golf courses. Guests of the resort also enjoy access to the restaurants, boutiques, beaches and water recreation." />
  <title>Kings' Land Resort by Hilton Grand Vacations Club in Waikoloa, Hawaii</title>
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
            <li><a href="#" id="floorplans-link">間取り</a></li>
            <li><a href="#" id="points-link">必要ポイント数</a></li>
            <li><a href="#" id="map-link">地図</a></li>
          </ul>
        </div>
      </div>
    
       <div id="homeslideshow"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active" id="slide1" style="background-image: url('img/banner01.jpg');"></div>
              <div class="item" id="slide2" style="background-image: url('img/banner02.jpg');"></div>
              <div class="item" id="slide3" style="background-image: url('img/banner03.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner04.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner05.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner06.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner07.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner08.jpg');"></div>
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
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム</p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム・ペントハウス</p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-2-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two-2.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム</p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-t.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/three.jpg" alt="Two-Bedroom Penthouse Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム・ペントハウス</p>
            </div>
            </div>
        </div>
        
      </div> <!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
                       <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 19 &ndash; 22週、36 &ndash; 41週</th>
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
                    <td>1ベッドルーム</td>
                    <td>340/510</td>
                    <td>680/1,020</td>
                    <td>3,400/5,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420/630</td>
                    <td>840/1,260</td>
                    <td>4,200/6,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500/750</td>
                    <td>1,000/1,500</td>
                    <td>5,000/7,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>580/870</td>
                    <td>1,160/1,740</td>
                    <td>5,800/8,700</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>1,440</td>
                    <td>2,880</td>
                    <td>14,400</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 &ndash; 18週、23 &ndash; 35週、42 &ndash; 52週</th>
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
                    <td>1ベッドルーム</td>
                    <td>480/720</td>
                    <td>960/1,440</td>
                    <td>4,800/7,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620/930</td>
                    <td>1,240/1,860</td>
                    <td>6,200/9,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700/1,050</td>
                    <td>1,400/2,100</td>
                    <td>7,000/10,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>840/1,260</td>
                    <td>1,680/2,520</td>
                    <td>8,400/12,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,400</td>
                    <td>2,880</td>
                    <td>14,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>1,725</td>
                    <td>3,450</td>
                    <td>17,250</td>
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
        <h1>キングス・ランド・バイ・ヒルトン･グランド・バケーションズ・クラブ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、ハワイ州ワイコロア</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>69-699 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>有名なコハラ・コーストにあるヒルトン・グランド・バケーションズ・クラブの最新リゾート、キングス・ランド。美しいフェアウェイと、壮大なワイコロアの眺望をお楽しみください。溶岩原を切り開いた、112エーカー（約0.45km&sup2;）の広大な敷地を誇り、ハワイ島で最高のゴルフ場として定評のある、キングスコースとビーチコースの間に位置しています。また、すぐ近くのヒルトン・ワイコロア・ビレッジ・リゾート・ホテル内のレストラン、ブティック、ビーチや各種ウォーター・レクリエーションなどもご利用いただけます。ハワイの大自然に恵まれ、明るい陽射しに包まれたこのリゾートは、世界で最もバケーションで訪れたい場所の１つとして、ワールドクラスの設備を誇っています。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1〜3ベッドルーム・スイート（バルコニー付き）</li>
            <li>1～2ベッドルームの必要ポイント数は、</li>
            <li>部屋の間取りやデザインによって異なります。</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
            
          <h3>リゾート設備</h3>
          <ul>
            <li>4つのスライダー、ジャグジー、流れるプール、お子様向け</li>
            <li>プール、噴水による水遊び場、和み所が付いた20,000平方</li>
            <li>フィート（約1,800m&sup2;）のスーパープール</li>
            <li>ビストロ・レストランとプールバー</li>
            <li>33,000平方フィート（約2,970m&sup2;）のセントラルクラブハウス</li>
            <li>ビジネスセンターとワイヤレス・インターネットアクセス</li>
            <li>チルドレンズ・クラブ</li>
            <li>（リゾート内でのお子様向けエンターテイメント・プログラム）</li>
            <li>お子様向けゲームルーム</li>
            <li>バーベキューエリア</li>
            <li>フィットネス施設（ヒルトン・フィットネス・バイ・プリコーとデイリーフィットネスクラス）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>３年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ハワイ州宿泊税が加算されます。</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-881-3000</p>

          
   
          
          
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
	  getMap(19.926804, -155.865824, 14);
    });
  </script>

</body>
</html>