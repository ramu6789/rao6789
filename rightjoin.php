<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web",$conn);
$sql='select registration11.*,marks.* from registration11 right join marks on registration11.id=marks.customerid';
$query=mysql_query($sql);
 
?>
<style>
body {background-color:#00FFFF}
table{
	 border:2px solid orange;
	 border-collapse:collapse;
	 width:100%;
	 height:100%;
    }
table th{
	border:2px solid blue;
	padding:5px;

    }
table td{
	border:1px solid red;
	padding:10px;
	text-align:center;
	}
table tr{
	border:1px soild grey;
	}
	
</style>
<table>
<tr>
<th style="color:red">S.No</th>
<th style="color:red">Name</th>
<th style="color:red">subject1</th>
<th style="color:red">subject2</th>
<th style="color:red">subject3</th>
<th style="color:red">subject4 </th>
<th style="color:red">subject5</th>
<th style="color:red">subject6</th>
<th style="color:red">Total</th>
<th style="color:red">Avg</th>
<th style="color:red">Grade</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td style="color:#903"><?php echo $a++;?></td>
<td style="color:blue"><?php echo $fetch['First_Name'];?></td>
<td style="color:green"><?php echo $fetch['subject1'];?></td>
<td style="color:orange"><?php echo $fetch['subject2'];?></td>
<td style="color:yellow"><?php echo $fetch['subject3'];?></td>
<td style="color:violet"><?php echo $fetch['subject4'];?></td>
<td style="color:red"><?php echo $fetch['subject5'];?></td>
<td><?php echo $fetch['subject6'];?></td>
<?php $total=$fetch['subject1']+$fetch['subject2']+$fetch['subject3']+$fetch['subject4']+$fetch['subject5']+$fetch['subject6'];?>
<td style="color:#F0C"><b><?php echo $total;?></b></td>
<td style="color:#F0F"><?php echo $total/6;?></td>
<td style="color:#0C0"><?php 
	if($total==0){
		echo "Fail";
}
else{
if($total>480){
	echo "A";
}
else if($total>340){
	echo "B";
}
else {
	echo "C";
}
}
?></td>
</tr>
<?php
}
?>
</table>
</body>








