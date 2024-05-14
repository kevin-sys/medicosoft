<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bdnomina'
) or die(mysqli_erro($mysqli));

?>
