<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	fieldRequired('Imię', $_POST['name']);
	fieldRequired('Nazwisko', $_POST['surname']);
	fieldRequired('E-mail', $_POST['email']);
	fieldRequired('Hasło', $_POST['password']);
	if(!$isError)
	{
		isEmail('E-mail', $_POST['email']);
	}

	if (!$isError)
	{	
		/* status Bool(true|false), msg String) */
		$dbStatus = [];
		$password = md5(PASS_SALT . $_POST['password']);
		$query = "INSERT INTO users SET user_name = '{$_POST['name']}', user_surname = '{$_POST['surname']}', user_email = '{$_POST['email']}', user_password = '$password'";
        if ($db->query($query))
        {
            $_SESSION['message']['success'] = 'Data has been saved successfully';
        }
        else
        {
            $_SESSION['message']['warning'] = 'Data has not been saved!';
        }
	}
	else
	{
		$form = $_POST;
	}
}