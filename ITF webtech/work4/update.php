<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfwebtechsql.mysql.database.azure.com', 'kaho1910@itfwebtechsql', 'Tawan1910', 'work', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];
$link = $_REQUEST['link'];

$sql = "UPDATE guestbook SET Name='$name', Comment='$comment', Link='$link' WHERE ID=$id";

if (mysqli_query($conn, $sql)) {
    echo "New record updated successfully <br><a href='show.php' class='btn btn-primary'>back to Main</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
