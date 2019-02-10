   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
       
		 $document_library_category = $_POST['document_library_category_name'];
	
		
		$document_library_category_name = mysqli_query($con,"INSERT INTO `document_library_category` (`document_library_category_name`) VALUES ('$document_library_category')");

      if($add_feature)
      {
	 ?>
      <script>
      alert("your document library category successfully added");
	 window.top.location="../add_document_library_category.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your document library category successfully added");
	window.top.location="../add_document_library_category.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $document_library_category_id=$_REQUEST['document_library_category_id'];
	
	 $document_library_category_name = $_POST['document_library_category_name'];

	 
	 
	 
 $update_feature=mysqli_query($con,"UPDATE `document_library_category` SET `document_library_category_name` = '$document_library_category_name' WHERE `document_library_category`.`document_library_category_id` = '$document_library_category_id'");
 if($update_feature)
  {
  ?>
    <script>
    alert("your  document library category successfully Update");
	window.top.location="../add_document_library_category.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("your  document library category not updated");
  	window.top.location="../add_document_library_category.php";
</script>
<?php
}
}
?>
                 