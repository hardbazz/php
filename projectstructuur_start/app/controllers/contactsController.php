<?php
require_once '../init.php';

if ( empty( $_POST['username'] ) ) {
    die('username niet ingevuld');
}


$firstname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$username   = $_POST['username'];
$phone      = $_POST['phone'];

$sql = "INSERT INTO contacts (firstname, lastname, username, phone)
                VALUES (:firstname, :lastname, :username, :phone)";

$q = $db->prepare($sql);
$q->bindParam(':firstname', $firstname);
$q->bindParam(':lastname', $lastname);
$q->bindParam(':username', $username);
$q->bindParam(':phone', $phone);
$q->execute();

header('location: ../../public/index.php');







