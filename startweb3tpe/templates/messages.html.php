<div class="container">
<?php

if (isset($_SESSION['message']['success']))
{
    echo '<div class="alert alert-success" role="alert">' . $_SESSION['message']['success'] . '</div>';
}

if (isset($_SESSION['message']['warning']))
{
    echo '<div class="alert alert-warning" role="alert">' . $_SESSION['message']['warning'] . '</div>';
}

if (isset($_SESSION['message']['info']))
{
    echo '<div class="alert alert-primary" role="alert">' . $_SESSION['message']['info'] . '</div>';
}

if (isset($_SESSION['message']['error']))
{
    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['message']['error'] . '</div>';
}

?>
</div>