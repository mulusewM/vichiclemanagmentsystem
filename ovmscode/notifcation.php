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
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='notification.php');
   }
   else
   {
   return false;
    
   }
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
				<li><a href="Officer.php" class="current">Home</a></li>			
                <li><a href="request_services.php">Request Service</a></li>
				<li><a href="ViewresponseServices.php">View Response</a></li>
				<li><a href="manage_request.php">Manage Request</a></li>
                <li><a href="officerupdate.php">Update Account</a></li>
				<li><a href="submit_comment.php">Submit Comment</a></li>
				<li><a href='notifcation.php'><span>Notification
				<?php $av = mysql_query("SELECT * FROM assignvehicle where status='unread'");
                 $countav=mysql_num_rows($av);
				 if ($countav > 0){
                     echo "<font color='red'size='4'>"."($countav )</font>";
                     }?>
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	   	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main">
       	<div id="tooplate_content">
           <h1 align="right">
<br>
<table align='center' style='width:450px; color:black;border-radius:15px;border:1px solid #336699; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;	text-align:center;color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Reasons</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Status</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Open</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>delete</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM assignvehicle ORDER BY SID DESC");
$count=mysql_num_rows($result);
echo"<tr><td>";
if($count==0)
{
echo"<font color='red'>No assign vehicle!</font>";
}
echo"</td></tr>";
while($row = mysql_fetch_array($result))
  {
            $ctrl = $row['SID'];
            $_SESSION['SID']=$ctrl;
			$status=$row['status'];
			$r5=$row['Reason'];
?>
<tr>
<td align="center"><?php echo $r5;?></td>
<?php 
if($status=='unread')
{
print("
<td style='height:30px;	color:red;	text-align:center;'>unread</td>");
}
else
{
print("
<td style='height:30px;	color:blue;	text-align:center;'>read</td>");
}
?>	
						<?php
						print("
		<td style='height:30px;'><a href = 'open_notification.php?key=".$ctrl."'>Open</a></td>
		");
							print("
		<td style='height:30px;'><a href = 'deletenotification.php?key=".$ctrl."'>delete</a></td>
		");
		?>
		</tr>
<?php
  }
print( "</table><br><br><br>");
mysql_close($conn);
?>			
				<br><br>
</tr>
</table>
<!--End Body of section-->
</table>
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C. BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>