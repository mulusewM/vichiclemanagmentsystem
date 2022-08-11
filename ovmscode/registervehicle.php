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
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">  Burie Town Bus Station</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
		<ul>
				<li><a href="manager.php" class="current">Home</a></li>			
                <li><a href="registervehicle.php">Register Vehicle</a></li>
		
				<li><a href="manage_requests.php">Aprove Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
				<li><a href="#">Generate Report</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="reportuser.php">Report For Users</a></li>
						<li><a href="reportvehicle.php">Vehicle Report</a></li>
						<li><a href="FuelReport.php">Fuel Information</a></li>
					</ul>
					</li>
					
				
						<li><a href="#">view</a>
					<ul style="margin-left:10px;padding-right:4px;">
					 <li><a href="viewreport.php">Viewreport</a></li>
					  <li><a href="viewcomment.php">ViewComment</a></li>
						<li><a href="vehicleinfo.php">ViewVehicle info</a></li>
					</ul>
					</li>
					
				
			    <li><a href="permission.php">Get Exit permission</a></li>
			   <li><a href="AddRoute.php">AddRoute</a></li>
			   <li><a href="postpone.php">postpone</a></li>
			 <li><a href="update.php">Update account</a></li>
              
			
			
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_main" class="shadow">  
       	<div id="tooplate_content">
			
<form name="form1" method="post" action="registervehicle.php">
<fieldset><table align="center"style="color:black">	 
<legend align =center><h2 align="right" style="color:Blue">Register Vehicle</h2></legend>
 <tr>
  <td style="padding-top:12px;">Plate Number:</td>
  <td style="padding-top:12px;"><input type="text" name="pno" id="pno" size="20" pattern="\d{3,7}"onKeyPress="return isNumeric(event)" required x-moz-errormessage="Please Enter Number Only between 2 and 8 digit ! " title="Please Enter Number Only between 2 and 8 digit !"/></td>
 </tr> 
 		 <tr>
              <td style="padding-top:12px;">Vehicle Type :</td>
              <td style="padding-top:12px;"><select name="vtype"  required maxlength="8">
                  <option ></option>
                  <option value='Nissan patrol'>Nissan patrol</option>
				  <option value='Toyota PRADO'>Toyota PRADO</option>
				  <option value='Toyota single cub'>Toyota single cub</option>
				  <option value='Nissan pick up'>Nissan pick up</option>
				  <option value='Cacciamali bus'>Cacciamali bus</option>
				  <option value='Daewoo bus'>Daewoo bus</option>
				  <option value='Mercedes benz bus'>Mercedes benz bus</option>
				  <option value='Fiat-mini-bus'>Fiat-mini-bus</option>
				  <option value='Other-Type'>Other Type</option>
				 
                </select></td>
              </tr>
	<tr>
              <td style="padding-top:12px;">Model :</td>
              <td style="padding-top:12px;"><select name="model" required maxlength="5">
                  <option ></option>
                  <option value='TVTSLEFY61NRA'>TVTSLEFY61NRA</option>
				  <option value='KUN25L-PRMDHV'>KUN25L-PRMDHV</option>
				  <option value='HZJ79LTJMRS'>HZJ79LTJMRS</option>
				  <option value='CVRULCFD22NWN'>CVRULCFD22NWN</option>
				  <option value='IHZJ105L-GMRS'>IHZJ105L-GMRS</option>
				  <option value='KB 7TNJNML'>KB 7TNJNML</option>
				  <option value='BE637JLSH'>BE637JLSH</option>
				  <option value='BF120'>BF120</option>
				  <option value='9BM3840883B'>9BM3840883B</option>
				  <option value='Other-Model'>Other Model</option>
                </select></td>
              </tr>
         <tr>
	         <td style="padding-top:12px;"> Engine Number:</td>
			   <td style="padding-top:12px;"><input type="text" name="eno" id="eno" size="20" pattern="\w{2,20}" required x-moz-errormessage="Please Enter engine Number from 2-20 digit ! " title="Please Enter Engine Number From 2-20 digit !"/></td>
	     </tr> 
		 <tr>
              <td style="padding-top:12px;"><font size="4">Owner :</font></td>
<td style="padding-top:12px;"><input type="text"pattern="\D{3,15}" required x-moz-errormessage="Please Enter Only Letter! at least 3 characters required" title="Please Enter  Letter at least 3 characters required " name="owner" id="error12"size="20"/></td>
	     </tr> 
             
               	
 		  <tr>
	       <td style="padding-top:12px;"> <font size="4">Capacity:<font></td>
		     <td style="padding-top:12px;"><input type="text" name="cap" id="cap" size="5" pattern="\d{1,2}"onKeyPress="return isNumeric(event)" required x-moz-errormessage="Please Enter Number of Capacity From 1-65 number! " title="Please Enter Number of Capacity From 1-65 number  !"/></td>
	     </tr>		 
			<tr>
			 <td style="padding-top:12px;"><font size="4">Productive Date:</font></td>
        	<td style="padding-top:12px;"><input type="date" name="date" title="Enter Id for search " id="date-pick" placeholder ="year-month-date" class="search" autocomplete="off"/></td>
			</tr>
			<tr>
              <td style="padding-top:12px;"><font size="4">Insurance :</font></td>
              <td style="padding-top:12px;"><select name="ins" style="width:148px;" required maxlength="5">
                  <option ></option>
                  <option value='Insured'>Insured</option>
				  <option value='Uninsured'>Uninsured</option>
                </select></td>
        </tr>
       <tr>  <td></td>
		    <td style="padding-top:12px;"><input type="submit" name="submit"  value="Save" class="button_example"  /></td>
       </tr>
</table>
</form></fieldset>
<?php
if(isset($_POST['submit']))
{
//geting values
//$username=$_SESSION['user'];

$pno=$_POST['pno'];
$vtype=$_POST['vtype'];
$model=$_POST['model'];
$eno=$_POST['eno'];
$owner=$_POST['owner'];
$cap=$_POST['cap'];
$ins=$_POST['ins'];
$status=1;
$date=$_POST['date'];

$query="SELECT * FROM vehicleregister where Plate_no='$_POST[pno]'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);

if($count==1){
while($row=mysql_fetch_array($resultw)){
$Plate_no=$row[0];
}
if($Plate_no==$_POST['pno']
)
if($Plate_no==$_POST['pno'])
if($Plate_no==$_POST['pno'])
{
echo "<script>alert(' Plate_no is used by another vehicle!');</script>";  
echo'<meta content="3;registervehicle.php" http-equiv="refresh" />';
}
}
else
{
if($pno==$pno)
{
$sql="insert into  vehicleregister values('$pno','$vtype','$model','$eno','$owner','$cap','$date','$ins','$status')";//
//echo"$insert";// 
if (!mysql_query($sql,$conn))
  {
		echo "<script>alert(' Already Registered!');</script>".mysql_error();
     echo' <meta content="6;registervehicle.php" http-equiv="refresh" />';	
  }
  else
  {
  echo "<script>alert(' Vehicle Register is successfully!');</script>";                                
  echo' <meta content="6;registervehicle.php" http-equiv="refresh" />';	
}
}	   
	   }
}
?>  
        </div>
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011E.C. Burie Town Bus Station</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>