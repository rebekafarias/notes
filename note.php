<?php
$notes = json_decode(file_get_contents('note.json'), true);
if ($notes !== null) {
    foreach ($notes as $key => $note) {
        echo "<li><strong>{$note['title']}</strong><br>{$note['description']}<br>date: {$note['date']}<br>
                <form action='delete_note.php' method='post'>
                    <input type='hidden' name='id' value='$key'>
                    <button type='submit' class='delete-btn' name='delete'><i class='fas fa-trash'></i> Delete</button>
                </form>
              </li>";
    }
}
?>
