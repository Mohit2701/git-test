function products() {
	$.ajax({
          url:"controls/products.php",
          method:"post",
          processData: false,
          contentType: false,
          data: {},
          success:function (data) {
         $('table tbody').html(data);
          },
       });
}
function to_Cart(Id,Unit) {
 $.ajax({
          url:"controls/toCart.php",
          method:"post",
          data: {id:Id,unit:Unit},
          success:function (data) {
            products();
            console.log(data);
          },
       });
}
 
$(document).ready(function () {
	products();
  var unit="";
   $("body").on("click",".product_info",function () {
    
        var tr = $(this).closest("tr");
        var trClass = tr.attr('class');
        id = trClass.split("_")[1];
        window.location.href="product-info.php?id="+id;
   });
   $("body").on("click",".to_Cart",function () {
        var id=$(this).val();
        unit=$(this).closest("td").find("span").attr('class');
        var stock=$(this).closest("tr").find(".stock").text();
        stock = parseInt(stock);
        unit = parseInt(unit);
        if (stock<=unit) {
           bootbox.alert("product not available in stock")
        }
        else{
         unit= unit+1;
          console.log(stock,unit);
        }
        to_Cart(id,unit);
   });
});