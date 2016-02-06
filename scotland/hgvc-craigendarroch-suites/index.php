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
  <meta name="description" content="Set amid the lush rolling farmland of Royal Deeside, this celebrated resort occupies a spectacular private country estate. Centuries of cultural tradition are brought to life in the property's Nordic architecture and gourmet cuisine." />
  <title>Hilton Grand Vacations Club Resort at Craigendarroch Suites in Royal Deeside, Scotland</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bathroom at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Pool at Hilton Grand Vacations Club at Craigendarroch Suites in Royal Deeside, Scotland" />
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 2 &ndash; 6週、44 &ndash; 51週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> ゴールド: 7 &ndash; 13週、16 &ndash; 20週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> プラチナ: 1週、14 &ndash; 15週、21 &ndash; 43週、52週</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタジオ</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>スタジオ・プラス</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>1ベッドルーム・プレミア</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム・プレミア</td>
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
              <table class="table table-hover bronze">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 2 &ndash; 6, 44 &ndash; 51</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Studio</td>
                    <td>1,700</td>
                  </tr>
                  <tr>
                    <td>Studio Plus</td>
                    <td>3,000</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>4,100</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
                    <td>4,800</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 7 &ndash; 13, 16 &ndash; 20</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Studio</td>
                    <td>2,500</td>
                  </tr>
                  <tr>
                    <td>Studio Plus</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 1, 14 &ndash; 15, 21 &ndash; 43, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Studio</td>
                    <td>3,500</td>
                  </tr>
                  <tr>
                    <td>Studio Plus</td>
                    <td>6,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Premier</td>
                    <td>8,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Premier</td>
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
        <h1>ヒルトン・グランド・バケーションズ・アット・<br/>クレイゲンダロック・スイーツ</h1>
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
      <h2>スコットランド、ロイヤル·ディーサイド、バラター</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Hilton Grand Vacations Club at Craigendarroch Suites</h1>
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
      <h2>Ballater, Royal Deeside, Scotland</h2>
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
          
          <address>Braemar Rd, Ballater AB35 5XA, Scotland</address>
          
          <h3>宿泊施設</h3>
          <ul>
            <li>スタジオ、1～2ベッドルーム・スイート</li>
            <li>スタジオと1ベッドルーム（ミニキッチン完備）、2ベッドルーム・スイート（キッチン完備）</li>
            <li>ワイヤレス・インターネットアクセス(無料)</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>屋内プール、ジャグジー、サウナ</li>
            <li>スカッシュとテニスコート</li>
            <li>レストラン、ラウンジバー</li>
            <li>ヘルス＆ビューティー・スイート</li>
            <li>お子様向けインストラクター付きレクリエーション・プログラム（季節限定）</li>
            <li>フィットネス施設</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 4 p.m.<br />チェックアウト: 10 a.m.<br />電話番号 :+44 (0) 13397 55558</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Braemar Rd, Ballater AB35 5XA, Scotland</address>
          <p>Nestled near the banks of the River Dee on the outskirts of the city of Ballater, this elegantly appointed resort provides a taste of luxury steeped in cultural tradition. Once a Victorian country house, the property sits on a spectacular private estate within the bounds of the Cairngorms National Park and just a few miles from Balmoral Castle. Plentiful on-site amenities are complemented by nearby golf, fishing, horseback riding and skiing… all contributing to the spirit of a quintessential Scottish holiday. For hundreds of years, Royal Deeside has been one of Scotland's most revered treasures, featuring lush countryside that for generations has served as a favorite retreat of the Royal Family.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious Studios, plus 1- and 2-bedroom suites</li>
            <li>Studios and 1-bedroom suites feature kitchenettes, 2-bedroom suites include well-equipped kitchens</li>
            <li>Complimentary wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Indoor swimming pool, whirlpool spa, sauna</li>
            <li>Squash and tennis courts</li>
            <li>Restaurant, lounge bar</li>
            <li>Health and beauty suite</li>
            <li>Supervised seasonal children's recreation programs</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 10 a.m.<br />Phone: +44 (0) 13397 55558</p>
          
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
	  getMap(57.055786, -3.056001, 14);
    });
  </script>

</body>
</html>