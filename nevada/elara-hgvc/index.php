<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="The sleek, 52-story Elara resort boasts a premier Center Strip location. This property offers adjoining access to the Miracle Mile and the Planet Hollywood Casino." />
  <title>Elara Resort, a Hilton Grand Vacations Club in Las Vegas, Nevada</title>
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
              <div class="item" id="slide7" style="background-image: url('img/banner07-s.jpg');"></div>
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
        
<!--
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-1-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/three-1.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム</p>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-2-t.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p class="large"><img src="floorplans/three-2.jpg" alt="Two-Bedroom Floor Plan at Grand Waikikian Resort in Honolulu, Hawaii" /></p>
              <p>2ベッドルーム</p>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、23 &ndash; 34週、46 &ndash; 50週</th>
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
                    <td>スタジオ</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>400</td>
                    <td>800</td>
                    <td>4,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド・プラス</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド</td>
                    <td>660</td>
                    <td>1,320</td>
                    <td>6,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド・プラス</td>
                    <td>800</td>
                    <td>1,600</td>
                    <td>8,000</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; スタジオ</td>
                    <td>740</td>
                    <td>1,480</td>
                    <td>7,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; スタジオ</td>
                    <td>950</td>
                    <td>1,900</td>
                    <td>9,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; 1ベッドルーム</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; 1ベッドルーム</td>
                    <td>1,100</td>
                    <td>2,200</td>
                    <td>11,000</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム</td>
                    <td>1,080</td>
                    <td>2,160</td>
                    <td>10,800</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>1,350</td>
                    <td>2,700</td>
                    <td>13,500</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 22週、35 &ndash; 45週、51週、52週</th>
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
                    <td>スタジオ</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>550</td>
                    <td>1,100</td>
                    <td>5,500</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・グランド・プラス</td>
                    <td>780</td>
                    <td>1,560</td>
                    <td>7,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド</td>
                    <td>920</td>
                    <td>1,840</td>
                    <td>9,200</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・グランド・プラス</td>
                    <td>1,140</td>
                    <td>2,280</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; スタジオ</td>
                    <td>1,060</td>
                    <td>2,120</td>
                    <td>10,600</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; スタジオ</td>
                    <td>1,310</td>
                    <td>2,620</td>
                    <td>13,100</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム &amp; 1ベッドルーム</td>
                    <td>1,320</td>
                    <td>2,640</td>
                    <td>13,200</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス &amp; 1ベッドルーム</td>
                    <td>1,510</td>
                    <td>3,020</td>
                    <td>15,100</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム</td>
                    <td>1,540</td>
                    <td>3,080</td>
                    <td>15,400</td>
                  </tr>
                  <tr>
                    <td>4ベッドルーム・プラス</td>
                    <td>1,860</td>
                    <td>3,720</td>
                    <td>18,600</td>
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
        <h1>エララ・ア・ヒルトン・グランド・バケーションズ・クラブ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、ネバダ州ラスベガス</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

          <h3>概要</h3>
          <address>959 E Gulf Dr, Sanibel Island, FL 33957</address>
          <p>トートゥガ・ビーチ・クラブから色鮮やかな熱帯植物に囲まれた遊歩道を抜けると、サニベル 
島のきらめく海と白浜が広がっています。プールサイドのガゼボ、プライベート・クラブハウスなど、優れた設備が整っており、楽園のバケーションをより一層引き立ててくれることでしょう。デューンズ・ゴルフ&amp;テニスクラブでは、グリーンフィーの免除をはじめ、さまざまな優待が用意されています。ショッピング街やレストランにも近く、大変便利なロケーションです。この地域ならではのビストロやカフェで、世界各国のシェフ達が影響をもたらしたとされる独創的な料理をご堪能ください。</p>
          
          <br />
          
          <h3>概要</h3>
          <address>80 E Harmon Ave, Las Vegas, NV 89109</address>
          <p>洗練された52階建てのエララは、ストリップ中心のロケーションを誇っています。この壮大なリゾートは、ミラクルマイル・ショップスに直結し、有名なカジノ、9つのレストラン、マンダラ・スパがあるプラネット・ハリウッド・リゾート・アンド・カジノ・コンプレックスと隣接しています。光瞬くラスベガスの理想的なロケーションにありながら、壮観な街の景色、ストリップ、山や砂漠を一望できる広々としたモダンな空間で安らぎを皆様に提供します。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>エキゾチックな屋外プールとジャグジー、カバナとプールサイドバー（季節限定）</li>
            <li>ロビーバーとラウンジ</li>
            <li>フィットネス施設</li>
            <li>ビジネスセンター</li>
            <li>会議室</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>加盟リゾート</li>
            <li>無料駐車場</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4:00 p.m.<br />チェックアウト: 10:00 a.m.<br />電話番号: 702-669-6700</p>
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
	  getMap(36.1084415, -115.1691841, 14);
    });
  </script>

</body>
</html>