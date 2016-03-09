<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Hilton Grand Vacations is committed to the idea that life is incomplete without vacations. Our distinctive resort collection features spacious condominium-style accommodations." />
  <title>Learn About Vacation Ownership with Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container page-container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
    </div>
    
    <!-- <div id="subtitle">
      <h2>About Vacation Ownership</h2>
    </div> -->
    
    <div class="pattern pattern-fade">
      <div id="subcontent" class="content">
        <div class="row">
          
          <div class="col-sm-4 aside">
            <ul class="sidebar-menu">
              <li class="sidebar-menu-header"><h3>お問い合わせ</h3></li>
              <li><a menu="request-dvd" href="#">資料請求</a></li>
              <li><a menu="booking-form-japan" href="#">来場ご予約（国内）</a></li>
              <li><a menu="booking-form-hawaii" href="#">来場ご予約（ハワイ）</a></li>
              <li><a menu="purchase-on-phone" href="#">タイムシェア新規購入やオーナー様の追加購入</a></li>
              <li><a menu="minivac" href="#">販売説明会宿泊プラン</a></li>
              <li><a menu="other-contact" href="#">その他</a></li>
            </ul>

            <select class="form-control nav-mobile">
              <option value="資料請求">資料請求</option>
              <option value="来場ご予約（国内）">来場ご予約（国内）</option>
              <option value="来場ご予約（ハワイ）">来場ご予約（ハワイ）</option>
              <option value="タイムシェア新規購入やオーナー様の追加購入">タイムシェア新規購入やオーナー様の追加購入</option>
              <option value="販売説明会宿泊プラン">販売説明会宿泊プラン</option>
              <option value="その他">その他</option>
            </select>
          </div>



          <!-- #1 資料請求 -->
          <div id="request-dvd" class="col-sm-8 main-column sub-content">
            <?php include '../forms/form-success.php' ?>
            <div class="pre-form">
              <h1>資料請求</h1>
              <?php include '../forms/request-dvd.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #2 来場ご予約（国内） -->
          <div id="booking-form-japan" class="col-sm-8 main-column sub-content" style="display:none;">
            <?php include '../forms/form-success.php' ?>
            <div class="pre-form">
              <h1>国内販売説明会・来場ご予約フォーム</h1>
              <?php include '../forms/tour_japan.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #3 来場ご予約（ハワイ） -->
          <div id="booking-form-hawaii" class="col-sm-8 main-column sub-content" style="display:none;">
            <?php include '../forms/form-success.php' ?>
            <div class="pre-form">
              <h1>ハワイ販売説明会・来場ご予約フォーム</h1>
              <?php include '../forms/tour_hawaii.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #3 タイムシェア新規購入やオーナー様の追加購入 -->
          <div id="purchase-on-phone" class="col-sm-8 main-column sub-content" style="display:none;">
            <?php include '../forms/form-success.php' ?>
            <div class="pre-form">
              <h1>タイムシェア新規購入やオーナー様の追加購入</h1>
              <p>タイムシェアの新規購入やオーナー様の追加購入などのご相談を時間、曜日、場所、方法をお客さまのご要望に合わせ、専任スタッフが伺い個別に賜ります。</p>
              <?php include '../forms/timeshare-inquery.php' ?>
            </div>
          </div> <!-- col-sm-8 -->


          <!-- #5 販売説明会宿泊プラン -->
          <div id="minivac" class="col-sm-8 main-column sub-content" style="display:none;">
            <?php include '../forms/form-success.php' ?>
            <div class="pre-form">
              <h1>ハワイ販売説明会・来場ご予約フォーム</h1>
              <?php include '../forms/tour_hawaii.php' ?>
            </div>

          </div> <!-- col-sm-8 -->

          <!-- #4 その他 -->
          <div id="other-contact" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>その他</h1>
            


          </div> <!-- col-sm-8 -->


          
        </div> <!-- row -->
      </div> <!-- subcontent -->
    </div>
    
    <?php addFooter(); ?>
    
  </div> <!-- container -->

  <?php addScripts(); ?>

</body>
</html>