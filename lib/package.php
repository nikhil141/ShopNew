   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
		$package_title = $_POST['package_title'];
		$subcategory_id = $_POST['subcategory_id'];
		$package_price = $_POST['package_price'];
		$add_document = mysqli_query($con,"INSERT INTO `package` (`service_id`,`subcategory_id`, `package_title`, `package_price`) VALUES ('$service_id','$subcategory_id', '$package_title', '$package_price')");

      if($add_document)
      {
	 ?>
      <script>
      alert("your Package successfully added");
	 window.top.location="../add_package.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your  Package not added");
	window.top.location="../add_package.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $packageid=$_REQUEST['package_id'];
	  $service_id= $_POST['service_id'];
		$package_title = $_POST['package_title'];
		$subcategory_id = $_POST['subcategory_id'];
		$package_price = $_POST['package_price'];
 $update_feature=mysqli_query($con,"UPDATE `package` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `package_title` = '$package_title', `package_price` = '$package_price' WHERE `package`.`package_id` = '$packageid'");
 if($update_feature)
  {
  ?>
    <script>
    alert("Your Package  Updated");
	window.top.location="../add_package.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Package not Updated");
	window.top.location="../add_package.php";
</script>
<?php
}
}
?>
                 