<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div style="background:#609;height:100px;margin:0px auto;overflow:hidden;">
<img src="logo.png" style="float:left;padding:28px;padding-left:0px;"/>

<h1 style="text-align:center;margin:0px;padding:28px;color:#E2FF00;">Student Details Form</h1>
</div>

<body style="background:url(green-border-backgrounds-powerpoint.jpg);background-size:cover;margin:0px auto;width:100%;">
 
<div style="margin:0px auto;">
<div style="width:390px;margin:0px auto;padding:80px;background:url(flowers_texture703.jpg); margin-left:672px;">

<form  action="studentdetailsinsert.php" method="post" name="studentattendence" enctype="multipart/form-data">
<table>

<tr>
<td >Student Name:</td>
<td> <input type="text" name="stud_name" /></td>
</tr>


<tr>
<td >Student Father Name:</td>
<td> <input type="text" name="stud_father_name" /></td>
</tr>

<tr>
<td >Course Id:</td>
<td><input type="text" name="course_id" /></td>
</tr>

<tr>
<td >Student Id:</td>
<td><input type="text" name="stud_id" /></td>
</tr>

<tr>
<td >Section Id:</td>
<td><input type="text" name="sec_id" /></td>
</tr>

<tr>
<td >Section:</td>
<td><input type="text" name="section"  /></td>
</tr>

<tr>
<td >Roll Number:</td>
<td><input type="text" name="rollno"  /></td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" value="Male" checked="checked" /> Male <input type="radio" name="gender" value="Female" /> Female </td>

</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:168px;s" /></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj"  style="width:168px;"/> </td>
</tr>

<tr>
<td >Email Id</td>
<td><input type="text" name="emailid"  /></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="Password"  /></td>
</tr>

<tr>
<td >Student Phone:</td>
<td><input type="text" name="stud_phone" /></td>
</tr>


<tr>
<td >Parent Phone:</td>
<td><input type="text" name="parent_phone" /></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21" style="width:167px;">

</textarea></td>
</tr>

<tr>
<td >Current Semister:</td>
<td><input type="text" name="current_sem" /></td>
</tr>

<tr>
<td>Student Photo:</td>
<td><input type="file" name="stud_photo"  /></td>
</tr>

<tr>
<td >Regulation:</td>
<td><input type="text" name="regulation" /></td>
</tr>

<tr>
<td >Status:</td>
<td><input type="text" name="status" /></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<select name="dept_id" style="width:173px;">
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="IT">IT</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>
</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background:#00FF33;"/>
</td>
</tr>
</table>
</form>
</div>
</div>

</body>
</html>
