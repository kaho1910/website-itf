<html>
<head>
  <title>ITF-lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
        $("#back").modal('show');
    });
</script>
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
    echo "<div class='modal fade' id='back' role='dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <a href='show.php' type='button' class='close'>&times;</a>
        </div>
        <div class='modal-body' align='center'>
          <p>Record deleted successfully</p>
        </div>
        <div class='modal-footer'>
          <a href='show.php' class='btn btn-primary'>Main</a>
        </div>
      </div>
    </div>
    <div align='center'><a href='show.php' class='btn btn-primary'>back to Main</a></div>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  mysqli_close($conn);
  ?>
  </body>
</html>
