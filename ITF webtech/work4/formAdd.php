<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>
  </style>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
    .btn {
      border: 1px green;
      background-color: white;
      color: white;
      padding: 10px 18px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    .danger {border-color: #f44336;color: red}
  </style>
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
    <button type="submit" class="button btn-success btn-block">Submit</button>
    <div align="center"><a href="show.php" class="button btn-danger">cancel</a></div>
  </form>
</body>
</html>
