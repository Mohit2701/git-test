function to_Cart(Id,Unit) {
 $.ajax({
          url:"controls/toCart.php",
          method:"post",
          data: {
                 id:Id,
                  unit:Unit
          },
          success:function (data) {
            console.log(data);
          },
       });
}
  
$(document).ready(function () {

	$(".add_buuton").click(function () { 
     var unit = $("#units").text();
     var stock = $("#stock").text().split(":")[1];     
      stock = parseInt(stock);
      unit = parseInt(unit);
    if (stock<=unit) {
     bootbox.alert("product not available in stock");
    }
    else
    {
      unit = unit+1;
    }
     $("#units").text(unit);
   
  });
  $(".sub_buuton").click(function () {
     var unit = $("#units").text();
     unit = parseInt(unit);
    if (unit==0) {
      bootbox.alert("Please select minimum 1");
    }
    else{
      unit = unit-1;
    }
    $("#units").text(unit);
    
    
  });
  $(".toCart").click(function () {
		var id = $(this).val();
    var unit = $("#units").text();
    if(unit!=0){
      to_Cart(id,unit);
      bootbox.alert("product Added in Cart");
    }
    else{
      bootbox.alert("no product selected");
    }
		
	});
  
});