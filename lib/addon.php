   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{

		$addon_name= $_POST['addon_name'];
		$addon_price= $_POST['addon_price'];
		$addon_desc= $_POST['addon_desc'];
		
		$add_addon= mysqli_query($con,"INSERT INTO `addon` (`addon_name`, `addon_price`, `addon_desc`) VALUES ('$addon_name', '$addon_price', '$addon_desc')");

      if($add_addon)
      {
	 ?>
      <script>
      alert("Your addon successfully added");
	 window.top.location="../package_addon.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your addon not added");
window.top.location="../package_addon.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $addonid=$_REQUEST['addon_id'];
	$addon_name= $_POST['addon_name'];
		$addon_price= $_POST['addon_price'];
		$addon_desc= $_POST['addon_desc'];
		
 $update_category=mysqli_query($con,"UPDATE `addon` SET `addon_name` = '$addon_name', `addon_price` = '$addon_price', `addon_desc` = '$addon_desc' WHERE `addon`.`addon_id` = '$addonid'
");
 if($update_category)
  {
  ?>
    <script>
    alert("your addon  Updated");
	window.top.location="../package_addon.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your addon not Updated");
	window.top.location="../package_addon.php";
</script>
<?php
}
}
?>
                 