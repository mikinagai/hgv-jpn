<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
   <meta name="description" content="West 57th Street by Hilton Club delivers a Manhattan experience that is luxurious and, above all, unforgettable." />
  <title>West 57th Street Resort by Hilton Club in New York</title>
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
              <div class="item" id="slide5" style="background-image: url('img/banner05-s.jpg');"></div>
              <div class="item" id="slide6" style="background-image: url('img/banner06-s.jpg');"></div>
              <div class="item" id="slide7" style="background-image: url('img/banner07-s.jpg');"></div>
              <div class="item" id="slide8" style="background-image: url('img/banner08-s.jpg');"></div>
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
      
<!--floorplan start -->
        

      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>スタジオ</p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>1ベッドルーム</p>
            </div>
          </div>
        </div>
        
      </div> <!-- floorplan-container -->
        
       <!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、29 &ndash; 34週</th>
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
                    <td>375</td>
                    <td>750</td>
                    <td>3,750</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プレミア</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>510</td>
                    <td>1,020</td>
                    <td>5,100</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>630</td>
                    <td>1,260</td>
                    <td>6,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>870</td>
                    <td>1,740</td>
                    <td>8,700</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・ペントハウス</td>
                    <td>1,160</td>
                    <td>2,320</td>
                    <td>11,600</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 28週、35 &ndash; 52週</th>
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
                    <td>525</td>
                    <td>1,050</td>
                    <td>5,250</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プレミア</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>720</td>
                    <td>1,440</td>
                    <td>7,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>930</td>
                    <td>1,860</td>
                    <td>9,300</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>1,260</td>
                    <td>2,520</td>
                    <td>12,600</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・ペントハウス</td>
                    <td>1,680</td>
                    <td>3,360</td>
                    <td>16,800</td>
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
        <h1>ウエスト57ストリート・バイ・ヒルトン・クラブ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、ニューヨーク州マンハッタン</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>102-108 West 57th St, New York, NY 10019</address>
          <p>ニューヨーク市で初のタイムシェア物件として大きな注目を集めている、ウエスト57ストリート・バイ・ヒルトン・クラブ。28階建てのモダンなビルに贅沢を駆使したワールドクラスの施設で、この上ない快適さをお届けします。マンハッタンの中心であるプラザ・ディストリクトに位置し、リンカーンセンター、セントラルパーク、カーネギーホール、５番街の高級ショッピング街にも近い抜群のロケーション。リゾート内にはプライベート・ラウンジ横に市内を見下ろす広々としたアウトドア・テラスがあります。至福のおもてなしに是非ご期待ください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1ベッドルーム・スイートとペントハウス</li>
            <li>各部屋にスタイリッシュなインテリアや最高級のリネン、</li>
            <li>最新のエンターテイメント・システム完備</li>
            <li>1ベッドルームに優雅なオーク材、大理石、御影石を使用</li>
            <li>高速ワイヤレス・インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ゆったりとした屋外テラス</li>
            <li>このリゾートの所有権を有するクラブメンバー様のみ</li>
            <li>利用可能なプライベート・ラウンジ</li>
            <li>コンシェルジュ</li>
            <li>バレーパーキングのみ（有料、規制あり）</li>
            <li>洗濯・ドライクリーニング・サービス（有料）</li>
            <li>ハウスキーピング料（3泊以下有料）</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>4年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ホームウィーク、ホームリゾート、オープンシーズン予約はオーナー様のみが対象としています。</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 212-379-0103</p>
          <p><a href="../../contact/" class="btn btn-secondary">リクエストフォーム</a></p>


          
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
	  getMap(40.764376, -73.97805, 14);
    });
  </script>

</body>
</html>