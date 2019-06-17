<?php

  include_once 'connectToBase.inc.php';
  $sql = "SELECT * FROM coolChat ORDER BY message_date LIMIT 10;"; // statement you want to make
  $result = mysqli_query($dbconnect, $sql);
  $resultCheck = mysqli_num_rows($result);
  $names = array();
  $messages = array();
  $dates = array();
  $tracker = 0;
  if($resultCheck > 0){
    echo "<ul class='list-group'>";
    while ($row = mysqli_fetch_assoc($result)) {
      // echo $row['name'] . "<br>";
      $names[$tracker] = $row["name"];
      $messages[$tracker] = $row["message"];
      $dates[$tracker] = $row["message_date"];
      //This is where you can customize the look and or output


        echo "<li class='list-group-item'> <b>" . $names[$tracker] . "</b>[".$dates[$tracker]."] : " . $messages[$tracker] . "</li>";


      $tracker = $tracker + 1;
    }
    echo "</ul>";
  }

 ?>
