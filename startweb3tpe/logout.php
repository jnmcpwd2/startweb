<?php

require ('app/config/session.php');
header('Content-Type: text/html; charset=UTF-8');

unset($_SESSION);
session_destroy();

header("Location: index.php");