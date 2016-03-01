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
  <meta name="description" content="Rising proudly in a 38-floor twin tower design, this resort offers a stylish, relaxing and fulfilling urban lifestyle. Enjoy refreshing seclusion from the bustling city outside as you unwind on the sun deck and swim in the 32 metre long infinity edge swimming pool." />
  <title>Anantara Vacation Club Bangkok Sathorn in Thailand</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Pool of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Lobby of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Living Area of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The-Bedroom of the Anantara Vacation Club Bangkok Sathorn in Thailand" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
     <!--  2015 -->
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> ロー: 4/16 &ndash; 7/23, 8/28 &ndash; 9/24</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>300</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ミッド: 7/24 &ndash; 8/27, 9/25 &ndash; 11/26</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>400</td>
                    <td>600</td>
                    <td>500</td>
                    <td>3,300</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 1/30 &ndash; 2/19, 2/27 &ndash; 4/15, 11/27 &ndash; 12/15</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>700</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>900</td>
                    <td>1,700</td>
                    <td>1,200</td>
                    <td>8,200</td>
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Low: Apr 16 &ndash; Jul 23, Aug 28 &ndash; Sep 24</th>
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
                    <td>1-Bedroom</td>
                    <td>300</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Mid: Jul 24 &ndash; Aug 27, Sep 25 &ndash; Nov 26</th>
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
                    <td>1-Bedroom</td>
                    <td>400</td>
                    <td>600</td>
                    <td>500</td>
                    <td>3,300</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> High: Jan 30 &ndash; Feb 19, Feb 27 &ndash; Apr 15, Nov 27 &ndash; Dec 15</th>
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
                    <td>1-Bedroom</td>
                    <td>700</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,800</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>900</td>
                    <td>1,700</td>
                    <td>1,200</td>
                    <td>8,200</td>
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
      <!--  2015 -->
      
     <!--  2016 -->
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
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 4/17 &ndash; 30, 5/5 &ndash; 7/21,  8/26 &ndash; 9/30</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>479</td>
                    <td>788</td>
                    <td>616</td>
                    <td>4,108</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 3/1 &ndash; 31, 7/22 &ndash; 8/25, 11/1 &ndash; 11/30</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>548</td>
                    <td>959</td>
                    <td>685</td>
                    <td>4,795</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 1/5 &ndash; 2/4, 2/14 &ndash; 29, 4/1 &ndash; 16, 5/1 &ndash; 4, 10/1 &ndash; 31, 12/1 &ndash; 22</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>890</td>
                    <td>1,438</td>
                    <td>1,096</td>
                    <td>7,532</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> ピーク: 1/1 &ndash; 4, 2/5 &ndash; 13, 12/23 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7 泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1ベッドルーム</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2ベッドルーム</td>
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
      else {
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Silver: 4/17 &ndash; 30, 5/5 &ndash; 7/21,  8/26 &ndash; 9/30</th>
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
                    <td>1-Bedroom</td>
                    <td>479</td>
                    <td>788</td>
                    <td>616</td>
                    <td>4,108</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
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
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Gold: 3/1 &ndash; 31, 7/22 &ndash; 8/25, 11/1 &ndash; 11/30</th>
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
                    <td>1-Bedroom</td>
                    <td>548</td>
                    <td>959</td>
                    <td>685</td>
                    <td>4,795</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
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
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: 1/5 &ndash; 2/4, 2/14 &ndash; 29, 4/1 &ndash; 16, 5/1 &ndash; 4, 10/1 &ndash; 31, 12/1 &ndash; 22</th>
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
                    <td>1-Bedroom</td>
                    <td>890</td>
                    <td>1,438</td>
                    <td>1,096</td>
                    <td>7,532</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: 1/1 &ndash; 4, 2/5 &ndash; 13, 12/23 &ndash; 31</th>
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
                    <td>1-Bedroom</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
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
      <!--  2016 -->
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>アナンタラ・バケーション・クラブ・バンコク・サトーン</h1>
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
      <h2>タイ、バンコク</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Anantara Vacation Club Bangkok Sathorn</h1>
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
      <h2>Yannawa, Bangkok, Thailand</h2>
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
          <address>36 Narathiwart-Ratchanakarin Rd, Yannawa, Bangkok, Thailand</address>
          <p>38階建てツインタワーのアナンタラ・バケーション・クラブ・バンコク・サトーンは、スタイリッシュでリラックスできる都会のライフスタイルを提供しています。サンデッキで寛いだり、32メートルのインフィニティプールで泳いだり、都会の喧騒を忘れてリフレッシュしていただけます。フィットネスセンターで心地良く汗を流したり、テニスコートでご家族やご友人とのマッチプレーや、プロのテニスコーチによるレッスンもリクエストしていただけます。センシズ・スパではさまざまなトリートメントを楽しんで、1日の疲れを癒すこともできます。優雅に整った屋内や、プールデッキ、そして快適かつプライバシーの守られたスイートにおいて、世界中のあらゆる素晴らしいものを感じ取っていただくことができるでしょう。このような雰囲気に包まれながらも、無料ワイヤレス・インターネットアクセスを完備し、どこでも情報収集が可能です。ビジネス目的のゲストにもご満足いただけるような充実した会議室や宴会設備、プールサイドのイベントスペースに加え、24時間営業のビジネスセンターやセクレタリアルサービスも用意しています。さらにバンコク市内で国際的かつ文化的名所を探求するのにも理想的な拠点となることでしょう。バス、スカイトレインやメトロの駅は全て徒歩圏内にあり、アナンタラが提供する無料シャトルバスは最寄りのスカイトレインステーションまで運行し、バンコク市内全体を網羅するシームレスなサービスを提供しています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>アナンタラ・バケーション・クラブ・バンコク・サトーンは、何と言ってもその好立地が魅力です。また28階にある全てのスイートには、床から天井まである窓とバンコクのダウンタウンまで広がった全景を見渡せるようなバルコニーがあります。ゆったりとした造りのスイートは、ベッドルームとバスルーム、リビング、ダイニング、キッチンスペースにそれぞれ分かれており、モダンなデザインと選りすぐりの設備が上手く調和し、豪華ながらもまるで我が家にいるような居心地の良さを作り出しています。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>フィットネス施設</li>
            <li>センシズ・スパ</li>
            <li>インフィニティプールとサンデッキ</li>
            <li>お子様向けプール</li>
            <li>お子様向けのプレイグラウンド</li>
            <li>テニスコーチによる個人レッスン</li>
            <li>各種アクティビティ</li>
            <li>コンシェルジュとツアー予約デスク</li>
            <li>無料インターネットとケーブルテレビ</li>
            <li>ビジネスセンターと会議室</li>
            <li>イタリアンレストランを含む2つのレストランと2つのバー</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 12 p.m.<br />電話番号: +66 2 210 9000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>36 Narathiwart-Ratchanakarin Rd, Yannawa, Bangkok, Thailand</address>
          <p>Rising proudly in a 38 floor twin tower design, Anantara Vacation Club Bangkok Sathorn offers a stylish, relaxing and fulfilling urban lifestyle. Enjoy refreshing seclusion from the bustling city outside as you unwind on a lounger on the sun deck and swim in the 32 metre long infinity edge swimming pool. Energise in the fitness centre, play a friendly match at the tennis court or request a professional coach. Soothe away the day's stresses with a full range of holistic and beauty treatments at Senses Spa. Savour world flavours in elegant indoor settings, on the pool deck and in the comfort and privacy of your suite. Keep in touch wherever the mood takes you with complimentary WiFi hotel wide. Business guests benefit from a choice of meeting rooms, banquet facilities and the poolside event space, as well as a 24 hour business centre and secretarial services. Anantara Vacation Club Bangkok Sathorn is also an ideal base to explore the capital's cosmopolitan and cultural attractions. Bus, sky train and metro stations all within walking distance, and Anantara's complimentary shuttle bus connects to the nearest sky train station, providing seamless access to the entire city.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <p>Anantara Bangkok Sathorn hotel is located on the edge of Bangkok's business district, its unique locale sets it apart from other Silom hotels in Bangkok by being based around Sathorn and Silom roads, close to the riverside and near to plenty of great shops and restaurants. BTS and MRT train stations are both just a few minutes from the hotel, accessible via free shuttle transfer, providing great access to the rest of the city.</p>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 2 p.m.<br />Check Out: 12 p.m.<br />Phone: +66 2 210 9000</p>
          
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
	  getMap(13.716138, 100.531666, 14);
    });
  </script>

</body>
</html>