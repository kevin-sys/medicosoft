<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'medicosoft'
) or die(mysqli_erro($mysqli));

?>
