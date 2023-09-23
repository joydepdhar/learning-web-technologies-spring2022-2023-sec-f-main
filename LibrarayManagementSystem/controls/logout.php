<?php 

    session_start();
    //session_destroy();
    unset($_SESSION['flag']);
    setcookie('Adminflag', 'ab', time()-10, '/');
    setcookie('Memberflag', 'bc', time()-10, '/');
    setcookie('Librarianflag', 'ac', time()-10, '/');

    header('location: ../views/login.php');
?>