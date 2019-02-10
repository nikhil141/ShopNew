<?php
include("../include/config.php");
if(isset($_POST['submit']))
{
	$user_email=$_POST['user_email'];
	$remark=$_POST['remark'];
	$document_id=$_POST['confirm'];
  
    $count=count($document_id);
	
	for($i=0;$i<$count; $i++)
	{
	$sql=mysqli_query($con,"INSERT INTO `verified_document` (`vdocument_id`, `user_email`, `remark`) VALUES ('$document_id[$i]', '$user_email', '$remark')");
	}
    if($sql)
	{
		?>
		<script>
		alert("Verifide Document");
		window.location="../upload_document.php?id=<?php echo $user_email; ?>";
		</script>
		<?php
	}
}
?>