<?php

function showStatusIcon($status)
{
    if ($status == 1)
    {
        return '<i class="fa fa-check text-success"></i>';
    }
    else
    {
        return '<i class="fa fa-minus text-danger"></i>';
    }
}

function showMessage($messageType, $messageText)
{
    $html = '<div class="container">';
    switch ($messageType)
    {
        case 'success':
            $html .= '<div class="alert alert-success" role="alert">';
            break;
        case 'warning':
            $html .= '<div class="alert alert-warning" role="alert">';
            break;
        case 'info':
            $html .= '<div class="alert alert-primary" role="alert">';
            break;            

    }
    $html .= $messageText;
    $html .= '</div></div>';
    if (!empty($messageText) && !empty($messageType))
    {
        echo $html;
    }
}

function redirect($url)
{
    header('Location: ' . $url, true, 307);
    exit;
}