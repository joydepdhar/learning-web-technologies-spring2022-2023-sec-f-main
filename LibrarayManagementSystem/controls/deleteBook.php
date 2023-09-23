<?php 
require_once '../models/bookManagementmodel.php';
    session_start();
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        $status = deleteuser($id);
        if($status){
            header('location: ../views/BookManagement/Cataloging/CatalogBook.php'); 
        }else{
            echo "DB error, try again";
        }
}
    else{
        echo "invalid request...";
    }
?>
