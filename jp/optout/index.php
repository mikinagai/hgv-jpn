<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Unsubscribe from Hilton Grand Vacations." />
  <title>Eメール配信停止フォーム</title>
  <?php addStyles(); ?>
  <link type="text/css" rel="stylesheet" href="../css/multiple-select.css" />
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subcontent" class="content">
      <div class="row">
      
        <div class="col-sm-8 main-column2 col-md-7">
        
          <h1>ご案内Eメール配信停止フォーム</h1>
        <p>今後、弊社からのメール配信停止をご希望される場合は、現在弊社からキャンペーンなどのご案内メールをお届けしているメールアドレスを、下記欄にご入力ください。</p>
        <p>※なお、お送りさせていただいておりますメールアドレスは、メール本文内でご確認いただけます。</p>
          
          <form action="http://hfwwbhgv01sv:8100/Application/Uat/1.0.163.4502/FormsHandler/OptOutEmail.aspx" method="post" name="optout" id="optout">
          
          	<input type="hidden" name="success" id="success" value="http://www.hiltongrandvacations.com/optout/success.php" />
            <input type="hidden" name="doccode" id="doccode" value="" />
            
            <div class="form-group col-md-11">
              <label for="emailAddress1" class="control-label col-sm-5">配信停止希望のメールアドレス<br>
*半角英数字で入力してください</label>
              <div class="col-sm-7">
                <input type="email" id="email" name="a" class="form-control required" />
              </div>
              <div class="clearfix"></div>
            </div>
                    
            <div class="col-sm-offset-4 col-md-7">
            
              <div id="error-message"></div>
              <p class="text-center"><input type="submit" name="act" value="送信する" class="btn btn-primary" id="submit-btn" /></p>
              
              
            </div>
            
          </form>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>お問い合わせ</h3>
          <p class="dec-dotted-line">購入前のお客様向け総合受付</p>
          <h3>0120-805-817</h3>
          <p>（月〜土・祝 9:30 a.m. 〜 6:00 p.m. 日曜休み)</p>
          <br/><br/>

          <p class="dec-dotted-line">クラブメンバー様向け総合受付</p>
          <h3>0120-805-811</h3>
          <p>(月〜土 9:00 a.m. 〜 6:00 p.m. 日・祝休み)</p>
          
        </div>
        
      </div>
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../../js/jquery.multiple.select.js"></script>
  <script type="text/javascript" src="../../js/discover.js"></script>

</body>
</html>