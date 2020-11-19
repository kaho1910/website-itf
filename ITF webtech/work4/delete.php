<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfwebtechsql.mysql.database.azure.com', 'kaho1910@itfwebtechsql', 'Tawan1910', 'work', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_GET['id'];


$sql = "DELETE FROM guestbook WHERE id = $id";
$link_address = "show.php";

if (mysqli_query($conn, $sql)) {
    echo "<a href='$link_address'>Link</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
