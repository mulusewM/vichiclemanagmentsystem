<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
  <script type="text/javascript"> <!--------------------------TO PREVENT BACK AFTER SIGN OUT PROCESS-----------------------
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
 </script>
 <?php
 }
 ?>
	
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
<!-- End WOWSlider.com HEAD section -->
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
				<li><a href='commentpass.php'><span>comment
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>  	
    </div> <!-- end of tooplate_menu -->
    <div id="tooplate_main" class="shadow">
       	<div id="tooplate_content">
		 <h3>Welcome To Online Vehicle Management System For Burie Town Bus Station</h3>
			<P>Burie Town Bus Station Online Vehicle Management System provide a vital role for the employee and also for institution itself.</p>	
			<!-- Start WOWSlider.com BODY section -->
			<div id="wowslider-container1"style="margin-top:60px;" >
				<div class="ws_images">
					<ul>
						<li><img src="data1/images/1.jpg" alt="1" title=" " id="wows1_0"/></li>
						<li><img src="data1/images/2.jpg" alt="2" title=" " id="wows1_1"/></li>
						<li><img src="data1/images/4.jpg" alt="4" title=" " id="wows1_2"/></li>
						<li><img src="data1/images/6.jpg" alt="6" title=" " id="wows1_3"/></li>
						<li><img src="data1/images/8.jpg" alt="8" title=" "id="wows1_5"/></li>
						<li><img src="data1/images/9.jpg" alt="9" title=" " id="wows1_6"/></li>
						<li><img src="data1/images/11.jpg" alt="11" title=" " id="wows1_8"/></li>
						<li><img src="data1/images/12.jpg" alt="12" title=" " id="wows1_9"/></li>
						<li><img src="data1/images/13.jpg" alt="jquery gallery" title=" " id="wows1_10"/></li>
						<li><img src="data1/images/14.jpg" alt="14" title=" " id="wows1_14"/></li>
						<li><img src="data1/images/15.jpg" alt="15" title=" " id="wows1_11"/></li>
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="Mtu Getway"><span><img src="data1/tooltips/1.jpg" alt="1"/>1</span></a>
						<a href="#" title="University Bus"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a>
						<a href="#" title="Car"><span><img src="data1/tooltips/4.jpg" alt="4"/>3</span></a>
						<a href="#" title="Administrative building"><span><img src="data1/tooltips/6.jpg" alt="6"/>4</span></a>
						<a href="#" title="	Bus 2"><span><img src="data1/tooltips/8.jpg" alt="8"/>6</span></a>
						<a href="#" title="MTU"><span><img src="data1/tooltips/9.jpg" alt="9"/>7</span></a>
						<a href="#" title="Car 3"><span><img src="data1/tooltips/11.jpg" alt="11"/>9</span></a>
						<a href="#" title="Beautiful car"><span><img src="data1/tooltips/12.jpg" alt="12"/>10</span></a>
						<a href="#" title="Vechicle1"><span><img src="data1/tooltips/13.jpg" alt="13"/>11</span></a>
						<a href="#" title="Min-bus"><span><img src="data1/tooltips/14.jpg" alt="14"/>8</span></a>
						<a href="#" title="car in campus"><span><img src="data1/tooltips/15.jpg" alt="15"/>12</span></a>
					</div>
				</div>
				<div class="ws_shadow"></div>
			</div>	
			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
				
			<div class="cleaner"></div>
        </div>
        <div id="tooplate_sidebar">
            <div class="sidbar_box" style="margin-top: 40px;padding-bottom: 20px;padding-top: 20px;border-radius: 15px;background-color: #3287B2;width:210px;">
<h4 style="margin-left: 30px;color: white;"><b>Business Rule</b></h4>
<ul class="tooplate_list">
<marquee behavior="scroll" direction="up" width="95%"height=150 scrollamount="5"onmouseover="this.scrollAmount = 0"onmouseout="this.scrollAmount = 2.5">
	<font size="3" color="black">
It is the collection of rules and regulations of the vehicle management system that tells which action should be done and which is forbidden to do for the employee.
</font>
<font size="3" color="yellow">
<br><b>BR1:</b> Users of the system must have proper user name and password in order to login the system.
</font>
<font size="3" color="red">
<br><b>BR2:</b> Users of the system must have proper user name and password in order to login the system. 
</font>
<font size="3" color="Yellow">
<br><b>BR3:</b> The manager should check the fuel balance of the car while the car travelled.
</font>
<font size="3" color="red">
<br><b>BR4:</b> The manager must generate report in case of some conditions occur.
</font>
<font size="3" color="yellow">
<br><b>BR5:</b>Vehicles should be maintained when they are damaged or based on schedule maintenance report.
</font>
<font size="3" color="red">
<br><b>BR6:</b> The manager should approvethe request of the officer and staff.
</font>
<font size="3" color="yellow">
<br><b>BR7:</b> System  assigned the vehicle and automatically sends notification for driver and requester office.
	</font>
	</marquee>	
</ul>	
			</div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 	2011 E.C. BURIE  TOWN BUS STATION</span><br/><br/></b></h2></div>
  	</div> <!-- end of forever header --></b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>