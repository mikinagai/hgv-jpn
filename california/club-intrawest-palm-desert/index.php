<?php include("../../server-side/library.php");?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Revitalize your spirit at this Southern California oasis. Inspired by the region’s dramatic desert landscape, this mission-style resort was designed with seclusion and relaxation in mind." />
  <title>Club Intrawest &ndash; Palm Desert in California</title>
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
<!--start floorplans -->
<!-- floorplan-container -->
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 27 〜 36週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &amp; 木</th>
                    <th>月 &ndash; 水</th>
                    <th>金 &amp; 土</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>480</td>
                    <td>288</td>
                    <td>672</td>
                    <td>3,168</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>576</td>
                    <td>320</td>
                    <td>864</td>
                    <td>3,840</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 5週、6週、44 &ndash; 47週</th>
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
                    <td>2ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 3 〜 4週、 8、 11、 13 〜 18週、 40 〜 46週、 48 〜 50週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &amp; 木</th>
                    <th>月 &ndash; 水</th>
                    <th>金 &amp; 土</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>704</td>
                    <td>512</td>
                    <td>1,312</td>
                    <td>5,568</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>800</td>
                    <td>640</td>
                    <td>1,440</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> ゴールド/シルバー/プラチナ ミックス: 26週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &amp; 木</th>
                    <th>月 &ndash; 水</th>
                    <th>金 &amp; 土</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>576/704</td>
                    <td>288/288/512</td>
                    <td>1,312</td>
                    <td>4,992</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>608/800</td>
                    <td>320/320/640</td>
                    <td>1,440</td>
                    <td>5,568</td>
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
                    <th colspan="5"><img src="../../img/mixed-holiday.gif" alt="" class="level" /> ホリデー/プラチナ　ミックス: 5 〜 7週、 9、 10、 12、 47週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &amp; 木</th>
                    <th>月 &ndash; 水</th>
                    <th>金 &amp; 土</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>1,312</td>
                    <td>7,904</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,216</td>
                    <td>1,216</td>
                    <td>1,440</td>
                    <td>8,960</td>
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
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level" /> ホリデー: 51、 52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>日 &amp; 木</th>
                    <th>月 &ndash; 水</th>
                    <th>金 &amp; 土</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>7,392</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,216</td>
                    <td>1,216</td>
                    <td>1,216</td>
                    <td>8,512</td>
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
        <h1>クラブ・イントラウエスト - パーム・デザート</h1>
      </div>
      
    </div> <!-- subbanner -->
    

    <div id="subtitle">
      <h2>アメリカ、カリフォルニア州パームデザート</h2>
    </div>
    


    <div id="subcontent" class="content">
    
      <div class="row">
      
        <div class="col-sm-8 main-column">

       <h3>概要</h3>
          <address>1 Willow Ridge, Palm Desert, CA 92260</address>
          <p>南カリフォルニアのオアシスで、心身ともにリフレッシュしてみませんか。ミッション様式の建物は、ドラマチックな砂漠の風景にインスピレーションを受けて、静かな環境と寛ぎをテーマに設計されました。自然の中に足を運べば、サボテンや鮮やかなブーゲンビリアの花々が生い茂り、ミツバシリ、ジャックウサギなど、地元の珍しい野生動物にも出会えることでしょう。アウトドア派の方には、ハイキング、マウンテンバイク、ジープのツアーとアクティビティーも盛りだくさん。そしてショッピング派の方には、近隣のエルパソ通りにある一流ブティックやレストランで優雅な時間をお過ごしいただけます。ロサンゼルス、またはサンディエゴから車で２時間弱の距離にあるこのリゾートは、まさにゴルファーの楽園。隣接のデザート・ウィロウ・ゴルフコースをはじめ、100を超える一流コースがリゾート近辺に備わっています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート</li>
            <li>バー･スタイルのキッチン完備</li>
            <li>ガス式暖炉を備えたプライベート･パティオまたは</li>
            <li>テラスと屋外ダイニングエリア完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備<</h3>
          <ul>
            <li>プール、3つのジャグジー、</li>
            <li>お子様向けプールと水遊び場を備えたリゾート･センター</li>
            <li>各建物に屋外プール、ジャグジー、バーベキュー･グリル</li>
            <li>プライベート･メンバーラウンジ</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>13年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
              </ul>
          
          <br />
          
          
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-674-1200</p>


          
   
          
          
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
	  getMap(33.760346, -116.361758, 15);

    });
  </script>

</body>
</html>