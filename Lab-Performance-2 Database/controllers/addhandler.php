<?php 
require_once '../models/productmodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
       
        $name = $_REQUEST['name'];
        $buyingprice = $_REQUEST['buyingprice'];
        $sellingprice = $_REQUEST['sellingprice'];
        $profit = $sellingprice-$buyingprice;
       
       


        if(empty($name)||empty($buyingprice)||empty($sellingprice)) {
            echo "Null value ..";
            
        }
       
        else
        {
            $products = ['name'=> $name,'buyingprice'=> $buyingprice, 'sellingprice'=> $sellingprice, 'profit'=> $profit];
            $status = addproduct($products);
                    if($status){

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