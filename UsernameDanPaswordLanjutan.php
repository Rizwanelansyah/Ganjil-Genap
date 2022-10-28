<?php

$username = "admin";
$pasword = "qwerty";


if($username != "admin"){
  echo "username tidak sesuai <br>";
}
if($pasword != "qwerty"){
  echo "pasword tidak sesuai <br>";
}
if($username == "admin" AND $pasword == "qwerty"){
  echo "username dan pasword sesuai, hak akses diberikan";
}

?>