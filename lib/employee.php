<?php
include("../include/config.php");

if(isset($_POST['submit']))
{
	 
	 $fname = $_POST['employee_full_name'] ;
	 $add  = $_POST['employee_address'] ;
	 $state    = $_POST['state'] ;
	
	 $city    = $_POST['city'] ;
	 $pincode = $_POST['pincode'];
	 $off_mobile = $_POST['off_mobile'];
	 $per_mobile = $_POST['per_mobile'] ;
	 $ano = $_POST['aadhar_no'];
	
	 $gender   = $_POST['gender'];
	 $dob      = $_POST['dob'];

	 $email      = $_POST['email'];
	 $emp_father      = $_POST['employee_father'];
	 $father_mob      = $_POST['father_mob'];

	 $emp_mother     = $_POST['employee_mother'];
	 $mother_mob      = $_POST['mother_mob'];

	 $driv_lic      = $_POST['drv_lic_no'];
	 $voter_card      = $_POST['voter_no'];
	 
    $date = date('Y-m-d');

   
   
    $sql = mysqli_query($con,"INSERT INTO tbl_employee (`employee_full_name`, `employee_address`, `state`,`city`, `pincode`, `off_mobile`, `per_mobile`, `aadhar_no`,`gender`, `dob`, `email`, `employee_father`, `father_mob`, `employee_mother`, `mother_mob`, `drv_lic_no`,`voter_no`,`date`)VALUES('$fname', '$add', '$state' ,'$city', '$pincode', '$off_mobile','$per_mobile', '$ano', '$gender', '$dob', '$email' , '$emp_father','$father_mob', '$emp_mother','$mother_mob',  '$driv_lic', '$voter_card' , '$date')");  
	
	//echo "INSERT INTO tbl_employee (`employee_full_name`, `employee_address`, `state`,`city`, `pincode`, `off_mobile`, `per_mobile`, `aadhar_no`,`gender`, `dob`, `email`, `employee_father`, `father_mob`, `employee_mother`, `mother_mob`, `drv_lic_no`,`voter_no`,`date`)VALUES('$fname', '$add', '$state' ,'$city', '$pincode', '$off_mobile','$per_mobile', '$ano', '$gender', '$dob', '$email' , '$emp_father','$father_mob', '$emp_mother','$mother_mob',  '$driv_lic', '$voter_card' , '$date')";
	//echo "INSERT INTO tbl_employee (`s_employee_name`, `s_employee_address`, `state_id`,`city_id`, `s_employee_pincode`, `s_employee_off_mobile`, `s_employee_per_mobile`, `s_employee_addhar`,`s_employee_gender`, `s_employee_dob`, `s_employee_email`, `s_employee_father_name`, `s_employee_father_mobile`, `s_employee_mother_name`, `s_employee_mother_mobile`, `s_employee_dl`, `s_employee_votercard_no`, `s_employeeid`, `department_id`, `designation_id`, `date`)VALUES('$fullname', '$address', '$state' ,'$city', '$pincode', '$off_mobile','$per_mobile', '$aadharno', '$gender', '$dob', '$email','$father_name','$father_mob', '$mother_name','$mother_mob',  '$driv_lic', '$voter_card', '$emp_id', '$department', '$designation', '$date')";die;
		
	if($sql)
	{
		?>
		<script>
		alert("Employee Details Submitted Successfully.....");
		window.location="../emp-zone.php";
		</script>
		<?php
	}
}


################Edit Client/School###################

if(isset($_POST['update']))
{

	$fname = $_POST['employee_full_name'] ;
	 $add  = $_POST['employee_address'] ;
	 $state    = $_POST['state'] ;
	
	 $city    = $_POST['city'] ;
	 $pincode = $_POST['pincode'];
	 $off_mobile = $_POST['off_mobile'];
	 $per_mobile = $_POST['per_mobile'] ;
	 $ano = $_POST['aadhar_no'];
	
	 $gender   = $_POST['gender'];
	 $dob      = $_POST['dob'];

	 $email      = $_POST['email'];
	 $emp_father      = $_POST['employee_father'];
	 $father_mob      = $_POST['father_mob'];

	 $emp_mother     = $_POST['employee_mother'];
	 $mother_mob      = $_POST['mother_mob'];

	 $driv_lic      = $_POST['drv_lic_no'];
	 $voter_card      = $_POST['voter_no'];
	 $id=$_POST['id'];
    $date = date('Y-m-d');

$sql=mysqli_query($con,"UPDATE `tbl_employee` SET `employee_full_name` = '$fname' , `employee_address` = '$add', `state` = '$state', `city`='$city',`pincode` = '$pincode',`off_mobile` = '$off_mobile', `per_mobile` = '$per_mobile', `aadhar_no` = '$ano', `gender` = '$gender',`dob` = '$dob', `email` = '$email', `employee_father`= '$emp_father', `father_mob`= '$father_mob', `employee_mother`='$emp_mother', `mother_mob` = '$mother_mob', `drv_lic_no` = '$driv_lic', `voter_no` = '$voter_card'  WHERE `employee_id` = '$id' ");

//echo "UPDATE `s_employee_reg` SET `s_employee_name` = '$fullname' , `s_employee_address` = '$address', `state_id` = '$state', `city_id`='$city',`s_employee_pincode` = '$pincode',`s_employee_off_mobile` = '$off_mobile', `s_employee_per_mobile` = '$per_mobile', `s_employee_addhar` = '$aadharno', `s_employee_gender` = '$gender',`s_employee_dob` = '$dob', `s_employee_email` = '$email', `s_employee_father_name`= '$father_name', `s_employee_father_mobile`= '$father_mob', `s_employee_mother_name`='$mother_name', `s_employee_mother_mobile` = '$mother_mob', `s_employee_dl` = '$driv_lic', `s_employee_votercard_no` = '$voter_card', `s_employeeid` = '$emp_id', `department_id` = '$department', `designation_id` = '$designation' WHERE `s_employee_reg`.`s_employee_id` = '$edit_id'"; die;

//echo "UPDATE `school_reg` SET `s_reg_contact` = '$mobileno' , `s_reg_pname` = '$prin_name', `s_reg_sname` = '$schoolname', `s_reg_saddress`='$schooladdress',`s_reg_city` = '$city',`s_reg_state` = '$state', `s_reg_pincode` = '$pincode', `s_reg_email` = '$email',`s_reg_city` = '$city', `s_reg_slogo` = '$image_name', `s_reg_simg`= '$school_img', `s_reg_board`= '$chkbrd', `s_reg_type`='$chktype', `s_reg_from` = '$fromclass', `s_reg_to` = '$classto' WHERE `school_reg`.`s_reg_id` = '$edit_id')"; die;

if($sql)
{
	?>
	<script>
	alert("Employee Updated Successfully.....");
	window.location="../emp-zone.php";
	</script>

	<?php
}
else
{
	?>
	<script>
	alert("Employee Not Updated ");
	window.location="../employee.php";
	</script>
	<?php
}

}


/////////////////// Delete Client/School ////////////////////////////

/*if($_REQUEST['del_id'])
{
$delid=$_REQUEST['del_id'];

$sql=mysqli_query($con,"UPDATE `s_employee_reg` SET `status` = '1' WHERE `s_employee_reg`.`s_employee_id` = '$delid'");

if($sql)
{
	?>
	<script>
	alert("Employee Deleted Successfully.....");
	window.location="../employee.php";
	</script>

	<?php
}
else
{
	?>
	<script>
	alert("Employee Not Deleted ");
	window.location="../employee.php";
	</script>
	<?php
}	
}*/


?> 