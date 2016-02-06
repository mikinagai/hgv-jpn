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
  <meta name="description" content="Discover one of the island's most sought after destinations, characterised by a charming laid back vibe, great restaurants, chic bars and designer shops. Your Seminyak escape can also be combined with exploration of the island's rich artistic scenes and endless stunning beaches." />
  <title>Anantara Vacation Club Bali Seminyak in Bali, Indonesia</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Bedroom of Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bathroom of Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Bedroom of Anantara Vacation Club Bali Seminyak in Bali, Indonesia" />
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
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> ロー: 1/30 &ndash; 2/18, 2/27 &ndash; 3/26, 10/30 &ndash; 12/15</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 3/27 &ndash; 4/16, 4/24 &ndash; 6/25, 9/11 &ndash; 10/29</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>700</td>
                    <td>1,200</td>
                    <td>900</td>
                    <td>6,100</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,300</td>
                    <td>9,300</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 4/17 &ndash; 23, 6/26 &ndash; 9/10</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
                    <td>1,700</td>
                    <td>3,100</td>
                    <td>2,200</td>
                    <td>15,200</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
           <!--  <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: Jan 1 &ndash; 2, Jan 31 &ndash; Feb 6, Dec 19 &ndash; 31</th>
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
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                </tbody>
              </table>
            </div> -->
            
          </div>
          
        </div>
         <!--  <div class="row">
            <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div>
          </div> -->
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Low: Jan 30 &ndash; Feb 18, Feb 27 &ndash; Mar 26, Oct 30 &ndash; Dec 15</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: Mar 27 &ndash; Apr 16, Apr 24 &ndash; Jun 25, Sep 11 &ndash; Oct 29</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>700</td>
                    <td>1,200</td>
                    <td>900</td>
                    <td>6,100</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,300</td>
                    <td>9,300</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: Apr 17 &ndash; 23, Jun 26 &ndash; Sep 10</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,700</td>
                    <td>3,100</td>
                    <td>2,200</td>
                    <td>15,200</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
           <!--  <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: Jan 1 &ndash; 2, Jan 31 &ndash; Feb 6, Dec 19 &ndash; 31</th>
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
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                </tbody>
              </table>
            </div> -->
            
          </div>
          
        </div>
        <?php
      }
    ?>
      </div>
     <!--  2015 -->
      
      <!-- 2016 -->
      <div id="points-next-container">
        <?php
      if($lang == "jpn"){
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 1/3 &ndash; 2/4, 2/14 &ndash; 3/24, 10/28 &ndash; 12/20</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 3/25 &ndash; 4/30, 5/5 &ndash; 6/30, 9/9 &ndash; 30, 10/10 &ndash; 27</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>1,027</td>
                    <td>1,747</td>
                    <td>1,301</td>
                    <td>8,903</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 5/1 &ndash; 4, 7/1 &ndash; 9/8, 10/1 &ndash; 9</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
                    <td>2,260</td>
                    <td>4,007</td>
                    <td>2,808</td>
                    <td>19,862</td>
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
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> ピーク: 1/1 &ndash; 2, 2/5 &ndash; 13, 12/21 &ndash; 30</th>
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
                    <td>1　ベッドルーム・プール・ヴィラ</td>
                    <td>1,712</td>
                    <td>3,048</td>
                    <td>2,123</td>
                    <td>15,067</td>
                  </tr>
                  <tr>
                    <td>2　ベッドルーム・プール・ヴィラ</td>
                    <td>2,740</td>
                    <td>4,795</td>
                    <td>3,425</td>
                    <td>23,975</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
         <!--  <div class="row">
            <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div>
          </div> -->
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Silver: 1/3 &ndash; 2/4, 2/14 &ndash; 3/24, 10/28 &ndash; 12/20</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
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
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Gold: 3/25 &ndash; 4/30, 5/5 &ndash; 6/30, 9/9 &ndash; 30, 10/10 &ndash; 27</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,027</td>
                    <td>1,747</td>
                    <td>1,301</td>
                    <td>8,903</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: 5/1 &ndash; 4, 7/1 &ndash; 9/8, 10/1 &ndash; 9</th>
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
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>2,260</td>
                    <td>4,007</td>
                    <td>2,808</td>
                    <td>19,862</td>
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
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: 1/1 &ndash; 2, 2/5 &ndash; 13, 12/21 &ndash; 30</th>
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
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,712</td>
                    <td>3,048</td>
                    <td>2,123</td>
                    <td>15,067</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>2,740</td>
                    <td>4,795</td>
                    <td>3,425</td>
                    <td>23,975</td>
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
     <!--  2016 -->

      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>アナンタラ・バケーション・クラブ・バリ・スミニャック</h1>
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
      <h2>インドネシア、バリ島スミニャック</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Anantara Vacation Club Bali Seminyak</h1>
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
      <h2>Seminyak, Bali, Indonesia</h2>
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
          <address>Jalan Drupadi No. 28, Seminyak, Bali, Indonesia</address>
          <p>バリ島で最も人気があるエリアの１つで、魅力的で寛げるレストランやカフェ、シックなバーやデザイナーショップが特徴的なスミニャックの魅力を是非発見してください。セレブや著名人が好んで訪れる場所にとどまらず、スタイリッシュなスミニャックの滞在は、豊かな芸術の世界や癒しの地、伝統的な農村文化の探求、そして果てしなく続く美しいビーチを容易に組み合わせることができます。</p>
          <p>モダンなコロニアル・プランテーションからインスピレーションを受けたブティック・プール・ヴィラは、プライベートプール付きの1ベッドルーム。魅力的でバリ島らしいスタイルとアナンタラの豪華なアプローチがエキゾチックな第二の我が家として皆様をお迎えします。ヴィラは、質の高いプライバシー保護、開放感、そして自然と一体化しているような感覚を提供できるように設計されていますので、究極と言っても過言ではないアイランド・ライフスタイルを体験いただけます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>プライベートプールや屋外のレインシャワーにてお寛ぎください。ロマンチックなムードのバリ式庭園に囲まれたサンデッキで、のんびりと日光浴をお楽しみいただけます。屋内にあるバリ固有の調度品や装飾品の数々は、モダンで洗練された雰囲気と上手く調和しています。ヴィラは無料のワイヤレス・インターネットアクセスを備えており、国際ケーブルテレビは、ラウンジと各寝室にていつでもご覧いただけます。ガスコンロ、電子レンジ、大型冷蔵庫、コーヒーメーカーを備えたキッチンで料理し、半屋外のリビング・ダイニングスペースあるいはプールサイドのダイニングテーブルで食事を楽しむことができます。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>コンシェルジュとツアー予約デスク</li>
            <li>高速インターネットやボードゲームを備えた図書室</li>
            <li>保育所サービス</li>
            <li>アナンタラ・ビーチ・クラブまでの無料シャトルサービス</li>
            <li>無料自転車レンタル</li>
            <li>レストランとバー</li>
            <li>アナンタラ・スパ</li>
            <li>ビーチ・クラブ</li>
            <li>フィットネス施設</li>
            <li>アクティビティセンター</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2:00 p.m.<br />チェックアウト: 12:00 p.m.<br />電話番号: +62 361 737 908</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>Jalan Drupadi No. 28, Seminyak, Bali, Indonesia</address>
          <p>Discover one of the island's most sought after destinations, characterised by a charming laid back vibe, great restaurants, gourmet caf&acute;s, chic bars and designer shops. More than a favourite haunt for the rich and famous, your stylish Seminyak escape can easily be combined with exploration of the island's rich artistic scenes, spiritual heartland, traditional rural culture, and of course endless stunning beaches.</p>
          <p>Hide away in a boutique pool villa retreat that takes inspiration from a modern colonial plantation. A collection of 18 one, two and three bedroom private pool villas blend enchanting Balinese style and Anantara's luxurious approach to an exotic home away from home. Each self contained villa is thoughtfully designed to offer a high degree of privacy, a sense of openness and a feeling of being at one with nature, so that you can experience the ultimate island lifestyle.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <p>Refresh in your personal pool or under the al fresco rain shower. Bask on a lounger on the sundeck, surrounded by the luscious landscaping of your exotic Balinese garden. Inside, indigenous decor and furnishings create a stylish destination ambience that is matched by modern convenience. Keeping in touch is easy with complimentary in-villa WiFi, and international cable TVs are found in your lounge and every bedroom. Your kitchen, equipped with a two ring gas hob, microwave, large refrigerator, tea and coffee making amenities, allows you to create a tasty snack or meal, to be enjoyed in the comfort of your semi outdoor living and dining space, or at your shaded poolside dining table.</p>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Concierge and tour booking facility</li>
            <li>Library with high speed internet and board games</li>
            <li>Childcare services</li>
            <li>Complimentary shuttle service to Anantara's Beach Club</li>
            <li>Complimentary bicycles</li>
            <li>Restaurant &amp; Bar</li>
            <li>Anantara Spa</li>
            <li>Beach Club</li>
            <li>Fitness Centre</li>
            <li>Activities Centre</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 14:00<br />Check Out: 12:00<br />Phone: +62 361 737 908</p>
          
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
	  getMap(-8.68861, 115.165131, 14);
    });
  </script>

</body>
</html>