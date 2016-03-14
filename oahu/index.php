<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Hawaii resorts that Hilton Grand Vacations has to offer." />
  <title>Hawaii Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">

      <div class="banner-caption">
        <h1>オアフ島のリゾート</h1>
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
                  <li><a href="#"><i class="fa fa-calendar fa-fw fa-3x"></i>オアフの１週間</a></li>
                  <li><a href="#"><i class="fa fa-music fa-fw fa-3x"></i>イベント</a></li>
                  <li><a href="#"><i class="fa fa-motorcycle fa-fw fa-3x"></i>アクティビティ</a></li>
                  <li><a href="#"><i class="fa fa-glass fa-fw fa-3x"></i>ナイトライフ</a></li>
                  <li><a href="#"><i class="fa fa-cutlery fa-fw fa-3x"></i>ダイニング</a></li>
                  <li><a href="#"><i class="fa fa-shopping-bag fa-fw fa-3x"></i>ショッピング</a></li>
                </ul>
            </div>
          </div> <!-- row -->
        </div><!-- resort-navbar-container -->

        <select class="form-control nav-mobile">
          <option value="リゾート">リゾート</option>
          <option value="オアフの１週間">オアフの１週間</option>
          <option value="イベント">イベント</option>
          <option value="アクティビティ">アクティビティ</option>
          <option value="ナイトライフ">ナイトライフ</option>
          <option value="ダイニング">ダイニング</option>
          <option value="ショッピング">ショッピング</option>
        </select>

    </nav>
    
    <div id="content__wrap">
      <div class="content">

        <!-- resort-collection -->
        <div id="resort-collection" class="sub-content resort-gallery-container">

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="grand-waikikian-hgvc/" style="background-image: url('img/thumbnails/grandwaikikian.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>グランド・ワイキキアン・バイ・ヒルトン･グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ホノルル</p>
              <p>広大なヒルトン・ハワイアン・ ビレッジ&reg;・ワイキキ･ビーチ・リゾートの中心部に建設されたグランド・ワイキキアンでは、リゾートからの壮大な眺望、グランドホテルならではの高級感と行き届いたサービス、そして豪華なコンドミニアムの安らぎと利便性に至るまで、かつてない贅沢なホノルルでのバケーションを皆様に提供しています。</p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="hokulani-waikiki-hgvc/" style="background-image: url('img/thumbnails/hokulaniwaikiki.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>ホクラニ・ワイキキ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ホノルル</p>
              <p>有名なワイキキ・ビーチ・ウォーク®最北端のエンターテイメント地区に位置し、ダイニング、ショッピング、エンターテイメントとワイキキで最も活気のあるワイキキ・ビーチ・ウォーク®に理想的なアクセスを提供しています。プールラウンジ、バー、プライベートカバナ、そしてダイナミックなワイキキの景観をお楽しみいただけるナラニが特徴です。</p>
              <p><a href="hokulani-waikiki-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="kalia-hgvc/" style="background-image: url('img/thumbnails/kalia.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>カリア・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ホノルル</p>
              <p>トロピカルな雰囲気溢れるカリアタワーは、22エーカー（約0.089km²）のヒルトン・ハワイアン・ビレッジ&reg;・ワイキキ･ビーチ・リゾートの敷地内という理想的な立地条件を誇ります。カリアタワーの12階から18階にある客室から、最高のワイキキを実感いただけることでしょう。</p>
              <p><a href="kalia-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="kings-land-hgvc/" style="background-image: url('img/thumbnails/kingsland.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>キングス・ランド・バイ・ヒルトン･グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ホノルル</p>
              <p>有名なコハラ・コーストにあるヒルトン・グランド・バケーションズ・クラブの最新リゾート、キングス・ランド。美しいフェアウェイと、壮大なワイコロアの眺望をお楽しみください。溶岩原を切り開いた、112エーカー（約0.45km²）の広大な敷地を誇り、ハワイ島で最高のゴルフ場として定評のある、キングスコースとビーチコースの間に位置しています。</p>
              <p><a href="kings-land-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="kohala-hgvc/" style="background-image: url('img/thumbnails/kohala.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>コハラ・スイーツ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ワイコロア</p>
              <p>ビッグ・アイランドの澄み切ったコハラ・コーストに位置するヒルトン・グランド・バケーションズ・ クラブ・アット・ワイコロア・ビーチ・リゾートは、壮大なワイコロアの中心地として、リラックスしたオアシスを提供しています。上品な部屋には、カジュアルでエレガントなトロピカルスタイルといった独特なアメニティーと家具が調和されています。</p>
              <p><a href="kohala-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="lagoon-tower-hgvc/" style="background-image: url('img/thumbnails/lagoon.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>ラグーン・タワー・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ワイコロア</p>
              <p>美しい南国の自然を背景にしたホノルルのヒルトン・ハワイアン・ビレッジ®・ワイキキ・ビーチ・リゾートは、まさにパラダイスの中心。絶好のロケーションに、最高水準のアメニティーが整っています。ワイキキ屈指の有名な白浜に隣接しており、ヒルトン・ハワイアン・ビレッジ内では、心ゆくまでショッピングやお食事、そして各種エンターテイメントをお楽しみいただけるほか、トロピカルな植物や、水のきらめくプール、まばゆい滝などの演出で、楽園ムード漂うバケーションが皆様をお待ちしています。</p>
              <p><a href="lagoon-tower-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->

          <div class="card wow fadeInUp">
            <div class="col-sm-4 l_cell">
              <a class="photo-tile" href="bay-club-waikoloa-beach/" style="background-image: url('img/thumbnails/bayclub.jpg');"></a>
            </div>
            <div class="col-sm-8 r_cell" style="">
              <h3>ザ・ベイクラブ・アット・ワイコロア・ビーチ・リゾート</h3>
              <p class="location"><i class="fa fa-map-marker"></i>ハワイ州、ワイコロア</p>
              <p>入り組んだ秘境の渓谷や、燃え立つ溶岩など自然の驚異をヘリコプター・ツアーから望む雄大な光景は、ハワイ島ならではの醍醐味です。コハラコーストの散策でも、手つかずの自然を間近に感じられます。2つのダイナミックなゴルフコースに囲まれたこのリゾートは、太陽が降り注ぐのどかで美しい環境に位置します。</p>
              <p><a href="bay-club-waikoloa-beach/" class="btn btn-primary">詳細</a></p>
            </div>
          </div><!-- card -->
        
        </div> <!-- resort-collection -->



        <!-- sample-week -->
        <div id="sample-week" class="sub-content resort-gallery-container" style="display: none;">

          <h1>オアフ島</h1>
        
          <h4>ハワイ州の州都ホノルルを擁するオアフ島。１年を通して温暖な気候に恵まれたこの島は、日本をはじめ世界各国から多くの旅行者を迎え入れる観光都市でもあります。ビーチ沿いに高級リゾートホテルが集まり、世界有数のリゾート地として名を馳せるワイキキ、巨大ショッピングモールがあるアラモアナ、サーファーの聖地であるノースショア、ハワイ王朝ゆかりの史跡が残るダウンタウン、パウダーサンドのビーチが自慢のカイルアなど、バカンスを楽しむための素材が凝縮したオアフ島は、島そのものが一大リゾート。</h4>

          <p>ショッピングに明け暮れたりワイキキビーチで慌しく過ごすハワイはそろそろ卒業。これからは「１週間のハワイ暮らし」をテーマにハワイを訪れてみませんか？いつものハワイがより思い出深いものになるはずです。</p>

          <h1>オアフ島の１週間</h1>


          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 1: 快適な1週間を過ごすための準備をしましょう</h3>
              <p>待ちに待ったハワイでのバケーション！</p>
              <p>まずはこれからの１週間、お部屋でゆったりとくつろぐための準備をはじめます。日本からのフライトは午前中の到着がほとんど。午後のチェックインまで少し時間が空きますので、この時間を利用し「快適ハワイ暮らし」をサポートするアイテムを探しに出かけましょう。</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 2: ファーマーズマーケットに出かけよう</h3>
              <p>少し早起きをし、地元農家で栽培された新鮮野菜やフルーツが並ぶファーマーズマーケットに出かけてみませんか？</p>
              <p>様々な野菜を少しずつ購入できるファーマーズマーケットはタイムシェア派の強い味方。新鮮食材を調達し、地元の人たちに教えてもらったハワイ料理に挑戦してみましょう！</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 3: それぞれのバケーションを</h3>
              <p>タイムシェア・ステイの魅力のひとつが、キッチン付きという点。外食続きで胃が疲れた時や、小さなお子様連れで外食がむずかしい、といった方々にはやはり自炊がおすすめです。</p>
              <p>ヒルトンのタイムシェア・リゾートのキッチンは炊飯器をはじめ、鍋、調理器具、食器まで全て揃っていますので、スーパーマーケットやファーマーズマーケットで地元ならではの食材を購入し、ポキやロコモコなどハワイ料理に挑戦してはいかがでしょう。</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 4: チャイナタウンを散策</h3>
              <p>アジア系の移民が多く集まるチャイナタウン。</p>
              <p>野菜や魚介類の市場や昔ながらの雑貨店、飲食店などがずらりと並ぶ町並みを歩けば、また違ったハワイを垣間見ることができるでしょう。</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 5: ハワイの歴史を学ぶ</h3>
              <p>日本人にとって最も身近な外国といえるハワイですが、アメリカの50番目の州となったのは1959年のこと。実は意外と最近です。それ以前には、日系人をはじめ多くの外国人を移民として迎えていたり、カメハメハ大王に統治されていたりと、ハワイは独特の歴史を歩み続けていました。そして今でもハワイ諸島のいたるところに歴史的スポットが点在しています。</p>

              <p>ワイキキからアラモアナにかけて、王族に所縁のある場所が21箇所選定され、その場所には史跡の説明が簡単に書かれたサーフボード型の指標が建てられています。街角でこのサーフボードを見かけたら、少し立ち止まってみてください。見慣れた街の風景がまた別の表情を見せてくれるでしょう。</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 6: アクティビティ体験</h3>
              <p>せっかくハワイに来ているのですから、その土地に根付いた文化にも触れてみたいもの。ハワイに昔から伝わるフラやレイ、ウクレレは、人々との結びつきも深く、生活の一部となっているようです。</p>
              <p>例えばレイ。もともと愛情や祝福の意味が込められており、卒業式や誕生日などあらゆる場面でレイを贈り合います。普段の服装にレイをプラスするだけで華やかな装いになりますので、ちょっとしたパーティーなどにも便利ですね。</p>
              <p>ヒルトン･ハワイアン･ビレッジ・ワイキキ・ビーチリゾートでは、レイ作りなどハワイアン･カルチャーを楽しく学べるアクティビティを毎日開催（一部有料）。ヒルトン･ハワイアン・ビレッジ内のタイムシェア・タワーにお泊りの方もご参加いただけます。</p>
            </div>
          </div>

          <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>DAY 7:　ビーチで朝食を楽しむ</h3>
              <p>満喫したハワイの滞在も今日が最終日。それぞれ旅のスタイルはあるもののビーチに行かずして旅を終わらせるわけにはいきませんよね。サーフィンやボディボードにいそしんだり、ビーチサイドでヨガや読書をしたりと、ビーチの楽しみ方は人それぞれです。</p>
              <p>ヒルトン･ハワイアン･ビレッジ・ワイキキ・ビーチリゾート前のビーチも早朝ともなると、ジョギングやウォーキングをする人の姿が多く見られます。そんな中おすすめしたいのが、海を目の前にしての朝食。キッチンで簡単なサンドイッチやフルーツを準備し、ビーチマットを片手にいざビーチへ。人の少ないビーチで波の音を聞き、うっすらと差す太陽の光を浴びながらの朝食は、レストランでの豪華な食事よりもずっと贅沢かもしれません。</p>
              <p>ただし、ハワイ州はビーチなど公共場所での飲酒や喫煙は禁止ですのでくれぐれもご注意ください。</p>
            </div>
          </div>
        
        </div> <!-- sample-week -->



        <!-- events -->
        <div id="events" class="sub-content resort-gallery-container activities-list" style="display: none;">

          <h1>イベント</h1>
          
          <!-- <div class="row block">
            <div class="col-sm-4">
                <img src="http://placehold.it/350x220" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
            </div>
            <div class="col-sm-8">
              <h3>ファースト・フライデー・ストリート・フェスティバル</h3>
              <p>開催中、今月のファースト・フライデー</p>
              <p class="location"><i class="fa fa-map-marker"></i>ジ・アーツ・アット・マークス、1159 Nuuanu Ave, Honolulu, Hawaii 96817</p>
              <p>本日夕方、ギャラリーおよびその他のアート会場が入場自由になります。アーティスト・レセプション、ライブ・ミュージックおよび軽食をお楽しみいただけます。これらのイベントは入場無料でどなたでも参加できます！ギャラリー巡りマップは当地区のさまざまな場所で入手可能です。午後5時から9時まで。 </p>
              <p><a href="grand-waikikian-hgvc/" class="btn btn-primary">詳細</a></p>
            </div>
          </div> -->

          <div class="row">
            <!-- left col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>ファースト・フライデー・ストリート・フェスティバル</h3>
                  <hr>
                  <p>開催中、今月のファースト・フライデー</p>
                  <p class="location"><span class="bold">ジ・アーツ・アット・マークス</span><br /><i class="fa fa-map-marker"></i>1159 Nuuanu Ave, Honolulu, Hawaii 96817</p>
                  <p>本日夕方、ギャラリーおよびその他のアート会場が入場自由になります。アーティスト・レセプション、ライブ・ミュージックおよび軽食をお楽しみいただけます。これらのイベントは入場無料でどなたでも参加できます！ギャラリー巡りマップは当地区のさまざまな場所で入手可能です。午後5時から9時まで。 </p>
                  <p><a href="http://www.artsatmarks.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div> <!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ホノルル・ファッション・ウィーク</h3>
                  <hr>
                  <p>11月6日から9日まで</p>
                  <p class="location"><span class="bold">ハワイ・コンベンション・センター</span><br /><i class="fa fa-map-marker"></i>1801 Kalakaua Ave, Honolulu, Hawaii 96815</p>
                  <p>ホノルル・ファッション・ウィークではオアフ島有数のファッション体験を味わうことができます。ここホノルルが、小さなニューヨークといった趣です。ホノルルは日本ファッション・ウィーク推進機構、ハワイ・ファッション・インキュベーターおよびハワイ州産業経済開発観光省とパートナーを組んで、真に内側からファッションを体験することのできる機会を提供します。 </p>
                  <p><a href="https://www.facebook.com/events/1482459282017602/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>第25回デザート・ファンタジー</h3>
                  <hr>
                  <p>11月2日</p>
                  <p class="location"><span class="bold">パシフィック・ビーチ・ホテルーグランド・ボールルーム</span><br /><i class="fa fa-map-marker"></i>2490 Kalakaua Ave., Honolulu, HI</p>
                  <p>ハワイで人気のスイーツ試食イベント～第25回デザート・ファンタジー！イベントはハワイの人気店のデザートを2時間続けての試食するものです。専門家による審査員賞および一般参加者によるデザートの人気投票が行われます。さらに、サイレント・オークション、エンターテインメント等が行われます。コミュニティ内の障害を抱えた人たちを支援するための催しです。</p>
                  <p><a href="http://www.ucpahi.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>オーバー・ジ・エッジ</h3>
                  <hr>
                  <p>11月8日</p>
                  <p class="location"><span class="bold">ハイアット・リージェンシー・ワイキキ・ビーチ・リゾート&amp;スパ</span><br />
                    <i class="fa fa-map-marker"></i>2424 Kalakaua Ave, Honolulu, HI</p>
                  <p>今年のオーバー・ジ・エッジは単にこれまで以上の高所で開催されるのではなく、ハイアットで開かれます。ハイアット・リージェンシー・ワイキキ・ビーチ・リゾート＆スパとの新たなパートナーシップを通じ、参加者は全く新しい体験を味わうことができます。今年のオーバー・ジ・エッジ・イベントでは、スペシャル・オリンピック・ハワイ支援のため、このアイコン的ホテルから400フィート（約122m）（これまでより80フィート（約24m）高い）懸垂降下します。今年の第6回オーバー・ジ・エッジ・イベントの登録は現在受付中で、イベントは2014年11月8日 土曜日に行われます。ラペル・スポットは、少なくとも1回の降下につき1,000ドルの募金を当日までに集めた個人またはグループに独占的に割り当てられます。この募金はスペシャル・オリンピック・ハワイへの寄付金となります。参加者は、11月8日までの時点で18歳以上で、体重が300ポンド（約136kg）未満であることが条件です。参加申し込みはオンラインspecialolympicshawaii.org（英語）にて可能です。</p>
                  <p><a href="http://www.specialolympicshawaii.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>マカヒキ・マオリ・フェスティバル2014</h3>
                  <hr>
                  <p>11月22日</p>
                  <p class="location"><span class="bold">カピオラニ・パーク・バンドスタンド</span><br />
                    <i class="fa fa-map-marker"></i>2748 Monsarrat Ave, Honolulu, Hawaii 96815</p>
                  <p>このフェスティバルは、伝統的なハワイの年の終わり― マカヒキ ―を告げるもので、私たちの価値観、言語、芸術、教育および活動を賛美するものです。伝統的に、マカヒキではハワイのロノ神と収穫が祝われてきました。マカヒキはハワイの太陰暦に準じる収穫期の終わりを告げるものなのです。マカヒキは平和の時期でした。このことが守られないと、戦争およびどのような違反行為であっても、クー神に関係する全ての活動に対しては一時休止、すなわち、カプが適用されたのです。このフェスティバルの特徴は伝統的なハワイのマカヒキ・ゲーム、先住民工芸品、工芸品、デモンストレーション、展示、エンターテインメントおよびフラ（伝統的歌舞音曲）などです。 </p>
                  <p><a href="http://stayhgv.com/Hawaii/www.mmfoahu.org" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>スター・オブ・ホノルル・ニュー・イヤーズ・イブ・クルーズ</h3>
                  <hr>
                  <p>12月31日から翌年1月1日まで</p>
                  <p class="location"><span class="bold">アロハ・タワー・マーケットプレイス</span><br />
                    <i class="fa fa-map-marker"></i>Pier 8, 1 Aloha Tower Dr., Honolulu, Hawaii 96813</p>
                  <p>スター・オブ・ホノルルの船上から新年の挨拶をするのはいかがですか。グルメ料理の宵、ライブ・エンターテインメント、船からの記念品、そして海からの壮大な花火の景色をお楽しみになれます。3つのミッド・ナイト・クルーズのオプションをご用意しています。セレブレーション・デイナー・ショー&amp; 花火クルーズであれば、3コースのディナーをお楽しみいただけます。このディナーではロブスター丸ごと1尾とテンダーロイン・ステーキをご賞味いただくことができます。さらに、マイ・ハワイ・ショーが開かれます。ロマンス・ディナー・ジャズ＆花火クルーズでは贅沢な5コース・フランス風ディナーをお楽しみいただけます。このコースでは生きたロブスター、最上級のテンダーロイン牛肉、そしてプライベート・ラウンジでのジャズ生演奏をご堪能いただくことができます。ゲスト・オブ・アドミラルのディナー、ジャズ&amp;花火クルーズではフランス風のダイニングとジャズ音楽をお楽しみになれます。さらに、豪勢なアールデコのスーパー・ノバ・ルームのプライベート・テーブルでお寛ぎいただけます。  </p>
                  <p><a href="http://www.starofhonolulu.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->

            <!-- right col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>ゾンビから逃げて隠れて銃を撃つ</h3>
                  <hr>
                  <p>10月23日から11月1日まで</p>
                  <p class="location"><span class="bold">ハワイ・エクストリーム・ペイントボール</span><br /><i class="fa fa-map-marker"></i>96-1041 Midway St., Kapolei, HI</p>
                  <p>純粋にアドレナリン分泌量を高め気分を高揚させてくれる、この相互交流型幽霊アトラクションでは、サベッジ将軍率いるゾンビの大群を、見つけられてしまう前に探し出して攻撃するというものです。さほど恐ろしさを感じなければ、11月１日に、グロー・スティックだけの真っ暗闇で再体験してください。 </p>
                  <p><a href="http://www.scream808.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>第3回ハワイ・スラック・キー・フェスティバル</h3>
                  <hr>
                  <p>11月2日</p>
                  <p class="location"><span class="bold">ホアラウナ・コミュニティ・パーク</span><br />
                    <i class="fa fa-map-marker"></i>Keaunui Dr, Ewa Beach, Hawaii 96706</p>
                  <p>ハワイのスラック・キー・ギターのジャンルにおける最高峰のアーティストやミュージシャンが参加。6時間のライブ・ミュージック・フェスティバルです。フェスティバルでは15人のスラック・キー・ジャンルのアーティストによる演奏が6時間続けて行われます。観客は歌に加え、さまざまなスタイルのスラック・キー・ギターを堪能できます。スラック・キー・ギターはハワイのビッグ・アイランドで1830年発祥のアート形式の1つです。2014年、ハワイはこのユニークなアート形式の誕生184周年を祝うことになっています。加えて、このフェスティバルでは島の工芸品、地元の食品、コミュニティ情報、CD、DVDおよびフェスティバルのTシャツなどの商品も入手可能です。最後に、カニレア・ウクレレの展示に加えてテーラー・ギターズの展示もフェスティバルにて実施されます。ぜひフェスティバルにお越しください。そして、ハワイ固有の美しい音楽とスラック・キー・ギターをお楽しみください。 </p>
                  <p><a href="http://www.slackkeyfestival.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>第34回ハワイ国際映画祭</h3>
                  <hr>
                  <p>10月30日から11月9日まで</p>
                  <p class="location"><span class="bold">リーガル・ドール・カナリー・スタジアム18&amp; アイマックス</span><br />
                    <i class="fa fa-map-marker"></i>735 Iwilei Rd, Honolulu, Hawaii 96817</p>
                  <p>ハワイ国際映画祭（HIFF）はアジア太平洋地域における国際的な映画の成功を目的とする先駆的フォーラムです。新しい気鋭の才能を見分け、革新的教育プログラムを通じてキャリア形成および斬新な連携を推進し、映画芸術を通じてダイナミックな文化交流を図ります。</p>
                  <p><a href="http://www.hiff.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>チャイナ・タウン・ライト・マーケット</h3>
                  <hr>
                  <p>11月8日</p>
                  <p class="location"><span class="bold">チャイナ・タウン・カルチャル・プラザ</span><br />
                    <i class="fa fa-map-marker"></i>100 N. Beretania St, Honolulu, Hawaii 96817</p>
                  <p>午後3時の開会式では、水と島の生活にまつわるストーリーを物語るハワイの美しい歌が披露されます。来場者は耳にやさしい音楽を楽しみながら、水の流れと光を鑑賞することができます。開会式が終わると、エンターテインメント、ライブ・ミュージック、そして食べ物がイベントを通じて夜9時まで提供されます。このイベントは娯楽であり、同時に教育的な内容となります。このイベントは、目にも鮮やかな提灯の光でヌウウアヌ渓流をライト・アップすることで、アフプアアのコンセプトを賛美するものです。格子棚と椅子が用意された場所には氷柱状のLEDライトとハワイ自生の植物が飾られます。このイベントはまた、地元の産品、地元のアーティスト、製造業者、エネルギー節約産品などを推奨することで、持続可能性の考えを普及させるものでもあります。コミュニティが楽しみ、そして地元のビジネス全体を支援するために、印象的で記憶に残るイベントにすることが目的となっています。</p>
                  <!-- <p><a href="http://www.hiff.org/" target="_blank" class="btn btn-primary btns">詳細</a></p> -->
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>メイク・ア・ウィッシュ・ジングル、ロック、ラン</h3>
                  <hr>
                  <p>12月21日</p>
                  <p class="location"><i class="fa fa-map-marker"></i>330 Cooke St., Honolulu</p>
                  <p>こんにちは！皆さん、お気に入りのフェスティバル用の衣服を纏って、メイク・ア・ウィッシュ基金のジングル、ロック、ランのイベントに参加してください。これはホノルルの中心からカカアコまで5kmの道のりを徒歩やランニングで進みます。ケイキ短距離競走は12歳未満のお子様が対象です。詳細はhawaii.wish.org （英語）をご参照ください。 </p>
                  <p><a href="http://hawaii.wish.org/news-and-events/calendar-of-events/2014/december/jingle-rock-run-2014" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->
          </div>
        
        </div> <!-- events -->


        <!-- activities -->
        <div id="activities" class="sub-content resort-gallery-container activities-list" style="display: none;">

          <h1>アクティビティ</h1>

          <div class="row">
            <!-- left col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>ホノルル動物園</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>151 Kapahulu Avenue, Honolulu, HI 96815</p>
                  <p>42エーカーのホノルル動物園では、995種類もの動物が飼育されています。コモドドラゴン、オラウータン、ゾウ、霊長類、鳥類、爬虫類、両生類、そして様々なアフリカの動物を毎日ご覧いただけます。ワイキキで自然の動物達の姿が見られるホノルル動物園をお見逃しなく！</p>
                  <p><a href="http://www.honoluluzoo.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div> <!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>太平洋航空博物館パールハーバー</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>319 Lexington Boulevard, Historic Ford Island, Honolulu, HI 96818</p>
                  <p class="location"><i class="fa fa-phone"></i>808-441-1000</p>
                  <p>ハワイ・オアフ島にある太平洋航空博物館パールハーバーには、第二次世界大戦当時の航空機が保管されています。1941年12月7日の日本帝国海軍による奇襲攻撃の爪痕を残す格納庫には、ジオラマによる展示、零戦、B-25ミッチェル爆撃機と いった貴重な戦闘機、最初の空撃を収録したフィルム、戦闘シミュレーターなど数多くの展示物があります。真珠湾（パールハーバー）にある数多くの見所・観光スポットの中で最も新しく、必見のアトラクション施設です。</p>
                  <p><a href="http://www.pacificaviationmuseum.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ワイキキ水族館</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2777 Kalakaua Avenue, Honolulu, HI 96815 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-923-9741</p>
                  <p>1904年設立し、1919年からはハワイ大学が管理しているワイキキ水族館は、リビングリーフの隣、カピオラニ公園前のワイキキビーチ沿いにあります、水族館は常時500種以上の海洋生物と、3000点以上の標本を展示しています。ハワイアン・アオ・ウミガメや、世界ではここで１匹飼育されているだけという、ペパーミント・エンジェルフィッシュも展示されています。北西ハワイ諸島の海洋生物に関する展示コーナーもお見逃しなく。</p>
                  <p><a href="http://waquarium.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>シーライフパーク・ハワイ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>41-202 Kalanianaole Hwy #7, Waimanalo, HI 96795</p>
                  <p class="location"><i class="fa fa-phone"></i>808-259-2500</p>
                  <p>マカプウ岬のすぐ近くにあるシーライフパーク・ハワイでは、ウォルフィンやイルカ、アシカやペンギン、ウミガメなどが皆様をお待ちしています。「ドルフィン・ロイヤルスイム」「ドルフィン・スイム・アドベンチャー」「ドルフィン・エンカウンター」といったプログラムで、イルカと間近に触れ合いませんか？「シートレック・アドベンチャー」は、３０万ガロン（110 万リットル）のリーフタンクで、エイ、亀、サメの写真を撮ることができるプログラムです。また、アシカの餌やりや「エイとの触れ合い体験」も見逃がせません。</p>
                  <p><a href="http://www.sealifeparkhawaii.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>スター・オブ・ホノルル</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1 Aloha Tower Drive, Honolulu, HI 96813</p>
                  <p class="location"><i class="fa fa-phone"></i>808-983-7827</p>
                  <p>1500名が乗船可能な、受賞歴のあるスター・オブ・ホノルル号で、ハワイで最も人気のサンセットディナークルーズを体験しませんか？歓迎のフラダンスからジャズコンサートやクルーズ最大のキャストで送るポリネシアンショーまで、エンターテイメントを存分にお楽しみください。</p>
                  <p><a href="http://www.starofhonolulu.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>パシフィック・ヒストリック・パーク</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>94-1187 Ka Uka BLVD, Waipahu, HI 96797</p>
                  <p class="location"><i class="fa fa-phone"></i>808-954-8777</p>
                  <p>パシフィック・ヒストリック・パークは、米国国立公園局と協力する非営利団体であり、USSアリゾナ記念館の音声ナレーション付きツアーと、パールハーバー・ビジターセンター唯一のギフトショップを運営しています。さらにモロカイ島に位置するカラウパパ国立歴史公園で米国国立公園局のサポートも行っています。</p>
                  <p><a href="http://www.pacifichistoricparks.org/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>スカイダイブ・ハワイ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>68-760 Farrington Hwy, Waialua, HI 96791</p>
                  <p class="location"><i class="fa fa-phone"></i>808-637-9700</p>
                  <p>ハワイで最も歴史のあるスカイダイビング会社であるスカイダイブ・ハワイは、世界で最も美しいと言われるDZ（ドロップ・ゾーン）からのタンデムスカイダイビングを毎日ご提供しております。タンデムとは、初めてのお客様にスカイダイビングのスリルを最も安全にそして簡単にご体験いただけるダイビング方法です。</p>
                  <p><a href="http://www.skydivehawaii.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>サウス・パシフィック・ウオーター・スポーツ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>7192 Kalanianaole Hwy E207, Honolulu, HI 96825</p>
                  <p class="location"><i class="fa fa-phone"></i>808-395-7474</p>
                  <p>ハナウマ湾でのシュノーケリング、スキューバダイビング、ジェットスキー、パラセイリング、バンパーチューブ、サーフィン、バナナボート、ウエイクボード、そして海の散策など、さまざまなオプショナル・ ツアーをお客様にご提供しています。</p>
                  <p><a href="http://www.southpacifichawaii.com/v2/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ハワイ・プリンス・ゴルフ・クラブ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>91-1200 Fort Weaver Road, Ewa Beach, HI 96706</p>
                  <p class="location"><i class="fa fa-phone"></i>808-944-4567</p>
                  <p>オアフ島唯一の全27ホールのゴルフコースは、ワイキキから40分のエバ平原に位置しています。27エーカーという広大な敷地にある、90の白砂バンカーと10の池が27の美しいグリーンの前に立ちふさがるコースでは、ワイアナ山脈の美しい景観とプレーをお楽しみいただけます。</p>
                  <p><a href="http://www.princeresortshawaii.com/hawaii-prince-hotel-waikiki/waikiki-oahu-golf.php" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->

            <!-- right col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>アトランティス・サブマリン</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1600 Kapiolani Blvd Ste 1630, Honolulu, HI 96814</p>
                  <p class="location"><i class="fa fa-phone"></i>800-548-6262</p>
                  <p>ハワイ唯一の観光用潜水艦ツアーを体験しませんか？快適で安全な潜水艦から見る、数えきれないほどのエキゾチックな海洋生物達と、生涯忘れられない思い出をと作りましょう。ワイキキ沖に沈められた船や飛行機は「魚達の新しい住処」となっており、驚きと感動に満ちたハワイの海の世界をアトランティスからのお楽しみいただけます。 </p>
                  <p><a href="http://atlantisadventures.com/oahu" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ポリネシア・カルチャー・センター</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>55-370 Kamehameha Highway, Laie, HI 96762 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-293-3333</p>
                  <p>ポリネシアを楽しみながら体験できるテーマパーク、ポリネシア・カルチャー・センターは、ハワイで１番の観光名所です。アオテアロア、フィジー、ハワイ、マーケサス、サモア、タヒチ、トンガそしてイースター島といった８つの文化を代表するそれぞれの村と展示をお楽しみいただけます。オアフ島のノースショアに位置する４２エーカーの広大な空間には、日中カヌーツアーが行われるラグーンがあり、休園日を除く毎日午後２時３０分より「レインボー・オブ・パラダイス　カヌーパージェント」が行われます。また、４Ｄ体験ができる映画館「ハワイアン・ジャーニー・シアター」もご体験ください。</p>
                  <p><a href="http://www.polynesia.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ウェット＆ワイルド・ハワイ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>400 Farrington Highway, Kapolei, HI 96707</p>
                  <p class="location"><i class="fa fa-phone"></i>808-674-9283</p>
                  <p>ウェット・アンド・ワイルド・ハワイは、ご家族からスリルの好きな方まで皆様に楽しんでいただける25の乗り物とアトラクションをご提供しています。７種類のファミリースライドや数々のミニアトラクションが楽しめる巨大アクティビティ・プールを備えた、幅広い年齢層向けの「ウオーター・ワールド」約5階建て高さのから滑り降りるスリル満点の4つチューブ・スライド「ワイアナエ・コースター」最先端のステーショナリー・ウエーブを楽しむ「ダ・フローライダー」をお楽しみください。また新たに、約１５ｍの高さから４０ｍの巨大な竜巻の中を滑り降りるユニークなスライド「トルネード」が加わりました。</p>
                  <p><a href="http://www.wetnwildhawaii.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ドールプランテーション</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>64-1550 Kamehameha Hwy, Wahiawa, HI 96786 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-621-8408</p>
                  <p>一面に広がるパイナップル畑の中、かわいい赤い屋根の建物が見えたら、それがドール・プランテーションです。 2008年のギネスブックに認定された世界最大の迷路では、秘密のチェックポイント全8カ所を見つけながらゴールまで向かう冒険を楽しくご体験いただけます。パイナップルエクスプレス、プランテーション・ガーデンツアーなど、楽しいアトラクションも充実しています。</p>
                  <p><a href="http://www.dole-plantation.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ドルフィン・クエスト−オアフ島</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>5000 Kahala Avenue, Honolulu, HI 96816</p>
                  <p class="location"><i class="fa fa-phone"></i>808-886-2268</p>
                  <p>ドルフィン・クエストは、イルカとの触れ合いを通じて皆様を魅力的なイルカの世界へとお連れします。イルカと人間が生涯にわたってつながりあう場所をみつけ、海の美しく崇高なイルカに触れ合い、泳ぐという夢を叶えませんか？</p>
                  <p><a href="http://www.dolphinquest.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->
              
              <div class="card">
                <div class="card_cell">
                  <h3>ステアマン・バイプレーン・ライズ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-phone"></i>808-637-4461</p>
                  <p>古いバイプレーン（複葉機）で、オアフ島の美しいノース・ショアから真珠湾上空までを飛行するオープン・コックピット空中ツアーです。アクロバティック飛行も承ります。</p>
                  <p><a href="http://www.stearmanbiplanerides.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ロバーツ・ハワイ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>680 Iwilei Road, Suite 700, Honolulu, Hawaii 96817</p>
                  <p class="location"><i class="fa fa-phone"></i>800-831-5541</p>
                  <p>ロバーツ・ハワイは、快適な交通や送迎、そしてご利用者様に合わせた観光ツアーや小旅行をご提供するフルサービスの会社です。1941年にカウアイ島にて観光業を開始した、従業員所有・運営の会社です。現在は、ハワイの主要な4島であるオアフ島、マウイ島、カウアイ島、ハワイ島までサービスを拡大しご提供しています。</p>
                  <p><a href="http://www.robertshawaii.com/water-activities/waikiki-ocean-club.php" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>タチバナ・エンタープライズ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>3035 Waialae Ave, Honolulu, HI 96816</p>
                  <p class="location"><i class="fa fa-phone"></i>808-738-3000</p>
                  <p>タチバナ・エンタープライズは、ゴルフツアー、送迎サービス、ゴルフショップ店舗、ガイドサービス、トローリングや釣り、さらにワイケレ・ショッピング、ハイキング、そしてギフトバスケットのデリバリーなど多岐にわたるサービスをご提供しています。</p>
                  <p><a href="http://www.tachibana.com/en/index.html" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>コオリナ・ゴルフクラブ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>92-1220 Aliinui Dr, Kapolei, HI 96707 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-676-5300</p>
                  <p>テッド・ロビンソンによって設計されたコオリナ・ゴルフクラブのコースには、多くのウォーターハザードが効果的に配置され、段差のあるグリーン、広いフェアウエイなどの特徴があります。またコオリナ・ゴルフクラブはLPGAロッテ・チャンピオンシップを含む、チャンピオン・ツアーやLPGAイベントの開催コースです。世界トップクラスのコオリナ・ゴルフ・ゴルフアカデミーでは、お客様一人一人のレベルとニーズに合わせて的確なアドバイスを差し上げますので、その効果をご実感いただけることでしょう。</p>
                  <p><a href="http://www.koolinagolf.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->
          </div>
        
        </div> <!-- activities -->


        <!-- nightlife -->
        <div id="nightlife" class="sub-content resort-gallery-container activities-list" style="display: none;">

          <h1>ナイトライフ</h1>
          <div class="row">
            <!-- left col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>ブレス・オブ・ライフ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Polynesian Cultural Center, 55-370 Kam Hwy, Laie, HI 96762</p>
                  <p class="location"><i class="fa fa-phone"></i>808-293-3333</p>
                  <p class="location"><i class="fa fa-clock-o"></i>7:30 pm 〜 9:00 pm（毎日）</p>

                  <p>総勢約１００名のキャストによるパフォーマンスでお届けする、イブニングショー、「Hā： ブレス・オブ・ライフ」。迫力満点のファイヤーナイフ・ダンスやフラ、タヒチアンなどのポリネシアのダンスと音楽をご堪能ください。物語は誕生、学び、青春、結婚、戦い、死、そして子供の誕生という人生で誰もが経験する普遍的な出来事をベースに綴られており、主人公マナがポリネシア文化を通して、人生の喜びや試練を経験する感動のストーリーです。</p>
                  <p><a href="http://www.polynesia.com/evening-show.html" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div> <!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>レジェンド・イン・コンサート・ワイキキ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1540 South King Street, Honolulu, HI 96826</p>
                  <p class="location"><i class="fa fa-phone"></i>808-629-7469</p>
                  <p class="location"><i class="fa fa-clock-o"></i>ナイトショー開演時間：8:00 pm</p>
                  <p class="location"><i class="fa fa-calendar-times-o"></i>休館日：月曜日(2016/3/31まで)、金曜日(2016/4/1以降)</p>

                  <p>本場ラスベガスの「レジェンド・イン・コンサート」がハワイに上陸！コンサート・ワイキキのロック・ア・フラショーはワイキキの最新/最大のショーです。750人を収容可能なロイヤル・ハワイアン・シアターで、「エルビス」をメインに豪華一流スターのソックリさんが登場する、迫力と感動のショーをお楽しみください。レジェンド・ワイキキでは、ディナー後そのままショーをご覧いただくオプションもございます。世界レベルの「レジェンド・アーティスト」が、エルビス・プレスリー、マイケル・ジャクソンそしてマドンナなどのスターを見事に再現します。現在の出演者はwww.LegendsWaikiki.com/Castからご確認ください。</p>
                  <p><a href="http://www.legendswaikiki.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>パラダイス・コーブ・ルアウ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>92-1089 Aliinui Drive, Kapolei, HI 96707</p>
                  <p class="location"><i class="fa fa-phone"></i>808-842-5911</p>
                  <p>ハワイで最高の評価を受けるパラダイス・コーブのルアウで、ハワイ滞在に欠かせない伝統的なルアウを体験しませんか？パラダイス・コーブのビーチフロントにある１２エーカーの敷地内で伝統的なアート＆クラフトやハワイのユニークなゲームや、背の高いヤシの木から香り高い花が降る「シャワー・オブ・フラワーズ」海から地引き網を引き揚げる伝統的なフキラウなどをご体験ください。その後は、パラダイス・コーブ・ロイヤル・コートで、サンセットの儀式として、地中で焼く伝統的な豚の丸焼きを掘り出します。ルアウ・ブッフェにはポイ、ロミロミサーモン、カルアピッグなどの伝統的なルアウ料理が並びます。伝統的なハワイの「宴会」を楽しみながら、パラダイス・コーブ・ハワイアン・レベニューをご堪能ください。そして、素晴らしいハワイの星空のもと、受賞歴のあるパフォーマーによる、古典から現代までのポリネシアン音楽とダンスをお楽しみください。</p>
                  <p><a href="http://paradisecove.com/luau-packages/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ルーマーズ・ナイトクラブ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Ala Moana Hotel, 410 Atkinson Drive, Honolulu, HI 96814-4722</p>
                  <p class="location"><i class="fa fa-phone"></i>808-955-4811</p>
                  <p>金曜日：5 pm 〜 9 pm：60年代、70年代そして80年代の人気の音楽<br />
                    金曜日（ハッピーアワー）：9 pm 〜 2 am：アーバン・グルーブ、ヒップホップ＆R&amp;B<br />
                    土曜日：9 pm 〜 2 am：フラッシュバック・サタデー：80年代、90年代そして最新ヒット曲</p>
                  <p><a href="http://www.outrigger.com/hotels-resorts/hawaiian-islands/oahu-waikiki/ala-moana-hotel/dining-activities/restaurants" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->

            <!-- right col -->
            <div class="col-s-12 col-sm-6">
            <div class="card">
                <div class="card_cell">
                  <h3>マジック・オブ・ポリネシア</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2300 Kalakaua Ave, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-971-4321</p>
                  <p>マジック・オブ・ポリネシアは、マジック、イルージョン、ポリネシアンダンス、音楽そしてチャントを融合させた究極のステージショーです。ハワイ州で最も成功を収めていると言われるジョン・ヒロカワによるマジック・オブ・ポリネシアは、世界中から訪れる観客を魅了します。国際マジシャン協会マーリン賞を含む複数の受賞歴を持つジョン・ヒロカワが創りだすイリュージョンとポリネシアンダンスを、心ゆくまでお楽しみください。</p>
                  <p><a href="http://www.magicofpolynesia.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>サーファー・ザ・バー</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>57-091 Kamehameha Hwy, Kahuku, HI 96731</p>
                  <p class="location"><i class="fa fa-phone"></i>808-293-6000</p>
                  <p>サーファーのためのサーフィン雑誌「サーファー・マガジン」とタートルベイ・リゾートが提携し、サーファーとサーフィン・ファンが気軽に集える場所として「サーファー・ザ・バー」が誕生しました。「サーファー・ザ・バー」は、世界のサーファーが集まる伝説的なサーフィンの地、オアフ島のノースショアに位置しています。</p>
                  <p><a href="http://www.turtlebayresort.com/resort/restaurants/surfer_thebar/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ムース・マッギリカディーズ</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>310 Lewers Street, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-923-0751</p>
                  <p>ムース・マッギリカディーズは、現在ではマウイ、サンディエゴそしてパサデナに店舗があります。朝食、ランチ、ディナー、そして料金が半額になるハッピーアワー、そして８種類の冷たいドラフトビールをお楽しみください。２階のパブでは毎晩ライブバンドやDJが登場します。フレンドリーなスタッフが地元のお客様や旅行者のお客様をお迎えするムース・マッギリカディーズにぜひお立ち寄りください。また、Tシャツやガラス製品を扱うショップを併設しています。</p>
                  <p><a href="http://www.moosewaikiki.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>マイタイ・バー</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1450 Ala Moana Blvd. Suite 3247, Honolulu, HI 96814</p>
                  <p class="location"><i class="fa fa-phone"></i>808-947-2900</p>
                  <p>マイタイ・バーは、受賞歴のあるハッピーアワーでも有名な、ホノルルで一番の「パウ・ハナ（仕事終わりの意味）」スポットです。オープンエアのバーでは、毎晩2回、サンセットと共にアイランドスタイルのライブミュージックをお楽しみいただけます。マイタイ・バーはアラモアナ・ショッピングセンターの４階にありますので、駐車場の心配は不要です。</p>
                  <p><a href="http://www.maitaibar.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ラムファイヤー</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Sheraton Waikiki Hotel, 2255 Kalakaua Avenue, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-922-4422</p>
                  <p class="location"><i class="fa fa-clock-o"></i>8:30 pm （日曜日〜木曜日 ）/ 9 pm（金曜日＆土曜日）</p>
                  <p class="location"><i class="fa fa-usd"></i>カバーチャージ：3ドル。駐車場のバリデーションサービスがございます。</p>
                  <p>ワイキキビーチ唯一のアップスケールなオーシャンフロント・ナイトクラブです。ライブ・エンターテイメント。</p>
                  <p><a href="http://www.sheraton-waikiki.com/dining/rumfire/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->
          </div>
        
        </div> <!-- nightlife -->


        <!-- dining -->
        <div id="dining" class="sub-content resort-gallery-container activities-list" style="display: none;">

          <h1>ダイニング</h1>
          <div class="row">
            <!-- left col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>モリモト・ワイキキ（高級/日本料理/寿司）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1775 Ala Moana Blvd., Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-943-5900</p>
                  <p class="location"><i class="fa fa-clock-o"></i>11:00 am 〜 2:30 pm、5:00 pm 〜 10:00 pm</p>

                  <p>ザ モダン ホノルルの代表的なレストランでもあるモリモト・ワイキキは、言わずと知れた「料理の鉄人」のモリモトのレストランです。鉄人・森本正治シェフは、地元ハワイで獲れた新鮮で旬な食材、果物、野菜のみならず、厳選された日本やハワイの海の幸をふんだんに使って、日本料理を西欧料理と融合させた品々をご提供しています。和牛のカルパッチョ、白身魚、またはタコのピリ辛しょうがオイルと柚子醤油添え、石焼ビビンバなどシェフおすすめの料理の数々をぜひお試しください。また森本シェフによるオリジナルビールや日本酒もご提供しています。材料にも徹底的にこだわる鉄人・森本シェフの味をハワイでご体験ください。</p>
                  <p><a href="http://www.morimotowaikiki.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div> <!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ノブ・ワイキキ（高級/日本料理/寿司）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2233 Helumoa Rd., Honolulu, HI 96815 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-237-6999</p>
                  <p class="location"><i class="fa fa-clock-o"></i>5:30 pm 〜 10:00 pm</p>

                  <p>世界で最も認められた日本料理店であるノブでは、「NOBUフード」と呼ばれる南米や欧米のエッセンスを取り入れたお料理が楽しめます。世界中にノブを展開するシェフ、松久信幸氏が真心を込めて贈る、ハワイならではの創作和食と独創的なカクテルを洗練された雰囲気の中お楽しみください。約700㎡の店内には、寿司カウンターとプライベートパーティにご利用いただける個室もございます。</p>
                  <p><a href="http://www.noburestaurants.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>バリ・ステーキ＆シーフード（高級/ステーキ/シーフード）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2005 Kalia Road, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-941-2254</p>
                  <p class="location"><i class="fa fa-clock-o"></i>5:00 pm 〜 9:00 pm（火〜土）</p>
                  <p>ヒルトン・ハワイアン・ビレッジ・ワイキキ・ビーチ・リゾートのレインボー・タワー内にあるバリ・ステーキ＆シーフードは、ハワイの洗練されたオーシャンフロントレストランです。受賞歴のあるパシフィック・リム料理を、オープンエアのダイニングルームで、美しいワイキキビーチの展望とともにお楽しみください。</p>
                  <p><a href="http://www.hiltonhawaiianvillage.com/dining/bali-steak-and-seafood" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ラ・メール（高級/フランス料理）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Halekulani, 2199 Kalia Rd, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-923-2311</p>
                  <p class="location"><i class="fa fa-clock-o"></i> 5:30 pm ～ 9:30 pm</p>
                  <p>ラ・メールは、フォーブス・トラベル ガイドで最高の五つ星という栄誉に輝いたワイキキ随一の格式を誇るレストランです。フランス南部の味にインスピレーションを受けたメニューの中には、地元の食材も使用したメニューもございます。全席からワイキキの海の夕景を一望でき、太平洋を臨む素晴らしい景色、卓越した料理、そしてサービスをご提供しています。ラ・メールの空間とお料理を心ゆくまでお楽しみいただけますよう、お子様のご来店は8歳以上より承っております。</p>
                  <p><a href="http://www.halekulani.com/dining/la-mer-restaurant/dinner-menu" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>アゴスティーノズ・ピザ（石窯焼きピザ）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Waikiki, 2463 Kuhio Ave, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-469-7053</p>

                  <p>アゴスティーノズ・ピザは、最高のイタリアの伝統と本場シチリアの味をハワイに運んできました。</p>
                  <p><a href="http://agopizza.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>マウイ・タコス（メキシコ料理）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2233 Kalakaua Ave, Suite 8 - Food Court, Honolulu, Hi 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-931-6111</p>
                  <p class="location"><i class="fa fa-clock-o"></i>9:00 am ～ 10:00 pm</p>

                  <p>国際的に称賛されているハワイ人シェフ＆レストランオーナーであるマーク・エルマン氏は、マウイ島のビーチフロントにある自宅のラナイで、海岸に絶え間なくうち寄せる波を眺めながら、マンゴアイスティーを飲み、彼が育った南カリフォルニアのおいしいメキシコ料理とハワイの新しい自宅について考えていました。太平洋に日が沈んだとき、自分が何をしたいのかわかったエルマン氏は、1993年に「伝統的なメキシコ料理とハワイ諸島のエキゾチックな味を融合させた」であるマウイ・タコスをオープンしました。</p>
                  <p><a href="https://www.mauitacos.com/hi_96815.htm" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->

            <!-- right col -->
            <div class="col-s-12 col-sm-6">
            <div class="card">
                <div class="card_cell">
                  <h3>ロイズ・ワイキキ（ハワイ創作料理）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>226 Lewers Street, Honolulu, HI 96815 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-923-7697</p>
                  <p class="location"><i class="fa fa-clock-o"></i>11:00 am ～ 9:30 pm</p>

                  <p>新鮮な地元の食材をヨーロッパのソースやアジアのスパイスと融合させ、東洋と西洋の料理法をハワイ風にアレンジした、ロイ・ヤマグチ氏の「ハワイアン・フージョン」料理をお楽しみいただけます。種類が豊富なアペタイザー、アントレ、新鮮な魚料理、そしてデザートをご提供します。</p>
                  <p><a href="http://www.royshawaii.com/roys-waikiki.html" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>デュークズ・ワイキキ（アメリカ料理/ハワイアン・フュージョン）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2335 Kalakaua Ave., Suite 116, Honolulu, HI</p>
                  <p class="location"><i class="fa fa-phone"></i>808-922-2268</p>
                  <p class="location"><i class="fa fa-clock-o"></i>7:00 am ～ 12:00 am</p>

                  <p>ハワイのライブミュージックと共に、朝食、ランチ、ディナーを毎日ご提供するワイキキビーチのオーシャンフロント・ダイニングです。</p>
                  <p><a href="http://www.dukeswaikiki.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ロマノズ・マカロニグリル−ホノルル店（イタリア料理）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1450 Ala Moana Blvd. Suite 4240, Honolulu, HI 96814</p>
                  <p class="location"><i class="fa fa-phone"></i>808-356-8300</p>

                  <p>ロマノズ・マカロニグリルは、「キッチンは家の中心であり、友達や家族が素敵な料理やワイン、そして時間を共有するために集まる場所である」というイタリアの贅沢な伝統を受け継いでいます。マカロニ・グリルのシェフ達が、トスカーナ風の前菜、伝統的なイタリアンパスタ料理、グリル料理、ピザ、そして季節料理まで幅広くご提供します。</p>
                  <p><a href="http://www.macaronigrill.com/locations/5021" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>レーナーズ・ベーカリー（ベーカリー/コーヒーショップ）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>933 Kapahulu Ave, Honolulu, HI 96816</p>
                  <p class="location"><i class="fa fa-phone"></i>808-737-5591</p>
                  <p class="location"><i class="fa fa-clock-o"></i>5:30 am ～ 11:00 pm</p>

                  <p>レーナーズのマラサダはいつでもできたて。すぐにおいしくお召し上がりいただけます。また、甘いローフパンのPao Doce（パオ・ドース）も毎日おいしく焼き上がります。ペストリー、コーヒーケーキ、そしてクッキーとの組み合わせが最高な、コーヒー、エスプレッソ、カプチーノ、ラテ、タイ・ラテ、紅茶、ココアなどもご提供しています。</p>
                  <p><a href="http://www.leonardshawaii.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ソウル・デ・キューバ・カフェ（キューバ料理）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1121 Bethel St., Honolulu, HI 96813</p>
                  <p class="location"><i class="fa fa-phone"></i>808-545-2822</p>

                  <p>ソウル・デ・キューバ・カフェは伝統的なキューバ料理と特製ドリンクを、楽しい雰囲気とサービスの中でご堪能いただけるレストランです。</p>
                  <p><a href="http://souldecuba.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>マハロハ・バーガー（ハンバーガー）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2233 Kalakaua Ave, Bldg B9, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-926-6500</p>
                  <p class="location"><i class="fa fa-clock-o"></i>10:00 am ～ 8:30 pm</p>

                  <p>マハロハ・バーガーは、ハワイ島の牧場で自然の牧草を食べて飼育された新鮮な牛肉を使って毎日調理されています。成長ホルモンや抗生物質を一切使わない、高品質のハンバーガーです。パテの大きさはシングル1/3lb(150g)とダブル1/2lb(230g)の２種類からご選択いただけます。新鮮な「牧草飼育された牛肉」のジューシーさを残すため、パテは中温で真ん中にわずかにピンク色が残るまでグリルします。ハンバーガー用のバンズも毎日焼き上げます。ハワイの新鮮な野菜と秘伝のレシピで作られたソースで仕上げたハンバーガーをぜひご賞味ください。</p>
                  <p><a href="http://www.mahalohaburger.com/menu" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ビーチ・バー（オーシャンフロント・バー）</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>A Westin Resort &amp; Spa, 2365 Kalakaua Ave, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-922-3111</p>
                  <p class="location"><i class="fa fa-clock-o"></i>10:30 am ～ 12:00 am</p>

                  <p>モアナ・サーフライダー・ウェスティン・リゾート＆スパ内にある、歴史的に有名なバニヤンツリーの下にある、カジュアルな屋外オーシャンフロント・バーです。お気に入りのトロピカルドリンクと、吟味されたハワイならではのププ（おつまみや前菜）を味わいながら、ワイキキの景色を楽しみ、優雅なひとときを満喫しませんか？</p>
                  <p><a href="http://www.moana-surfrider.com/dining/beachbar/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->
          </div>
        
        </div> <!-- dining -->


        <!-- shopping -->
        <div id="shopping" class="sub-content resort-gallery-container activities-list" style="display: none;">

          <h1>ショッピング</h1>
          <div class="row">
            <!-- left col -->
            <div class="col-s-12 col-sm-6">
              <div class="card">
                <div class="card_cell">
                  <h3>ラグジュアリー・ロウ・アット2100 カラカウア・アベニュー</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2100 Kalakaua Avenue, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-922-2246</p>

                  <p>シャネル、グッチ、イヴ・サンローラン、コーチ、ティファニー＆ Co、トッズ、ボッテガ・ヴェネタそしてヒューゴ・ボスなど、世界の洗練された有名一流ブランドが優雅に建ち並ぶショッピングエリア「ラグジュアリー･ロウ･アット2100カラカウア･アベニュー」は、ホノルルのワイキキビーチの中心にあり、海外からの観光客が多く訪れるワイキキのランドマークです。</p>
                  <p><a href="http://www.luxuryrow.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div> <!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ロイヤル・ハワイアン・センター</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>2201 Kalakaua Ave, Honolulu, HI 96815</p>
                  <p class="location"><i class="fa fa-phone"></i>808-922-0588</p>

                  <p>ロイヤル・ハワイアン・センターは、ワイキキの中心、カラカウア通りの３ブロックにわたって広がる４階建てのワイキキ最大のショッピングセンターです。総面積約28,800平方メートルの開放的な雰囲気のフロアには、高級ブティックや人気アパレルブランド、ジュエリー、コスメティック、ハワイならではのユニークなお店など、100店舗以上のショップやレストランが並びます。「ロイヤル・グローブ」では日替わりでカルチャーレッスン、フラ、そして音楽などのハワイアンエンターテイメントが行われ、ショッピングのみでなく、ダイニング、エンターテインメント、カルチャーレッスンなども充実しています。</p>
                  <p><a href="http://www.royalhawaiiancenter.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>アロハ・スタジアム・スワップミート＆マーケットプレイス</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>Salt Lake Blvd, Aiea, HI 96701</p>
                  <p class="location"><i class="fa fa-phone"></i>808-488-0924</p>

                  <p>ワイキキからおよそ20分の場所にある、ハワイ最大のスポーツ施設であるアロハ・スタジアム。ここで週に３回行われる「アロハ・スタジアム・スワップミート＆マーケットプレイス」は地元民が訪れる野外マーケットです。400以上の出店者やアーチストが世界中から集まり、地元の製品や世界の輸入品、ハンドメイド製品、そしてハワイのお土産や地元で人気のお菓子など様々なハワイ製品が出品されています。一つ一つ手作業で作られた美しいジュエリーや芸術作品などをアーティストから直接購入することもできます。大切な人や自分への素敵な贈り物を見つけませんか？</p>
                  <p><a href="http://alohastadiumswapmeet.net/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>Tギャラリア・ハワイ by DFS</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>330 Royal Hawaiian Ave, Honolulu, HI 96815 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-931-2700</p>
                  <p class="location"><i class="fa fa-clock-o"></i>10:00 am 〜 10:30 pm（年中無休）</p>

                  <p>ワイキキの中心地にあるDFSギャレリア・ワイキキは、選びぬかれた世界のトップブランドと素晴らしいカスタマーサービスをご提供しています。ハワイのお土産や、洋服、化粧品などを幅広く取り揃えています。海外からのお客様は世界の高級ブランド品などを免税価格でご購入いただけます。</p>
                  <p><a href="http://www.dfs.com/en/tgalleria-hawaii/our-stores/hawaii-store/hawaii" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ワイキキ・ビーチ・ウォーク</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>227 Lewers Street, #150, Honolulu, HI 96815</p>

                  <p>ワイキキのメインストリートであるカラカウア大通りから海に向かってのびるルワーズ通り沿いに、50以上のハイセンスなショップやレストラン、ラグジュアリーなホテルやタイムシェア施設が軒を連ねる場所が「ワイキキ・ビーチ・ウォーク」です。ワイキキ最大級の再開発を経て、観光や地元のお客様が集う現代的なショッピングエリアとして生まれ変わったワイキキ・ビーチ・ウォークをお楽しみください。</p>
                  <p><a href="http://waikikibeachwalk.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->

            <!-- right col -->
            <div class="col-s-12 col-sm-6">
            
              <div class="card">
                <div class="card_cell">
                  <h3>アラ・モアナセンター</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>1450 Ala Moana Blvd., Honolulu, HI 96814</p>
                  <p class="location"><i class="fa fa-phone"></i>808-955-9517</p>

                  <p>ホノルルのワイキキから数分の場所に位置するアラモアナセンターは、90近くのダイニングを含むおよそ340の店舗が集まる、ハワイ最大規模のオープンエア・ショッピングセンターです。4つのデパート、一流ブランドブティック、日本未進出のアメリカンブランドやカジュアルウエア、ハワイならではの地元製品を扱うお店など、バラエティ豊かなショップやレストランが軒を連ね、ショッピングとダイニングをお楽しみいただけます。営業時間内は、アラモアナ・ショッピング・トロリーがワイキキに10ケ所ある停留所を往復します。毎日約10～12分毎に発車しています。</p>
                  <p><a href="http://www.alamoanacenter.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>ワイケレ・プレミアム・アウトレット</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>94-790 Lumiaina St., Suite 100, Waipahu, HI 96797 </p>
                  <p class="location"><i class="fa fa-phone"></i>808-676-5656</p>

                  <p>ワイケレ・プレミアム・アウトレットはハワイ唯一のアウトレット・ショッピングセンターです。アディダス、アルマーニ・エクスチェンジ、バナナ・リパブリック、カルバン・クライン、コーチ、ゲス、レスポートサック、マイケル・コース、ポロ・ラルフローレン、トミー・ヒルフィガーなどのアイテムが毎日25％〜65％オフと、信じられないほどお得に手に入ります。ホノルルから西に約15マイルの場所に位置しています。</p>
                  <p><a href="http://www.premiumoutlets.com/outlets/outlet.asp?id=29" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

              <div class="card">
                <div class="card_cell">
                  <h3>カマカ・ハワイ Inc.</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>550 South St, Honolulu, HI 96813-5010</p>
                  <p class="location"><i class="fa fa-phone"></i>808-531-3165</p>

                  <p>1916年に創業した、ハワイの老舗ウクレレメーカーです。</p>
                  <p><a href="http://kamakahawaii.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->


               <div class="card">
                <div class="card_cell">
                  <h3>フキラウ・マーケットプレイス</h3>
                  <hr>
                  <p class="location"><i class="fa fa-map-marker"></i>55-370 Kamehameha Hwy, Laie, HI 96762</p>
                  <p class="location"><i class="fa fa-phone"></i>808-293-3053</p>

                  <p>ポリネシア・カルチャー・センター内のIMAXシアター横にあるフキラウ・マーケットプレイスでは、ハワイのお土産などが手に入ります。何年も前にポリネシア・カルチャー・センターから始まった釣りの伝統にちなんで名付けられたこのマーケット・プレイスは、その外観や取り扱う製品からも豊かな歴史をご体験いただけます。お土産に最適な、男性、女性、お子様向けの帽子やTシャツ、キーチェーン、鉛筆そしてマグカップなど、ハワイでの体験を思い出していただける品々をご用意しています。またポリネシア・カルチャー・センターで開催するショーに関連したCDやDVDも販売しています。</p>
                  <p><a href="http://www.polynesia.com/" target="_blank" class="btn btn-primary btns">詳細</a></p>
                </div>
              </div><!-- card -->

            </div> <!-- col-s-12 col-sm-6 -->
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