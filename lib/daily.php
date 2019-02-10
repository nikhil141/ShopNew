<?php
include("../include/config.php");

if(isset($_POST['save']))
{
	 
	 $cname = $_POST['customer_name'] ;
	 $address  = $_POST['address'];
	 $pro1    = $_POST['product1'] ;
	 var_dump($pro1);
	 $pro2    = $_POST['product2'] ;
	 
	 
	 
	 for( $i=1,$j=0; $i<=count($pro1), $j<=count($pro2); $i++,$j++)
	 {
		 $sql = mysqli_query($con,"INSERT INTO tbl_daily(`customer_name`, `address`, `product1`,`product2` )VALUES('$cname', '$address', '$pro1arr[i]', '$pro2arr[j]' )") ;
	 }


    //$date = date('Y-m-d');
      
	
	if($sql)
	{
		?>
		<script>
		alert("Saved Successfully.....");
		window.location="../daily-sales.php";
		</script>
		<?php
	}
}


################Edit Client/School###################

if(isset($_POST['update']))
{

	$cname = $_POST['customer_name'] ;
	 $address  = $_POST['address'] ;
	 $mobileno    = $_POST['mobile_no'] ;
	
	 $state    = $_POST['state'] ;
	 $city = $_POST['city'];
	 $pincode = $_POST['pin_code'];
	 
	 $id=$_POST['id'];
    //$date = date('Y-m-d');

$sql=mysqli_query($con,"UPDATE `tbl_customer` SET `customer_name` = '$cname' , `address` = '$address', `mobile_no` = '$mobileno', `state`='$state',`city` = '$city',`pin_code` = '$pincode' WHERE `customer_id` = '$id' ");

//echo "UPDATE `s_employee_reg` SET `s_employee_name` = '$fullname' , `s_employee_address` = '$address', `state_id` = '$state', `city_id`='$city',`s_employee_pincode` = '$pincode',`s_employee_off_mobile` = '$off_mobile', `s_employee_per_mobile` = '$per_mobile', `s_employee_addhar` = '$aadharno', `s_employee_gender` = '$gender',`s_employee_dob` = '$dob', `s_employee_email` = '$email', `s_employee_father_name`= '$father_name', `s_employee_father_mobile`= '$father_mob', `s_employee_mother_name`='$mother_name', `s_employee_mother_mobile` = '$mother_mob', `s_employee_dl` = '$driv_lic', `s_employee_votercard_no` = '$voter_card', `s_employeeid` = '$emp_id', `department_id` = '$department', `designation_id` = '$designation' WHERE `s_employee_reg`.`s_employee_id` = '$edit_id'"; die;

//echo "UPDATE `school_reg` SET `s_reg_contact` = '$mobileno' , `s_reg_pname` = '$prin_name', `s_reg_sname` = '$schoolname', `s_reg_saddress`='$schooladdress',`s_reg_city` = '$city',`s_reg_state` = '$state', `s_reg_pincode` = '$pincode', `s_reg_email` = '$email',`s_reg_city` = '$city', `s_reg_slogo` = '$image_name', `s_reg_simg`= '$school_img', `s_reg_board`= '$chkbrd', `s_reg_type`='$chktype', `s_reg_from` = '$fromclass', `s_reg_to` = '$classto' WHERE `school_reg`.`s_reg_id` = '$edit_id')"; die;

if($sql)
{
	?>
	<script>
	alert("Customer Updated Successfully.....");
	window.location="../customer.php";
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