<?php

$username = 'arkAdem11';
$username2 = '11arkadeM';
$password = 'pssW0rdss1';
$password2 = 'passW0rds#';

if(preg_match('/^[a-zA-Z]{1}[\w]{2,8}$/', $username)) {
	echo 'username valid';
} else {
	echo 'username tidak valid';
}
	echo "<br>";
if(preg_match('/^[a-zA-Z]{1}[\w]{2,8}$/', $username2)) {
	echo 'username2 valid';
} else {
	echo 'username2 tidak valid';
}
	echo "<br>";
if(preg_match('/^([\w+\@+]){8,}$/', $password)) {
	echo 'password valid';
} else {
	echo 'password tidak valid';
}
	echo "<br>";
	
if(preg_match('/^([\w+\@+]){8,}$/', $password2)) {
	echo 'password2 valid';
} else {
	echo 'password2 tidak valid';
}
	echo "<br>";

?>