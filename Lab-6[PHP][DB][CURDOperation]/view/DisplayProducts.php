<?php
require_once('../model/usermodel.php')
$result=DisplayProduct();
$count=mysq
?>
<html>
    <head>
        <title>
            Display Product
        </title>
    </head>
    <body>
        <Fieldset>
            <legend>Display</legend>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <!-- <th ></th> -->
                </tr>
                <?php while($data=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?=$data["Name"] ?></td>
                        <td><?$data["Profit"] ?></td>
                    </tr>
                    <td>
                        <a href="../controls/Edit.php?id=<?php echo $data['ID']; ?>">Edit</a>
                        <a href="../controls/DeleteProduct.php?id=<?php echo $data['ID']; ?>">Delete</a>
                    </td>
                    <?php } ?>
                    
            </table>
        </Fieldset>
    </body>
</html>