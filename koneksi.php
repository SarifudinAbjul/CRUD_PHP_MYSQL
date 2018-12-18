<?php

$server='localhost';
$user='sains';
$ps='asdfh123';
$db='dinas';

$conn = mysqli_connect($server,$user,$ps,$db);

if(!$conn){
	echo "query gagal!!!";
}



?>