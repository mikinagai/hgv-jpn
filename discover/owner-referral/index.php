<?php
  $sitexml = simplexml_load_file("xml/sites.xml");
  $statexml = simplexml_load_file("xml/states.xml");
  $relationshipxml = simplexml_load_file("xml/relationships.xml");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <title>Hilton Grand Vacations Owner Referral Form</title>
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
  <link type="text/css" rel="stylesheet" href="css/default.css" />
  <link type="image/x-icon" rel="shortcut icon" href="img/favicon_HI.ico" />
  <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-sm-offset-2">
          <p><strong>Site Code:</strong><br /><span id="sitecode-span"></span></p>
        </div><!--/.col-sm-2-->
        <div class="col-sm-2">
          <p><strong>Counselor's ID:</strong><br /><span id="counselorid-span"></span></p>
        </div><!--/.col-sm-2-->
        <div class="col-sm-2">
          <p><strong>Manager's ID:</strong><br /><span id="managerid-span"></span></p>
        </div><!--/.col-sm-2-->
        <div class="col-sm-2">
          <p><strong>Referrer's ID:</strong><br /><span id="referrerid-span"></span></p>
        </div><!--/.col-sm-2-->
      </div><!--/.row-->
    </div><!--/.container-->
  </header>
  
  <div id="slider">
    
    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 form-well">
             
            <div class="form-group">
              <select class="form-control input-lg required" name="sitecode">
                <option value="">Site *</option>
                <?php foreach($sitexml->children() as $site){ ?>
                  <option value="<?php echo $site->id ?>"><?php echo $site->location ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <input type="number" class="form-control input-lg required" placeholder="Counselor ID *" name="counselorid" />
            </div><!--/.form-group-->
            <div class="form-group">
              <input type="number" class="form-control input-lg required" placeholder="Manager ID *" name="managerid" />
            </div><!--/.form-group-->
            <!--input type="number" class="form-control input-lg required" placeholder="Referrer's ID *" name="referrerid" /-->
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group sm-form-group">
                  <input type="number" class="form-control input-lg required" placeholder="Area *" name="areaid" />
                </div><!--/.form-group-->
              </div><!--/.col-sm-3-->
              <div class="col-sm-9">
                <div class="form-group">
                  <input type="number" class="form-control input-lg required" placeholder="Referrer ID *" name="referrerid" />
                </div><!--/.form-group-->
              </div><!--/.col-sm-9-->
            </div><!--/.row-->
            
            <div class="btn-container">
              <p class="pull-right"><a href="#next" class="btn btn-primary">Next</a></p>
            </div><!--/.btn-container-->
              
          </div><!--/.col-sm-8 form-well-->
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--/.slide-->
    
    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 form-well">
            
            <br />
            <p class="text-center"><img src="img/logo.png" alt="Hilton Grand Vacations" /></p>
            <p class="desc">As a Hilton Grand Vacations Club Member, you have the opportunity to earn valuable rewards when your friends or family members become Hilton Grand Vacations Club Members too. To get started, simply share with us the names of people you know will enjoy the rewards of membership as much as you do.</p>
            
            <div class="btn-container">
              <p class="pull-left"><a href="#prev" class="btn btn-primary">Prev</a></p>
              <p class="pull-right"><a href="#next" class="btn btn-primary">Next</a></p>
            </div><!--/.btn-container-->
              
          </div><!--/.col-sm-8 form-well-->
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--/.slide-->
    
    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            
            <div class="form-well">
            
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg required refer-field" placeholder="First Name *" name="fname" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg required refer-field" placeholder="Last Name *" name="lname" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
              </div><!--/.row-->
              <div class="form-group">
                <input type="email" class="form-control input-lg refer-field" placeholder="Email Address" name="email" />
              </div><!--/.form-group-->
              <div class="form-group">
                <input type="tel" class="form-control input-lg required refer-field" placeholder="Phone *" name="phone" />
              </div><!--/.form-group-->
              <div class="form-group">
                <input type="text" class="form-control input-lg refer-field" placeholder="Street Address" name="address" />
              </div><!--/.form-group-->
              <div class="row address-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg refer-field" placeholder="City" name="city" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
                <div class="col-sm-3">
                  <div class="form-group sm-form-group">
                    <select class="form-control input-lg required refer-field" name="state">
                      <option value="">State *</option>
                      <?php foreach($statexml->children() as $state){ ?>
                        <option value="<?php echo $state->abbv ?>"><?php echo $state->name ?></option>
                      <?php } ?>
                    </select>
                  </div><!--/.form-group-->
                </div><!--/.col-sm-3-->
                <div class="col-sm-3">
                  <div class="form-group">
                    <input type="number" class="form-control input-lg refer-field" placeholder="Zip Code" name="zip" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-3-->
              </div><!--/.row-->
              <div class="form-group">
                <!--input type="text" class="form-control input-lg refer-field" placeholder="Relationship (Friend, Relative, etc)" name="relationship" /-->
                <select class="form-control input-lg refer-field" name="relationship">
                  <option value="">Relationship</option>
                  <?php foreach($relationshipxml->children() as $relationship){ ?>
                    <option value="<?php echo $relationship->id ?>"><?php echo $relationship->desc ?></option>
                  <?php } ?>
                </select>
              </div><!--/.form-group-->
            
              <div class="btn-container">
                <p class="pull-left"><a href="#prev" class="btn btn-primary">Prev</a></p>
                <p class="pull-right"><a href="#add" class="btn btn-success">Add</a></p>
              </div><!--/.btn-container-->
              
              <div class="clearfix"></div>
              
            </div><!--/.form-well-->
              
          </div><!--/.col-sm-8-->
          <div class="col-sm-4">
            
            <div class="form-well small-well submissions-container">
              <p class="text-center header">Submissions</p>
              <div class="submissions"></div>
              <div class="btn-container">
                <p class="text-center"><a href="#review" class="btn btn-success">Confirm</a></p>
                <p class="small">You will be able to edit or remove any referrals on the review page</p>
              </div><!--/.btn-container-->
            </div><!--/.form-well-->
            
          </div><!--/.col-sm-4-->
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--/.slide-->
    
    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 form-well">
            
            <p class="desc">Please review your referrals. You are free to edit or delete submissions. When you are finished, tap the <strong>Submit</strong> button below.</p>
            <div class="review-submissions"></div>
            
            <div class="btn-container">
              <p class="pull-left"><a href="#prev" class="btn btn-primary">Prev</a></p>
              <p class="pull-right"><a href="#submit" class="btn btn-success">Submit</a></p>
            </div><!--/.btn-container-->
              
          </div><!--/.col-sm-8 form-well-->
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--/.slide-->
    
    <div class="slide">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 form-well">
            
            <br />
            <p class="text-center"><img src="img/logo.png" alt="Hilton Grand Vacations" /></p>
            <p class="desc">Your referrals were submitted successfully. Thank you for your participation.</p>
            
            <div class="btn-container">
              <p class="pull-right"><a href="" class="btn btn-success">Finished</a></p>
            </div><!--/.btn-container-->
              
          </div><!--/.col-sm-8 form-well-->
        </div><!--/.row-->
      </div><!--/.container-->
    </div><!--/.slide-->
      
  </div><!--/#slider-->
  
  <div id="edit-modal">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="form-well" id="edit-form">
            
            <p class="header">Edit Referral</p>
            
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg required refer-field" placeholder="First Name *" name="fnameedit" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg required refer-field" placeholder="Last Name *" name="lnameedit" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
              </div><!--/.row-->
              <div class="form-group">
                <input type="email" class="form-control input-lg refer-field" placeholder="Email Address" name="emailedit" />
              </div><!--/.form-group-->
              <div class="form-group">
                <input type="tel" class="form-control input-lg required refer-field" placeholder="Phone *" name="phoneedit" />
              </div><!--/.form-group-->
              <div class="form-group">
                <input type="text" class="form-control input-lg refer-field" placeholder="Street Address" name="addressedit" />
              </div><!--/.form-group-->
              <div class="row address-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control input-lg refer-field" placeholder="City" name="cityedit" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-6-->
                <div class="col-sm-3">
                  <div class="form-group sm-form-group">
                    <select class="form-control input-lg required refer-field" name="stateedit">
                      <option value="">State *</option>
                      <?php foreach($statexml->children() as $state){ ?>
                        <option value="<?php echo $state->abbv ?>"><?php echo $state->name ?></option>
                      <?php } ?>
                    </select>
                  </div><!--/.form-group-->
                </div><!--/.col-sm-3-->
                <div class="col-sm-3">
                  <div class="form-group">
                    <input type="number" class="form-control input-lg refer-field" placeholder="Zip Code" name="zipedit" />
                  </div><!--/.form-group-->
                </div><!--/.col-sm-3-->
              </div><!--/.row-->
              <div class="form-group">
                <!--input type="text" class="form-control input-lg refer-field" placeholder="Relationship (Friend, Relative, etc)" name="relationshipedit" /-->
                <select class="form-control input-lg refer-field" name="relationshipedit">
                  <option value="">Relationship</option>
                  <?php foreach($relationshipxml->children() as $relationship){ ?>
                    <option value="<?php echo $relationship->id ?>"><?php echo $relationship->desc ?></option>
                  <?php } ?>
                </select>
              </div><!--/.form-group-->
            
            <div class="btn-container">
              <p class="pull-left"><a href="#cancel" class="btn btn-default">Cancel</a></p>
              <p class="pull-right"><a href="#submit-edit" class="btn btn-primary" data-number="">Edit</a></p>
            </div><!--/.btn-container-->
            <div class="clearfix"></div>
            
          </div><!--/.form-well #edit-form-->
        </div><!--/.col-sm-8-->
      </div><!--/.row-->
    </div><!--/.container-->
  </div><!--/#edit-modal-->
    
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.anyslider.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>