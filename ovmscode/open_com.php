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
    alert(window.location='open_com.php');
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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">      BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="manager.php" class="current">Home</a></li>		
                <li><a href="registervehicle.php">Register Vehicle</a></li>
				<li><a href="vehicleinfo.php">View Vehicle info</a></li>
				<li><a href="manage_requests.php">Manage Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
                <li><a href="report.php">Generate Report</a></li>
			    <li><a href="permission.php">Get Exit permission</a></li>
                <li><a href="update.php">Update account</a></li>
                <li><a href="viewcomment.php">View Comment</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
        <div id="tooplate_main">
       	<div id="tooplate_content">
<?php
//$ctrl=$_REQUEST['vid'];
$ctrl=$_SESSION['id'];
$query="SELECT * FROM comment where id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Station is not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r1=$row['id'];
$r2=$row['fname'];
$r3=$row['lname'];
$r4=$row['email'];
$r5=$row['message'];
$status=$row['status'];
$time=$row['dates'];
}
?>
  <form id="form1" method="POST" action="open_com.php"  onsubmit='return formValidation()'>

 <table style="color:black" valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 </tr>
<tr>
<input type='hidden' name='id' value="<?php echo $r1;?>">
<input type='hidden' name='status' value="<?php echo $status;?>">
<tr><td >From:</td><td><?php echo $r2;?> &nbsp;<?php echo $r3;?></td></tr>
<tr><td>Email:</td><td><?php echo $r4;?></td></tr>
<tr><td>Message:</td><td><textarea cols="25px" rows="10px" readonly><?php echo $r5;?></textarea></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='update' value='Ok' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
				$status=$_POST['status'];
				$id=$_POST['id'];
  $update = mysql_query("update comment set status='read'
  WHERE id='{$id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
echo "<script>window.location='viewcomment.php';</script>";
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
            <div id="footp"><b>Copyright © 2011 E.C.  BURIE TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>