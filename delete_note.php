<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $notes = json_decode(file_get_contents('note.json'), true);
    $id = $_POST['id'];

    if (isset($notes[$id])) {
        unset($notes[$id]);
        file_put_contents('note.json', json_encode($notes, JSON_PRETTY_PRINT));
    }

    header('Location: index.php');
    exit;
}
?>
