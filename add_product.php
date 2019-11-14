<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <script type="text/javascript" src="js/bootbox.min.js"></script>
   <script type="text/javascript" src="js/add_product.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
      <?php include('header.php');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Add Product</h3>
        <div class="row mt">
          <div class="col-lg-12">
              <form id="product_form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Product Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name">
                </div>
                <div class="form-group">
                  <label for="stock_unit">Stock Unit:</label>
                  <input type="number" class="form-control" id="stock_unit" placeholder="Enter Stock Unit" name="stock_unit">
                </div>
                <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
                </div>
                <div class="form-group">
                  <label for="product_image">Product Image</label>
                  <input type="file" class="form-control" id="product_image" placeholder="Enter Product Image" name="file">
                </div>
                <div class="form-group">
                  <label for="product_des">Description</label>
                  <textarea class="form-control" id="product_des" placeholder="Enter Description" name="product_des"> </textarea>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button id="save_product" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
      <?php include('footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
