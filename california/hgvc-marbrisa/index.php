<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Located in the quaint coastal village of Carlsbad, the Hilton Grand Vacations Club at MarBrisa resort features 27 villa buildings designed in classic Spanish Mediterranean style." />
  <title>Hilton Grand Vacations Resort at MarBrisa in Carlsbad, California</title>
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
              <div class="item active" id="slide1" style="background-image: url('img/banner01-s.jpg');"></div>
              <div class="item" id="slide2" style="background-image: url('img/banner02-s.jpg');"></div>
              <div class="item" id="slide3" style="background-image: url('img/banner03-s.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner04-s.jpg');"></div>
              <div class="item" id="slide4" style="background-image: url('img/banner05-s.jpg');"></div>
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
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p></p>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 21週, 43 &ndash; 50週</th>
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
                    <td>スタジオ / スタジオ・プラス</td>
                    <td>250</td>
                    <td>340</td>
                    <td>2,500</td>
                  </tr>
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
                    <td>3 ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 22 &ndash; 42週, 51 &ndash; 52週</th>
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
                    <td>スタジオ / スタジオ・プラス</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
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
                    <td>3 ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
          
        </div> <!-- row -->
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
    
      
      <div class="banner-caption resort-title">
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、カリフォルニア州カールスバッド</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>1594 MarBrisa Circle, Carlsbad, CA 92008
          </address>
          <p>古風な趣が漂う海岸の町、カールズバッドにあるヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサは、スペイン地中海風の伝統様式で建てられた27棟（完成時）の新しいスイートで、太平洋を遠景に雄大な眺めを誇ります。レゴランド®・カリフォルニア・リゾートのすぐ隣にあり、シーワールド、ワイルド・アニマル・パーク、さらに世界的に有名なサンディエゴ動物園などの南カリフォルニアならではのアトラクションへも車でわずかの距離に位置します。また、周辺には数々のワールドクラスのゴルフコースが広がり、ザ・クロッシング・アット・カールズバット・チャンピオンシップ・ゴルフコースがリゾートに隣接しています。カールズバッド・プレミアム・アウトレットでのショッピングもお見逃しなく。</p>
          <p>スペイン地中海風の伝統様式で建てられた、海岸の町カールズバッドに広がる当リゾートは、太平洋を遠景に雄大な眺めを誇ります。レゴランド®・カリフォルニア・リゾートとザ・クロッシング・アット・カールズバッド・ゴルフ・コースに隣接し、シーワールド、ワイルド・アニマル・パーク、さらに世界的に有名なサンディエゴ動物園などの南カリフォルニアの人気アトラクションへも車でわずかの距離に位置します。カールズバッド・プレミアム・アウトレットでのショッピングもお見逃しなく </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、スタジオ・プラス（調理設備なし）</li>
            <li>1～3ベッドルーム・スイート（バルコニー付き）</li>
            <li>各スイートにフルキッチン完備</li>
            <li>1ベッドルーム・スイートに浴槽付きのマスターバスルーム完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（有料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>海を見渡す優雅なプール、噴水による水遊び場とスパ</li>
            <li>レストランとワインバー（隣接するホテルにて）</li>
            <li>スパ（有料、隣接するホテルにて）</li>
            <li>お子様向けアクティビティー・プログラム</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>5年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-828-4520</p>
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
	  getMap(33.1287884, -117.3079629, 14);
    });
  </script>

</body>
</html>