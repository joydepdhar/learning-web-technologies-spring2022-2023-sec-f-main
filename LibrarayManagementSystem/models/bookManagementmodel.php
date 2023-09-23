<?php
    require_once "db.php";
    function addBook($bookInfo){
        $con = getConnection();
        $sql = "insert into Bookinformation values('','{$bookInfo['BookName']}','{$bookInfo['AuthorName']}', '{$bookInfo['Genra']}','{$bookInfo['PublishedDate']}','{$bookInfo['ISBN']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
   function viewBook (){
        $con = getConnection();
        
        $sql = "select * from Bookinformation";

        $result = mysqli_query($con, $sql);
        
       
        return $result;
    }
    function deleteuser ($id){
            $con = getConnection();
            $sql = "DELETE FROM Bookinformation WHERE id='$id';";
            $status = mysqli_query($con, $sql);
            return $status;
        }
    function searchbook($query){
    $conn = getConnection();
    $sql = "SELECT * FROM Bookinformation WHERE BookName LIKE '%$query%' OR AuthorName LIKE '%$query%' OR Genra LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);
    return $result;
    }

 ?>
