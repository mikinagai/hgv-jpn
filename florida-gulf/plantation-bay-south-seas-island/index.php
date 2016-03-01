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
  <meta name="description" content="This quiet waterfront hideaway is just a short walk from the peaceful pleasures of its nearby beaches. Superbly situated on Bryant's Bayou, Plantation Bay Villas provides a calming setting from which to enjoy all that South Seas Island Resort has to offer." />
  <title>Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Exterior at Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Kitchen at Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom at Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Patio at Plantation Bay Villas at South Seas Island Resort in Captiva Island, Florida" />
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
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> シルバー: 19 &ndash; 23週、34 &ndash; 42週、49週、50週</th>
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
                    <td>3ベッドルーム</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3ベッドルーム</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3ベッドルーム</td>
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
                    <td>3-Bedroom</td>
                    <td>410</td>
                    <td>820</td>
                    <td>4,100</td>
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
                    <td>3-Bedroom</td>
                    <td>580</td>
                    <td>1,160</td>
                    <td>5,800</td>
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
                    <td>3-Bedroom</td>
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
        <h1>プランテーション・ベイ・ヴィラ・アット・<br/>サウスシーズ・アイランド・リゾート</h1>
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
      <h2>アメリカ、フロリダ州キャプティバ島</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Plantation Bay Villas at South Seas Island Resort</h1>
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
      <h2>Captiva Island, Florida</h2>
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
          <address>5400 Plantation Rd, Captiva Island, FL 33924</address>
          <p>メキシコ湾から程近い、静かな水辺のリゾート。穏やかな海辺で、セーリングや日光浴をお楽 
しみください。プランテーション・ベイ・ヴィラはキャプティバ島ブライアンツ・バイウーの湾岸部に位置し、サウスシーズ・アイランド・リゾートならではの静寂さが保たれています。ゴルフやテニス、ウォータースキーなど、アウトドアの環境も充実しています。世界的に有名な 
キャプティバ島の魅力に溢れた太陽と海辺のリゾートで、ゆったりと癒しのひとときをお過ごしください。ロマンチックな旅をご希望の方にも、ご家族連れの方にも、きっと満足いただけることでしょう。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <ul>
            <li>3ベッドルーム・タウンハウス（バルコニー付き）</li>
            <li>フルキッチン、洗濯機、</li>
            <li>乾燥機完備</li>
            <li>ジャグジーとテニスコート</li>
          </ul>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>サウスシーズ・アイランド・リゾート内に、温水プール、ジャグジー、フィットネス、ゴルフ場、テニスコート、釣り場、ボート・マリーナ、レストラン、ショップ、お子様向けインストラクター付きレクリエーション･プログラム</li>
            <li>ヒルトン・グランド・バケーションズが管理</li>
            <li>加盟リゾート</li>
            <li>23年間の実績</li>
            <li>予約制限あり</li>
            <li>身障者向け施設なし</li>
            <li>階段のみ（エレベーターはありません）</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 239-472-5111</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>5400 Plantation Rd, Captiva Island, FL 33924</address>
          <p>This quiet waterfront hideaway is just a short walk from the Gulf of Mexico beaches and the peaceful pleasures of sunning and sailing. Superbly situated on Bryant's Bayou on the bay side of Captiva Island, Plantation Bay Villas provides a calming setting from which to enjoy all that South Seas Island Resort has to offer. Golf, tennis, water skiing and other outdoor activities abound, as do endless opportunities to soothe the soul. Indulge in the authentic island experience of Captiva, where the sun, sea and gentle surf lure vacationers from around the world for romantic adventures or family fun.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 3-bedroom townhouses with screened lanais</li>
            <li>Each townhouse features fully equipped kitchen, washer and dryer</li>
            <li>Whirlpool spa</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Supervised children's recreation programs</li>
            <li>Golf, tennis, fishing, boating, dining and shopping</li>
            <li>Exercise facilities</li>
            <li>Heated swimming pools</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 10 a.m.<br />Phone: 239-472-5111</p>
          
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
	  getMap(26.525649, -82.190781, 16);
    });
  </script>

</body>
</html>