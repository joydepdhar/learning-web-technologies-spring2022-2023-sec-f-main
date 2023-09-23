<?php 
require_once '../models/productmodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
       $id = $_SESSION['id'];


  
  
  
            $status = deleteproducts($id);
                    if($status){

                        header('location: ../views/display.php');

                    }else{
                        echo "DB error, try again";
                    }
     


    
}
    else{
        echo "invalid request...";
    }
?>