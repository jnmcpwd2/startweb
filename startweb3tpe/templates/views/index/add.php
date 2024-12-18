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
		$password = md5(PASS_SALT . $_POST['password']);
		$query = "INSERT INTO users SET user_name = '{$_POST['name']}', user_surname = '{$_POST['surname']}', user_email = '{$_POST['email']}', user_password = '$password'";
		if ($db->query($query))
    {			
        showMessage('status'=>'succes', 'msg'=>"Data was sent succesfully");
    }
    else
    {
        showMessage('status'=>'warning','msg'=>"Data has not been sent");
    }
	}
}
?>

<section class="content">
        <?php
            if (isset($dbStatus['status']))
            {
                showMessage($dbStatus['status'], $dbStatus['msg']);
            }
            include ('templates/form.html.php');
        ?>
</section>
