<?php
session_start();
error_reporting(0);
if(isset($_SESSION['role'])) {
	if($_SESSION['role'] == 'Manager') {
		die(header('location: Manager/manager.php'));	
	} else if($_SESSION['role'] == 'admin') {
		die(header('location: System Admin/System Admin.php'));
	} else if($_SESSION['role'] == 'Ticket_Officer') {
		die(header('location: Ticket Officer/Ticket Officer.php'));
	}
} else {
	die(header('location: ../home.php'));
}
?>
<html>
<head><title>pssenger</title>
<link href="../Common/css/formmapt.css" rel="stylesheet" type="text/css" />
<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die('Restricted access!! you should be Login first to access this page!!');
?>
<script type="text/javascript">
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onclick=function(){null};
	</script>
</head>
  <img src="../image/passeng.png" style="width: 100%; height:15%; float: up">
 <body id="bd" class="whole"  onLoad="yourClock()", onUnload="stopClock(); return true"> 
   <div id="bodyw"><!--ja-wrapper to align the document by 97%-->
     <div id="bodyw-inner">
        <hr>
	   <div id='menu'>
	   <ul>
	   <li ><a href="view_route.php" onclick="change_menu(this)" target="iframe1"> View Route Info</a></li>
	   <li ><a href="../Common/seat.php" onclick="change_menu(this)" target="iframe1"> View Seats</a></li>
	   <li ><a href="../Common/change_password.php" onclick="change_menu(this)" target="iframe1">Change password </a></li>
	   <li ><a href="view reservation.php" onclick="change_menu(this)" target="iframe1">View Reservation</a></li>
	   <li ><a href="reservation2.php" onclick="change_menu(this)" target="iframe1">Reserve Ticket</a></li>
	   <li ><a href="notifcation.php" onclick="change_menu(this)" target="iframe1">Notifcation</a></li>
	   <li ><a href="../Common/Comment.php" onclick="change_menu(this)" target="iframe1">Give comment</a></li>
	   <li ><a href="../Common/logout.php">Logout</a></li>
	   </ul>
	   </div>
	   <br />
	   <br /><br />
		<!-- BEGIN: CONTENT -->
	<div id="main">   <!-- to the right 82% iframe -->
	 <div id="contentt">	<!-- to change background of iframe --> 
	  <div id="content">  	<!-- to change align of iframe --> 
			<iframe name="iframe1" width="816" height="380" src="../Common/slide.php" scrolling="auto" frameborder="1"></iframe>         																		
             </div>
		    </div>
		<!-- BEGIN: RIGHT COLUMN -->
		<div id="right"> <!-- to the right float-->
		<div class="rightt"> <!-- to the right padding,border-->
		<h3>Time:</h3>
				<script src="../Common/js/time.js" language="javascript" type="text/javascript"></script>
			  <form name="the_clock">
				<table width="100%" border="0" cellpadding="2.9" cellspacing="0">
					<tr align="left"><td><a>System Time:&nbsp;&nbsp;<input type="text" name="the_time" size="12" style="padding-bottom:5px;" align = "top"></a></td></tr>
					<tr align="left"><td></td></tr>
	              </table>
	           </form>  	
	 <h3>Calender</h3>
	  <script src="../Common/js/calander.js" language="javascript" type="text/javascript"></script> 
	   <br/><br/>
	     </div>
        </div>
         </div>
		<!-- END: RIGHT COLUMN -->	
		<!-- BEGIN: LEFT COLUMN -->
     <div id="left">
     <center><u><h2>Notices</h2></u></center>									
<div class="notice" style="overflow: hidden; margin: 0px; padding: 0px; display: block; width: 100%;">									
	<marquee direction = "up" scrollamount = "7" behavior="scroll" style='height: 700px; width: 100%; position: relative; top: -300px;'>
	    <div class="notice">
	        <?php
		 	include("../Common/connection.php");
			$sel = mysql_query("select *from notice order by NOTICE_ID DESC");
			while($row = mysql_fetch_array($sel)){
				$result2 = mysql_query("select *from user where user_id = ".$row['POST_BY']);
				$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);

		   		echo "<div style='width: 221px; text-align: center; border: 1px solid black;'><br>
		   		Post By: ".$row2['first_name'].' '.$row2['last_name']."<p><br>";
		      	echo ''.$row['NOTICE_TEXT'];
		      	echo "</p><br></div><br>";
			}
			?>
		</div>			
	</marquee>
</div>
				 </div>
			  </div>    
		  </div>
	    </div>
	  </div>
<!-- END: LEFT COLUMN -->
</div>
<script type="text/javascript">
	var current_active_menu = null;
	function change_menu(menu) {
		if(current_active_menu != null)
			current_active_menu.classList.remove('active');

		menu.classList.add('active');
		current_active_menu = menu;
	}
</script>
</body>
<footer style=" background-color:; color:green; text-align:center"></br></br></br></br></br>
<!--<b> <h3>Copyright @ 2018 Selam Bus Ticket Reservation System<h3></b>-->
</footer>
</html>