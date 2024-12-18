<?php

require ('app/config/session.php');
header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');
require('app/functions/validate.function.php');
require('app/functions/helper.function.php');

if (isset($_SESSION['user']))
{
    include ('templates/MasterPage.html.php');
}
else
{
    include ('templates/LoginPage.html.php');
    //include ('templates/MasterPage.html.php');
}

if (isset($_SESSION['message']))
{
    unset($_SESSION['message']);
}