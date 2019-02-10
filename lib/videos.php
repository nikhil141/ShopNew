   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        
	   
		$video_title = $_POST['video_title'];
		$video_link = $_POST['video_link'];
		
		$add_video = mysqli_query($con,"INSERT INTO `videos` (`title`, `link`) VALUES ('$video_title','$video_link')");

      if($add_video)
      {
	 ?>
      <script>
      alert("Your Video Successfully Added");
	 window.top.location="../videos.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your Video Not Added");
	window.top.location="../videos.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
       $video_id=$_REQUEST['video_id'];
	   $video_title = $_POST['video_title'];
	 	$video_link = $_POST['video_link'];
 $update_video=mysqli_query($con,"UPDATE `videos` SET `title` = '$video_title',`link` = '$video_link' WHERE `videos`.`id` = '$video_id'");
 if($update_video)
  {
  ?>
    <script>
    alert("Your Video Successfully Updated");
	window.top.location="../videos.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
    alert("Your Video Not Updated");
    window.top.location="../videos.php";
</script>
<?php
}
}
?>
                 