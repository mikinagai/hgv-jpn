$().ready(function() {
		// validate signup form on keyup and submit
		$("#form").validate({
			rules: {
				last_name: "required",
				first_name: "required",
				phone: {
					required: true,
					minlength: 10
				},
				email: {
					required: true,
					email: true,
				},
				confirm_email: {
					required: true,
					email: true,
					equalTo: "#email"
				},
			},
			messages: {
				last_name: "Please enter your last name",
				first_name: "Please enter your first name",
				phone: {
					required: "Please enter your phone number",
					minlength: "please enter 10-digit numbers without hypens"
				},
				email: "Please enter your e-mail address",
			confirm_email: {
					required: "Plase enter email address",
					equalTo: "Email address does not match",
				}
			}
		});
	});
		
	// hide submit button
	//$().ready(function(){
    //$("select").change(function(){
    //   $(this).find("option:selected").each(function(){
    //        if($(this).attr("value")=="HHV Guest Welcome Center"){       
    //            $(".form-group-inv").show();
    //        }
    //       else if($(this).attr("value")=="HHV Tapa Desk"){
    //            $(".form-group-inv").show();
    //       }
    //        else if($(this).attr("value")=="HHV DFS Desk 4th Floor"){
    //            $(".form-group-inv").show();
    //        }
    //        else if($(this).attr("value")=="HHV DFS-2 Desk"){
    //            $(".form-group-inv").show();
    //        }
    //        else{
    //            $(".form-group-inv").hide();
    //        }
    //    });
    //}).change();
//});

 //hide submit button
	$().ready(function(){
    $("select").change(function(){
       $(this).find("option:selected").each(function(){
           if($(this).attr("value")=="HHV Guest Welcome Center"){       
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="HHV Tapa Desk"){
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="HHV DFS 1st Floor"){
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="HHV DFS-2 Desk"){
                $(".form-group-inv").show();
			}
            else{
                $(".form-group-inv").hide();
            }
        });
    }).change();
});