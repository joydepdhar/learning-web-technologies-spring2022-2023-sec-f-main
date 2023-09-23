<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>