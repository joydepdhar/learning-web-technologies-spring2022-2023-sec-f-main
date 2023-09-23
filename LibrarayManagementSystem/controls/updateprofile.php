<?php
    require_once "../models/usermodels.php";
    session_start();
    if(isset($_REQUEST['Regsubmit'])){
        $id=$_REQUEST['id'];
        $name = $_REQUEST['name']; 
        $username=$_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmPassword=$_REQUEST['confirmpassword'];
        $email = $_REQUEST['email']; 
        $gender= $_REQUEST['gender'];
        $DOB=$_REQUEST['dob'];
        // echo"$id";
        if(empty($username))
            {
            $err ="Where is your Username?";
            header('location:../views/ViewProfile/UpdateInfo.php?err='.$err);
            }else{
                $User = ['Name'=> $name,'Email'=> $email ,'UserName'=> $username, 'Password'=> $password,'Gender'=> $gender , 'DOB'=> $DOB];
                $add = editprofile ($User);
            }
            if($add){ 

                echo"Change complete";
            }else{
                echo "DB error, try again";
            } 
        }
        else {
            echo"Invaid entry";
        }
    ?>