   <?php
  include("../include/config.php");
     include("../include/imgfunction.php"); 
if(isset($_POST['submit']))
{ 

          $document_library_category_id= $_POST['document_library_category_id'];
		$document_library_title = $_POST['document_library_title'];
		$document_library_desc = $_POST['document_library_desc'];
		$document_library_lock = $_POST['document_library_lock'];
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		
		$document_library_image = $_FILES['document_library_image']['name'];
		$document_library_image = imgvalidationnotreq($document_library_image);

      if($document_library_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      }
	    copy($_FILES['document_library_image']['tmp_name'],"../images/service/".$document_library_image);
	    
	    $document_library_docx = $_FILES['document_library_docx']['name'];
	    $document_library_docx = imgvalidationnotreq($document_library_docx);

      if($document_library_docx == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      }
	    copy($_FILES['document_library_docx']['tmp_name'],"../images/service/".$document_library_docx);
	    $document_library_pdf = $_FILES['document_library_pdf']['name'];
	     $document_library_pdf = imgvalidationnotreq($document_library_pdf);

      if($document_library_pdf == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      }
	    copy($_FILES['document_library_pdf']['tmp_name'],"../images/service/".$document_library_pdf);
		
		
		$add_document = mysqli_query($con,"INSERT INTO `document_library` (`document_library_category_id`, `document_library_title`, `document_library_image`, `document_library_desc`, `document_library_lock`, `document_library_docx`, `document_library_pdf`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES ('$document_library_category_id', '$document_library_title', '$document_library_image', '$document_library_desc', '$document_library_lock', '$document_library_docx', '$document_library_pdf', '$seo_title', '$seo_keyword', '$seo_desc')");

      if($add_document)
      {
	 ?>
      <script>
      alert("Your Document successfully added");
	 window.top.location="../add_document_library.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your Document not added");
	window.top.location="../add_document_library.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{     
         $document_library_id=$_POST['document_library_id'];
	    $document_library_image1=$_POST['document_library_image'];
	    $document_library_file1=$_POST['document_library_docx'];
	     $document_library_file2=$_POST['document_library_pdf'];
         $document_library_category_id= $_POST['document_library_category_id'];
		$document_library_title = $_POST['document_library_title'];
		$document_library_desc = $_POST['document_library_desc'];
		$document_library_lock = $_POST['document_library_lock'];
		$seo_title=$_POST['seo_title'];
		$seo_keyword=$_POST['seo_keyword'];
		$seo_desc=$_POST['seo_desc'];
		$document_library_image = $_FILES['document_library_image']['name'];
		$document_library_image = imgvalidationnotreq($document_library_image);

      if($document_library_image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      }
		if($document_library_image)
		{
	    copy($_FILES['document_library_image']['tmp_name'],"../images/service/".$document_library_image);
	    }
	    else
	    {
	    $document_library_image=$document_library_image1;
	    }
	    
	    $document_library_docx = $_FILES['document_library_docx']['name'];
	    	$document_library_docx = imgvalidationnotreq($document_library_docx);

      if($document_library_docx == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      }
	    if($document_library_docx)
	    {
	    copy($_FILES['document_library_docx']['tmp_name'],"../images/service/".$document_library_docx);
	    }
	    else
	    {
	    $document_library_docx=$document_library_file1;
	    }
	    
	    
	    $document_library_pdf = $_FILES['document_library_pdf']['name'];
	    
	       	$document_library_pdf = imgvalidationnotreq($document_library_pdf);

      if($document_library_pdf == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../add_document_library.php';</script>";die;
      
	    }
	    if($document_library_pdf)
	    {
	    copy($_FILES['document_library_pdf']['tmp_name'],"../images/service/".$document_library_pdf);
	    }
	    else
	    {
	    $document_library_pdf=$document_library_file2;
	    }
	    
	    
 $update_feature=mysqli_query($con,"UPDATE `document_library` SET `document_library_category_id` = '$document_library_category_id', `document_library_title` = '$document_library_title', `document_library_image` = '$document_library_image', `document_library_desc` = '$document_library_desc', `document_library_lock` = '$document_library_lock', `document_library_docx` = '$document_library_docx', `document_library_pdf` = '$document_library_pdf', `seo_title` = '$seo_title', `seo_keyword` = '$seo_keyword', `seo_desc` = '$seo_desc' WHERE `document_library`.`document_library_id` = '$document_library_id'");
 if($update_feature)
  {
  ?>
    <script>
    alert("Your  Document Library  Updated");
		window.top.location="../add_document_library.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Document Library not Updated");
	window.top.location="../add_document_library.php";
</script>
<?php
}
}
?>
                 