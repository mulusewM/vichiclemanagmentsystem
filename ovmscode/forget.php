<?php 
 include("connection.php");
 session_start(); ?>
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

</head>
<body>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
	</div><!-- end of forever header -->
		<div id="tooplate_menu" class="menu1">
			<ul>
			<li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="gallary.html">Gallery</a></li>
			<li><a href="help.php">Help</a></li>
			<li><a href="login.php">Login</a></li>
			</ul>  	
		</div> <!-- end of tooplate_menu -->
		<div id="tooplate_main">
			<div id="tooplate_content">
					<div>
<form name="form1" method="post" action="forget.php">
<center>
   <table  width="280px" align="center"style="color:black"> 
 <h2>If you forget your password ? </h2>Please Enter the information
		  <tr>
	       <td style="padding-top:12px;">First Name:</td><td style="padding-top:12px;"><input type="text" name="fname" id = "fname" required x-moz-errormessage="Enter Your First name" ></td>
	     </tr>
		 <tr>
	       <td style="padding-top:12px;">Phone Number:</td><td style="padding-top:12px;"><input type="text" name="pno" id= "pno" required x-moz-errormessage="Enter Your Phone Number" ></td>
	     </tr>
		  <tr>
	       <td style="padding-top:12px;">User Name:</td><td style="padding-top:12px;"><input type="text" name="username" id="username" required x-moz-errormessage="Enter Your Username" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br><br><br>
    <td style="padding-top:12px;"><input type="submit" name="forget" class="button_example" value="Submit" />&nbsp;&nbsp;<input class="button_example"type="reset" value="Clear" /></td>
  </tr>
</table> 
 </center>
</form>
 <?php
if(isset($_POST['forget'])){
$fname=$_POST['fname'];
$pno=$_POST['pno'];
$username=$_POST['username'];

$quer="select password from  users where FNAME='{$fname}' AND phone_no='{$pno}' AND username='{$username}' ";
$resul=mysql_query($quer);
if(!$resul){
   		echo "First name, phone number and user name not match!";
}
else{
while($row = mysql_fetch_array($resul))
  {
 echo'<center><strong><font color="green">Hi&nbsp;&nbsp;&nbsp;</font>'.$fname."&nbsp;&nbsp;&nbsp;<br/></center>";
  echo'<a href="forgetchange.php"><center><font color="blue"; size="4"><br/>Click here to set new Password:&nbsp;&nbsp;</font></center></a>';
}
}
}
?>    
			</div>
		</div>
     <div class="cleaner"></div>
</div> <!-- end of main -->
      <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE  TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>