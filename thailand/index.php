<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="View the list of Thailand resorts that Hilton Grand Vacations has to offer." />
  <title>Thailand Resorts by Hilton Grand Vacations</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner" style="background-image: url('img/banner.jpg');">
      
      <div class="banner-caption">
        <h1>タイ</h1>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>リゾート一覧</h2>
    </div>
    
    <div class="content">
    
      <div id="resort-collection" class="sub-content resort-gallery-container">
        
        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="anantara-bangkok-sathorn/" style="background-image: url('img/thumbnails/bangkok.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell">
            <h3>アナンタラ・バケーション・クラブ・バンコク・サトーン</h3>
            <p class="location"><i class="fa fa-map-marker"></i>スコットランド、インバネス・シャー</p>
            <p>38階建てツインタワーのアナンタラ・バケーション・クラブ・バンコク・サトーンは、スタイリッシュでリラックスできる都会のライフスタイルを提供しています。サンデッキで寛いだり、32メートルのインフィニティプールで泳いだり、都会の喧騒を忘れてリフレッシュしていただけます。</p>
            <p><a href="anantara-bangkok-sathorn/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="anantara-bophut-koh-samui/" style="background-image: url('img/thumbnails/koh-samui.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell">
            <h3>アナンタラ・バケーション・クラブ・ボープット・コー・サムイ &amp; Spa</h3>
            <p class="location"><i class="fa fa-map-marker"></i>タイ、サムイ島</p>
            <p>タイ湾の穏やかで温かい水の中で、ウォータースポーツを楽しみましょう。アナンタラが誇るエレガントなインフィニティ・プールのデッキやボープットのやわらかな白砂の上で、日光浴を楽しむこともできます。</p>
            <p><a href="anantara-bophut-koh-samui/" class="btn btn-primary">詳細</a></p>
          </div>
        </div><!-- card -->

        <div class="card wow fadeInUp">
          <div class="col-sm-4 l_cell">
            <a class="photo-tile" href="anantara-phuket-mai-khao/" style="background-image: url('img/thumbnails/mai-khao.jpg');"></a>
          </div>
          <div class="col-sm-8 r_cell">
            <h3>アナンタラ・バケーション・クラブ・プーケット・マイカオ</h3>
            <p class="location"><i class="fa fa-map-marker"></i>タイ、プーケット島マイカオ</p>
            <p>穏やかな太陽光が砂浜に降り注ぐ、プーケットで最長の規模を誇るマイカオビーチは、リゾートからほんの少し足を延ばしたところに位置しています。緑生い茂るサリナス国立公園がリゾートを取り囲んでおり、海蝕洞やマングローブ、サンゴ礁や魅力的な島々といった自然豊かで素晴らしい遊び場への玄関口となっています。</p>
            <p><a href="anantara-phuket-mai-khao/" class="btn btn-primary">詳細</a></p>
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