function invoice() {
	$.ajax({
          url:"controls/invoicePhp.php",
          method:"post",
          data: {},
          success:function (data) {
            console.log(data);
             $('table tbody').prepend(data);
          },
       });
}
function total() {
	$.ajax({
          url:"controls/invoiceData.php",
          method:"post",
          data: {},
          success:function (data) {
             $('.total_amount').text(data.split("@")[0]);
              $('.invoice_date').text(data.split("@")[1]);
              $('.invoice_id').text(data.split("@")[2]);
             
          },
       });
}
$(document).ready(function () {
	invoice();
  total();
	
});