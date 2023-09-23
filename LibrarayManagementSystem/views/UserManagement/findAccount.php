<?php
    require_once "./models/usermodels.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        print_r($_post);
        $name = $_REQUEST['username']; 
        if(empty($username))
            {
            $err ="Where is your name?";
            header('location: findAccount.php?err='.$err);
            }}else{
            
                // $file = fopen('user.txt', 'a');
                // $user = $lname."|".$lusername."|".$lpassword."|".$lemail."|".$lgender."|".$lDOB."|".$lrole."\r\n";
                // fwrite($file, $user);
                // header('location:UserManagement\UserManagement.php');
                // $fileUser = fopen('userPasswordRole.txt', 'a');
                // $userLogin=$lusername."|".$lpassword."|".$lrole."\r\n";
                // fwrite($fileUser, $userLogin);
                // $user = ['UserName'=> $lusername, 'Password'=> $lpassword, 'Email'=> $lemail, 'Name'=> $lname, 'DOB'=> $lDOB, 'Gender'=> $lgender,'Role'=>$lrole];
                // $add = addLibrarian($user);
                echo"Done okey"; 
        }
?>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>