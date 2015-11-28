<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="margin:0PX auto; background-color:#088bd7;">
<div style="background:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="zoom.png"style="float:left;padding:28px;"/>
<h1 style="float:left; margin-left:300px; padding:10px; color:#088bd7;">Forgot Password</h1>
<div style="float:right;margin-top:35px;margin-right:115px">
<form method="post" name="login" action="change.php">

<input type="text" name="emailid" placeholder="Enter your email" />
<input type="text" name="studentphone" placeholder="+91"  />
<input type="submit" name="change" value="login" />
</form>
</div>
</div>

</body>
</html>