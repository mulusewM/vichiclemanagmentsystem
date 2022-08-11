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
  <?php

$user_id=$_SESSION['user_id'];

$result=mysql_query("select * from users where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
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
<script type='text/javascript'>
function isNumeric(elem, helperMsg){
	var numericExpression = [1-9];
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert("Please enter between " + helperMsg );
		elem.focus();
		return false;
	}
}
</script>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="manager.php" class="current">Home</a></li>			
                <li><a href="registervehicle.php">Register Vehicle</a></li>
				<li><a href="vehicleinfo.php">View Vehicle info</a></li>
				<li><a href="manage_requests.php">Manage Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
				<li><a href="#">Generate Report</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="reportuser.php">Report For Users</a></li>
						<li><a href="reportvehicle.php">Vehicle Report</a></li>
						<li><a href="FuelReport.php">Fuel Information</a></li>
					</ul>
					</li>
			    <li><a href="permission.php">Get Exit permission</a></li>
                <li><a href="update.php">Update account</a></li>
                <li><a href="viewcomment.php">View Comment</a></li>
				 <li><a href="viewreport.php">View report</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main" class="shadow">
       	<div id="tooplate_content">
<form action="permission.php" method="post">
<center>
<p><font size="5" color="magneta"><u>Get Exit Permission</u></font></p>
<table style="color:black"; >
<tr><td style="padding-top:12px;">Permission Leader Name:</td><td style="padding-top:12px;"><input type='text' style="width:160px;" name='Leader' required x-moz-errormessage="Enter user ID" readonly='readonly'value="<?php echo $FirstName."&nbsp;".$middleName;?>"></td>
</tr>

<tr>
	       <td style="padding-top:12px;">Driver Full Name:</td>
		   <td style="padding-top:12px;"><select name="Driver" style="width:160px;"  required x-moz-errormessage="Enter Driver Full Name" maxlength="5">
<?php

$result=mysql_query("select * from users where level='6' && statuss='3'")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['FNAME']."&nbsp;".$row['mNAME'].">".$row['FNAME']."&nbsp;".$row['mNAME']."</option>";
}
?>
                </select></td>
	 
     
</tr>

<tr>

	          <tr><td style="padding-top:12px;">plate number:</td>
  <td style="padding-top:12px;"><input type="text" name="plate_no"size="20"pattern="\w{5,30}" required x-moz-errormessage="Please Enter plate no only 5 digit " title="Please Enter plate no only 5 digit "></td></tr>
<tr>  <td style="padding-top:12px;"> Date:	</td>
<td style="padding-top:12px;"><input type="date" name="Outgoing" title="Enter Id for search " id="date-pick" placeholder ="date-month-year" class="search" autocomplete="off" required x-moz-errormessage="Please Select Outgoing date" title="Please Select Outgoing date"/></td>
</tr>
?>" > </td> </tr>
	  <tr>
	       <td style="padding-top:12px;">Purpose:</td>
		   <td style="padding-top:12px;"><textarea rows="7" cols="22" align="center" name="Purpose" id="des" placeholder='Write your Purpose here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
		  <tr>
	       <td style="padding-top:12px;">Requester ID:</td>
	<td style="padding-top:12px;"><input type="text" name="user_id" id="user_id" required x-moz-errormessage="Enter Your ID NO" ></td>
	     </tr>

             
    <tr>
</table>	
</center>  

<center><input type="Submit" value="Print" name="Submit" class="button_example" Onclick="window.print();"/></center>	
</form>

<!--Footer-->
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C.Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>