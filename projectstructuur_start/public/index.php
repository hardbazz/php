<?php require_once __DIR__ . '/header.php';?>

<?php
// de query die gedaan moet worden
$sql = "SELECT * FROM contacts";
// de query wordt opgeslagen
$query = $db->query($sql);
// de data wordt opgeslagen
$contacts = $query->fetchAll();
?>

<div class="container">
    <h1>Contacts</h1>
    <ul class="list-group">
        <?php foreach( $contacts as $contact ): ?>
            <li class="list-group-item">
                <p><?= $contact['username'] ?></p>
                <a href="<?= HTTP . 'public/views/contacts/edit.php?id=' . $contact['id'] ?>">edit</a>
                <form action="<?php echo HTTP . '/app/controllers/contactsController.php'  ?>" method="post">
                    <input name="id" value="<?php echo $contact['id']; ?>" type="hidden"/>
                    <input name="type" value="delete" type="hidden"/>
                    <button type="submit">X</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="views/contacts/add.php" class="btn btn-primary">Add Contact</a>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>