function showProduct() {
	$.ajax({
          url:"controls/cart.php",
          method:"post",
          data: {},
          success:function (data) {
            
            $('table tbody').html(data);
          },
       });
}
function delet_product(Id,tr) {
  $.ajax({
          url:"controls/delet-product.php",
          method:"post",
          data: {id:Id},
          success:function (data) {
            
            /*bootbox.alert("hii");*/
            $("body").on("click",".delet_product",function  () {
              $(this).closest(tr).remove();
            });
            tr.remove();
            /*bootbox.alert(tr);*/
           /*showProduct();*/
          },
       });
}
function addresVerify() {

  $.ajax({
          url:"controls/addresVerify.php",
          method:"post",
          data: {},
          success:function (data) {
            if (data == 'e')
            {
              bootbox.alert("plese fill adress");
              window.location.assign("profile.php");
            }
            else{
              window.location.assign("invoice.php");
            }
          
          },
       });
}

$(document).ready(function () {
   
	showProduct();
	$("body").on("click",".delet_product",function () {
		var id = $(this).attr("value");
    var tr = $(this).closest("tr");
		delet_product(id,tr);
	});
  $("#buy_button").click(function () {
    addresVerify();
  });
});