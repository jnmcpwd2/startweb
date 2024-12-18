<?php

require ('app/config/session.php');
header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');

$userName = 'Jan';
$userSurname = 'Kowal';
$userEmail = 'jan@x.com';
$userPass = md5(PASS_SALT . 'haslo123');

$res = $db->query("INSERT INTO users SET user_name = '$userName', user_surname = '$userSurname', user_email = '$userEmail', user_password = '$userPass', active = 1");
if ($res) 
{
	echo 'New user was inserted';
}