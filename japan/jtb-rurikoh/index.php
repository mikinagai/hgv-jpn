<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>瑠璃光</title>
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
                  <tr>
                    <td>6名様</td>
                    <td>7,800</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
        <br/>
        <ul>
        <li>利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。</li>
        <li>幼児施設使用料：2160円（3歳以下）</li>
        <li>設定除外日: 2015/4/25 - 5/6、8/8 - 8/17、2015/12/26 - 2016/1/4</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>瑠璃光</h1>
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
      <h2>石川県山代温泉</h2>
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
          <address>石川県加賀市山代温泉19-58-1</address>
          <p>大浴場隣接の露天風呂（サウナ付）をはじめ5つの貸切露天風呂（有料）、エステ、足つぼマッサージコーナーがあります。また食事処「旬彩仁三郎」ではオープンキッチンを配置。地元の食材と九谷焼の器を使用。</p>
          <p>館内大浴場の他、タイプの異なる5つの貸切露天風呂（有料）があり、足湯や姉妹館への湯めぐりもご利用になれます（無料）。お食事の後は、当館オリジナルの一向一揆の太鼓ショーをお楽しみ下さい。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>月の棟は、「やすらぎの和」の色調で揃えた、のびやかな広がりのある、落ち着いた佇まいのゆとりある和室です。
</p>
          <br />
          
          <h3>リゾート設備</h3>
          <p>山代温泉の守り神、薬王院本尊「薬師瑠璃光如来」から名を受けた「薬師九湯」。木もれ陽の下で、静かな夜半に、様々な趣の湯遊び時間をお愉しみください。
</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 0761-77-2323</p>
          
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
	  getMap(36.294449, 136.364723, 14);
    });
  </script>

</body>
</html>