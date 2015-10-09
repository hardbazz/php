<?php require_once '../../header.php';?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM contacts WHERE id = :id";
$q = $db->prepare($sql);
$q->bindParam(':id', $id);
$q->execute();

$contact = $q->fetch();


?>


    <form class="col-md-4 col-md-push-4" action="../../../app/controllers/contactsController.php" method="POST">
        <h1 class="text-center">Edit Contact</h1>

        <input type="hidden" name="type" value="edit"/>

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" class="form-control" value="<?= $contact['firstname'] ?>"/>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" class="form-control" value="<?= $contact['lastname'] ?>"/>
        </div>

        <div class="form-group">
            <label for="username"> Username </label>
            <input type="text" name="username" class="form-control" value="<?= $contact['username'] ?>" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value=""/>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= $contact['phone'] ?>"/>
        </div>

        <input type="submit" value="Edit" class="btn btn-primary"/>

    </form>


<?php require_once '../../footer.php' ;?>