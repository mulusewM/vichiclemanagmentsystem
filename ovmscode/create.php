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
	var numericExpression = /^[1-9+]+$/;
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
  	</div> <!-- end of forever header -->
          
    <div id="tooplate_menu">
			<ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="#">Manage Account</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="create.php">Create Account</a></li>
						<li><a href="update_account1.php">Update Account</a></li>
						<li><a href="delete_account1.php">Delete Account</a></li>
					</ul>
				</li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
 <div id="tooplate_main" class="shadow">
 <div id="tooplate_content">			
<form name="form1" method="post" action="create.php">
<fieldset><table align="center"style="color:black">	 
<legend align =center><h2 align="right" style="color:Blue">Creat Account Form For User</h2></legend>
 <tr>
  <td style="padding-top:12px;">First Name:</td>
  <td style="padding-top:12px;"><input type="text"pattern="\D{3,15}" required x-moz-errormessage="Please Enter Only Letter! at least 3 characters required" title="Please Enter  Letter at least 3 characters required " name="fname" id="error12"size="20"/></td>
 </tr> 
  <tr>
  <td style="padding-top:12px;">Middle Name:</td>
  <td style="padding-top:12px;"><input type="text" name="mname" size="20"pattern="\D{3,15}"id="error13" required x-moz-errormessage="Please Enter Letter Only atleast 3 characters" title="Please Enter Letter Only at least 3 characters "/></td></tr>
   <tr>
  <td style="padding-top:12px;">Last Name:</td>
  <td style="padding-top:12px;"><input type="text" name="lname" id="error14" size="20"pattern="\D{3,15}" required x-moz-errormessage="Please Enter Letter Only atleast 3 characters" title="Please Enter Letter Only at least 3 characters "/></td></tr>
  <tr>
  <td style="padding-top:12px;">User ID:</td>
   <td style="padding-top:12px;"><input type="text" name="user_id" id="user_id" required x-moz-errormessage="Enter Your ID NO" ></td>
	 </tr>
 		 <tr>              
                <td style="padding-top:12px;">Sex:</td>
                <td style="padding-top:12px;"><input type="radio"  name="sex" value="Male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="Female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
		 <tr>
	       <td style="padding-top:12px;"> Phone No.:</td>
		     <td style="padding-top:12px;"><input name="phone" id="phone" size="1" value="+251" readonly><input type="text" name="phone" id="phone" size="13" pattern="\d{9,10}"required x-moz-errormessage="Please Enter  Number Only 9 or 10  digits" title="Please Enter Number Only 9 or 10 digits "/></td></tr>
         <tr>
              <td style="padding-top:12px;">Access Type :</td>
              <td style="padding-top:12px;"><select name="actype" style="width:138;"required maxlength="7">
                  <option >Access Type</option>
				  <option value='1'>Administrator</option>
                  <option value='2'>Manager</option>
                  <option value='3'>Staff</option>
                  <option value='4'>Officer</option>
				  <option value='5'>Mechanic</option>
				  <option value='6'>Driver</option>
				  <option value='7'>Passenger</option>
                </select></td>
               </tr>
		
 <tr><td style="padding-top:12px;">Username:</td>
  <td style="padding-top:12px;"><input type="text" pattern="\w{5,15}"id="username" required x-moz-errormessage="Please Enter user name, at least  5 text length" 
title="Please Enter User Name at least 5 characters "name="username" size="20"/></td>
 </tr>
 <tr>
		<td>account:</td>
		<td>
			 <input type="text" name="account" id="account"/>
		</td>
		
	</tr>
  <tr><td style="padding-top:12px;">Password:</td>
  <td style="padding-top:12px;"><input type="password" name="password"size="20"pattern="\w{8,30}" required x-moz-errormessage="Please Enter Your password at least 8 characters " title="Please Enter Your password at least 8 characters"></td></tr>
 <tr><td style="padding-top:12px;">Confirm Password:</td>
 
  <td style="padding-top:12px;"><input type="password" name="cpassword"size="20"pattern="\w{8,30}" required x-moz-errormessage="Please Enter Your password at least 8 characters " title="Please Enter Your password at least 8 characters"></td></tr>
  <td style="padding-top:12px;"></td><td><input type="submit" value="Create" name="submit"/></td><td><input type="reset" value="Clear"/></td>
 </tr>
</table>
</form></fieldset>
	
		<?php
 if(isset($_POST['submit']))
 
 {
 $level=$_POST['actype'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$FULLNAME=$_POST['fname']." ".$_POST['mname'];
$query="SELECT * FROM users where phone_no='$_POST[phone]'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);
if($count==1){
while($row=mysql_fetch_array($resultw)){
$phone1=$row[7];







}
if($phone1==$_POST['phone'])
{
echo "<script>alert(' Phone number is used by another user!');</script>";
echo' <meta content="2;create.php" http-equiv="refresh" />';
}echo "<script>alert(' Phone number is used by another user!');</script>";
echo' <meta content="2;create.php" http-equiv="refresh" />';
}
$query="SELECT * FROM users where username='$_POST[username]'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);
if($count==1){
while($row=mysql_fetch_array($resultw)){
$user1=$row[8];
}
if($user1!=$_POST['username'])
{
echo "<script>alert(' User number is used by another user!');</script>";
echo' <meta content="2;create.php" http-equiv="refresh" />';
}
}

else 
if($password!=$cpassword)
{

echo "<script>alert(' Password and verify Password does not Match!');</script>";
echo' <meta content="2;create.php" http-equiv="refresh" />';
}
else
if($password==$cpassword)
{
$sql="INSERT INTO users (FNAME,mNAME,lname,user_id,sex,level,phone_no,username ,password,status,statuss)
VALUES
('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[user_id]','$_POST[sex]','$_POST[actype]','$_POST[phone]','$_POST[username]','$password','1','2')";

 mysql_query("insert into payment values('".$_POST['user_id']."','".$_POST['account']."', '5000')");
	

if(mysql_query($sql)) 
{
echo "<script>alert(' Account is  successfully created!');</script>";   
echo' <meta content="2;create.php" http-equiv="refresh" />';                             
} else {
echo "<script>alert('Not Created Account!!');</script>";
echo' <meta content="4;create.php" http-equiv="refresh" />'; 
}
require_once('create.php');
	}
	}
?>    	
<!-- End WOWSlider.com BODY section -->
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
        <div id="footp"><b>Copyright © 2011 E.C. Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>