<?php include 'mysqli.php'; 

session_start();
?>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
 </head>
 <body>

  <?php
    
    $query='
    SELECT * FROM `count`
    INNER JOIN register_user
    ON count.user_id = register_user.user_id;
    ';

    $stm=$connect->prepare($query);
    $stm->execute();
    $rowCount=$stm->rowCount();
    $fetch_user_view=$stm->FetchAll();

  ?>

<section class="section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <img alt="Web Studio" class="img-fluid"src="img.jpeg" />
        </div>
      </div>
      <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <h2>Views =<?php echo $rowCount;?></h2>
          <p class="margin-top-s">
            <img src="count.png" style="width:55px;">
          </p>
          <?php
           if (isset($_SESSION['user_id']) == "") 
            {
            echo '<a href="register.php">register</a>';
            }else{
            echo '<a href="logout.php">logout</a>';
            }
         ?>
         <br>
         <?php
      if ($rowCount != 0) 
         {

         if (isset($_SESSION['user_id'])!= "")
            {

           ?>
         <button class="nav-link  dropdown-toggle" data-toggle="dropdown">Show users who saw</button>
         <?php

            }
         }
         ?>
          <ul class="dropdown-menu">
            <?php
              foreach ($fetch_user_view as $row) 
              {

                if ($row['user_id'] == $_SESSION['user_id']) 
                {
                  $I_am_the_viewer=" (You) ";
                  
                }else{

                  $I_am_the_viewer="";
                }

                ?>
                 <li><a class="dropdown-item" href="#"><?php echo $row['username']
                 .$I_am_the_viewer;?></a></li>
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
      <?php
         if (isset($_SESSION['user_id']) == "") 
         {
           echo "<h2 style='color:red;''>Your value can only be considered as a viewer when you are logged in</h2>";
         }
      ?>
    </div>
  </div>
</section>

<script type="text/javascript">
  insert_count_view_img();
  function insert_count_view_img() 
  {
   $.ajax({
     url:"insert_count_view_img.php",
   });
  }
</script>

</body>
</html>