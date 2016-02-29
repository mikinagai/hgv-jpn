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
            <h1>資料請求</h1>
            <p>資料をご希望の方は、以下のフォームに必要事項をご入力の上お申し込みください。今すぐ資料をご覧になりたい方は、「資料の入手方法」より、「電子ブックの閲覧・ダウンロード」をお選びください。お申込み完了後に電子ブックの閲覧・ダウンロード用のURLを、ご入力いただいたEメール宛にお送りいたします</p>
            <div class="text-block">
              <ul>
                <li>対象は20歳以上とさせていただきます。</li>
                <li>同一人物、同一住所、同一世帯のお申し込みについては一件のお申し込みとみなします。</li>
                <li>弊社主催の各キャンペーンを通してお申し込みの方は、必ず各キャンペーン･ツールに記載のプロモーションコードをご入力ください。</li>
                <li>キャンペーンによってプレゼント内容が異なるため、記載のない場合はプレゼント対象外とみなされますのでご留意ください。</li>
                <li>尚、プロモーションコード欄が表示されない場合は、そのままお申し込みください。</li>
                <li>資料の送付は、日本国内に限らせていただきます。何卒、ご了承ください。</li>
              </ul>
            </div>
            <div class="pre-form">
              <?php include '../forms/request-dvd.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #2 来場ご予約（国内） -->
          <div id="booking-form-japan" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>来場ご予約（国内）</h1>    
            <div class="pre-form">
              <?php include '../forms/tour_japan.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #3 来場ご予約（ハワイ） -->
          <div id="booking-form-hawaii" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>来場ご予約（ハワイ）</h1>    
            <div class="pre-form">
              <?php include '../forms/tour_hawaii.php' ?>
            </div>
          </div> <!-- col-sm-8 -->

          <!-- #3 タイムシェア新規購入やオーナー様の追加購入 -->
          <div id="purchase-on-phone" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>タイムシェア新規購入やオーナー様の追加購入</h1>
            <p>タイムシェアの新規購入やオーナー様の追加購入などのご相談を時間、曜日、場所、方法をお客さまのご要望に合わせ、専任スタッフが伺い個別に賜ります。</p>  
            <div class="pre-form">
              <?php include '../forms/timeshare-inquery.php' ?>
            </div>
          </div> <!-- col-sm-8 -->


          <!-- #5 販売説明会宿泊プラン -->
          <div id="minivac" class="col-sm-8 main-column sub-content" style="display:none;">
            <div id="form-success">
              <h1>お申込み完了しました</h1>

              <img src="http://placehold.it/700x230" class="mobile-hide" style="display: inline;">
              <p>ご予約のリクエストはヒルトン・グランド・バケーションズに送信されましたので、内容を確認後あらためて弊社より営業日3日以内にお返事のEメールを送らせていただきます。</p>
                    
              <p>なお、お客様のご予約は「ご予約確認メール」をお送りするまでは、確定しておりませんのでご了承ください。</p>
                    
              <p><strong>お問い合わせ先</strong><br/>ヒルトン・グランド・バケーションズ パッケージセールス部<br/>
                フリーダイヤル：0120-957-539（平日　9:00 a.m. ～ 7:00 p.m.　土・日・祝日 9：00 a.m. ～ 6：30 p.m.）<br/>
                        ※おかけ間違いのないようご注意ください。<br/>
                        Email：<a href="mailto:hawaiijpn@hgvc.com">hawaiijpn@hgvc.com</a><br/>
                        お問い合わせの際には、キャンペーンコード<strong>90852</strong>をお伝えください。</p>
            </div><!-- form-success -->
            <div class="pre-form">
              <h1>国内販売説明会・来場ご予約フォーム</h1>
              <?php include 'forms/tour_japan.php' ?>
            </div>

          </div> <!-- col-sm-8 -->

          <!-- #4 その他 -->
          <div id="other-contact" class="col-sm-8 main-column sub-content" style="display:none;">
            <div id="form-success-hawaii">
              <h1>お申込み完了しました</h1>
              
              <img src="http://placehold.it/700x230" class="mobile-hide" style="display: inline;">
              <p>ご予約のリクエストはヒルトン・グランド・バケーションズに送信されましたので、内容を確認後あらためて弊社より営業日3日以内にお返事のEメールを送らせていただきます。</p>
                    
              <p>なお、お客様のご予約は「ご予約確認メール」をお送りするまでは、確定しておりませんのでご了承ください。</p>
                    
              <p><strong>お問い合わせ先</strong><br/>ヒルトン・グランド・バケーションズ パッケージセールス部<br/>
                フリーダイヤル：0120-957-539（平日　9:00 a.m. ～ 7:00 p.m.　土・日・祝日 9：00 a.m. ～ 6：30 p.m.）<br/>
                        ※おかけ間違いのないようご注意ください。<br/>
                        Email：<a href="mailto:hawaiijpn@hgvc.com">hawaiijpn@hgvc.com</a><br/>
                        お問い合わせの際には、キャンペーンコード<strong>90852</strong>をお伝えください。</p>
            </div><!-- form-success -->
            <div class="pre-form">
              <h1>ハワイ販売説明会・来場ご予約フォーム</h1>
              <?php include 'forms/tour_hawaii.php' ?>
            </div>
            


          </div> <!-- col-sm-8 -->


          
        </div> <!-- row -->
      </div> <!-- subcontent -->
    </div>
    
    <?php addFooter(); ?>
    
  </div> <!-- container -->

  <?php addScripts(); ?>

</body>
</html>