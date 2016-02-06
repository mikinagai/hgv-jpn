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
				confirm_email: {
					required: true,
					equalTo: "#email"
				},
			messages: {
				last_name: "名字をカタカナで入力してください",
				first_name: "名前をカタカナで入力してください",
				phone: {
					required: "電話番号を入力してください",
					minlength: "半角で10桁の番号をハイフンなしで入力してください"
				},
				email: {
					required: "メールアドレスを入力してください",
				},
				confirm_email: {
					required: "確認の為、メールアドレスを再入力してください",
					equalTo: "メールアドレスが異なります"
			}
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