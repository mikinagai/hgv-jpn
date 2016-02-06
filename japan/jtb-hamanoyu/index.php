<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>浜の湯</title>
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
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
          
          <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>和室　1泊　朝食付き</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2名様</td>
                    <td>2,600</td>
                  </tr>
                  <tr>
                    <td>3名様</td>
                    <td>3,900</td>
                  </tr>
                  <tr>
                    <td>4名様</td>
                    <td>5,200</td>
                  </tr>
                  <tr>
                    <td>5名様</td>
                    <td>6,500</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <br/>
        <ul>
        <li>利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。</li>
        <li>3歳以下無料</li>
        <li>設定除外日: 2015/4/25 - 5/6、8/8 - 8/16、9/5 - 9/6、2015/12/26 - 2016/1/4</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>浜の湯</h1>
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
      <h2>長野県上諏訪温泉</h2>
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
          <address>長野県諏訪市湖岸通り3-3-10</address>
          <p>信州上諏訪温泉は東京（新宿）からＪＲ特急あずさで最短２時間５分というアクセスでさわやかな気候で信州一の湖　諏訪湖の近くに立つ近代的和風旅館です。</p>
          <p>上諏訪温泉随一の豪華な吹抜けロビーと近代数寄屋造りで日本庭園を眺めながら本格京風会席料理を愉しめる個室料亭が自慢です。会席料理は食の本場関西有名料亭で腕を磨いた職人の心と技で信州一と自負するお料理と真心のこもったおもてなしでお迎え致します。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>和室は全室諏訪湖側で本間10畳プラス広縁付、バス、トイレ付きの落ち着いたお部屋でございます。お部屋からは遠くに北アルプスをはじめとする山々と眼下に諏訪湖が一望できます。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>諏訪湖周辺にはいろいろな美術館、諏訪大社、遊覧船などがあり、観光の拠点として至便です。無料にてWi-Fi インターネットをロビーにてご利用いただけますので、世界の最新情報を常に維持できます。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 10 a.m.<br />電話番号: 0266-58-8000</p>
          
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
	  getMap(36.049045, 138.114527, 14);
    });
  </script>

</body>
</html>