<html>
<head>
  <title>ITF-lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php

  $conn = mysqli_init();
  mysqli_real_connect($conn, 'itfwebtechsql.mysql.database.azure.com', 'kaho1910@itfwebtechsql', 'Tawan1910', 'work', 3306);
  if (mysqli_connect_errno($conn))
  {
      die('Failed to connect to MySQL: '.mysqli_connect_error());
  }


  $id = $_GET['id'];


  $sql = "DELETE FROM guestbook WHERE id = $id";


  if (mysqli_query($conn, $sql)) {
      echo "New record deleted successfully";
      echo "<a href='show.php' class='btn btn-primary'>back to Main</a>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  mysqli_close($conn);
  ?>
  </body>
</html>
