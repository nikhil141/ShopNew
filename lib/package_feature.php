   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
		$package_id = $_POST['package_id'];
		$subcategory_id = $_POST['subcategory_id'];
		$package_feature_title = $_POST['package_feature_title'];
			$details = $_POST['details'];
		
		$add_document = mysqli_query($con,"INSERT INTO `package_feature` (`service_id`,`subcategory_id`, `package_id`, `package_feature_title`, `details`) VALUES ('$service_id','$subcategory_id', '$package_id', '$package_feature_title', '$details')");

      if($add_document)
      {
	 ?>
      <script>
      alert("Your Package Feature Successfully Added");
	 window.top.location="../add_package_features.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your  Package Feature Not Added");
	window.top.location="../add_package_features.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $package_feature_id=$_REQUEST['package_feature_id'];
	 $service_id= $_POST['service_id'];
		$package_id = $_POST['package_id'];
		$subcategory_id = $_POST['subcategory_id'];
		
		$details = $_POST['details'];
		$package_feature_title = $_POST['package_feature_title'];
		
		
		
 $update_feature=mysqli_query($con,"UPDATE `package_feature` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `package_id` = '$package_id', `package_feature_title` = '$package_feature_title', `details` = '$details' WHERE `package_feature`.`package_feature_id` = '$package_feature_id'");
 if($update_feature)
  {
  ?>
    <script>
    alert("Your Package Featured  Updated");
	window.top.location="../add_package_features.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Package Featured  not Updated");
	window.top.location="../add_package_features.php";
</script>
<?php
}
}
?>
                 