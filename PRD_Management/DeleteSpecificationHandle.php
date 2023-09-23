<?php
session_start();
if(isset($_REQUEST['SUBMIT'])){
    print_r($_GET);
    $name = $_REQUEST['SPName']; 
$file = fopen('CreateSpecification.txt', 'r');
            
while(!feof($file)){
    $data = fgets($file);
    $user = explode('|', $data);
    if($name == trim($user[0])){ 
    }
}
}else{
    echo'Invaild Request';
}
?>
