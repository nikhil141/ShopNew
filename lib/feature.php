   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
	   $subcategory_id=$_POST['subcategory_id'];
		$service_feature_name = $_POST['service_feature_name'];
		$details = $_POST['details'];
		
		$add_feature = mysqli_query($con,"INSERT INTO `service_features` (`service_id`,`subcategory_id`, `service_feature_name`, `details`) VALUES ('$service_id','$subcategory_id', '$service_feature_name', '$details')");

      if($add_feature)
      {
	 ?>
      <script>
      alert("Your Feature Successfully Added");
	 window.top.location="../add_all_features.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Feature Not Added");
	window.top.location="../add_all_features.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $featureid=$_REQUEST['feature_id'];
	 $service_id= $_POST['service_id'];
	  $subcategory_id=$_POST['subcategory_id'];
	 $service_feature_name = $_POST['service_feature_name'];
	 	$details = $_POST['details'];
 $update_feature=mysqli_query($con,"UPDATE `service_features` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `service_feature_name` = '$service_feature_name', `details` = '$details' WHERE `service_features`.`service_feature_id` = '$featureid'");
 if($update_feature)
  {
  ?>
    <script>
    alert("Your Feature Successfully Update");
	window.top.location="../add_all_features.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Feature Not Updated");
    window.top.location="../add_all_features.php";
</script>
<?php
}
}
?>
                 