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
</html>
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
				<li><a href='commentpass.php'><span>comment
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>  	
    </div> <!-- end of tooplate_menu -->
 <div id="tooplate_main" class="shadow">
<?php
include("connection.php");
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
	   <th>no of assigned car</th>
	   	<th>plate number</th>
		<th>no of seat</th>
		<th> cartype</th>
	
		<th>Distance in km</th>
		<th>Cost in Birr</th>
	</tr>
<?php
	$no = 1;
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<tr><td>".$no."</td><td>".$row['departure']."</td><td>".$row['destination']."</td><td>".$row['assignedcar']."</td><td>".$row['platenumber']
		."</td><td>" .$row['noofseat']."</td><td>".$row['cartype']  ."</td><td>" .$row['DISTANCE']."</td><td>".$row['COST']."</td></tr>";
		$no++;
		
	}
?>	
</table>
</div>
<?php	
}
?>
 <div class="cleaner"></div>
</div>
  <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 	2011 E.C. BURIE  TOWN BUS STATION</span><br/><br/></b></h2></div>
  	</div> <!-- end of forever header --></br>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>