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

  <link rel="stylesheet" type="text/css" href="css/product-info.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

   <script type="text/javascript" src="js/bootbox.min.js"></script>
   <script type="text/javascript" src="js/product-info.js"></script>
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
     <?php include('header.php'); ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
          <!-- /col-md-12 -->
          <?php 
          if (!isset($_GET['id'])) {
          }
          else{
              $id = $_GET['id'];
              $query = "SELECT * FROM products WHERE id=$id";
              $result = mysqli_query($connection, $query);
              $row = mysqli_fetch_assoc($result);
              }?>
          <div id="Product_img">
            <img src="storage/<?php echo $row['image']?>">
          </div>
          <div id="product_detail">
           <h4>LABEL :<?php echo $row['uniqe']?></h4>
           <h4>PRODUCT :<?php echo $row['product']?></h4>
           <h4 id="stock">STOCK :<?php echo $row['stock']?></h4>
           <h4>PRICE :<?php echo $row['price']?></h4>
           <h4>DESCRIPTION:<?php echo $row['description']?></h4>
            <h4>unit:<span id="units"><?php echo $row['unit']?></span><span class="add_buuton"><button>+</button></span><span class="sub_buuton"><button>-</button></span>
            </h4>
           <h4><button value="<?php echo $row['id']?>" class="toCart">Add To Cart</button></h4>
          </div>
          <!-- /col-md-12 -->
      </section>
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
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
