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
<title>Vehicle Management System</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
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
    
    <div id="tooplate_main">
       	<div id="tooplate_content">
    <?php		
			$adminstrator=mysql_query("select *from users where level='1'");
			$countadmin=mysql_num_rows($adminstrator);
			
			$manager=mysql_query("select *from users where level='2'");
			$countmanager=mysql_num_rows($manager);
			
			$staff=mysql_query("select *from users where level='3'");
			$countstaff=mysql_num_rows($staff);
		
			$officer=mysql_query("select *from users where level='4'");
			$countofficer=mysql_num_rows($officer);

			$mechanic=mysql_query("select *from users where level='5'");
			$countmechanic=mysql_num_rows($mechanic);
			
			
			$driver=mysql_query("select *from users where level='6'");
			$countdriver=mysql_num_rows($driver);
			
			echo '<font color="magneta"; size="4" ><center><h2><u>Information of Users</u></h2><br> There are '.$countadmin.'&nbsp;&nbsp;  Adminstrator,  '.$countmanager. '&nbsp;&nbsp; Manager ,  '.$countstaff. ' &nbsp;&nbsp;Staff , &nbsp;&nbsp;&nbsp;'.$countofficer.'&nbsp;&nbsp;Officer , &nbsp;&nbsp;&nbsp;'.$countmechanic.'&nbsp;&nbsp;Mechanic and &nbsp;'.$countdriver.'&nbsp;&nbsp; Driver. <br> Total number number of users is ' .($countadmin+$countmanager+ $countstaff+$countofficer+$countmechanic+$countdriver).'.'.'</font>' ;
			echo"<br>";
   ?>
<table align='center'border='1'style="color:black" >
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>FULL Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>User ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Sex</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Level</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Username</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Password</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>De_Activate</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Update</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM users Order BY fname ASC");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['user_id'];
$fname=$row['FNAME'];
$mNAME=$row['mNAME'];
$sex=$row['sex'];
$level=$row['level'];
$username=$row['username'];
$password=$row['password'];
$status=$row['status'];
?>
<tr>
<td><?php echo $fname."&nbsp;".$mNAME;?></td>
<td><?php echo $row['user_id'];?></td>
<td><?php echo $sex;?></td>
<td><?php echo $level;?></td>
<td><?php echo $username;?></td>
<td> <?php echo $password;?></td>	
<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you activate (<?php echo $fname?>)');">
                        		<img src="images/deactivate.png" id="view" width="16" height="16" alt="" />disabled </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['user_id'];?>" onclick="return confirm('Really you disabled (<?php echo $fname?>)');"> 
                       			 <img src="images/activate.png" width="16" id="view" height="16" alt=""  />enabled</a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;'><a href = 'modifyuser.php?user_id=".$ctrl."'><img src = 'images/actions-edit.png' width='15px' height='15px' title='Update' ></img></a></td>	");
	                    ?>
		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>
<!--End Body of section-->
<!--Footer-->	
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright @ 2011 E.C. Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>