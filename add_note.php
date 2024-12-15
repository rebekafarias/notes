<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $newNote = array(
        'title' => $title,
        'description' => $description,
        'date' => $date
    );

    $notes = json_decode(file_get_contents('note.json'), true);

    if ($notes === null) {
        $notes = array();
    }

    $notes[] = $newNote;

    file_put_contents('note.json', json_encode($notes, JSON_PRETTY_PRINT));

    header('Location: index.php');
    exit;
}
?>
