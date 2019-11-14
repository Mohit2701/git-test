function saveDetail() {
	var pwd=$("#password").val();
	var pwd2=$("#confirm_password").val();
	if (pwd != pwd2) {
		bootbox.alert("password not match")
	}else{
		var fname = $("#firstname").val();
		var lname = $("#lastname").val();
		var username = $("#username").val();
		var email = $("#email").val();
		
      if (fname == "" || lname == "" || username == "" || pwd == "" || pwd2 == "" || email == ""|| agree == 0 || news == 0) {
      /*bootbox.*/bootbox.alert("field is empty");
      }
      else{
      /*	var form = $("#signupForm")[0];
      	var formData = new FormData(form);*/
	     $.ajax({
          url:"controls/user-registration.php",
          method:"post",
          data: {
              firstname:fname,
              lastname:lname,
              username:username,
              email:email,
              password:pwd,
          },
          success:function (data) {
            console.log(data);
           /* bootbox.*/bootbox.alert("Registration Successfully");
          },
       }); 
	     
      }
}
}
var agree =0;
var news=0;
$(document).ready(function () {
	 $("body").on("click","#agree",function () {
	 	if (this.checked == true) {
	 		agree=1;
	 	}
	 	else{
	 		agree =0;
	 	}
	 });
	 $("body").on("click","#newsletter",function () {
	 	if (this.checked == true) {
	 		news=1;
	 	}
	 	else
	 	{
	 		news=0;
	 	}
	 });		
	$("#save").click(function () {
		 saveDetail();
	});
});