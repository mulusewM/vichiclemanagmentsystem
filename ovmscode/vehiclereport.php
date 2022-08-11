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
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script src="aa.js" type="text/javascript"></script>
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
    <script type="text/javascript">
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
    <div id="tooplate_main">
       	<div id="tooplate_content">
<form method="post">
<table width="755">
	<tr>
    	<td align="center"width="190px" style="font-size:18px; color:#006; text-indent:30px;">Select Date
        
        	<input type="date" name="searchtxt" title="Enter Id for search " id="date-pick" placeholder ="year-month-date" class="search" autocomplete="off"/>
            <input type="date" name="searchtxt1" title="Enter Id for search " id="date-pick1" placeholder ="year-month-date" class="search" autocomplete="off"/>
        <style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="?????  ??? ??? ???" />
        </td>
    </tr>
</table>
</form>
</div>
				<br /><br />			  
<div id="content">
					<form action="" method="post" >
<table border="1" width="900" align="center" cellpadding="3" class="mytable" cellspacing="0">
   
				<div id="div4" style="display:none;">
					<form action="" method="post" >
						<center><h3>Vehicle:</h3></center> 
						<?php 
						echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysql_query("SELECT * FROM vehicleregister ");
			echo '<table align="center" style="width:200px;color:black;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Plate no.</th><th bgcolor="#336699"><font color="white" size="2">Type</th> <th bgcolor="#336699"><font color="white" size="2">Model</th><th bgcolor="#336699"><font color="white" size="2">Owner</th><th bgcolor="#336699"><font color="white" size="2">Capacity</th><th bgcolor="#336699"><font color="white" size="2">production  date</th><th bgcolor="#336699"><font color="white" size="2">Insurance</th><th bgcolor="#336699"><font color="white" size="2">Status</th></tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>Vehicle are registered";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");
	 print ("<td><font size='2'>" . $row['Plate_no'] . "</td>");
print ("<td><font size='2'>" . $row['Type'] . "</td>");	 
print ("<td><font size='2'>" . $row['Model'] . "</td>");		
print ("<td><font size='2'>" . $row['Owner'] . "</td>");	
print ("<td><font size='2'>" . $row['Capacity'] . "</td>");	
print ("<td><font size='2'>" . $row['productiondate'] . "</td>");	
print ("<td><font size='2'>" . $row['Insurance'] . "</td>");
print ("<td><font size='2'>" . $row['status'] . "</td>");			
  print ("</tr>");
  }
print( "</table>");	
						?>
					</form>
				</div>
	</div>
		
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>