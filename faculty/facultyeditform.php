<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
$sql='select * from faculty where id="'.$_SESSION['id'].'"';
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div style="background-color: rgba(139, 195, 74, 0.44);height:100px;margin:0px auto;overflow:hidden;background-size:cover;">
<img src="../26-10-2015-student-project/logo.png" style="float:left;padding:28px;padding-left: 4px"/>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Faculty Registration Edit Form</h1>
</div>

<body style="background:url(../26-10-2015-student-project/art-vector-flowers-background-wallpaper-image-207562.jpg) no-repeat;margin:0px auto;width:100%;">
 
<div style="margin:0px auto;">
<div style="width:410px;margin:0px auto;padding:80px;background-color: rgba(139, 195, 74, 0.7);height:650px;border-radius:25px">

<form  action="facultyupdate.php" method="post" name="edit" enctype="multipart/form-data">
<table style="margin:0px auto;">
<tr>
<td >Name of the Faculty:</td>
<td> <input type="text" name="NameoftheFaculty" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['NameoftheFaculty']?>"/></td>
</tr>

<tr>
<td >Father's Name:</td>
<td> <input type="text" name="FatherName" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['FatherName']?>"/></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="DateofBirth" style="width:172px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['DateofBirth']?>"/></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="DateofJoining"  style="width:172px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"value="<?php echo $fetch['DateofJoining']?>"/> </td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="Gender" value="male" checked="checked" /> Male <input type="radio" name="gender" value="female"  /> Female </td>
</tr>

<tr>
<td >Email Id:</td>
<td><input type="text" name="EmailId"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['EmailId']?>"/></td>
</tr>

<tr>
<td >UserName:</td>
<td><input type="text" name="username"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['username']?>"/></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="Password"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['Password']?>"/></td>
</tr>

<tr>
<td >Department:</td>
<td >
<select name="Department" style="width:172px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['Department']?>">
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="CSE">CSE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>

<tr>
<td >Designation:</td>
<td><input type="text" name="Designation" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['Designation']?>"/></td>
</tr>

<tr>
<td >Qualification:</td>
<td><input type="text" name="HighestQualification" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['HighestQualification']?>"/></td>
</tr>

<tr>
<td >Pay Scale:</td>
<td><input type="text" name="PayScale" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['PayScale']?>"/></td>
</tr>

<tr>
<td >Experience:</td>
<td><input type="text" name="exp"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['exp']?>"/></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21" style="width:172px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['Address']?>">

</textarea></td>
</tr>

<tr>
<td >Number:</td>
<td><input type="text" name="number" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" value="<?php echo $fetch['number']?>"/></td>
</tr>

</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="update" value="Update" style="background-color:rgba(0, 188, 212, 0.84);    margin-left: 38px;">
</td>
</tr>
</table>


</form>
</div>
</div>

</body>
</html>
