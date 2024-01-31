<?php
$con=include("connect.php");
if($con==true)
{
	//echo "connection create";
	
}
else
{
	//echo "connection error";
	//die();
}
$dept=$_POST['deptid'];
$paygrade=$_POST['paygrade'];
//echo $dept;
//echo $paygrade;
$basic=30*$paygrade;
//echo $basic;
//validation for checking the dept_id

$query="select *from tbl_salary where dptid='$dept'";
$res=mysql_query($query);
$count=mysql_num_rows($res);
if($count>=1)
{
	// multiple records exist
	echo "<script>alert('Salary already added');window.location.href='addsalary.php'</script>";
	
}
else 
{
$insert=" insert into tbl_salary(dptid,paygrade,basic) value('$dept','$paygrade','$basic')";
$check=mysql_query($insert);
if($check==true)
{
	echo "<script>alert('Paygrade added Successfully');window.location.href='addsalary.php'</script>";
	
}
}//else closing

?>