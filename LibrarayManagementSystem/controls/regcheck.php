<?php 
    require_once "../models/usermodels.php";
    session_start();
    if(isset($_REQUEST['Regsubmit'])){
        $name = $_REQUEST['name']; 
        $username=$_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmPassword=$_REQUEST['confirmpassword'];
        $email = $_REQUEST['email']; 
        $gender= $_REQUEST['gender'];
        $DOB=$_REQUEST['dob'];
        $role="student";
        // $file= fopen('UserPasswordRole.txt', 'r');
        // $data = fgets($file);
        // $user = explode('|', $data);
        // $matchUserName= trim($user[1]);
        if(empty($name))
            {
            $err ="Where is your name?";
            header('location:../views/reg.php?err='.$err);
            }else if (empty($username))
        {
        $u_err ="Where is your User Name?";
        header('location:../views/reg.php?err='.$u_err);
        }else if (empty($email))
        {
        $e_err ="Where is your User Name?";
        header('location:reg.php?e_err='.$e_err);
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
        $email_err ="Email formate is not okay.";
        header('location:../views/reg.php?err='.$email_err);
        }else if (empty($password))
        {
        $p_err ="Please write password!!!?";
        header('location:../views/reg.php?err='.$p_err);
        }else if ($password!=$confirmPassword) {
            $rp_err ="Password Not match!!!?";
        header('location:../views/reg.php?err='.$rp_err);
        }else{
            
                // $file = fopen('user.txt', 'a');
                // $user = $name."|".$username."|".$password."|".$email."|".$gender."|".$DOB."|".$role."\r\n";
                // fwrite($file, $user);
                // header('location:Login.php');
                // $fileUser = fopen('userPasswordRole.txt', 'a');
                // $userLogin=$username."|".$password."|".$role."\r\n";
                // fwrite($fileUser, $userLogin);
                $User = ['Name'=> $name,'Email'=> $email ,'UserName'=> $username, 'Password'=> $password,'Gender'=> $gender , 'DOB'=> $DOB,'Role'=>$role];
                $add = addUser($User);
            }
            if($add){ 

                header('location: ../views/login.php');
            }else{
                echo "DB error, try again";
            } 
        }
        else {
            echo"Invaid entry";
        }
?>