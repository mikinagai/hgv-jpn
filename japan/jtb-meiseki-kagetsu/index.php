<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="" />
  <title>銘石の宿かげつ</title>
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
        <li>幼児施設使用料：3499円（3歳以下）</li>
        <li>設定除外日: 2015/4/25 - 5/6、8/8 - 8/16、2015/12/26 - 2016/1/4</li>
        </ul>
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>銘石の宿かげつ</h1>
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
      <h2>山梨県石和温泉</h2>
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
          <address>山梨県笛吹市石和町川中島385</address>
          <p>約6000坪の敷地の中に、数十年の歳月をついやして全国各地から集めた巨岩・奇岩・銘石と、現代造園技術の粋を凝らして造り上げた壮観な日本庭園、池には約7000匹の鯉が泳ぐ気品漂う和の雰囲気につつまれて豊饒の時をご堪能いただけます。</p>
          <p>石和温泉周辺にはフルーツ狩り・ワイナリーなどを楽しめる施設がございます。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>10畳＋次の間の1間タイプのシンプルな造りですが、大浴場の入口に隣接していることから人気が高い西殿。純和風の造りが、ほっと心落ち着く客室です。落ち着いた雰囲気の中、日常の雑踏から離れた寛ぎの空間です。</p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <p>創業以来、数多くの文化人や芸術家に愛され続けてきた「銘石の宿かげつ」、純和風の趣は四季それぞれに、静寂な中にも優雅な感動を秘めています。今だかつてない「真心のおもてなし」。皆様に寛ぎの時をおもてなしいたします。</p>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 11 a.m.<br />電話番号: 055-262-4526</p>
          
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
	  getMap(35.657787, 138.64878, 14);
    });
  </script>

</body>
</html>