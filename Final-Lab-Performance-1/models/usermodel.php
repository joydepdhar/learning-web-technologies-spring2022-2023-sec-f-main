<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
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
        $sql = "insert into user values('','{$user['username']}','{$user['password']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function addspecifications ($specs){
        $con = getConnection();
        $sql = "insert into specifications values('','{$specs['name']}','{$specs['role']}','{$specs['defination']}','{$specs['story']}','{$specs['criteria']}','{$specs['ui']}','{$specs['tags']}')";
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