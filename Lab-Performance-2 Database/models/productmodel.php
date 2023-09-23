<?php
    require_once "db.php";


    function addproduct ($products){
        $con = getConnection();
        $sql = "insert into products values('','{$products['name']}','{$products['buyingprice']}','{$products['sellingprice']}', '{$products['profit']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function editproduct ($products){
        $con = getConnection();
        
        $sql = "UPDATE products
        SET Name = '{$products['name']}', buyingprice = '{$products['buyingprice']}', sellingprice ='{$products['sellingprice']}', profit ='{$products['profit']}'
        WHERE id = '{$products['id']}';";

        $status = mysqli_query($con, $sql);
       
        return $status;
    }
    function editproducts ($id){
        $con = getConnection();

        $sql = "select * from products where id='$id';";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
               
    
                $_SESSION['id']= $row['id'];
                       $_SESSION['name']= $row['Name'];
                       $_SESSION['buyingprice']= $row['buyingprice'];
                       $_SESSION['sellingprice']= $row['sellingprice'];
                    
       
            }
            return $result;
        
        
    }
}
 


     function displayproduct (){
        $con = getConnection();
        
        $sql = "select * from products";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
           
           echo " <tr>
            <td>{$row['Name']}</td>
            <td>{$row['profit']}</td>
            <td><a href='../controllers/edithandler.php?id=".$row['id']."'>edit</a></td>
            <td><a href='../controllers/deletehandler.php?id=".$row['id']."'>Delete</a> </td>
        
        </tr>";
        }
       
        return $result;
    }

   
    function deleteproduct ($id){
        // $con = getConnection();
        
        // $sql = "DELETE FROM products WHERE id='$id';";

        // $status = mysqli_query($con, $sql);
       
        // return $status;
        $con = getConnection();

        $sql = "select * from products where id='$id';";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
               
    
                $_SESSION['id']= $row['id'];
                       $_SESSION['name']= $row['Name'];
                       $_SESSION['buyingprice']= $row['buyingprice'];
                       $_SESSION['sellingprice']= $row['sellingprice'];
                    
       
            }
            return $result;
        }
    }

    
    function deleteproducts ($id){
        $con = getConnection();
        
        $sql = "DELETE FROM products WHERE id='$id';";

        $status = mysqli_query($con, $sql);
       
        return $status;
        
        
    }
    function search ($search){
        $con = getConnection();
        
        $sql = "SELECT * FROM products 
        WHERE  name LIKE '%$search%' ;";

        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            //print_r($row); echo "<br>";
            echo " <tr>
            <td>{$row['Name']}</td>
            <td>{$row['profit']}</td>
            <td><a href='../controllers/edithandler.php?id=".$row['id']."'>edit</a></td>
            <td><a href='../controllers/deletehandler.php?id=".$row['id']."'>Delete</a> </td>
        
        </tr>";
        }
       
        return $result;
    }



?>