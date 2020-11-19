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
    $res = mysqli_query($conn, "SELECT * FROM guestbook WHERE id=$id");
  ?>
  <!-- Close container -->
  <table width="600" class="table table-striped">
    <thead>
      <tr>
        <th width="400"> <div align="center">Name</div></th>
        <th width="250"> <div>Comment</div></th>
        <th width="50"> <div>Link</div></th>
        <th width="100"> <div align="right">Action</div></th>
      </tr>
    </thead>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tbody>
      <tr class="table-primary">
        <td width="400"><div align="center"><?php echo $Result['Name'];?></div></td>
        <td width="250"><?php echo $Result['Comment'];?></td>
        <td width="50"><?php echo $Result['Link'];?></td>
        <td width="50"><?php echo '<a href="formUpdate.php?id='.$Result['ID'].'" class="btn btn-primary">Edit</a>';?></td>
        <td width="50"><?php echo '<a href="delete.php?id='.$Result['ID'].'" class="btn btn-primary">Delete</a>';?></td>
      </tr>
    </tbody>
    <?php
    }
    ?>
  </table>
  <!-- Close container -->
  <form action="update.php" method="post" id="Comment Form">
    <div class="form-group">
      <label for="idName">Name</label><br>
      <input type="text" class="form-control" name="name" id="idName" placeholder="Enter Name" value="<?php echo $res['Name'];?>">
    </div>
    <div class="form-group">
      <label for="idComment">Comment</label><br>
      <input type="text" class="form-control" name="comment" id="idComment" placeholder="Enter Comment" value="<?php echo $res['Comment'];?>">
    </div>
    <div class="form-group">
      <label for="idLink">Link</label><br>
      <input type="text" class="form-control" name="link" id="idLink" placeholder="Enter Link" value=<?php echo $res['Link'];?>>
    </div>
    <button type="submit" class="button button1">Submit</button>
  </form>
  <?php
  mysqli_close($conn);
  ?>
</body>
</html>
