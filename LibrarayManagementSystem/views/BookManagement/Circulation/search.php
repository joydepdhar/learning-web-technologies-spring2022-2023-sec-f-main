<?php

require_once "../../../models/bookManagementmodel.php";

// Get the search query from the AJAX request

$query = $_POST['query'];
$state = searchBook($query);

$html = "<table border='1' cellspacing='0' width='1000'>

<tr>
<th>Title</th>
<th>Author</th>

<th>Genre</th>
<th>Actions</th>

</tr>";
while($row = mysqli_fetch_assoc($state)){
$html .= "<tr>

<td>{$row['BookName']}</td>

<td>{$row['AuthorName']}</td>

<td>{$row['Genra']}</td>

<td><a href='../../../controls/deleteBook.php?id=".$row['ID']."'>Delete</a> </td>

</tr>";
}
$html .= "</table>";
echo $html;

?>
