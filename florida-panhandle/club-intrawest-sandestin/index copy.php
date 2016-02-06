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
  <meta name="description" content="Nestled between the Emerald Coast and the Choctawhatchee Bay, Club Intrawest &ndash; Sandestin offers a stunning setting for warm-weather fun." />
  <title>Club Intrawest &ndash; Sandestin Resort by Hilton Grand Vacations in Sandestin, Florida</title>
  <?php addStyles(); ?>
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
    
      <div id="photosSlider" class="swipe">
        <div class="swipe-wrap">
          
          <div class="slide">
            <img src="img/01.jpg" alt="The Exterior at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/02.jpg" alt="The Living Area at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/03.jpg" alt="The Pool at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/04.jpg" alt="The Golf Course at Club Intrawest &ndash; Sandestin" />
          </div>
          
          <div class="slide">
            <img src="img/05.jpg" alt="The Beach at Club Intrawest &ndash; Sandestin" />
          </div>
          
        </div>
        <span id="left-arrow" class="arrow"></span>
        <span id="right-arrow" class="arrow"></span>
      </div>
      
      <div id="points-container">
      	
        <div class="row">
        
          <div class="col-sm-6">
        
            <div class="table-responsive">
              <table class="table table-hover silver">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/silver.gif" alt="" class="level" /> Silver: Weeks 1 &ndash; 6, 48, 49</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>320</td>
                    <td>544</td>
                    <td>2,688</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>384</td>
                    <td>640</td>
                    <td>3,200</td>
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
                    <th colspan="4"><img src="../../img/gold.gif" alt="" class="level" /> Gold: Weeks 36 &ndash; 46, 51, 52</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>544</td>
                    <td>896</td>
                    <td>4,512</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,376</td>
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
                    <th colspan="4"><img src="../../img/platinum.gif" alt="" class="level" /> Platinum: Weeks 7 &ndash;  9, 11, 13 &ndash; 24, 30 &ndash; 34</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>640</td>
                    <td>1,056</td>
                    <td>5,312</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>768</td>
                    <td>1,280</td>
                    <td>6,400</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Silver + Gold): Week 50</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>320</td>
                    <td>896</td>
                    <td>3,392</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>384</td>
                    <td>1,088</td>
                    <td>4,096</td>
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
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Gold + Platinum): Week 47</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>544</td>
                    <td>640</td>
                    <td>1,056</td>
                    <td>5,024</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>640</td>
                    <td>768</td>
                    <td>1,280</td>
                    <td>6,016</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
        
          <div class="col-sm-6">
          
            <div class="table-responsive">
              <table class="table table-hover mixed">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed.gif" alt="" class="level" /> Mixed (Platinum + Gold): Week 35</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &amp; Thurs</th>
                    <th>Mon &ndash; Wed</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>640</td>
                    <td>544</td>
                    <td>896</td>
                    <td>4,608</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>768</td>
                    <td>640</td>
                    <td>1,088</td>
                    <td>5,504</td>
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
              <table class="table table-hover mixed-holiday">
                <thead>
                  <tr>
                    <th colspan="4"><img src="../../img/mixed-holiday.gif" alt="" class="level" /> Mixed (Holiday + Platinum): Weeks 10, 12</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>896</td>
                    <td>1,056</td>
                    <td>6,592</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,088</td>
                    <td>1,280</td>
                    <td>8,000</td>
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
                    <th colspan="4"><img src="../../img/holiday.gif" alt="" class="level" /> Holiday: Weeks 25 &ndash; 29</th>
                  </tr>
                  <tr>
                    <th>Unit Size</th>
                    <th>Sun &ndash; Thurs</th>
                    <th>Fri &ndash; Sat</th>
                    <th>7 Night</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1 Bedroom</td>
                    <td>896</td>
                    <td>896</td>
                    <td>6,272</td>
                  </tr>
                  <tr>
                    <td>2 Bedroom</td>
                    <td>1,088</td>
                    <td>1,088</td>
                    <td>7,616</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          </div>
          
        </div> 
           
      </div>
      
      <div id="map-container">
        <div id="map"></div>
      </div>
      
      <div class="banner-caption resort-title">
        <h1>Club Intrawest &ndash; Sandestin</h1>
      </div>
      
      <div id="resorts-options" class="hidden-xs">
        <ul>
          <li><a href="#" id="photos-link" class="active">Photos (<span id="photo-count"></span>)</a></li>
          <li><a href="#" id="points-link">Points Chart</a></li>
          <li><a href="#" id="map-link">Map</a></li>
        </ul>
      </div>
      
    </div>
    
    <div id="subtitle">
      <h2>Sandestin, Florida</h2>
    </div>
    
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
        
          <h3>Overview</h3>
          <address>8626 Baytowne Marina, Sandestin, FL 32550</address>
          <p>This inviting waterfront resort treats guests to miles of pristine sandy beaches, sun-drenched days and quiet Southern nights. Nestled between the Emerald Coast and the Choctawhatchee Bay, Club Intrawest &ndash; Sandestin offers a stunning setting for warm-weather fun. Indulge in the casual elegance of this distinctive resort. Sink into a deep Hemingway lounger for a laid-back evening on your private terrace and unwind to the nighttime sounds of boats gently creaking in the marina waters. For kids and kids-at-heart, Sandestin is a water sports extravaganza. Kayak, snorkel or water ski on the calm bay waters, or parasail over the Gulf of Mexico.</p>
          <p>Club Intrawest &ndash; Sandestin does not allow motorcycles, boats or jet skis, trailers or motor homes on the property. Arrangements for off-site storage can be made by contacting Club Intrawest &ndash; Sandestin directly at 1-850-622-3400.</p>
          
          <br />
          
          <h3>Accommodations</h3>
          <ul>
            <li>Spacious 1 and 2 bedroom suites</li>
            <li>Each suite features fully equipped, gourmet kitchen</li>
            <li>Complimentary high-speed, wireless Internet access</li>
          </ul>
          
          <br />
          
          <h3>Resort Features</h3>
          <ul>
            <li>Swimming pool, sundeck and 2 hot tubs</li>
            <li>Children's wading area and pool</li>
            <li>Laundry facilities on property</li>
            <li>Exercise Facilities</li>
          </ul>
          
          <br />
          
          <h3>Additional Info</h3>
          <p>Check In: 4 p.m.<br />Check Out: 11 a.m.<br />Phone: 850-622-3400</p>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Request Pricing</h3>
          <p class="text-center"><img src="../../discover/img/request-info.jpg" alt="Request Information About Vacation Ownership with Hilton Grand Vacations" /></p>
          <p>Discover the many benefits of vacation ownership and open up a world of Grand Vacations!</p>
          <p><a href="<?php echo getHost(); ?>discover/" class="btn btn-primary">Learn More &raquo;</a></p>
          
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
	  getMap(30.384792, -86.324295, 13);
    });
  </script>

</body>
</html>