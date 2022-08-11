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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    BURIE TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
		<ul>
				<li><a href="manager.php" class="current">Home</a></li>			
                <li><a href="registervehicle.php">Register Vehicle</a></li>
				<li><a href="vehicleinfo.php">View Vehicle info</a></li>
				<li><a href="manage_requests.php">Approve Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
				<li><a href="#">Generate Report</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="reportuser.php">Report For Users</a></li>
						<li><a href="reportvehicle.php">Vehicle Report</a></li>
						<li><a href="FuelReport.php">Fuel Information</a></li>
					</ul>
					</li>
			    <li><a href="permission.php">Get Exit permission</a></li>
                <li><a href="update.php">Update account</a></li>
                <li><a href="viewcomment.php">View Comment</a></li>
				 <li><a href="viewreport.php">View report</a></li>
			</ul>         	
		</div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_main" class="shadow">  
       	<div id="tooplate_content">
			
					<!--	<form action="vehicleinfo.php" method='POST'>
						<table style="color:black">
							<tr>
								<td class="search" >Enter Plate Number:</td>
								<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." required x-moz-errormessage="Please enter the Plate Number"/></td>
								<td><input type="submit" value="Search" name="search" style="cursor:pointer;" class="button_example"/></td>
							</tr>
						</table>
					</form>         -->
					<?php
					//if(isset($_POST['search']))
 //{
	//				$Plateno=$_POST['searchs'];
					$sql= "SELECT * FROM vehicleregister ";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count<1)
					{
					echo('<font color="red">This plate Number is not found</font>');
					echo'<meta content="5;vehicleinfo.php" http-equiv="refresh" />';
					}
					else
					{
					echo"<center>";
					echo"<br><br><br><br>";
echo "<table border='1'style='width:900px;height:150px;color:black;border:1px solid #336699' align='center'>
<tr>
<th bgcolor='#336699'><font color='white'>Plate no</th>
<th bgcolor='#336699'><font color='white'>Type</th>
<th bgcolor='#336699'><font color='white'>Model</th>
<th bgcolor='#336699'><font color='white'>Engine no</th>
<th bgcolor='#336699'><font color='white'>Owner</th>
<th bgcolor='#336699'><font color='white'>Capacity</th>
<th bgcolor='#336699'><font color='white'>production date</th>
<th bgcolor='#336699'><font color='white'>Insurance</th>
<th bgcolor='#336699'><font color='white'>Status</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  print ("<tr>");
  print ("<td>" . $row['Plate_no']. "</td>");
  print ("<td>" . $row['Type']. "</td>"); 
  print ("<td>" . $row['Model']. "</td>"); 
  print ("<td>" . $row['Engineno']. "</td>");
  print ("<td>" . $row['Owner']. "</td>");   
  print ("<td>" . $row['Capacity']. "</td>");   
  print ("<td>" . $row['productiondate']. "</td>");  
  print ("<td>" . $row['Insurance']. "</td>");  
  print ("<td>" . $row['status']. "</td>");    
  print ("</tr>");
  }
print( "</table>");
echo"</center>";
}
//}
mysql_close($conn);
?>
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