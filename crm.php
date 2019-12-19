<?php
	$created_date = '30/12/2019 09:10:12';
    $date1 = strtr($created_date, '/', '-');
	$created_date = date("d-m-Y H:i:s", strtotime($date1));
	$time = strtotime($created_date);

	$getDate = date('H:i:s', $time);
	$getHour = date('H', $time);
	$getMinute = date('i', $time);
	$getSeconds = date('s', $time);

	echo date("d-m-Y 09:00:00").'<br>';
	echo $getDate.'<br>';
	echo $getHour.'<br>';
	echo $getMinute.'<br>';
	echo $getSeconds.'<br>';

	date_default_timezone_set("Asia/Kolkata");
	$cur_time  = date("d-m-Y H:i:s");
	$now = strtotime($cur_time);
	$now = date('H:i:s', $now);
	echo $now.'<br>';
	echo '------------------------<br>';

	$date = '09:00:00';
	$time = strtotime('01:05:00');
	$getDate = date('H-i-s', $time);
	$getHour = date('H', $time);
	$getMinute = date('i', $time);
	$getSeconds = date('i', $time);

	$newDate =  date( "H:i:s", strtotime( $date." +".$getHour." hours ".$getMinute." minutes ".$getSeconds."seconds")); 
	date_default_timezone_set("Asia/Kolkata");
	$cur_time  = date("Y-m-d H:i:s");

	echo $date.'<br>';
	echo $getDate.'<br>';
	echo $getDate.'<br>';
	echo $getHour.'<br>';
	echo $getMinute.'<br>';
	echo $getSeconds.'<br>';
	echo $newDate.'<br>';

?>
