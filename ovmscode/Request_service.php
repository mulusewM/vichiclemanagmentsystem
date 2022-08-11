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
$user_id=$row['user_id'];
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    Burie Town Bus Station</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="Staff.php" class="current">Home</a></li>			
                <li><a href="request_service.php">Request Service</a></li>
				<li><a href="viewresponseService.php">View response</a></li>
                <li><a href="staffupdate.php">Update account</a></li>
				<li><a href='notifcationstaff.php'><span>Notification<?php $av = mysql_query("SELECT * FROM assignvehicless where status='unread'");
                 $countav=mysql_num_rows($av);
                     if ($countav > 0){
                     echo "<font color='red'size='4'>"."($countav )</font>";
                     }?>
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>      	
		</div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_main" class="shadow">  
       	<div id="tooplate_content">
 
 <center>
<form action="Request_service.php" method="post">
<p><font size="5" color="magneta"><u> Request service</u></font></p>
<table align="center"style="color:black">
<tr><td style="padding-top:12px;">User_ID:</td>
<td style="padding-top:12px;"><input type="text" name="user_id" id="user_id" required x-moz-errormessage="Enter Your ID NO" ></td>

<tr>
<td style="padding-top:12px;">Number Of Traveller:</td>

<td style="padding-top:12px;"><input type="text" name="Traveller" id="Traveller" size="2" pattern="\d{1,3}" required x-moz-errormessage="Please Enter Number Only 1-1000 traveller" title="Please Enter Number Only from 1-1000 traveller "/></td></tr>
<tr><td style="padding-top:12px;">Request Date:	</td>
<td style="padding-top:12px;"><input type="text" required x-moz-errormessage="Enter Your Place Start"  name="Date" value="<?php
echo strftime ('%x');
?>" > </td> </tr>
<tr>
              <td style="padding-top:12px;">Place Start :</td>
              <td style="padding-top:12px;"><select name="Start"  style="width:150px;" required x-moz-errormessage="Enter Your Place Start" required maxlength="5">
                  <option ></option>
			
				   <option value='Burie Town Bus Station'> Burie Town Bus Station </option>
                </select></td>
              </tr>
<tr><td style="padding-top:12px;">Place Arrival:</td><td style="padding-top:12px;"><input type="text" name="Arrival" required x-moz-errormessage="Enter Your Place Arrival" id="crhr"/></td></tr>
<tr><td style="padding-top:12px;"> Outgoing date:</td>
<td style="padding-top:12px;"><input type="date" name="Outgoing" title="Enter Id for search " id="date-pick" placeholder ="year-month-date" class="search" autocomplete="off" required x-moz-errormessage="Please Select Outgoing date" title="Please Select Outgoing date"/></td>
</tr>
<tr><td style="padding-top:12px;">Entrance date:</td>
<td style="padding-top:12px;"><input type="date" name="Entrance" title="Enter Id for search " id="date-pick" placeholder ="year-month-date" class="search" autocomplete="off"required x-moz-errormessage="Please Select Entrance date" title="Please Select Entrance date"/></td>
</tr>
  <td style="padding-top:12px;">Outgoing Time :</td>
<td style="padding-top:12px;"><select name="time" id="time"  style="width:150px;"  required x-moz-errormessage="Please Select Time" title="Please Select Time">
<option selected=selected></option>
<option value="1:00pm">1:00am</option>
            <option value="1:15pm">1:15am</option>
            <option value="1:30pm">1:30am</option>
            <option value="1:45pm">1:45am</option>
            <option value="2:00pm">2:00am</option>
            <option value="2:15pm">2:15am</option>
            <option value="2:30pm">2:30am</option>
            <option value="2:45pm">2:45am</option>
            <option value="3:00pm">3:00am</option>
            <option value="3:15pm">3:15am</option>
            <option value="3:30pm">3:30am</option>
            <option value="3:45pm">3:45am</option>
            <option value="4:00pm">4:00am</option>
            <option value="4:15pm">4:15am</option>
            <option value="4:30pm">4:30am</option>
            <option value="4:45pm">4:45am</option>
            <option value="5:00pm">5:00am</option>
            <option value="5:15pm">5:15am</option>
            <option value="5:30pm">5:30am</option>
            <option value="5:45pm">5:45am</option>
            <option value="6:00pm">6:00am</option>
            <option value="6:15pm">6:15am</option>
            <option value="6:30pm">6:30am</option>
            <option value="6:45pm">6:45am</option>
            <option value="7:00pm">7:00am</option>
            <option value="7:15pm">7:15am</option>
            <option value="7:30pm">7:30am</option>
            <option value="7:45pm">7:45am</option>
            <option value="8:00pm">8:00am</option>
            <option value="8:15pm">8:15am</option>
            <option value="8:00am">8:00am</option>
            <option value="8:15am">8:15am</option>
            <option value="8:30am">8:30am</option>
            <option value="8:45am">8:45am</option>
            <option value="9:00am">9:00am</option>
            <option value="9:15am">9:15am</option>
            <option value="9:30am">9:30am</option>
            <option value="9:45am">9:45am</option>
            <option value="10:00am">10:00am</option>
            <option value="10:15am">10:15am</option>
            <option value="10:30am">10:30am</option>
            <option value="10:45am">10:45am</option>
            <option value="11:00am">11:00am</option>
            <option value="11:15am">11:15am</option>
            <option value="11:30am">11:30am</option>
            <option value="11:45am">11:45am</option>
            <option value="12:00pm">12:00pm</option>
            <option value="12:15pm">12:15pm</option>
            <option value="12:30pm">12:30pm</option>
            <option value="12:45pm">12:45pm</option>
            <option value="1:00pm">1:00pm</option>
            <option value="1:15pm">1:15pm</option>
            <option value="1:30pm">1:30pm</option>
            <option value="1:45pm">1:45pm</option>
            <option value="2:00pm">2:00pm</option>
            <option value="2:15pm">2:15pm</option>
            <option value="2:30pm">2:30pm</option>
            <option value="2:45pm">2:45pm</option>
            <option value="3:00pm">3:00pm</option>
            <option value="3:15pm">3:15pm</option>
            <option value="3:30pm">3:30pm</option>
            <option value="3:45pm">3:45pm</option>
            <option value="4:00pm">4:00pm</option>
            <option value="4:15pm">4:15pm</option>
            <option value="4:30pm">4:30pm</option>
            <option value="4:45pm">4:45pm</option>
            <option value="5:00pm">5:00pm</option>
            <option value="5:15pm">5:15pm</option>
            <option value="5:30pm">5:30pm</option>
            <option value="5:45pm">5:45pm</option>
            <option value="6:00pm">6:00pm</option>
            <option value="6:15pm">6:15pm</option>
            <option value="6:30pm">6:30pm</option>
            <option value="6:45pm">6:45pm</option>
            <option value="7:00pm">7:00pm</option>
            <option value="7:15pm">7:15pm</option>
            <option value="7:30pm">7:30pm</option>
            <option value="7:45pm">7:45pm</option>
            <option value="8:00pm">8:00pm</option>
            <option value="8:15pm">8:15pm</option>
            <option value="8:30pm">8:30pm</option>
            <option value="8:45pm">8:45pm</option>
            <option value="9:00pm">9:00pm</option>
            <option value="9:15pm">9:15pm</option>
            <option value="9:30pm">9:30pm</option>
            <option value="9:45pm">9:45pm</option>
            <option value="10:00pm">10:00pm</option>
            <option value="10:15pm">10:15pm</option>
            <option value="10:30pm">10:30pm</option>
            <option value="10:45pm">10:45pm</option>
            <option value="11:00pm">11:00pm</option>
            <option value="11:15pm">11:15pm</option>
            <option value="11:30pm">11:30pm</option>
            <option value="11:45pm">11:45pm</option>
            <option value="12:00am">12:00am</option>
          </select>
</td></tr>

<tr>
	<td style="padding-top:12px;"> Request Reason:</td>
    <td style="padding-top:12px;"><textarea rows="6" cols="20" align="center" name="Request" id="message" placeholder='Write your Request Reason here' required x-moz-errormessage="Enter Request Reason"></textarea></td>
</tr>
</table>	
</center>  

<center><input type="Submit" value="Submit" name="Submit" class="button_example" required x-moz-errormessage="Enter Your Place Start" Onclick="return check(this.form);"/></center>	
</form>
<?php
 if(isset($_POST['Submit']))
 {
 $time=$_POST['time'];//
$Start=$_POST['Start'];//
$Arrival=$_POST['Arrival'];//
$Outgoing=$_POST['Outgoing'];// 
$Entrance=$_POST['Entrance'];
  $user_id=$_POST['user_id'];
 $Date=$_POST['Date']; 	 	
 $Request=$_POST['Request'];
 $Traveller=$_POST['Traveller'];
 	$sql="INSERT INTO  servicerequest ( user_id,Traveller, RequestDate,PlaceStart,PlaceArrival,Outgoingdate,Entrancedate,OutgoingTime,RequestReason,RequestStatus)";
			$sql .= " values ('{$user_id}','{$Traveller}','{$Date}','{$Start}','{$Arrival}','{$Outgoing}','{$Entrance}','{$time}','{$Request}','NO'); ";
			$result = mysql_query($sql);

echo "<script>alert('You are  successfully   request service!');</script>".mysql_error(); 
	 echo' <meta content="4;staff.php" http-equiv="refresh" />';	
}


else
			{
//echo"Not maintenance request" .mysql_error();
}
		?> 

        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C. Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>
