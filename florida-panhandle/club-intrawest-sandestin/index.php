<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Nestled between the Emerald Coast and the Choctawhatchee Bay, Club Intrawest &ndash; Sandestin offers a stunning setting for warm-weather fun." />
  <title>Club Intrawest &ndash; Sandestin Resort by Hilton Grand Vacations in Sandestin, Florida</title>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 1 &ndash; 6週、49週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>288</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>384</td>
                    <td>640</td>
                    <td>3,200</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 37 &ndash; 46週、51週 &ndash; 52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>832</td>
                    <td>4,064</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,376</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 8週、10週、12 &ndash; 24週、30 &ndash; 35週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>576</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>768</td>
                    <td>1,280</td>
                    <td>6,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
            
            <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> ミックス（シルバー + ゴールド）: 48週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>288</td>
                    <td>832</td>
                    <td>3,104</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>384</td>
                    <td>1,088</td>
                    <td>4,096</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
            
            
            <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> ミックス （ゴールド + プラチナ）: 47週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>576</td>
                    <td>960</td>
                    <td>4,512</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>640</td>
                    <td>768</td>
                    <td>1,280</td>
                    <td>6,016</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
            
            <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> ミックス (プラチナ + ゴールド): 36週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>Sun</th>
                    <th>Mon &ndash; Thur</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>576</td>
                    <td>480</td>
                    <td>832</td>
                    <td>4,160</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>768</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,504</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
            
            <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed-holiday">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed-holiday.gif" alt="" class="level" /> ミックス (ホリデー + プラチナ): 9週、11週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>832</td>
                    <td>960</td>
                    <td>6,080</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>1,088</td>
                    <td>1,280</td>
                    <td>8,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div><div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/holiday.gif" alt="" class="level" /> ホリデー: 25 &ndash; 29週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>832</td>
                    <td>832</td>
                    <td>5,824</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>1,088</td>
                    <td>1,088</td>
                    <td>7,616</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> <!-- row -->
          <div class="row">
          &nbsp;</div>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
    
      
      <div class="banner-caption resort-title">
        <h1>クラブ・イントラウエスト ー サンデスティン</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、フロリダ州サンデスティン</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

       <h3>概要</h3>
          <address>8626 Baytowne Marina, Sandestin, FL 32550</address>
          <p>エメラルドコーストとチョクトハチー湾の間に位置し、自然のままの白い砂浜がどこまで も続く海辺のリゾートです。月明かりが美しい夜にテラスで寛ぎながら、マリーナのボートが静かに揺れる音に耳を澄ませ、海辺の情緒に浸ってみませんか。温暖な気候のサンデスティンは、マリンスポーツ天国で、お子様から大人の方までアウトドア派にぴったりです。穏やかな湾内は、カヤック、スノーケリング、ウォータースキーに最適。太陽が降り注ぐメキシコ湾上空では、パラセーリングもお楽しみいただけます。静かな南国の雰囲気に包まれながら、充実した設備の中で優雅なひとときをお過ごしください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1〜2ベッドルーム・スイート</li>
            <li>フルキッチン完備</li>
            <li>ワイヤレス・インターネットアクセス完備(無料)</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>プール、サンデッキ、2つのジャグジー</li>
            <li>お子様向けプール</li>
            <li>洗濯機、乾燥機</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>13年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>身障者向け施設なし</li>
            <li>オートバイ、ボート、ジェットスキー、トレーラーまたはモーターホームをリゾート内に停めることはできませんので予めご了承ください。敷地外に預ける際は、直接リゾートにお問い合わせください。</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
         <h3>追加情報</h3>
          <p>チェックイン日：日曜日<br/>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 850-622-3400</p>


          
   
          
          
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
	  getMap(30.384792, -86.324295, 13);

    });
  </script>

</body>
</html>