<?php
include("include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PIM | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include("include/header.php"); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   <h1>
        Dashboard
        <small>Employee Zone</small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee Zone</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="box">
            <div class="box-header">
                <div class="col-lg-6">
                      <h3 class="box-title"></h3>
                    <h2>Add Customer</h2>
				</div>
                <div class="col-lg-6" >

                    <a href="customer.php" class="btn btn-success right" style="float:right;">BACK</a>
<!--                    <a href="" class="btn btn-success right" style="float:right;">Import To CSV</a>
                    <a href="" class="btn btn-success right" style="float:right;">Export To CSV</a>-->
                <br/>
				</div>
                 
       
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" enctype="multipart/form-data" action="lib/customer.php">
                  <div class="col-sm-12 col-xs-12">
                    <div class="container" style="background-color:white;">
					<div class="col-sm-12 col-xs-12">
                      <h3><span>Customer Details</span></h3>
                      <div class="col-sm-3">
					  <p>Customer Name </p>
                      <input type="text"  name="customer_name" class="form-control"id="father-name" required/>
                      </div>
					  <div class="col-sm-3">
					  <p>Address </p>
                      <input type="text"  name="address" class="form-control"id="admi-no" required/>
                    </div>
					<div class="col-sm-3">
                    <p>Mobile No</p>
                    <input type="text" name="mobile_no" id="mobile_no"  class="form-control" required/>
                    </select>      
					</div>
                   <div class="col-sm-3">
                    <p>State </p>
                    <input type="text" name="state" id="state" name="state" class="form-control">
                       	  </div>
                      <div class="col-sm-3">
                      <br/>
					  <p>City </p>

                      <input type="text"  name="city" class="form-control" id="city" required/>
                       </div>
					   
                      <div class="col-sm-3">
                      <br/>
					  <p>Pincode </p>

                      <input type="text"  name="pincode" class="form-control" id="city" required/>
                       </div>
					  
		              <div class="col-sm-12" style="text-align:right;">   
			     <input type="submit" name="save" value="save" class="btn btn-success"/>
                    </div>			  
                    </div>

                      
                       
                </form>
         
			</div>
        </div>
    </section>
</div>
</div>


  <?php include("include/footer.php"); ?>       
              
<!-- page script -->
</body>
</html>              
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                