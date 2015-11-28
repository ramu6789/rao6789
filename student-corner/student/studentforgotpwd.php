<?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web_student_master_attendance",$conn);
?>
<body style="margin:0px auto;background:url(green-border-backgrounds-powerpoint.jpg);background-size:cover;">
<div style="width:200px;height:200px;margin:0px auto;float:right;" >
<form style="background:orange;" method="post" action="studentpwdvalidation.php">
<table style="width:200px;hieght:200px;">
<tr>
<td> 
Email:<input type="text" name="emailid">
</td>
</tr>

<tr>
<td>
stud_phone:<input type="text" name="stud_phone" >
</td>
</tr>
</table>


<input type="submit" name="submit" value="submit" style="margin-left:4px;background:#00FFFF;">
</form>

</div>
</body>