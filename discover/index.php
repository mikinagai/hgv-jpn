<?php include("../server-side/library.php"); ?>
<!doctype html>
<html>
<head>
  <meta name="description" content="Get more information on vacation ownership with Hilton Grand Vacations Club by filling out our contact form." />
  <title>Discover Vacation Ownership with Hilton Grand Vacations</title>
  <?php addStyles(); ?>
  <link type="text/css" rel="stylesheet" href="../css/multiple-select.css" />
</head>
<body>

  <div class="container">
  
    <?php addHeader(); ?>
    
    <div id="subbanner">
      <img src="img/banner.jpg" alt="Discover Vacation Ownership with Hilton Grand Vacations" />
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
        
          <h1>Contact Us</h1>
          <p>Thank you for your interest! We invite you to call us toll free at 1-800-230-7068 or complete the form below and we will contact you as soon as possible.</p>
          <p>Fields denoted with an asterisk (*) are required.</p>
          
          <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"  method="post" name="form" id="discoverform">
            
            <input type="hidden" name="oid" value="00D300000001JJN">
            <input type="hidden" id="Campaign_ID" name="Campaign_ID" value="701500000006gXA" />
            <input type="hidden" id="leadID" name="leadID" />
            <input type="hidden" value="<?php echo getHost(); ?>discover/success/" id="success" name="success" />
            <input type="hidden" id="retURL" name="retURL" value="<?php echo getHost(); ?>discover/success/" />
            <input type="hidden" id="company" name="company" value="FirstLastName_Company" />
            <input type="hidden" id="lead_source" name="lead_source" value="WebToLead" />
            <input type="hidden" id="recordType" name="recordType" value="012300000000apE" />
            <input type="hidden" id="00N30000000zOWh" name="00N30000000zOWh" value="New Owner" />
            <input type="hidden" id="00N30000001E0U8" name="00N30000001E0U8" value="FOWNAPLY" />
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
              <label for="BestTimeToCall" class="control-label col-sm-5">Best Time To Call</label>
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-sm-3 no-padding-left">
                    <select  id="00N50000003Ahbp" name="00N50000003Ahbp" title="BestTimeToCall" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                  </div>
                  <div class="col-sm-3 no-padding-middle">
                    <select id="00N50000003Ahbq" name="00N50000003Ahbq" title="CallAmOrPm" class="form-control">
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </div>
                  <div class="col-sm-3 no-padding-middle">
                    <select id="00N50000003Ahbr" name="00N50000003Ahbr" title="CallDayOfWeek" class="form-control">
                      <option value="Monday">Mon</option>
                      <option value="Tuesday">Tue</option>
                      <option value="Wednesday">Wed</option>
                      <option value="Thursday">Thu</option>
                      <option value="Friday">Fri</option>
                      <option value="Saturday">Sat</option>
                      <option value="Sunday">Sun</option>
                    </select>
                  </div>
                  <div class="col-sm-3 no-padding-right">
                    <select id="00N50000003Ahbs" name="00N50000003Ahbs" title="CallTimeZone" class="form-control">
                      <option value="EST">EST</option>
                      <option value="CEN">CEN</option>
                      <option value="MOU">MOU</option>
                      <option value="PAC">PAC</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="address1" class="control-label col-sm-5">Address</label>
              <div class="col-sm-7">
                <input type="text" id="street" name="street" class="form-control" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="city" class="control-label col-sm-5">City</label>
              <div class="col-sm-7">
                <input type="text" id="city" name="city" class="form-control" />
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
              <label for="postalCode" class="control-label col-sm-5">Zip Code</label>
              <div class="col-sm-7">
                <input type="text" id="zip" name="zip" class="form-control" />
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="countryCode" class="control-label col-sm-5">Country</label>
              <div class="col-sm-7">
                <select id="country" name="country" class="form-control">
                  <option selected="selected"></option>
                  <option value="USA">USA</option>
                  <option value="CAN">Canada</option>
                  <option value="DEU">Germany</option>
                  <option value="FRA">France</option>
                  <option value="GBR">United Kingdom</option>
                  <option>---------------------</option>
                  <option value="AFG">Afghanistan</option>
                  <option value="ALB">Albania</option>
                  <option value="DZA">Algeria</option>
                  <option value="ASM">American Samoa</option>
                  <option value="AND">Andorra</option>
                  <option value="AGO">Angola</option>
                  <option value="AIA">Anguilla</option>
                  <option value="ATA">Antarctica</option>
                  <option value="ATG">Antigua/Barbuda</option>
                  <option value="ARG">Argentina</option>
                  <option value="ARM">Armenia</option>
                  <option value="ABW">Aruba</option>
                  <option value="AUS">Australia</option>
                  <option value="AUT">Austria</option>
                  <option value="AZE">Azerbaijan</option>
                  <option value="BHS">Bahamas</option>
                  <option value="BHR">Bahrain</option>
                  <option value="BGD">Bangladesh</option>
                  <option value="BRB">Barbados</option>
                  <option value="BLR">Belarus</option>
                  <option value="BEL">Belgium</option>
                  <option value="BLZ">Belize</option>
                  <option value="BEN">Benin</option>
                  <option value="BMU">Bermuda</option>
                  <option value="BTN">Bhutan</option>
                  <option value="BOL">Bolivia</option>
                  <option value="BIH">Bosnia/Herzegowina</option>
                  <option value="BWA">Botswana</option>
                  <option value="BVT">Bouvet Island</option>
                  <option value="BRA">Brazil</option>
                  <option value="BRN">Brunei Darussalam</option>
                  <option value="BGR">Bulgaria</option>
                  <option value="BFA">Burkina Faso</option>
                  <option value="BDI">Burundi</option>
                  <option value="KHM">Cambodia</option>
                  <option value="CMR">Cameroon</option>
                  <option value="CPV">Cape Verde</option>
                  <option value="CYM">Cayman Islands</option>
                  <option value="CAF">Central African Republic</option>
                  <option value="TCD">Chad</option>
                  <option value="CHL">Chile</option>
                  <option value="CHN">China</option>
                  <option value="CXR">Christmas Island</option>
                  <option value="COL">Colombia</option>
                  <option value="COM">Comoros</option>
                  <option value="COG">Congo</option>
                  <option value="COK">Cook Islands</option>
                  <option value="CRI">Costa Rica</option>
                  <option value="CIV">Cote Divoire</option>
                  <option value="HRV">Croatia</option>
                  <option value="CUB">Cuba</option>
                  <option value="CYP">Cyprus</option>
                  <option value="CZE">Czech Republic</option>
                  <option value="DNK">Denmark</option>
                  <option value="DJI">Djibouti</option>
                  <option value="DMA">Dominica</option>
                  <option value="DOM">Dominican Republic</option>
                  <option value="TMP">East Timor</option>
                  <option value="ECU">Ecuador</option>
                  <option value="EGY">Egypt</option>
                  <option value="SLV">El Salvador</option>
                  <option value="GNQ">Equatorial Guinea</option>
                  <option value="ERI">Eritrea</option>
                  <option value="EST">Estonia</option>
                  <option value="ETH">Ethiopia</option>
                  <option value="FLK">Falkland Islands</option>
                  <option value="FRO">Faroe Islands</option>
                  <option value="FJI">Fiji</option>
                  <option value="FIN">Finland</option>
                  <option value="FXX">France, Metropolitan</option>
                  <option value="GUF">French Guiana</option>
                  <option value="PYF">French Polynesia</option>
                  <option value="GAB">Gabon</option>
                  <option value="GMB">Gambia</option>
                  <option value="GEO">Georgia</option>
                  <option value="GHA">Ghana</option>
                  <option value="GIB">Gibraltar</option>
                  <option value="GRC">Greece</option>
                  <option value="GRL">Greenland</option>
                  <option value="GRD">Grenada</option>
                  <option value="GLP">Guadeloupe</option>
                  <option value="GUM">Guam</option>
                  <option value="GTM">Guatemala</option>
                  <option value="GIN">Guinea</option>
                  <option value="GNB">Guinea-Bissau</option>
                  <option value="GUY">Guyana</option>
                  <option value="HTI">Haiti</option>
                  <option value="HND">Honduras</option>
                  <option value="HKG">Hong Kong</option>
                  <option value="HUN">Hungary</option>
                  <option value="ISL">Iceland</option>
                  <option value="IND">India</option>
                  <option value="IDN">Indonesia</option>
                  <option value="IRN">Iran</option>
                  <option value="IRQ">Iraq</option>
                  <option value="IRL">Ireland</option>
                  <option value="ISR">Israel</option>
                  <option value="ITA">Italy</option>
                  <option value="JAM">Jamaica</option>
                  <option value="JPN">Japan</option>
                  <option value="JOR">Jordan</option>
                  <option value="KAZ">Kazakhstan</option>
                  <option value="KEN">Kenya</option>
                  <option value="KIR">Kiribati</option>
                  <option value="KOR">Korea, Republic of</option>
                  <option value="KWT">Kuwait</option>
                  <option value="KGZ">Kyrgyzstan</option>
                  <option value="LVA">Latvia</option>
                  <option value="LBN">Lebanon</option>
                  <option value="LSO">Lesotho</option>
                  <option value="LBR">Liberia</option>
                  <option value="LBY">Libyan Arab Jamahiriya</option>
                  <option value="LIE">Liechtenstein</option>
                  <option value="LTU">Lithuania</option>
                  <option value="LUX">Luxembourg</option>
                  <option value="MAC">Macau</option>
                  <option value="MKD">Macedonia</option>
                  <option value="MDG">Madagascar</option>
                  <option value="MWI">Malawi</option>
                  <option value="MYS">Malaysia</option>
                  <option value="MDV">Maldives</option>
                  <option value="MLI">Mali</option>
                  <option value="MLT">Malta</option>
                  <option value="MHL">Marshall Islands</option>
                  <option value="MTQ">Martinique</option>
                  <option value="MRT">Mauritania</option>
                  <option value="MVS">Mauritius</option>
                  <option value="MYT">Mayotte</option>
                  <option value="MEX">Mexico</option>
                  <option value="FSM">Micronesia</option>
                  <option value="MDA">Moldova</option>
                  <option value="MCO">Monaco</option>
                  <option value="MNG">Mongolia</option>
                  <option value="MSR">Montserrat</option>
                  <option value="MAR">Morocco</option>
                  <option value="MOZ">Mozambique</option>
                  <option value="MMR">Myanmar</option>
                  <option value="NAM">Namibia</option>
                  <option value="NRU">Nauru</option>
                  <option value="NPL">Nepal</option>
                  <option value="NLD">Netherlands</option>
                  <option value="ANT">Netherlands Antilles</option>
                  <option value="NCL">New Caledonia</option>
                  <option value="NZL">New Zealand</option>
                  <option value="NIC">Nicaragua</option>
                  <option value="NER">Niger</option>
                  <option value="NGA">Nigeria</option>
                  <option value="NIU">Niue</option>
                  <option value="NFK">Norfolk Island</option>
                  <option value="MNP">Northern Mariana Islands</option>
                  <option value="MOR">Norway</option>
                  <option value="OMN">Oman</option>
                  <option value="PAK">Pakistan</option>
                  <option value="PLW">Palau</option>
                  <option value="PAN">Panama</option>
                  <option value="PNG">Papua New Guinea</option>
                  <option value="PRY">Paraguay</option>
                  <option value="PER">Peru</option>
                  <option value="PHL">Philippines</option>
                  <option value="PCN">Pitcairn</option>
                  <option value="POL">Poland</option>
                  <option value="PRT">Portugal</option>
                  <option value="PRI">Puerto Rico</option>
                  <option value="QAT">Qatar</option>
                  <option value="REU">Reunion</option>
                  <option value="ROM">Romania</option>
                  <option value="RUS">Russian Federation</option>
                  <option value="RWA">Rwanda</option>
                  <option value="KNA">Saint Kitts and Nevis</option>
                  <option value="LCA">Saint Lucia</option>
                  <option value="WSM">Samoa</option>
                  <option value="SMR">San Marino</option>
                  <option value="STP">Sao Tome and Principe</option>
                  <option value="SAU">Saudi Arabia</option>
                  <option value="SEN">Senegal</option>
                  <option value="SYC">Seychelles</option>
                  <option value="SLE">Sierra Leone</option>
                  <option value="SGP">Singapore</option>
                  <option value="SVK">Slovakia </option>
                  <option value="SVN">Slovenia</option>
                  <option value="SLB">Solomon Islands</option>
                  <option value="SOM">Somalia</option>
                  <option value="ZAF">South Africa</option>
                  <option value="ESP">Spain</option>
                  <option value="LKA">Sri Lanka</option>
                  <option value="SHN">St. Helena</option>
                  <option value="SPM">St. Pierre and Miquelon</option>
                  <option value="SDN">Sudan</option>
                  <option value="SUR">Suriname</option>
                  <option value="SWZ">Swaziland</option>
                  <option value="SWE">Sweden</option>
                  <option value="CHE">Switzerland</option>
                  <option value="SYR">Syrian Arab Republic</option>
                  <option value="TWN">Taiwan</option>
                  <option value="TJK">Tajikistan</option>
                  <option value="TZA">Tanzania</option>
                  <option value="THA">Thailand</option>
                  <option value="TGO">Togo</option>
                  <option value="TKL">Tokelau</option>
                  <option value="TON">Tonga</option>
                  <option value="TTO">Trinidad and Tobago</option>
                  <option value="TUN">Tunisia</option>
                  <option value="TUR">Turkey</option>
                  <option value="TKM">Turkmenistan</option>
                  <option value="TCA">Turks and Caicos Islands</option>
                  <option value="TUV">Tuvalu</option>
                  <option value="UGA">Uganda</option>
                  <option value="UKR">Ukraine</option>
                  <option value="ARE">United Arab Emirates</option>
                  <option value="URY">Uruguay</option>
                  <option value="UZB">Uzbekistan</option>
                  <option value="VUT">Vanuatu</option>
                  <option value="VAT">Vatican City State </option>
                  <option value="VEN">Venezuela</option>
                  <option value="VNM">Viet Nam</option>
                  <option value="VGB">Virgin Islands </option>
                  <option value="WLF">Wallisw and Futuna Islands</option>
                  <option value="ESH">Western Sahara</option>
                  <option value="YEM">Yeman</option>
                  <option value="YUG">Yugoslavia</option>
                  <option value="ZAR">Zaire</option>
                  <option value="ZMB">Zambia</option>
                  <option value="ZWE">Zimbabwe</option>
                  <option value="UNK">Not Listed</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="referrer" class="control-label col-sm-5">How did you hear about us?</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbw" name="00N50000003Ahbw" title="Referrer" class="form-control">
                  <option selected="selected"></option>
                  <option value="searchengine">Search Engine</option>
                  <option value="website">Another Website</option>
                  <option value="email">Email</option>
                  <option value="directmail">Direct Mail</option>
                  <option value="clubmember">Club Member</option>
                  <option value="wordofmouth">Word of Mouth</option>
                  <option value="magazine">Magazine</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="hhonors" class="control-label col-sm-5">Are you an HHonors member?</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbt" name="00N50000003Ahbt" title="IsHhonors" class="form-control">
                  <option selected="selected"></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="owntimeshare" class="control-label col-sm-5">Do you currently own timeshare?</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbv" name="00N50000003Ahbv" title="OwnsTimeshare" class="form-control">
                  <option selected="selected"></option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="suitesize" class="control-label col-sm-5">Desired Suite Size</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbx" name="00N50000003Ahbx" title="SuiteSize" class="form-control">
                  <option selected="selected"></option>
                  <option value="studio">Studio</option>
                  <option value="onebedroom">One Bedroom</option>
                  <option value="twobedroom">Two Bedroom</option>
                  <option value="threebedroom">Three Bedroom</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="usage" class="control-label col-sm-5">Anticipated Use</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahby" name="00N50000003Ahby" title="Usage" class="form-control">
                  <option selected="selected"></option>
                  <option value="1-7">1 - 7 Days</option>
                  <option value="8-14">8 - 14 Days</option>
                  <option value="14+">14+ Days</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div>
            
            <div class="form-group">
              <label for="activities" class="control-label col-sm-5">Activities you enjoy</label>
              <div class="col-sm-7">
                <select id="00N50000003Ahbo" multiple="multiple" name="00N50000003Ahbo" title="Activities" class="form-control">
                  <option value="swimming">Swimming</option>
                  <option value="golfing">Golfing</option>
                  <option value="shopping">Shopping</option>
                  <option value="gaming">Gaming</option>
                  <option value="skiing">Skiing</option>
                  <option value="themeparks">Theme Parks</option>
                  <option value="spa">Spa</option>
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
          <p class="text-center"><img src="img/request-info.jpg" alt="Request Information About Ownership with Hilton Grand Vacations" /></p>
          <p><a href="additional-info/">Request Additional Info</a></p>
          <p>We invite you to learn about the many benefits of Hilton Grand Vacations ownership.</p>
          <hr />
          <p class="text-center"><img src="img/online-presentation.jpg" alt="Request an Online Presentation on Ownership with Hilton Grand Vacations" /></p>
          <p><a href="online-presentation/">Request A Live Online Presentation</a></p>
          <p>Learn about the many benefits of Hilton Grand Vacations ownership from the comfort of your home or office.</p>
          
        </div>
        
      </div>
    </div>
    
    <?php addFooter(); ?>
    
  </div>

  <?php addScripts(); ?>
  <script type="text/javascript" src="../js/jquery.multiple.select.js"></script>
  <script type="text/javascript" src="../js/discover.js"></script>

</body>
</html>