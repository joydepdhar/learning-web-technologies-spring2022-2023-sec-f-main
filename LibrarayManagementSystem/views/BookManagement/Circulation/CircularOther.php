<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Circular Other Item
        </title>
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
                                    <a href="..\BookManagement.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Circular Other Item </h3></legend>
                    <table border="1" cellspacing="0" width="1000">
                        <tr>
                            <td>The Great Gatsby</td>
                            <td>F. Scott Fitzgerald</td>
                            <td>Classic</td>
                            <td>April 10, 1925</td>
                            <td>9780521576542</td>
                        </tr>
                        <tr>
                            <td>To Kill a Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>Classic</td>
                            <td>July 11, 1960</td>
                            <td>9780061120084</td>
                        </tr>
                        <tr>
                            <td>1984</td>
                            <td>George Orwell</td>
                            <td>Dystopian</td>
                            <td>June 8, 1949</td>
                            <td>9780451524935</td>
                        </tr>
                    </table>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>