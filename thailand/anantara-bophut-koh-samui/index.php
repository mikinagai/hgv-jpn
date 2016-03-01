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
  <meta name="description" content="Enjoy water sports on the Gulf of Thailand's placid warm waters whilst residing at our elegant Samui resort. Soak in the sun by Anantara's elegant infinity edge pool or on Bophut's soft white sand." />
  <title>Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Living Area of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Bedroom of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Bathroom of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/07.jpg" alt="The Pool of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/08.jpg" alt="The Pool of the Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/09.jpg" alt="Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="floorplan-container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/one-t.jpg" alt="One Bedroom Floor Plan at Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" /></p>
              <p class="large"><img src="floorplans/one.jpg" alt="One Bedroom Floor Plan at Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" /></p>
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
          <div class="col-sm-6 text-center">
            <div class="floorplan">
              <p class="small"><img src="floorplans/two-t.jpg" alt="Two Bedroom Floor Plan at Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" /></p>
              <p class="large"><img src="floorplans/two.jpg" alt="Two Bedroom Floor Plan at Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa in Thailand" /></p>
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> ロー: 4/24 &ndash; 7/9</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>400</td>
                    <td>800</td>
                    <td>500</td>
                    <td>3,700</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 8/28 &ndash; 12/15</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
       <!--  <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 1/30 &ndash; 2/19, 2/27 &ndash; 4/23, 7/10 &ndash; 8/27</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> -->
          <!-- <div class="row">
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Low: 4/24 &ndash; 7/9</th>
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
                    <td>400</td>
                    <td>800</td>
                    <td>500</td>
                    <td>3,700</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: 8/28 &ndash; 12/15</th>
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
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
     <!--    
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: 1/30 &ndash; 2/19, 2/27 &ndash; 4/23, 7/10 &ndash; 8/27</th>
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
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> -->
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
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> ロー: 4/18 &ndash; 4/30, 5/5 &ndash; 7/7</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>616</td>
                    <td>1,130</td>
                    <td>753</td>
                    <td>5,477</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 3/1 &ndash; 3/31, 8/26 &ndash; 9/30, 10/17 &ndash; 11/30</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 1/1 &ndash; 2/29, 4/1 &ndash; 17, 5/1 &ndash; 4, 7/8 &ndash; 8/25, 10/1 &ndash; 16, 12/1 &ndash; 31</th>
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
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>1,096</td>
                    <td>1,918</td>
                    <td>1,370</td>
                    <td>9,590</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
          <!-- <div class="row">
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Low: 4/18 &ndash; 4/30, 5/5 &ndash; 7/7</th>
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
                    <td>616</td>
                    <td>1,130</td>
                    <td>753</td>
                    <td>5,477</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: 3/1 &ndash; 3/31, 8/26 &ndash; 9/30, 10/17 &ndash; 11/30</th>
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
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: 1/1 &ndash; 2/29, 4/1 &ndash; 17, 5/1 &ndash; 4, 7/8 &ndash; 8/25, 10/1 &ndash; 16, 12/1 &ndash; 31</th>
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
                    <td>1,096</td>
                    <td>1,918</td>
                    <td>1,370</td>
                    <td>9,590</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
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
        <h1>アナンタラ・バケーション・クラブ・ボープット・コー・サムイ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="floorplans-link">間取り</a></li>
          <li><a href="#" id="points-link">必要ポイント数 (2015)</a></li>
          <li><a href="#" id="points-next-link">必要ポイント数 (2016)</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>タイ、サムイ島</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Anantara Vacation Club, Bophut Koh Samui Resort &amp; Spa</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="floorplans-link">Floor Plans (<span id="floorplan-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart (2015)</a></li>
          <li><a href="#" id="points-next-link">Points Chart (2016)</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Koh Samui, Surat Thani, Thailand</h2>
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
          <address>99/9 Bophut Bay, Koh Samui, Surat Thani, Thailand</address>
          <p>タイ湾の穏やかで温かい水の中で、ウォータースポーツを楽しみましょう。アナンタラが誇るエレガントなインフィニティ・プールのデッキやボープットのやわらかな白砂の上で、日光浴を楽しむこともできます。アナンタラ・スパ独自開発の贅沢なトリートメントパッケージで、癒しのひとときを過ごすのもいいでしょう。海を眺めながら楽しめるひときわ辛いタイカレーや、シェフ手製のイタリアン・パスタもお勧めです。</p>
          <p>アナンタラ・ボープットはサムイ島の豪華リゾートならではのおもてなしを、最高のスタイルでお届けします。ビル・ベンズリー設計の南国風庭園が、ボープット・ビーチの漁師町らしいのどかさの中に華やいだ空気を添えています。タイ南部風の建築様式の中にはサムイ島の伝統文化が息づいていて、最先端の設備やアナンタラ独自のデザイン感覚とよくマッチしています。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>サムイ島のアナンタラ・ボープット・リゾート＆スパの豪華なヴィラを独り占めして、島の魅力とアナンタラのおもてなしの流儀を実感してください。豪華なプール・ヴィラが数種類あり、いずれもプライベート・プール、薄型テレビ、大型バスタブなど、設備・サービスとも充実しています。1ベッドルーム・タイプも2ベッドルーム・タイプも上品なデザインが自慢。タイ南部の様式を取り入れた工芸品や最高品質の家具と調度品が輝いています。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>各部屋には特製の人造大理石でできた2人用バスタブが広々としたベッドルームに向かって設置され、室内にはタイ南部様式の装飾が施されています。ウインドサーフィンやヨットから、スパ、ビーチ・ヨガ、レイキ、テニス、料理教室、周辺観光まで、レジャー施設やアクティビティも充実していて、いずれもサムイ島のすばらしい自然と文化の賜物です。無料にてWi-Fi インターネットをロビー、ライブラリー、エクリプスバー、ハイ・タイドとフルムーン・レストランそしてプールサイドにてご利用いただけますので、世界の最新情報を常に維持できます。 </p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 12 p.m.<br />電話番号: +66 77 428300</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>99/9 Bophut Bay, Koh Samui, Surat Thani, Thailand</address>
          <p>Enjoy water sports on the Gulf of Thailand's placid warm waters whilst residing at our elegant Samui resort. Soak in the sun by Anantara's elegant infinity edge pool or on Bophut's soft white sand. Unwind with one of our specially developed Anantara spa packages. Dine on fiery Thai curries and handmade Italian pastas overlooking the ocean.</p>
          <p>Anantara Bophut presents a Koh Samui resort lifestyle that is quite unlike any other, from Bill Bensley designed tropical gardens which complement the charms of Fisherman's Cove on Bophut Beach, to southern Thai architecture which reflects our local cultural heritage, and world class amenities enhanced by Anantara's unique design touches.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <p>With an expansive array of facilities and services, the luxury suites at Anantara Bophut Resort &amp; Spa offer spacious comfort in addition to mesmerising views of the tropical surroundings. There is also a variety of luxury pool villas to choose from, with each offering exclusive facilities and services including private pools, LCD television, a large bathtub and much more. Whether one or two bedroom, all our luxury villas in Koh Samui are designed to the highest standard, with unique Southern Thai-inspired artwork and the highest quality furniture and fittings.</p>
          
          <br />
          
          <h3>Resort Features</h3>
          <p>Every room features a bathtub for two which opens onto a spacious bedroom that is brought to life by southern Thai artwork and d&eacute;cor. A wealth of leisure facilities and experiences from windsurfing and sailing to spa, beach yoga, reiki, tennis, cooking classes and area excursions help you to make the most of Koh Samui's stunning natural and cultural attractions. While complimentary Wi-Fi Internet at our Lobby and Library, in the Eclipse Bar, High Tide and Full Moon restaurants, as well as poolside, allows you to keep up to date with the world.</p>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 2 p.m.<br />Check Out: 12 p.m.<br />Phone: +66 77 428300</p>
          
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
	  getMap(9.562156, 100.025516, 16);
    });
  </script>

</body>
</html>