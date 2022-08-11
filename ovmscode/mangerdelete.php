<?php
session_start();
include_once'connection.php';
if($log != "log"){
	header ("Location: notifcationstaff.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM assignvehicless WHERE SID = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'notifcationstaff.php'</script>";
?>