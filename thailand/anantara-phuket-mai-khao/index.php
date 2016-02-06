<?php include("../../server-side/library.php");
if(isset($_GET["lang"])){
  $lang = $_GET["lang"];
}
else {
  $lang = "eng";	
}
?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Just minutes away are the tranquil sun kissed sands of Mai Khao – Phuket's longest beach. While the green forest of Sirinath National Park that fringes our resort is your gateway to an impressive natural playground of sea caves, mangroves, coral reefs and dazzling islands." />
  <title>Anantara Vacation Club Phuket Main Khao in Thailand</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Pool of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Patio of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Patio of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/09.jpg" alt="The Bedroom of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/10.jpg" alt="The Bedroom of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/11.jpg" alt="The Bedroom of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Living Area of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
          <div class="slide">
            <img src="img/06.jpg" alt="The Bedroom of the Anantara Vacation Club Phuket Mai Khao in Thailand" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <!-- 2015 -->
      <div id="points-container">
        <?php
      if($lang == "jpn"){
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 5/29 &ndash; 7/31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>400</td>
                    <td>800</td>
                    <td>500</td>
                    <td>3,700</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 4/10 &ndash; 5/28, 8/1 &ndash; 10/28</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>1,000</td>
                    <td>1,600</td>
                    <td>1,200</td>
                    <td>8,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 1/30 &ndash; 2/19, 2/27 &ndash; 4/15, 11/27 &ndash; 12/15</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>1,700</td>
                    <td>3,100</td>
                    <td>2,200</td>
                    <td>15,200</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
          <div class="col-sm-6">
          
           <!--  <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: Jan 1 &ndash; 2, Jan 31 &ndash; Feb 6, Dec 19 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Pool Villa</td>
                    <td>2,100</td>
                    <td>3,700</td>
                    <td>2,600</td>
                    <td>18,400</td>
                  </tr>
                </tbody>
              </table>
            </div> -->
            
          </div>
          
        </div>
    <!-- 
          <div class="row">
            <div class="col-sm-12 text-center">
              <p><img src="img/points-jpn.jpg" alt="" /></p>
            </div>
          </div> -->
        <?php
      }
      else {
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Silver: 5/29 &ndash; 7/31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>400</td>
                    <td>800</td>
                    <td>500</td>
                    <td>3,700</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>500</td>
                    <td>1,000</td>
                    <td>600</td>
                    <td>4,600</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Gold: 4/10 &ndash; 5/28, 8/1 &ndash; 10/28</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>500</td>
                    <td>800</td>
                    <td>600</td>
                    <td>4,200</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>600</td>
                    <td>1,100</td>
                    <td>800</td>
                    <td>5,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,000</td>
                    <td>1,600</td>
                    <td>1,200</td>
                    <td>8,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: 1/30 &ndash; 2/19, 2/27 &ndash; 4/15, 11/27 &ndash; 12/15</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>800</td>
                    <td>1,500</td>
                    <td>1,100</td>
                    <td>7,300</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,700</td>
                    <td>3,100</td>
                    <td>2,200</td>
                    <td>15,200</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
          <div class="col-sm-6">
          
           <!--  <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: Jan 1 &ndash; 2, Jan 31 &ndash; Feb 6, Dec 19 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>1,100</td>
                    <td>1,800</td>
                    <td>1,400</td>
                    <td>9,400</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,300</td>
                    <td>2,300</td>
                    <td>1,600</td>
                    <td>11,400</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Pool Villa</td>
                    <td>2,100</td>
                    <td>3,700</td>
                    <td>2,600</td>
                    <td>18,400</td>
                  </tr>
                </tbody>
              </table>
            </div> -->
            
          </div>
          
        </div>
        
        <?php
      }
    ?>
      </div>
      <!-- 2015 -->
      
      <!-- 2016 -->
      <div id="points-next-container">
        <?php
      if($lang == "jpn"){
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> シルバー: 5/30 &ndash; 7/31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>616</td>
                    <td>1,130</td>
                    <td>753</td>
                    <td>5,477</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>890</td>
                    <td>1,438</td>
                    <td>1,096</td>
                    <td>7,532</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> ゴールド: 4/17 &ndash; 30, 5/5 &ndash; 29, 8/1 &ndash; 9/30, 10/10 &ndash; 11/19</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>1,027</td>
                    <td>1,747</td>
                    <td>1,301</td>
                    <td>8,903</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> プラチナ: 1/4 &ndash; 2/4, 2/14 &ndash; 4/16, 5/1 &ndash; 4, 10/1 &ndash; 9, 11/20 &ndash; 12/20</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>1,096</td>
                    <td>1,918</td>
                    <td>1,370</td>
                    <td>9,590</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・スイート</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>2,260</td>
                    <td>4,007</td>
                    <td>2,808</td>
                    <td>19,862</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> ピーク: 1/1 &ndash; 3, 2/5 &ndash; 13, 12/21 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>部屋タイプ</th>
                    <th>月 &ndash; 木</th>
                    <th>金 &ndash; 土</th>
                    <th>日</th>
                    <th>7泊</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 ベッドルーム・スイート</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>1 ベッドルーム・プール・ヴィラ</td>
                    <td>1,849</td>
                    <td>3,356</td>
                    <td>2,329</td>
                    <td>16,437</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム</td>
                    <td>1,712</td>
                    <td>3,048</td>
                    <td>2,123</td>
                    <td>15,067</td>
                  </tr>
                  <tr>
                    <td>2 ベッドルーム・プール・ヴィラ</td>
                    <td>2,740</td>
                    <td>4,795</td>
                    <td>3,425</td>
                    <td>23,975</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        <?php
      }
      else {
    ?>  
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/silver.gif" alt="" class="level"> Silver: 5/30 &ndash; 7/31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>616</td>
                    <td>1,130</td>
                    <td>753</td>
                    <td>5,477</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>890</td>
                    <td>1,438</td>
                    <td>1,096</td>
                    <td>7,532</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>753</td>
                    <td>1,438</td>
                    <td>959</td>
                    <td>6,847</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,233</td>
                    <td>2,226</td>
                    <td>1,575</td>
                    <td>10,959</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover gold">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/gold.gif" alt="" class="level"> Gold: 4/17 &ndash; 30, 5/5 &ndash; 29, 8/1 &ndash; 9/30, 10/10 &ndash; 11/19</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>685</td>
                    <td>1,267</td>
                    <td>890</td>
                    <td>6,164</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,027</td>
                    <td>1,747</td>
                    <td>1,301</td>
                    <td>8,903</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>959</td>
                    <td>1,610</td>
                    <td>1,164</td>
                    <td>8,220</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <br />
        
        <div class="row">
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover platinum">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/platinum.gif" alt="" class="level"> Platinum: 1/4 &ndash; 2/4, 2/14 &ndash; 4/16, 5/1 &ndash; 4, 10/1 &ndash; 9, 11/20 &ndash; 12/20</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1-Bedroom</td>
                    <td>1,096</td>
                    <td>1,918</td>
                    <td>1,370</td>
                    <td>9,590</td>
                  </tr>
                  <tr>
                    <td>1-Bedroom Pool Villa</td>
                    <td>1,575</td>
                    <td>2,705</td>
                    <td>1,986</td>
                    <td>13,696</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>2-Bedroom Pool Villa</td>
                    <td>2,260</td>
                    <td>4,007</td>
                    <td>2,808</td>
                    <td>19,862</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover holiday">
                <thead>
                  <tr>
                    <th colspan="5"><img src="../../img/holiday.gif" alt="" class="level"> Peak: 1/1 &ndash; 3, 2/5 &ndash; 13, 12/21 &ndash; 31</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Mon &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>Sun</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>1,438</td>
                    <td>2,397</td>
                    <td>1,781</td>
                    <td>12,327</td>
                  </tr>
                  <tr>
                    <td>1 Bedroom Pool Villa</td>
                    <td>1,849</td>
                    <td>3,356</td>
                    <td>2,329</td>
                    <td>16,437</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,712</td>
                    <td>3,048</td>
                    <td>2,123</td>
                    <td>15,067</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom Pool Villa</td>
                    <td>2,740</td>
                    <td>4,795</td>
                    <td>3,425</td>
                    <td>23,975</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div>
        
        <?php
      }
    ?>
      </div>
      <!-- 2016 -->

      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <?php
		if($lang == "jpn"){
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>アナンタラ・バケーション・クラブ・プーケット・マイカオ</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">写真</a></li>
          <li><a href="#" id="points-link">必要ポイント数 (2015)</a></li>
          <li><a href="#" id="points-next-link">必要ポイント数 (2016)</a></li>
          <li><a href="#" id="map-link">地図</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>タイ、プーケット島マイカオ</h2>
    </div>
    
      <?php
		}
		else {
	  ?>
      
      <div class="banner-caption resort-title">
        <h1>Anantara Vacation Club Phuket Mai Khao</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart (2015)</a></li>
          <li><a href="#" id="points-next-link">Points Chart (2016)</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Mai Khao, Thalang, Phuket, Thailand</h2>
    </div>
    
      <?php
		}
	  ?>
    
    <div id="subcontent" class="content">
    
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="placeholder-container">
            <div id="placeholder"></div>
          </div>
        </div>
      </div>
    
      <div class="row">
      
        <div class="col-sm-8 main-column">
        
          <?php
			if($lang == "jpn"){
		  ?>
          
          <h3>概要</h3>
          <address>887 Moo 3, Mai Khao, Thalang, Phuket, Thailand</address>
          <p>穏やかな太陽光が砂浜に降り注ぐ、プーケットで最長の規模を誇るマイカオビーチは、リゾートからほんの少し足を延ばしたところに位置しています。緑生い茂るサリナス国立公園がリゾートを取り囲んでおり、海蝕洞やマングローブ、サンゴ礁や魅力的な島々といった自然豊かで素晴らしい遊び場への玄関口となっています。羨むほどのロケーションは、驚くべき自然の謎を探求するための手段が無数に用意されています。あるいは、豊かな南国の自然に囲い込まれた非日常的な空間でひっそりと過ごし、寛ぐことを重点にした旅行先としてご利用いただくことも、もう一つの選択肢でしょう。ここでしか体験できないアクティビティの数々は、休暇を過ごす上で新たな次元を広げ、最高級の宿泊設備は、人里離れたこの上なく贅沢な空間と異国情緒に富んだ心地良さを味わい楽しむことを可能としています。</p>
          
          <br />
          
          <h3>宿泊施設</h3>
          <p>1ベッドルーム・タイプと2ベッドルーム・タイプの専用プール付きのヴィラをご用意しており、十分な満足感に浸っていただけることでしょう。また1ベッドルーム・タイプと2ベッドルーム・タイプのスイートは、全て6階建ての棟に位置し、実に広々とした空間となっています。タイ風の意匠を取り入れた豪華かつ現代的なデザインを採用し、心地良さを重視して選び抜かれた設備の数々と共に寛ぎの時を過ごしていただけます。それぞれのヴィラと スイート は、リビングとダイニングが別々に備わり、フルキッチンも完備しております。楽園にいながらにしてまるで我が家の様な気兼ねなさを感じられる造りとなっています。 </p>
          
          <br />
          
          <h3>リゾート設備</h3>
          <ul>
            <li>ジャグジー付きのメインプール</li>
            <li>お子様向けプール</li>
            <li>フィットネス施設</li>
            <li>自転車レンタル</li>
            <li>タイ風庭園と遊歩道</li>
            <li>アクティビティセンター</li>
            <li>キッズ・クラブ（お子様向けの娯楽施設、保育サービス）</li>
            <li>プールバー</li>
            <li>終日営業のダイニング・レストラン、ワインショップ、デリ</li>
            <li>料理教室</li>
            <li>アナンタラ・スパ</li>
            <li>小さなスーパーマーケットやレストラン、店などが立ち並ぶタートル・ヴィレッジに近接</li>
          </ul>
          
          <br />
          
          <h3>追加情報</h3>
          <p>チェックイン: 3 p.m.<br />チェックアウト: 12 p.m.</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3><a href="http://www.hgvc.co.jp/inquiry/">詳細情報のリクエスト</a></h3>
          
          <?php
			}
			else {
		  ?>
        
          <h3>Overview</h3>
          <address>887 Moo 3, Mai Khao, Thalang, Phuket, Thailand</address>
          <p>Just a few minutes walk away are the tranquil sun kissed sands of Mai Khao &ndash; Phuket's longest beach. While the green forest of Sirinath National Park that fringes our resort is your gateway to an impressive natural playground of sea caves, mangroves, coral reefs and dazzling islands.</p>
          <p>Such an enviable location offers a myriad of ways to discover amazing natural wonders. Alternatively Anantara guests can hideaway at our lushly tropical enclosed compound and indulge in total relaxation. Add a new dimension to your holiday with a collection of signature activities, and savour the blissful seclusion and exotic comforts of our superlative accommodation.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <p>Indulge in the exclusive tropical pleasures that our 30 One and Two Bedroom Pool Villas afford. Or choose from 68 One and Two Bedroom Suites, all located in the resort's six story complex and offering truly generous space. Take exotic inspiration from elegant Thai decor and unwind with a wealth of elite creature comforts. While each suite and villa features a separate living and dining area, as well as a fully equipped kitchen, for the ultimate home away from home in paradise.</p>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Freeform swimming pool and Jacuzzi</li>
            <li>Children's wading pool</li>
            <li>Fitness studio</li>
            <li>Complimentary bicycles</li>
            <li>Thai inspired landscaped gardens and walkways</li>
            <li>Activities centre</li>
            <li>Kids' club, children's playground and childcare services</li>
            <li>Poolside salad bar</li>
            <li>All day dining restaurant, wine shop and take away deli</li>
            <li>Anantara Cooking School</li>
            <li>Anantara Spa</li>
            <li>Nearby Turtle Village featuring a mini supermarket, restaurants and speciality shops</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 3 p.m.<br />Check Out: 12 p.m.</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
          <?php
			}
		  ?>
          
        </div>
        
      </div>
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
  <script type="text/javascript" src="../../js/swipe.js"></script>
  <script type="text/javascript" src="../../js/resorts.js"></script>
  <script type="text/javascript">
	$(document).ready(function(e){ 
	  getMap(8.181671, 98.306176, 16);
    });
  </script>

</body>
</html>