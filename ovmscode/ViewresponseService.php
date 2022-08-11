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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
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
<table align="center" style="border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
				<td>
						<form action="ViewresponseService.php"  method='POST'>
						<table>
							<tr style='color:black';>
								<td class="search">Enter your user ID Number:</td>
								<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." required x-moz-errormessage="Please enter the user id No"/></td>
								<td><input type="submit" value="Search" name="search" style="cursor:pointer;" class="button_example"/></td>
							</tr>
						</table>
					</form>
					<?php
					if(isset($_POST['search']))
 {
					$vid=$_POST['searchs'];
					$sql= "SELECT * FROM  serviceresponse where user_id='$vid'";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count<1)
					{
					echo('<font color="red">This ID Number is not found</font>');
					echo'<meta content="5;ViewresponseService.php" http-equiv="refresh" />';
					}
					else
					{
					echo"<center>";
					echo"<br><br><br><br>";
echo "<table border='1' style='width:700px;color:black;height:100px;border-radius:10px;border-radius:10px;border:1px solid #336699' align='center'>
<tr>
<th bgcolor='#336699'><font color='white'>SID</th>
<th bgcolor='#336699'><font color='white'>user_id</th>
<th bgcolor='#336699'><font color='white'>RequestDate</th>
<th bgcolor='#336699'><font color='white'>RequestReason</th>
<th bgcolor='#336699'><font color='white'>ResponseStatus</th>

</tr>";
while($row = mysql_fetch_array($result))
  {
  print ("<tr>");
    print ("<td>" . $row['SID']. "</td>");
	    print ("<td>" . $row['user_id']. "</td>");
		print ("<td>" . $row['RequestDate']. "</td>");
		print ("<td>" . $row['RequestReason']. "</td>");
	    print ("<td>" . $row['RequestStatus']. "</td>");
	   
  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
}
mysql_close($conn);
?>

</td></tr></table>  
<!--Footer-->
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright ©   2011 E.C. BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>