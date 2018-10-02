
<?php 
session_start();
if (!isset($_SESSION['login'])) 
{
    $_SESSION['RedirectKe'] = $_SERVER['REQUEST_URI'];
    header('location: pweb4_main.php');

}

    $jam = time();
    $date = getdate();
    $pagi = date_sunrise(time());
    $sore= date_sunset(time());
    $siang = mktime(12,0,0,0,0,0);
    $malam = mktime(19,0,0,0,0,0);
    $welcome="";

    if($jam >= $pagi && $jam < $siang){
    	$welcome="Good Morning!";
    }elseif ($jam >= $siang && $jam < $sore) {
    	$welcome =="Good Afternoon!";
    }elseif ($jam  >= $sore && $jam < $malam) {
    	$welcome="Good Evening!";
    }else{
    	$welcome="It's Night!";}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta name="view" content="" scale="">
	<title>Schriben | Welcome</title>
	<head>
	<style>
		body {	background-image: url(http://webneel.com/wallpaper/sites/default/files/images/04-2013/8-beach-sea-photography.1024.jpg);
				font-family: fantasy;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				text-align: center;}
		img {width: 400px;
				height: 400px;}
		.time{	width: 400px;
				height: 500px;
            	margin: 2px auto;
            	text-align: center;
            	font-style: Garamond;
            	font-size: 20px;
            	background: rgba(242, 230, 255, 0.6);}
        .time .wlcm{
        	font-size: 50px;
        	font-family: fantasy;
        }
	</style>

	</head>
	<div class="time">
		<br><br>
	<div class="wlcm">
	<body>
		<?php

		echo $welcome;	


		?>
		</div>
		Welcome to Schreiben!<br><br>
		<img src="http://bestanimations.com/Animals/Mammals/Dolphins/animated-orcs-whales-gif-7.gif" alt="orca">
	</div>
	</body>



	</html>