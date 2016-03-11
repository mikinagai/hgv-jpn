<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of California resorts that Hilton Grand Vacations has to offer." />
  <title>California Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>カリフォルニア</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
    </div>
    
    <div class="content">
    
      <!-- <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder"></div>
        </div>
      </div> -->
    
      <div id="resort-collection" class="sub-content resort-gallery-container">
        
        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="carlsbad-seapointe/" style="background-image: url('img/thumbnails/seapoint.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>カールスバッド・シーポイント・リゾート</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、カリフォルニア州カールスバッド</p>
            <p>カールズバッド・シーポイント・リゾートは、南カリフォルニアの海岸線エリアで最も人気の高い観光地に位置する、素晴らしいリゾートです。観光やビーチでの一日をお楽しみいただいた後、心地よい太平洋の海を感じながら、スタイリッシュな装飾と充実したアメニティーの中でお寛ぎいただけます。</p>
            <p><a href="carlsbad-seapointe/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="club-intrawest-palm-desert/" style="background-image: url('img/thumbnails/palm-desert.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>クラブ・イントラウエスト - パーム・デザート</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、カリフォルニア州パームデザート</p>
            <p>南カリフォルニアのオアシスで、心身ともにリフレッシュしてみませんか。ミッション様式の建物は、ドラマチックな砂漠の風景にインスピレーションを受けて、静かな環境と寛ぎをテーマに設計されました。自然の中に足を運べば、サボテンや鮮やかなブーゲンビリアの花々が生い茂り、ミツバシリ、ジャックウサギなど、地元の珍しい野生動物にも出会えることでしょう。</p>
            <p><a href="club-intrawest-palm-desert/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="grand-pacific-palisades/" style="background-image: url('img/thumbnails/grand-pacific-palisades.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>パリぜーズ・パシフィック・パリセーズ・リゾート</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、カリフォルニア州カールスバッド</p>
            <p>太平洋とカールズバッド・フラワー・フィールドが織り成す色彩豊かな景色。海を臨む美しい山あいに位置する、グランド・パシフィック・パリセーズ・リゾートから、目の覚めるような眺望をお楽しみいただけます。贅沢で充実した設備が整い、カリフォルニア南部の人気スポットにも、気軽にお出かけいただけます。</p>
            <p><a href="grand-pacific-palisades/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="hgvc-marbrisa/" style="background-image: url('img/thumbnails/marbrisa.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、カリフォルニア州カールスバッド</p>
            <p>古風な趣が漂う海岸の町、カールズバッドにあるヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサは、スペイン地中海風の伝統様式で建てられた27棟（完成時）の新しいスイートで、太平洋を遠景に雄大な眺めを誇ります。レゴランド®・カリフォルニア・リゾートのすぐ隣にあり、シーワールド、ワイルド・アニマル・パーク、さらに世界的に有名なサンディエゴ動物園などの南カリフォルニアならではのアトラクションへも車でわずかの距離に位置します。</p>
            <p><a href="hgvc-marbrisa/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->
      
      </div> <!-- resort-collection -->
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>