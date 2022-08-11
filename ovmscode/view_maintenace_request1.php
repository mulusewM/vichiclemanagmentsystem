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
</head>
 <script type="text/javascript"> 
 function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='view_maintenace_request.php');
   }
   else
   {
   return false;
   }
  }
   </script>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">     BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System </h2></div>
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
		<?php		
			$av=mysql_query("select *from maintenancerequest where VehicleStatus='functional'");
			$countav=mysql_num_rows($av);			
			echo '<font color="red" >You have &nbsp;'.$countav. '&nbsp; New message.</font>' ;
			echo"<br><br>";
			?>
<form action="mechanicupdate.php" method="post">
<center>

<table border="1" style="color:black;width:900;height:200">
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Req ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Full Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Plate No </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Request Date</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Request Reason</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Vehicle Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Maintenance Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'> Delete</th>
</tr>
<?php
$result = mysql_query("SELECT * FROM maintenancerequest ORDER BY ReqID DESC");
while($row = mysql_fetch_array($result))
  {

$ReqID=$row['ReqID'];
$FullName=$row['FullName'];
$ctrl=$row['Plate_no'];
$RequestDate=$row['RequestDate'];
$RequestReason=$row['RequestReason'];
$VehicleStatus=$row['VehicleStatus'];
?>
<tr>
<td><?php echo $ReqID;?></td>
<td><?php echo $FullName;?></td>
<td><?php echo $row['Plate_no'];?></td>
<td><?php echo $RequestDate;?></td>
<td><?php echo $RequestReason;?></td>
<td><?php echo $VehicleStatus;?></td>	
	<td><?php
						if(($VehicleStatus)=='Unfunctional')
						{
						?>
                       			 <a href="maintenancestatus.php?status=<?php echo $row['ReqID'];?>" onclick="return confirm('Can you maintained Vehicle (<?php echo $FullName?>)');">
                        		<img src="images/activate.png" id="view" width="16" height="16" alt="" />Wait </a>
                        <?php
						}
						if(($VehicleStatus)=='functional')
						{
						?>
                       			 <a href="maintenancestatus.php?status=<?php echo $row['ReqID'];?>" onclick="return confirm('Can you wait to maintained Vehicle  (<?php echo $FullName?>)');"> 
                       			 <img src="images/deactivate.png" width="16" id="view" height="16" alt=""  /> Approve </a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;'><a href = 'deletemaintenace.php?key=".$ctrl."'><img width='15px' height='15px' src = 'images/actions-delete.png' title='Delete' onclick='isdelete();'><a href = 'view_maintenace_request.php?user_id=".$ctrl."'></a></td>");
	                    ?>						
					</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>

 
 

		</tr>

</td>
</tr>
</table>
<!--End Body of section-->
</table>
</center> 
</form>
<!--Footer-->
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