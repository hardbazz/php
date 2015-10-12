<?php

require __DIR__  . '/../../../app/init.php';


$username = "Kees";
$password = "Welkom123";

$db->query("TRUNCATE TABLE users");

$hashed = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, password)
        VALUES ('$username', '$hashed')";

$db->query($sql);

