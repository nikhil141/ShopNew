<?php
include("../include/config.php");
    include("../include/imgfunction.php");   
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$id=$_POST['id'];

 $file = $_FILES['file']['name'];
 
 	  $file = imgvalidationnotreq($file);

      if($file == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../upload_document.php';</script>";die;
      }
  copy($_FILES['file']['tmp_name'],"../../img/profile/".$file);
echo $msg="INSERT INTO `download_document` (`upload_document_title`,`upload_document_file` ,`user_email`) VALUES ('$title','$file','$id')";
  
	$query = mysqli_query($con,"INSERT INTO `download_document` (`upload_document_title`,`upload_document_file` ,`user_email`) VALUES ('$title','$file','$id')"); 
	if($query) {
	header("location:../upload_document.php?id=$id");
		
	}
	else {
		echo "<script>alert('Faild');
		window.location=../upload_document.php;
		</script>";
	}
}
?>