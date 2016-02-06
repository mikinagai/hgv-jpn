<?php include("../../server-side/library.php");
if(isset($_GET["lang"])){
  $lang = $_GET["lang"];
}
else {
  $lang = "eng";	
}
?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Vacationers at this elegant mountain resort indulge in relaxation, outdoor recreation and the joie de vivre of French Canada." />
  <title>Club Intrawest &ndash; Tremblant by Hilton Grand Vacations in Quebec, Canada</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Pool of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living / Dining Area of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bathroom of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Fitness Center of Club Intrawest &ndash; Tremblant in Quebec, Canada" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
      
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 18, 19</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>416</td>
                    <td>320</td>
                    <td>896</td>
                    <td>3,584</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>480</td>
                    <td>352</td>
                    <td>992</td>
                    <td>4,000</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1, 2, 20 &ndash; 24, 37 &ndash; 39, 49</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>576</td>
                    <td>416</td>
                    <td>1,184</td>
                    <td>4,768</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>640</td>
                    <td>448</td>
                    <td>1,334</td>
                    <td>5,472</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 3 &ndash; 6, 10, 12, 13, 25 &ndash; 28, 30 &ndash; 35</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>704</td>
                    <td>512</td>
                    <td>1,472</td>
                    <td>5,888</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>800</td>
                    <td>576</td>
                    <td>1,664</td>
                    <td>6,656</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Bronze / Silver: Weeks 15 &ndash; 17, 42 &ndash; 47</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>224</td>
                    <td>160</td>
                    <td>896</td>
                    <td>2,720</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>256</td>
                    <td>192</td>
                    <td>992</td>
                    <td>3,072</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Platinum / Silver: Week 14</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>704/416</td>
                    <td>320</td>
                    <td>896</td>
                    <td>3,872</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>800/480</td>
                    <td>352</td>
                    <td>992</td>
                    <td>4,320</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Bronze / Gold: Week 48</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>224/576</td>
                    <td>160/416/416</td>
                    <td>1,184</td>
                    <td>4,160</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>256/640</td>
                    <td>192/448/448</td>
                    <td>1,344</td>
                    <td>4,672</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Gold / Holiday: Week 50</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>576</td>
                    <td>416</td>
                    <td>1,120</td>
                    <td>4,640</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>640</td>
                    <td>448</td>
                    <td>1,280</td>
                    <td>5,120</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Platinum / Gold: Weeks 36, 41</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>704/576</td>
                    <td>416</td>
                    <td>1,184</td>
                    <td>4,896</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>800/640</td>
                    <td>448</td>
                    <td>1,334</td>
                    <td>5,472</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Gold / Platinum: Week 40</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>576</td>
                    <td>416</td>
                    <td>1,472</td>
                    <td>5,344</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>640</td>
                    <td>448</td>
                    <td>1,664</td>
                    <td>5,952</td>
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
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level" /> Holiday: Weeks 51, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>1,120</td>
                    <td>1,120</td>
                    <td>1,120</td>
                    <td>7,840</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,248</td>
                    <td>1,248</td>
                    <td>1,248</td>
                    <td>8,736</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed &ndash; Holiday / Platinum: Weeks 7 &ndash; 9, 11, 29</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &amp; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>1,120</td>
                    <td>1,120</td>
                    <td>1,472</td>
                    <td>8,544</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,248</td>
                    <td>1,248</td>
                    <td>1,664</td>
                    <td>9,568</td>
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
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>クラブ・イントラウエスト – トランブラン</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>カナダ、ケベック州モントランブラン</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Tremblant</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Mont Tremblant, Quebec, Canada</h2>
    </div>
    
      <?php
		}
	  ?>
    
    <div id="subcontent" class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder-container">
            <div id="placeholder"></div>
          </div>
        </div>
      </div>
    
      <div class="row">
      
        <div class="col-sm-8 main-column">
        
          <?php
			if($lang == "jpn"){
		  ?>
          
          <h3>概要</h3>
          <address>200 Chemin Des Saisons, Mont Tremblant, Quebec, Canada</address>
          <p>国際都市モントリオールから車で2時間程の距離に位置するモン・トランブランは、山が連なる<br />
高原地帯の一角にある優雅なリゾートです。ローレンシャン高原の美しいゴルフ場沿いにあるこのリゾートは、トランブラン湖を眺望できる恵まれた環境に位置しています。カナダのフランス文化圏として長い歴史を誇り、北米東部屈指のスキーエリアとして知られていますが、夏はウォータースポーツ、ゴルフ、ハイキングなどのアウトドア、秋は紅葉の名所として、１年を通して多くの人を魅了しています。フレンチカナダ式の「人生を楽しむ」というリラックスしたバケーションスタイルを是非ご体験ください。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機、リビングルームにガス式暖炉完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外温水プール（季節限定）</li>
            <li>屋内外ジャグジーとサウナ</li>
            <li>プライベート・クレイ・テニスコート</li>
            <li>映画館</li>
            <li>フィットネス施設</li>
            <li>加盟リゾート</li>
            <li>16年間の実績</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 819-681-3535</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>200 Chemin Des Saisons, Mont Tremblant, Quebec, Canada</address>
          <p>Vacationers at this elegant mountain resort indulge in relaxation, active outdoor recreation and the joie de vivre of French Canada. Perched on the foothills of the Laurentian Mountains, the property is set on the picturesque Le Geant fairways overlooking the waters of Lac Tremblant. Less than a two-hour drive from cosmopolitan Montreal, Mont Tremblant is consistently recognized as a top ski destination in Eastern North America. This welcoming retreat is also a lively summer playground teeming with water sports, golf and hiking. Steeped in French-Canadian history, the region is a spectacular setting for a vacation of a lifetime.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom suites with private balconies</li>
            <li>Each suite features fully equipped kitchen, gas fireplace in living room, washer and dryer</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Heated swimming pool open seasonally</li>
            <li>Outdoor and indoor hot tubs and sauna</li>
            <li>Private Har-Tru tennis courts</li>
            <li>Movie theater</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 819-681-3535</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
          <?php
			}
		  ?>
          
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
	  getMap(46.2054674, -74.5967449, 13);
    });
  </script>

</body>
</html>