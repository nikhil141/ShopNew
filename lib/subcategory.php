   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
          $subcategory_name = $_POST['subcategory_name'];
		$service_id = $_POST['service_id'];
		$service_price = $_POST['service_price'];
		$service_sdesc=$_POST['service_sdesc'];
		$service_ldesc=$_POST['service_ldesc'];
	     $addon_name=implode(",",$_POST['addon_name']);
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
	
	    
	   $add_service = mysqli_query($con,"INSERT INTO `subcategory` (`service_id`, `subcategory_name`, `service_sdesc`, `service_ldesc`, `service_price`, `addon_id`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES ('$service_id', '$subcategory_name', '$service_sdesc','$service_ldesc', '$service_price', '$addon_name', '$seo_title', '$seo_keyword', '$seo_desc')");

      if($add_service)
      {
	 ?>
      <script>
      alert("Your Subcategory  successfully added");
	 window.top.location="../add-service_subcategory.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Subcategory  Not Added");
	 window.top.location="../add-service_subcategory.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
$subcategory_id=$_POST['subcategory_id'];
	      $subcategory_name = $_POST['subcategory_name'];
		$service_id = $_POST['service_id'];
			$service_price = $_POST['service_price'];
		$service_sdesc=$_POST['service_sdesc'];
		$service_ldesc=$_POST['service_ldesc'];
	     $addon_name=implode(",",$_POST['addon_name']);
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		
	
	   
 $update_service=mysqli_query($con,"UPDATE `subcategory` SET `service_id` = '$service_id', `subcategory_name` = '$subcategory_name' , `service_sdesc` = '$service_sdesc', `service_ldesc` = '$service_ldesc', `service_price` = '$service_price', `addon_id` = '$addon_name', `seo_title` = '$seo_title', `seo_keyword` = '$seo_keyword', `seo_desc` = '$seo_desc' WHERE `subcategory`.`subcategory_id` = '$subcategory_id'");
 if($update_service)
  {
  ?>
    <script>
    alert("Your Subcategory Successfully Update");
		 window.top.location="../add-service_subcategory.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Subcategory Not Updated");
    window.top.location="../add-service_subcategory.php";
</script>
<?php
}
}
?>
                 