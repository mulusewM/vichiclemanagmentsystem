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
    alert(window.location='notifcation.php');
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="officer.php" class="current">Home</a></li>			
                <li><a href="request_services.php">Request Service</a></li>
				<li><a href="manage_request.php">Manage Request</a></li>
                <li><a href="officerupdate.php">Update Account</a></li>
				<li><a href="submit_comment.php">Submit Comment</a></li>
				<li><a href='notifcation.php'><span>Notification
				<?php $av = mysql_query("SELECT * FROM assignvehicle where status='unread'");
                 $countav=mysql_num_rows($av);
                     echo "<font color='red'size='4'>"."($countav )</font>";
                     ?>
                     </span></a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main">
       	<div id="tooplate_content">
<?php
//$ctrl=$_REQUEST['vid'];
$ctrl=$_SESSION['SID'];
$query="SELECT * FROM assignvehicle where SID='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Vehicle  is  not  available!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
            $r1=$row['SID'];
			$User_id=$row['User_id'];//
			$Plate_no=$row['Plate_no'];//
			$FullName=$row['FullName'];//
			$Starts=$row['Starts'];// 
			$Arrival=$row['Arrival'];
			$Outgoing=$row['Outgoing'];
			$times=$row['times'];//
			$Entrance=$row['Entrance'];//
			$r5=$row['Reason'];//
            $status=$row['status'];
}
?>
  <form id="form1" method="POST" action="open_notification.php"  onsubmit='return formValidation()'>

 <table style="color:black" valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 </tr>
<tr>
<input type='hidden' name='SID' value="<?php echo $r1;?>">
<input type='hidden' name='status' value="<?php echo $status;?>">
<tr><td> User_ID:</td><td><?php echo $User_id;?></td></tr>
<tr><td> Plate_No.:</td><td><?php echo $Plate_no;?></td></tr>
<tr><td> Driver Name:</td><td><?php echo $FullName;?></td></tr>
<tr><td> Start Place:</td><td><?php echo $Starts;?></td></tr>
<tr><td> Arrival Place:</td><td><?php echo $Arrival;?></td></tr>
<tr><td> Outgoing Date:</td><td><?php echo $Outgoing;?></td></tr>
<tr><td> Outgoing Time:</td><td><?php echo $times;?></td></tr>
<tr><td> Entrance Date:</td><td><?php echo $Entrance;?></td></tr>
<tr><td>Reason:</td><td><textarea cols="25px" rows="10px" readonly><?php echo $r5;?></textarea></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='update' value='Ok' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
				$status=$_POST['status'];
				$SID=$_POST['SID'];
  $update = mysql_query("update assignvehicle set status='read'WHERE SID='{$SID}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
echo "<script>window.location='notifcation.php';</script>";
  }}
  ?>
  </form> 	
				<br><br>
				<br><br>
</td>
</tr>

</table>
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