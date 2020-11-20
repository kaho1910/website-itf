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
    <button type="submit" class="button button1">Submit</button>
  </form>
  <?php
  }
  ?>
  <?php
  mysqli_close($conn);
  ?>
</body>
</html>
