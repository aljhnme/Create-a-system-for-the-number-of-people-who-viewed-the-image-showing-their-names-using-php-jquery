<?php

include 'mysqli.php';

  $query='SELECT * FROM `register_user` 
  WHERE username =  "'.$_POST['username'].'"';

  $stm=$connect->prepare($query);
  $stm->execute();
  $rowCount=$stm->rowCount();
  $fatch_infrm=$stm->FetchAll();

  if ($rowCount ==  0) 
  {
    $query="
    INSERT INTO `register_user`(`username`,`password`) 
    VALUES ('".$_POST['username']."','".$_POST['password']."')";

   $stm=$connect->prepare($query);
   
   if ($stm->execute()) 
   {
     echo '<h2 style="color:blue;" class="form-title">successfully registered</h2>';
   }

  }else{
  	echo '<h2 style="color:red;" class="form-title">This information is pre-recorded</h2>';
  }



?>