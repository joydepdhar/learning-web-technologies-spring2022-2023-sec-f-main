<?php 
    session_start();
    if(isset($_REQUEST['SUBMIT'])){
        print_r($_GET);
        $name = $_REQUEST['SPName']; 
        $SDName = $_REQUEST['SDName'];
        $USname = $_REQUEST['USname'];
        $UI = $_REQUEST['UI'];
        $Tag = $_REQUEST['tag'];
        if($name == "" && $SDName == ""&& $USname==""&&$UI==""&&$Tag ==""){
            // echo "Null value ..";
            header('location:CreateSpecification.php');
        }else{
            $file = fopen('CreateSpecification.txt', 'a');
                $user = $name."|".$SDName."|".$USname."|".$UI."|".$Tag."|"."\r\n";
                fwrite($file, $user);
                header('location:CreateSpecification.php');
        }
    }
    else{
        echo "invalid request...";
     }
    
?>