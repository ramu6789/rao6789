<html>

<body style="background:url(../26-10-2015-student-project/art-vector-flowers-background-wallpaper-image-207562.jpg) no-repeat;margin:0px auto;background-size:cover;"> 

<div style="background:rgba(133, 174, 46, 0.43);height:100px;margin:0px auto;overflow:hidden;">
<img src="../26-10-2015-student-project/logo.png" style="float:left;padding:26px;padding-left:4px;margin:0px;"/>


<h1 style="color:#009688;padding:0px;text-align:center;">Faculty Registration Form</h1>
</div>
 
<div style="margin:0px auto;">
<div style="width:384px;margin:0px auto;padding:80px;background: rgba(139, 195, 74, 0.44);border-radius:25px;margin-right:366px;height:490px;float:right;">

<form  action="faacultyinsert.php" method="post" name="faculty" enctype="multipart/form-data">
<table style="margin:0px auto;">

<tr>
<td >Name of the Faculty:</td>
<td> <input type="text" name="NameoftheFaculty"/></td>
</tr>

<tr>
<td >Fathers Name:</td>
<td> <input type="text" name="FatherName" /></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="DateofBirth" style="width:172px;" /></td>
</tr>

<tr>
<td>Number</td>
<td><input type="number" name="number"> </td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="DateofJoining"  style="width:172px;"/> </td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="Gender" value="male" checked="checked" /> Male <input type="radio" name="Gender" value="female"  /> Female </td>
</tr>

<tr>
<td >Email Id:</td>
<td><input type="text" name="EmailId"  /></td>
</tr>

<tr>
<td >UserName:</td>
<td><input type="text" name="username"  /></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="password" name="Password"  /></td>
</tr>

<tr>
<td >Department:</td>
<td >
<select name="Department" style="width:172px;">
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
<td><input type="text" name="Designation" /></td>
</tr>

<tr>
<td >Qualification:</td>
<td><input type="text" name="HighestQualification" /></td>
</tr>

<tr>
<td >Pay Scale:</td>
<td><input type="text" name="PayScale" /></td>
</tr>

<tr>
<td >Experience:</td>
<td><input type="text" name="exp"  /></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21" style="width:172px;">

</textarea></td>
</tr>

<tr>
<td>Facultyimage</td>
<td><input type="file" name="facultyimage" /></td>
</tr>
</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" style="background:rgba(0, 188, 212, 0.82);">
</td>
</tr>
</table>

</form>
</div>
</div>

</body>
</html>
