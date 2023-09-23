<!-- JounralInformation -->
<?php
    require_once "db.php";
    function addJournal($bookInfo){
        $con = getConnection();
        $sql = "insert into JounralInformation values('','{$bookInfo['JournalName']}','{$bookInfo['AuthorName']}', '{$bookInfo['Genra']}','{$bookInfo['PublishedDate']}','{$bookInfo['DIO']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
   function viewjournal(){
        $con = getConnection();
        
        $sql = "select * from jounralinformation";

        $result = mysqli_query($con, $sql);
        
        return $result;
    }
    function deleteuser ($id){
            $con = getConnection();
            
            $sql = "DELETE FROM jounralinformation WHERE id='$id';";

            $status = mysqli_query($con, $sql);
        
            return $status;
        }
    
    function searchJournal($query){
    $conn = getConnection();
    $sql = "SELECT * FROM jounralinformation WHERE JournalName LIKE '%$query%' OR AuthorName LIKE '%$query%' OR Genra LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);
    return $result;
    }
     ?>