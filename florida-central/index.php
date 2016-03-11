<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Central Florida resorts that Hilton Grand Vacations has to offer." />
  <title>Florida &ndash; Central Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>フロリダ、中央部</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>詳細</h2>
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
            <a class="photo-tile" href="hgvc-seaworld/" style="background-image: url('img/thumbnails/seaworld.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・マックアルピン—オーシャンプラザ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州オーランド</p>
            <p>世界有数のテーマパークに囲まれた、バミューダを思わせる個性的なリゾートをお楽しみください。優雅な安らぎを提供する施設の近くには、ご家族で楽しめるエンターテイメント、ショッピング街やレストランが揃っています。</p>
            <p><a href="hgvc-seaworld/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="hgvc-tuscany/" style="background-image: url('img/thumbnails/tuscany.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>ヒルトン・グランド・バケーションズ・クラブ・アット・タスカニー・ビレッジ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州オーランド</p>
            <p>風光明媚なイタリア・トスカーナ地方の雰囲気が漂うヒルトン・グランド・バケーションズ・クラブ・アット・タスカニー・ビレッジは、フロリダ州オーランドの観光地に位置します。アメリカを代表するさまざまなアトラクションが周囲に点在し、中でも人気のウォルト・ディズニー・ワールド®・リゾートへは便利な距離にあります。また、有名ブランドが揃っているオーランド・プレミアム・アウトレットが隣接し、スーパーマーケットもリゾートのすぐ向かいにあります。</p>
            <p><a href="hgvc-tuscany/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="parc-soleil-hgvc/" style="background-image: url('img/thumbnails/parc-soleil.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell" style="">
            <h3>パーク・ソレイユ・バイ・ヒルトン・グランド・バケーションズ・クラブ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>アメリカ、フロリダ州オーランド</p>
            <p>このリゾートは有名なアトラクションの中心に位置する理想的な立地条件を備え、また52エーカー (約0.21km²)の広さを誇っています。敷地内にレクリエーションなどの施設があり、美しい湖畔の散歩道などの恵まれた環境に加え、人気のテーマパークやゴルフコースも近くにあり、誰もが満足するバケーションをお過ごしいただけることでしょう。</p>
            <p><a href="parc-soleil-hgvc/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->
      
      </div>
      
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/destinations.js"></script>

</body>
</html>