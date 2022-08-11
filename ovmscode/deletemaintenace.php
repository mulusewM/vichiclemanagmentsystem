<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: view_maintenace_request.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM maintenancerequest WHERE Plate_no = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'view_maintenace_request.php'</script>";
?>