<?php session_start();?>
<?php
if(isset($_POST['R_submit'])) {
	include("connection.php");
	$departure=$_POST['departure'];
	$destination=$_POST['destination'];
	$assignedcar=$_POST['assignedcar'];
	$platenumber=$_POST['platenumber'];
	$noofseat=$_POST['noofseat'];
	$cartype=$_POST['cartype'];
	$DISTANCE=$_POST['DISTANCE'];
	$COST=$_POST['COST'];
	

	$query1="insert into route values('','$departure','$destination','$assignedcar','$platenumber','$noofseat','$cartype','$DISTANCE','$COST')"; 
	$query2=mysql_query($query1);
	if($query2){
	$success="data inserted successfully...";
		
	}
}
?>


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
<link href="formmapt.css" rel="stylesheet" type="text/css" />
<style type="text/css">
 .error {
  	color: red;
  	display: none;
  }  
 </style>
</head>  
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
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
<center>
<?php
if(isset($success))
	echo '<label style="color: green; display: block; font-weight: bold; font-size: 35px;">data inserted successfully ...</label><br>';
?>
<div style ="width:700px;height:300px;margin-left:10px">
	 <h3> Add Route Information</h3>	 
<form name="f1" action="?" method="post" onsubmit="return check()">  
	<table  border = "0 " style="border: 1px solid black; padding: 15px 20px;" margin-left: 20px>

       <tr>
		<td><label style="color: black">From :</td><td><input type="text" name="departure" id="departure" /></td>
		<td id="departutre_place_error" class="error">Departure place should be in strings</td>
		<td id="departutre_place_error_2" class="error">please fill departure place </td>
	</tr>

	<tr>
		<td><label style="color: black">To :</td><td><input type="text" name="destination" id="destination" /></td>
		<td id="destination_error" class="error">destination name should be in characters</td>
		<td id="destination_error_2" class="error">Please fill destination</td>
	</tr>
		<tr>	
		<td><label style="color: black">no of assigned car:</td><td><input type="text" name="assignedcar" id="noofassignedcar" /></td>
		<td id="noofassignedcar" class="error">Please enter numbers only</td>
		<td id="distance_error_2" class="error"> no of assigned caris Required</td>
	</tr>
	<tr>	
		<td><label style="color: black">plate number:</td><td><input type="text" name="platenumber"size="5"pattern="\w{5,30}" required x-moz-errormessage="Please Enter plate no only 5 digit " title="Please Enter plate no only 5 digit "></td></tr>
		
		<tr>	
		<td><label style="color: black">no of seat:</td><td><input type="text" name="noofseat" id="no of seat" /></td>
		<td id="distance_error" class="error">Please enter numbers only</td>
		<td id="distance_error_2" class="error"> Distance filled is Required</td>
	</tr>
		<tr>	
		<td><label style="color: black">cartype:</td><td><input type="text" name="cartype" id="cartype" /></td>
		<td id="distance_error" class="error">Please enter numbers only</td>
		<td id="distance_error_2" class="error"> name of filled is Required</td>
	</tr>
		<tr>	
		<td><label style="color: black">DISTANCE:</td><td><input type="text" name="DISTANCE" id="cartype" /></td>
		<td id="distance_error" class="error">Please enter numbers only</td>
		<td id="distance_error_2" class="error"> name of filled is Required</td>
	</tr>
	<tr>
	<td><label style="color: black">Cost:</td><td><input type="text" name="COST" id="cost" /></td>
	<td id="cost_error" class="error">Cost should be in numbers</td>
		<td id="cost_error_2" class="error">please fill the cost</td>
	</tr>
	<tr style="height: 3px;"></tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Submit" name="R_submit"/> <input type="reset" value="Cancel" name="R_Cancel" id="b2"/></div>
	</center> </td>
	</tr>
	</table>
</form>
</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp = /^\d{3}\d{3}\d{4}$/;
		var stringWith = /^[a-zA-Z_ ]*$/;
		
		if(document.getElementById("departure").value==""){
			document.getElementById('departutre_place_error_2').style.display="block";
			document.getElementById('departutre_place_error').style.display = "none";
			
			return false;
		}else if(!document.getElementById("departure").value.match(stringWith) )  {
			document.getElementById('departutre_place_error').style.display = "block";
			document.getElementById('departutre_place_error_2').style.display="none";
			return false;
		}
		else{
			document.getElementById('departutre_place_error').style.display = "none";
			document.getElementById('departutre_place_error_2').style.display = "none";
		}
		if(document.getElementById('destination').value==""){
			document.getElementById('destination_error_2').style.display="block";
			document.getElementById("destination_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("destination").value.match(stringWith)) {
			document.getElementById('destination_error').style.display="block";
			document.getElementById('destination_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('destination_error_2').style.display="none";
			document.getElementById("destination_error").style.display="none";
		}
		
		if(document.getElementById('distance').value==""){
			document.getElementById('distance_error_2').style.display="block";
			document.getElementById("destination_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("distance").value.match(numOnly)) {
			document.getElementById('distance_error').style.display="block";
			document.getElementById('distance_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('distance_error').style.display="none";
			document.getElementById("distance_error_2").style.display="none";
		}
		
	if(document.getElementById('cost').value==""){
			document.getElementById('cost_error_2').style.display="block";
			document.getElementById("cost_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("cost").value.match(numOnly)) {
			document.getElementById('cost_error').style.display="block";
			document.getElementById('cost_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('cost_error').style.display="none";
			document.getElementById("cost_error_2").style.display="none";
		}
	}
</script>

<div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE  TOWN BUS STATION</span><br/><br/></b></h2></div>
  	</div> <!-- end of forever header --></b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>

						