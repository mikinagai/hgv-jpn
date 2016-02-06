$("#submit-btn").click(function(e){
	
  var fname = $("input[name='first_name']").val();
  var lname = $("input[name='last_name']").val();
  $("input[name='company']").val(fname + "_" + lname + ".Household");
	
  var error = 0;
  $(".required").each(function(index, element){
    var value = $(this).val();
	var id = $(this).attr("id");
	var type = $(this).attr("type");
	console.log(type);
    
    //debugger;
    //remove the + for international phone numbers
    var phoneNumb = document.getElementById("phone");
    if (phoneNumb.value.indexOf("+") >= 0)
    {
        document.forms['form'].elements['phone'].value = phoneNumb.value.replace("+", "");
    }
      
	if(value == null || value == ""){
	  error++;
	  $(this).addClass("error");
	  $("label[for=" + id + "]").addClass("error");
	}
	else {
	  if(type == "email"){
		if(!validateEmail(value)){
		  error++;
		  $(this).addClass("error");
		  $("label[for=" + id + "]").addClass("error");
		}
		else {
		  $(this).removeClass("error");
  	      $("label[for='" + id + "']").removeClass("error");
		}
      }
      else if(type == "tel"){
        if(!IsNumeric(phoneNumb.value)){
          error++;
          $(this).addClass("error");
          $("label[for=" + id + "]").addClass("error");
        }
        else {
          $(this).removeClass("error");
          $("label[for='" + id + "']").removeClass("error");
        }
      }	  
	  else {
	    $(this).removeClass("error");
  	    $("label[for='" + id + "']").removeClass("error");
	  }
	}
  });
  switch(error){
	case 0:
	  $("form").submit();
	  break;
	case 1:
	  $("#error-message").show().text("You have an error above");
	  break;
	default:
	  $("#error-message").show().text("You have " + error + " errors above");
	  break;
  }
  console.log(error);
  e.preventDefault();
});

function validateEmail(email) { 
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
} 

function IsNumeric(sText)
{
   var ValidChars = "+0123456789";
   var IsNumber=true;
   var Char;


    for (i = 0; i < sText.length && IsNumber == true; i++) 
        { 
            Char = sText.charAt(i); 
            if (ValidChars.indexOf(Char) == -1) 
             {
                 IsNumber = false;
             }
        }
    return IsNumber;
}

$("select#activities").multipleSelect();