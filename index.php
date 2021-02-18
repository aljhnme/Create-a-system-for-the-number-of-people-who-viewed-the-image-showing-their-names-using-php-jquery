<?php

session_start();

 if (isset($_SESSION['user_id']) == "") 
    {
      header('location:register.php');
    }
  ?>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    Simple form
  </div>
  <div class="card-body">
    <p class="card-text">A counter system to count the number of people who viewed the image
  </p>
    <a href="view_img.php" class="btn btn-primary">Watch the picture</a>
  </div>
</div>
</body>
</html>