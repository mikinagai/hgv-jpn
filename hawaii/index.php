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

        <select id="resort-nav-mobile" class="form-control">
          <option value="リゾート">リゾート</option>
          <option value="ハワイの１週間">ハワイの１週間</option>
          <option value="イベント">イベント</option>
          <option value="アクティビティ">アクティビティ</option>
        </select>

    </nav>
    
    <div id="content__wrap">
      <div class="content">
      
        <div class="row">
          <div class="col-md-12 text-center">
            <div id="placeholder"></div>
          </div>
        </div>

        <!-- resort-collection -->
        <div id="resort-collection" class="sub-content resort-gallery-container">
        
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



        <!-- sample-week -->
        <div id="sample-week" class="sub-content resort-gallery-container" style="display: none;">

          <h1>オアフ島</h1>
        
          <h4 class="quote">ハワイ州の州都ホノルルを擁するオアフ島。１年を通して温暖な気候に恵まれたこの島は、日本をはじめ世界各国から多くの旅行者を迎え入れる観光都市でもあります。ビーチ沿いに高級リゾートホテルが集まり、世界有数のリゾート地として名を馳せるワイキキ、巨大ショッピングモールがあるアラモアナ、サーファーの聖地であるノースショア、ハワイ王朝ゆかりの史跡が残るダウンタウン、パウダーサンドのビーチが自慢のカイルアなど、バカンスを楽しむための素材が凝縮したオアフ島は、島そのものが一大リゾート。永遠の楽園と思わせるハワイが全てここに揃っています。</h4>

          <p>ショッピングに明け暮れたりワイキキビーチで慌しく過ごすハワイはそろそろ卒業。これからは「１週間のハワイ暮らし」をテーマにハワイを訪れてみませんか？いつものハワイがより思い出深いものになるはずです。</p>

          <h1>オアフ島の１週間</h1>


          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 1: 快適な1週間を過ごすための準備をしましょう</h3>
              <p>待ちに待ったハワイでのバケーション！</p>
              <p>まずはこれからの１週間、お部屋でゆったりとくつろぐための準備をはじめます。日本からのフライトは午前中の到着がほとんど。午後のチェックインまで少し時間が空きますので、この時間を利用し「快適ハワイ暮らし」をサポートするアイテムを探しに出かけましょう。</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 2: ファーマーズマーケットに出かけよう</h3>
              <p>少し早起きをし、地元農家で栽培された新鮮野菜やフルーツが並ぶファーマーズマーケットに出かけてみませんか？</p>
              <p>様々な野菜を少しずつ購入できるファーマーズマーケットはタイムシェア派の強い味方。新鮮食材を調達し、地元の人たちに教えてもらったハワイ料理に挑戦してみましょう！</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 3: それぞれのバケーションを</h3>
              <p>タイムシェア・ステイの魅力のひとつが、キッチン付きという点。外食続きで胃が疲れた時や、小さなお子様連れで外食がむずかしい、といった方々にはやはり自炊がおすすめです。</p>
              <p>ヒルトンのタイムシェア・リゾートのキッチンは炊飯器をはじめ、鍋、調理器具、食器まで全て揃っていますので、スーパーマーケットやファーマーズマーケットで地元ならではの食材を購入し、ポキやロコモコなどハワイ料理に挑戦してはいかがでしょう。</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 4: チャイナタウンを散策</h3>
              <p>アジア系の移民が多く集まるチャイナタウン。</p>
              <p>野菜や魚介類の市場や昔ながらの雑貨店、飲食店などがずらりと並ぶ町並みを歩けば、また違ったハワイを垣間見ることができるでしょう。</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 5: ハワイの歴史を学ぶ</h3>
              <p>日本人にとって最も身近な外国といえるハワイですが、アメリカの50番目の州となったのは1959年のこと。実は意外と最近です。それ以前には、日系人をはじめ多くの外国人を移民として迎えていたり、カメハメハ大王に統治されていたりと、ハワイは独特の歴史を歩み続けていました。そして今でもハワイ諸島のいたるところに歴史的スポットが点在しています。</p>

              <p>ワイキキからアラモアナにかけて、王族に所縁のある場所が21箇所選定され、その場所には史跡の説明が簡単に書かれたサーフボード型の指標が建てられています。街角でこのサーフボードを見かけたら、少し立ち止まってみてください。見慣れた街の風景がまた別の表情を見せてくれるでしょう。</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 6: アクティビティ体験</h3>
              <p>せっかくハワイに来ているのですから、その土地に根付いた文化にも触れてみたいもの。ハワイに昔から伝わるフラやレイ、ウクレレは、人々との結びつきも深く、生活の一部となっているようです。</p>
              <p>例えばレイ。もともと愛情や祝福の意味が込められており、卒業式や誕生日などあらゆる場面でレイを贈り合います。普段の服装にレイをプラスするだけで華やかな装いになりますので、ちょっとしたパーティーなどにも便利ですね。</p>
              <p>ヒルトン･ハワイアン･ビレッジ・ワイキキ・ビーチリゾートでは、レイ作りなどハワイアン･カルチャーを楽しく学べるアクティビティを毎日開催（一部有料）。ヒルトン･ハワイアン・ビレッジ内のタイムシェア・タワーにお泊りの方もご参加いただけます。</p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3 class="quote">DAY 7:　ビーチで朝食を楽しむ</h3>
              <p>満喫したハワイの滞在も今日が最終日。それぞれ旅のスタイルはあるもののビーチに行かずして旅を終わらせるわけにはいきませんよね。サーフィンやボディボードにいそしんだり、ビーチサイドでヨガや読書をしたりと、ビーチの楽しみ方は人それぞれです。</p>
              <p>ヒルトン･ハワイアン･ビレッジ・ワイキキ・ビーチリゾート前のビーチも早朝ともなると、ジョギングやウォーキングをする人の姿が多く見られます。そんな中おすすめしたいのが、海を目の前にしての朝食。キッチンで簡単なサンドイッチやフルーツを準備し、ビーチマットを片手にいざビーチへ。人の少ないビーチで波の音を聞き、うっすらと差す太陽の光を浴びながらの朝食は、レストランでの豪華な食事よりもずっと贅沢かもしれません。</p>
              <p>ただし、ハワイ州はビーチなど公共場所での飲酒や喫煙は禁止ですのでくれぐれもご注意ください。</p>
            </div>
          </div>
        
        </div> <!-- sample-week -->



        <!-- events -->
        <div id="events" class="sub-content resort-gallery-container" style="display: none;">

          <h1>イベント</h1>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>



        
        </div> <!-- events -->


        <!-- activities -->
        <div id="activities" class="sub-content resort-gallery-container" style="display: none;">

          <h1>アクティビティ</h1>

          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>
        
        </div> <!-- activities -->


        <!-- nightlife -->
        <div id="nightlife" class="sub-content resort-gallery-container" style="display: none;">

          <h1>ナイトライフ</h1>
          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>
        
        </div> <!-- nightlife -->


        <!-- dining -->
        <div id="dining" class="sub-content resort-gallery-container" style="display: none;">

          <h1>ダイニング</h1>
          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>モリモト・ワイキキ</h3>
              <p>1775 Ala Moana Blvd., Honolulu, HI 96815</p>
              <p>(808) 943-5900</p>
              <p>The menu highlights a wide array of culinary choices, including a seasonal selection of raw fish preparations, featuring the best seafood that Japanese and Hawaiian waters offer, as well as locally grown fruits and vegetables.</p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>
        
        </div> <!-- dining -->


        <!-- shopping -->
        <div id="shopping" class="sub-content resort-gallery-container" style="display: none;">

          <h1>ショッピング</h1>
          <div class="row bordered-row">
            <div class="col-sm-4 text-center">
              <img data-original="http://placehold.it/767x477" class="lazyload" alt="" src="http://placehold.it/767x477" style="display: inline;">
            </div>
            <div class="col-sm-8">
              <h3>First Friday Street Festival</h3>
              <p>Ongoing, First Friday of the Month</p>
              <p>Galleries and other arts venues open their doors this evening for artist receptions, live music, and refreshments. These events are free and open to everyone! Gallery walk maps are available at various locations in the area. 5-9 p.m. </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div>
        
        </div> <!-- shopping -->


      </div> <!-- content -->
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>