<!-- <?php
// JournalManagement.php
require_once "../models/JournalManagement.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<?php 
    
    if(isset($_REQUEST['AddJournal'])){
        $Jname = $_REQUEST['JName']; 
        $JAuthor=$_REQUEST['JAuthorName'];
        $JGenra = $_REQUEST['JGenra'];
        $JPublication=$_REQUEST['JPublicationName'];
        $DIO = $_REQUEST['DIO']; 
        if($Jname==""&&$JAuthor==""&&$JGenra==""&&$JPublication==""&&$DIO==""){
            header('location:AddNewJournal.php');
            echo"Fill all box";

        }else{
                $JournalInfo = ['JournalName'=>$Jname,'AuthorName'=>$JAuthor ,'Genra'=>$JGenra, 'PublishedDate'=>$JPublication,'DIO'=>$DIO];
                $add=addJournal($JournalInfo);
                if($add){ 
                    echo"Journal ADD successfully";
                header('location: ../views/BookManagement/Acquisition/AddNewJournal.php');
            }else{
                echo "DB error, try again";
            } 
            }
        }
        else {
            echo"Invaid entry";
        }
?>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?> -->