<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from userInformation where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                print_r($row); echo "<br>";
                $_SESSION['Name']= $row['Name'];
                $_SESSION['Email']= $row['Email'];
                $_SESSION['UserName']= $row['UserName'];
                $_SESSION['Password']= $row['Password'];
                $_SESSION['Gender']= $row['Gender'];
                $_SESSION['DOB']= $row['DOB'];
                $_SESSION['Role']= $row['Role'];
            }
            return true;
        }else{
            return false;
        }
    }
    function addUser($user){
        $con = getConnection();
        $sql = "insert into UserInformation values('','{$user['Name']}','{$user['Email']}', '{$user['UserName']}','{$user['Password']}','{$user['Gender']}','{$user['DOB']}','{$user['Role']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
   
    function getUser($username){
        $con = getConnection();
        $sql = "select * from userInformation where username='{$username}'";
        $result = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($result);
        return $result;
    }
    // function editprofile ($userupdate){
    //     $con = getConnection();
        
    //       $sql = "UPDATE user
    //     SET Name '{$user['Name']}', Email = '{$user['Email']}', gender = '{$user['gender']}', DOB = '{$user['dob']}'
    //     WHERE UserName = '{$user['UserName']}';";
    //     $status = mysqli_query($con, $sql);
       
    //     return $status;
    // }
    function editprofile($userupdate) {
    $con = getConnection();
    
    $sql = "UPDATE userInformation
            SET Name = '{$userupdate['Name']}', 
                Email = '{$userupdate['Email']}', 
                gender = '{$userupdate['Gender']}', 
                DOB = '{$userupdate['DOB']}'
            WHERE UserName = '{$userupdate['UserName']}'";
            
    $status = mysqli_query($con, $sql);
    return $status;
}
    function Librarianlist (){
        $con = getConnection();
        $sql = "select * from userInformation where Role='Librarian'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function Memberlist (){
        $con = getConnection();
        $sql = "select * from userInformation where Role='student'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function deleteuser ($id){
            $con = getConnection();
            $sql = "DELETE FROM userInformation WHERE id='$id';";
            $status = mysqli_query($con, $sql);
            return $status;
        }

?>