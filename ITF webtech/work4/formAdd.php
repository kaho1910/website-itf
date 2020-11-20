<html>
<head>
  <title>Comment Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="insert.php" method="post" id="CommentForm">
    <div class="form-group">
      <label for="idName">Name</label><br>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" id="idName">
    </div>
    <div class="form-group">
      <label for="idComment">Comment</label><br>
      <input type="text" class="form-control" name="comment" placeholder="Enter Comment" id="idComment">
    </div>
    <div class="form-group">
      <label for="idLink">Link</label><br>
      <input type="text" class="form-control" name="link" placeholder="Enter Link" id="idLink" >
    </div>
    <button type="submit" class="btn btn-success btn-block">Submit</button>
    <div align="center"><a href="show.php" class="btn btn-danger">cancel</a></div>
  </form>
</body>
</html>
