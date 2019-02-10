   <?php
 include("../include/config.php");
 include("../include/imgfunction.php");  
if(isset($_POST['submit']))
{
 $inbox_email= $_POST['inbox_email'];
 $inbox_subject = $_POST['inbox_subject'];
 $inbox_message = $_POST['inbox_message'];

 $date=date('d/m/Y');
  $attachment = $_FILES['attachment']['name'];
  $attachment = imgvalidationnotreq($attachment);

      if($attachment == "!valid" ){
      echo "<script>alert('Only PDF,Docs,JPEG, JPG & PNG file are allowed.'); window.location='../sent_mail_list.php';</script>";die;
      }
 copy($_FILES['attachment']['tmp_name'],"../images/service/".$attachment);



 $inbox = mysqli_query($con,"INSERT INTO `inbox` (`inbox_email`, `inbox_subject`, `inbox_message`, `inbox_file`, `inbox_date`) VALUES ('$inbox_email', '$inbox_subject', '$inbox_message', '$attachment', '$date')");
      if($inbox)
      {
	 ?>
      <script>
      alert("Mail send successfully");
	 window.top.location="../sent_mail_list.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Mail not send");
	window.top.location="../compose_mail.php?email=<?php echo  $inbox_email; ?>";
    </script>
   <?php
   }
   }
?>
                 