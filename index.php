<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left-column">
            <h1>Notes</h1>
            <form action="add_note.php" method="post">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="" required>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4" placeholder="" required style="resize: none;"></textarea>
                <label for="date">Date</label>
                <input type="date" name="date" id="date" required>
                <button type="submit"><i class="fas fa-plus"></i> Add</button>
            </form>
        </div>
        <div class="right-column">
            <h2>List</h2>
            <ul id="notesList">
                <?php include 'note.php'; ?>
            </ul>
        </div>
    </div>
    <footer>
        <p class="footer-text">REBEKA FARIAS</p>
    </footer>
</body>
</html>
