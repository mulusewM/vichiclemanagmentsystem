<?php session_start();?>
<?php
if(isset($_POST['R_submit'])) {
	include("../Common/connection.php");
	$departure=$_POST['departure'];
	$destination=$_POST['destination'];
	$distance=$_POST['distance'];
	$cost=$_POST['cost'];

	$query1="insert into route values('','$departure','$destination','$distance','$cost')"; 
	$query2=mysql_query($query1);
	if($query2){
		$success="data inserted successfully...";
		
	}
}
?>
<html>
<head>
<link href="formmapt.css" rel="stylesheet" type="text/css" />
<style type="text/css">
 .error {
  	color: red;
  	display: none;
  }  
 </style>
</head>  
<body>
<center>
<?php
if(isset($success))
	echo '<label style="color: green; display: block; font-weight: bold; font-size: 35px;">data inserted successfully ...</label><br>';
?>
<div style ="width:700px;height:300px;margin-left:10px">
	 <h2> Add Route Information</h2>	 
<form name="f1" action="?" method="post" onsubmit="return check()">  
	<table  border = "0 " style="border: 1px solid black; padding: 20px 20px;" margin-left: 0px>

	<tr>
		<td>From:</td><td><input type="text" name="departure" id="departure" /></td>
		<td id="departutre_place_error" class="error">Departure place should be in strings</td>
		<td id="departutre_place_error_2" class="error">please fill departure place </td>
	</tr>

	<tr>
		<td>To:</td><td><input type="text" name="destination" id="destination" /></td>
		<td id="destination_error" class="error">destination name should be in characters</td>
		<td id="destination_error_2" class="error">Please fill destination</td>
	</tr>
	<tr>	
		<td>Distance:</td><td><input type="text" name="distance" id="distance" /></td>
		<td id="distance_error" class="error">Please enter numbers only</td>
		<td id="distance_error_2" class="error"> Distance filled is Required</td>
	</tr>
	<tr>
		<td>Cost:</td><td><input type="text" name="cost" id="cost" /></td>
		<td id="cost_error" class="error">Cost should be in numbers</td>
		<td id="cost_error_2" class="error">please fill the cost</td>
	</tr>
	<tr style="height: 20px;"></tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Submit" name="R_submit"/> <input type="reset" value="Cancel" name="R_Cancel" id="b2"/></div>
	</center> </td>
	</tr>
	</table>
</form>
</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp = /^\d{3}\d{3}\d{4}$/;
		var stringWith = /^[a-zA-Z_ ]*$/;
		
		if(document.getElementById("departure").value==""){
			document.getElementById('departutre_place_error_2').style.display="block";
			document.getElementById('departutre_place_error').style.display = "none";
			
			return false;
		}else if(!document.getElementById("departure").value.match(stringWith) )  {
			document.getElementById('departutre_place_error').style.display = "block";
			document.getElementById('departutre_place_error_2').style.display="none";
			return false;
		}
		else{
			document.getElementById('departutre_place_error').style.display = "none";
			document.getElementById('departutre_place_error_2').style.display = "none";
		}
		if(document.getElementById('destination').value==""){
			document.getElementById('destination_error_2').style.display="block";
			document.getElementById("destination_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("destination").value.match(stringWith)) {
			document.getElementById('destination_error').style.display="block";
			document.getElementById('destination_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('destination_error_2').style.display="none";
			document.getElementById("destination_error").style.display="none";
		}
		
		if(document.getElementById('distance').value==""){
			document.getElementById('distance_error_2').style.display="block";
			document.getElementById("destination_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("distance").value.match(numOnly)) {
			document.getElementById('distance_error').style.display="block";
			document.getElementById('distance_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('distance_error').style.display="none";
			document.getElementById("distance_error_2").style.display="none";
		}
		
	if(document.getElementById('cost').value==""){
			document.getElementById('cost_error_2').style.display="block";
			document.getElementById("cost_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("cost").value.match(numOnly)) {
			document.getElementById('cost_error').style.display="block";
			document.getElementById('cost_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('cost_error').style.display="none";
			document.getElementById("cost_error_2").style.display="none";
		}
	}
</script>
</body>  
</html>
						