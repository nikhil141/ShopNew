   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        
	   
		$web_title = $_POST['web_title'];
		$web_link = $_POST['web_link'];
		
		$add_link = mysqli_query($con,"INSERT INTO `links` (`title`, `link`) VALUES ('$web_title','$web_link')");

      if($add_link)
      {
	 ?>
      <script>
      alert("Your Website Link Successfully Added");
	 window.top.location="../useful-links.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Website Link Not Added");
	window.top.location="../useful-links.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
       $link_id=$_REQUEST['link_id'];
	   $web_title = $_POST['web_title'];
	 	$web_link = $_POST['web_link'];
 $update_link=mysqli_query($con,"UPDATE `links` SET `title` = '$web_title',`link` = '$web_link' WHERE `links`.`id` = '$link_id'");
 if($update_link)
  {
  ?>
    <script>
    alert("Your Website Link Successfully Updated");
	window.top.location="../useful-links.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Website Link Not Updated");
    window.top.location="../useful-links.php";
</script>
<?php
}
}
?>
                 