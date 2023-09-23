<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Remove Book
        </title>
    </head>
    <body>
    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                <a href="">BookManagement</a>
                                <a href="">ViewProfile</a>
                                <a href="">Trending</a> -->
                                <a href="../controls/logout.php">Log Out</a>
                            </td>   
                        </tr>    
    </table>   
	<fieldset>
        <legend><h3>Remove Books</h3></legend>
    <form>
		<label for="book_id">Book ID:</label>
		<input type="text" id="book_id" name="book_id">
		<br>
		<label for="book_title">Book Title:</label>
		<input type="submit" value="Delete">
	</form>
    </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>