<?php 
require_once "../model/usermodel.php";
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $ProductName = $_REQUEST['ProductName']; 
        $BuyingPrice = $_REQUEST['BuyingPrice']; 
        $SellingPrice = $_REQUEST['SellingPrice'];
        $Profit= $SellingPrice-$BuyingPrice;
        // $gender = $_REQUEST['gender']; 
        // $dob = $_REQUEST['dob'];
        // $name = $_REQUEST['name'];
       
        // $confirmpassword= $_REQUEST['confirmpassword'];
       

        if($ProductName == "" || $BuyingPrice == "" || $SellingPrice=="") {
            echo "Null value ..";
            
        }
       else{
            $user = ['Name'=> $ProductName, 'BuyingPrice'=> $BuyingPrice, 'SellingPrice'=> $SellingPrice,'Profit'=>$Profit];
            $status = addUser($user);
            if($status){
                header('location: ../view/DisplayProducts.php');
            }else{
                echo "DB error, try again";
            }    
        }
    }else{
        echo "invalid request...";
    }
?>