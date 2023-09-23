<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        ?>
<html>
    <head>
        <title>Create Specification</title>
    </head>
    <body>
        <form action="CreateSpecificationFile.php" method="POST">
        <fieldset>
            <legend>Create Specification</legend>
            SpecificationName: <input type="text"name="SPName" Value=""> <br><br>
            Specification's Screan Definatioin: <input type="text" name="SDName" Value=""><br><br>
            User Story: <input type="text" name="USname" Value=""><br><br>
            UI: <input type="text" name="UI" Value=""><br><br>
            Tag: <input type="text" name="tag" Value=""><br><br>
            <input type="submit" Name="SUBMIT"Value="SUBMIT">
        </fieldset>
        </form>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>