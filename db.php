<?php
  $mysqli = new mysqli("localhost","2441994","Sir122116","db2441994");

  if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
  }
?>