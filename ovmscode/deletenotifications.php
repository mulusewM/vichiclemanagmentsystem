<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: notifcations.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM assignvehicles WHERE SID = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'notifcations.php'</script>";
?>