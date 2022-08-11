<?php 
 include("connection.php");
 session_start(); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<!--<link rel="shortcut icon" HREF="12.jpg" />-->
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<style>
#contact_form form .input_field{ 
	width: 270px; 
	margin-left: 0px;
}
#contact_form form label { 
	display: block; 
	width: 200px; 
	margin-left: 0px;
}
#forget { 
	display: block; 
	margin-left: 100px;
}
</style>
</head>
<body>
<div id="tooplate_wrapper">
	<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white"> Burie Town Bus Station</span><br/><br/></b>Online Vehicle Management System</h2></div>
	</div><!-- end of forever header -->
		<div id="tooplate_menu">
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
		
<form name="form1" method="post" action="login.php">
<center>
  <table bgcolor="#99cccc"width="450" height="200" border="11" cellpadding="0" cellspacing="0">
    <tr><td><img src="images/login.jpg"width="160" height="100"></td><td colspan="3" align="left" bgcolor="#99cccc"style="color:#"><h1>Login Here </h1></td>
    <tr bgcolor="#99cccc"height="60">
      <td style="color:#" width="12"align="center"><h2><u>U</u>ser Name</h2>
      <td width="260"bgcolor="#99cccc"height="50px"><input style="text-size:"20px" name="username" type="text" id="username" size="34"required>
      <tr bgcolor="#99cccc"height="60">      
      <td border="0"align="center"style="color:#"><h2><u>P</u>assword</h2>
	       <td><input name="password" type="password" id="password" size="34"required>
	  	  <!--<tr>
              <td style="padding-top:12px;">Role Type :</td>
              <td style="padding-top:12px;"><select name="actype" style="width:138;"required maxlength="6">
                 <option > Role Type:</option>
				  <option value='1'>Administrator</option>
                  <option value='2'>Manager</option>
                  <option value='3'>Staff</option>
                  <option value='4'>Officer</option>
				  <option value='5'>Mechanic</option>
				  <option value='6'>Driver</option>
				  <option value='7'>Passanger</option>
                </select></td>
               </tr>
			   -->
 
      <tr><td height="50" colspan="3" align="center" bgcolor="#"> <input size="50" type="submit" name="Submit" value="login"/>
	  <input type="reset" name="reset" value="clear"/>

  </table>
  <ul>
  <a href="forget.php"><font size="5" color="magneta"><u>Forgotten Password ???</u></font></a>
  </ul>
 </center>
</form>
<?php

	   if (isset($_POST['Submit'])){ 
	    $username=$_POST['username'];
		$password=$_POST['password'];
	    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	    $result = mysql_query($sql); 
		// TO check that at least one row was returned 
		$rowCheck = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
        $status=$row['status'];
		 if($row['level']==1){ 
		 if($status==1)
		{
		$_SESSION['user_id']=$row['user_id'];
         echo "<script>window.location='admin.php';</script>";
			} 
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}}	
			else if($row['level']==2){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
            echo "<script>window.location='Manager.php';</script>";
			} 
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}}
		
		else if($row['level']==3){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;Staff.php" http-equiv="refresh" />';
			}
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';			   
		}}
		else if($row['level']==4){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;Officer.php" http-equiv="refresh" />';
			}
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}}
		else if($row['level']==5){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;mechanic.php" http-equiv="refresh" />';
			}
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}}
		
			else if($row['level']==6){
          if($status==1)
		{
			
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;Driver.php" http-equiv="refresh" />';
			}
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		}
		}
		else if($row['level']==7){
          if($status==1)
		{	
		$_SESSION['user_id']=$row['user_id'];
		
         echo'  <meta content="1;passenger.php" http-equiv="refresh" />';
			}
			else
		{
		echo "<script>alert('Your Account is not active Please contact the system  Administrator!');</script>";                            
		   echo' <meta content="4;login.php" http-equiv="refresh" />';	
		   
		}}
		else {
		
		echo"<script> alert('Login fail! Please check, your correct username or password!'); 
window.location = 'login.php';</script>";
		}
		}
     mysql_close($conn)
    ?>
			
				<div class="cleaner"></div>
        </div>
        <div id="tooplate_sidebar">
		
            <div class="sidbar_box" style="margin-top: 40px;padding-bottom: 20px;padding-top: 20px;border-radius: 15px;background-color: #3287B2;width:210px;">
<h4 style="margin-left: 30px;color: white;"><b>Business Rule</b></h4>
<ul class="tooplate_list">
<marquee behavior="scroll" direction="up" width="100%"height=155 scrollamount="3"onmouseover="this.scrollAmount = 0"onmouseout="this.scrollAmount = 1.5">
	<font size="3" color="black">
It is the collection of rules and regulations of the vehicle management system that tells which action should be done and which is forbidden to do for the employee.
</font>
<font size="3" color="yellow">
<br><b>BR1:</b>  Users of the system must have proper user name and password in order to login the system.
</font>
<font size="3" color="red">
<br><b>BR2:</b> users must register the new cars before it start work. 
</font>
<font size="3" color="Yellow">
<br><b>BR3:</b> The manager should check the fuel balance of the car while the car travelled.
</font>
<font size="3" color="red">
<br><b>BR4:</b> The manager must generate report in case of some conditions occur.
</font>
<font size="3" color="yellow">
<br><b>BR5:</b> Vehicles should be maintained when they are damaged or based on schedule maintenance report.
</font>
<font size="3" color="red">
<br><b>BR6:</b> The manager should approvethe request of the officer and staff.
</font>
<font size="3" color="yellow">
<br><b>BR7:</b>System  assigned the vehicle and automatically sends notification for driver and requester office.
	</font>
	</marquee>
</ul>	
			</div>			
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C.Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>