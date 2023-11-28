<?php

$con = mysqli_connect('localhost', 'root', '', 'forumtp2', '3306');

if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  mysqli_set_charset($con,"utf8");

?>