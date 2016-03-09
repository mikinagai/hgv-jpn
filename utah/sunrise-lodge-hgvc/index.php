<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="This ski-in mountain lodge located at the base of the Sunrise lift at Canyons Resort, puts you in the heart of Park City's signature treasures." />
  <title>Sunrise Lodge Resort, a Hilton Grand Vacations Club in Park City, Utah</title>
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
      
 <!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 16 &ndash; 19週、37 &ndash; 46週</th>
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
                    <td>スタジオ・プラス</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>360</td>
                    <td>720</td>
                    <td>3,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>525</td>
                    <td>1,050</td>
                    <td>5,250</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>615</td>
                    <td>1,230</td>
                    <td>6,150</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 20 &ndash; 36週</th>
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
                    <td>スタジオ・プラス</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>750</td>
                    <td>1,500</td>
                    <td>7,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プレミア</td>
                    <td>1,230</td>
                    <td>2,460</td>
                    <td>12,300</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> <!-- row -->
          
          <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 &ndash; 15週、47 &ndash; 52週</th>
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
                    <td>スタジオ・プラス</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
                    <td>1,050</td>
                    <td>2,100</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プレミア</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>1,150</td>
                    <td>2,300</td>
                    <td>11,500</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プレミア</td>
                    <td>1,530</td>
                    <td>3,060</td>
                    <td>15,300</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          </div>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
    
      
      <div class="banner-caption resort-title">
        <h1>サンライズ・ロッジ・ア・ヒルトン・グランド・バケーションズ・クラブ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、ユタ州パークシティ</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>2307 W Mountain Rd, Park City, UT 84098</address>
          <p>その自然環境とパークシティの山岳地帯の影響を受け、丸太作りの建築とモダンな優雅さが調和した サンライズ・ロッジ・ア・ヒルトン・グランド・バケーションズ・クラブは、「日常から抜け出す」本当の意味を教えてくれるバケーションを提供してくれることでしょう。このスキー・ロッジはパークシティの中心にあり、歴史的なパークアベニュー、ユタ・オリンピック・パークへわずか数分の場所に位置し、豊富なアウトドアとワールドクラスのキャニオンズ・リゾートのサンライズリフト乗り場がそばにあり、スキー場へのアクセスも抜群です。また、パークシティはアメリカ代表スキーチームの本拠地であると共に、アメリカ最大のインディペンデント映画祭であるサンダンス映画祭の開催地にもなっています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1～4ベッドルーム・スイート </li>
            <li>スタジオと1ベッドルームにキチネット、その他の各スイートに </li>
            <li>フルキッチン完備 </li>
            <li>スイートによりバルコニー、テラスまたはテラス付き </li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料） </li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外温水プールと2つの大型ジャグジー </li>
            <li>ラウンジ </li>
            <li>フィットネス施設</li> 
            <li>パークシティ内無料シャトルバス </li>
            <li>スキー用具レンタル（有料） </li>
            <li>キャニオンズ・リゾートスキー場内 </li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 435-645-4569</p>
          <p><a href="#" class="btn btn-secondary">リクエストフォーム</a></p>

          
   
          
          
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
	  getMap(40.682882, -111.555025, 16);
    });
  </script>

</body>
</html>