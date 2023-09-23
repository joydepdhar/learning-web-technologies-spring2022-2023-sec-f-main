<?php
require_once "../../../models/bookManagementmodel.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Catalog Book
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
                                    <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                    <a href="">BookManagement</a>
                                    <a href="">ViewProfile</a>
                                    <a href="">Trending</a> -->
                                    <a href="..\BookManagement.php?userName=<?php echo $username ?>">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Library Book Catalog</h3></legend>
                    <?php
                        $state = viewBook();
                        
                        echo "<table border='1' cellspacing='0' width='1000'>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Genre</th>
                                    <th>Actions</th>
                                </tr>";
                                
                        while($row = mysqli_fetch_assoc($state)){
                            echo "<tr>
                                    <td>{$row['BookName']}</td>
                                    <td>{$row['AuthorName']}</td>
                                    <td>{$row['Genra']}</td>
                                    <td><a href='../../../controls/deleteBook.php?id=".$row['ID']."'>Delete</a> </td>
                                </tr>";
                        }
                        
                        echo "</table>";
            ?>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>