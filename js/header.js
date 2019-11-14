function cartIcon() {
	$.ajax({
          url:"controls/header.php",
          method:"post",
          data: {},
          success:function (data) {
          	$("#cart_icon").html(data);
          	cartIcon();
          }, 
       });
}
$(document).ready(function () {
	cartIcon();
});