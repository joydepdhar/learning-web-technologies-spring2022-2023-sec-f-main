<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "LibraryManagement";

function getConnection(){
    global $dbhost;
    global $dbuser;
    global $dbpass;
    global $dbname;

    return  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

?>