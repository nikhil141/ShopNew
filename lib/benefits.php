   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id = $_POST['service_id'];
		$benefits_title = $_POST['benefits_title'];
		$benefits_desc=$_POST['benefits_desc'];
		$subcategory_id=$_POST['subcategory_id'];
		$benefits_image = $_FILES['benefits_image']['name'];
	    copy($_FILES['benefits_image']['tmp_name'],"../images/service/".$benefits_image);
	    $inbox = mysqli_query($con,"INSERT INTO `benefits` (`service_id`,`subcategory_id`, `benefits_title`, `benefits_desc`, `benefits_image`) VALUES ('$service_id','$subcategory_id', '$benefits_title', '$benefits_desc', '$benefits_image')");

      if($inbox)
      {
	 ?>
      <script>
      alert("Your Benefits Successfully Added");
	 window.top.location="../add_benefits.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Benefits Not Added");
	window.top.location="../add_benefits.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
$benefitsid=$_REQUEST['benefits_id'];
	$service_id = $_POST['service_id'];
		$benefits_title = $_POST['benefits_title'];
		$benefits_desc=$_POST['benefits_desc'];
		$subcategory_id=$_POST['subcategory_id'];
		$image=$_POST['benefits_image'];
		$benefits_image = $_FILES['benefits_image']['name'];
		if($benefits_image)
		  {
		  copy($_FILES['service_image']['tmp_name'],"../images/service/".$benefits_image);		  }
		 else
		 {
		 $benefits_image=$image;
		 }
	     
 $update_service=mysqli_query($con,"UPDATE `benefits` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `benefits_title` = '$benefits_title', `benefits_desc` = '$benefits_desc', `benefits_image` = '$benefits_image' WHERE `benefits`.`benefits_id` = '$benefitsid'");
 if($update_service)
  {
  ?>
    <script>
    alert("Your Benefits Successfully Update");
	window.top.location="../add_benefits.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Benefits Not Updated");
    window.top.location="../add_benefits.php";
</script>
<?php
}
}
?>
                 