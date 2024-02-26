<?php
function protection()
{
    session_start();

    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
        return 'logado';
        
    } else {
        header('location: php/logout.php');
    }
}
