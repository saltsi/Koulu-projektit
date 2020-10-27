<?php
    // delete
if (!isset($_GET['id'])) {
    die('id puuttuu');
}

require('config/config.php');
require('config/db.php');

$id = intval($_GET['id']);

$stmt = $conn->prepare("DELETE FROM viestit WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header('Location: index.php');

?>