<?php 
require_once '../models/productmodel.php';
session_start();

?>
<html>
<head>
    <title>display</title>
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
    <legend>DISPLAY</legend>
    <table border="1">
                                    <tr> 
                                       
                                        <th>Name</th>
                                        <th>Profit</th>
                                        <th>EDIT</th>

                                        <th>Delete</th>

                                    </tr>
<?php

displayproduct();

?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>