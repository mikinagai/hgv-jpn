<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Grand Pacific Palisades Resort treats visitors to luxurious furnishings, extensive on-site amenities and close proximity to Southern California's most popular attractions." />
  <title>Grand Pacific Palisades Resort in Carlsbad, California</title>
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
      
<!--
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
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
    </div>
-->
        
        
       <!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 〜 21週, 43 〜 50週</th>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 22 〜 42週, 51 〜 52週</th>
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
        <h1>パリぜーズ・パシフィック・パリセーズ・リゾート</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、カリフォルニア州カールスバッド</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>5805 Armada Dr, Carlsbad, CA 92008</address>
          <p>太平洋とカールズバッド・フラワー・フィールドが織り成す色彩豊かな景色。海を臨む美しい山あいに位置する、グランド・パシフィック・パリセーズ・リゾートから、目の覚めるような眺望をお楽しみいただけます。贅沢で充実した設備が整い、カリフォルニア南部の人気スポットにも、気軽にお出かけいただけます。その美しさで有名なサンセットや、どこまでも続く広大な砂浜、世界有数のゴルフ場、美味しい食事も見逃せません。海辺の街、カールズバッドは、ゆったりした散策にもぴったりです。さらに、レゴランド®・カリフォルニア・リゾートもすぐ近くにあります。ご家族揃って思い出に残る、カリフォルニアの素晴らしいバケーションをお過ごしください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～3ベッドルーム・スイート（バルコニー付き）</li>
            <li>マスターバスルーム完備</li>
            <li>フルキッチン完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（有料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つのプール、3つのジャグジー、噴水による水遊び場</li>
            <li>カール・ストラウス・ブルワリー・レストラン</li>
            <li>お子様向けアクティビティーとレクリエーション･プログラム</li>
            <li>マッサージ・セラピスト（有料）</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>15年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-827-3200</p>
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
	  getMap(33.125003, -117.315112, 14);
    });
  </script>

</body>
</html>