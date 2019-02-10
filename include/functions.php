<?php
include("config.php");
#### function for dynamic drop down ##########
function get_option_list($table,$col_id,$col_value,$sel)
{
$sql="select * from $table order by $col_value";
$rs=mysql_query($sql)or die(mysql_error());
$option_list="<option value='0'>Please Select</option>";
while($data=mysql_fetch_assoc($rs))
{
if($data[$col_id]==$sel)
{
$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>";
}
else
{
$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>";
}
}
return $option_list;
}
#### function for checkbox..
function get_check_list($table,$col_id,$col_value,$name,$sel)
{
$sql="select * from $table order by $col_value";
$rs=mysql_query($sql)or die(mysql_error());
$check_list="";
$sel=explode(",",$sel);
while($data=mysql_fetch_assoc($rs))
{
if(in_array($data[$col_id],$sel))
{
$check_list.="<input type='checkbox' value='$data[$col_id]' checked name='$name'>$data[$col_value]";
}
else
{
$check_list.="<input type='checkbox' value='$data[$col_id]' name='$name'>$data[$col_value]";
}
}
return $check_list;
}

#####function for value##############
function get_value($table,$col_id,$col_name,$sel)
{
$sql="select $col_name  from $table where $col_id='$sel'";
$rs=mysql_query($sql)or die(mysql_error());
$data=mysql_fetch_assoc($rs);
return $data[$col_name];
} 

######functions for multiple Values...#####
function get_multiple_value($table,$col_id,$col_name,$sel)
{
$sql="select $col_name from $table where $col_id in($sel)";
$rs=mysql_query($sql)or die(mysql_error());
$multi_value="";
while($data=mysql_fetch_assoc($rs))
{
$multi_value.=$data[$col_name].",";
}
return $multi_value;
}
?>