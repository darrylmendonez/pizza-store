<?php 

  // connect to database
  $conn = mysqli_connect('localhost', 'leo', 'test1234', 'leos_pizza');

  // check connection
  if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

?>