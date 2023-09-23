<?php 
require_once '../models/productmodel.php';
    session_start();
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        editproducts($id);
        header('location: ../views/editproduct.php'); 

  
    
}
    else{
        echo "invalid request...";
    }
?>