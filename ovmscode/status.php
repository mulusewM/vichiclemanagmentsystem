<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("btovms",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from  users where  user_id='$status'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=1;
	}
	else
	{
		$status2=0;
	}
	$update=mysql_query("update users set status='$status2' where user_id='$status' ");
	if($update)
	{
		header("Location:update_account1.php");
	}
	else
	{
		echo mysql_error();
	}
	}
	?>
     
    <?php
}
?>