<?php
    require_once 'dp.php';

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into users values('','{$user['Name']}','{$user['Email']}', '{$user['username']}', '{$user['password']}', '{$user['Gender']}', '{$user['DOB']}', '{$user['role']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function getUserbyID($id){

    }

    function deleteUser($id){

    }

    function updateUser($user){
        
    }


?>