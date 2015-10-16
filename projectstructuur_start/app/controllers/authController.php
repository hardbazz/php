<?php require_once __DIR__ . '/../init.php';

switch($_POST['type']) {

    case 'login':

        if (login($_POST['username'], $_POST['password'])){
            header('location: ');
        }


        break;

    case 'logout':

        break;


    case 'register':
        break;
}




function login($username, $password) {

    global $db;

    if ( empty($username) || empty($password) ) {
        return false;
    }

    $sql = "SELECT * FROM users WHERE username =:username";
    $q = $db->prepare($sql);
    $q->bindParam(':username', $username);
    $q->execute();

    if ($q->rowCount() > 0) {

        $user = $q->fetch();

        if (password_verify($password, $user['password'])) {
            echo "Joepie, we zijn binnen!!!"; die();
            // we got a winner!!!!!

        }


    }







}
