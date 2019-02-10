<?php

require_once('../connect/db.php');


if(isset($_POST['roomtitle']) )

{	
	$roomtitle = $_POST['roomtitle'];
	$roomtitle = mysqli_real_escape_string($con, $roomtitle);

 $time = IndTime();
$sql1 = "INSERT INTO `addroom`(`add_title`, `time`) VALUES ('$roomtitle', '$time')";

if(mysqli_query($con, $sql1))
{
  $roomtitle = "";
  $time = "";
  $sql1 = "";
  $res = "Data Inserted Successfully:";
  echo json_encode($res);

}
else {
  $error = "Data Not Inserted,Some Problem Occur.";
  echo json_encode($error);
}

}else{
	echo "<script>alert('NoT Done');</script>";
}



if(isset($_POST['editroomtitle']) )

{	
	$roomtitle = $_POST['editroomtitle'];
	$roomtitle = mysqli_real_escape_string($con, $roomtitle);
	$ank = $_POST['ank'];
	$ank = mysqli_real_escape_string($con, $ank);

 $time = IndTime();
$sql1 = "UPDATE `addroom` SET `add_title` = '$roomtitle', `updatedtime` = '$time' WHERE add_id = $ank ";

if(mysqli_query($con, $sql1))
{
	echo "Updated Successfully";
  
}
else {
  echo "Error.".mysqli_error($con);
  
}

}else{
	echo "<script>alert('NoT Done');</script>";
}


if(isset($_POST['deleteroom']) )

{	
	$deleteroom = $_POST['deleteroom'];
	$deleteroom = mysqli_real_escape_string($con, $deleteroom);

 
$sqldel = "UPDATE `addroom` SET add_status = 0 WHERE add_id = $deleteroom";

if(mysqli_query($con, $sqldel))
{
  $deleteroom = "";
  
  $sqldel = "";
  

}
else {
  echo "Data Not Inserted,Some Problem Occur.";
  
}

}else{
	echo "<script>alert('NoT Done');</script>";
}





?>