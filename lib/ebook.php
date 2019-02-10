   <?php
   
$date=date('dms');
   include("../include/config.php"); 
    include("../include/imgfunction.php");   
if(isset($_POST['submit']))
{
        $category_id= $_POST['category_id'];
	   $book_name=$_POST['book_name'];
		$desc = $_POST['desc'];
		$details = $_POST['details'];
				
		$image = $_FILES['image']['name'];
		$image = imgvalidationnotreq($image);

      if($image == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../ebook.php';</script>";die;
      }

$img_tmp =$_FILES['image']['tmp_name'];
	      
		move_uploaded_file($img_tmp,"../../images/ebook/$date$image");
		$add_feature = mysqli_query($con,"INSERT INTO `ebook` (`ebook_category_id`, `book_name`, `desc`, `image`) VALUES ('$category_id', '$book_name', '$desc', '$date$image')");

      if($add_feature)
      {

	 ?>
      <script>
      alert("Your Ebook Added Successfully....");
	 window.top.location="../ebook.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your E book Not Added");
	window.top.location="../ebook.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{

$ebook_id=$_POST['ebook_id'];

        $category_id= $_POST['category_id'];
	           $image1= $_POST['image1'];
	   $book_name=$_POST['book_name'];
		$desc = $_POST['desc'];
		
				
		$image = $_FILES['image']['name'];
          if($image=='')
		{
		$image=$image1;
	        $img_tmp =$_FILES['image']['tmp_name'];
	    }
	    else
	    {
	    $image=$date.$image;
	     $img_tmp =$_FILES['image']['tmp_name'];
	    }
	
	    
	    
 $update_feature=mysqli_query($con,"UPDATE `ebook` SET `ebook_category_id` = '$category_id', `book_name` = '$book_name', `desc` = '$desc', `image` = '$image' WHERE `ebook`.`ebook_id` = '$ebook_id'");
 if($update_feature)
  {
   move_uploaded_file($img_tmp,"../../images/ebook/$image");
  ?>
    <script>
    alert("Your E-Book Update Sucessfully...");
	window.top.location="../ebook.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your E-book Not Updated");
    window.top.location="../ebook.php";
</script>
<?php
}
}


if($_REQUEST['status_id'])
{
	    
 $update_feature=mysqli_query($con,"UPDATE `ebook` SET `status` = '1' WHERE `ebook`.`ebook_id` = '$_REQUEST[status_id]'");
 ?>
 <script>
 alert("Delete Sucessfully....");
 window.location="../ebook.php";
 </script>
 <?php
}

?>
                 