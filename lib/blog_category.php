   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{

		$category_name= $_POST['category_name'];
		
		$add_category= mysqli_query($con,"INSERT INTO `blog_category` (`category_name`) VALUES ('$category_name')");

      if($add_category)
      {
	 ?>
      <script>
      alert("your category successfully added");
	 window.top.location="../add_category.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your category not added");
	window.top.location="../add_category.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $categoryid=$_REQUEST['category_id'];
	
		$category_name = $_POST['category_name'];
		
 $update_category=mysqli_query($con,"UPDATE `blog_category` SET `category_name` = '$category_name' WHERE `blog_category`.`blog_cat_id` = '$categoryid'");
 if($update_category)
  {
  ?>
    <script>
    alert("your Category  Updated");
	window.top.location="../add_category.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your Categorynot Updated");
	window.top.location="../add_category.php";
</script>
<?php
}
}
?>
                 