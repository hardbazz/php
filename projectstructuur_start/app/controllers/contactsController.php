<?php

require_once '../init.php';

switch( $_POST['type'] ) {

    case 'add':
        add($_POST['firstname'],
            $_POST['lastname'],
            $_POST['username'],
            $_POST['phone']);
        break;

    case 'edit':
        edit( $_POST['id'],
              $_POST['firstname'],
              $_POST['lastname'],
              $_POST['username'],
              $_POST['phone']);
        break;

    case 'delete':
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        remove($id);
        break;
}





function remove($id) {
    global $db;

    $sql = "DELETE FROM contacts WHERE id = :id";
    $q = $db->prepare($sql);
    $q->bindparam(':id', $id);
    $q->execute();

    header('location: ' . HTTP . 'public/index.php');

}



function add( $firstname, $lastname, $username, $phone)
{
    global $db;

    if ( empty( $username ) ) {
        die('username niet ingevuld');
    }

    $sql = "SELECT * FROM contacts WHERE username = :username";
    $q = $db->prepare($sql);
    $q->bindParam(':username', $username);
    $q->execute();

// counts the returned rows
    if ( $q->rowCount() > 0 )
    {
        die('Username already exists');
    }

    $sql = "INSERT INTO contacts (firstname, lastname, username, phone)
                VALUES (:firstname, :lastname, :username, :phone)";

    $q = $db->prepare($sql);
    $q->bindParam(':firstname', $firstname);
    $q->bindParam(':lastname', $lastname);
    $q->bindParam(':username', $username);
    $q->bindParam(':phone', $phone);
    $q->execute();

    header('location: ../../public/index.php');

}


function edit($id, $firstname, $lastname, $username, $phone) {

    global $db;

    $sql = "UPDATE contacts SET
              firstname = :firstname,
              lastname  = :lastname,
              username  = :username,
              phone     = :phone
              WHERE id = :id";

    $q = $db->prepare($sql);
    $q->bindParam(':firstname', $firstname);
    $q->bindParam(':lastname', $lastname);
    $q->bindParam(':username', $username);
    $q->bindParam(':phone', $phone);
    $q->bindParam(':id', $id);
    $q->execute();

    header('location: ' . HTTP . 'public/index.php');
}





