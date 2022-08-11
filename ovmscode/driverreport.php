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
function formValidation(){
//assign the fields
        
		var email=document.getElementById('email');
		var fname = document.getElementById('fname');
	var message = document.getElementById('message');
	if(emailValidator(email,"check your E-mail format")){
if(lengthRestriction(fname, 5, 25,"for your full name")){
if(lengthRestriction(message, 3, 100,"for your comment")){


	return true;
	}
	}
	}	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function alpha(e) {
var k;
document.all ? k = e.keyCode : k = e.which;
return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8);
}
	</script>
	<script type="text/javascript">
function mtuvms(eid,errid)
{
var x=document.getElementById(eid).value;
if(x=="")
{
document.getElementById(errid).innerHTML="Please fill this field";
}
else
{
document.getElementById(errid).innerHTML="";
}
}

function chkAplha(event,err)
{
if(!((event.which>=65 && event.which<=90) || (event.which>=97 && event.which<=122) || event.which==0 || event.which==8))
{
document.getElementById(err).innerHTML="Pls Enter Letter Only!!";
return false;
}
}
function chkAplha(event,err)
{
if(!((event.which>=65 && event.which<=90) || (event.which>=97 && event.which<=122) || event.which==0 || event.which==8))
{
document.getElementById(err).innerHTML="Pls Enter Letter Only!!";
return false;
}
}

function chkeid()
{
var e=document.getElementById("e").value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if(atpos<4 || dotpos<atpos+3)
{
document.getElementById("error2").innerHTML="invalid email";
}
else
{
document.getElementById("error2").innerHTML="";
}
//alert(atpos+" "+dotpos);
}
</script>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">      BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
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

<form action="driverreport.php" method="post">
<center>
<p><font size="5" color="magneta"><u>Please Fill Report</u></font></p>
  <table style="color:black" width="480px" valign="top" align="center" border="0">
 
  <tr> <td style="padding-top:12px;"> Driver Name:</td>
   <td style="padding-top:12px;"><input type='text' style="width:160px;" name='FullName'  required x-moz-errormessage="Enter user ID" "<?php echo $FirstName."&nbsp;".$middleName;?>"></td>
	     </tr>
<tr>
	       <td style="padding-top:12px;"> Plate Number:</td>
		   <td style="padding-top:12px;" size="100"><select name="Plate_no" style="width:140px;"  required x-moz-errormessage="please select Vehicle ID " maxlength="5">
		   <?php


$result=mysql_query("select * from vehicleregister where 	status='1`'")or die(mysql_error);
while($row=mysql_fetch_array($result)){
echo "<option value=".$row['Plate_no'].">".$row['Plate_no']."</option>";
}
?>
 </select></td></tr>
 <td style="padding-top:12px;">Outgoing Time :</td>
<td style="padding-top:12px;"><select name="entrance"   style="width:90px;"  required x-moz-errormessage="Please Select Time" title="Please Select Time">
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
<tr><td style="padding-top:12px;"> Date:	</td>
<td style="padding-top:12px;"><input type="date" required x-moz-errormessage="Enter Your Place Start"  name="Dates" value="<?php
echo strftime ('%x');
?>" > </td> </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td style="padding-top:12px;"><input type="submit" class="button_example" name="sent" value="Send"/></td>
  </tr>
</table> 	
</center>  
</form>
<?php
 if(isset($_POST['sent']))
 {
			$Plate_no=$_POST['Plate_no'];//
			$FullName=$_POST['FullName'];
		    $entrance=$_POST['entrance'];
            $Dates=$_POST['Dates']; 		
	
 $sql="INSERT INTO report(Plate_no, FullName,entrance,Dates)
VALUES
('$Plate_no','$FullName','$entrance','$Dates')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
 echo "<script>alert('Your are Successfuly report !');</script>".mysql_error(); 
  echo' <meta content="5;driverreport.php" http-equiv="refresh" />'; 
		 }
mysql_close($conn)
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
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>