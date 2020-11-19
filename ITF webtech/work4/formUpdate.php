<!DOCTYPE html>
<html>
<head>
  <title>Update Form</title>
  </style>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    .button1 {background-color:green;}
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
    $id = $_GET['ID'];
    echo $id;
    $name = $_GET['name'];
    $comment = $_GET['comment'];
    $link = $_GET['link'];
  ?>
  <form action="update.php" method="post" id="CommentForm">
    <div class="form-group">
      <label for="idName">Name</label><br>
      <input type="text" class="form-control" name="name" value="<?php echo $name;?>" id="idName">
    </div>
    <div class="form-group">
      <label for="idComment">Comment</label><br>
      <input type="text" class="form-control" name="comment" value="<?php echo $comment;?>" id="idComment">
    </div>
    <div class="form-group">
      <label for="idLink">Link</label><br>
      <input type="text" class="form-control" name="link" value="<?php echo $link;?>" id="idLink">
    </div>
    <button type="submit" class="button button1">Submit</button>
  </form>
</body>
</html>
