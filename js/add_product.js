function addProduct() {
		var name = $("#name").val();
		var stock = $("#stock_unit").val();
		var price = $("#price").val();
		var description = $("#product_des").val();
      	if (name == "" || stock == "" || price == "" || description == "" ) {
     		bootbox.alert("field is empty");
      }
      else{
      
      	  var form = $("#product_form")[0];
      	  var formData = new FormData(form);
	      $.ajax({
          url:"controls/add-product.php",
          method:"post",
          processData: false,
          contentType: false,
          data: formData,
          success:function (data) {
          	console.log(data);
            bootbox.alert("Product Added SuccssFully");
          },
       });
	  }
}
$(document).ready(function () {
	$("#save_product").click(function () {
		addProduct();
		 event.preventDefault();
	});
});