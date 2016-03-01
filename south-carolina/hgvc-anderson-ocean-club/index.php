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
              <p class="small"><img src="floorplans/studio-t.jpg" alt="Studio Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/studio.jpg" alt="Studio Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>スタジオ</p>
              <?php
			    }
  			    else {
			  ?>
              <p>Studio</p>
              <?php
				}
			  ?>
            </div>
          </div>
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
              <p class="small"><img src="floorplans/two-3-t.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/two-3.jpg" alt="Two-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
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
              <p class="small"><img src="floorplans/three-t.jpg" alt="Three-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <p class="large"><img src="floorplans/three.jpg" alt="Three-Bedroom Floor Plan at Anderson Ocean Club in Myrtle Beach, South Carolina" /></p>
              <?php
		  		if($lang == "jpn"){
	  		  ?>
                <p>3ベッドルーム</p>
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
                    <td>スタジオ</td>
                    <td>110</td>
                    <td>220</td>
                    <td>1,100</td>
                  </tr>
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
                    <td>スタジオ</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
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
                    <td>スタジオ</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
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
                    <td>Studio</td>
                    <td>110</td>
                    <td>220</td>
                    <td>1,100</td>
                  </tr>
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
                    <td>Studio</td>
                    <td>160</td>
                    <td>320</td>
                    <td>1,600</td>
                  </tr>
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
                    <td>Studio</td>
                    <td>220</td>
                    <td>440</td>
                    <td>2,200</td>
                  </tr>
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
        <h1>ヒルトン・グランド・バケーションズ・クラブ・アット・<br/>アンダーソン・オーシャン・クラブ</h1>
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
        <h1>Hilton Grand Vacations Club at Anderson Ocean Club</h1>
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
          <address>2600 N Ocean Blvd, Myrtle Beach, SC 29577</address>
          <p>グランド・ストランドの中心部に位置するヒルトン・グランド・バケーションズ・クラブ・アット・アンダーソン・オーシャン・クラブは、皆様に最上級のバケーションを提供します。2012年初期に既存のアンダーソン・オーシャン・クラブ＆スパ内にオープン予定で、エレガントに装飾されたパティオ付きのオーシャンビューとオーシャンフロントのスイートは、我が家で過ごすような快適さを備えています。</p>
          <p>また、リゾートの周辺のチャンピオンシップ・ゴルフコース、バラエティーに富んだ数々のレストラン、ショッピングやエンターテイメントがお楽しみいただける場所へのアクセスも便利です。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1～3ベッドルーム・スイート</li>
            <li>フルキッチン完備</li>
            <li>テレビ、DVD完備</li>
            <li>高速ワイヤレス･インターネットアクセス完備（無料）</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>2つの屋外プールとホットタブ、屋内温水プール、</li>
            <li>お子様向けプール</li>
            <li>プールバー（季節限定）</li>
            <li>スパ</li>
            <li>フィットネス施設</li>
            <li>ビューティーサロン</li>
            <li>加盟リゾート</li>
            <li>身障者向け施設あり</li>
            <li>全室禁煙</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 866-578-8494</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>2600 N Ocean Blvd, Myrtle Beach, SC 29577</address>
          <p>Ideally situated in the heart of the Grand Strand on magnificent Myrtle Beach, Hilton Grand Vacations Club at Anderson Ocean Club offers a spectacular vacation setting. Located within the existing Anderson Ocean Club and Spa, this upscale resort features elegantly appointed ocean view and oceanfront suites, each with a furnished patio and extensive comforts of home. Championship golf courses and a variety of dining, shopping and entertainment venues are within easy access of the resort's central location.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious studios, 1-, 2-, and 3-bedroom suites</li>
            <li>Fully-equipped kitchens</li>
            <li>TV, DVD in units</li>
            <li>Complimentary wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>2 outdoor pools and hot tub, covered heated pool, and children's pool</li>
            <li>Seasonal pool bar</li>
            <li>Awakening Spa</li>
            <li>Fitness center</li>
            <li>Coffee Bar</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 843-213-5340</p>
          
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
	  getMap(33.7049108, -78.8646273, 15);
    });
  </script>

</body>
</html>