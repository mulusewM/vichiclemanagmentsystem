<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: viewcomment.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM comment WHERE id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'viewcomment.php'</script>";
?>