<html>
<head>
   <title></title>
   
   </head>
   <body>
    <fieldset>
<form method='POST'>
 Name :<input type="text" name="name" value="<?php echo $name;?>">
 <hr>
 <input type="submit" value="Submit">
 </form>
 </fieldset>
<?php

$name = $_POST['name'];
echo "<h3>  $name </h3>";
?>
</body>
</html>