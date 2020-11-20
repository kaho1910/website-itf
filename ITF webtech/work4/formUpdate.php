<html>
<head>
  <title>Edit Comment Form</title>
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
    $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID=$id");
  ?>
  <?php
    while($Result = mysqli_fetch_array($res))
  {
  ?>
  <form action="update.php" method="post" id="CommentForm">
    <input hidden type="text" name ="id" id="id" value=<?php echo $Result['ID'];?>>
    <div class="form-group">
      <label for="idName">Name</label><br>
      <input type="text" class="form-control" name="name" id="idName" placeholder="Enter Name" value=<?php echo $Result['Name'];?>>
    </div>
    <div class="form-group">
      <label for="idComment">Comment</label><br>
      <input type="text" class="form-control" name="comment" id="idComment" placeholder="Enter Comment" value=<?php echo $Result['Comment'];?>>
    </div>
    <div class="form-group">
      <label for="idLink">Link</label><br>
      <input type="text" class="form-control" name="link" id="idLink" placeholder="Enter Link" value=<?php echo $Result['Link'];?>>
    </div>
    <button type="submit" class="button btn-success btn-block">Submit</button>
    <div style="text-align: center" align="center"><a href="show.php" class="btn btn-danger">cancle</a></div>
  </form>
  <?php
  }
  ?>
  <?php
  mysqli_close($conn);
  ?>
</body>
</html>
