<?php 
session_start();
include("connection.php");
if(isset($_POST['seat_no'])) {
	$result4 = mysql_query("select user_id from account ");
	$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);
	$user_id = $row4['user_id'];
 
	$sql = "insert into seat values('', ".$_POST['seat_no'].", ".$_POST['bus_id'].")";
	mysql_query($sql);

	$sql2 = "select *from seat where bus_id=".$_POST['bus_id']." and seat_no=".$_POST['seat_no']."";
	$result5 = mysql_query($sql2);
	$row5 = mysql_fetch_array($result5,MYSQL_ASSOC);

	$sql3 = "insert into reservation values('', null, ".$row5['SEAT_ID'].", ".$user_id.", ".$_POST['journy_id'].", '".date("Y-m-d H:i:sa")."', '".date("Y-m-d H:i:sa")."', 'Reserved')";
	mysql_query($sql3);
	$success = "Successfully Reserved ...";
	echo"<script>alert('Please you pay money!');window.location='index8.php'</script>"; 
}

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<link href="seate.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	#menu button, #menu input {
		width: 30px;
		height: 30px;
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
				<li><a href='commentpass.php'><span>comment
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>  	
    </div> <!-- end of tooplate_menu -->
 <div id="tooplate_main" class="shadow">
<div  style="padding-top: 20px; padding-bottom: 5px; background: white" align="center">
<?php
if(isset($success))
	echo '<label style="color: green; display: block; font-weight: bold; font-size: 35px;">Successfully Reserved ...</label><br>';
?>
<form action="?" method="POST">
 
<select style="width: 200px" onchange="this-form.submit();" name="journy" required="">
	<option value="" selected >Select a route </option>
	<?php 
	$sql="select *from journy";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<option value='".$row['JOURNY_ID']."' "; 
		if(isset($_POST['journy']) && $_POST['journy'] == $row['JOURNY_ID'])
			echo "selected";
		echo " >".$row['FROM'].' - '.$row['TO']."</option>";
	}
	?>
</select>
</form>
</div>
<div align="center"  style="border: 1px solid black">
<?php 
if(isset($_POST['journy']) && $_POST['journy'] != "") {
	$result = mysql_query("select *from bus where JOURNY_ID=".$_POST['journy']);
	if(mysql_num_rows($result) == 0) {
		echo "No Bus Is still assigned for this journy!!";
	} else {

		$row = "";
		$i = 1;
		$IsAllBusFull = false;
		while($row3 = mysql_fetch_array($result,MYSQL_ASSOC)) {
			
			//Count How Much Number Of seats Are Taken
			$TakenSeats = 0;
			$result2 = mysql_query("select *from seat where bus_id=".$row3['BUS_ID']);
			while($row2 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
				$TakenSeats++;
			}
			
			//If The Bus Is Full
			if($TakenSeats == $row3['HOLDING_CAPACITY']) {
				echo "Bus No ".$i." Is Full. <br><br>";
				
				// If all Bus Are Full
				if(mysql_num_rows($result) == $i) {
					echo "All Bus Are Full.";
					$IsAllBusFull = true;
					break;
				}
				$i++;
			} else {
				$row=$row3;
				echo "This Is Bus No ".$i.". <br>";
				break;
			}
		}
		
		// Check If All Bus Is Full
		if(!$IsAllBusFull) {
			
			//Display Current Bus Information
			echo "The Bus PLATE_NUMBER is : ".$row['PLATE_NUMBER'].'<br>';
			echo "The Bus HOLDING_CAPACITY is : ".$row['HOLDING_CAPACITY'].'<br>';

			$seats[$row['HOLDING_CAPACITY']] = 0;
			$Available_seats = $row['HOLDING_CAPACITY'];
			for ($i=0; $i < $row['HOLDING_CAPACITY']; $i++) { 
				$seats[$i] = false;
			}

			$result2 = mysql_query("select *from seat where bus_id=".$row['BUS_ID']);
			while($row2 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
				$seats[$row2['SEAT_NO']] = true;
				$Available_seats--;
			}

			echo "The Bus AVAILABLE_SEATS is : ".$Available_seats.'<br><br>';
			echo "THE CURRENT AVAILABLE SEATS ARE LISTED BELOW, <lable style='color: green; font-weight: bold; font-style: italic'>PLEASE SELECT YOUR SEAT TO RESERVE</label>";

			//Generate The Seat Table
			echo '</div>
				<div id="menu" style="margin-left: 250px; border: 1px solid black; width: 230px; margin-top: 20px;">
				   <ul>';

			if($row['HOLDING_CAPACITY'] % 4 != 0) 
				$cols = (int)($row['HOLDING_CAPACITY']/4)+1;
			else
				$cols = $row['HOLDING_CAPACITY']/4;
			
			echo "<form action='?' method='post'>
					<input type='text' name='bus_id' value='".$row['BUS_ID']."' hidden=true>
					<input type='text' name='journy_id' value='".$_POST['journy']."' hidden=true>
					<input type='text' name='journy' value='".$_POST['journy']."' hidden=true>";
			for($i = 1; $i <= $cols*2; $i+=2) {
			
				// first col
				echo "<input type='submit' name='seat_no' "; 
				if($seats[$i] == true) 
					echo 'disabled="" style="background: rgb(50,50,50);"'; 
				echo " value='".$i."'>";
				
				// second col
				if(($i+1) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp<input type='submit' name='seat_no' "; 
					if($seats[($i+1)] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo " value='".($i+1)."'>";
				}
				
				//third col
				if(($i+($cols*2)) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' name='seat_no' "; 
					if($seats[($i+($cols*2))] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo " value='".($i+($cols*2))."'>";
				}
				
				//forth col
				if(($i+($cols*2)+1) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp<input type='submit' name='seat_no' "; 
					if($seats[($i+($cols*2)+1)] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo " value='".($i+($cols*2)+1)."'>";
					
				}

				echo "<br>";
				
			}	   

			echo "</form>";
		}
		
	?>
	<!--"<script>alert('Please you pay money!');window.location='Payments-master/index.php'</script>";  -->
	
	
	   </ul>
	   </div>
	   </body>
      </html>'
<?php      
  }
} 
     
?> 
<!-- <script>window.location='Payments-master/index.php'</script>;-->
<?php
 


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
      </html>'