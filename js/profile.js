function show() {
	$.ajax({
          url:"controls/user-info.php",
          method:"post",
          processData: false,
          contentType: false,
          data: {},
          success:function (data) {
          	
            $(".profile-pic").html(data);
          }, 
       });
}
function updateProfile() {
		var company = $("#c-name").val();
		var live = $("#lives-in").val();
		var country = $("#country").val();
		var description = $("#description").val();
		var addr1 = $("#addr1").val();
		var addr2 = $("#addr2").val();
		var phone = $("#phone").val();
		var cell = $("#cell").val();
		var email = $("#email").val();
		var skype = $("#skype").val();
      	if (company == "" || live == "" || country == "" || description == "" || addr1 == "" ||
      	 addr2 == ""|| phone == "" || cell == ""|| email == ""|| skype == "") {
     bootbox.alert("field is empty");
      }
      else{
      
      	  var form = $("#edit_form")[0];
      	  var formData = new FormData(form);
	      $.ajax({
          url:"controls/editForm.php",
          method:"post",
          processData: false,
          contentType: false,
          data: formData,
          success:function (data) {
          	console.log(data);
           show();
            bootbox.alert("Profile Update SuccssFully");

          },
       });
	  }
	 
}	  
$(document).ready(function () {
	show();
	$("#update_profile").click(function () {
		updateProfile();
		 event.preventDefault();
	});
});