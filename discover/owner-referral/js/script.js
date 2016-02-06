// global vars
var prevButton = $("a[href='#prev']");
var nextButton = $("a[href='#next']");
var addButton = $("a[href='#add']");
var reviewButton = $("a[href='#review']");
var editButton = $("a[href='#edit']");
var cancelButton = $("a[href='#cancel']");
var submitEditButton = $("a[href='#submit-edit']");
var submitButton = $("a[href='#submit']");

var errormessageClass = "error-message";
var errorinputClass = "hasError";

var header = $("header");
var sitecodeSpan = $("#sitecode-span");
var counseloridSpan = $("#counselorid-span");
var manageridSpan = $("#managerid-span");
var referreridSpan = $("#referrerid-span");
var reviewDiv = $(".review-submissions");
var editModal = $("#edit-modal");

var sitecodeField = $("select[name='sitecode']");
var counseloridField = $("input[name='counselorid']");
var manageridField = $("input[name='managerid']");
var areaidField = $("input[name='areaid']");
var referreridField = $("input[name='referrerid']");
var fnameField = $("input[name='fname']");
var lnameField = $("input[name='lname']");
var emailField = $("input[name='email']");
var phoneField = $("input[name='phone']");
var addressField = $("input[name='address']");
var cityField = $("input[name='city']");
var stateField = $("select[name='state']");
var zipField = $("input[name='zip']");
var relationshipField = $("select[name='relationship']");

var fnameEdit = $("input[name='fnameedit']");
var lnameEdit = $("input[name='lnameedit']");
var emailEdit = $("input[name='emailedit']");
var phoneEdit = $("input[name='phoneedit']");
var addressEdit = $("input[name='addressedit']");
var cityEdit = $("input[name='cityedit']");
var stateEdit = $("select[name='stateedit']");
var zipEdit = $("input[name='zipedit']");
var relationshipEdit = $("select[name='relationshipedit']");

var getURL = "curl.php";
var referralsArray = new Array();

// initialize anyslider plugin
var slider = $("#slider").anyslider({
  interval: 0,
  showBullets: false,
  showControls: false,
  touch: false
});
var anyslider = slider.data("anyslider"); // necessary to run API functions, including next, prev, currentSlide, etc.

function zeroPad(num, places){
  var zero = places - num.toString().length + 1;
  return Array(+(zero > 0 && zero)).join("0") + num;
}

prevButton.click(function(e){ anyslider.prev(); e.preventDefault(); });
nextButton.click(function(e){ validate(this, "next", e); });
addButton.click(function(e){ validate(this, "add", e); });
reviewButton.click(function(e){ validate(this, "review", e); });
submitEditButton.click(function(e){ validate(this, "edit", e); });
cancelButton.click(function(e){ editModal.fadeOut(400); });

$("body").on("focus", "." + errorinputClass, function(){
  $(this).removeClass(errorinputClass);
  $(this).closest(".form-group").find("." + errormessageClass).remove();
});

var requiredArray = [fnameField, lnameField, phoneField, stateField];
function requiredCount(){
  var requiredNum = 0;
  for(var i=0; i<requiredArray.length; i++){
    if(!requiredArray[i].val()){
      requiredNum++;
    }
  }
  return requiredNum;
}

function validate(element, action, event){
  var numErrors = 0;
  var current = anyslider.currentSlide();
  var parent = $(element).closest(".form-well");
  if(action == "review"){
    parent = parent.parent().prev().find(".form-well");
    // if no fields are filled out upon hitting review, go to review page
    if(requiredCount() == requiredArray.length){
      populateReview(true);
      return;
    }
    else if(requiredCount() > 0 && requiredCount() < requiredArray.length){
      if(confirm("You left a referral unfinished. Would you like to dismiss it?")){
        populateReview(true);
        return;
      }
    }
  }
  // error checking
  $(parent).find(".required").each(function(e){
    var value = $(this).val();
    $(this).closest(".form-group").find("." + errormessageClass).remove(); // remove all error messages; if error still exists, we'll just repopulate error message
    if(!value){
      numErrors++;
      $(this).addClass(errorinputClass).after("<div class=\"" + errormessageClass + "\">This field is required</div>");
    }
    else {
      $(this).removeClass(errorinputClass);
      $(this).closest(".form-group").find("." + errormessageClass).remove();
    }
  });
  $(parent).find("input[type='email']").each(function(e){
    var value = $(this).val();
    $(this).closest(".form-group").find("." + errormessageClass).remove(); // remove all error messages; if error still exists, we'll just repopulate error message
    if(value.length > 0){
      if(!validateEmail(value)){
        numErrors++;
        $(this).addClass(errorinputClass).after("<div class=\"" + errormessageClass + "\">Not a valid email address</div>");
      }
      else {
        $(this).removeClass(errorinputClass);
        $(this).closest(".form-group").find("." + errormessageClass).remove();
      }
    }
  });
  if(numErrors > 0){
    event.preventDefault(); 
    return;
  }
  // end error checking
  if(action == "next"){ 
    anyslider.next();
    sitecodeSpan.text(sitecodeField.val());
    counseloridSpan.text(counseloridField.val());
    manageridSpan.text(manageridField.val());
    referreridSpan.text(zeroPad(areaidField.val(),3) + "-" + referreridField.val());
    header.slideDown(300);
  }
  else if(action == "add"){
    submitValues();
    clearForm();
  }
  else if(action == "review"){
    if(confirm("Would you like to submit " + fnameField.val() + " " + lnameField.val() + " as a referral before we continue?")){
      submitValues();
      clearForm();
      populateReview(true);
    }
  }
  else if(action == "edit"){
    var index = submitEditButton.attr("data-number");
    changeReferral(index);
  }
  else {
    console.log("Event triggered by unknown element"); 
  }
  event.preventDefault(); 
}

function validateEmail(email) { 
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function submitValues(){
  var referral = {
    "fname": fnameField.val(),
    "lname": lnameField.val(),
    "email": emailField.val(),
    "phone": phoneField.val(),
    "address": addressField.val(),
    "city": cityField.val(),
    "state": stateField.val(),
    "zip": zipField.val(),
    "relationship": relationshipField.val(),
    "company": fnameField.val() + lnameField.val() + "_Company"
  }
  referralsArray.push(referral);
  addToSubmissions();
}

function addToSubmissions(){
  $(".submissions-container").slideDown(300); 
  var submissionsHtml = "";
  for(var i=0; i<referralsArray.length; i++){
    submissionsHtml += "<p class=\"submission\">" + referralsArray[i].fname + " " + referralsArray[i].lname + "</p>";
  }
  $(".submissions").html(submissionsHtml);
}

function clearForm(){
  $(".refer-field").val("");
}

function populateReview(needSlide){
  var reviewHtml = "";
  for(var i=0; i<referralsArray.length; i++){
    var relationshipShown = assignRelationship(referralsArray[i].relationship);
    function assignRelationship(valueEntered){
      switch(valueEntered){
        case "F":
          return "Friend";
          break;
        case "P":
          return "Parent";
          break;
        case "B":
          return "Brother";
          break;
        case "S":
          return "Sister";
          break;
        case "R":
          return "Relative";
          break;
        case "C":
          return "Co-Worker";
          break;
        case "N":
          return "Neighbor";
          break;
        case "O":
          return "Other";
          break;
        default:
          return "";
          break;
      }
    };
    reviewHtml += "<div class=\"review-submission\" data-number=\"" + i + "\">";
    reviewHtml +=   "<div class=\"functions\"><a href=\"#edit\">Edit</a> | <a href=\"#remove\">Remove</a></div>";
    reviewHtml +=   "<div class=\"row\">";  
    reviewHtml +=     "<div class=\"col-sm-3 text-right\"><p><strong>Name:</strong></p></div>";  
    reviewHtml +=     "<div class=\"col-sm-9\"><p>" + referralsArray[i].fname + " " + referralsArray[i].lname + "</p></div>";   
    reviewHtml +=   "</div>"; 
    if(referralsArray[i].email){
      reviewHtml +=   "<div class=\"row\">";  
      reviewHtml +=     "<div class=\"col-sm-3 text-right\"><p><strong>Email:</strong></p></div>";  
      reviewHtml +=     "<div class=\"col-sm-9\"><p>" + referralsArray[i].email + "</p></div>";   
      reviewHtml +=   "</div>"; 
    }
    reviewHtml +=   "<div class=\"row\">";  
    reviewHtml +=     "<div class=\"col-sm-3 text-right\"><p><strong>Phone:</strong></p></div>";  
    reviewHtml +=     "<div class=\"col-sm-9\"><p>" + referralsArray[i].phone + "</p></div>";   
    reviewHtml +=   "</div>"; 
    reviewHtml +=   "<div class=\"row\">";  
    reviewHtml +=     "<div class=\"col-sm-3 text-right\"><p><strong>Address:</strong></p></div>";  
    reviewHtml +=     "<div class=\"col-sm-9\"><p>"
    if(referralsArray[i].address){
      reviewHtml +=     referralsArray[i].address + "<br />";
    }
    if(referralsArray[i].city){
      reviewHtml +=     referralsArray[i].city + ", ";
    }
    reviewHtml +=     referralsArray[i].state + " ";
    if(referralsArray[i].zip){
      reviewHtml +=     referralsArray[i].zip;
    }
    reviewHtml +=     "</p></div>";   
    reviewHtml +=   "</div>";  
    if(referralsArray[i].relationship){
      reviewHtml +=   "<div class=\"row\">";  
      reviewHtml +=     "<div class=\"col-sm-3 text-right\"><p><strong>Relationship:</strong></p></div>";  
      reviewHtml +=     "<div class=\"col-sm-9\"><p>" + relationshipShown + "</p></div>";   
      reviewHtml +=   "</div>";
    }
    reviewHtml += "</div>";
  }
  reviewDiv.html(reviewHtml);
  if(needSlide){
    anyslider.next();
  }
}

$("body").on("click", "a[href='#edit']", function(e){
  var submissionData = $(this).parent().parent();
  var numInArray = submissionData.attr("data-number");
  changeModal(numInArray);
  e.preventDefault();
});

function changeModal(index){
  fnameEdit.val(referralsArray[index].fname);
  lnameEdit.val(referralsArray[index].lname);
  emailEdit.val(referralsArray[index].email);
  phoneEdit.val(referralsArray[index].phone);
  addressEdit.val(referralsArray[index].address);
  cityEdit.val(referralsArray[index].city);
  stateEdit.val(referralsArray[index].state);
  zipEdit.val(referralsArray[index].zip);
  relationshipEdit.val(referralsArray[index].relationship);
  submitEditButton.attr("data-number", index);
  editModal.fadeIn(400);
}

function changeReferral(index){
  referralsArray[index].fname = fnameEdit.val();
  referralsArray[index].lname = lnameEdit.val();
  referralsArray[index].email = emailEdit.val();
  referralsArray[index].phone = phoneEdit.val();
  referralsArray[index].address = addressEdit.val();
  referralsArray[index].city = cityEdit.val();
  referralsArray[index].state = stateEdit.val();
  referralsArray[index].zip = zipEdit.val();
  referralsArray[index].relationship = relationshipEdit.val();
  editModal.fadeOut(400);
  populateReview(false);
  addToSubmissions();
}

$("body").on("click", "a[href='#remove']", function(e){
  var submissionData = $(this).parent().parent();
  var numInArray = submissionData.attr("data-number");
  referralsArray.splice(numInArray, 1);
  populateReview(false);
  addToSubmissions();
  e.preventDefault();
});

var currentDate = new Date();
var month = currentDate.getMonth() + 1;
var day = currentDate.getDate();
var year = currentDate.getYear();
var dateField = month + "/" + day + "/" + year;

submitButton.click(function(e){
  for(var x=0; x<referralsArray.length; x++){
    //console.log(referralsArray[x].fname);
    $.ajax({
      url: getURL,
      type: "GET",
      data: {
        "oid": "00DW0000008wYL8",
        "Campaign_ID": "701W0000000226E",
        "lead_source": "WebToLead",
        "member_status": "Responded",
        "00N30000000zOWh": "New Owner",
        "00N30000001E0U8": "OWNERREF", // keycode
        "00NW0000000sdZN": "40",
        "00NW0000000sHjB": referreridField.val() + zeroPad(areaidField.val(),3), // memberid
        "00NW0000000sKKn": sitecodeField.val(), // sitecode
        "00NW0000000sHmo": counseloridField.val(), // counselorid
        "00NW0000000sHmy": manageridField.val(), // managerid
        "00N50000001bJmD": dateField, // date
        "company": referralsArray[x].fname + referralsArray[x].lname + "_Company",
        "first_name": referralsArray[x].fname,
        "last_name": referralsArray[x].lname,
        "email": referralsArray[x].email,
        "phone": referralsArray[x].phone,
        "street": referralsArray[x].address, // address
        "city": referralsArray[x].city,
        "state": referralsArray[x].state,
        "zip": referralsArray[x].zip,
        "00NW0000000sHbM": referralsArray[x].relationship // relationship
      }
    });
  }
  anyslider.next();
  e.preventDefault();
});




