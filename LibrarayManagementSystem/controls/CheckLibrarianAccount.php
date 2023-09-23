<?php
    require_once "../models/usermodels.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        $lname = $_REQUEST['name']; 
        $lusername=$_REQUEST['username'];
        $lpassword = $_REQUEST['password'];
        $lconfirmPassword=$_REQUEST['confirmpassword']; 
        $lemail = $_REQUEST['email']; 
        $lgender= $_REQUEST['gender'];
        $lDOB=$_REQUEST['dob']; 
        $lrole="Librarian";
        // $file= fopen("userPasswordRole.txt", 'r');
        // $data = fgets($file);
        // $user = explode('|', $data);
        // $matchUserName= trim($user[0]); 
        if(empty($lname))
            {
            $err ="Where is your name?";
            header('location: UserManagement\CreateLibrarianAccount.php?err='.$err);
            }else if (empty($lusername))
        {
        $u_err ="Where is your User Name?";
        header('location: UserManagement\CreateLibrarianAccount.php?u_err='.$u_err);
        }else if (empty($lemail))
        {
        $e_err ="Where is your User Name?";
        header('location:UserManagement\CreateLibrarianAccount.php?e_err='.$e_err);
        }else if (empty($lpassword))
        {
        $p_err ="Please write password!!!?";
        header('location: UserManagement\CreateLibrarianAccount.php?p_err='.$p_err);
        }elseif ($lpassword!=$lconfirmPassword) {
            $Cp_err ="Password is not matched with confirm Password";
        header('location: UserManagement\CreateLibrarianAccount.php?p_err='.$Cp_err);
        }
        else{
            
                // $file = fopen('user.txt', 'a');
                // $user = $lname."|".$lusername."|".$lpassword."|".$lemail."|".$lgender."|".$lDOB."|".$lrole."\r\n";
                // fwrite($file, $user);
                // header('location:UserManagement\UserManagement.php');
                // $fileUser = fopen('userPasswordRole.txt', 'a');
                // $userLogin=$lusername."|".$lpassword."|".$lrole."\r\n";
                // fwrite($fileUser, $userLogin);
                $user = ['Name'=> $lname,'Email'=> $lemail ,'UserName'=> $lusername, 'Password'=> $lpassword,'Gender'=> $lgender , 'DOB'=> $lDOB,'Role'=>$lrole];
                $add = addUser($user);
            if($add){ 

                header('location: ../views/UserManagement/UserManagement.php');
            }else{
                echo "DB error, try again";
            }   


            }
    
            
        }
?>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>