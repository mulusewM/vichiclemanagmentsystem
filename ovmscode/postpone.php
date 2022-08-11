<?php
session_start();
include("connection.php");
if(isset($_POST['Change'])) {
	$datee = date('Y-m-d H:i:s', strtotime("".$_POST['RESERVATION_DATE']." ".$_POST['time'].""));
	mysql_query("update reservation set RESERVATION_DATE='".$datee."' where RESERVATION_ID = ".$_POST['RESERVATION_ID']); 

	$sql = "insert into notifcation values('', ".$_POST['RESERVATION_ID'].", 'postponed', '".date("Y-m-d H:i:sa")."')";
	mysql_query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">   Burie Town Bus Station</span><br/><br/></b>Online Vehicle Management System Manager page</h2></div>
  	</div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="manager.php" class="current">Home</a></li>			
                <li><a href="registervehicle.php">Register Vehicle</a></li>
				<li><a href="manage_requests.php">Aprove Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
				<li><a href="#">Generate Report</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="reportuser.php">Report For Users</a></li>
						<li><a href="reportvehicle.php">Vehicle Report</a></li>
						<li><a href="FuelReport.php">Fuel Information</a></li>
					</ul>
					</li>
		
						<li><a href="#">view</a>
					<ul style="margin-left:10px;padding-right:4px;">
					 <li><a href="viewreport.php">Viewreport</a></li>
					  <li><a href="viewcomment.php">ViewComment</a></li>
						<li><a href="vehicleinfo.php">ViewVehicle info</a></li>
					</ul>
					</li>
					
			    <li><a href="permission.php">Get Exit permission</a></li>
			   <li><a href="postpone.php">postpone</a></li>
			   <li><a href="AddRoute.php">AddRoute</a></li>
			 <li><a href="update.php">Update account</a></li>
              
			
			
				<li><a href="logout.php">Logout</a></li>
			</ul>  
    </div> <!-- end of tooplate_menu -->
 
    <div id="tooplate_main" class="shadow">  
       	<div id="tooplate_content">
<div align="center">

<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>Reserved BY</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
        <th>Plate No</th>
		<th>Resered Date</th>
		<th>Cancel</th>
	</tr>
	<?php
$result2 = mysql_query("select *from reservation");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
		$result4 = mysql_query("select *from journy where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);

		$result5 = mysql_query("select *from seat where SEAT_ID = ".$row3['SEAT_NO']);
		$row5 = mysql_fetch_array($result5, MYSQL_ASSOC);

		$result6 = mysql_query("select *from user1 where user_id = ".$row3['RESERVE_BY']);
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);
        
        $result7 = mysql_query("select *from bus where BUS_ID = ".$row5['BUS_ID']);
		$row7 = mysql_fetch_array($result7, MYSQL_ASSOC);

		echo "<form action='?' method='post'><input type='text' name='RESERVATION_ID' value='".$row3['RESERVATION_ID']."' hidden=''><input type='text' name='time' value='".date('H:i:s' ,strtotime($row3['RESERVATION_DATE']))."' hidden=''><tr><td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td><td>".$row4['FROM']."</td><td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td><td>".$row5['SEAT_NO']."</td><td>".$row7['PLATE_NUMBER']."</td><td><input type='date' value='".date('Y-m-d' ,strtotime($row3['RESERVATION_DATE']))."' name='RESERVATION_DATE' onchange='javascript: activate(".$row3['RESERVATION_ID'].")'></td><td><input id='btn".$row3['RESERVATION_ID']."' type='submit' name='Change' value='Change' disabled=true></td></tr></form>";
		
		
	    echo "('postphoned  successfully!')"; 
         echo' <meta content="5;postpone.php" http-equiv="refresh" />'; 
		$no++;
	}
?>	
</table>
</div>
<?php	
}
?>
<script type="text/javascript">
	function activate(name) {
		document.getElementById('btn'+name).disabled = false;
	}
</script>
      <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>