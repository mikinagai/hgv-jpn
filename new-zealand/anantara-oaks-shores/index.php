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
  <meta name="description" content="Discover the adventure capital of the southern hemisphere and New Zealand's most popular ski resort town from Oaks Shores' comfortable year round retreat. The resort is edging vast Lake Wakatipu in Queenstown and boasting breathtaking waterfront and mountain views." />
  <title>Anantara Vacation Club Resort at Oaks Shores in Queenstown, New Zealand</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Living Area of Anantara Vacation Club at Oaks Shores in Queenstown, New Zealand" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of Anantara Vacation Club at Oaks Shores in Queenstown, New Zealand" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Kitchen of Anantara Vacation Club at Oaks Shores in Queenstown, New Zealand" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Patio of Anantara Vacation Club at Oaks Shores in Queenstown, New Zealand" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Exterior of Anantara Vacation Club at Oaks Shores in Queenstown, New Zealand" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      

      <!-- 2015 -->
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 1/3 &ndash; 6/26, 10/3 &ndash; 12/18</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>300</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 6/27 &ndash; 10/2</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>700</td>
                    <td>4,700</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>900</td>
                    <td>1,700</td>
                    <td>1,200</td>
                    <td>8,200</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>1,500</td>
                    <td>2,600</td>
                    <td>1,900</td>
                    <td>13,100</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> ピーク: 1/1 &ndash; 2, 12/19 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>700</td>
                    <td>1,200</td>
                    <td>900</td>
                    <td>6,100</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>1,200</td>
                    <td>2,100</td>
                    <td>1,500</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>1,900</td>
                    <td>3,300</td>
                    <td>2,400</td>
                    <td>16,600</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: 1/3 &ndash; 6/26, 10/3 &ndash; 12/18</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>300</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: 6/27 &ndash; 10/2</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>700</td>
                    <td>4,700</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>900</td>
                    <td>1,700</td>
                    <td>1,200</td>
                    <td>8,200</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>1,500</td>
                    <td>2,600</td>
                    <td>1,900</td>
                    <td>13,100</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: 1/1 &ndash; 2, 12/19 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>700</td>
                    <td>1,200</td>
                    <td>900</td>
                    <td>6,100</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,200</td>
                    <td>2,100</td>
                    <td>1,500</td>
                    <td>10,500</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>1,900</td>
                    <td>3,300</td>
                    <td>2,400</td>
                    <td>16,600</td>
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
      <!-- 2015 -->
      

      <!-- 2016 -->
      <div id="points-next-container">
        <?php
		  if($lang == "jpn"){
		?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 1/8 &ndash; 6/27, 10/4 &ndash; 12/19</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>479</td>
                    <td>788</td>
                    <td>616</td>
                    <td>4,108</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 6/28 &ndash; 10/3</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>1,918</td>
                    <td>3,493</td>
                    <td>2,466</td>
                    <td>17,124</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> ピーク: 1/1 &ndash; 7, 12/20 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ホテル・スイート</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
                  </tr>
                  <tr>
                    <td>3 ベッドルーム・スイート</td>
                    <td>2,534</td>
                    <td>4,315</td>
                    <td>3,151</td>
                    <td>21,917</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: 1/8 &ndash; 6/27, 10/4 &ndash; 12/19</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>479</td>
                    <td>788</td>
                    <td>616</td>
                    <td>4,108</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: 6/28 &ndash; 10/3</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>1,918</td>
                    <td>3,493</td>
                    <td>2,466</td>
                    <td>17,124</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: 1/1 &ndash; 7, 12/20 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hotel Suite</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
                  </tr>
                  <tr>
                    <td>3-Bedroom</td>
                    <td>2,534</td>
                    <td>4,315</td>
                    <td>3,151</td>
                    <td>21,917</td>
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
      <!-- 2016 -->
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>アナンタラ・バケーション・クラブ・アット・オークス・ショアーズ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="points-link">必要ポイント数 (2015)</a></li>
          <li><a href="#" id="points-next-link">必要ポイント数 (2016)</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>ニュージーランド、クイーンズタウン</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Anantara Vacation Club at Oaks Shores</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart (2015)</a></li>
          <li><a href="#" id="points-next-link">Points Chart (2016)</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Queenstown, New Zealand</h2>
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
          <address>327-343 Frankton Rd, Queenstown, New Zealand</address>
          <p>年間を通じて快適に過ごせる南半球とニュージーランドの最も人気のあるスキーリゾートのオークス･ショアーズでアドベンチャーライフをお楽しみください。緑広大なクイーンズタウンのワカティプ湖、絶景のウォーターフロントとマウンテンビューを誇るオークス・ショアーズは、空港からわずか15分の距離に位置し、クイーンズタウンのタウンセンターとコンベンション・ビューローまでは徒歩30分、そしてアロータウン、ミルブルック、リマーカブルズ、コロネット・ピークとカードローナ行きのバスへ直接アクセスいただけます。</p>
          <p>四季折々の湖とサザンアルプスの目的地として、クイーンズタウンは、一年中豊富なアクティビティに恵まれ、水、空、地と遊びにはこと欠きません。オークス・ショアーズの宿泊者は、湖の周りを散歩してリラックスしたり、ワールドクラスのスキー場、ゴルフコース、ワイナリー巡り、そして脈拍数高まるアドベンチャーの追求と簡単に全てを満喫いただけます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>クイーンズタウンに位置するこの宿泊施設には、床暖房、二重窓、キッチンまたはキチネットとバスルームが配されたホテルスイートと2ベッドルーム・スイートがあります。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ウォーターフロント遊歩道と湖へのアクセス</li>
            <li>バーベキュー施設</li>
            <li>フィットネス施設とサウナ</li>
            <li>スキーとゴルフ用具のプライベートロッカー</li>
            <li>屋根付き駐車場</li>
            <li>コンシェルジェとツアー予約デスク</li>
            <li>無料インターネットとケーブルテレビ</li>
            <li>レストランとバー</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2:00 p.m.<br />チェックアウト: 10:00 a.m.<br />電話番号: +64 3 450 0005</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>327-343 Frankton Rd, Queenstown, New Zealand</address>
          <p>Discover the adventure capital of the southern hemisphere and New Zealand's most popular ski resort town from Oaks Shores' comfortable year round retreat. Edging vast Lake Wakatipu in Queenstown and boasting breathtaking waterfront and mountain views, Oaks Shores is conveniently located only a 15 minute drive from the airport, just half an hour's walk from Queenstown's charming town centre and the Queenstown Convention Bureau, and also offers direct access to buses heading for Arrowtown, Millbrook, The Remarkables, Coronet Peak and Cardrona.</p>
          <p>As a four season lake and alpine destination, Queenstown offers an impressive range of year round water, air and land based activities that make no two days the same. Guests of Oaks Shores can simply stroll down to the lake to find a wealth of relaxing and invigorating pursuits, while world class ski fields, golf courses, vineyards and pulse racing adventure pursuits are all within easy reach.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <p>This perfectly located Queenstown accommodation includes Hotel Suite, 2- and 3-bedroom apartments, all with under-floor heating, double-glazed windows and superb kitchens/kitchenettes and bathrooms.</p>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Waterfront location with walking track and lake access</li>
            <li>Landscaped courtyard with BBQ facilities</li>
            <li>Fully equipped gym and sauna</li>
            <li>Private lockers for ski and golf club storage</li>
            <li>Undercover car parking</li>
            <li>Concierge and tour booking desk</li>
            <li>Complimentary internet and cable TV</li>
            <li>Restaurant and bar</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 2 p.m.<br />Check Out: 10 a.m.<br />Phone: +64 3 450 0005</p>
          
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
	  getMap(-45.0295656, 168.6868504, 15);
    });
  </script>

</body>
</html>