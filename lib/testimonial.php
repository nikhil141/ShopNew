   <?php
   include("../include/config.php");
    include("../include/imgfunction.php");   
if(isset($_POST['submit']))
{
        $name = $_POST['name'];
		$designation = $_POST['designation'];
		$ldesc=$_POST['ldesc'];

		
		$image = $_FILES['image']['name'];
		  $image = imgvalidationnotreq($image);

      if($image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../testimonial.php';</script>";die;
      }
	    copy($_FILES['image']['tmp_name'],"../images/service/".$image);
     
	    $add_blog = mysqli_query($con,"INSERT INTO `testimonial` (`name`, `designation`, `ldesc`, `image`) VALUES ('$name', '$designation', '$ldesc', '$image')");

      if($add_blog)
      {
	 ?>
      <script>
      alert("your testimonial successfully added");
	 window.top.location="../testimonial.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
    alert("your testimonial successfully added");
	 window.top.location="../testimonial.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
$testimonial_id=$_REQUEST['testimonial_id'];
	 $name = $_POST['name'];
		$designation = $_POST['designation'];
		$ldesc=$_POST['ldesc'];
		$image2=$_POST['image'];

		
		$image = $_FILES['image']['name'];
		 $image = imgvalidationnotreq($image);

      if($image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../testimonial.php';</script>";die;
      }
		if($image)
		{
	    copy($_FILES['image']['tmp_name'],"../images/service/".$image);
	     }
		else
		{
		$image=$image2;
		}
	    
 $update_blog=mysqli_query($con,"UPDATE `testimonial` SET `name` = '$name', `designation` = '$designation', `ldesc` = '$ldesc', `image` = '$image' WHERE `testimonial`.`testimonial_id` = '$testimonial_id'");
 if($update_blog)
  {
  ?>
    <script>
    alert("Your Testimonial successfully Update");
	window.top.location="../testimonial.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your testimonial not updated");
    window.top.location="../testimonial.php";
</script>
<?php
}
}
?>
                 