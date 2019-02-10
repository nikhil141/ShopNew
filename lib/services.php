   <?php
   include("../include/config.php"); 
     include("../include/imgfunction.php");   
if(isset($_POST['submit']))
{
          $service_name = $_POST['service_name'];
		$service_price = $_POST['service_price'];
		$service_sdesc=$_POST['service_sdesc'];
		$service_ldesc=$_POST['service_ldesc'];
	
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		$addon_name=implode(",",$_POST['addon_name']);
		$service_image = $_FILES['service_image']['name'];
	
	
 
 	  $service_image = imgvalidationnotreq($service_image);

      if($service_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../upload_document.php';</script>";die;
      }
	    copy($_FILES['service_image']['tmp_name'],"../images/service/".$service_image);
	    
	   $add_service = mysqli_query($con,"INSERT INTO `services` (`service_name`, `service_sdesc`, `service_ldesc`, `service_price`, `service_image`, `addon_id`, `coulam2`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES ('$service_name', '$service_sdesc', '$service_ldesc', '$service_price', '$service_image', '$addon_name', '0', '$seo_title', '$seo_keyword', '$seo_desc')");

      if($add_service)
      {
	 ?>
      <script>
      alert("Your Service Successfully Added");
	 window.top.location="../add-service.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Service Not Added");
	window.top.location="../add-service.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
$serviceid=$_REQUEST['service_id'];
	     $service_name = $_POST['service_name'];
		$service_price = $_POST['service_price'];
		$service_sdesc=$_POST['service_sdesc'];
		$service_ldesc=$_POST['service_ldesc'];
		$service_price=$_POST['service_price'];
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		$image=$_POST['service_image'];
		$addon_id=$_POST['addon_name'];
          $addon_name=implode(",",$_POST['addon_name']);
		$service_image = $_FILES['service_image']['name'];
		if($service_image)
		  {
		    $service_image = imgvalidationnotreq($service_image);

      if($service_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../upload_document.php';</script>";die;
      }
		  copy($_FILES['service_image']['tmp_name'],"../images/service/".$service_image);		  }
		 else
		 {
		 $service_image=$image;
		 }
	   
 $update_service=mysqli_query($con,"UPDATE `services` SET `service_name` = '$service_name', `service_sdesc` = '$service_sdesc', `service_ldesc` = '$service_ldesc', `service_price` = '$service_price', `service_image` = '$service_image', `addon_id` = '$addon_name', `coulam2` = '0', `seo_title` = '$seo_title', `seo_keyword` = '$seo_keyword', `seo_desc` = '$seo_desc' WHERE `services`.`service_id` = '$serviceid'");
 if($update_service)
  {
  ?>
    <script>
    alert("Your Services Successfully Update");
	window.top.location="../add-service.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Services Not Updated");
    window.top.location="../add-service.php";
</script>
<?php
}
}
?>
                 