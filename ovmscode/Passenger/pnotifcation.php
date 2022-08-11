<?php
session_start();
include("../Common/connection.php");
if(isset($_GET['notifcation_id'])) {
	mysql_query("delete from notifcation where ID=".$_GET['notifcation_id']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.notice {
			display: block;
			width: 95%;
			background: rgba(0, 255, 0, 0.3);
			padding: 10px 0px;
			text-align: center;
			font-size: 15px;
			font-style: italic;
			border: 1px solid black;
			border-radius: 10px;
			margin: 10px 20px;
		}
		.notice label {
			float: center;
		}
		.active {
			background: rgba(255, 0, 0, 0.3);
		}
		.attention {
			font-size: 16px;
			font-weight: bold
		}
		.normal_notice {
			background: white;
			font-size: 18px;
			font-weight: bold
		}
		.close {
			float: right;
			margin-right: 10px;
			color: red;
			font-size: 18px;
			cursor: pointer;
			font-style: normal;
			font-weight: bold;
			text-decoration: none;
		}
		.close:hover {
			color: black;
		}
	</style>
</head>
<body>
<br><br>
<?php
$result = mysql_query("select *from notifcation order by id DESC");

$NumOfNotifications = 0;

//fetching user id
$resul2=mysql_query("select user_id from account where username='".$_SESSION['username']."'");
$row2 = mysql_fetch_array($resul2, MYSQL_ASSOC);

$result6 = mysql_query("select *from user where user_id=".$row2['user_id']);
$row6 = mysql_fetch_array($result6, MYSQL_ASSOC);

//check notification
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$str1 = strtotime($row['date']);
	$str2 = strtotime($row6['last_seen']);
	if($str1 > $str2) {
		$NumOfNotifications ++;
	}
}

if($NumOfNotifications != 0)
    echo '<audio src="../Common/BBMVoiceNotification.mp3" hidden="" id="audio_player" controls preload="true" autoplay="true"></audio>';

$NumOfRow = 1;
$result = mysql_query("select *from notifcation order by id DESC");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {

	$result3=mysql_query("select *from reservation where RESERVATION_ID=".$row['reservation_id']." and RESERVE_BY=".$row2['user_id']);

	if(mysql_num_rows($result3) != 0) {
		$row3 = mysql_fetch_array($result3, MYSQL_ASSOC);

		$resul4=mysql_query("select *from journy where JOURNY_ID='".$row3['JOURNY_ID']."'");
		$row4=mysql_fetch_array($resul4, MYSQL_ASSOC);

		$resul5=mysql_query("select *from seat where SEAT_ID='".$row3['SEAT_NO']."'");
		$row5=mysql_fetch_array($resul5, MYSQL_ASSOC);



		if($row['notice_type'] == 'confirm') {
			echo '<div class="notice ';
			if($NumOfRow <= $NumOfNotifications)
				echo 'active';
			echo '"><label>Your Reservation &nbsp<span class="attention"> '.$row4['FROM'].' - '.$row4['TO'].' With Seat Number: '.$row5['SEAT_NO'].' </span>&nbsp Is Confirmed.</label><a onclick="delete_notice('.$row['ID'].')" class="close">X</a></div>';
		} else if($row['notice_type'] == 'postponed') {
			echo '<div class="notice ';
			if($NumOfRow <= $NumOfNotifications)
				echo 'active';
			echo '"><label>Your Reservation &nbsp<span class="attention"> '.$row4['FROM'].' - '.$row4['TO'].' With Seat Number: '.$row5['SEAT_NO'].' </span>&nbsp Is Postponed To '.$row3['RESERVATION_DATE'].'</label><a onclick="delete_notice('.$row['ID'].')" class="close">X</a></div>';
		}

		$NumOfRow++;
	}


	mysql_query("update user set last_seen='".date("Y-m-d H:i:sa")."' where user_id=".$row2['user_id']);
}

if($NumOfRow == 1) {
	echo '<label class="notice normal_notice">No Notifcation</label>';
}
?>

<br><br>
<script type="text/javascript">
	function delete_notice(id) {
		var r = confirm("Are You Sure Want To Delete The Notifcation ?");
		if(r == true)
			window.location.href = "notifcation.php?notifcation_id="+id;
	}
</script>
</body>
</html>
