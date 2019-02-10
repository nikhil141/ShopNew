   <?php
   include("../include/config.php"); 
if(isset($_POST['submit']))
{
        $service_id= $_POST['service_id'];
	   $subcategory_id= $_POST['subcategory_id'];
		$faq_question = $_POST['faq_question'];
		$faq_answer = $_POST['faq_answer'];
		$add_faq = mysqli_query($con,"INSERT INTO `faq` (`service_id`,`subcategory_id`, `faq_question`, `faq_answer`) VALUES ('$service_id','$subcategory_id', '$faq_question', '$faq_answer')");

      if($add_faq)
      {
	 ?>
      <script>
      alert("Your FAQ Successfully Added");
	 window.top.location="../add_faq.php";
      </script>
      <?php
      }
      else
      {
      ?>
     <script>
     alert("Your faq not added");
	window.top.location="../add_faq.php";
    </script>
    <?php
    }
    }
 if(isset($_POST['update']))
{
      $faqid=$_REQUEST['faq_id'];
	 $service_id= $_POST['service_id'];
		$faq_question = $_POST['faq_question'];
		 $subcategory_id= $_POST['subcategory_id'];
		$faq_answer = $_POST['faq_answer'];
 $update_faq=mysqli_query($con,"UPDATE `faq` SET `service_id` = '$service_id',`subcategory_id` = '$subcategory_id', `faq_question` = '$faq_question', `faq_answer` = '$faq_answer' WHERE `faq`.`faq_id` = '$faqid'");
 if($update_faq)
  {
  ?>
    <script>
    alert("Your FAQ Updated");
	window.top.location="../add_faq.php";
    </script>
    <?php
   }
   else
   {
   ?>
<script>
   alert("Your faq not Updated");
	window.top.location="../add_faq.php";
</script>
<?php
}
}
?>
                 