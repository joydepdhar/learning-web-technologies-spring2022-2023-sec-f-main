<?php
session_start();
?>
<html>
<head>
    <title>edit</title>
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
    <legend>EDIT PRODUCT</legend>
    <table>
    
       <form action="../controllers/editproducthandler.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value="<?php echo $_SESSION['name']?>"></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="buyingprice" value="<?php echo $_SESSION['buyingprice']?>"></td>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="sellingprice" value="<?php echo $_SESSION['sellingprice']?>"></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="SAVE">
            </td>
        </tr>
        </form>
    </table>
    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>