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
                    <h3>Edit Employee</h3>
				</div>
                <div class="col-lg-6" >

                    <a href="employee.php" class="btn btn-success right" style="float:right;">BACK</a>
<!--                    <a href="" class="btn btn-success right" style="float:right;">Import To CSV</a>
                    <a href="" class="btn btn-success right" style="float:right;">Export To CSV</a>-->
                <br/>
				</div>
                 
       
            </div>
            <?php
              $id = $_REQUEST['UPD_id'];
              //$employeeid = mysqli_real_escape_string($con, $employeeid);
              $sql=mysqli_query($con,"select employee_full_name, employee_address, state,city, pincode, off_mobile, per_mobile, aadhar_no,gender, dob, email, employee_father, father_mob, employee_mother, mother_mob, drv_lic_no,voter_no,date from tbl_employee where employee_id='$id';");
              $data=mysqli_fetch_assoc($sql);
              //var_dump($data);
            ?>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="POST" enctype="multipart/form-data" action="lib/employee.php">
                  <div class="col-sm-12 col-xs-12">
                    <div class="container" style="background-color:white;">
					<div class="col-sm-12 col-xs-12">
                      <h3><span>General Details</span></h3>
                      <div class="col-sm-3">
					  <p>Full Name </p>
                      <input type="text" value="<?php echo $data['employee_full_name'];?>" name="employee_full_name" class="form-control"id="father-name" required/>
                      </div>
					  <div class="col-sm-3">
					  <p>Address </p>
                      <input type="text" value="<?php echo $data['employee_address'];?>" name="employee_address" class="form-control"id="admi-no" required/>
                    </div>
					<div class="col-sm-3">
                    <p>State </p>
                    <select name="state" id="state" name="state" class="form-control paddingctrl">
                       <?php 
                          $sql = mysqli_query($con, "SELECT * FROM `tbl_employee` ");
                          while ($data1 = mysqli_fetch_assoc($sql)){
                          ?>
                          <option value="<?php echo strtolower($data1['state_id']); ?>"><?php echo strtoupper($data1['state']); ?></option>
                          <?php 
                          }
                          ?>
                    </select>      
					</div>
                   <div class="col-sm-3">
                    <p>City </p>
                    <select name="city" id="city" name="city" class="form-control paddingctrl">
                       <?php 
                            $sql = mysqli_query($con, "SELECT * FROM `tbl_employee` ");
                            while ($data1 = mysqli_fetch_assoc($sql)){
                          ?>
                            <option value="<?php echo strtolower($data['city_id']); ?>"><?php echo strtoupper($data['city']); ?></option>
                          <?php
                            }
                          ?> 
                      </select>    
					  </div>
                      <div class="col-sm-3">
                      <br/>
					  <p>Pincode </p>

                      <input type="text" value="<?php echo $data['pincode'];?>"  name="pincode" class="form-control"id="admi-no" required/>
                       </div>
					   <div class="col-sm-3">
                      <br/>
					  <p>Official Mobile No.</p>
                      <input type="text" value="<?php echo $data['off_mobile'];?>" name="off_mobile" class="form-control"id="father-contact" required/>
                       </div>
                      <div class="col-sm-3">
					  <br/>
					  <p>Personal Mobile No.</p>
                      <input type="text" maxlenght="10" value="<?php echo $data['per_mobile'];?>" name="per_mobile" class="form-control"id="father-contact" required/>
                      </div>
					  <div class="col-sm-3">
                      <br/>
					  <p>Aadhar No.</p>
                      <input type="text" value="<?php echo $data['aadhar_no'];?>"  name="aadhar_no" class="form-control" required/>
                      </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
					  <h3><span>Other Details</span></h3>

                      <div class="col-sm-3 ">
                        
						<p>Gender </p>
                        <select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                      </div>

                      <div class="col-sm-3 ">
                        <p>Date of Birth</p>
                        <input type="date" id="dob" value="<?php echo $data['dob'];?>"class="form-control" name="dob">
                      </div>
                        <div class="col-sm-3">
                      <p>Email</p>
                      <input type="text" value="<?php echo $data['email'];?>" id="email" class="form-control" name="email">
                      </div>
					  <div class="col-sm-3">
                      <p>Father Name</p>
                      <input type="text" value="<?php echo $data['employee_father'];?>" id="father-name" class="form-control" name="employee_father">
                       </div>
					   <div class="col-sm-3">
                      <br/>
					  <p>Father Mobile No.</p>
                      <input type="text" value="<?php echo $data['father_mob'];?>"  name="father_mob" class="form-control"id="father-contact" required/>
                      </div>
					  <div class="col-sm-3">
                      <br/>
					  <p>Mother Name</p>
                      <input type="text" name="employee_mother" value="<?php echo $data['employee_mother'];?>" class="form-control" id="mothername">
                     </div>
					 <div class="col-sm-3">
                      <br/>
					  <p>Mother Mobile No.</p>
                      <input type="text" maxlenght="10" value="<?php echo $data['mother_mob'];?>" name="mother_mob" class="form-control"id="father-contact" required/>
                      </div>
                      <div class="col-sm-3">
                        <br/>
						<p>Driving Licence No.</p>
                        <input type="text" value="<?php echo $data['drv_lic_no'];?>" maxlenght=" " name="drv_lic_no" class="form-control"id="father-contact" required/>
                      </div>  

                       <div class="col-sm-3" >
                        <br/>
						<p>Voter Card No.</p>
                        <input type="text" value="<?php echo $data['voter_no'];?>" maxlenght=" " name="voter_no" class="form-control"id="father-contact" required/>
                      </div>  
                       <div class="col-sm-8" style="text-align:right;">
                        <br/><br/>
						<input type="hidden" name="id" value="<?php echo $id; ?>"/>           
						<input type="submit" name="update" value="Update" class="btn btn-success"/>
                    </div>
                </form>
        
            </div>
			</div>
        </div>
    </section>
</div>
</div>


  <?php include("include/footer.php"); ?>       
              
<!-- page script -->
</body>
</html>              
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                