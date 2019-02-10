   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{

		$point= $_POST['point'];
		$value= $_POST['value'];
		
		$add_point= mysqli_query($con,"INSERT INTO `credit_point` (`point`, `value`) VALUES ('$point', '$value')");

      if($add_point)
      {
	 ?>
      <script>
      alert("your point successfully added");
	 window.top.location="../credit_point.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your category not added");
	window.top.location="../credit_point.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $pointid=$_REQUEST['point_id'];
	
			$point= $_POST['point'];
		$value= $_POST['value'];
		
 $update_category=mysqli_query($con,"UPDATE `credit_point` SET `point` = '$point', `value` = '$value' WHERE `credit_point`.`point_id` = '$pointid';
");
 if($update_category)
  {
  ?>
    <script>
    alert("your point  Updated");
	window.top.location="../credit_point.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your point not Updated");
	window.top.location="../credit_point.php";
</script>
<?php
}
}
?>
                 