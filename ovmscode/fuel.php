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
  <script Language="javascript" type="text/javascript">
function validation()

{
num=/^[0-9.]+$/;
if(!(document.formv2.Previous.value.match(num)))
{

alert("Kilometers must be number??");
document.formv2.Previous.focus();
return false;
}
if(!(document.formv2.Current.value.match(num)))
{

alert("Kilometers must be number??");
document.formv2.Current.focus();
return false;}
if(!(document.formv2.KMPL.value.match(num)))
{

alert("Kilometers must be number??");
document.formv2.KMPL.focus();
return false;
}
if(!(document.formv2.KMPL.value.match(num) && document.formv2.KMPL.value >=1 && document.formv2.KMPL.value <=10)) 
{
alert("Please fill from 1-10 kilometers ");
document.formv2.KMPL.focus();
return false;
}

if(!(document.formv2.Given.value.match(num)))
{
alert("Fuel must be number??");
document.formv2.Given.focus();
return false;
}
if(!(document.formv2.fuel.value.match(num)))
{

alert("Kilometers must be number??");
document.formv2.fuel.focus();
return false;}
if(!(document.formv2.fuel.value.match(num) && document.formv2.fuel.value >=10 && document.formv2.fuel.value <=50)) 
{
alert("Please Fill Fuel price from 10-50 kilometers ");
document.formv2.fuel.focus();
return false;
}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
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
<form action="fuel.php" method="post" name="formv2" onsubmit=" return validation()">
<center>
<p><font size="5" color="magneta"><u>Calculate Fuel Balance</u></font></p>
<table style="color:black">
	       <td style="padding-top:12px;">Driver_id:</td>
		   <td style="padding-top:12px;"><select name="user_id" style="width:140px;" required x-moz-errormessage="Enter  schedule_id "  maxlength="20">
<?php
$result=mysql_query("select * from users where  level='6'&& status='1' ")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['user_id'].">".$row['user_id']."</option>";
 }
?>
                </select></td>
	     </tr>
<tr> <td style="padding-top:12px;"> Driver Name:</td>
		   <td style="padding-top:12px;"><select  name="FullName" style="width:160px;"  required x-moz-errormessage="Enter  Full Name"  maxlength="5">
<?php


$result=mysql_query("select * from  users where level='6'&& status='1'")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['FNAME']."&nbsp;".$row['mNAME'].">".$row['FNAME']."&nbsp;".$row['mNAME']."</option>";
}
?>
                </select></td>
	     </tr>
<tr><td style="padding-top:12px;">Previous KMs</td><td style="padding-top:12px;"><input type="text" style="width:70px;"  name="Previous"required></td><tr>
<tr><td style="padding-top:12px;">Current KMS</td><td style="padding-top:12px;"><input type="text" style="width:70px;" name="Current"required></td></tr>
<tr><td style="padding-top:12px;">KM per Litter</td><td style="padding-top:12px;"><input type="text" style="width:70px;" name="KMPL" required></td></tr>
<tr><td style="padding-top:12px;">Given Fuel</td><td style="padding-top:12px;"><input type="text" style="width:70px;" name="Given"required></td></tr>
<tr><td style="padding-top:12px;">Fuel Price</td><td style="padding-top:12px;"><input type="text" style="width:70px;"name="Fuel"required></td></tr>
<tr><td style="padding-top:12px;">Date	</td><td style="padding-top:12px;"><input type="text" style="width:70px;" name="mdate"required x-moz-errormessage="Enter Your date"  value="<?php
echo strftime ('%x');
?>"  </td> </tr>
</table>	
</center>  

<center><input type="Submit" value="Submit" name="Submit" class="button_example" required x-moz-errormessage="Enter Your Place Start" Onclick="return check(this.form);"/></center>	
</center> 
</form>
<?php
			if(isset($_POST['Submit']))
			 {
			$user_id=$_POST['user_id'];
			$FullName=$_POST['FullName'];//
			$Previous=$_POST['Previous'];// 
			$Current=$_POST['Current'];
			$Given=$_POST['Given'];
			$Fuel=$_POST['Fuel'];//
			$KMPL=$_POST['KMPL'];//
		    $mdate=$_POST['mdate'];//
			$sql="SELECT * FROM  calculatefuelbalance WHERE fule_id='{$FullName}' ;";
			$result = mysql_query($sql);
			$row=mysql_fetch_array($result);
			if($Previous<$Current)
			{
			$row[5]= $Current - $Previous;
			$row[7]=($row[5]/$KMPL);
			$row[10]=$Given *$Fuel;
			
			$FullName=$_POST['FullName'];//
			 $user_id=$_POST['user_id'];//
          	$sql="INSERT INTO calculatefuelbalance (User_id, FullName, PreviousKMs,CurrentKMS,DifferenceKms,KMperLiter, 	UsedFuel, 	GivenFuel, 	FuelPrice,TotalFuelPrice,Date)";
			$sql .= " values ('{$user_id}','{$FullName}','{$Previous}','{$Current}','{$row[5]}','{$KMPL}','{$row[7]}','{$Fuel}','{$Given}','{$row[10]}','{$mdate}'); ";
			$result = mysql_query($sql);
			echo "<script>alert('You are  sucessfully Calculate your Fuel Balance!!');</script>".mysql_error(); 
			echo' <meta content="4;fuel.php" http-equiv="refresh" />';	
}

else
			{
			

echo "<script>alert('Previous Kilometers never be greater than carrent Kilometers!!');</script>"; 
echo' <meta content="3;fuel.php" http-equiv="refresh" />';
}
}
			?>	  

<!--Footer-->
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C. BURIE  TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>