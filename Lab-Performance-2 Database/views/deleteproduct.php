<?php
session_start();
?>
<html>
<head>
    <title>delete</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <table>
        <ul>
            <li><a href="addproduct.php">add</a></li>
            
            <li><a href="display.php">display</a></li>
            
        </ul>
    </table>
    </td>
    <td>
    <fieldset>
    <legend>DELETE PRODUCT</legend>
    <table>
    
       <form action="../controllers/deleteproducthandler.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
            <td><?php echo $_SESSION['name']?></td>
        </tr>
       
        <tr>
            <td>Buying Price:</td>
            <td><?php echo $_SESSION['buyingprice']?></td>
        </tr>
     
        <tr>
            <td>selling Price:</td>
            <td><?php echo $_SESSION['sellingprice']?></td>
        </tr>
        <tr>
            <td>Displayable:</td>
            <td>Yes</td>
        </tr>
        </table>
        <hr>
            
      
                <input type="submit" name="submit" value="Delete">
          
        
        </form>
    
    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>