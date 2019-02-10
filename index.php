<?php session_start(); ?>
<?php 
 include("include/config.php");
?>
<?php 
if(isset($_POST['log_btn']))
{
 $username = mysqli_real_escape_string($con,$_POST['username']);
	$userpassword = mysqli_real_escape_string($con,$_POST['userpassword']);
	
	$login_sql = mysqli_query($con,"select * from user_admin where username='$username' and userpassword='$userpassword'");
	
	$login_num = mysqli_num_rows($login_sql);
	if($login_num > 0)
	{
		$_SESSION['username']=$username;
		$_SESSION['userpassword']=$userpassword;
		header("location:dashbord.php");	
	}else 
	{
	$_SESSION['msg']="invalid user";

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Welcome to RSJestore</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--ricksaw.js [ OPTIONAL ]-->
        <link href="plugins/jquery-ricksaw-chart/css/rickshaw.css" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="plugins/summernote/summernote.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">RSJestore</span>
                            </div>
                        </a>
                    </div>
                </div>
            </header>
           <div class="lock-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lock-box">
                        <div class="main">
                            <h3>Log In, to your Account </h3>
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or"><?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; } unset($_SESSION['msg']); ?></span>
                            </div>
                       <form name="frm" action="" method="post">
                                <div class="form-group">
                                    <label for="inputUsernameEmail">Username or email</label>
                                    <input type="text" class="form-control"  name="username" id="inputUsernameEmail">
                                </div>
                                <div class="form-group">
                                   
                                    <label for="inputPassword">Password</label>
                                    <input type="password" name="userpassword" class="form-control" id="inputPassword">
                                </div>
                               
                                <input name="log_btn" class="btn btn btn-primary pull-right" type="submit" value="log in" />
                              
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>   
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="plugins/metismenu/metismenu.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/parsley/parsley.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/jquery-steps/jquery-steps.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/bootstrap-inputmask.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="plugins/flot-charts/jquery.flot.min.js"></script>
        <script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>
        <script src="plugins/flot-charts/jquery.flot.spline.js"></script>
        <script src="plugins/flot-charts/jquery.flot.pie.min.js"></script>
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/moment-range/moment-range.js"></script>
        <script src="plugins/flot-charts/jquery.flot.tooltip.min.js"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
        <!--ricksaw.js [ OPTIONAL ]-->
        <script src="plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
        <script src="plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
        <script src="plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
        <script src="plugins/jquery-ricksaw-chart/ricksaw.js"></script>
       <!--Summernote [ OPTIONAL ]-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/wizard.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/form-wizard.js"></script>
        <script src="js/demo/dashboard-v2.js"></script>
      
    </body>

</html>