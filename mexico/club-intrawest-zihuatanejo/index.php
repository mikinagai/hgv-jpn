<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Carved out of the sloping mountainside overlooking Playa La Ropa, this resort provides a tranquil oceanfront retreat with old-world charm. Reflecting the dramatic landscape, interiors blend seamlessly with private outdoor spaces and magnificent views of the Pacific Ocean." />
  <title>Club Intrawest Resort &ndash; Zihuatanejo in Mexico</title>
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
<!--start floorplans -->
<!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="3"><img src="../../img/gold.gif" alt="" class="level"> ゴールド:　22 &ndash; 39週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>Sun &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>640</td>
                    <td>4,480</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>640</td>
                    <td>4,480</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>896</td>
                    <td>6,272</td>
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
                    <th colspan="3"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ:　1 &ndash; 6週, 8週, 9週, 13 &ndash; 21週, 40 &ndash; 46週, 48週, 49週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>768</td>
                    <td>5,376</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>768</td>
                    <td>5,376</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,056</td>
                    <td>7,392</td>
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
                    <th colspan="4"><img src="../../img/mixed-holiday.gif" alt="" class="level"> ホリデー・プラチナ: 50週</th>
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
                    <td>スタジオ</td>
                    <td>768</td>
                    <td>928</td>
                    <td>5,696</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>768</td>
                    <td>928</td>
                    <td>5,696</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,056</td>
                    <td>1,280</td>
                    <td>7,840</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
            
            <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="3"><img src="../../img/holiday.gif" alt="" class="level"> ホリデー:　7週, 10 &ndash; 12週, 47週, 51週, 52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &ndash; 土</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>928</td>
                    <td>6,496</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>928</td>
                    <td>6,496</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,280</td>
                    <td>8,960</td>
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
        <h1>クラブ・イントラウエスト – シワタネホ</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>メキシコ、大西洋側シワタネホ</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

       <h3>概要</h3>
          <address>Carretera Escenica La Ropa, Zihuatanejo, Pacific Coast, Mexico</address>
          <p>プラヤ・ラ・ロパを見下ろし、傾斜する山腹に彫ったように佇むクラブ・イントラウエスト – シワタネホは、太古の魅力を感じさせる静穏なオーシャンフロントのリゾートです。ドラマチックな外観に反して、インテリアはプライベートなアウトドアへの空間と、この上ない太平洋の美しい景色とが調和しています。元漁村のシワタネホの魅力は、手作りのタイル、わらぶき屋根と鮮やかな織物を含む特有な装飾が挙げられます。この地域の温かいおもてなしの伝統が、気配りの行き届いたサービスと本格的なメキシコ料理を表す最たるものだと認識されることでしょう。１年中温暖な気候は、プールでのどかな日々を過ごしたり、ビーチを散歩するなど素敵なひとときを奏でてくれます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート</li>
            <li>各スイートのテラスにプライベート・ディップ・プール、</li>
            <li>メキシコ式アウトドア・シャワー、ミニキッチン完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つの屋外プールとビーチアクセス</li>
            <li>スパ（有料）</li>
            <li>レストラン、プールサイド・ビストロとプールバー</li>
            <li>洗濯機、乾燥機</li>
            <li>チェックインの際にオプショナル食事プランの購入可能</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>8年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
          </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 1 p.m.<br />電話番号: +52-755-555-0350</p>

          
   
          
          
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
	  getMap(17.634401, -101.548811, 15);

    });
  </script>

</body>
</html>