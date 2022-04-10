<?php
  $dbc = mysqli_connect('localhost', 'root', '', 'archive') or die('Error connecting to MySQL server.' .mysqli_connect_error());

  mysqli_set_charset($dbc, "utf8");
?>
