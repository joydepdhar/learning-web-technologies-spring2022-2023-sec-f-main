 <?php
    require_once "../../models/usermodels.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        $username= $_REQUEST['userName']
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
                                    <a href="UserManagement.php?userName=<?php echo $username ?>"><i class="fas fa-arrow-left"></i>back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
            <fieldset>

                <legend>View librarian Information</legend>
                <?php
                $state=Librarianlist ();
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
           echo " <tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['UserName']}</td>
            <td><a href='../../controls\deleteUserHandle.php?id=".$row['ID']."'>Remove</a> </td>
            
            
        
        </tr>";
    }
                
                echo "</table>";
                ?>
                
            </fieldset>
            <fieldset>
                <legend>View Member Information</legend>
                <?php
                $state=Memberlist ();
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Delete</th>
                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
           echo " <tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['UserName']}</td>
            <td><a href='../../controls\deleteUserHandle.php?id=".$row['ID']."'>Remove</a> </td>
        </tr>";
    }
                
                echo "</table>";
                ?> 
                
            </fieldset>
    </body>
</html>

         <?php
    }else{
        header('location: WelocmePage.php'); 
    }
?>