<?php 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');

preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);

$email = $matches1[1][0];

$uname = rtrim($email, "@example.com");

$gmail = $uname.rand(00,99)."@gmail.com";

echo "$gmail \n";

?>
