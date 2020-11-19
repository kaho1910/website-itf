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
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="200"> <div align="center">Name</div></th>
        <th width="225"> <div>Comment</div></th>
        <th width="25"> <div>Link</div></th>
        <th width="150"> <div align="right">Action</div></th>
      </tr>
    </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tbody>
      <tr class="table-primary">
        <td width="200"><div align="center"><?php echo $Result['Name'];?></div></td>
        <td width="200"><?php echo $Result['Comment'];?></td>
        <td width="50"><?php echo $Result['Link'];?></td>
        <td width="75"><div style="text-align: center"><a href="test.php" class="btn btn-primary">Edit</a></div></td>
        <td width="75"><div style="text-align: center"><a href="test.php" class="btn btn-primary">Delete</a></div></td>
      </tr>
    </tbody>
    <?php
    }
    ?>
  </table>
  <?php
  mysqli_close($conn);
  ?>
  <div style="text-align: center"><a href="form.html" class="btn btn-primary">Add</a></div>
  </body>
</html>
