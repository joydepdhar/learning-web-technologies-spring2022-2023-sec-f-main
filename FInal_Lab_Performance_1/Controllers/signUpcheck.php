<?php 
    session_start();
    // C:\xampp\htdocs\PRD__Management__System\Models\UserModel.php
    require_once "../Models\UserModel.php";
    if(isset($_REQUEST['Regsubmit'])){
        $name = $_REQUEST['name']; 
        $username=$_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmPassword=$_REQUEST['confirmpassword'];
        $email = $_REQUEST['email']; 
        $gender= $_REQUEST['gender'];
        $DOB=$_REQUEST['dob'];
        $role="Admin";
        // $file= fopen('UserPasswordRole.txt', 'r');
        // $data = fgets($file);
        // $user = explode('|', $data);
        // $matchUserName= trim($user[1]);
        if(empty($name))
            {
            $err ="Where is your name?";
            header('location:../Views/signup.php?err='.$err);
            }else if (empty($username))
        {
        $u_err ="Where is your User Name?";
        header('location:../Views/signup.php?u_err='.$u_err);
        }else if (empty($email))
        {
        $e_err ="Where is your User Name?";
        header('location:../Views/signup.php?e_err='.$e_err);
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
        $email_err ="Email formate is not okay.";
        header('location: ../Views/signup.php?email_err='.$email_err);
        }else if (empty($password))
        {
        $p_err ="Please write password!!!?";
        header('location:../Views/signup.php?p_err='.$p_err);
        }else if (strlen($_POST["password"]) <= '8')
        {
        $rp_err ="Your password should be 8 cherector!!!?";
        header('location:../Views/signup.php?rp_err='.$rp_err);
        }else if ($password!=$confirmPassword) {
            $rp_err ="Password Not match!!!?";
        header('location:../Views/signup.php.php?rp_err='.$rp_err);
        }else if($username ==$matchUserName) {
            $u_errr="UserName Matched";
            header('location:../Views/signup.php?u_err='.$u_errr);
        }elseif (strlen($_POST["password"]) >='12') {
            $rp_eerr ="Your password should be max 12 !!!?";
        header('location:../Views/signup.php?rp_err='.$rp_eerr);
        }
        else{
            
                // $file = fopen('user.txt', 'a');
                // $user = $name."|".$username."|".$password."|".$email."|".$gender."|".$DOB."|".$role."\r\n";
                // fwrite($file, $user);
                // header('location:Login.php');
                // $fileUser = fopen('userPasswordRole.txt', 'a');
                // $userLogin=$username."|".$password."|".$role."\r\n";
                // fwrite($fileUser, $userLogin);
                $user = ['Name'=> $name ,'Email'=>$email,'username'=>$username,'password'=> $password, 'Gender'=> $gender,'DOB'=>$DOB,'role'=>$role];
                $status = addUser($user);
                if($status){
                    header('location: ../Views/signIn.php');
                }else{
                    echo "DB error, try again";
                }
            }
        }
        else {
            echo"Invaid entry";
        }
?>