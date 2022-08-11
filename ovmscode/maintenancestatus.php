<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("btovms",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from  maintenancerequest where ReqID='$status'");
	while($row=mysql_fetch_array($select_status))
	{
		$st=$row['VehicleStatus'];
		$Plate_no=$row['Plate_no'];
		$ReqID=$row['ReqID'];
		$FullName=$row['FullName'];
		$Date=$row['RequestDate'];
		$RequestReason=$row['RequestReason'];
		if($st=='Unfunctional')
	{
	      $status3=1;
	$update=mysql_query("update vehicleregister set status='$status3' where Plate_no ='$Plateno' ");
		$status2='functional';
		$status4='Maintained';
	}
	else
	{       $status3=0;
	$update=mysql_query("update vehicleregister set status='$status3' where Plate_no ='$Plateno' ");
	$status2='Unfunctional';
	$status4='Approve';
	}
	$update=mysql_query("update maintenancerequest set VehicleStatus='$status2' where ReqID='$status' ");
	$sql="INSERT INTO  serviceresponsess ( Plate_no, FullName, RequestDate ,RequestStatus)";
			$sql .= " values ('{$Plate_no}','{$FullName}','{$Date}','{$status4}'); ";
			$result = mysql_query($sql);
	if($update)
	{
		header("Location:view_maintenace_request.php");
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