   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{

		$category_name= $_POST['category_name'];
		
		$add_category= mysqli_query($con,"INSERT INTO `ebookcategory` (`category_name`) VALUES ('$category_name')");

      if($add_category)
      {
	 ?>
      <script>
      alert("Your e-book category successfully added");
	 window.top.location="../add_ebookcategory.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your category not added");
 window.top.location="../add_ebookcategory.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $categoryid=$_REQUEST['category_id'];
	
		$category_name = $_POST['category_name'];
		
 $update_category=mysqli_query($con,"UPDATE `ebookcategory` SET `category_name` = '$category_name' WHERE `ebookcategory`.`ebook_category_id` = '$categoryid'");
 if($update_category)
  {
  ?>
    <script>
    alert("Your Category  Updated");
 window.top.location="../add_ebookcategory.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your Categorynot Updated");
	 window.top.location="../add_ebookcategory.php";
</script>
<?php
}
}

if($_REQUEST['status_id'])
{
$update_category=mysqli_query($con,"UPDATE `ebookcategory` SET `status` = '1' WHERE `ebookcategory`.`ebook_category_id` = '$_REQUEST[status_id]'");

  ?>
    <script>
alert("Delete Sucessfully");
 window.top.location="../add_ebookcategory.php";
    </script>
    <?php

}
?>
                 