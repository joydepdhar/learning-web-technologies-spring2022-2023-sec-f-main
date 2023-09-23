<?php
    session_start();
    if(isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Librarian DashBoard
        </title>
    </head>
    <body>
        Welcome TO Librarian
        <fieldset>
            <legend>Content</legend>
            <a href="Content\RemoveUser.php">Remove User</a><br>
            <a href="Content\RemoveBook.php">Remove Book</a>
            

        </fieldset>
        <fieldset>
            <legend>Book Management</legend>
            <a href="BookManagement\Acquisition\AddNewBook.php">AddNewBook</a><br>
            <a href="BookManagement\Acquisition\AddNewJournal.php">AddNew Journal</a><br>
            <a href="BookManagement\Circulation\CircularBook.php">CircularBook</a><br>
            <a href="BookManagement\Circulation\CircularOther.php">CircularOther</a>
        </fieldset>
        <fieldset>
            <legend>View Profile</legend>
            <a href="ViewProfile\MemberInformationView.php">ViewProfile</a>
        </fieldset>
        <fieldset>
            <legend>Trending</legend>
            <a href="Trending\mostPolularBook\mostpopularbook.php">Most Popular Item</a>
        </fieldset>
        <fieldset>
            <legend>Logout</legend>
            <a href="../controls/logout.php">LogOut</a>
        </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>