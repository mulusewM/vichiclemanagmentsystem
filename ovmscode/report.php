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
 <?php
 }
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script src="aa.js" type="text/javascript"></script>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">      Burie Town Bus Station</span><br/><br/></b>Online Vehicle Management System</h2></div>
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
						<li><a href="reportuser.php">ReportForUsers</a></li>
						<li><a href="reportvehicle.php">VehicleReport</a></li>
						<li><a href="FuelReport.php">FuelInformation</a></li>
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
    <script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>
    <div id="tooplate_main">
       	<div id="tooplate_content">
			Which Type of report do you want?
				<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">Registered Vehicle</option>
					<option value="4">Registered Users</option>
					<option value="5">Fuel Information</option>
					
					
				</select>
				<br /><br />			  
				<div id="div1" style="display:none;"></div>	
				<div id="div2" style="display:none;">
					<form action="" method="post" >
						<center><h3>Vehicle:</h3></center> 
						<?php 
						echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysql_query("SELECT * FROM vehicleregister ");
			echo '<table align="center" style="width:200px;color:black;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Plate no.</th><th bgcolor="#336699"><font color="white" size="2">Type</th> <th bgcolor="#336699"><font color="white" size="2">Model</th><th bgcolor="#336699"><font color="white" size="2">Owner</th><th bgcolor="#336699"><font color="white" size="2">Capacity</th><th bgcolor="#336699"><font color="white" size="2">production  date</th><th bgcolor="#336699"><font color="white" size="2">Insurance</th><th bgcolor="#336699"><font color="white" size="2">Status</th></tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>Vehicle are registered";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['Plate_no'] . "</td>");
print ("<td><font size='2'>" . $row['Type'] . "</td>");	 
print ("<td><font size='2'>" . $row['Model'] . "</td>");		
print ("<td><font size='2'>" . $row['Owner'] . "</td>");	
print ("<td><font size='2'>" . $row['Capacity'] . "</td>");	
print ("<td><font size='2'>" . $row['productiondate'] . "</td>");	
print ("<td><font size='2'>" . $row['Insurance'] . "</td>");
print ("<td><font size='2'>" . $row['status'] . "</td>");			
  print ("</tr>");
  }
print( "</table>");	
						?>
					</form>
				</div>		
				<div id="div4" style="display:none;">
					<form action="" method="post">
					<u><center><h2>Registered Users</h2></center></u>
						<?php
echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';						
	$sel=mysql_query("SELECT * FROM users");
			echo '<table style="width:500px;color:black;border:1px solid #336699;border-radius:10px;" "border:1";id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">First Name.</th><th bgcolor="#336699" ><font color="white" size="2">Middle Name</th>
			<th bgcolor="#336699" ><font color="white" size="2">Last Name</th><th bgcolor="#336699" ><font color="white" size="2">User_id</th>
			<th bgcolor="#336699" ><font color="white" size="2">Sex</th>
			<th bgcolor="#336699" ><font color="white" size="2">level</th>
			<th bgcolor="#336699" ><font color="white" size="2">Phone_no</th>
			<th bgcolor="#336699" ><font color="white" size="2">Status</th>
			</tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>Employee are registered";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['FNAME'] . "</td>");
	  print ("<td><font size='2'>" . $row['mNAME'] . "</td>");
print ("<td><font size='2'>" . $row['lname'] . "</td>");
print ("<td><font size='2'>" . $row['user_id'] . "</td>");
print ("<td><font size='2'>" . $row['sex'] . "</td>");
print ("<td><font size='2'>" . $row['level'] . "</td>");
print ("<td><font size='2'>" . $row['phone_no'] . "</td>");
print ("<td><font size='2'>" . $row['status'] . "</td>");	  
  print ("</tr>");
  }
print( "</table>");			
						
								?>
					</form>
				</div>

		</div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C  Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>