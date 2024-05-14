<?php

$servname = "localhost";
$uname = "root";
$pass = "";
$db = "dcism_studs";

$conn = mysqli_connect($servname, $uname, $pass, $db);

if (!$conn) {
  die("connection failed");
}else{
  //echo "Database connection established";
}
