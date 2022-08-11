<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: delete_account1.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM users WHERE user_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'dlete_account.php'</script>";
?>