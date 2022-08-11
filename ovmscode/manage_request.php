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
<!-- End WOWSlider.com HEAD section --><script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>
<script> function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='delete_account1.php');
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">   BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="officer.php" class="current">Home</a></li>			
                <li><a href="request_service.php">Request Service</a></li>
				<li><a href="ViewresponseService.php">View Response</a></li>
				<li><a href="manage_request.php">Manage Request</a></li>
                <li><a href="officerupdate.php">Update Account</a></li>
				<li><a href="submit_comment.php">Submit Comment</a></li>
				<li><a href="confirm reservation.php">confirm reservation</a></li>
			 <li><a href="postpone.php">postpone</a></li>
				<li><a href='notifcation.php'><span>Notification<?php $av = mysql_query("SELECT * FROM assignvehicle where status='unread'");
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
		<?php		
			$av=mysql_query("select *from servicerequest where RequestStatus='NO'");
			$countav=mysql_num_rows($av);			
			echo '<font color="red" >You have &nbsp;'.$countav. '&nbsp; New message.</font>' ;
			echo"<br><br>";
			?>
	<table style="color:black" border='1' align='center'>
<tr>
<th style='height:30px; font-weight:bold;background-color:#336699;'><font color='white' size='2'>SID</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>User ID</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Request Date</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Number Of Traveller</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Place Start</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Place Arrival </th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Outgoing Date</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Entrance Date </th>
<th style='height:30px; font-weight:bold;background-color:#336699;'><font color='white' size='2'>Outgoing Time </th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Request Reason</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'> Service Status</th>
<th style='height:30px;	font-weight:bold;background-color:#336699;'><font color='white' size='2'> Delete</th>
</tr>  
<?php
include("connection.php");  
$result = mysql_query("SELECT * FROM servicerequest ORDER BY SID DESC");
while($row = mysql_fetch_array($result))
  {
$SID = $row['SID'];
$ctrl = $row['user_id'];
$RequestDate=$row['RequestDate'];
$NumberOfTraveller=$row['Traveller'];
$PlaceStart=$row['PlaceStart'];
$PlaceArrival=$row['PlaceArrival'];
$OutgoingTime=$row['Outgoingdate'];
$EntranceTime=$row['Entrancedate'];
$Time=$row['OutgoingTime'];
$RequestReason=$row['RequestReason'];
?>
<tr>
<td><?php echo $SID;?></td>
<td><?php echo $row['user_id'];?></td>
<td><?php echo $RequestDate;?></td>
<td><?php echo $NumberOfTraveller;?></td>
<td><?php echo $PlaceStart;?></td>
<td><?php echo $PlaceArrival;?></td>
<td><?php echo $OutgoingTime;?></td>
<td><?php echo $EntranceTime;?></td>
<td><?php echo $Time;?></td>
<td><?php echo $RequestReason;?></td>	
<td><?php
$status=$row['RequestStatus'];
						if(($status)=='NO')
						{
						?>
                       			 <a href="statusService.php?status=<?php echo $row['SID'];?>" onclick="return confirm('Can you  Give service  to us (<?php echo $SID?>)');">
                        		<img src="images/activate.png" id="view" width="16" height="16" alt="" />Confirm request </a>
                        <?php
						}
						if(($status)=='YES')
						{
						?>
                       			 <a href="statusService.php?status=<?php echo $row['SID'];?>" onclick="return confirm('Can rejectss Give service  to us (<?php echo $SID?>)');"> 
                       			 <img src="images/deactivate.png" width="16" id="view" height="16" alt=""  /> Reject request </a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;'><a href = 'deleterequest.php?key=".$ctrl."'><img width='15px' height='15px' src = 'images/actions-delete.png' title='Delete' onclick='isdelete();'><a href = 'manage_request.php?user_id=".$ctrl."'></a></td>");
	                    ?>

		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>
            <div class="cleaner"></div>
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