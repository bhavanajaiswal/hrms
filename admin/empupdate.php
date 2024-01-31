<?php
session_start();

if($_SESSION['user']=="")
{
 session_destroy();
header("Location:../index.php"); 

}
$id=$_REQUEST['id'];
include("connect.php");
$query="select * from tbl_emp where emid='$id'";


$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{

?>

<form action="edit.php" method="post">
<input type="hedden" name="id" value="<?php echo $row['name'];?>"/>
Employeename
<input type="text" name="name" value="<?php echo $row['name'];?>"/>
</br>
F'name
<input type="text" name="fname" value="<?php echo $row['fname'];?>"/></br>

Gender
<input type="radio" name="a" value="male"<?php if($row['gender']='male'){?> checked <?php}?>/>
<input type="radio" name="a" value="female"<?php if($row['gender']='female'){?> checked <?php}?>/>
<br/>
DOB
<input type="date" name="dob" value="<?php echo $row['dob'];?>"/>
<br/>
email
<input type="email" name="email" value="<?php echo $row['email'];?>"/>
<br/>
password
<input type="password" name="password" value="<?php echo $row['password'];?>"/>
<br/>
Mobile
<input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/><br/>
Address
<textarea name="add" value="<?php echo $row['address']; ?>"></textarea>
<br/>
<!--Department
<select>
<option>--selectdepartment-- <option/>

</select>
<td><img src="upload/"value="<?php echo $row['photo'];?>" height="50px" width="50px"/></td>-->

</form>
<?php
}
?>