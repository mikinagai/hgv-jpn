<?php include("server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Hilton Grand Vacations is committed to the idea that life is incomplete without vacations. Our distinctive resort collection features luxurious accommodations in renowned destinations with the quality service that is synonymous with the Hilton name." />
  <meta name="keywords" content="Hilton Grand Vacations, Vacation Ownership, Timeshare, Resorts" /> 
  <title>Vacation Ownership Timeshare with Hilton Grand Vacations</title>
  <link type="text/css" rel="stylesheet" href="css/jquery.bxslider.css" />
  
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="homeslideshow">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active" id="slide1">
              <div class="slider-container">
                <div class="slider-text">
                  <p>Some text for a slide</p>
                </div>
                <div class="slider-button">
                  <button>A button here</button>
                </div>
              </div>
            </div>
            <div class="item" id="slide2"></div>
            <div class="item" id="slide3"></div>
            <div class="item" id="slide4"></div>
        </div>

      <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
      </div>
    </div>
    
    <div id="homeslider">
      <h2 class="text-center">ヒルトン・グランド・バケーションズのリゾート一覧</h2>
      <div id="slide">
        <ul class="bxslider">
          <li><a href="nevada/elara-hgvc/"><img src="img/homethumbnails/elara.jpg" alt="Elara, A Hilton Grand Vacations Club in Las Vegas, Nevada" title="エララ" /></a></li>
          <li><a href="nevada/hgvc-trump/"><img src="img/homethumbnails/trump.jpg" alt="Hilton Grand Vacations Club at Trump International Hotel in Las Vegas, Nevada" title="トランプ･インターナショナル・ホテル" /></a></li>
          <li><a href="scotland/hgvc-craigendarroch-suites/"><img src="img/homethumbnails/craigendarroch.jpg" alt="Hilton Grand Vacations Club at Craigendarroch Suites in Scotland" title="クレイゲンダロック・ロッジズ" /></a></li>
          <li><a href="italy/hgvc-borgo-alle-vigne/"><img src="img/homethumbnails/borgo.jpg" alt="Hilton Grand Vacations Club at Borgo alle Vigne in Italy" title="ボルゴ・アレ・ヴィ二ェ" /></a></li>
          <li><a href="utah/sunrise-lodge-hgvc/"><img src="img/homethumbnails/sunrise.jpg" alt="Sunrise Lodge, a Hilton Grand Vacations Club in Park City, Utah" title="サンライズ・ロッジ" /></a></li>
          <li><a href="florida-central/parc-soleil-hgvc/"><img src="img/homethumbnails/parcsoleil.jpg" alt="Parc Soleil by Hilton Grand Vacations Club in Orlando, Florida" title="パーク・ソレイユ" /></a></li>
          <li><a href="hawaii/grand-waikikian-hgvc/"><img src="img/homethumbnails/grandwaikikian.jpg" alt="Grand Waikikian by Hilton Grand Vacations Club in Honolulu, Hawaii" title="グランド・ワイキキアン" /></a></li>
          <li><a href="hawaii/kings-land-hgvc/"><img src="img/homethumbnails/kingsland.jpg" alt="Kings' Land by Hilton Grand Vacations Club in Waikoloa, Hawaii" title="キングス・ランド" /></a></li>
          <li><a href="hawaii/hokulani-waikiki-hgvc/"><img src="img/homethumbnails/hokulani.jpg" alt="Hokulani Waikiki by Hilton Grand Vacations Club in Honolulu, Hawaii" title="ホクラニ・ワイキキ" /></a></li>
          <li><a href="new-york/west-57th-street/"><img src="img/homethumbnails/west57.jpg" alt="West 57th Street by Hilton Club in New York" title="ウエスト57" /></a></li>
          <li><a href="colorado/valdoro-mountain-lodge/"><img src="img/homethumbnails/valdoro.jpg" alt="Valdoro Mountain Lodge in Breckenridge, Colorado" title="ヴァルドロ・マウンテン・ロッジ" /></a></li>
          <li><a href="mexico/fiesta-americana-villas-cancun/"><img src="img/homethumbnails/fiestacancun.jpg" alt="Fiesta Americana Villas Cancun in Mexico" title="フィエスタ・アメリカーナ" /></a></li>
          <li><a href="mexico/explorean-kohunlich/"><img src="img/homethumbnails/explorean.jpg" alt="Explorean Kohunlich in Mexico" title="エクスプロリアン・コフンリッチ" /></a></li>
          <li><a href="canada/club-intrawest-whistler/"><img src="img/homethumbnails/whistler.jpg" alt="Club Intrawest Whistler in Canada" title="クラブ・イントラウエスト – ウィスラー" /></a></li>
          <li><a href="canada/club-intrawest-tremblant/"><img src="img/homethumbnails/tremblant.jpg" alt="Club Intrawest Tremblant in Canada" title="クラブ・イントラウエスト – トランブラン" /></a></li>
  	    </ul>
      </div>
    </div>
    
    <div id="homecontent" class="content">
      <div class="row">
        <div class="col-sm-4">
          <div class="s_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>timeshare/?index=timeshare-program">
                <img src="img/homethumbnails/thumb-timeshare-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-timeshare-lg.jpg" class="mobile-show">
              </a>                
            </p>
            <h3 class="eng">What's timeshare?</h3>
            <h2 class="home-col-header">タイムシェアとは</h2>
            <p>ヒルトンのタイムシェアは、１年を52週に分け、高級コンドミニアム・スタイルのお部屋を１週間単位で所有する権利をお手頃な価格で購入いただけるシステムです。</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>timeshare/?index=timeshare-program">詳細はこちら</a>
          </div>

          <div class="m_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>sales-preview/?index=sales-preview">
                <img src="img/homethumbnails/thumb-preview-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-preview-lg.jpg" class="mobile-show">
              </a>  
            </p>
            <h3 class="eng">preview</h3>
            <h2 class="home-col-header">タイムシェア販売説明会</h2>
            <p>「タイムシェアって何？」「会員リゾート権とは違うの？」といった皆さまからの様々な質問に、専任のスタッフがお答えし、オアフ島やハワイ島の魅力やヒルトン・グランド・バケーションズの柔軟で機能的な「タイムシェア・プログラム」を分かりやすく紹介。</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>sales-preview/?index=sales-preview">詳細はこちら</a>
          </div>

          <!-- <div class="content-news-wrapper wow fadeInUp pattern">
            <h3 class="eng">news</h3>
              <h2>新着情報</h2>
            <div class="news-item">
              <p class="date">2015年12月19日 <span class="notice">お知らせ</span></p>
              <a class="news-link" href="#" target="_blank">年末年始休業のお知らせ</a>
            </div>

            <div class="news-item">
              <p class="date">2016年1月16日 <span class="press">プレスリリース</span></p>
              <a class="news-link" href="#" target="_blank">日本在住メンバー5万人突破記念キャンペーン第2弾「スマイル・モーメント・キャンペーン」</a>
            </div>

            <div class="news-item">
              <p class="date">2016年01月14日 <span class="media">メディア掲載</span></p>
              <a class="news-link" href="#" target="_blank">【雑誌】LEE 2月号</a>
            </div>

            <a class="news-viewmore-link" href="#">新着情報一覧はこちら</a>
          </div> -->

          <div class="s_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>/faq/?index=fq_timeshare-program">
                <img src="img/homethumbnails/thumb-faq-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-faq-lg.jpg" class="mobile-show">
              </a> 
            </p>
            <h3 class="eng">FAQ</h3>
            <h2 class="home-col-header">よくある質問</h2>
            <p>説明会やお問い合わせにてよくいただくご質問をご紹介します。</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>/faq/?index=fq_timeshare-program">詳細はこちら</a>
          </div>


        </div>


        <div class="col-sm-4">
          <div class="s_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>vacation-packages/?index=vacation-packages">
                <img src="img/homethumbnails/thumb-vp-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-vp-lg.jpg" class="mobile-show">
              </a>  
            </p>
            <h3 class="eng">Vacations packages</h3>
            <h2 class="home-col-header">リゾート宿泊プラン</h2>
            <p>ヒルトンのタイムシェアのお部屋に実際にお泊まりいただき、「暮らすように過ごすハワイ」をご体験ください。体験宿泊・新プランがスタート！予約はお早めに。</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>vacation-packages/?index=vacation-packages">詳細はこちら</a>
          </div>

          <div class="m_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>timeshare/?index=for-business">
                <img src="img/homethumbnails/thumb-forbusiness-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-forbusiness-lg.jpg" class="mobile-show">
              </a> 
            </p>
            <h3 class="eng">for business</h3>
            <h2 class="home-col-header">法人のお客様へ</h2>
            <p>近年、法人名義でのオーナーシップご購入が着実に増えております。大切な社員の皆様に最高の休暇を提供されることは貴社の福利厚生に大きく寄与すること間違いありません。貴社も是非、合理的なスタイルでハワイに別荘を所有されてはいかがですか？</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>timeshare/?index=for-business">詳細はこちら</a>
          </div>

          <div class="s_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <a href="<?php echo getHost(); ?>/testimonials">
                <img src="img/homethumbnails/thumb-testimonials-sm.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/thumb-testimonials-lg.jpg" class="mobile-show">
              </a> 
            </p>
            <h3 class="eng">testimonials</h3>
            <h2 class="home-col-header">オーナーの声</h2>
            <p>タイムシェアを購入し、"バケーションスタイル"を体験されたオーナー様からのお便りをご紹介いたします。各島でのオーナー様の"暮らし"をご覧いただけます。</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>/testimonials">詳細はこちら</a>
          </div>
        </div>



        <div class="col-sm-4">
          <div class="sweep_content-item-wrapper wow fadeInUp">
            <p class="text-center">
              <p class="text-center">
              <a href="<?php echo getHost(); ?>/testimonials">
                <img src="img/homethumbnails/sweeps-lg.jpg" class="mobile-hide" style="display: inline;">
                <img src="img/homethumbnails/sweeps-sm.jpg" class="mobile-show">
              </a> 
            </p>
            </p>
            <h3 class="eng">sweepstakes</h3>
            <h2 class="home-col-header">ハワイ旅行券などが当たる！</h2>
            <p>アンケートにご協力いただいた方の中から、抽選でハワイ旅行やホテル宿泊など豪華賞品をプレゼントします。この機会に是非ご参加ください！</p>
            <a class="viewmore-link" href="<?php echo getHost(); ?>/testimonials">詳細はこちら</a>
          </div>

          

        </div>
      </div>
    </div>

    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/home.js"></script>

</body>
</html>
