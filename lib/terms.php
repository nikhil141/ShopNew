   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
     
		$page = $_POST['page'];
		$desc = $_POST['desc'];
		$add_faq = mysqli_query($con,"INSERT INTO `terms_and_conditions` (`page`, `desc`) VALUES ('$page', '$desc')");

      if($add_faq)
      {
	 ?>
      <script>
      alert("Your Details successfully added");
	 window.top.location="../viewterms.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your details not added");
	window.top.location="../terms.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $id=$_REQUEST['id'];
	 
		$page = $_POST['page'];
		$desc = $_POST['desc'];
 $update_faq=mysqli_query($con,"UPDATE `terms_and_conditions` SET `page` = '$page', `desc` = '$desc' WHERE `terms_and_conditions`.`id` = '$id'");
 if($update_faq)
  {
  ?>
    <script>
    alert("Your Details  Updated");
	window.top.location="../viewterms.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Terms Updated");
	window.top.location="../terms.php";
</script>
<?php
}
}
?>
                 