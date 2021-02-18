<?php

  
  include 'mysqli.php';

  session_start();

  $query='SELECT * FROM `register_user` 
  WHERE username =  "'.$_POST['username'].'"';

  $stm=$connect->prepare($query);
  $stm->execute();
  $rowCount=$stm->rowCount();
  $fatch_infrm=$stm->FetchAll();

  if ($rowCount ==  0) 
  {
    echo '<h2 style="color:red;" class="form-title">Please enter your information correctly</h2>';
  }else{

  	 foreach ($fatch_infrm as $row) 
     {
       $_SESSION['user_id']=$row['user_id'];
       header('location: index.php');
     }
  }


?>