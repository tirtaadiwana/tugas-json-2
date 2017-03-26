<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/b4e483b07e96ffd0/planner_07010731/q/CA/San_Francisco.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/b4e483b07e96ffd0/astronomy/q/Australia/Sydney.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/b4e483b07e96ffd0/conditions/q/CA/San_Francisco.json");
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	//proses json
	$location = $parsed_json->{'trip'}->{"period_of_record"}->{"date_start"}->{"date"}->{"tz_long"};
	$test = $parsed_json2->{"moon_phase"}->{"moonrise"}->{"hour"};
	$a = $parsed_json3->{"current_observation"}->{"image"}->{"title"};
	
	
	$ta =  $parsed_json->{'trip'}->{"period_of_record"}->{"date_start"}->{"date"}->{"pretty"};
	$ta2 = $parsed_json2->{"moon_phase"}->{"sunrise"}->{"hour"};
	$ta3 = $parsed_json3->{"current_observation"}->{"display_location"}->{"city"};
	
	$ss = $parsed_json->{'trip'}->{"airport_code"};
	$ss2 =  $parsed_json2->{"moon_phase"}->{"sunset"}->{"hour"};
	$ss3 = $parsed_json3->{"current_observation"}->{"display_location"}->{"latitude"};
	
	echo "Di lihat dari Amerika";
	echo "<br>";
	echo "Current temperature in : ${location}\n";
    echo "<br>";	
	echo "<br>";
	echo "bulan cantik untuk penerbangan : ${ta}\n";
	echo "<br>";	
	echo "Tujuan Penerbangan : ${location}\n";
	echo "<br>";
	echo "nama kode sebuah airport : ${ss}\n";
	echo "<br>";
	echo "<br>";
	echo "waktu untuk melihat sunrise jam : ${ta2}\n";
	echo "<br>";
	echo "waktu untuk melihat sunset jam : ${ss2}\n";
	echo "<br>";
	echo "waktu untuk melihat moonrise jam : ${test}\n";
	echo "<br>";
	echo "<br>";
	echo "situs untuk melihat kondisi/cuaca : ${a}\n";
	echo "<br>";
	echo "salah satu kota di negara amerika : ${ta3}\n";
	echo "<br>"; 
	echo "berapa garis lintang pada california : ${ss3}\n";
	echo "<br>";
?>