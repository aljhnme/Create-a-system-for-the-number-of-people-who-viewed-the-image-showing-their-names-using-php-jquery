<?php


 include 'mysqli.php';
 session_start();

 $query='SELECT * FROM `count` 
  WHERE user_id="'.$_SESSION['user_id'].'"';

  $stm=$connect->prepare($query);
  $stm->execute();
  $rowCount=$stm->rowCount();

  if ($rowCount == 0) 
  {
  	 $query="
       INSERT INTO `count`(count_view,user_id) 
       VALUES ('".$_SESSION['user_id']."','".$_SESSION['user_id']."')";

       $stm=$connect->prepare($query);
       $stm->execute();
  }


?>