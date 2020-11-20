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
      echo '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Del</button>
        <div class="modal fade" id="confirm" role="dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button align="right" type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
              <?php
              echo "<a href="delete.php?id='.$Result['ID'].'" class="btn btn-danger">Delete guest</a>"
              ?>
              <button type="button" class="btn btn-defult" data-dismiss="modal">close</button>
            </div>
          </div>
        </div>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  mysqli_close($conn);
  ?>
  </body>
</html>
