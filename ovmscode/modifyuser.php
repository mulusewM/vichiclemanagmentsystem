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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="admin.php" class="current">Home</a></li>
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
<?php
$ctrl = $_REQUEST['user_id'];
$query="SELECT * FROM users where user_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("User not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['FNAME'];
$r1=$row['mNAME'];
$r2=$row['lname'];
$r3=$row['user_id'];
$r4=$row['sex'];
$r5=$row['level'];
$r6=$row['phone_no'];
$r7=$row['username'];
$r8=$row['password'];
}
?>
		<form name="form1" method="post" action="modifyuser.php">
		<table style="color:black" align='center' >
<tr>
<tr><td style="padding-top:12px;">First Name:</td><td style="padding-top:12px;"><input type='text' name='fname' pattern="\D{3,15}" required x-moz-errormessage="Please Enter Only Letter! at least 3 characters required" title="Please Enter Letter atleast 3 characters required "  id='fname' value="<?php echo "$r0"?>"></td></tr>
<tr><td style="padding-top:12px;">Middle Name:</td><td style="padding-top:12px;"><input type='text' name='mname' pattern="\D{3,15}" required x-moz-errormessage="Please Enter Only Letter! at least 3 characters required" title="Please Enter Letter atleast 3 characters required "  id='mname' value="<?php echo "$r1"?>"></td></tr>
<tr><td style="padding-top:12px;">Last Name:</td><td style="padding-top:12px;"><input type='text' name='lname' pattern="\D{3,15}" required x-moz-errormessage="Please Enter Only Letter! atleast 3 characters required" title="Please Enter Letter atleast 3 characters required "  id='lname' value="<?php echo "$r2"?>"></td></tr>
<tr><td style="padding-top:12px;">User ID:</td><td style="padding-top:12px;" bgcolor="red"><input  type='text' id='user_id' name='user_id'"<?php echo "$r3"?>"></td></tr>
<tr><td style="padding-top:12px;">Sex:</td><td style="padding-top:12px;"><input  type='text' name='sex'  id='sex' value="<?php echo "$r4"?>"required></td></tr>
<tr><td style="padding-top:12px;">Level  :</td><td style="padding-top:12px;"><input type='text' name='level' id='level'  value="<?php echo "$r5"?>"></tr></td>
<tr><td style="padding-top:12px;">Phone No:</td><td style="padding-top:12px;"><input type='text' name='phone_no' id='phone' onKeyPress="return isNumberKey(event)"value="<?php echo "$r6"?>"></tr></td>
<tr><td style="padding-top:12px;">Username:</td><td style="padding-top:12px;"><input type='text' pattern="\w{5,15}" name='username' required x-moz-errormessage="Please Enter Only Letter, at least  5 text length" 
title="Please Enter at least 5 length Letter Only" id='username' value="<?php echo "$r7"?>"></tr></td>
<tr><td style="padding-top:12px;">Password:</td><td style="padding-top:12px;"><input type='text' name='password' pattern="\w{8,100}" required x-moz-errormessage="Please Enter Your password at least 8 characters " title="Please Enter Your password  at least 8 characters " id='password' value="<?php echo "$r8"?>"></tr></td>
<tr><td style="padding-top:12px;" colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
</form>
 <?php
}
?>
<?php
  if(isset($_POST['update']))
  {
	            $fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$lname=$_POST['lname'];
				$user_id=$_POST['user_id'];
				$phone_no=$_POST['phone_no'];
				$level=$_POST['level'];

  $update = mysql_query("update users set FNAME='$fname',mNAME='$mname', lname='$lname',level='$level', phone_no='$phone_no' 
  WHERE user_id='{$user_id}'") or die(mysql_error());
 // echo'<meta content="3;update_account1.php" http-equiv="refresh"/>';
 echo "<script>alert('You are update  sucessfully!!!');</script>".mysql_error();  
 echo "<script>window.location='update_account1.php';</script>";
  }
  ?>
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