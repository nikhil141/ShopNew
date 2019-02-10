<?php
//("../include/config.php");
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
                  <h2>Daily Sales Detail</h2>
				  <div class="col-lg-4">
				  <h3>Date</h3>
				  <input type="date" id="date" class="form-control" name="date" width="5px;"><br/>
				  </div>
				</div>
                <div class="col-lg-6" >
                     <br/>   
                     <br/>					 
                    
<!--                    <a href="" class="btn btn-success right" style="float:right;">Import To CSV</a>
                    <a href="" class="btn btn-success right" style="float:right;">Export To CSV</a>-->
                </div>
				
            </div>
            <!-- /.box-header -->
             <div class="box-body">
              <div class="container">
			  <table id="example1" class="table table-bordered table-striped">
				<br/>
				<thead>
                <tr>
                  <th>S.No.</th>
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>Product 1</th>
                  <th>Product 2 </th>	  
                </tr>
                </thead>
                <tbody>
                <form method="post" action="lib/daily.php">
             <?php
             $i=1;
            $sql=mysqli_query($con,"select * from tbl_customer");
            while($data=mysqli_fetch_assoc($sql))
            {
             ?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $i; ?></td>
              <td class="sorting_1" ><input type="text" name="customer_name"  value="<?php echo $data['customer_name']; ?>" ></td>
                  <td class="sorting_1"><input type="text" name="address" value="<?php echo $data['address']; ?>"></td>
       		      <td class="sorting_1"><input type="text" name="product1[ ]" ></td>
			      <td class="sorting_1"><input type="text" name="product2[ ]"  ></td>
			</tr>
            <?php
            $i++;
            }
            ?>
          </tbody>
              </table>
        <input type="submit" style="text-align:right;" name="save" value="save" class="btn btn-success"/>
		</form>
		</div>
		</div>
        </div>
    </section>
</div>
</div>

<div class="modal fade" id="editstate">
</div>
<div class="modal fade" id="mgdetail">
</div>

 <div class="modal fade" id="manageDetail">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="    background: #3c8dbc;
    color: #fff;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center">Manage Detail</h2>
                </div>
                <form method="GET" enctype="multipart/form-data" action="#">
                <div class="modal-body">

                  <div class="col-sm-12 col-xs-12">
                    <div class="col-sm-6 col-xs-6">
                      <p>Admission Type </p>
                      <select name="state" id="adm-type" name="admi-type" required class="form-control paddingctrl">
                          <option value="">Select Type</option>
                          <option value="New_Admission">New Admission</option>
                          <option value="Old_Admission">Old Admission</option>
                          
                        </select>
                     
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <p>Class </p>
                        <select name="class" id="adm-type" name="class" required class="form-control paddingctrl">
                          <option value="">Select Class</option>
                          
                        </select>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-12 col-xs-12">
                        <input type="submit" name="submit" value="Save" class="btn btn-success"/>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  <?php include("include/footer.php"); ?>       
              
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Bootstrap 3.3.7 -->

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/custom.js"></script>
</body>
</html>              
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                