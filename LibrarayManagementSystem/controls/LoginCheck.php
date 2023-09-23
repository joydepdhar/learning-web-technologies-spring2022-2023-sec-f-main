<?php 
require_once'../models/usermodels.php';
    session_start();
    if(isset($_REQUEST['submit'])){
        // print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password'];
        $rememberme=isset($_REQUEST['rememberme']);
        $Role1="Admin";
        $Role2="Librarian";
        $Role3="student";
        $Adminflag = false;
        $Librarianflag= false;
        $Memberflag=false;
        if($username == "" && $password == "") {
            // echo "Null value ..";
            header('location:  login.php');
        }else{
            $status=auth($username, $password);
            if($status){
                if(trim($_SESSION['Role']==$Role1)){
                    $Adminflag = true; 
                }else if(trim($_SESSION['Role']==$Role2)){
                    $Librarianflag=true;
                }else if(trim($_SESSION['Role']==$Role3)){
                    $Memberflag=true; 
                }
            }

            }
            if($Adminflag==true){
                setcookie('Adminflag', 'ab', time()+3600, '/');
                // $_SESSION['username'] = $username;
                // header('location: ../views/Admin.php?userName=$username;');
                header("location: ../views/Admin.php?userName={$username}");
                $Adminflag = false; 
            }else if ($Librarianflag== true) {
                setcookie('Librarianflag', 'bc', time()+3600, '/');
                // $_SESSION['username'] = $username;
                // header('location: ../views/Librarian.php?userName={$username}');
                // header("location: ../views/Admin.php?userName={$username}");
                header("location: ../views/Librarian.php?userName={$username}");
                $Librarianflag = false;
            }else if ($Memberflag==true) {
                setcookie('Memberflag', 'ac', time()+3600, '/');
                // $_SESSION['username'] = $username;
                // header('location: ../views/Member.php?userName=$username');
                header("location: ../views/Member.php?userName={$username}");
                $Memberflag = false;
            }else{
                header('location: login.php?msg=error');
            }
        }
    else{
        echo "invalid request...";
    }
?>