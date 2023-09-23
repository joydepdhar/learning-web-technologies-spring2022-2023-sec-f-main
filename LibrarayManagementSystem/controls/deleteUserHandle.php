<?php 
require_once '../models/usermodels.php';
    session_start();
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        $status = deleteuser($id);
        if($status){
            header('location: ../views/ViewProfile/librarianInformation.php'); 
        }else{
            echo "DB error, try again";
        }
}
    else{
        echo "invalid request...";
    }
?>