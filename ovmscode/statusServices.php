<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("btovms",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from  servicerequests where SID='$status'");
	while($row=mysql_fetch_array($select_status))
	{
		$SID = $row['SID'];
        $user_id=$row['user_id'];
        $Date=$row['RequestDate'];
        $Traveller=$row['Traveller'];
        $Start=$row['PlaceStart'];
        $Arrival=$row['PlaceArrival'];
        $Outgoing=$row['Outgoingdate'];
        $Entrance=$row['Entrancedate'];
        $time=$row['OutgoingTime'];
        $Request=$row['RequestReason'];
		$st=$row['RequestStatus'];				
	if($st=='NO')
	{
		$status2='YES';
		$status3='Approved';
	}
	else
	{
		$status2='NO';
		$status3='Wait';
	}
	$update=mysql_query("update servicerequests set RequestStatus='$status2' where SID='$status' ");
	$sql="INSERT INTO  serviceresponses ( SID,user_id, RequestDate ,RequestReason,RequestStatus)";
	$sql .= " values ('{$SID}','{$user_id}','{$Date}','{$Request}','{$status3}'); ";
	$result = mysql_query($sql);
	if($update)
	{
		header("Location:manage_requests.php");
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