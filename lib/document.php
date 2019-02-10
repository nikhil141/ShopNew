   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
	    $subcategory_id= $_POST['subcategory_id'];
		$document_title = $_POST['document_title'];
		$document_serial = $_POST['serial_no'];
		
		$add_document = mysqli_query($con,"INSERT INTO `document` (`service_id`,`subcategory_id`, `document_serial`, `document_title`) VALUES ('$service_id','$subcategory_id', '$document_serial', '$document_title')");

      if($add_document)
      {
	 ?>
      <script>
      alert("your Document successfully added");
	 window.top.location="../add_document_required.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your Dublicate serial no plz choose another serial no");
	window.top.location="../add_document_required.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $documentid=$_REQUEST['document_id'];
	 $service_id= $_POST['service_id'];
	   $subcategory_id= $_POST['subcategory_id'];
		$document_title = $_POST['document_title'];
		$document_serial = $_POST['serial_no'];
 $update_feature=mysqli_query($con,"UPDATE `document` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `document_serial` = '$document_serial', `document_title` = '$document_title' WHERE `document`.`document_id` = '$documentid'");
 if($update_feature)
  {
  ?>
    <script>
    alert("your Document  Updated");
	window.top.location="../add_document_required.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your Document not Updated");
	window.top.location="../add_document_required.php";
</script>
<?php
}
}
?>
                 