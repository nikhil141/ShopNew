   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
	    $subcategory_id= $_POST['subcategory_id'];
		$working_title = $_POST['working_title'];
		$working_time=$_POST['working_time'];
		$working_serial = $_POST['serial_no'];
		$add_document = mysqli_query($con,"INSERT INTO `working` (`service_id`,`subcategory_id`, `working_serial`,`working_time`, `working_title`) VALUES ('$service_id','$subcategory_id', '$working_serial','$working_time', '$working_title')");

      if($add_document)
      {
	 ?>
      <script>
      alert("your woking pocess successfully added");
	 window.top.location="../add_working_process.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your working process not added");
	window.top.location="../add_working_process.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $workingid=$_REQUEST['working_id'];
	 $service_id= $_POST['service_id'];
		$working_title = $_POST['working_title'];
		$subcategory_id= $_POST['subcategory_id'];
		$working_time=$_POST['working_time'];
		$working_serial = $_POST['serial_no'];
 $update_feature=mysqli_query($con,"UPDATE `working` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `working_serial` = '$working_serial',`working_time` = '$working_time', `working_title` = '$working_title' WHERE `working`.`working_id` = '$workingid'");
 if($update_feature)
  {
  ?>
    <script>
    alert("your working process  Updated");
	window.top.location="../add_working_process.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your working pocess not Updated");
	window.top.location="../add_working_process.php";
</script>
<?php
}
}
?>
                 