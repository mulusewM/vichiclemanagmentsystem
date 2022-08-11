<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			border: 1px black solid;
			border-collapse: collapse;
			color: black;
			background: white;
		}
		th { 	
			background: rgba(230, 230, 230, 1);
			color: rgb(0, 0, 0);
			font-weight: bold;
			font-style: italic;
		}
		th, td {
			border-bottom: 1px black solid;
			border-left: 1px black solid;
			padding: 8px 4px;
			text-align: center;
		}
		div {
			color: white;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<?php
include("../Common/connection.php");
$result = mysql_query("select *from route");
if(mysql_num_rows($result) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">The Route Information </label>
<table>
	<tr>
		<th>No</th>
		<th>From</th>
		<th>To</th>
		<th>Distance in km</th>
		<th>Cost in Birr</th>
	</tr>
<?php
	$no = 1;
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<tr><td>".$no."</td><td>".$row['FROM']."</td><td>".$row['TO']."</td><td>".$row['DISTANCE']."</td><td>".$row['COST']."</td></tr>";
		$no++;
	}
?>	
</table>
</div>
<?php	
}
?>
</body>
</html>