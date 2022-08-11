<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: manage_request.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM servicerequest WHERE user_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'manage_request.php'</script>";
?>