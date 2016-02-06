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
  <meta name="description" content="The Bay Club at Waikoloa Beach Resort offers an idyllic setting on the sun-drenched island of Hawaii. The resort features expansive views, luxurious accommodations and close proximity to renowned dining, retail and entertainment venues." />
  <title>The Bay Club at Waikoloa Beach Resort in Waikoloa, Hawaii</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Dining Area at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The-Bedroom at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The-Bedroom at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Bathroom at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Outdoor Grilling Area at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
          <div class="slide">
            <img src="img/09.jpg" alt="The Pool at the Bay Club at Waikoloa Beach Resort in Hawaii" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-1-t.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <p class="large"><img src="floorplans/one-1.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1ベッドルーム</p>
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
              <p class="small"><img src="floorplans/one-2-t.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <p class="large"><img src="floorplans/one-2.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1ベッドルーム</p>
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
              <p class="small"><img src="floorplans/one-3-t.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <p class="large"><img src="floorplans/one-3.jpg" alt="One-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
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
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-1-t.jpg" alt="Two-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <p class="large"><img src="floorplans/two-1.jpg" alt="Two-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
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
        
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-2-t.jpg" alt="Two-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
              <p class="large"><img src="floorplans/two-2.jpg" alt="Two-Bedroom Floor Plan at the Bay Club at Waikoloa Beach Resort in Hawaii" /></p>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 19 &ndash; 22週、36 &ndash; 41週</th>
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
                    <td>1ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1 &ndash; 18週、23 &ndash; 35週、42 &ndash; 52週</th>
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
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 19 &ndash; 22, 36 &ndash; 41</th>
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
                    <td>1-Bedroom</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>5,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1 &ndash; 18, 23 &ndash; 35, 42 &ndash; 52</th>
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
                    <td>1-Bedroom</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
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
        <h1>ザ・ベイクラブ・アット・ワイコロア・ビーチ・リゾート</h1>
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
      <h2>アメリカ、ハワイ州ワイコロア</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>The Bay Club at Waikoloa Beach Resort</h1>
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
      <h2>Waikoloa, Hawaii</h2>
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
          <address>69-450 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>入り組んだ秘境の渓谷や、燃え立つ溶岩など自然の驚異をヘリコプター・ツアーから望む雄大な光景は、ハワイ島ならではの醍醐味です。コハラコーストの散策でも、手つかずの自然を間近に感じられます。2つのダイナミックなゴルフコースに囲まれたこのリゾートは、太陽が降り注ぐのどかで美しい環境に位置します。キングスコースとビーチコースは、大海原、溶岩、ヤシの木に囲まれた島内最大級のスケールを誇っています。広大な眺め、贅沢な施設に加え、リゾートから程近いキングス・ショップスでは、カジュアルからフォーマルまでバラエティ豊かなレストランやお店だけでなくエンターテイメントも充実しており、ご家族揃ってお楽しみいただけます。また、すぐ近くのコハラ・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブのプール、ジャグジー、そしてプールバーもご利用いただけます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～2ベッドルーム・スイート（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、乾燥機完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つのプールとジャグジー</li>
            <li>テニスコート</li>
            <li>アウトドア・バーベキューグリル</li>
            <li>プールサイド・カフェ &amp; バー</li>
            <li>パッティング・グリーン</li>
            <li>フィットネス施設</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>加盟リゾート</li>
            <li>17年間の実績</li>
            <li>RCIゴールドクラウン・リゾート</li>
            <li>全室禁煙</li>
            <li>ハワイ州宿泊税が加算されます。</li>
            <li>ザ・ベイクラブにご滞在の間、ヒルトン・グランド・バケーションズ・クラブのメンバー様およびゲストは、隣接するヒルトン・ワイコロア・ビレッジ・リゾート・ホテル内にあるレストラン、ショップならびにスパをご利用いただけます。 ただし、ホテル内のプール、ビーチ、ラグーンならびにフィットネス施設のご利用は、ホテル宿泊者のみに限られていますので、あらかじめご了承ください</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 808-886-7979</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>69-450 Waikoloa Beach Dr, Waikoloa, HI 96738</address>
          <p>Celebrate the Big Island's hidden valleys and glowing lava from the height of a helicopter tour&hellip; or enjoy the island's bounty of natural beauty firsthand along the walking trails of the Kohala Coast. Nestled between two championship golf courses, The Bay Club at Waikoloa Beach Resort offers an idyllic setting on the sun-drenched island of Hawaii. The resort features expansive views, luxurious accommodations and close proximity to the renowned dining, retail and entertainment venues at The Kings' Shops and newly opened Queens' MarketPlace. Guests of the resort also enjoy access to the pools, whirlpool spa and pool bar at the neighboring Kohala Suites by Hilton Grand Vacations Club.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1- and 2-bedroom suites with private lanais</li>
            <li>Each suite features fully equipped kitchen, washer and dryer</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 swimming pools, whirlpool spa</li>
            <li>Tennis courts</li>
            <li>Outdoor BBQ grill areas</li>
            <li>Poolside caf&eacute; and bar</li>
            <li>Putting green</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: 808-886-7979</p>
          
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
            <a href="../kings-land-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kingsland-t.jpg" alt="Kings' Land by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kings' Land by Hilton Grand Vacations Club
              </div>
            </a>
          </div>
          <div class="row nearby">
            <a href="../kohala-hgvc/">
              <div class="col-xs-4">
                <img src="../img/kohala-t.jpg" alt="Kohala Suites by Hilton Grand Vacations Club" />
              </div>
              <div class="col-xs-8">
                Kohala Suites by Hilton Grand Vacations Club
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
	  getMap(19.924678, -155.8815732, 14);
    });
  </script>

</body>
</html>