<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web",$conn);
$sql='select registration11.*,marks.* from registration11 left join marks on registration11.id=marks.customerid';
$query=mysql_query($sql);
 
?>
<style>
body {background-color:#FFFF33}
table{
	 border: 2px solid blue;
	 border-collapse:collapse;
	 width:100%;
	 height:100%;
}
table th{
	border:2px solid purple;
	padding:5px;

}
table td{
	border:1px solid green;
	padding:10px;
	text-align:center; 
	

}
table tr{
	border:1px soild grey;
	}
</style>
<table>
<tr>
<th style="color:violet">S.No</th>
<th style="color:violet">Name</th>
<th style="color:violet">subject1</th>
<th style="color:violet">subject2</th>
<th style="color:violet">subject3</th>
<th style="color:violet">subject4 </th>
<th style="color:violet">subject5</th>
<th style="color:violet">subject6</th>
<th style="color:violet">Total</th>
<th style="color:violet">Avg</th>
<th style="color:violet">Grade</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td style="color: #F06"><?php echo $a++;?></td>
<td style="color:blue"><?php echo $fetch['First_Name'];?></td>
<td style="color:#00FFFF"><?php echo $fetch['subject1'];?></td>
<td style="color:solid grey"><?php echo $fetch['subject2'];?></td>
<td style="color:#996666"><?php echo $fetch['subject3'];?></td>
<td style="color:#CC0066"><?php echo $fetch['subject4'];?></td>
<td style="color:violet"><?php echo $fetch['subject5'];?></td>
<td style="color:#669933"><?php echo $fetch['subject6'];?></td>
<?php $total=$fetch['subject1']+$fetch['subject2']+$fetch['subject3']+$fetch['subject4']+$fetch['subject5']+$fetch['subject6'];?>
<td style="color:#999"><b><?php echo $total;?></b></td>
<td style="color:orange"><?php echo $total/6;?></td>
<td style="color:green"><?php 
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








