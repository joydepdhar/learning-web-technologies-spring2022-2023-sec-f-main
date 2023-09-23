<?php 

    session_start();
    session_destroy();
    setcookie('flag', 'asif', time()-10, '/');
    header('location: ../views/login.php');
?>