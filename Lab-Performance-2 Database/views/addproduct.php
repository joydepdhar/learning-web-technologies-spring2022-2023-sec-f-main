<html>
<head>
    <title>add</title>
</head> 
<body>
    <table>
<tr>
    <td>
    <table>
        <ul>
            <li><a href="addproduct.php">add</a></li>
           
            <li><a href="display.php">display</a></li>
            
            <li><a href="search.php">search</a></li>
        </ul>
    </table>
    </td>
    <td>
    <fieldset>
    <legend>ADD PRODUCT</legend>
    <table>
    
       <form action="../controllers/addhandler.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="buyingprice" value=""></td>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="sellingprice" value=""></td>
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