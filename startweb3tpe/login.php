<?php

require ('app/config/session.php');
header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!empty($_POST['email']) && !empty($_POST['password']))
    {
        $password = md5(PASS_SALT . $_POST['password']);
        $sql = "SELECT id, user_name FROM users WHERE user_email = '{$_POST['email']}' AND user_password = '$password' AND active = 1";        
        $res = $db->query($sql);
        $user = $res->fetch_assoc();
        if (!empty($user))
        {
            $_SESSION['user']['id'] = $user['id'];
            $_SESSION['user']['name'] = $user['name'];
        }
        else
        {
            $_SESSION['message']['error'] = 'Wprowadze dane są niepoprawne';
        }
    }
    else
    {
        $_SESSION['message']['error'] = 'Musisz wprowadzić login i hasło';
    }
}

header("Location: index.php");