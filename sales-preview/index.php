<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Hilton Grand Vacations is committed to the idea that life is incomplete without vacations. Our distinctive resort collection features spacious condominium-style accommodations." />
  <title>Learn About Vacation Ownership with Hilton Grand Vacations</title>
  <?php addStyles(); ?>
    
    
        <!-- Form Function -->
    
    <link type="text/css" rel="stylesheet" href="formvalidation/css/formValidation.min.css">
<!--    <script src="js/jquery-1.9.1.min.js"></script>-->
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>

    <script src="//cdn.jsdelivr.net/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="formvalidation/js/formValidation.min.js"></script>
    <script src="formvalidation/js/framework/bootstrap.min.js"></script>
    <script src="js/geoapi-hgv.js" type="text/javascript"></script>
    <!--    <script type="text/javascript" src="js/jquery.js"></script>-->
    <!--    <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
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
          
          <div class="col-sm-4 aside">
            <ul class="sidebar-menu">
              <li><a class="active" href="#">タムシェア販売説明会</a></li>
              <li><a href="#">販売説明会の流れ</a></li>
              <li><a href="#">開催地・日程</a></li>
              <li><a href="#">来場ご予約（国内）</a></li>
              <li><a href="#">来場ご予約（ハワイ）</a></li>
            </ul>
          </div>


          <!-- #1 販売説明会 -->
          <div id="sales-preview" class="col-sm-8 main-column sub-content">
          
            <h1>タムシェア販売説明会</h1>
            <p>販売説明会では「タイムシェアって何？」「会員リゾート権とは違うの？」「ハワイにしか行けないの？」といった皆さまからの様々な質問に、専任のスタッフがお答えし、オアフ島やハワイ島の魅力やヒルトン・グランド・バケーションズの柔軟で機能的な「タイムシェア・プログラム」を分かりやすくご紹介いたします。</p>

            <h1>当日の流れ</h1>

            <div class="row space-bottom">
              <div class="col-sm-3 col-xs-6">
                <div class="steps-wrapper">
                  <img src="img/1-sales-center.jpg" />
                  <h3>Step 1</h3>
                  <p>ご予約いただいた会場にご来場</p>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="steps-wrapper">
                  <img src="img/2-sales-center.jpg" />
                  <h3>Step 2</h3>
                  <p>専用スタッフのご紹介</p>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="steps-wrapper">
                  <img src="img/3-sales-center.jpg" />
                  <h3>Step 3</h3>
                  <p>タイムシェア・プログラムについてご案内</p>
                </div>
              </div>
              <div class="col-sm-3 col-xs-6">
                <div class="steps-wrapper">
                  <img src="img/4-sales-center.jpg" />
                  <h3>Step 4</h3>
                  <p>終了。ご購入のお客様はそのままご契約いただけます。</p>
                </div>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="img/sales-prev-japan-sm.jpg" class="mobile-hide" />
                <img src="img/sales-prev-japan-lg.jpg" class="mobile-show" />
              </div>
              <div class="col-sm-8">
                <h3>タイムシェア国内販売説明会</h3>
                <p>国内会場の説明会をご予約される方はこちらよりお申し込みください。</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約お申し込み</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="img/sales-prev-hawaii-sm.jpg" class="mobile-hide" />
                <img src="img/sales-prev-hawaii-lg.jpg" class="mobile-show" />
              </div>
              <div class="col-sm-8">
                <h3>タイムシェアハワイ現地販売説明会</h3>
                <p>現地ハワイにてご来場ご予約をされる方はこちらよりお申し込みください。</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約お申し込み</a></p>
              </div>
            </div>

          </div> <!-- col-sm-8 -->




          <!-- #2 販売説明会の流れ -->
          <div id="sales-tower-flow" class="col-sm-8 main-column sub-content" style="display:none;">

            <h1>販売説明会の流れ</h1>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show">
              </div>
              <div class="col-sm-8">
                <h3>STEP 1 : ご予約いただいた会場にご来場</h3>
                <p>私どもは販売説明会場を「ギャラリー」と称しています。東京会場のギャラリーは約100坪のスペースを誇り、プライベート・スペースが確保された14のブース、バーチャルツアーを体験できるシアタールームなど、海外リゾートを体感できる魅力的な設備となっております。</p>
                <p>ハワイ現地のギャラリーは、実際にご購入いただけるタイムシェアタワー内にあり、海やゴルフ場の素晴しい眺めを背景に、オーナー気分を味わっていただけます。</p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" style="display: inline;">
              <img src="http://placehold.it/767x300" class="mobile-show">
              </div>
              <div class="col-sm-8">
                <h3>STEP 2 : 専用スタッフのご紹介</h3>
                <p>まずは、入り口でチェックイン。お客様ひと組に対し、ひとりのスタッフが専属で担当させていただきます。</p>
                <p>ご説明はプライバシーを重視したブースで個別に行っております。</p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" style="display: inline;">
              <img src="http://placehold.it/767x300" class="mobile-show">
              </div>
              <div class="col-sm-8">
                <h3>STEP 3 : タイムシェア・プログラムについてご案内</h3>
                <p>お客様お一人おひとりに合ったタイムシェア・プログラムをご案内いたします。オアフ島やハワイ島リゾートのご説明、ヒルトン・グランド・バケーションズならではの、タイムシェアのお得な活用法、世界各地の施設情報をご説明させていただきます。</p>
                <p>ハワイでの販売説明会では、モデルルームも見学いただけます。</p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" style="display: inline;">
              <img src="http://placehold.it/767x300" class="mobile-show">
              </div>
              <div class="col-sm-8">
                <h3>STEP 4 : 終了</h3>
                <p>ご購入のお客様にはその場でご契約もいただけます。</p>
                <p>登記に必要な契約書を専属スタッフが丁寧にご説明いたしますので、安心してご契約いただけます。</p>
              </div>
            </div>


          </div> <!-- col-sm-8 -->


          <!-- #3 開催地・日程 -->
          <div id="tour-location" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>開催地・日程</h1>
            <p>お客様のご旅行スタイル、これからのバケーションプランなどを伺いながら、タイムシェアの概要や仕組みを専任のスタッフが丁寧にご説明します。販売説明会は、日本各地、そしてハワイでほぼ毎日開催。開催地につきまして、以下をご覧ください。</p>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>日比谷バケーション・ギャラリー</h3>
                <p>〒100-0006　東京都千代田区有楽町1-5-1<br />日比谷マリンビル９階</p>
                <p>定休日：なし</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>新宿バケーション・ギャラリー</h3>
                <p>〒160-0023　東京都新宿区西新宿6-6-2<br />ヒルトン東京地下１階ショップ＆レストラン「ヒルトピア」内</p>
                <p>定休日：なし</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>横浜バケーション・ギャラリー</h3>
                <p>〒220-8124　神奈川県横浜市西区みなとみらい2-2-1<br />横浜ランドマークタワー24階　2405号室</p>
                <p>定休日：なし</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>名古屋バケーション・ギャラリー</h3>
                <p>〒460-0008　愛知県名古屋市中区栄1-3-3<br />ヒルトン名古屋 ２階</p>
                <p>定休日：なし</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>大阪バケーション・ギャラリー</h3>
                <p>〒530-0001　大阪府大阪市北区梅田1-8-8<br />ヒルトン大阪２階</p>
                <p>定休日：なし</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>福岡バケーション・ギャラリー</h3>
                <p>〒810-8650　福岡県福岡市中央区地行浜2-2-3<br />ヒルトン福岡シーホーク４階</p>
                <p>定休日：火・水曜</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <h1>特別開催地</h1>
            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>ヒルトン東京ベイ</h3>
                <p>〒279-0031 千葉県浦安市舞浜 1-8</p>
                <p>1月1日（金）〜3月6日（日）</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>ホテルグランヴィア広島</h3>
                <p>〒732-0822 広島県広島市南区松原町 1-5</p>
                <p>1月1日（金）〜3月6日（日）</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a><a href="#" class="btn btn-secondary">MAP</a></p>
              </div>
            </div>

            <h1>ハワイ開催地</h1>
            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>ヒルトン・ハワイアン・ビレッジ</h3>
                <p>2003 Kalia Road, Honolulu, Hawaii 96815</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a></p>
              </div>
            </div>

            <div class="row block">
              <div class="col-sm-4 text-center">
                <img src="http://placehold.it/230x230" class="mobile-hide" src="http://placehold.it/230x230" style="display: inline;">
                <img src="http://placehold.it/767x300" class="mobile-show" src="http://placehold.it/767x300">
              </div>
              <div class="col-sm-8">
                <h3>ヒルトン・ワイコロア・ビレッジ</h3>
                <p>425 Waikoloa Beach Drive, Waikoloa, Hawaii 96738</p>
                <p><a href="#" class="btn btn-primary btns">来場ご予約</a></p>
              </div>
            </div>



          </div> <!-- col-sm-8 -->

          <!-- #4 来場ご予約（ハワイ） -->
          <div id="booking-form-hawaii" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>来場ご予約（ハワイ</h1>
          </div> <!-- col-sm-8 -->

          <!-- #5 来場ご予約（国内） -->
<!--            this is the japanese booking form-->
          <div id="booking-form-japan" class="col-sm-8 main-column sub-content" style="display:none;">
            <h1>来場ご予約（国内</h1>
              
<!--start of form-->
    <section id="Form">
        <form class="form-horizontal" id="exampleForm" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
            <input type="hidden" name="oid" value="00D700000008gjv">
<!--thank you page-->
            <input type="hidden" name="retURL" value="http://e.hiltongrandvacations.com/ana/ThankYou.html">
            <input type="hidden" name="lead_source" id="lead_source" value="Web Tour Booking Form">
            <input type="hidden" name="recordType" id="recordType" value="01290000001YZpv">
            <input type="hidden" name="00N90000003MXXY" id="00N90000003MXXY" title="Country Origin" value="JAPAN">
            <input type="hidden" name="00N9000000Drpdd" id="00N9000000Drpdd" title="Airline" value="ANA">
            <input type="hidden" name="Campaign_ID" id="Campaign_ID" value="70190000001QtBw">
            <input type="hidden" id="00N70000002F8oS" name="00N70000002F8oS" value="1" />
    
    <div class="container">
                <p><strong>* は必須事項です。</strong></p>
                <div class="row">
                    <div class="row">
<!--start qualify-->  
                                    <div class="col-sm-4">
                                        
                                            <p>体験宿泊プランご参加条件をすべて満たしている場合は、「はい」を選択してください。</p>
                                        
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="formText">
                                            <p>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="QT" id="QT" value="yes"> &nbsp; &nbsp; はい
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="QT" id="QT" value="no"> &nbsp; &nbsp; いいえ
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                        </div
                        
<!--end qualify-->
<!--                    start of your name-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>お名前（全角）*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <input type="text" class="form-control input-sm characters400input" name="last_name" id="last_name" maxlength="80" placeholder="姓">
                                                <br>
                                                <input type="text" class="form-control input-sm characters400input" name="first_name" id="first_name" maxlength="80" placeholder="名">
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!--                    end your name-->
<!--                    start of your name roman-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>お名前 (ローマ字)*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001wI2h" id="00N70000001wI2h" maxlength="80" placeholder="Last Name">
                                                <br>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001wI2w" id="00N70000001wI2w" maxlength="80" placeholder="First Name">
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!--                    end your name roman-->
<!--                    start of age-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>年齢</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>

                                                <select id="00N70000001hDVJ" name="00N70000001hDVJ" class="form-control input-sm">
                                                    <option value="" selected disabled>選んでください</option>
                                                    <option value="20-25">20-25歳</option>
                                                    <option value="26-30">26-30歳</option>
                                                    <option value="31-35">31-35歳</option>
                                                    <option value="36-40">36-40歳</option>
                                                    <option value="41-45">41-45歳</option>
                                                    <option value="46-50">46-50歳</option>
                                                    <option value="51-55">51-55歳</option>
                                                    <option value="56-60">56-60歳</option>
                                                    <option value="61-65">61-65歳</option>
                                                    <option value="66-70">66-70歳</option>
                                                    <option value="71-Over">71歳以上</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!--                    end age-->

                                <!-- start of gender-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>性別</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="formText">
                                            <p>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N70000001jTwJ" id="00N70000001jTwJ" value="Male"> &nbsp; &nbsp; 男性
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N70000001jTwJ" id="00N70000001jTwJ" value="Female"> &nbsp; &nbsp; 女性
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end gender-->

                                <!-- start of occupation-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>職業</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>

                                                <select id="00N70000001jTwO" name="00N70000001jTwO" class="form-control input-sm">
                                                    <option value="" selected disabled>選んでください</option>
                                                    <option value="Office Worker">会社員</option>
                                                    <option value="Executive">会社役員</option>
                                                    <option value="Public Officer">公務員</option>
                                                    <option value="Business Owner">自営業</option>
                                                    <option value="Housewife">主婦</option>
                                                    <option value="Retired">リタイア</option>
                                                    <option value="Student">学生</option>
                                                    <option value="Part-Time Worker">パート社員</option>
                                                    <option value="Temp Worker">派遣社員</option>
                                                    <option value="Doctor">医師</option>
                                                    <option value="Nurse">看護師</option>
                                                    <option value="NPO">団体職員</option>
                                                    <option value="Teacher">教員</option>
                                                    <option value="OTHER">その他</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!-- end occupation-->
                        
                                 <!-- start of income-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>世帯年収(夫婦合算可)*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <select class="form-control input-sm" id="00N70000001hDUD" name="00N70000001hDUD">
                                                    <option value="" selected disabled>選んでください</option>
                                                    <option value="Below $75,000">750万円未満</option>
                                                    <option value="$75,000-$100,000">750万円以上～1,000万円未満</option>
                                                    <option value="$100,000-$150,000">1,000万円以上～1,500万円未満</option>
                                                    <option value="$150,000-$200,000">1,500万円以上～2,000万円未満</option>
                                                    <option value="Over $200,000">2,000万円以上</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end income-->
                                <!-- start of marital status-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>ご結婚はされていますか？</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>

                                            <div class="formText">
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N70000001hDUg" id="00N70000001hDUg" value="Married"> &nbsp; &nbsp; はい
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N70000001hDUg" id="00N70000001hDUg" value="Single"> &nbsp; &nbsp; いいえ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                    end marital status-->
<!--                    start of spouse name-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>配偶者のお名前（全角）</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001k1KT" id="00N70000001k1KT" maxlength="80" placeholder="姓">
                                                <br>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001k1Hw" id="00N70000001k1Hw" maxlength="80" placeholder="名">
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!--                    end spouse name-->
<!--                    start of your spouse name roman-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>配偶者のお名前 (ローマ字)</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001k1D0" id="00N70000001k1D0" maxlength="80" placeholder="Last Name">
                                                <br>
                                                <input type="text" class="form-control input-sm characters400input" name="00N70000001k1Cv" id="00N70000001k1Cv" maxlength="80" placeholder="First Name">
                                            </p>
                                        </div>
                                    </div>
                                </div>
<!--                    end your spouse name roman-->

<!--                        start address-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>住所*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <!-- Postal Code-->
                                                        <label class="control-label"><span class="formText"> 郵便番号 半角数字で入力してください </span></label>
                                                        <br/>
                                                        <input id="geoapi-postal-3" class="zip-box3" name="geoapi-postal-3" type="number" placeholder="_ _ _" /><span class="zip-hyphen"> &mdash; </span>
                                                        <input id="geoapi-postal-4" class="zip-box4" name="geoapi-postal-4" type="number" placeholder="_ _ _ _" />
                                                        <input id="zip" name="zip" type="hidden" />&nbsp; &nbsp;&nbsp;
                                                        <input id="search" name="search" type="button" class="btn btn-sm btn-primary addressFormzip-button" value="検索する" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <!-- Prefecture -->
                                                        <label class="formText addressForm">都道府県</label>
                                                        <input id="state" name="state" type="text" placeholder="都道府県" class="formText" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <!-- City/County-->
                                                        <label class="formText addressForm">市町村</label>
                                                        <input id="city" name="city" type="text" placeholder="市町村" class="formText" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <!-- Street Address-->
                                                        <label class="formText addressForm">町村名・番地</label>
                                                        <input id="street" name="street" type="text" placeholder="町村名・番地" class="formText" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>

<!--                        end of address-->

                                <!--                    start of telephone-->
                                <div class="row formSection form-group">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>電話番号*</p>
                                            <p>ハイフンなしで数字のみ入力</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>
                                                <label class="formText addressForm characters400Label">自宅*:</label>
                                                <input name="phone" type="number" class="form-control input-sm characters400input numberBox" id="phone" placeholder="0350001234">
                                                <br>
                                                <label class="formText addressForm characters400label">携帯:</label>
                                                <input name="mobile" type="number" class="form-control input-sm characters400input numberBox" id="mobile" placeholder="08034215678">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--                    end your telephone-->
                                <!--                    start of email-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>Eメール*</p>
                                            <p>Eメール(確認用)*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>
                                            <p>

                                                <input type="email" class="form-control input-sm" name="email" id="email" maxlength="80" placeholder="メールアドレスを入力してください">
                                                <br>
                                                <input type="email" class="form-control input-sm" name="confirm_email" id="confirm_email" maxlength="80" placeholder="メールアドレスを再入力してください">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--                    end your email-->

                                <!--                    start of 1st tour location-->
                                <div class="row formSection">
                                    <div class="col-sm-4">
                                        <div class="formText">
                                            <p>販売説明会第1希望
                                                <br> 場所／日時*</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div>

                                            <div class="formText">
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Hibiya"> &nbsp; &nbsp; 日比谷 &nbsp;&nbsp;
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Shinjuku"> &nbsp; &nbsp; 新宿 &nbsp;
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Osaka"> &nbsp; &nbsp; 大阪
                                                </label>
                                                <br>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Nagoya"> &nbsp; &nbsp; 名古屋
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Yokohama"> &nbsp; &nbsp; 横浜
                                                </label>
                                                <label class="radio-inline formText">
                                                    <input type="radio" name="00N9000000EaMff" id="00N9000000EaMff" value="Fukuoka"> &nbsp; &nbsp; 福岡
                                                </label>

                                                <p>その他の開催地をご希望の方はお問い合わせください。</p>
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        日時：
                                                        <input type="text" class="input-sm" id="00N9000000EaMfe" name="00N9000000EaMfe" placeholder="01/15/2016" value="" />
                                                    </div>

                                                    <div class="col-xs-5">
                                                        時間帯:
                                                        <select class="form-control input-sm" id="00N9000000EaMfd" name="00N9000000EaMfd">
                                                            <option value="" selected disabled>選ぶ</option>
                                                            <option value="Morning">午前</option>
                                                            <option value="Afternoon">午後</option>
                                                            <option value="Evening">夕方</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-xs-2">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                    end 2nd tour location-->

                            <!-- Email Opt in-->
                            <div class="row formSection">
                                <div class="col-sm-4">
                                    <div class="formText">
                                        <p>Eメールによるヒルトン・グランド・バケーションズ タイムシェアに関するキャンペーンや最新情報、販売説明会のご案内等の配信を希望しますか？*</p>
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div>
                                        <p>
                                            <label class="radio-inline formText">
                                                <input type="radio" name="00N70000001wkiv" id="00N70000001wkiv" value="1"> &nbsp; &nbsp; はい
                                            </label>
                                            <br>
                                            <label class="radio-inline formText">
                                                <input type="radio" name="00N70000001wkiv" id="00N70000001wkiv" value=""> &nbsp; &nbsp; いいえ
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--                    end of opt in-->
                            <!--            comments-->
                            <div class="row formSection">
                                <div class="col-sm-4">
                                    <div class="formText">
                                        <p>その他のご要望等</p>
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div>
                                        <p>
                                            <textarea class="form-control" placeholder="その他コメント" rows="3" name="00N9000000EaMfU" id="00N9000000EaMfU"></textarea>
                                        </p>

                                        <p>申込みボタンを押す前に再度内容をご確認の上、送信してください。</p>
                                        
                                        <input type="submit" value="申込む" name="booknow" class="btn btn-primary bookNow">
                                        <p></p>
                                    </div>
                                </div>
                    </div>
                                <!-- end hcomments-->
 
  
                    </div>
                    
                </div>
                
                
            </div>

        </form>
    </section>

          </div> <!-- col-sm-8 -->


          
        </div> <!-- row -->
      </div> <!-- subcontent -->
    </div>
    
    <?php addFooter(); ?>
    
  </div> <!-- container -->

  <?php addScripts(); ?>
<!--beginning validification-->

    <script type="text/javascript">
        $(document).ready(function () {
            document.getElementById("search").addEventListener("click", geoApiSearchByPostal);
            geoApiInitialize();

            //debugger;
            $('#exampleForm')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove'
                    },
                    fields: {
                        '00N9000000DrpdY': {
                            validators: {
                                notEmpty: {
                                    message: '10桁のANAマイレージ番号を入力してください'
                                }
                            }
                        },
                        'last_name': {
                            validators: {
                                notEmpty: {
                                    message: '姓を入力してください'
                                }
                            }
                        },
                        'first_name': {
                            validators: {
                                notEmpty: {
                                    message: '名前を入力してください'
                                }
                            }
                        },
                        // roman last name
                        '00N70000001wI2h': {
                            validators: {
                                notEmpty: {
                                    message: '姓をローマ字入力してください'
                                }
                            }
                        },
                        // roman first name
                        '00N70000001wI2w': {
                            validators: {
                                notEmpty: {
                                    message: '名前をローマ字入力してください'
                                }
                            }
                        },
                        // Income
                        '00N70000001hDUD': {
                            validators: {
                                notEmpty: {
                                    message: 'お選びください'
                                }
                            }
                        },
                        'geoapi-postal-3': {
                            validators: {
                                notEmpty: {
                                    message: '郵便番号を入力してください'
                                }
                            }
                        },
                        'geoapi-postal-4': {
                            validators: {
                                notEmpty: {
                                    message: ''
                                }
                            }
                        },
                        'phone': {
                            validators: {
                                notEmpty: {
                                    message: '電話番号をハイフンなしで番号のみ入力してください'
                                }
                            }
                        },
                        /*'email': {
                            validators: {
                                notEmpty: {
                                    message: 'Eメールアドレスを入力してください'
                                },
                                identical: {
                                    field: 'confirm_email',
                                    message: 'Eメールアドレスを確認してください'
                                }
                            }
                        },
                        'confirm_email': {
                            validators: {
                                notEmpty: {
                                    message: '確認の為再度Eメールアドレスを入力してください'
                                },
                                identical: {
                                    field: 'email',
                                    message: ''
                                }
                            }
                        },*/
                        // tour location
                        '00N9000000EaMff': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の場所をお選びください'
                                }
                            }
                        },
                        // tour date
                        '00N9000000EaMfe': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の日をお選びください'
                                }
                            }
                        },
                        // tour time
                        '00N9000000EaMfd': {
                            validators: {
                                notEmpty: {
                                    message: 'ご希望の時間をお選びください'
                                }
                            }
                        }
                        // opt in
                        /*'00N70000001wkiv': {
                            validators: {
                                notEmpty: {
                                    message: '必須項目です'
                                }
                            }
                        }*/
                    }
                })
        })
    </script>
<!--end of validification-->

</body>
</html>