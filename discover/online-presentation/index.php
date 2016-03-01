<?php include("../../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Get more information on vacation ownership with Hilton Grand Vacations Club by filling out our contact form." />
  <title>Request an Online Presentation from Hilton Grand Vacations</title>
  <?php addStyles(); ?>
  <link type="text/css" rel="stylesheet" href="../../css/multiple-select.css" />
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
      <img src="../img/banner.jpg" alt="Discover Vacation Ownership with Hilton Grand Vacations" />
      <div class="banner-caption">
        <h1>Discover</h1>
      </div>
    </div>
    
    <div id="subtitle">
      <h2>Vacation Ownership</h2>
    </div>
    
    <div id="subcontent" class="content">
      <div class="row">
      
        <div class="col-sm-8 main-column">
        
          <h1>Request a Live Online Presentation</h1>
          <p>Please take a few minutes to fill out the following form and we will contact you to confirm a time for a live presentation.</p>
          <p>Fields denoted with an asterick (*) are required.</p>
          
          <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"  method="post">
            
            <input type=hidden name="oid" value="00D300000001JJN">
            <input type="hidden" id="leadID" name="leadID" />
            <input type="hidden" value="<?php echo getHost(); ?>discover/success/" id="success" name="success" />
            <input type=hidden name="retURL" value="<?php echo getHost(); ?>discover/success/" id="success" name="success" />
            <input type="hidden" value="FONPRES" id="formCode" name="formCode" />
            <input type="hidden" id="00N30000001E0U8" name="00N30000001E0U8" value="FONPRES" />
            <input type="hidden" id="Campaign_ID" name="Campaign_ID" value="70150000000gTNd" />
            <input type="hidden" id="company" name="company" value="FirstLastName_Company" />
            <input type="hidden" id="lead_source" name="lead_source" value="WebToLead" />
            <input type="hidden" id="recordType" name="recordType" value="012300000000apE" />
            <input type="hidden" id="00N30000000zOWh" name="00N30000000zOWh" value="New Owner" />
            <input type="hidden" id="member_status" name="member_status" value="Responded" />

          
            <div class="form-group">
              <label for="firstName1" class="control-label col-sm-5">First Name *</label>
              <div class="col-sm-7">
                <input type="text" id="first_name" name="first_name" class="form-control required" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="lastName1" class="control-label col-sm-5">Last Name *</label>
              <div class="col-sm-7">
                <input type="text" id="last_name" name="last_name" class="form-control required" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="emailAddress1" class="control-label col-sm-5">Email *</label>
              <div class="col-sm-7">
                <input type="email" id="email" name="email" class="form-control required" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="homePhone" class="control-label col-sm-5">Phone *</label>
              <div class="col-sm-7">
                <input type="tel" id="phone" name="phone" class="form-control required" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="state" class="control-label col-sm-5">State</label>
              <div class="col-sm-7">
                <select id="state" name="state" class="form-control">
                  <option selected="selected"></option>
                  <option value="UNK">Outside US / Canada</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AB">Alberta</option>
                  <option value="AS">American Samoa</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="AA">Armed Forces Americas</option>
                  <option value="AE">Armed Forces Europe</option>
                  <option value="AP">Armed Forces Pacific</option>
                  <option value="BC">British Columbia</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="GU">Guam</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MB">Manitoba</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NB">New Brunswick</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NF">Newfoundland</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="MP">Northern Mariana Is</option>
                  <option value="NT">Northwest Territories</option>
                  <option value="NS">Nova Scotia</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="ON">Ontario</option>
                  <option value="OR">Oregon</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="PE">Prince Edward Island</option>
                  <option value="PQ">Province du Quebec</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SK">Saskatchewan</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VI">Virgin Islands</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                  <option value="YT">Yukon Territory</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>

			<div class="form-group">
              <label for="date1" class="control-label col-sm-5">Preferred Date</label>
              <div class="col-sm-7"><span class="dateInput dateOnlyInput">
                <input type="text" id="00N50000003eeTg" name="00N50000003eeTg" class="form-control" />
              </span></div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="time1" class="control-label col-sm-5">Preferred Time</label>
              <div class="col-sm-7">
                <select id="00N50000003eeTh" name="00N50000003eeTh" class="form-control">
                  <option selected="selected"></option>
                  <option value="9am">9 AM</option>
                  <option value="10am">10 AM</option>
                  <option value="11am">11 AM</option>
                  <option value="12pm">12 PM</option>
                  <option value="1pm">1 PM</option>
                  <option value="2pm">2 PM</option>
                  <option value="3pm">3 PM</option>
                  <option value="4pm">4 PM</option>
                  <option value="5pm">5 PM</option>
                  <option value="5pm">6 PM</option>
                  <option value="5pm">7 PM</option>
                  <option value="5pm">8 PM</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="date2" class="control-label col-sm-5">Alternate Date</label>
              <div class="col-sm-7"><span class="dateInput dateOnlyInput">
                <input type="text" id="00N50000003eeTe" name="00N50000003eeTe" class="form-control" />
              </span></div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="time2" class="control-label col-sm-5">Alternate Time</label>
              <div class="col-sm-7">
                <select id="00N50000003eeTf" name="00N50000003eeTf" class="form-control">
                  <option selected="selected"></option>
                  <option value="9am">9 AM</option>
                  <option value="10am">10 AM</option>
                  <option value="11am">11 AM</option>
                  <option value="12pm">12 PM</option>
                  <option value="1pm">1 PM</option>
                  <option value="2pm">2 PM</option>
                  <option value="3pm">3 PM</option>
                  <option value="4pm">4 PM</option>
                  <option value="5pm">5 PM</option>
                  <option value="5pm">6 PM</option>
                  <option value="5pm">7 PM</option>
                  <option value="5pm">8 PM</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="TimeZone" class="control-label col-sm-5">Time Zone</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbs" name="00N50000003Ahbs" class="form-control">
                  <option selected="selected" value="EST">EST</option>
                  <option value="CEN">CEN</option>
                  <option value="MOU">MOU</option>
                  <option value="PAC">PAC</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="message" class="control-label col-sm-5">Message or Question</label>
              <div class="col-sm-7">
                <input type="text" id="00N50000003Ahbu" name="00N50000003Ahbu" class="form-control" />
                <!--<textarea id="Message" name="Message" class="form-control" rows="6"></textarea>-->
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="col-sm-offset-4">
            
              <div id="error-message"></div>
              <p class="text-center"><a href="#" class="btn btn-primary" id="submit-btn">Submit</a></p>
              
            </div>
            
          </form>
          
          <br />
            
        </div>
        <div class="col-sm-4 aside">
        
          <h3>Other Information</h3>
          <p class="text-center"><img src="../img/request-info.jpg" alt="Request Information About Ownership with Hilton Grand Vacations" /></p>
          <p><a href="../additional-info/">Request Additional Info</a></p>
          <p>We invite you to learn about the many benefits of Hilton Grand Vacations ownership.</p>
          
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