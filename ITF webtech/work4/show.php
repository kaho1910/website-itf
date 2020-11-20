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
  $res = mysqli_query($conn, "SELECT * FROM guestbook");
  ?>
  <table width="600" class="table table-striped">
    <thead>
      <tr>
        <th width="150"> <div align="center">Name</div></th>
        <th width="250"> <div>Comment</div></th>
        <th width="100"> <div>Link</div></th>
        <th width="100"> <div align="center">Action</div></th>
      </tr>
    </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tbody width="600">
      <tr class="table-primary">
        <td width="150"><div align="center"><?php echo $Result['Name'];?></div></td>
        <td width="250"><?php echo $Result['Comment'];?></td>
        <td width="100"><?php echo $Result['Link'];?></td>
        <td width="100"><?php
        echo '<div align="center" class"btn-group btn-group-lg">
        <a href="formUpdate.php?id='.$Result['ID'].'" class="btn btn-info">Edit</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Delete</button>
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
        </div>
        </div>'
        ;?>
        </td>
      </tr>
    </tbody>
    <?php
    }
    ?>
    <div style="text-align: center"><a href="formAdd.php" class="btn btn-warning btn-block">Add New Guest to guestbook</a></div>
  </table>
  <?php
  mysqli_close($conn);
  ?>
</body>
</html>
