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
					email: true
				},
			},
			messages: {
				last_name: "Please enter your last name",
				first_name: "Please enter your first name",
				phone: {
					required: "Please enter your phone number",
					minlength: "please enter 10-digit numbers without hypens"
				},
				email: "Please enter your e-mail address"
			}
		});
		});
	});
		
	// hide submit button
	$().ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Tapa Tower"){       
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="DFS 1"){
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="DFS 2"){
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="Welcome Desk"){
                $(".form-group-inv").show();
            }
            else if($(this).attr("value")=="WEB"){
                $(".form-group-inv").show();
            }
            else{
                $(".form-group-inv").hide();
            }
        });
    }).change();
});