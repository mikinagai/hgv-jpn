<?php include("../../server-side/library.php");?>
    <!doctype html>
    <html>

    <head>
        <meta name="description" content="" />
        <title>サホロリゾートホテル</title>
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
                    </div>
                    <!-- destinationslideshow -->

                    <div id="floorplan-container">

                        <div class="row">
                            <div class="col-sm-3 text-center">
                                <div class="floorplan">
                                    <p class="small"><img src="floorplans/suites-t.jpg" alt="" /></p>
                                    <p class="large"><img src="floorplans/suites.jpg" alt="" /></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- floorplan-container -->

                    <div id="points-container">
                        <div class="row">

                            <div class="col-sm-6">

                                <div class="table-responsive">
            <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ローシーズン 2015年4/25 - 7/17、8/23 - 11/2</th>
                  </tr>
                  <tr>
                    <th>利用人数</th>
                    <th>大人</th>
                    <th>子供</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1名様</td>
                    <td colspan="2">1,260</td>
                  </tr>
                  <tr>
                    <td>2名様</td>
                    <td>810</td>
                    <td>570</td>
                  </tr>
                  <tr>
                    <td>3名様</td>
                    <td>810</td>
                    <td>570</td>
                  </tr>
                  <tr>
                    <td>4名様</td>
                    <td>720</td>
                    <td>510</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> ハイシーズン 2015年7/18 - 8/12、8/14 - 8/22</th>
                  </tr>
                  <tr>
                    <th>利用人数</th>
                    <th>大人</th>
                    <th>子供</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1名様</td>
                    <td colspan="2">1,530</td>
                  </tr>
                  <tr>
                    <td>2名様</td>
                    <td>1,080</td>
                    <td>760</td>
                  </tr>
                  <tr>
                    <td>3名様</td>
                    <td>1,080</td>
                    <td>760</td>
                  </tr>
                  <tr>
                    <td>4名様</td>
                    <td>990</td>
                    <td>700</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
                            
                            
        </div>
        <br/>
        <p>※上記のポイント数は全て1人1泊あたり（朝食付き）の予約に必要なポイント数です。<br>
        予約適用除外日：2015年4/5 - 4/24、8/13、11/3 - 11/30</p>
        <ul>
            <li>大人：中学生以上 </li>
            <li>子供：4歳以上 小学生以下</li>
            <li>3歳以下添い寝無料</li>
            </ul>
        <br/>
        
      </div>

                    <div id="map-container">
                        <div id="map"></div>
                    </div>


                    <div class="banner-caption resort-title">
                        <h1>サホロリゾートホテル</h1>
                    </div>

                </div>
                <!-- subbanner -->


                <div id="subtitle">
                    <h2>北海道上川郡</h2>
                </div>



                <div id="subcontent" class="content">

                    <div class="row">

                        <div class="col-sm-8 main-column">

           <h3>概要</h3>
          <address>北海道上川郡新得町狩勝高原</address>
          <p>北海道のちょうど中心にある十勝サホロリゾートは、広大な平野や美しい山脈など、北海道の原風景を体験できる場所です。北海道の豊かな自然環境で育まれた新鮮食材、森のクマに会える「ベアマウンテン」、スキー、カヌー、ゴルフ、マイナスイオンスパなど、食べて・遊んで・癒されるリゾートステイをお楽しみください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>森の中のリゾートらしくナチュラルな白木を使用し、木の温もりに包まれた客室はすべて洋室タイプ。ゆったりとした広さを確保し、長期滞在でも快適に過ごせます。お部屋でも、ロビーでも、レストランでも、ホテル内は高速Wi-Fiを無料でご利用いただけます。お部屋には浴衣ではなく上質なパジャマをご用意させていただいておりますので、ゆったりとお寛ぎください。</p>
          <br />
          
          <h3>リゾート設備</h3>
          <p>リゾートホテルは、木目を基調とした落ち着くスモールサイズ。ホテル内にある『カフェレストラン』『フレンチレストラン』『北海道郷土料理』『居酒屋』では地元十勝をはじめ、道産食材を取り入れたメニューを考案しております。おいしい料理と選ぶ楽しさもご堪能ください。体を癒したいときはマイナスイオン水を使用した大浴場でのんびりと。チェックアウト後の入浴もご利用いただけます。トリートメントルームではリンパマッザージを行い、デトックス効果を高めます。</p>
          
          <br />
          
          <h3>アクセス</h3>
          <p>十勝サホロリゾートへは、空港からお車もしくは電車でお越しいただけます。</p>
          <p>最寄駅はJR「新得」駅。<br>
          JRで新千歳空港駅から南千歳駅で乗換え、新得駅へと行きます。<br>
          とかち帯広空港からバスで帯広駅まで行き、JRで新得駅へと行きます。</p>
          <p>JR新得駅より事前予約制で無料送迎いたします。
          <li>運行時間　9：00～18：00</li>
          <li>ご利用日前日の18：00までにご予約をお願いします。（Tel.0156-64-7111）</li>
          <p>運行時間外はタクシーをご利用ください</p>
          


                            <br />

                        </div>
                        <div class="col-sm-4 aside">
                             <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0156-64-7111</p>
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
	  getMap(43.168153, 142.813541, 14);
                });
            </script>

    </body>

    </html>