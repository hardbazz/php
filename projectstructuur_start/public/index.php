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
                <?= $contact['username'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>