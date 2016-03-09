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
          
          <div class="col-sm-12 main-column sub-content">

            <h1>お問い合わせ</h1>

            <div class="row">
              <div class="col-s-12 col-sm-12">
                <div class="card">
                  <div class="card_cell">
                    <h5>資料請求</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-805-817
                      <span class="hours">(月〜土・祝 9:30am 〜 6:00 pm 日曜休)</span></p>
                    <p>タイムシェアの魅力をご紹介したDVD付きのパンフレットをお送りさせていただきます。
                      Webフォームよりお問い合わせ頂いた方はDVD付きのパンフレットを閲覧、ダウンロードしていただけます。</p>
                    <!-- <p class="e-address"><i class="fa fa-envelope-o"></i>accesstokyo@hgvc.com</p> -->
                    <p><a href="<?php echo getHost(); ?>/contact/sidebar.php?index=request-dvd" class="btn btn-primary btns">資料請求フォーム</a><a href="mailto:accesstokyo@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>タイムシェア販売説明会・国内でのご予約</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-805-817
                      <span class="hours">(月〜土・祝 9:30am 〜 6:00 pm 日曜休)</span></p>
                    <p>タイムシェアの魅力や仕組みをわかりやすくご説明いたします。<br />是非、ご参加ください。</p>
                    <!-- <p class="e-address"><i class="fa fa-envelope-o"></i>accesstokyo@hgvc.com</p> -->
                    <p><a href="<?php echo getHost(); ?>/contact/sidebar.php?index=booking-form-japan" class="btn btn-primary btns">国内ご予約フォーム</a><a href="mailto:accesstokyo@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>タイムシェア販売説明会・ハワイでのご予約</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-805-824
                      <span class="hours">(月〜土・祝 9:00am 〜 7:00 pm 日曜休、土・祝のみ6:30 pmまで営業)</span></p>
                    <p>タイムシェアの魅力や仕組みをわかりやすくご説明いたします。<br />是非、ご参加ください。</p>
                    <p><a href="<?php echo getHost(); ?>/contact/sidebar.php?index=booking-form-hawaii" class="btn btn-primary btns">ハワイご予約フォーム</a><a href="mailto:hawaiijpn@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>タイムシェア新規購入やオーナー様の追加購入</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-015-397
                      <span class="hours">(月〜土 10:00am 〜 6:00 pm 日曜・祝日休)</span></p>
                    <p>タイムシェアの新規購入やオーナー様の追加購入などのご相談を時間、曜日、場所、方法をお客さまのご要望に合わせ、専任スタッフが伺い個別に賜ります。</p>
                    <p><a href="<?php echo getHost(); ?>/contact/sidebar.php?index=purchase-on-phone" class="btn btn-primary btns">お申し込みフォーム</a><a href="mailto:japands@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>販売説明会付宿泊プラン</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-805-824
                      <span class="hours">(月〜土・祝 9:00am 〜 7:00 pm 日曜休、土・祝のみ6:30 pmまで営業)</span></p>
                    <p>広々としたリビングスペースや設備の整ったキッチンが完備されたタイムシェアのお部屋に実際にお泊まりいただき、ヒルトン・グランド・バケーションズの魅力をご体験いただけます。</p>
                    <p><a href="<?php echo getHost(); ?>sales-preview/?index=sales-preview" class="btn btn-primary btns">タムシェア販売説明会のご紹介</a><a href="mailto:hawaiijpn@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>オーナー様のタイムシェアご予約やクラブ利用など</h5>
                    <hr>
                    <p class="phone-number"><img class="freedial" src="img/freedial.png" />0120-805-811
                      <span class="hours">(月〜土 9:00am 〜 6:00 pm 日曜・祝日休)</span></p>

                    <p class="phone-number"><i class="fa fa-mobile fa-fw"></i>03-6866-4900
                      <span class="hours">(月〜土 9:00am 〜 6:00 pm 日曜・祝日休)</span></p>

                    <p><a href="https://www.hgvclub.com/login_jp.php" target="_blank" class="btn btn-primary btns">クラブメンバーサイト</a></p>
                  </div>
                </div>
              </div>
              <div class="col-s-12 col-sm-6">
                <div class="card">
                  <div class="card_cell">
                    <h5>メディア関係</h5>
                    <hr>
                    <p><span class="bold">担当</span><br />ヒルトン・グランド・バケーションズ・マーケティング部<br />杉本 志穂</p>
                    <p><a href="mailto:hawaiijpn@hgvc.com" class="btn btn-secondary"><i class="fa fa-envelope-o"></i>Email</a></p>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- col-sm-8 -->

            


          </div> <!-- col-sm-8 -->


          
        </div> <!-- row -->
      </div> <!-- subcontent -->
    </div>
    
    <?php addFooter(); ?>
    
  </div> <!-- container -->

  <?php addScripts(); ?>

</body>
</html>