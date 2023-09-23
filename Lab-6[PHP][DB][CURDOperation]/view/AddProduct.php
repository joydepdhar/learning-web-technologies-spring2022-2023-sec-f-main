<html>
    <head>
        <title>
            Add Product
        </title>
    </head>
    <body>
        <fieldset>
            <legend><h3>ADD PRODUCT</h3></legend>
            <form action="../controls/productaddcheck.php" method="post">
                Name <br>
                <input type="text" name="ProductName" value=""> <br>
                Buying Price <br>
                <input type="number" name="BuyingPrice" value=""><br>
                Selling Price <br>
                <input type="number" name="SellingPrice" value=""><br>
                <hr>
                <input type="checkbox" name="Display" id="Display" value="Yes">Display<br> <br>
                <input type="submit" name="submit" value="SAVE">
            </form>
        </fieldset>
    </body>
</html>