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
  <meta name="description" content="Nestled near the base of the vibrant Breckenridge Ski Resort, Valdoro Mountain Lodge offers visitors access to the region's year-round array of outdoor adventures including skiing, snowboarding, and golfing." />
  <title>Valdoro Mountain Lodge Resort by Hilton Grand Vacations in Breckenridge, Colorado</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Valdoro Mountain Lodge in Breckenridge, Colorado" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Lobby at Valdoro Mountain Lodge in Breckenridge, Colorado" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Valdoro Mountain Lodge in Breckenridge, Colorado" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom at Valdoro Mountain Lodge in Breckenridge, Colorado" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Kitchen at Valdoro Mountain Lodge in Breckenridge, Colorado" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.gif" alt="One Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <p class="large"><img src="floorplans/one.gif" alt="One Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1 ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>1-Bedroom</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-plus-t.gif" alt="One Bedroom Plus Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <p class="large"><img src="floorplans/one-plus.gif" alt="One Bedroom Plus Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1 ベッドルーム・プラス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>1-Bedroom Plus</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.gif" alt="Two Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <p class="large"><img src="floorplans/two.gif" alt="Two Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2 ベッドルーム</p>
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
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-t.gif" alt="Three Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <p class="large"><img src="floorplans/three.gif" alt="Three Bedroom Floor Plan at Valdoro Mountain Lodge in Breckenridge, Colorado" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3 ベッドルーム</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom</p>
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
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level" /> ブロンズ: 16 〜 19週</th>
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
                    <td>120</td>
                    <td>240</td>
                    <td>1,200</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プラス</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 37 〜 46週</th>
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
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プラス</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プラス</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 20 〜 25週</th>
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
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
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
                    <td>3 ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 〜 15週、 26 〜 36週、 47 〜 52</th>
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
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
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
                    <td>3 ベッドルーム</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/bronze.gif" alt="" class="level" /> Bronze: Weeks 16 &ndash; 19</th>
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
                    <td>Studio Plus</td>
                    <td>120</td>
                    <td>240</td>
                    <td>1,200</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Plus</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Plus</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>3 Bedroom</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 37 &ndash; 46</th>
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
                    <td>Studio Plus</td>
                    <td>170</td>
                    <td>340</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Plus</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Plus</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3 Bedroom</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 20 &ndash; 25</th>
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
                    <td>Studio Plus</td>
                    <td>250</td>
                    <td>500</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Plus</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>3 Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 15, 26 &ndash; 36, 47 &ndash; 52</th>
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
                    <td>Studio Plus</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Plus</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>3 Bedroom</td>
                    <td>840</td>
                    <td>1,680</td>
                    <td>8,400</td>
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
        <h1>ヴァルドロ・マウンテン・ロッジ</h1>
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
      <h2>アメリカ、コロラド州ブリッケンリッジ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Valdoro Mountain Lodge</h1>
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
      <h2>Breckenridge, Colorado</h2>
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
          <address>500 Village Rd, Breckenridge, CO 80424</address>
          <p>建築物としての美術性が高く評価されているヴァルドロ・マウンテン・ロッジは、賑やかなスキーリゾートの麓にあります。かつて炭鉱で栄えたブレッケンリッジの古き良き歴史を感じさせ、優雅さが程よく調和しています。</p>
          <p>国際水準のスキー場はもちろん、スノーボード、スノーモービル、ゴルフ、フライフィッシング、乗馬、ホワイトウォーター・ラフティングなど、四季を通じて、さまざまなアウトドアのアクティビティーも盛りだくさん。ビクトリア時代を思わせる情緒あるメインストリートには、数多くのお店やレストラン、画廊などが立ち並んでいます。ブレッケンリッジは、国際雪像彫刻コンテストをはじめ、ウーラー・フェストなどのさまざまなイベントでもその名を知られています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ･プラス、1～3ベッドルーム・スイート</li>
            <li>(全室ガス式暖炉、ほとんどの部屋がバルコニー付き)</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
            <li>(スタジオ・プラスには共同のランドリー施設あり)</li>
            <li>注：涼しい山中のため、冷房設備はありません。</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外に2つの大型ジャグジー、屋内プール、屋外プール（季節限定）</li>
            <li>スパ (有料)</li>
            <li>バーサービス（季節限定）のあるオーナーズ・ラウンジ</li>
            <li>フィットネス施設</li>
            <li>市内無料シャトルバス</li>
            <li>スポーツ用品レンタル（季節限定、有料）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>11年間の実績</li>
            <li>身障者向け施設あり</li>
            <li>予約制限あり</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 970-453-4880</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>500 Village Rd, Breckenridge, CO 80424</address>
          <p>Nestled near the base of the vibrant Breckenridge Ski Resort, Valdoro Mountain Lodge combines award-winning architecture incorporating Breckenridge's rich mining history with an elegant Rocky Mountain ambience. The luxurious mountain retreat offers visitors access to the region's year-round array of outdoor adventures including world-class skiing, snowboarding, golfing, fly fishing, snowmobiling, horseback riding and whitewater rafting. Guests also enjoy strolling the quaint Victorian Main Street, home to hundreds of shops, restaurants and galleries. Breckenridge is famous for its spectacular events, including Oktoberfest, the International Snow Sculpture Championships and Ullr Fest, among others.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Studio plus and 1-, 2- and 3-bedroom suites &mdash; all with gas fireplaces and most with balconies</li>
            <li>Each suite features fully equipped kitchen, washer and dryer (studio units have access to shared laundry facilities)</li>
            <li>Note: accommodations are not air-conditioned due to cooler mountain temperatures</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 outdoor oversize whirlpool spas, access to heated indoor/outdoor pool (seasonal)</li>
            <li>Full-service spa, exercise facilities</li>
            <li>Seasonal Owners Lounge with full bar service</li>
            <li>Complimentary in-town shuttle</li>
            <li>Seasonal sporting goods rentals</li>
            <li>Accessible Route from Entrance &ndash; Registration area, Guest Room, Exercise facilities, Business center, Spa</li>
            <li>Accessible guest room has 32" entry or passage ways</li>
            <li>Accessible transportation</li>
            <li>TTY for guest use</li>
            <li>Closed captioning for in-room televisions</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 970-453-4880</p>
          
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
	  getMap(39.4768691, -106.0499981, 15);
    });
  </script>

</body>
</html>