<?php
    session_start();
          require_once "../../models/usermodels.php";
    // session_start();
//    $username=$_REQUEST("username");
// $username = $_GET['username'];
    if(isset($_COOKIE['Adminflag'])){
        $username = $_REQUEST['username'];
?>
<html>
    <head>
        <title>
            Update Personal Information
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            table {
                border-collapse: collapse;
                margin: auto;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            a {
                text-decoration: none;
                color: #0066cc;
            }
            a:hover {
                text-decoration: underline;
                color: red;
            }
            fieldset {
                margin: 20px auto;
                padding: 20px;
                border: 2px solid #ddd;
                max-width: 1080px;
            }
            legend {
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <center>
            <table width=1080>
                <tr height=70>
                    <td >
                        <table width = "800">
                            <tr>
                                <td>
                                    <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                </td>
                                <td>
                                    <h3>AIUB Library</h3>
                                </td>
                                <td align="right">
                                    <a href="ViewProfile.php?userName=<?php echo $username;?>"><i class="fas fa-arrow-left"></i>back</a>
                                    <a href="/Joydep_Web_Technologies\logout.php"><i class="fas fa-sign-out-alt"></i>LogOut</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
            <fieldset>
               <?php
              
            // echo$username;
            // $status=getUser($username);

            //     // $state = viewBook();
                
            //     echo "<table border='1' cellspacing='0' width='1000'>
            //             <tr>
                            
            //             </tr>";
                        
            //     while($row = mysqli_fetch_assoc($status)){
            //         echo "<tr>
            //                 <td>{$row['Name']}</td>
            //                 <td>{$row['Email']}</td>
            //                 <td>{$row['UserName']}</td>
            //                 <td>{$row['Gender']}</td>
            //                 <td>{$row['DOB']}</td>

            //                 <td><a href='../../../controls/deleteBook.php?id=".$row['ID']."'>Delete</a> </td>
            //             </tr>";
            //     }
                
            //     echo "</table>";
            // echo $username;
$status = getUser($username);

echo "<table border='1' cellspacing='0' width='1000'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Edit Info</th>
        </tr>";
        
$count = 0; // initialize count variable

while($row = mysqli_fetch_assoc($status)){
    // check if count is even or odd to display in two columns
    if($count % 2 == 0){
        echo "<tr>";
    }
    echo "<td>{$row['Name']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['UserName']}</td>
            <td>{$row['Gender']}</td>
            <td>{$row['DOB']}</td>
            <td><a href='UpdateInfo.php?id=".$row['ID']."'>Edit</a></td>";
    if($count % 2 != 0){
        echo "</tr>";
    }
    $count++;
}
echo "</table>";

            ?>
            </fieldset>
            </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>
<!-- C:\xampp\htdocs\LibrarayManagementSystem\controls\EditProfileInformation.php
C:\xampp\htdocs\LibrarayManagementSystem\views\ViewProfile\UpdateInfo.php -->