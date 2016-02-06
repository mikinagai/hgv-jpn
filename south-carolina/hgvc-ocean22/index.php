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
  <meta name="description" content="Ideally situated in the heart of the Grand Strand on magnificent Myrtle Beach, Hilton Grand Vacations Club at Anderson Ocean Club offers a spectacular vacation setting featuring elegantly appointed ocean view and oceanfront suites." />
  <title>Hilton Grand Vacations Club at Anderson Ocean Club in Myrtle Beach, South Carolina</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Anderson Ocean Club in Myrtle Beach, South Carolina" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at Anderson Ocean Club in Myrtle Beach, South Carolina" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Anderson Ocean Club in Myrtle Beach, South Carolina" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The-Bedroom at Anderson Ocean Club in Myrtle Beach, South Carolina" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
      
        <div class="row">
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-1-t.jpg" alt="One-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/one-1.jpg" alt="One-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
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
              <p class="small"><img src="floorplans/one-2-t.jpg" alt="One-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/one-2.jpg" alt="One-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>1ベッドルーム・プラス</p>
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
              <p class="small"><img src="floorplans/two-1-t.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/two-1.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
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
              <p class="small"><img src="floorplans/two-2-t.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/two-2.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>2ベッドルーム・プラス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>2-Bedroom Plus</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-1-t.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/three-1.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム・プラス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom Plus</p>
              <?php
				}
			  ?>
            </div>
          </div>
          <div class="col-sm-3 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/three-2-t.jpg" alt="Three-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/three-2.jpg" alt="Three-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム・プラス</p>
              <?php
			    }
  			    else {
			  ?>
              <p>3-Bedroom Plus</p>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 1 &ndash; 7週、48 &ndash; 50週</th>
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
                    <td>1ベッドルーム</td>
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プラス</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 8 &ndash; 20週、36 &ndash; 47週、51週、52週</th>
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
                    <td>1ベッドルーム</td>
                    <td>340</td>
                    <td>680</td>
                    <td>3,400</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
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
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 21 &ndash; 35週</th>
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
                    <td>1ベッドルーム</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プラス</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
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
                  <tr>
                    <td>3ベッドルーム・プラス</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 1 &ndash; 7, 48 &ndash; 50</th>
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
                    <td>240</td>
                    <td>480</td>
                    <td>2,400</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Plus</td>
                    <td>300</td>
                    <td>600</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>350</td>
                    <td>700</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Plus</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>480</td>
                    <td>960</td>
                    <td>4,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 8 &ndash; 20, 36 &ndash; 47, 51, 52</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>420</td>
                    <td>840</td>
                    <td>4,200</td>
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
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>700</td>
                    <td>1,400</td>
                    <td>7,000</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 21 &ndash; 35</th>
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
                    <td>1-Bedroom Plus</td>
                    <td>620</td>
                    <td>1,240</td>
                    <td>6,200</td>
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
                  <tr>
                    <td>3-Bedroom Plus</td>
                    <td>960</td>
                    <td>1,920</td>
                    <td>9,600</td>
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
        <h1>オーシャン22バイ・<br/>ヒルトン・グランド・バケーションズ・クラブ</h1>
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
      <h2>アメリカ、サウス・カロライナ州マートルビーチ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Ocean 22 by Hilton Grand Vacations Club</h1>
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
      <h2>Myrtle Beach, South Carolina</h2>
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
          <address>2200 N Ocean Blvd, Myrtle Beach, SC 29577</address>
          <p>オーシャン22バイ・ヒルトン・グランド・バケーションズ・クラブは砂浜と波、そしてアメリカで多くの人から愛されているこのビーチタウンが持つアメリカ南部独特の魅力を満喫できる理想的なリゾートです。マートルビーチ沿いに建ち、有名なオーシャン・ブルバードからアクセス可能な22階建てのタワーは、我が家で暮らすような快適さと便利さを提供し、リゾートスタイルの充実したアメニティで贅沢な時間を過ごしていただけます。2015年の夏オープン予定で、現代的な内装と都会的なビーチをアクセントとしたオーシャンフロントとオーシャンビューのスイートがあります。
マートルビーチの有名なゴルフ場やボードウォーク、人気のあるショッピング、レストランやナイトライフもリゾートからすぐそばにあり、ご家族からカップルまで色々なメンバー様に十分楽しんでいただけます。
</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>1～3ベッドルーム・スイート</li>
            <li>フルキッチン完備</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋外プールと季節限定のプールバー</li>
            <li>屋内プールとホットタブ</li>
            <li>	デリ（軽食のテイクアウトのお店）</li>
            <li>フィットネス施設</li>
            <li>ラウンジ</li>
            <li>ユース・アクティビティ・センター（お子様向けのレクリエーション施設）</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>身障者向け施設あり</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />
          最寄りの空港: マートルビーチ空港（MYR）から6マイル（9.7km）</p>
          
          <p>電話番号: 843-848-0022<br>
          ファックス: 843-848-4022</p>
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2200 N Ocean Blvd, Myrtle Beach, SC 29577</address>
          <p>Ocean 22 by Hilton Grand Vacations Club provides the ideal setting to savor the sand, surf and southern charm of one of the most beloved beach towns in America. Located directly on Myrtle Beach, with access from the famed Ocean Boulevard, this 22-story tower provides all the comforts and conveniences of home, complimented by a splendid collection of resort-style amenities. Slated to open in summer 2015, Ocean 22 offers oceanfront and ocean-view suites featuring contemporary décor and urban beach-inspired accents. Myrtle Beach’s award-winning golf courses, signature boardwalk, and popular shopping, dining and nightlife are just steps away and offer a wealth of adventures for families and couples alike.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1-, 2-, and 3-bedroom suites</li>
            <li>Each suite features a fully equipped kitchen</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
          	<li>Outdoor pool and seasonal pool bar</li>
            <li>Enclosed pool and hot tub</li>
            <li>Grab-and-go deli</li>
            <li>Fitness Center</li>
            <li>Lobby Lounge</li>
            <li>Youth activity center</li>
            <li>Managed by Hilton Grand Vacations</li>
            <li>Non-Smoking Resort</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />
          Check Out: 10 a.m.<br />Nearest Airport: MRY, Mrtle Beach, 6 miles</p>
          <p>Phone: 843-848-0022<br>
          Fax: 843-848-4022</p>
          
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
	  getMap(33.701523, -78.8694387, 15);
    });
  </script>

</body>
</html>