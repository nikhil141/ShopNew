<?php 
session_start();
?>
<?php 
 include("../include/config.php");
 

if(isset($_POST['home_btn']))
{
     $seo_page=$_POST['seo_page'];   
    $seo_title=$_POST['seo_title'];
    $seo_keyword=$_POST['seo_keyword'];
    $seo_desc=$_POST['seo_desc'];
		
	

	$home_query = mysqli_query($con,"INSERT INTO `seo` (`seo_page`, `seo_title`, `seo_keyword`, `seo_desc`) VALUES ('$seo_page', '$seo_title', '$seo_keyword', '$seo_desc')");

if($home_query)
{
	?>
    <script>
    alert("your Seo successfully added");
	window.top.location="../seo.php";
    </script>
    <?php
}
else
{
?>
<script>
    alert("your Seo not added");
	
    </script>
<?php
}
}

if(isset($_POST['home_update']))
{
$seoid=$_REQUEST['seo_id'];

     $seo_page=$_POST['seo_page'];   
    $seo_title=$_POST['seo_title'];
    $seo_keyword=$_POST['seo_keyword'];
    $seo_desc=$_POST['seo_desc'];
		
	$query=mysqli_query($con,"UPDATE `seo` SET `seo_page` = '$seo_page', `seo_title` = '$seo_title', `seo_keyword` = '$seo_keyword', `seo_desc` = '$seo_desc' WHERE `seo`.`seo_id` = '$seoid'");


if($query)
{
	?>
    <script>
    alert("your seo successfully Update");
	window.top.location="../seo.php";
    </script>
    <?php
}
else
{
?>
<script>
    alert("your seo not updated");
	
    </script>
<?php
}
}

?>


