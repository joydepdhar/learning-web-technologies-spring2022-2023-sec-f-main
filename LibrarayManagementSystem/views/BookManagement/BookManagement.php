<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
        $username=$_REQUEST['userName'];
?>
<html>
    <head>
        <title>
            Book Management Studio
        </title>
        <style>
            /* CSS code here */
            body {
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
            }
            table {
                border-collapse: collapse;
                margin: 0 auto;
            }
            td {
                padding: 10px;
                vertical-align: top;
            }
            h1 {
                text-align: center;
                margin-top: 50px;
                margin-bottom: 30px;
            }
            h2 {
                margin-top: 20px;
                margin-bottom: 10px;
            }
            a {
                text-decoration: none;
                color: #4CAF50;
            }
            a:hover {
                text-decoration: underline;
                color: red;
            }
            fieldset {
                border: 1px solid #ddd;
                padding: 20px;
                margin-bottom: 30px;
            }
            legend {
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 20px;
            }
            img {
                display: inline;
                margin: 0 auto;
            }
            h4 {
                margin: 10px 0;
                color: #666;
            }
        </style>
    </head>
    <body>

        <div>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="CreateLibrarianAccount.php">Create Librarian Account</a>
                                <a href="">View Librarian Account</a>
                                <a href="">View Member Account</a>
                                <a href="">Assign Role</a>
                                <a href="">Permission</a> -->
                                <a href="..\Admin.php?userName=<?php echo $username ?>">Back</a>
                                <!-- <a href="logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>Book Management Studio</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Cataloging</h2></legend>
                        
                        <a href="Cataloging\CatalogBook.php?userName=<?php echo $username ?>">Catalog Book</a><br/>
                        <a href="Cataloging\CatalogingJournal.php?userName=<?php echo $username ?>">Catalog Journal</a> <br>
                        <a href="Cataloging\CatalogOther.php?userName=<?php echo $username ?>">Catalog Other Item</a>  
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Acquisition</h2></legend>
                        <a href="Acquisition\AddNewBook.php?userName=<?php echo $username ?>">Add New Book</a><br>
                        <a href="Acquisition\AddNewJournal.php?userName=<?php echo $username ?>">Add New Journal</a>                        
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Circulation</h2></legend>
                        <a href="Circulation\CircularBook.php?userName=<?php echo $username ?>">Circulation Book</a><br>
                        <a href="Circulation\CircularJournal.php?userName=<?php echo $username ?>">Circulation other Item</a>
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">
                <h4>Copyright ©JoyDep_Dhar_2023</h4>    
                </td>
            </tr>
        </table>
    </center>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>