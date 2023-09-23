<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password'];
        $Role1="Admin";
        $Role2="Librarian";
        $Role3="student";
        $Adminflag = false;
        $Librarianflag= false;
        $Memberflag=false;
        if($username == "" && $password == "") {
            // echo "Null value ..";
            header('location: ../index.php');
        }else{
            $file = fopen('UserPasswordRole.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                //print_r($user);
                if($username == trim($user[0]) && $password == trim($user[1])&& $Role1==trim($user[2])){
                    $Adminflag = true; 
                }
                elseif($username == trim($user[0]) && $password == trim($user[1])&& $Role2==trim($user[2])){
                    $Librarianflag=true;
                }
                elseif($username == trim($user[0]) && $password == trim($user[1])&& $Role3==trim($user[2])){
                    $Memberflag=true;
                }
            }
            if($Adminflag){
                setcookie('Adminflag', 'ab', time()+3600, '/');
                $_SESSION['username'] = $username;
                header('location: Admin.php');
                $Adminflag = false; 
            }
            elseif ($Librarianflag) {
                setcookie('Librarianflag', 'bc', time()+3600, '/');
                $_SESSION['username'] = $username;
                header('location: Librarian.php');
                $Librarianflag = false;
            }
            elseif ($Memberflag) {
                setcookie('Memberflag', 'ac', time()+3600, '/');
                $_SESSION['username'] = $username;
                header('location: Member.php');
                $Memberflag = false;
            }
            else{
                header('location: ../index.php?msg=error');
            }

            //echo  "invalid user!";
        }
    }else{
        echo "invalid request...";
    }
?>