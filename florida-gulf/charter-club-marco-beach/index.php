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
  <meta name="description" content="From its ideal beachfront setting, this resort delivers a vacation experience that's sure to delight all. An extensive selection of activities awaits visitors, from sailboat rentals, tennis instruction and nearby golf courses to poolside recreation and peaceful strolls on the beach." />
  <title>The Charter Club of Marco Beach in Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at the Charter Club of Marco Beach in Florida" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at the Charter Club of Marco Beach in Florida" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Dining Area at the Charter Club of Marco Beach in Florida" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Pool at the Charter Club of Marco Beach in Florida" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two Bedroom Floor Plan at the Charter Club of Marco Beach in Florida" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two Bedroom Floor Plan at the Charter Club of Marco Beach in Florida" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom</p>
              <?php
				}
			  ?>
            </div>
          </div>
        </div>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 19 &ndash; 23週、34 &ndash; 42週、49週、50週</th>
                  </tr>
                  <tr>
                    <th>部屋サイズ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 1 &ndash; 6週、14 &ndash; 18週、24 &ndash; 33週、43 &ndash; 48週</th>
                  </tr>
                  <tr>
                    <th>部屋サイズ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 7 &ndash; 13週、51週、52週</th>
                  </tr>
                  <tr>
                    <th>部屋サイズ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 19 &ndash; 23, 34 &ndash; 42, 49, 50</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 1 &ndash; 6, 14 &ndash; 18, 24 &ndash; 33, 43 &ndash; 48</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash; 13, 51, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
        <h1>ザ・チャーター・クラブ・オブ・マルコビーチ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="floorplans-link">間取り</a></li>
          <li><a href="#" id="points-link">必要ポイント数</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>アメリカ、フロリダ州マルコ島</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>The Charter Club of Marco Beach</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="floorplans-link">Floor Plans (<span id="floorplan-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Marco Island, Florida</h2>
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
          <address>700 S Collier Blvd, Marco Island, FL 34145</address>
          <p>マルコ島はフロリダのエバーグレーズに続くテンサウザンド諸島最大の島で、メキシコ湾と昔ながらの自然に恵まれたトロピカルな楽園です。ビーチフロントという理想的な立地条件を備えた、ザ・チャーター・クラブ・オブ・マルコビーチ®は、趣向や年代を問わず、あらゆる方々にお楽しみいただける最高のバケーションをお届けします。プールサイドでの休息や海辺の散策などはもちろん、セーリング、テニスレッスン、そしてゴルフに至るまで、各種レクリエーションが充実しています。おしゃれなお店やレストランも徒歩圏内です。マルコ島ならではの豊かな自然は、寛ぎをお求めになる方にも、アクティブな方にも最適です。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>２ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>温水プール、ジャグジー、お子様向けプール</li>
            <li>お子様向けインストラクター付きレクリエーション･プログラム</li>
            <li>照明付きテニスコート2面</li>
            <li>セールボート、カヤック、ウィンドサーフィンと自転車の無料レンタル</li>
            <li>パラセーリング、ウェーブランナー</li>
            <li>ツアーとレンタルの隣接</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>加盟リゾート</li>
            <li>31年間の実績</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>身障者向け施設なし</li>
            <li>夜間･早朝のフロント業務は行われておりません。チェックインが午後5時以降になる場合は、ご到着日の1週間前までにリゾートに直接ご連絡の上、時間外チェックインの手続きを行ってください。</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 239-394-4192</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>700 S Collier Blvd, Marco Island, FL 34145</address>
          <p>Marco Island, the largest of the Ten Thousand Islands leading to the Florida Everglades, is a tropical paradise nestled between the Gulf of Mexico and pristine natural wetlands. From its ideal beachfront setting, The Charter Club of Marco Beach<sup>&reg;</sup> delivers a vacation experience that's sure to delight all ages and interests. An extensive selection of activities awaits visitors, from sailboat rentals, tennis instruction and nearby golf courses to poolside recreation and peaceful strolls on the beach. Within walking distance are charming shops and restaurants. Marco Island's secluded environment provides the perfect backdrop for both relaxation and adventure.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 2-bedroom suites with balconies</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>The Charter Club of Marco Beach<sup>&reg;</sup> is a non-smoking resort</li>
            <li>Heated swimming pool, whirlpool spa and children's swimming pool</li>
            <li>Supervised children's recreation programs</li>
            <li>2 lighted tennis courts</li>
            <li>Complimentary use of sailboats, kayaks and windsurfing equipment for Club Members and guests</li>
            <li>Parasailing, WaveRunner tours and rentals nearby</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 10 a.m.<br />Phone: 239-394-4192</p>
          
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
	  getMap(25.9195969, -81.7274133, 15);
    });
  </script>

</body>
</html>