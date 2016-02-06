<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>ホテルブリーズベイマリーナ</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="3"><img src="../../img/gold.gif" alt="" class="level"> ロー: 1/5 &ndash; 4/24, 5/6 &ndash; 6/30, 10/1 &ndash; 12/27</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>２名様利用</th>
                    <th>３名様利用の場合の追加ポイント</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタンダードツイン</td>
                    <td>1,400</td>
                    <td>700</td>
                  </tr>
                  <tr>
                    <td>ファミリールーム</td>
                    <td>3,000</td>
                    <td>-</td>
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
                    <th colspan="3"><img src="../../img/platinum.gif" alt="" class="level"> ハイ: 4/25 &ndash; 5/2, 7/1 &ndash; 8/7, 8/17 &ndash; 9/30</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>２名様利用</th>
                    <th>３名様利用の場合の追加ポイント</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>スタンダードツイン</td>
                    <td>3,300</td>
                    <td>1,650</td>
                  </tr>
                  <tr>
                    <td>ファミリールーム</td>
                    <td>6,600</td>
                    <td>-</td>
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
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>ホテルブリーズベイマリーナ</h1>
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
      <h2>沖縄県宮古島</h2>
    </div>
    
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

          <h3>概要</h3>
          <address>沖縄県宮古島市上野字宮国784-1</address>
          <p>美しく澄んだ海の前に佇むホテル。南国の鮮やかな花々が咲く開放的なガーデンプールは、小さなお子様連れでも楽しめるキッズスペースもご用意しています。一人ひとりのスタイルで楽しめる海辺のリゾートステイ。 </p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>白を基調とした清潔感にあふれるタワー館の客室は、すべての部屋から海を一望できます。シンプルな客室、バストイレはセパレートタイプで、ゆったりとお使いいただけます。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>幅広い年代の方々にご利用いただけるカジュアルなリゾートホテル。レストランも多彩にそろい、ホテル内のカジュアルなダイニングや、海を一望できる開放的な一軒家レストランまで、滞在スタイルにあわせてシチュエーションもお楽しみいただけます。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 2 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0980-76-3000</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
 
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
	  getMap(24.719774, 125.324743, 14);
    });
  </script>

</body>
</html>