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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">  BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="Mechanic.php" class="current">Home</a></li>			
				<li><a href="view_maintenace_request.php">View Maintenance Request</a></li>
                <li><a href="mechanicupdate.php">Update Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main" class="shadow">
       	<div id="tooplate_content">
<form action="mechanicupdate.php" method="post">
<center>
<p><font size="5" color="magneta"><u>Change your password</u></font></p>
<table style="color:black">

		 <tr>
	     <td style="padding-top:12px;"> Old Password:</td>
		 <td style="padding-top:12px;"><input type="password" name="old_password" required x-moz-errormessage="Enter Old password" ></td>
	     </tr>
         <tr>
	     <td style="padding-top:12px;"> New Password:</td>
		 <td style="padding-top:12px;"><input type="password" name="new_password" pattern="\w{8,100}" required x-moz-errormessage="Please Enter Your password at least 8  characters " title="Please Enter new password at least 8 characters"></td>
	     </tr>
		 <tr>
	     <td style="padding-top:12px;"> Confirm Password:</td>
		 <td style="padding-top:12px;"><input type="password" name="confirm_password" pattern="\w{8,100}" required x-moz-errormessage="Please Enter Your password at least 8  characters " title="Please Enter Re_new password at least 8 characters"></td>
		 </tr>
</table>	
</center>  
<center><input type="Submit" value="Change Password" name="changepassword" class="button_example" required x-moz-errormessage="Enter Your Place Start" Onclick="return check(this.form);"/></center>	
</center> 
</form>
 <?php
if(isset($_POST['changepassword']))
{
$oldpass = $_POST['old_password'];
$newpass=$_POST['new_password'];
$confirmpass=$_POST['confirm_password'];
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("btovms", $connect);
if(!$dbselect){
die("error in selecting db ".mysql_error());
}
$query="select * from users where password='{$oldpass}' ";
$result=mysql_query($query);
if(!$result){
die("query fail".mysql_error());
}
if(mysql_num_rows($result)==1){
    if($newpass!=$confirmpass){
           echo "<script>alert('New Password and Confirm Password does not Match!');</script>";		   
		   echo' <meta content="5;mechanicupdate.php" http-equiv="refresh" />';
		   }
		   else
		   {
  $query="update users set password='{$newpass}' where password='{$oldpass}'";
        $result=mysql_query($query);
		 echo "<script>alert('Your password has been change Successfuly!');</script>";
         echo' <meta content="5;mechanicupdate.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo "<script>alert('Wrong Old password!');</script>";
 echo' <meta content="5;mechanicupdate.php" http-equiv="refresh" />';
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
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>