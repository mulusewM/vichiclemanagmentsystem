<?php 
 include("connection.php");
 session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" HREF="12.jpg" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
  function check()
  {
   if(document.getElementById("fname").value =="")
   {
    alert('Please Enter The frist name !!'); 
    document.getElementById("fname").focus();
    return false;
   }
   if(document.getElementById("pno").value =="")
   {
     alert('Please Enter phone number !!'); 
    document.getElementById("pno").focus();
    return false;
   }
   if(document.getElementById("username").value =="")
   {
    alert('Please enter  user name !!'); 
    document.getElementById("username").focus();
    return false;
   }
   
   
   
   
  }
 </script>
 
 
 
 <script language="javascript">
  function checklogin()
  {
   if(document.getElementById("pass").value =="")
   {
    alert('Please Enter The USer Name And Password !!'); 
    document.getElementById("pass").focus();
    return false;
   }  
   
  }
 </script>
</head>
<body>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">      BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>  
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
<form name="form1" method="post" action="forgetchange.php"onsubmit="return validateForm()">

<center>
  <table width="280px" align="center" style="color:black">  
  <form id="form1" name="login" method="POST" action="forgetchange.php" >

 <div style="float:left;" ><strong><font color="white" size="2px">please Enter new Passored</font></strong></div>

          <br>
		   <center><h5><u><b>Please Enter Required Information </b></u></h5></center>
		 <tr>
	       <td>User Name:</td><td><input type="text" name="User" required x-moz-errormessage="Enter Your User name " ></td>
	     </tr>
		 <tr style="padding-top:12px;">
	     <td style="padding-top:12px;"> New Password:</td>
		 <td style="padding-top:12px;"><input type="password" name="new_password" pattern="\w{8,100}" required x-moz-errormessage="Please Enter Your password at least 8  characters " title="Please Enter new password at least 8 characters"></td>
	     </tr>
		 <tr>
	     <td style="padding-top:12px;">Confirm Password:</td>
		 <td style="padding-top:12px;"><input type="password" name="confirm_password"  required></td>
		 </tr>
  <tr>
    <td style="padding-top:12px;">&nbsp;</td>
	<br><br><br>
    <td style="padding-top:12px;"><input type="submit" name="forget" class="button_example" value="Submit" />&nbsp;&nbsp;<input class="button_example"type="reset" value="Clear" /></td>
  </tr>
</table> 
</form>
   <?php
if(isset($_POST['forget'])){
$username=$_POST['User'];
$newpass=md5($_POST['new_password']);
$confirmpass=md5($_POST['confirm_password']);
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("btovms", $connect);
if(!$dbselect){
die("Error in selecting db ".mysql_error());
}
$query="select * from users where username='{$username}' ";
$result=mysql_query($query);
if(!$result){
die("query fail".mysql_error());
}
if(mysql_num_rows($result)==1){
    if($newpass!=$confirmpass){
	
	       echo'  <p class="wrong"><strong><font color="red">New Password and Confirm Password does not Match!</font></Strong></p>';
           echo' <meta content="5;forgetchange.php" http-equiv="refresh" />';
		   }
		   else
		   {
$quer="update users set password='{$newpass}' where username='{$username}'  ";
$resul=mysql_query($quer);
	       echo "<script>alert(' You are sucessfully changed password!!');</script>";                              		 
         echo' <meta content="5;forget.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo'  <p class="wrong"><strong><font color="red">Wrong User Name!!</font></Strong></p>';
 echo' <meta content="5;forgetchange.php" http-equiv="refresh" />';
}
}
?>
  

  
  
  
</div>
</td>
</tr>
</table>
<!--End Body of section-->
</table> 
					</div>
					<div class="cleaner"></div>
			</div>
		
			
	        <div id="tooplate_sidebar">
      
			</div>
            <div class="sidbar_box" style="margin-top: 40px;padding-bottom: 20px;padding-top: 20px;border-radius: 15px;background-color: #3287B2;width:210px;">
		        <h4 style="margin-left: 10px;color: white;"><b>Important Links</b></h4>
                <ul class="tooplate_list">
                    <li><a href="gallary.html">Gallery</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Our Contact</a></li> 
                </ul>
			</div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011  BURIE  TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>