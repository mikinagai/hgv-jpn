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
  <meta name="description" content="Revitalize your spirit at this Southern California oasis. Inspired by the region’s dramatic desert landscape, this mission-style resort was designed with seclusion and relaxation in mind." />
  <title>Club Intrawest &ndash; Palm Desert in California</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior / Pool of Club Intrawest &ndash; Palm Desert in California" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Kitchen of Club Intrawest &ndash; Palm Desert in California" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Golf Course of Club Intrawest &ndash; Palm Desert in California" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
        <?php
		  if($lang == "jpn"){
		?>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 〜 2週、 19 〜 25週、 37 〜 39週</th>
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
                    <td>576</td>
                    <td>448</td>
                    <td>992</td>
                    <td>4,480</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>608</td>
                    <td>512</td>
                    <td>1,024</td>
                    <td>4,800</td>
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
          
        </div>
        
        <br />
        
        <div class="row">
        
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
          
        </div>
        <?php
		  }
		  else {
		?>
      
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 27 &ndash; 36</th>
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
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>288</td>
                    <td>672</td>
                    <td>3,168</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 2, 19 &ndash; 25, 37 &ndash; 39</th>
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
                    <td>1-Bedroom</td>
                    <td>576</td>
                    <td>448</td>
                    <td>992</td>
                    <td>4,480</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>608</td>
                    <td>512</td>
                    <td>1,024</td>
                    <td>4,800</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 3 &ndash; 4, 8, 11, 13 &ndash; 18, 40 &ndash; 46, 48 &ndash; 50</th>
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
                    <td>1-Bedroom</td>
                    <td>704</td>
                    <td>512</td>
                    <td>1,312</td>
                    <td>5,568</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
                    <th colspan="5"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Gold + Silver + Platinum): Week 26</th>
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
                    <td>1-Bedroom</td>
                    <td>576/704</td>
                    <td>288/288/512</td>
                    <td>1,312</td>
                    <td>4,992</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>608/800</td>
                    <td>320/320/640</td>
                    <td>1,440</td>
                    <td>5,568</td>
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
              <table class="table table-hover mixed-holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/mixed-holiday.gif" alt="" class="level" /> Mixed (Holiday + Platinum): Weeks 5 &ndash 7, 9, 10, 12, 47</th>
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
                    <td>1-Bedroom</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>1,312</td>
                    <td>7,904</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
                    <td>1-Bedroom</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>1,056</td>
                    <td>7,392</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,216</td>
                    <td>1,216</td>
                    <td>1,216</td>
                    <td>8,512</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <?php
		  }
		?>
             
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>クラブ・イントラウエスト - パーム・デザート</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="points-link">必要ポイント数</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>アメリカ、カリフォルニア州パームデザート</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Palm Desert</h1>
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
      <h2>Palm Desert, California</h2>
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
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 760-674-1200</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>1 Willow Ridge, Palm Desert, CA 92260</address>
          <p>Revitalize your spirit at this Southern California oasis. Inspired by the region’s dramatic desert landscape, this mission-style resort was designed with seclusion and relaxation in mind. Nature walks bring sightings of roadrunners, jackrabbits and other indigenous wildlife amid flowering cacti and bougainvillea. Adventurous visitors may indulge in spectacular hiking, mountain biking and jeep touring, while shoppers delight in nearby El Paseo Drive with its distinctive boutiques and bistros. Set on the fairways of the renowned Desert Willow Golf Course, Club Intrawest—Palm Desert is truly a golfer's paradise, with more than 100 top-tier courses within close proximity.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom suites</li>
            <li>Bar-style kitchens</li>
            <li>Outdoor dining area with gas fireplace on private patio or terrace</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Resort Center with pool, 3 hot tubs, children's pool and splash area</li>
            <li>Outdoor pool, hot tub and barbecue area at each neighborhood of haciendas</li>
            <li>Private Members Lounge</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 760-674-1200</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
          <br />
          
          <h3>Nearby Resorts</h3>
          <div class="row nearby">
            <a href="../carlsbad-seapointe/">
              <div class="col-xs-4">
                <img src="../img/seapointe-t.jpg" alt="Carlsbad Seapointe Resort" />
              </div>
              <div class="col-xs-8">
                Carlsbad Seapointe Resort
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../grand-pacific-palisades/">
              <div class="col-xs-4">
                <img src="../img/palisades-t.jpg" alt="Grand Pacific Palisades Resort" />
              </div>
              <div class="col-xs-8">
                Grand Pacific Palisades Resort
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../hgvc-marbrisa/">
              <div class="col-xs-4">
                <img src="../img/marbrisa-t.jpg" alt="Hilton Grand Vacations Club at MarBrisa" />
              </div>
              <div class="col-xs-8">
                Hilton Grand Vacations Club at MarBrisa
              </div>
            </a>
          </div>
          
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
	  getMap(33.760346, -116.361758, 15);
    });
  </script>

</body>
</html>