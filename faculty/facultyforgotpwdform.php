<?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web_student_master_attendance",$conn);
?>
<body style="margin:0px auto;background:url(../26-10-2015-student-project/art-vector-flowers-background-wallpaper-image-207562.jpg) no-repeat;;">
<div style="width:200px;height:200px;margin:0px auto;float:right;margin:200px;" >
<form style="background:rgba(139, 195, 74, 0.54);" method="post" action="facultypwdvalidatio.php">

<table style="width:200px;hieght:200px;">
<tr>
<td> 
EmailId:<input type="text" name="EmailId">
</td>
</tr>

<tr>
<td>
Number:<input type="text" name="number" >
</td>
</tr>

</table>

<input type="submit" name="submit" value="Submit"     style="margin-left:3px;background: rgba(139, 195, 74, 0.37);">
</form>

</div>
</body>