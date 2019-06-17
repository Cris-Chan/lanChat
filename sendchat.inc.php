<?php
  include_once 'connectToBase.inc.php';


  $name = $_POST['nameInput'];
  $chat = $_POST['chatInput'];
  $t = time();
  $date = date("h:i a",$t);

  $sql = "INSERT INTO coolChat(name, message, message_date) VALUES ('$name','$chat','$date');";
  mysqli_query($dbconnect, $sql);
 ?>
