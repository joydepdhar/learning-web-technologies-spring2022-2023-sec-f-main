<?php 
require_once '../models/productmodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
       $id = $_SESSION['id'];
        $name = $_REQUEST['name'];
        $buyingprice = $_REQUEST['buyingprice'];
        $sellingprice = $_REQUEST['sellingprice'];
        $profit = $sellingprice-$buyingprice;
       
       


        if(empty($name)||empty($buyingprice)||empty($sellingprice)) {
            echo "Null value ..";
            
        }
       
        else
        {
            $products = ['id'=> $id,'name'=> $name,'buyingprice'=> $buyingprice, 'sellingprice'=> $sellingprice, 'profit'=> $profit];
            $status = editproduct($products);
                    if($status){

                        $_SESSION['id']= $id;
                        $_SESSION['name']= $name;
                        $_SESSION['buyingprice']= $buyingprice;
                        $_SESSION['sellingprice']= $sellingprice;
                        header('location: ../views/display.php');
                        
                        
                    }else{
                        echo "DB error, try again";
                    }
        }


    
}
    else{
        echo "invalid request...";
    }
?>