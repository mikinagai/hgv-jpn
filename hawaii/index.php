<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Hawaii resorts that Hilton Grand Vacations has to offer." />
  <title>Hawaii Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container resort-hawaii">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">

      <div class="banner-caption">
        <h1>ハワイ島のリゾート</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Our Resorts</h2>
    </div>

    <nav id="resort-navbar">
        <div class="resort-navbar-container">
          <div class="row">
            <div class="col-md-12">
              <ul class="resort-navbar">
                  <li><a class="active" href="#"><i class="fa fa-list-ul fa-fw fa-3x"></i>リゾート</a></li>
                  <li><a href="#"><i class="fa fa-calendar fa-fw fa-3x"></i>ハワイの１週間</a></li>
                  <li><a href="#"><i class="fa fa-music fa-fw fa-3x"></i>イベント</a></li>
                  <li><a href="#"><i class="fa fa-motorcycle fa-fw fa-3x"></i>アクティビティ</a></li>
                  <li><a href="#"><i class="fa fa-glass fa-fw fa-3x"></i>ナイトライフ</a></li>
                  <li><a href="#"><i class="fa fa-cutlery fa-fw fa-3x"></i>ダイニング</a></li>
                  <li><a href="#"><i class="fa fa-shopping-bag fa-fw fa-3x"></i>ショッピング</a></li>
                </ul>
            </div>
          </div> <!-- row -->
        </div><!-- resort-navbar-container -->
    </nav>
    
    <div class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder"></div>
        </div>
      </div>


      <div id="resort-collection" class="sub-content">
      
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/grandwaikikian.jpg" alt="Grand Waikikian by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>グランド・ワイキキアン・バイ・ヒルトン･グランド・バケーションズ・クラブ</h3>
            <p class="location">アメリカ、ハワイ州ホノルル</p>
            <p>広大なヒルトン・ハワイアン・ ビレッジ&reg;・ワイキキ･ビーチ・リゾートの中心部に建設されたグランド・ワイキキアンでは、リゾートからの壮大な眺望、グランドホテルならではの高級感と行き届いたサービス、そして豪華なコンドミニアムの安らぎと利便性に至るまで、かつてない贅沢なホノルルでのバケーションを皆様に提供しています。</p>
            <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/hokulaniwaikiki.jpg" alt="Hokulani Waikiki by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>ホクラニ・ワイキキ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location">アメリカ、ハワイ州ホノルル</p>
            <p>有名なワイキキ・ビーチ・ウォーク®最北端のエンターテイメント地区に位置し、ダイニング、ショッピング、エンターテイメントとワイキキで最も活気のあるワイキキ・ビーチ・ウォーク®に理想的なアクセスを提供しています。2013年後半にオープン予定のこのリゾートは、プールラウンジ、バー、プライベートカバナ、そしてダイナミックなワイキキの景観をお楽しみいただけるナラニが特徴です。</p>
            <p><a href="hokulani-waikiki-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/kalia.jpg" alt="Kalia Suites by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>カリア・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location">アメリカ、ハワイ州ホノルル</p>
            <p>トロピカルな雰囲気溢れるカリアタワーは、22エーカー（約0.089km²）のヒルトン・ハワイアン・ビレッジ&reg;・ワイキキ･ビーチ・リゾートの敷地内という理想的な立地条件を誇ります。カリアタワーの12階から18階にある客室から、最高のワイキキを実感いただけることでしょう。</p>
            <p><a href="kalia-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
    
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/kingsland.jpg" alt="Kings' Land by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>キングス・ランド・バイ・ヒルトン･グランド・バケーションズ・クラブ</h3>
            <p class="location">ハワイ州ワイコロア</p>
            <p>有名なコハラ・コーストにあるヒルトン・グランド・バケーションズ・クラブの最新リゾート、キングス・ランド。美しいフェアウェイと、壮大なワイコロアの眺望をお楽しみください。溶岩原を切り開いた、112エーカー（約0.45km²）の広大な敷地を誇り、ハワイ島で最高のゴルフ場として定評のある、キングスコースとビーチコースの間に位置しています。</p>
            <p><a href="kings-land-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/kohala.jpg" alt="Kohala Suites by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>コハラ・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location">ハワイ州ワイコロア</p>
            <p>ビッグ・アイランドの澄み切ったコハラ・コーストに位置するヒルトン・グランド・バケーションズ・ クラブ・アット・ワイコロア・ビーチ・リゾートは、壮大なワイコロアの中心地として、リラックスしたオアシスを提供しています。上品な部屋には、カジュアルでエレガントなトロピカルスタイルといった独特なアメニティーと家具が調和されています。</p>
            <p><a href="kohala-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/lagoon.jpg" alt="Lagoon Tower by Hilton Grand Vacations Club" />
          </div>
          <div class="col-sm-8">
            <h3>ラグーン・タワー・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location">アメリカ、ハワイ州ホノルル</p>
            <p>美しい南国の自然を背景にしたホノルルのヒルトン・ハワイアン・ビレッジ®・ワイキキ・ビーチ・リゾートは、まさにパラダイスの中心。絶好のロケーションに、最高水準のアメニティーが整っています。ワイキキ屈指の有名な白浜に隣接しており、ヒルトン・ハワイアン・ビレッジ内では、心ゆくまでショッピングやお食事、そして各種エンターテイメントをお楽しみいただけるほか、トロピカルな植物や、水のきらめくプール、まばゆい滝などの演出で、楽園ムード漂うバケーションが皆様をお待ちしています。</p>
            <p><a href="lagoon-tower-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
        
        <div class="row resort">
          <div class="col-sm-4 text-center">
            <img src="img/bayclub.jpg" alt="The Bay Club at Waikoloa Beach Resort" />
          </div>
          <div class="col-sm-8">
            <h3>ザ・ベイクラブ・アット・ワイコロア・ビーチ・リゾート</h3>
            <p class="location">ハワイ州ワイコロア</p>
            <p>入り組んだ秘境の渓谷や、燃え立つ溶岩など自然の驚異をヘリコプター・ツアーから望む雄大な光景は、ハワイ島ならではの醍醐味です。コハラコーストの散策でも、手つかずの自然を間近に感じられます。2つのダイナミックなゴルフコースに囲まれたこのリゾートは、太陽が降り注ぐのどかで美しい環境に位置します。</p>
            <p><a href="bay-club-waikoloa-beach/" class="btn btn-primary">詳細</a></p>
          </div>
        </div>
      
      </div> <!-- resort-collection -->

      


      <div id="sample-week" class="sub-content" style="display: none;">
      
        anma
      
      </div> <!-- sample-week -->

      
    </div> <!-- content -->
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>