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
	var numericExpression = /^[0-9+]+$/;
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
document.getElementById(errid).innerHTML="pls fill this field";
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="Driver.php" >Home</a></li>			
				<li><a href="request_maintenace.php">Request Maintenance </a></li>
				<li><a href="ViewresponseServicess.php">View Response </a></li>
                <li><a href="driverupdate.php">Update Account</a></li>
				<li><a href="submit_comments.php">Submit Comment </a></li>
				<li><a href="driverreport.php">Send Report</a></li>
				<?php 
                     ?>
                     </span></a></li>				
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main" class="shadow">
       	<div id="tooplate_content">

<form action="submit_comment.php" method="post" onsubmit='return formValidation()'>
<center>
<p><font size="5" color="magneta"><u>Submit Your Comment</u></font></p>
  <table style="color:black" width="480px" valign="top" align="center" border="0">
  <tr>
    <td  style="padding-top:12px;"> First Name:</td>
<td style="padding-top:12px;"><input type='text' name='fname' required x-moz-errormessage="Enter first name" "<?php echo $FirstName;?>"></td>
 </tr> 
  <tr>
    <td  style="padding-top:12px;"> lastName:</td>
<td style="padding-top:12px;"><input type='text' name='lname' required x-moz-errormessage="Enter first name" "<?php echo $FirstName;?>"></td>
 </tr> 
		  <tr style="padding-top:12px;">
		<td> Email Address:</td>
<td class="col"><input type="text" name="email" id="email" required x-moz-errormessage="Please Select Type Email " title="Please Enter Letter Only" id="e"  onblur="btvms('e','error12')"/></td>
<td class="col" id="error2" style="color:red"></td>
</td></tr>
	<tr style="padding-top:12px;">      
	<td> Message:</td>
		   <td><textarea rows="6" cols="30" align="center" name="com" id="message" placeholder='Write your comment here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
<tr style="padding-top:12px;"><td> Date:	</td>
<td ><input type="date" required x-moz-errormessage="Enter Your Place Start"  name="Dates" value="<?php
echo strftime ('%x');
?>"  </td> </tr>
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
  $Dates=$_POST['Dates']; 
$sql="INSERT INTO comment (fname,lname, email, message,Dates,status)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[com]','$Dates','unread')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
		 echo'  <p class="success">Your Message has been Sent successfuly!</p>';
         echo' <meta content="5;submit_comments.php" http-equiv="refresh" />'; 
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
            <div id="footp"><b>Copyright © 2011 Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>