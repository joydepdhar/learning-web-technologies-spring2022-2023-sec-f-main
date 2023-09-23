<?php 
require_once '../models/productmodel.php';
session_start();

?>
<html>
<head>
    <title>search</title>
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
    <legend>search</legend>
    <form action="search.php" method="POST">
    <input type="text" name="searchproduct" value="">
    <input type="submit" name="submit" value="search by name">
    </form>
    <hr>
    <table border="1">
                                    <tr> 
                                       
                                        <th>Name</th>
                                        <th>Profit</th>
                                        <th>EDIT</th>

                                        <th>Delete</th>

                                    </tr>
<?php
if(isset($_REQUEST['submit'])){
$search=$_REQUEST['searchproduct'];
search($search);
}

?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>