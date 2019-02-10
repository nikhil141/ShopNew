   <?php
   include("../include/config.php"); 
   include("../include/imgfunction.php");   

if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
	   $subcategory_id= $_POST['subcategory_id'];
		$title = $_POST['title'];
	$pdf = $_FILES['pdf']['name'];
	 $pdf = imgvalidationnotreq($pdf);

      if($pdf == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../email_upload.php';</script>";die;
      }
	    copy($_FILES['pdf']['tmp_name'],"../../images/pdf/".$pdf);
		$add_faq = mysqli_query($con,"INSERT INTO `email_pdf` (`service_id`, `subcategory_id`, `title`, `pdf`) VALUES ('$service_id', '$subcategory_id', '$title', '$pdf')");

      if($add_faq)
      {
	 ?>
      <script>
      alert("Your PDF UPLOADED SUCCESSFULLY");
	 window.top.location="../email_upload.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your PDF NOT UPLOADED");
	 window.top.location="../email_upload.php";
	     </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $faqid=$_REQUEST['pdf_id'];
	  $service_id= $_POST['service_id'];
	   $subcategory_id= $_POST['subcategory_id'];
		$title = $_POST['title'];	$pdf1=$_POST['pdf1'];
	$pdf = $_FILES['pdf']['name'];

	 $pdf = imgvalidationnotreq($pdf);
     if($pdf == "!valid" )
	 {
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../email_upload.php';</script>";die;
      }
	  if($pdf=='')
	  {
	  $pdf=$pdf1;
	   copy($_FILES['pdf']['tmp_name'],"../../images/pdf/".$pdf);
	  }
	  else
	  {
	    copy($_FILES['pdf']['tmp_name'],"../../images/pdf/".$pdf);
		}
 $update_faq=mysqli_query($con,"UPDATE `email_pdf` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `title` = '$title', `pdf` = '$pdf' WHERE `email_pdf`.`email_id` = '$faqid'");
 if($update_faq)
  {
  ?>
    <script>
    alert("Your Email PDF Updated");
	window.top.location="../email_upload.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Email PDF Not Updated");
	window.top.location="../email_upload.php";
</script>
<?php
}
}
?>
                 