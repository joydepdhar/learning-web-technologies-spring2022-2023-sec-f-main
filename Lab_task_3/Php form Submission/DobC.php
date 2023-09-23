<html>
<head>
   <title></title>
   
   </head>
   <body>
    <fieldset>
<form method='POST'>
 Dob :<input type="text" name="Dob" value="<?php echo $Dob;?>">
 <hr>
 <input type="submit" value="Submit">
 </form>
 </fieldset>
<?php

$Dob = $_POST['Dob'];
echo "<h3>  $name </h3>";
?>
</body>
</html>