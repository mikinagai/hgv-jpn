<?php
  if($standalone == true){
?>
<style>header, footer p, #links { display: none; } .container { margin: 15px auto 20px; } footer { height: 551px; }</style>
<?php  
  }
  if($lang == "jpn"){
?>
<style>.resortpanel { padding: 10px 5px; } .resortpanel .title { font-size: 13px; min-height: 60px;}</style>
    <div id="explorecontent" class="content">
      
      <div id="filter-group">
        <div class="row">
          <div class="col-sm-8">
            <p>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">場所</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="location" role="menu">
                  <li role="presentation" class="dropdown-header">アメリカ国内</li>
                  <li><a href="#" data-group="california">カリフォルニア</a></li>
                  <li><a href="#" data-group="colorado">コロラド</a></li>
                  <li><a href="#" data-group="florida-atlantic">フロリダ州大西洋側</a></li>
                  <li><a href="#" data-group="florida-central">フロリダ州中央部</a></li>
                  <li><a href="#" data-group="florida-gulf">フロリダ州メキシコ湾</a></li>
                  <!--li><a href="#" data-group="florida-panhandle">Florida &ndash; Panhandle</a></li-->
                  <li><a href="#" data-group="hawaii">ハワイ</a></li>
                  <li><a href="#" data-group="nevada">ラスベガス</a></li>
                  <li><a href="#" data-group="new-york">ニューヨーク</a></li>
                  <li><a href="#" data-group="south-carolina">サウス・カロライナ</a></li>
                  <li><a href="#" data-group="utah">ユタ</a></li>
                  <li role="presentation" class="dropdown-header">その他の地域</li>
                  <li><a href="#" data-group="canada">カナダ</a></li>
                  <li><a href="#" data-group="indonesia">インドネシア</a></li>
                  <li><a href="#" data-group="italy">イタリア</a></li>
                  <li><a href="#" data-group="mexico">メキシコ</a></li>
                  <li><a href="#" data-group="new-zealand">ニュージーランド</a></li>
                  <li><a href="#" data-group="portugal">ポルトガル</a></li>
                  <li><a href="#" data-group="scotland">スコットランド</a></li>
                  <li><a href="#" data-group="thailand">タイ</a></li>
                  <li><a href="#" data-group="japan">日本</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">リゾート設備</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="amenities" role="menu">
                  <li><a href="#" data-group="childrens-pool">お子様向けプール</a></li>
                  <li><a href="#" data-group="childrens-programs">お子様向けプログラム</a></li>
                  <li><a href="#" data-group="store">コンビニエンス・ストア</a></li>
                  <li><a href="#" data-group="fitness-center">フィットネス施設</a></li>  
                  <li><a href="#" data-group="laundry">洗濯機・乾燥機完備</a></li>
                  <li><a href="#" data-group="playground">お子様の遊び場</a></li>    
                  <li><a href="#" data-group="pool">プール</a></li>    
                  <li><a href="#" data-group="restaurant">レストラン</a></li>    
                  <li><a href="#" data-group="spa">スパ（有料）</a></li>    
                  <li><a href="#" data-group="whirlpool">ジャグジー</a></li>  
                </ul>
              </div>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">バケーションタイプ</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="vacation" role="menu">
                  <li><a href="#" data-group="beach">ビーチ</a></li>
                  <li><a href="#" data-group="casino">カジノ</a></li>
                  <li><a href="#" data-group="city">都市</a></li>
                  <li><a href="#" data-group="family">家族向け</a></li>
                  <li><a href="#" data-group="golf">ゴルフ</a></li>
                  <li><a href="#" data-group="romance">カップル向け</a></li>
                  <li><a href="#" data-group="ski">スキー</a></li>
                  <li><a href="#" data-group="spa">スパ</a></li>
                  <li><a href="#" data-group="theme-parks">テーマパーク</a></li>
                </ul>
              </div>
            </p>
          </div>
          <div class="col-sm-4 text-right">
            <select class="sort-options form-control">
              <option value="">カテゴリー別に表示する</option>
              <option value="name">名前順</option>
              <option value="city">都市別</option>
              <!--option value="club-points">最大]に最小ポイント</option>
              <option value="club-points-reverse">最小に最大ポイント</option-->
            </select>
          </div>
        </div>
      </div><!--/filter-group-->
    
      <div id="grid" class="container-fluid">
    
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","casino","city","family","golf","romance","spa","theme-parks","childrens-pool","childrens-programs","fitness-center","laundry","playground","pool","restaurant","spa","whirlpool"]' data-name="Carlsbad Seapointe Resort" data-city="Carlsbad" data-club-points="800">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/seapointe.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">カールスバッド・シーポイント・<br/>リゾート</p>
                <p class="location">カリフォルニア州カールスバッド</p>
                <a href="<?php echo getHost(); ?>california/carlsbad-seapointe/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","golf","romance","childrens-pool","fitness-center","pool","whirlpool"]' data-name="Club Intrawest - Palm Desert" data-city="Palm Desert" data-club-points="1200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/palmdesert.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト -<br/>パーム・デザート</p>
                <p class="location">パームデザート、カリフォルニア、アメリカ</p>
                <a href="<?php echo getHost(); ?>california/club-intrawest-palm-desert/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","romance","theme-parks","fitness-center","playground","pool","restaurant","whirlpool"]' data-name="Grand Pacific Palisades Resort" data-city="Carlsbad" data-club-points="400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/palisades.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">グランド・パシフィック・パラセイド・<br/>リゾート</p>
                <p class="location">カリフォルニア州カールスバッド</p>
                <a href="<?php echo getHost(); ?>california/grand-pacific-palisades/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","golf","romance","spa","theme-parks","fitness-center","pool","restaurant","spa"]' data-name="Hilton Grand Vacations Club at MarBrisa" data-city="Carlsbad" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/marbrisa.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・マーブリサ</p>
                <p class="location">カリフォルニア州カールスバッド</p>
                <a href="<?php echo getHost(); ?>california/hgvc-marbrisa/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","colorado","family","romance","ski","fitness-center","laundry","playground","spa","whirlpool"]' data-name="Valdoro Mountain Lodge" data-city="Breckenridge" data-club-points="900">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>colorado/img/valdoro.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヴァルドロ・マウンテン・ロッジ</p>
                <p class="location">コロラド州ブリッケンリッジ</p>
                <a href="<?php echo getHost(); ?>colorado/valdoro-mountain-lodge/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-atlantic","beach","city","romance","fitness-center","whirlpool"]' data-name="Hilton Grand Vacations Club at McAlpin - Ocean Plaza" data-city="Miami Beach" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-atlantic/img/mcalpin.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・マックアルピン<br/>ーオーシャン</p>
                <p class="location">フロリダ州マイアミビーチ</p>
                <a href="<?php echo getHost(); ?>florida-atlantic/hgvc-mcalpin-ocean-plaza/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-atlantic","beach","family","golf","romance","fitness-center","laundry","pool","whirlpool"]' data-name="Plantation Beach Club at Indian River Plantation Resort" data-city="Stuart" data-club-points="200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-atlantic/img/plantationirpr.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">プランテーション・ビーチ･クラブ・<br/>アット・インディアン・リバー・<br/>プランテーション・リゾート</p>
                <p class="location">フロリダ州スチュアート</p>
                <a href="<?php echo getHost(); ?>florida-atlantic/plantation-beach-club-indian-river/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","childrens-pool","fitness-center","laundry","playground","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at SeaWorld" data-city="Orlando" data-club-points="400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/seaworld.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・シーワールド</p>
                <p class="location">フロリダ州オーランド</p>
                <a href="<?php echo getHost(); ?>florida-central/hgvc-seaworld/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","childrens-pool","childrens-programs","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at Tuscany Village" data-city="Orlando" data-club-points="380">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/tuscany.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・タスカニー・ビレッジ</p>
                <p class="location">フロリダ州オーランド</p>
                <a href="<?php echo getHost(); ?>florida-central/hgvc-tuscany-village/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","store","fitness-center","laundry","playground","pool","restaurant"]' data-name="Parc Soleil by Hilton Grand Vacations Club" data-city="Orlando" data-club-points="740">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/parcsoleil.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">パーク・ソレイユ・バイ・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">フロリダ州オーランド</p>
                <a href="<?php echo getHost(); ?>florida-central/parc-soleil-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="Casa Ybel Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/casaybel.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">カサ・イベル・リゾート</p>
                <p class="location">フロリダ州サニベル島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/casa-ybel/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","family","romance"]' data-name="Club Regency of Marco Island" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/regency.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・リージェンシー・オブ・<br/>マルコ・アイランド</p>
                <p class="location">フロリダ州マルコ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/club-regency-marco-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","romance"]' data-name="Eagle's Nest Beach Resort" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/eaglesnest.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">イーグルズ・ネスト・ビーチ・リゾート</p>
                <p class="location">フロリダ州マルコ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/eagles-nest/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Harbourview Villas at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/harbourview.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ハーバーヴュー・ヴィラ・アット・<br/>サウスシーズ・アイランド・リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/harbourview-south-seas-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","romance"]' data-name="Hurricane House Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/surfclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・サーフ・クラブ・オブ・マルコ</p>
                <p class="location">フロリダ州サニベル島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/surf-club-marco/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Plantation Bay Villas at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationbay.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">プランテーション・ベイ・ヴィラ・<br/>アット・サウスシーズ・アイランド・<br/>リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-bay-south-seas-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="Plantation Beach Club at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationbeach.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">プランテーション・ビーチ･クラブ・<br/>アット・サウスシーズ・アイランド・<br/>リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-beach-south-seas-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="Plantation House at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationhouse.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">プランテーション・ハウス・アット・<br/>サウスシーズ・アイランド・リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-house-south-seas-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","golf","romance"]' data-name="Sanibel Cottages Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/sanibel.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">サニベル・コテージ・リゾート</p>
                <p class="location">フロリダ州サニベル島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/sanibel-cottages/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Seawatch On-the-Beach Resort" data-city="Fort Myers Beach" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/seawatch.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">シーウォッチ・オンザビーチ・リゾート</p>
                <p class="location">フロリダ州フォートマイヤーズビーチ</p>
                <a href="<?php echo getHost(); ?>florida-gulf/seawatch/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","golf","romance"]' data-name="Shell Island Beach Club Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/shellisland.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">シェルアイランド・ビーチ・クラブ・<br/>リゾート</p>
                <p class="location">フロリダ州サニベル島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/shell-island-beach-club/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="South Seas Club at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/southseas.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">サウスシーズ・クラブ・アット・サウスシーズ・アイランド・リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/south-seas-club/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="Sunset Cove Resort" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/sunsetcove.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">サンセット・コーブ・リゾート</p>
                <p class="location">フロリダ州マルコ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/sunset-cove/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-pool","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="The Charter Club of Marco Beach" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/charterclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・チャーター・クラブ・<br/>オブ・マルコビーチ</p>
                <p class="location">フロリダ州マルコ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/charter-club-marco-beach/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="The Cottages at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/cottages.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・コテージズアット・<br/>サウスシーズ・アイランド・リゾート</p>
                <p class="location">フロリダ州キャプディバ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/cottages-south-seas-island/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="The Surf Club of Marco" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/surfclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・サーフ・クラブ・オブ・マルコ</p>
                <p class="location">フロリダ州マルコ島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/surf-club-marco/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Tortuga Beach Club Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/tortuga.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">トートゥガ・ビーチ・クラブ・リゾート</p>
                <p class="location">フロリダ州サニベル島</p>
                <a href="<?php echo getHost(); ?>florida-gulf/tortuga-beach-club/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","beach","family","romance","childrens-pool","fitness-center","laundry","pool","whirlpool"]' data-name="Club Intrawest - Sandestin" data-city="Sandestin" data-club-points="200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-panhandle/img/sandestin.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト &ndash; <br/>サンデスティン</p>
                <p class="location">フロリダ州サンデスティン</p>
                <a href="<?php echo getHost(); ?>florida-panhandle/club-intrawest-sandestin/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Grand Waikikian by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/grandwaikikian.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">グランド・ワイキキアン・バイ・<br/>ヒルトン・グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ホノルル</p>
                <a href="<?php echo getHost(); ?>hawaii/grand-waikikian-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","city","family","romance","fitness-center","pool"]' data-name="Hokulani Waikiki by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/hokulaniwaikiki.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホクラニ・ワイキキ・バイ・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ホノルル</p>
                <a href="<?php echo getHost(); ?>hawaii/hokulani-waikiki-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Kalia Suites by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kalia.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">カリア・スイーツ・バイ・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ホノルル</p>
                <a href="<?php echo getHost(); ?>hawaii/kalia-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf","romance","childrens-pool","childrens-programs","fitness-center","laundry","playground","pool","restaurant","whirlpool"]' data-name="Kings' Land by Hilton Grand Vacations Club" data-city="Waikoloa" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kingsland.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">キングス・ランド・バイ・ヒルトン･<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ワイコロア</p>
                <a href="<?php echo getHost(); ?>hawaii/kings-land-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","childrens-pool","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Kohala Suites by Hilton Grand Vacations Club" data-city="Waikoloa" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kohala.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">コハラ・スイーツ・バイ・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ワイコロア</p>
                <a href="<?php echo getHost(); ?>hawaii/kohala-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Lagoon Tower by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/lagoon.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ラグーン・タワー・バイ・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ハワイ州ホノルル</p>
                <a href="<?php echo getHost(); ?>hawaii/lagoon-tower-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","fitness-center","laundry","pool","restaurant","whirlpool","beach","family","golf","romance"]' data-name="The Bay Club at Waikoloa Beach Resort" data-city="Waikoloa" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/bayclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・ベイクラブ・アット・ワイコロア・ビーチ・リゾート</p>
                <p class="location">ハワイ州ワイコロア</p>
                <a href="<?php echo getHost(); ?>hawaii/bay-club-waikoloa-beach/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","nevada","casino","city","golf","romance","spa","fitness-center","pool","restaurant","whirlpool"]' data-name="Elara, a Hilton Grand Vacations Club" data-city="Las Vegas" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/elara.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">エララ・ア・ヒルトン・グランド・<br/>バケーションズ・クラブ</p>
                <p class="location">ネバダ州ラスベガス</p>
                <a href="<?php echo getHost(); ?>nevada/elara-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
    
   	    <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","store","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at the Flamingo" data-city="Las Vegas" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/flamingo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・ザ・フラミンゴ</p>
                <p class="location">ネバダ州ラスベガス</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-flamingo/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","spa","fitness-center","pool","restaurant","spa","whirlpool"]' data-name="Hilton Grand Vacations Club at Trump International Hotel" data-city="Las Vegas" data-club-points="900">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/trump.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title" style="font-size: 11px;">ヒルトン・グランド・バケーションズ・クラブ・アット・トランプ･インターナショナル・<br/>ホテル・ラスベガス</p>
                <p class="location">ネバダ州ラスベガス</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-trump/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
      
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","store","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club on Paradise" data-city="Las Vegas" data-club-points="450">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/paradise.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・オン・パラダイス</p>
                <p class="location">ネバダ州ラスベガス</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-paradise/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","spa","store","fitness-center","laundry","pool","restaurant","spa","whirlpool"]' data-name="Hilton Grand Vacations Club on the Boulevard" data-city="Las Vegas" data-club-points="800">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/boulevard.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・オン・ザ・ブルバード</p>
                <p class="location">ネバダ州ラスベガス</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-boulevard/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <!--div class="resortpanel col-sm-4" data-groups='["all","united-states","new-york","city","romance","fitness-center","restaurant"]' data-name="The Hilton Club - New York" data-city="New York" data-club-points="1500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-york/img/hiltonclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Hilton Club &ndash; New York</p>
                <p class="location">ニューヨーク州マンハッタン</p>
                <a href="<?php echo getHost(); ?>new-york/hilton-club/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div-->
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","new-york","city","romance","fitness-center","laundry"]' data-name="West 57th Street by Hilton Club" data-city="New York" data-club-points="1550">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-york/img/west57.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ウエスト57ストリート・<br/>バイ・ヒルトン・クラブ</p>
                <p class="location">ニューヨーク州マンハッタン</p>
                <a href="<?php echo getHost(); ?>new-york/west-57th-street/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","south-carolina","fitness-center","pool","spa","whirlpool","beach","family","golf","romance","spa"]' data-name="Ocean 22 by Hilton Grand Vacations Club" data-city="Myrtle Beach" data-club-points="560">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>south-carolina/img/ocean22.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">オーシャン22バイ<br/>ヒルトン・グランド・バケーションズ・クラブ</p>
                <p class="location">サウスカロライナ州マートルビーチ</p>
                <a href="<?php echo getHost(); ?>south-carolina/hgvc-ocean22/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","south-carolina","childrens-pool","fitness-center","pool","spa","whirlpool","beach","family","golf","romance","spa"]' data-name="Hilton Grand Vacations Club at Anderson Ocean Club" data-city="Myrtle Beach" data-club-points="560">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>south-carolina/img/anderson.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・<br/>アンダーソン・オーシャン・クラブ</p>
                <p class="location">サウスカロライナ州マートルビーチ</p>
                <a href="<?php echo getHost(); ?>south-carolina/hgvc-anderson-ocean-club/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","utah","family","golf","romance","ski","fitness-center","pool","whirlpool"]' data-name="Sunrise Lodge, a Hilton Grand Vacations Club" data-city="Park City" data-club-points="890">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>utah/img/sunrise.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">サンライズ・ロッジ・ア・ヒルトン・<br/>グランド・バケーションズ・クラブ</p>
                <p class="location">ユタ州パークシティ</p>
                <a href="<?php echo getHost(); ?>utah/sunrise-lodge-hgvc/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","childrens-pool","convenience-store","fitness-center","laundry","pool","spa","whirlpool","family","romance","ski","spa"]' data-name="Club Intrawest - Blue Mountain" data-city="Ontario" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/bluemountain.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト –<br/>ブルーマウンテン</p>
                <p class="location">カナダ、オンタリオ州ブルーマウンテン</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-blue-mountain/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","fitness-center","pool","whirlpool","family","golf","romance","ski"]' data-name="Club Intrawest - Tremblant" data-city="Quebec" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/tremblant.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト –<br/>トランブラン</p>
                <p class="location">カナダ、ケベック州モントランブラン</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-tremblant/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","convenience-store","fitness-center","pool","restaurant","spa","whirlpool","beach","city","romance","spa"]' data-name="Club Intrawest - Vancouver" data-city="Vancouver" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/vancouver.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト –<br/>バンクーバー</p>
                <p class="location">カナダ、ブリティッシュコロンビア州</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-vancouver/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","childrens-pool","pool","whirlpool","family","golf","romance","ski"]' data-name="Club Intrawest - Whistler" data-city="Whistler" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/whistler.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト –<br/>ウィスラー</p>
                <p class="location">カナダ、ブリティッシュコロンビア州</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-whistler/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="resortpanel col-sm-4" data-groups='["all","italy","pool","golf","romance"]' data-name="Hilton Grand Vacations Club at Borgo alle Vigne" data-city="Selvatelle" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>italy/img/borgo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・ボルゴ・アレ・<br/>ヴィ二ェ</p>
                <p class="location">イタリア、トスカーナ地方</p>
                <a href="<?php echo getHost(); ?>italy/hgvc-borgo-alle-vigne/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","convenience-store","pool","restaurant","spa","beach","family","romance","spa"]' data-name="Club Intrawest - Zihuatanejo" data-city="Zihuatanejo" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/zihuatanejo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">クラブ・イントラウエスト –<br/>シワタネホ</p>
                <p class="location">メキシコ、シワタネホ</p>
                <a href="<?php echo getHost(); ?>mexico/club-intrawest-zihuatanejo/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","spa","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Acapulco" data-city="Acapulco Guerrero" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/acapulco.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">フィエスタ・アメリカーナ・ヴィラ・<br/>アカプルコ</p>
                <p class="location">メキシコ、アカプルコ</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-acapulco/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","restaurant","spa","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Cancun" data-city="Cancun" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/cancun.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">フィエスタ・アメリカーナ・ヴィラ・<br/>カンクーン</p>
                <p class="location">メキシコ、カンクーン</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-cancun/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","restaurant","spa","whirlpool","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Los Cabos" data-city="Cabo Sans Lucas" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/loscabos.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">フィエスタ・アメリカーナ・ヴィラ・<br/>ロスカボス</p>
                <p class="location">メキシコ、ロスカボス</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-los-cabos/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","laundry","pool","restaurant","spa","whirlpool","beach","romance","spa"]' data-name="The Explorean Kohunlich" data-city="Chetumal" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/explorean.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ザ・エクスプロリアン・<br/>コフンリッチ</p>
                <p class="location">メキシコ、ユカタン半島チェトゥマル</p>
                <a href="<?php echo getHost(); ?>mexico/explorean-kohunlich/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <?php
		  if($elite == true){
		?>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Acapulco" data-city="Acapulco Guerrero" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/grandmayanacapulco.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">グランド・マヤ・アカプルコ</p>
                <p class="location">メキシコ、アカプルコ</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-acapulco/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Nuevo Vallarta" data-city="Nuevo Vallarta" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/nuevovallarta.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">グランド・マヤ・ヌエボ・バヤルタ</p>
                <p class="location">メキシコ、ヌエボ</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-nuevo-vallarta/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Riviera Maya" data-city="Nuevo Vallarta" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/rivieramaya.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">グランド・マヤ・リビエラ・マヤ</p>
                <p class="location">メキシコ、リビエラマヤ</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-riviera-maya/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
		
        <?php
		  }
		?>
        
        <div class="resortpanel col-sm-4" data-groups='["all","new-zealand"]' data-name="Anantara Vacation Club at Oaks Shores" data-city="Queenstown" data-club-points="600">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-zealand/img/oakshores.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">アナンタラ・バケーション・クラブ・<br/>アット・オークス・ショアーズ</p>
                <p class="location">ニュージーランド、クイーンズタウン</p>
                <a href="<?php echo getHost(); ?>new-zealand/anantara-oaks-shores/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","portugal","childrens-programs","fitness-center","pool","restaurant","spa","beach","family","golf","romance","spa"]' data-name="Hilton Vilamoura Vacation Club" data-city="Vilamoura" data-club-points="600">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>portugal/img/vilamoura.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・ヴィラモウラ・<br/>バケーション・クラブ</p>
                <p class="location">ポルトガル、ヴィラモウラ</p>
                <a href="<?php echo getHost(); ?>portugal/hilton-vilamoura/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","childrens-programs","pool","restaurant","family","golf","romance","ski"]' data-name="Hilton Grand Vacations Club at Coylumbridge" data-city="Coylumbridge" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/coylumbridge.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・コイラムブリッジ</p>
                <p class="location">スコットランド、コイラムブリッジ</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-coylumbridge/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","fitness-center","pool","restaurant","spa","romance","ski","spa"]' data-name="Hilton Grand Vacations Club at Craigendarroch Lodges" data-city="Ballater" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/craigendarrochlodges.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・アット・クレイゲンダロック・ロッジズ</p>
                <p class="location" style="font-size: 10px;">スコットランド、ロイヤル·ディーサイド</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-craigendarroch-lodges/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland"]' data-name="Hilton Grand Vacations Club at Craigendarroch Suites" data-city="Ballater" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/craigendarrochsuites.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・アット・クレイゲンダロック・スイーツ</p>
                <p class="location" style="font-size: 10px;">スコットランド、ロイヤル·ディーサイド</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-craigendarroch-suites/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","fitness-center","pool","whirlpool","golf","romance","ski","spa"]' data-name="Hilton Grand Vacations Club at Dunkeld" data-city="Dunkeld" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/dunkeld.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ヒルトン・グランド・バケーションズ・クラブ・アット・ダンケルド</p>
                <p class="location">スコットランド、パースシャー</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-dunkeld/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","indonesia"]' data-name="Anantara Vacation Club Bali Seminyak" data-city="Seminyak" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>indonesia/img/bali.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">アナンタラ・バケーション・クラブ・<br/>バリ・スミニャック</p>
                <p class="location">インドネシア、バリ島スミニャック</p>
                <a href="<?php echo getHost(); ?>indonesia/anantara-bali-seminyak/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand"]' data-name="Anantara Vacation Club Bangkok Sathorn" data-city="Yannawa" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/bangkok.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">アナンタラ・バケーション・クラブ・<br/>バンコク・サトーン</p>
                <p class="location">タイ、バンコク</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-bangkok-sathorn/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand","beach","romance","spa"]' data-name="Anantara Vacation Club, Bophut Koh Samui Resort & Spa" data-city="Koh Samui" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/bophut.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">アナンタラ・バケーション・クラブ・<br/>ボープット・コー・サムイ</p>
                <p class="location">タイ、サムイ島</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-bophut-koh-samui/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand"]' data-name="Anantara Vacation Club Phuket Mai Khao" data-city="Mai Khao" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/phuket.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">アナンタラ・バケーション・クラブ・<br/>プーケット・マイカオ</p>
                <p class="location">タイ、プーケット島マイカオ</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-phuket-mai-khao/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- div class="resortpanel col-sm-4" data-groups='["all","thailand"]' data-name="Conrad Bangkok" data-city="Bangkok" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/conradbangkok.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">コンラッド・バンコク</p>
                <p class="location">タイ、バンコク</p>
                <a href="<?php echo getHost(); ?>thailand/conrad-bangkok/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div -->
        
      <!--   <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Kyoto" data-city="Kyoto" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestkyoto.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト京都</p>
                <p class="location">京都府京都市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-kyoto/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div> -->
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Ito" data-city="Ito" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestito.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト伊東</p>
                <p class="location">静岡県伊東市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-ito/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Ski Jam Katsuyama" data-city="Katsuyama" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestkatsuyama.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェストスキージャム勝山</p>
                <p class="location">福井県勝山市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-ski-jam-katsuyama/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Nankitanabe" data-city="Tanabe" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestnankitanabe.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト南紀田辺</p>
                <p class="location">和歌山県田辺市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-nankitanabe/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Amagi Plateau" data-city="Izu" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestamagi.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト天城高原</p>
                <p class="location">静岡県伊豆市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-amagi-plateau/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Tangram" data-city="Kamiminochi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/tangram.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルタングラム</p>
                <p class="location">長野県上水内郡</p>
                <a href="<?php echo getHost(); ?>japan/hotel-tangram/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest old Karuizawa" data-city="Kamiminochi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestkaruizawa.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト旧軽井沢</p>
                <p class="location">長野県北佐久間郡軽井沢</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-old-karuizawa/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest hamanako" data-city="Hamamatsu" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvesthamanako.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト浜名湖</p>
                <p class="location">静岡県浜松市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-hamanako/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Arima Rokuirodori" data-city="Kobe" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/arima.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">有馬六彩</p>
                <p class="location">兵庫県神戸市</p>
                <a href="<?php echo getHost(); ?>japan/arima-rokuirodori/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Hakone Koshien" data-city="Hakone-Machi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvesthakone.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト箱根甲子園</p>
                <p class="location">神奈川県足柄下郡</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-hakone-koshien/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hakone Hisui" data-city="Hakone-Machi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/hakonejade.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">箱根翡翠</p>
                <p class="location">神奈川県足柄下郡</p>
                <a href="<?php echo getHost(); ?>japan/hakone-hisui/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Tateshina" data-city="Chino" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvesttateshina.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト蓼科</p>
                <p class="location">長野県茅野市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-tateshina/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Grandeco" data-city="Yama-gun" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/hotelgrande.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルグランデコ</p>
                <p class="location">福島県耶麻郡北塩原村</p>
                <a href="<?php echo getHost(); ?>japan/hotel-grandeco/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Nasu" data-city="Nasu-gun" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestnasu.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト那須</p>
                <p class="location">栃木県那須郡</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-nasu/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Kinugawa" data-city="Nikko" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestkinugawa.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト鬼怒川</p>
                <p class="location">栃木県日光市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-kinugawa/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Harvest Atami Izusan" data-city="Atami" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/harvestatami.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルハーヴェスト熱海伊豆山</p>
                <p class="location">静岡県熱海市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-harvest-atami-izusan/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Shigra Bayside Suite Allamanda" data-city="Miyakojima" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/shigira.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">シギラベイサイドスイートアラマンダ</p>
                <p class="location">沖縄県宮古島市</p>
                <a href="<?php echo getHost(); ?>japan/shigira-bayside-allamanda/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Hotel Breeze Bay Marina" data-city="Miyakojima" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/breezebay.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテルブリーズベイマリーナ</p>
                <p class="location">沖縄県宮古島市</p>
                <a href="<?php echo getHost(); ?>japan/hotel-breeze-bay-marina/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Big Week Hakone Gora" data-city="Hakone-machi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/bigweekhakone.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ビッグウィーク箱根強羅</p>
                <p class="location">神奈川県足柄下郡</p>
                <a href="<?php echo getHost(); ?>japan/big-week-hakone-gora/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Big Week Tateshina" data-city="Chino" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/bigweektateshina.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ビッグウィーク蓼科</p>
                <p class="location">長野県茅野市</p>
                <a href="<?php echo getHost(); ?>japan/big-week-tateshina/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Big Week izukogen" data-city="Ito" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/bigweekizukogen.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ビッグウィーク伊豆高原</p>
                <p class="location">静岡県伊東市</p>
                <a href="<?php echo getHost(); ?>japan/big-week-izukogen/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Big Week izukogen" data-city="Ito" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/bigweekizukogendog.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ビッグウィーク伊豆高原愛犬家族</p>
                <p class="location">静岡県伊東市</p>
                <a href="<?php echo getHost(); ?>japan/big-week-izukogen-dog/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Tsukioka Hotel" data-city="Yamagata" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-tsukioka-hotel.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">月岡ホテル</p>
                <p class="location">山形県上山温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-tsukioka-hotel/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Ryokusuitei" data-city="Miyagi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-ryokusuitei.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">篝火の湯緑水亭</p>
                <p class="location">宮城県秋保温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-ryokusuitei/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Hotel Isobe Garden" data-city="Gumna" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-hotel-isobe-garden.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">舌切雀のお宿ホテル磯部ガーデン</p>
                <p class="location">群馬県磯辺温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-hotel-isobe-garden/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Meiseki no Yado Kagetsu" data-city="Yamanashi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-meiseki-kagetsu.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">銘石の宿かげつ</p>
                <p class="location">山梨県石和温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-meiseki-kagetsu/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Hamanoyu" data-city="Nagano" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-hamanoyu.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">浜の湯</p>
                <p class="location">長野県上諏訪温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-hamanoyu/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Hanaougi" data-city="Gifu" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-hanaougi.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">飛騨亭花扇</p>
                <p class="location">岐阜県高山温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-hanaougi/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Okuhida Gaden Hotel Yakedake" data-city="Gifu" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-okuhida-yakedake.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">奥飛騨ガーデンホテル焼岳</p>
                <p class="location">岐阜県新平湯奥飛騨</p>
                <a href="<?php echo getHost(); ?>japan/jtb-okuhida-yakedake/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Hotel Kaibo" data-city="Ishikawa" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-hotel-kaibo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテル海望</p>
                <p class="location">石川県和倉温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-hotel-kaibo/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Rurikoh" data-city="Ishikawa" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-rurikoh.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">瑠璃光</p>
                <p class="location">石川県山代温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-rurikoh/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Monjuso" data-city="Kyoto" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-monjuso.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">文珠荘</p>
                <p class="location">京都府天橋立</p>
                <a href="<?php echo getHost(); ?>japan/jtb-monjuso/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
         <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Otanisannso" data-city="Yamaguchi" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-otanisanso.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">大谷山荘</p>
                <p class="location">山口県長門湯本温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-otanisanso/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
         <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="JTB Hotel Toyokan" data-city="Nagasaki" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/jtb-hotel-toyokan.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">ホテル東洋館</p>
                <p class="location">長崎県雲仙温泉</p>
                <a href="<?php echo getHost(); ?>japan/jtb-hotel-toyokan/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","japan"]' data-name="Kamori Sahoro Resort" data-city="Hokkaido" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>japan/img/kamori-sahoro-resort.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">サホロリゾートホテル</p>
                <p class="location">北海道上川郡</p>
                <a href="<?php echo getHost(); ?>japan/kamori-sahoro-resort/?lang=jpn<?php if($standalone == true){ ?>&standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      
      <div id="noResults">
        <p>あなたが選択したバケーションタイプに基づいたリゾートはございません。上記のバケーションタイプの一部を除くことにより、検索結果を広げることができます。</p>
      </div>
      
    </div>
<?php
  }
  else {
?>

    <div id="explorecontent" class="content">
      
      <div id="filter-group">
        <div class="row">
          <div class="col-sm-8">
            <p>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">Locations</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="location" role="menu">
                  <li role="presentation" class="dropdown-header">United States</li>
                  <li><a href="#" data-group="california">California</a></li>
                  <li><a href="#" data-group="colorado">Colorado</a></li>
                  <li><a href="#" data-group="florida-atlantic">Florida &ndash; Atlantic</a></li>
                  <li><a href="#" data-group="florida-central">Florida &ndash; Central</a></li>
                  <li><a href="#" data-group="florida-gulf">Florida &ndash; Gulf</a></li>
                  <li><a href="#" data-group="florida-panhandle">Florida &ndash; Panhandle</a></li>
                  <li><a href="#" data-group="hawaii">Hawaii</a></li>
                  <li><a href="#" data-group="nevada">Nevada</a></li>
                  <li><a href="#" data-group="new-york">New York</a></li>
                  <li><a href="#" data-group="south-carolina">South Carolina</a></li>
                  <li><a href="#" data-group="utah">Utah</a></li>
                  <li role="presentation" class="dropdown-header">International</li>
                  <li><a href="#" data-group="canada">Canada</a></li>
                  <li><a href="#" data-group="indonesia">Indonesia</a></li>
                  <li><a href="#" data-group="italy">Italy</a></li>
                  <li><a href="#" data-group="mexico">Mexico</a></li>
                  <li><a href="#" data-group="new-zealand">New Zealand</a></li>
                  <li><a href="#" data-group="portugal">Portugal</a></li>
                  <li><a href="#" data-group="scotland">Scotland</a></li>
                  <li><a href="#" data-group="thailand">Thailand</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">Amenities</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="amenities" role="menu">
                  <li><a href="#" data-group="childrens-pool">Children's Pool</a></li>
                  <li><a href="#" data-group="childrens-programs">Children's Programs</a></li>
                  <li><a href="#" data-group="store">Convenience Store</a></li>
                  <li><a href="#" data-group="fitness-center">Fitness Center</a></li>  
                  <li><a href="#" data-group="laundry">Laundry</a></li>
                  <li><a href="#" data-group="playground">Playground</a></li>    
                  <li><a href="#" data-group="pool">Pool</a></li>    
                  <li><a href="#" data-group="restaurant">Restaurant</a></li>    
                  <li><a href="#" data-group="spa">Spa</a></li>    
                  <li><a href="#" data-group="whirlpool">Whirlpool / Hot Tub</a></li>  
                </ul>
              </div>
              <div class="dropdown">
                <a href="#" class="btn btn-default btn-filter" data-toggle="dropdown"><span class="txt">Vacation Types</span> <span class="caret"></span></a> 
                <ul class="dropdown-menu" id="vacation" role="menu">
                  <li><a href="#" data-group="beach">Beach</a></li>
                  <li><a href="#" data-group="casino">Casino</a></li>
                  <li><a href="#" data-group="city">City Scene</a></li>
                  <li><a href="#" data-group="family">Family</a></li>
                  <li><a href="#" data-group="golf">Golf</a></li>
                  <li><a href="#" data-group="romance">Romance</a></li>
                  <li><a href="#" data-group="ski">Ski</a></li>
                  <li><a href="#" data-group="spa">Spa</a></li>
                  <li><a href="#" data-group="theme-parks">Theme Parks</a></li>
                </ul>
              </div>
              <a href="#" class="btn btn-default btn-filter" id="remove-filters"><span class="glyphicon glyphicon-remove"></span> Remove All Filters</a>
            </p>
          </div>
          <div class="col-sm-4 text-right">
            <select class="sort-options form-control">
              <option value="">Sort By</option>
              <option value="name">Name</option>
              <option value="city">City</option>
              <!--option value="club-points">Avg. ClubPoints: Min-Max</option>
              <option value="club-points-reverse">Avg. ClubPoints: Max-Min</option-->
            </select>
          </div>
        </div>
      </div><!--/filter-group-->
    
      <div id="grid" class="container-fluid">
    
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","casino","city","family","golf","romance","spa","theme-parks","childrens-pool","childrens-programs","fitness-center","laundry","playground","pool","restaurant","spa","whirlpool"]' data-name="Carlsbad Seapointe Resort" data-city="Carlsbad" data-club-points="800">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/seapointe.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Carlsbad Seapointe Resort</p>
                <p class="location">Carlsbad, California, USA</p>
                <a href="<?php echo getHost(); ?>california/carlsbad-seapointe/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","golf","romance","childrens-pool","fitness-center","pool","whirlpool"]' data-name="Club Intrawest - Palm Desert" data-city="Palm Desert" data-club-points="1200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/palmdesert.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Palm Desert</p>
                <p class="location">Palm Desert, California, USA</p>
                <a href="<?php echo getHost(); ?>california/club-intrawest-palm-desert/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","romance","theme-parks","fitness-center","playground","pool","restaurant","whirlpool"]' data-name="Grand Pacific Palisades Resort" data-city="Carlsbad" data-club-points="400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/palisades.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Grand Pacific Palisades Resort</p>
                <p class="location">Carlsbad, California, USA</p>
                <a href="<?php echo getHost(); ?>california/grand-pacific-palisades/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","california","beach","family","golf","romance","spa","theme-parks","fitness-center","pool","restaurant","spa"]' data-name="Hilton Grand Vacations Club at MarBrisa" data-city="Carlsbad" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>california/img/marbrisa.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at MarBrisa</p>
                <p class="location">Carlsbad, California, USA</p>
                <a href="<?php echo getHost(); ?>california/hgvc-marbrisa/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","colorado","family","romance","ski","fitness-center","laundry","playground","spa","whirlpool"]' data-name="Valdoro Mountain Lodge" data-city="Breckenridge" data-club-points="900">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>colorado/img/valdoro.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Valdoro Mountain Lodge</p>
                <p class="location">Breckenridge, Colorado, USA</p>
                <a href="<?php echo getHost(); ?>colorado/valdoro-mountain-lodge/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-atlantic","beach","city","romance","fitness-center","whirlpool"]' data-name="Hilton Grand Vacations Club at McAlpin - Ocean Plaza" data-city="Miami Beach" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-atlantic/img/mcalpin.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at McAlpin &ndash; Ocean Plaza</p>
                <p class="location">Miami Beach, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-atlantic/hgvc-mcalpin-ocean-plaza/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-atlantic","beach","family","golf","romance","fitness-center","laundry","pool","whirlpool"]' data-name="Plantation Beach Club at Indian River Plantation Resort" data-city="Stuart" data-club-points="200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-atlantic/img/plantationirpr.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Plantation Beach Club at Indian River Plantation Resort</p>
                <p class="location">Stuart, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-atlantic/plantation-beach-club-indian-river/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","childrens-pool","fitness-center","laundry","playground","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at SeaWorld" data-city="Orlando" data-club-points="400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/seaworld.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at SeaWorld</p>
                <p class="location">Orlando, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-central/hgvc-seaworld/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","childrens-pool","childrens-programs","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at Tuscany Village" data-city="Orlando" data-club-points="380">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/tuscany.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at Tuscany Village</p>
                <p class="location">Orlando, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-central/hgvc-tuscany-village/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-central","city","family","golf","theme-parks","store","fitness-center","laundry","playground","pool","restaurant"]' data-name="Parc Soleil by Hilton Grand Vacations Club" data-city="Orlando" data-club-points="740">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-central/img/parcsoleil.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Parc Soleil by<br />Hilton Grand Vacations Club</p>
                <p class="location">Orlando, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-central/parc-soleil-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="Casa Ybel Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/casaybel.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Casa Ybel Resort</p>
                <p class="location">Sanibel Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/casa-ybel/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","family","romance"]' data-name="Club Regency of Marco Island" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/regency.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Regency of Marco Island</p>
                <p class="location">Marco Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/club-regency-marco-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","romance"]' data-name="Eagle's Nest Beach Resort" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/eaglesnest.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Eagle's Nest Beach Resort</p>
                <p class="location">Marco Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/eagles-nest/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Harbourview Villas at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/harbourview.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Harbourview Villas at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/harbourview-south-seas-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","romance"]' data-name="Hurricane House Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/hurricanehouse.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hurricane House Resort</p>
                <p class="location">Sanibel Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/hurricane-house/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Plantation Bay Villas at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationbay.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Plantation Bay Villas at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-bay-south-seas-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="Plantation Beach Club at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationbeach.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Plantation Beach Club at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-beach-south-seas-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="Plantation House at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/plantationhouse.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Plantation House at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/plantation-house-south-seas-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","golf","romance"]' data-name="Sanibel Cottages Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/sanibel.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Sanibel Cottages Resort</p>
                <p class="location">Sanibel Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/sanibel-cottages/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Seawatch On-the-Beach Resort" data-city="Fort Myers Beach" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/seawatch.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Seawatch On-the-Beach Resort</p>
                <p class="location">Fort Myers Beach, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/seawatch/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","laundry","pool","whirlpool","beach","golf","romance"]' data-name="Shell Island Beach Club Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/shellisland.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Shell Island Beach Club Resort</p>
                <p class="location">Sanibel Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/shell-island-beach-club/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="South Seas Club at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/southseas.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">South Seas Club at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/south-seas-club/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="Sunset Cove Resort" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/sunsetcove.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Sunset Cove Resort</p>
                <p class="location">Marco Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/sunset-cove/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-pool","childrens-programs","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="The Charter Club of Marco Beach" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/charterclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Charter Club<br />of Marco Beach</p>
                <p class="location">Marco Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/charter-club-marco-beach/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","fitness-center","laundry","pool","beach","family","golf","romance"]' data-name="The Cottages at South Seas Island Resort" data-city="Captiva Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/cottages.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Cottages at<br />South Seas Island Resort</p>
                <p class="location">Captiva Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/cottages-south-seas-island/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","fitness-center","laundry","pool","whirlpool","beach","family","romance"]' data-name="The Surf Club of Marco" data-city="Marco Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/surfclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Surf Club of Marco</p>
                <p class="location">Marco Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/surf-club-marco/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-gulf","childrens-programs","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Tortuga Beach Club Resort" data-city="Sanibel Island" data-club-points="350">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-gulf/img/tortuga.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Tortuga Beach Club Resort</p>
                <p class="location">Sanibel Island, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-gulf/tortuga-beach-club/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","florida-panhandle","beach","family","romance","childrens-pool","fitness-center","laundry","pool","whirlpool"]' data-name="Club Intrawest - Sandestin" data-city="Sandestin" data-club-points="200">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>florida-panhandle/img/sandestin.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Sandestin</p>
                <p class="location">Sandestin, Florida, USA</p>
                <a href="<?php echo getHost(); ?>florida-panhandle/club-intrawest-sandestin/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Grand Waikikian by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/grandwaikikian.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Grand Waikikian by<br />Hilton Grand Vacations Club</p>
                <p class="location">Honolulu, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/grand-waikikian-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","city","family","romance","fitness-center","pool"]' data-name="Hokulani Waikiki by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/hokulaniwaikiki.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hokulani Waikiki by<br />Hilton Grand Vacations Club</p>
                <p class="location">Honolulu, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/hokulani-waikiki-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Kalia Suites by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kalia.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Kalia Suites by<br />Hilton Grand Vacations Club</p>
                <p class="location">Honolulu, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/kalia-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf","romance","childrens-pool","childrens-programs","fitness-center","laundry","playground","pool","restaurant","whirlpool"]' data-name="Kings' Land by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kingsland.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Kings' Land by<br />Hilton Grand Vacations Club</p>
                <p class="location">Waikoloa, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/kings-land-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","childrens-pool","laundry","pool","whirlpool","beach","family","golf","romance"]' data-name="Kohala Suites by Hilton Grand Vacations Club" data-city="Waikoloa" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/kohala.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Kohala Suites by<br />Hilton Grand Vacations Club</p>
                <p class="location">Waikoloa, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/kohala-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","beach","family","golf,"romance","spa","childrens-programs","fitness-center","laundry","pool","restaurant","spa"]' data-name="Lagoon Tower by Hilton Grand Vacations Club" data-city="Honolulu" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/lagoon.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Lagoon Tower by<br />Hilton Grand Vacations Club</p>
                <p class="location">Honolulu, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/lagoon-tower-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","hawaii","fitness-center","laundry","pool","restaurant","whirlpool","beach","family","golf","romance"]' data-name="The Bay Club at Waikoloa Beach Resort" data-city="Waikoloa" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>hawaii/img/bayclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Bay Club at<br />Waikoloa Beach Resort</p>
                <p class="location">Waikoloa, Hawaii, USA</p>
                <a href="<?php echo getHost(); ?>hawaii/bay-club-waikoloa-beach/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all",,"united-states","nevada","casino","city","golf","romance","spa","fitness-center","pool","restaurant","whirlpool"]' data-name="Elara, a Hilton Grand Vacations Club" data-city="Las Vegas" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/elara.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Elara, a Hilton<br />Grand Vacations Club</p>
                <p class="location">Las Vegas, Nevada, USA</p>
                <a href="<?php echo getHost(); ?>nevada/elara-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
    
   	    <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","store","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club at the Flamingo" data-city="Las Vegas" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/flamingo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at the Flamingo</p>
                <p class="location">Las Vegas, Nevada, USA</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-flamingo/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","spa","fitness-center","pool","restaurant","spa","whirlpool"]' data-name="Hilton Grand Vacations Club at Trump International Hotel" data-city="Las Vegas" data-club-points="900">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/trump.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club at Trump International Hotel</p>
                <p class="location">Las Vegas, Nevada, USA</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-trump/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
      
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","store","fitness-center","laundry","pool","restaurant","whirlpool"]' data-name="Hilton Grand Vacations Club on Paradise" data-city="Las Vegas" data-club-points="450">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/paradise.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club on Paradise</p>
                <p class="location">Las Vegas, Nevada, USA</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-paradise/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","nevada","casino","city","golf","romance","spa","store","fitness-center","laundry","pool","restaurant","spa","whirlpool"]' data-name="Hilton Grand Vacations Club on the Boulevard" data-city="Las Vegas" data-club-points="800">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>nevada/img/boulevard.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club on the Boulevard</p>
                <p class="location">Las Vegas, Nevada, USA</p>
                <a href="<?php echo getHost(); ?>nevada/hgvc-boulevard/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","new-york","city","romance","fitness-center","restaurant"]' data-name="The Hilton Club - New York" data-city="New York" data-club-points="1500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-york/img/hiltonclub.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Hilton Club &ndash; New York</p>
                <p class="location">New York, New York, USA</p>
                <a href="<?php echo getHost(); ?>new-york/hilton-club/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","new-york","city","romance","fitness-center","laundry"]' data-name="West 57th Street by Hilton Club" data-city="New York" data-club-points="1550">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-york/img/west57.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">West 57th Street<br />by Hilton Club</p>
                <p class="location">New York, New York, USA</p>
                <a href="<?php echo getHost(); ?>new-york/west-57th-street/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","south-carolina","fitness-center","pool","spa","whirlpool","beach","family","golf","romance","spa"]' data-name="Ocean 22 by Hilton Grand Vacations Club" data-city="Myrtle Beach" data-club-points="560">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>south-carolina/img/ocean22.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Ocean 22 by <br/>Hilton Grand Vacations Club</p>
                <p class="location">Myrtle Beach, South Carolina, USA</p>
                <a href="<?php echo getHost(); ?>south-carolina/hgvc-ocean22/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","south-carolina","childrens-pool","fitness-center","pool","spa","whirlpool","beach","family","golf","romance","spa"]' data-name="Hilton Grand Vacations Club at Anderson Ocean Club" data-city="Myrtle Beach" data-club-points="560">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>south-carolina/img/anderson.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Anderson Ocean Club</p>
                <p class="location">Myrtle Beach, South Carolina, USA</p>
                <a href="<?php echo getHost(); ?>south-carolina/hgvc-anderson-ocean-club/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","united-states","utah","family","golf","romance","ski","fitness-center","pool","whirlpool"]' data-name="Sunrise Lodge, a Hilton Grand Vacations Club" data-city="Park City" data-club-points="890">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>utah/img/sunrise.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Sunrise Lodge, a Hilton<br />Grand Vacations Club</p>
                <p class="location">Park City, Utah, USA</p>
                <a href="<?php echo getHost(); ?>utah/sunrise-lodge-hgvc/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","childrens-pool","convenience-store","fitness-center","laundry","pool","spa","whirlpool","family","romance","ski","spa"]' data-name="Club Intrawest - Blue Mountain" data-city="Ontario" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/bluemountain.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Blue Mountain</p>
                <p class="location">Blue Mountain, Ontario, Canada</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-blue-mountain/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","fitness-center","pool","whirlpool","family","golf","romance","ski"]' data-name="Club Intrawest - Tremblant" data-city="Quebec" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/tremblant.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Tremblant</p>
                <p class="location">Mont Tremblant, Quebec, Canada</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-tremblant/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","convenience-store","fitness-center","pool","restaurant","spa","whirlpool","beach","city","romance","spa"]' data-name="Club Intrawest - Vancouver" data-city="Vancouver" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/vancouver.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Vancouver</p>
                <p class="location">Vancouver, British Columbia, Canada</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-vancouver<?php if($standalone == true){ ?>?standalone=true<?php } ?>/" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","canada","childrens-pool","pool","whirlpool","family","golf","romance","ski"]' data-name="Club Intrawest - Whistler" data-city="Whistler" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>canada/img/whistler.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Whistler</p>
                <p class="location">Whistler, British Columbia, Canada</p>
                <a href="<?php echo getHost(); ?>canada/club-intrawest-whistler/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","indonesia"]' data-name="Anantara Vacation Club Bali Seminyak" data-city="Seminyak" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>indonesia/img/bali.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Anantara Vacation Club<br />Bali Seminyak</p>
                <p class="location">Seminyak, Bali, Indonesia</p>
                <a href="<?php echo getHost(); ?>indonesia/anantara-bali-seminyak/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","italy","pool","golf","romance"]' data-name="Hilton Grand Vacations Club at Borgo alle Vigne" data-city="Selvatelle" data-club-points="1000">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>italy/img/borgo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Borgo alle Vigne</p>
                <p class="location">Selvatelle, Terricciola, Italy</p>
                <a href="<?php echo getHost(); ?>italy/hgvc-borgo-alle-vigne/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","convenience-store","pool","restaurant","spa","beach","family","romance","spa"]' data-name="Club Intrawest - Zihuatanejo" data-city="Zihuatanejo" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/zihuatanejo.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Club Intrawest &ndash; Zihuatanejo</p>
                <p class="location">Zihuatanejo, Pacific Coast, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/club-intrawest-zihuatanejo/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","spa","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Acapulco" data-city="Acapulco Guerrero" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/acapulco.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Fiesta Americana Villas<br />Acapulco</p>
                <p class="location">Acapulco Guerrero, Pac. Coast, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-acapulco/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","restaurant","spa","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Cancun" data-city="Cancun" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/cancun.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Fiesta Americana Villas<br />Cancun</p>
                <p class="location">Cancun, Gulf of Mexico, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-cancun/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","childrens-programs","fitness-center","pool","restaurant","spa","whirlpool","beach","family","romance","spa"]' data-name="Fiesta Americana Villas Los Cabos" data-city="Cabo Sans Lucas" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/loscabos.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Fiesta Americana Villas<br />Los Cabos</p>
                <p class="location">Cabo San Lucas, Pacific Coast, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/fiesta-americana-villas-los-cabos/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico","laundry","pool","restaurant","spa","whirlpool","beach","romance","spa"]' data-name="The Explorean Kohunlich" data-city="Chetumal" data-club-points="500">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/explorean.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">The Explorean Kohunlich</p>
                <p class="location">Chetumal, Yucatan Peninsula, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/explorean-kohunlich/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <?php
		  if($elite == true){
		?>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Acapulco" data-city="Acapulco Guerrero" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/grandmayanacapulco.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Grand Mayan &ndash; Acapulco</p>
                <p class="location">Acapulco Guerrero, Pac. Coast, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-acapulco/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Nuevo Vallarta" data-city="Nuevo Vallarta" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/nuevovallarta.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Grand Mayan &ndash; Nuevo Vallarta</p>
                <p class="location">Nuevo Vallarta, Nayarit, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-nuevo-vallarta/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","mexico"]' data-name="Grand Mayan - Riviera Maya" data-city="Nuevo Vallarta" data-club-points="3400">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>mexico/img/rivieramaya.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Grand Mayan &ndash; Riviera Maya</p>
                <p class="location">Riviera Maya, Quintana Roo, Mexico</p>
                <a href="<?php echo getHost(); ?>mexico/grand-mayan-riviera-maya/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
		
        <?php
		  }
		?>
        
        <div class="resortpanel col-sm-4" data-groups='["all","new-zealand"]' data-name="Anantara Vacation Club at Oaks Shores" data-city="Queenstown" data-club-points="600">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>new-zealand/img/oakshores.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Anantara Vacation Club<br />at Oaks Shores</p>
                <p class="location">Queenstown, New Zealand</p>
                <a href="<?php echo getHost(); ?>new-zealand/anantara-oaks-shores/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","portugal","childrens-programs","fitness-center","pool","restaurant","spa","beach","family","golf","romance","spa"]' data-name="Hilton Vilamoura Vacation Club" data-city="Vilamoura" data-club-points="600">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>portugal/img/vilamoura.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Vilamoura<br />Vacation Club</p>
                <p class="location">Vilamoura, Portugal</p>
                <a href="<?php echo getHost(); ?>portugal/hilton-vilamoura/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","childrens-programs","pool","restaurant","family","golf","romance","ski"]' data-name="Hilton Grand Vacations Club at Coylumbridge" data-city="Coylumbridge" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/coylumbridge.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Coylumbridge</p>
                <p class="location">Coylumbridge, Scotland</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-coylumbridge/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","fitness-center","pool","restaurant","spa","romance","ski","spa"]' data-name="Hilton Grand Vacations Club at Craigendarroch Lodges" data-city="Ballater" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/craigendarrochlodges.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Craigendarroch Lodges</p>
                <p class="location">Ballater, Royal Deeside, Scotland</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-craigendarroch-lodges/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland"]' data-name="Hilton Grand Vacations Club at Craigendarroch Suites" data-city="Ballater" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/craigendarrochsuites.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Craigendarroch Suites</p>
                <p class="location">Ballater, Royal Deeside, Scotland</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-craigendarroch-suites/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","scotland","fitness-center","pool","whirlpool","golf","romance","ski","spa"]' data-name="Hilton Grand Vacations Club at Dunkeld" data-city="Dunkeld" data-club-points="700">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>scotland/img/dunkeld.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Hilton Grand Vacations Club<br />at Dunkeld</p>
                <p class="location">Dunkeld, Perthshire, Scotland</p>
                <a href="<?php echo getHost(); ?>scotland/hgvc-dunkeld/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand"]' data-name="Anantara Vacation Club Bangkok Sathorn" data-city="Yannawa" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/bangkok.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Anantara Vacation Club<br />Bangkok Sathorn</p>
                <p class="location">Yannawa, Bangkok, Thailand</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-bangkok-sathorn/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand","beach","romance","spa"]' data-name="Anantara Vacation Club, Bophut Koh Samui Resort & Spa" data-city="Koh Samui" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/bophut.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Anantara Vacation Club,<br />Bophut Koh Samui Resort &amp; Spa</p>
                <p class="location">Koh Samui, Surat Thani, Thailand</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-bophut-koh-samui/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="resortpanel col-sm-4" data-groups='["all","thailand"]' data-name="Anantara Vacation Club Phuket Mai Khao" data-city="Mai Khao" data-club-points="1100">
          <div class="inner">
            <p class="img-container"><img src="<?php echo getHost(); ?>thailand/img/phuket.jpg" alt="" /></p>
            <div class="row details">
              <div class="col-xs-12">
                <p class="title">Anantara Vacation Club Phuket Mai Khao</p>
                <p class="location">Mai Khao, Thalang, Phuket, Thailand</p>
                <a href="<?php echo getHost(); ?>thailand/anantara-phuket-mai-khao/<?php if($standalone == true){ ?>?standalone=true<?php } ?>" class="hidden">More</a>
              </div>
            </div>
          </div>
        </div>
        
        
      
      </div>
      
      <div id="noResults">
        <p>There are no resorts based on the filters you selected. Please broaden your search by removing some of the filters above.</p>
      </div>
      
    </div>

<?php
  }
?>