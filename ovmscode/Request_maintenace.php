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
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
}
else{
         return true;
		 }
      }
      //-->
   </SCRIPT>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="Driver.php" class="current">Home</a></li>			
				<li><a href="request_maintenace.php">Request Maintenance </a></li>
				<li><a href="ViewresponseServicess.php">View Response </a></li>
                <li><a href="driverupdate.php">Update Account</a></li>
				<li><a href="submit_comments.php">Submit Comment</a></li>
				<li><a href="driverreport.php">Send Report</a></li>
			   <?php 
                     
					 ?>
                     </span></a></li>					
				<li><a href="logout.php">Logout</a></li>
			</ul>         	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main" class="shadow">
       	<div id="tooplate_content">
 <center>
<form action="Request_maintenace.php" method="post">
<p><font size="5" color="magneta"><u>Maintenance request</u></font></p>
<table  style="color:black">
<tr> <td style="padding-top:12px;"> Full Name:</td>
		   <td style="padding-top:12px;"><select  name="FullName" style="width:160px;"  required x-moz-errormessage="Enter  Full Name"  maxlength="5">
<?php


$result=mysql_query("select * from  users where level='5'")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['FNAME']."&nbsp;".$row['mNAME'].">".$row['FNAME']."&nbsp;".$row['mNAME']."</option>";
}
?>
                </select></td>
	     </tr>
<tr>
	       <td style="padding-top:12px;"> Plate_no:</td>
		   <td style="padding-top:12px;" size="100"><select name="Plate_no" style="width:140px;"  required x-moz-errormessage="please select Vehicle ID " maxlength="5">
		   <?php


$result=mysql_query("select * from vehicleregister ")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['Plate_no'].">".$row['Plate_no']."</option>";
}
?>
 </select></td></tr>
<tr><td style="padding-top:12px;">Request Date:	</td>
<td style="padding-top:12px;"><input type="date" required x-moz-errormessage="Enter You request maintenance date! "  name="Date" value="<?php
echo strftime ('%x');
?>" </td> </tr>
<tr>
                
                <td style="padding-top:12px;">Vehicle Status:</td>
                <td style="padding-top:12px;"><input type="radio"  name="Status" value="functional" title="choose either functional by clicking here" required />
                  functional
                  <input type="radio" name="Status" value="Unfunctional" title='choose Unfunctional by clicking here' required />
                  Unfunctional</td>
              </tr>
<tr>
	       <td style="padding-top:12px;"> Request Reason:</td>
		   <td style="padding-top:12px;"><textarea rows="7" cols="20" align="center" name="Request" id="message" placeholder='Write your Request Reason here' pattern="\w{5,100}" required x-moz-errormessage="Enter Request Reason more than 5 Character" title="Please Enter Only letter at least 5 characters "></textarea></td>	    
		</tr>



</table>	
</center>  

<center><input type="Submit" value="Submit" name="Submit" class="button_example" required x-moz-errormessage="Enter Your Place Start" Onclick="return check(this.form);"/></center>	
</form>

<?php
 if(isset($_POST['Submit']))
 {
  $FullName=$_POST['FullName'];
  $Plate_no=$_POST['Plate_no'];
 $Date=$_POST['Date'];
 $Request=$_POST['Request'];
 $Status=$_POST['Status'];

 	$sql="INSERT INTO maintenancerequest ( FullName, Plate_no,RequestDate,RequestReason,VehicleStatus)";
			$sql .= " values ('{$FullName}','{$Plate_no}','{$Date}','{$Request}','{$Status}'); ";
			$result = mysql_query($sql);
echo "<script>alert(' You are  sucessfully   maintenance request!');</script>".mysql_error(); 
	 echo' <meta content="4;Request_maintenace.php" http-equiv="refresh" />';	
}


else
			{
//echo"Not maintenance request" .mysql_error();
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
            <div id="footp"><b>Copyright © 2011E.C. BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>