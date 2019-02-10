   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{

		$credit_from_amount= $_POST['credit_from_amount'];
		$credit_to_amount= $_POST['credit_to_amount'];
		$credit_point= $_POST['credit_point'];
		$credit_value= $_POST['credit_value'];
		$credit_validity= $_POST['credit_validity'];
		
		$add_point= mysqli_query($con,"INSERT INTO `credit_point_details` (`credit_from_amount`, `credit_to_amount`, `credit_point`, `credit_value`, `credit_validity`) VALUES ('$credit_from_amount', '$credit_to_amount', '$credit_point', '$credit_value', '$credit_validity')");

      if($add_point)
      {
	 ?>
      <script>
      alert("your  credit point details successfully added");
	 window.top.location="../credit_point_details.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("your credit point details not added");
	window.top.location="../credit_point_details.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $credit_detail_id=$_REQUEST['credit_detail_id'];
	$credit_from_amount= $_POST['credit_from_amount'];
		$credit_to_amount= $_POST['credit_to_amount'];
		$credit_point= $_POST['credit_point'];
		$credit_value= $_POST['credit_value'];
		$credit_validity= $_POST['credit_validity'];
		
 $update_category=mysqli_query($con,"UPDATE `credit_point_details` SET `credit_from_amount` = '$credit_from_amount', `credit_to_amount` = '$credit_to_amount', `credit_point` = '$credit_point', `credit_value` = '$credit_value', `credit_validity` = '$credit_validity' WHERE `credit_point_details`.`credit_detail_id` = '$credit_detail_id'");
 if($update_category)
  {
  ?>
    <script>
    alert("credit point details Updated");
		window.top.location="../credit_point_details.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("your credit point details not Updated");
	window.top.location="../credit_point_details.php";
</script>
<?php
}
}
?>
                 