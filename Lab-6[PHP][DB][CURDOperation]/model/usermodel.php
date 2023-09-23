<?php
    require_once "db.php";
    function addUser ($user){
        $con = getConnection();
        // $sql = "insert into user values('','{$user['Name']}','{$user['BuyingPrice'] , })";
        $sql = "insert into products values('','{$user['Name']}','{$user['BuyingPrice']}', '{$user['SellingPrice']}','{$user['Profit']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function DisplayProduct()
    {
        $con = getConnection();
        $sql = "select * from products";
        $result= mysqli_query($con, $sql);
        $data =mysqli_fetch_assoc($result);
        return $data;
    }
// <td><a href="../controls/edit.php"{$row('ID')}> Edit</a></td>
//             <td><a href="../controls/delete.php"$row('ID')></a>Delete</td>
// <tr>
//             <td>{$row("Name")}</td>
//             <td>{$row("Profit")}</td>
            
//             </tr>

?>