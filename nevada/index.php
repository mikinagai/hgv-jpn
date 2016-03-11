<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Las Vegas resorts that Hilton Grand Vacations has to offer." />
  <title>Nevada Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>ネバダ</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
    </div>
    
    <div class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder"></div>
        </div>
      </div>
    
      <div id="resort-collection" class="sub-content resort-gallery-container">

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="elara-hgvc/" style="background-image: url('img/thumbnails/elara.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>エララ・ア・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、ネバダ州ラスベガス</p>
            <p>洗練された52階建てのエララは、ストリップ中心のロケーションを誇っています。この壮大なリゾートは、ミラクルマイル・ショップスに直結し、有名なカジノ、9つのレストラン、マンダラ・スパがあるプラネット・ハリウッド・リゾート・アンド・カジノ・コンプレックスと隣接しています。</p>
            <p><a href="elara-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->
    
        
      
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/flamingo.jpg" alt="Hilton Grand Vacations Club at the Flamingo" />
          </div>
          <div class="col-sm-8">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・ザ・フラミンゴ</h3>
            <p class="location">アメリカ、ネバダ州ラスベガス</p>
            <p>フラミンゴは、ヒルトン・グランド・バケーションズ・クラブを代表する豪華で壮大なリゾートです。15エーカー（約0.06km²）の敷地を誇るリゾートの周りには、ラスベガスならではのアトラクションが盛りだくさん。</p>
            <p><a href="hgvc-flamingo/" class="btn btn-primary">詳細 &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/trump.jpg" alt="Hilton Grand Vacations Club at Trump International Hotel Las Vegas" />
          </div>
          <div class="col-sm-8">
            <h3>"ヒルトン・グランド・バケーションズ・クラブ・アット・<br>トランプ･インターナショナル・ホテル・ラスベガス"</h3>
            <p class="location">アメリカ、ネバダ州ラスベガス</p>
            <p>"ヒルトン・グランド・バケーションズ・クラブ・アット・トランプ・インターナショナル・ホテル・ラスベガスは、洗練された完璧で豪華な素晴らしい体験を提供します。<br>トランプ・ポートフォリオの宝の一つとして、充実した設備と理想的なロケーションを提供し、ファッション・ショー・モールと全てのラスベガスのアトラクションへ徒歩圏内です。"</p>
            <p><a href="hgvc-trump/" class="btn btn-primary">詳細 &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/paradise.jpg" alt="Hilton Grand Vacations Club on Paradise" />
          </div>
          <div class="col-sm-8">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・オン・パラダイス</h3>
            <p class="location">アメリカ、ネバダ州ラスベガス</p>
            <p>目を見張るほど豪華できらびやかなラスベガス・ストリップ街と、壮大で美しい自然に恵まれたラスベガスのバケーションは格別です。ヒルトン・グランド・バケーションズ・クラブは、中心街の近くにありながら、静かにゆったり寛げる環境をお届けします。グランドキャニオン、ミード湖、フーバー・ダムなど数多くの名所に加え、年間を通じてゴルフ、テニス、ボートなどをお楽しみいただけます。</p>
            <p><a href="hgvc-paradise/" class="btn btn-primary">詳細 &raquo;</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/boulevard.jpg" alt="Hilton Grand Vacations Club on the Boulevard" />
          </div>
          <div class="col-sm-8">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・オン・ザ・ブルバード</h3>
            <p class="location">アメリカ、ネバダ州ラスベガス</p>
            <p>ラスベガス目抜き通りのストリップの北端に位置する優雅なリゾートで、豪邸のような快適さと街の賑わいを同時に満喫することができます。高層建築の隅々まで、「砂漠のアールデコ」をテーマにしたドラマチックな雰囲気を漂わせるこのリゾートは、さまざまなトリートメントをお届けするヒルトン･グランド･バケーションズのリゾート直営で初登場となるグランド・バケーションスパをはじめ、その他の設備も充実しています。</p>
            <p><a href="hgvc-boulevard/" class="btn btn-primary">詳細 &raquo;</a></p>
          </div>
        </div>
      
      </div>
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>