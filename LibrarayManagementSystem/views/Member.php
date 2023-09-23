<?php
    session_start();
    if(isset($_COOKIE['Memberflag'])){
?>
<html>
    <head>
        <title>
            Member DashBoard
        </title>
    </head>
    <body>
        <h1>Welcome Back Member</h1>
        <fieldset>
            <legend>View Profile</legend>
            <a href="../views\ViewProfile\MemberInformationView.php">View Information</a>

        </fieldset>
        <fieldset>
            <legend>Trending</legend>
            <a href="Trending\mostPolularBook\mostpopularbook.php">Most Popular Book</a>
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