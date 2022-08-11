<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
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
<div id="tooplate_wrapper">
	<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System Passenger page</h2></div>
  	</div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="passenger.php" >Home</a></li>			
				<li><a href="view_route.php">View Route Info </a></li>
				<li><a href="reservation2.php">View Seats </a></li>
                <li><a href="Update_passenger.php">Update Account</a></li>
				<li><a href="View Reservation.php">View Reservation</a></li>
				<li><a href="notfication2.php">View notfication</a></li>
				<li><a href='commentpass.php'>Comment</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>  	
    </div> 
 <div id="tooplate_main" class="shadow">
<br><br>
<?php
session_start();
include("connection.php");
$result = mysql_query("select user_id from account ");
$row = mysql_fetch_array($result,MYSQL_ASSOC);
$user_id = $row['user_id'];

$result2 = mysql_query("select *from reservation where RESERVE_BY=".$row['user_id']);
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
		<th>Plate No</th>
		<th>Reserved Date</th>
		<th>Status</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
		$result4 = mysql_query("select *from journy where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);

		$result5 = mysql_query("select *from seat where SEAT_ID = ".$row3['SEAT_NO']);
		$row5 = mysql_fetch_array($result5, MYSQL_ASSOC);

		$result7 = mysql_query("select *from bus where BUS_ID = ".$row5['BUS_ID']);
		$row7 = mysql_fetch_array($result7, MYSQL_ASSOC);

		echo "<tr><td>".$no."</td><td>".$row4['FROM']."</td><td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td><td>".$row5['SEAT_NO']."</td><td>".$row7['PLATE_NUMBER']."</td><td>".$row3['RESERVATION_DATE']."</td><td>".$row3['status']."</td></tr>";
		$no++;
	}
?>	
</table>
</div>
<?php	
}
?>
</div>

 <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011E.C. Burie Town Bus Station</b>	</div>
		</div>
	</div>
		</div>
</body>
</html>