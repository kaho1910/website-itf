<html>
<head>
  <title>ITF-lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .button {
      border: none;
      color: white;
      padding: 10px 18px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    .button1 {background-color: #4CAF50;} /* Green */
  </style>
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
        <th><div>Name</div></th>
        <th><div>Comment </div></th>
        <th><div>Link </div></th>
      </tr>
    </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tbody>
      <tr class="table-primary">
        <td><?php echo $Result['Name'];?></div></td>
        <td><?php echo $Result['Comment'];?></td>
        <td><?php echo $Result['Link'];?></td>
      </tr>
    </tbody>
    <?php
    }
    ?>
  </table>
  <?php
  mysqli_close($conn);
  ?>
  <a href="/form.html" class="btn btn-primary">href Add</a>
  <button href="/form.html" class="button button1">Add</button>
  </body>
</html>
