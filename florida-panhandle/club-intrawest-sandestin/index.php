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
  <meta name="description" content="Nestled between the Emerald Coast and the Choctawhatchee Bay, Club Intrawest &ndash; Sandestin offers a stunning setting for warm-weather fun." />
  <title>Club Intrawest &ndash; Sandestin Resort by Hilton Grand Vacations in Sandestin, Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Pool at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Pool at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Golf Course at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Beach at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Beach at Club Intrawest &ndash; Sandestin" />
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
          
        </div>
        
        <br />
        
        <div class="row">
        
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
          
        </div> 
        
        <br />
        
        <div class="row">
        
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
          
        </div>
        
        <br />
        
        <div class="row">
        
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
            
          </div>
        
          <div class="col-sm-6">
          
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 1 &ndash; 6, 49</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>288</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 37 &ndash; 46, 51 &ndash; 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>832</td>
                    <td>4,064</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,376</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash;  8, 10, 12 &ndash; 24, 30 &ndash; 35</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>576</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Silver + Gold): Week 48</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>288</td>
                    <td>832</td>
                    <td>3,104</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>384</td>
                    <td>1,088</td>
                    <td>4,096</td>
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
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Gold + Platinum): Week 47</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>576</td>
                    <td>960</td>
                    <td>4,512</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Platinum + Gold): Week 36</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>576</td>
                    <td>480</td>
                    <td>832</td>
                    <td>4,160</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>768</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,504</td>
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
                    <th colspan="4"><img src="../../img/mixed-holiday.gif" alt="" class="level" /> Mixed (Holiday + Platinum): Weeks 9, 11</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>832</td>
                    <td>960</td>
                    <td>6,080</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,088</td>
                    <td>1,280</td>
                    <td>8,000</td>
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
                    <th colspan="4"><img src="../../img/holiday.gif" alt="" class="level" /> Holiday: Weeks 25 &ndash; 29</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>832</td>
                    <td>832</td>
                    <td>5,824</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,088</td>
                    <td>1,088</td>
                    <td>7,616</td>
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
        <h1>クラブ・イントラウエスト ー サンデスティン</h1>
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
      <h2>アメリカ、フロリダ州サンデスティン</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Sandestin</h1>
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
      <h2>Sandestin, Florida</h2>
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
          
          <h3>追加情報</h3>
          <p>チェックイン日：日曜日<br/>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 850-622-3400</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
          <h3>Overview</h3>
          <address>
          8626 Baytowne Avenue, Sandestin, FL 32550
          </address>
          <p>Nestled between the Emerald Coast and Choctawhatchee Bay in Sandestin Golf and Beach Resort, Club Intrawest – Sandestin offers a stunning setting for warm-weather fun. Sandestin, Florida is the ultimate in southern relaxation. Over seven miles of beach and bay front make this gated community a spectacular destination teeming with water sports and recreational pursuits of every kind. Club Intrawest – Sandestin features spacious Vacation Homes, a large pool and inviting hammocks. From your Vacation Home, explore the surrounding area, including Jolee Island Nature Park, world-class golf and tennis facilities, the lively Village of Baytowne Wharf and more.</p>
          <p>Club Intrawest &ndash; Sandestin does not allow motorcycles, boats or jet skis, trailers or motor homes on the property. Arrangements for off-site storage can be made by contacting Club Intrawest – Sandestin directly at 1-850-622-3400.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom resort view Vacation Homes</li>
            <li>Each Vacation Home features a fully equipped, gourmet kitchen</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Swimming pool, sundeck and 2 hot tubs</li>
            <li>Children's wading area and pool</li>
            <li>Laundry facilities on property</li>
            <li>Exercise Facilities</li>
            <li>Movie Theater</li>
<li>Kid's Game Room</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 850-622-3400</p>
          
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
	  getMap(30.384792, -86.324295, 13);
    });
  </script>

</body>
</html>