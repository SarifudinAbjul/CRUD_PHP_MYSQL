<?php

$server='localhost';
$user='user';
$ps='password';
$db='database';

$conn = mysqli_connect($server,$user,$ps,$db);

if(!$conn){
	echo "Connect failed!!!";
}



?>
