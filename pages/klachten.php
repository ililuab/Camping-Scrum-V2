<?php
include "../includes/connect.php";
include "../includes/sessions.php";
// Controleren of er een melding is ingesteld
if (isset($_SESSION['complaint_success'])) {
    // Melding weergeven
    echo "<p class='success'>" . $_SESSION['complaint_success'] . "</p>";
    // Melding verwijderen
    unset($_SESSION['complaint_success']);
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Camping Scrum BV | Klachten </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form method="post" action="klachten-update.php">

        <label for="priority">Prioriteit:</label>
        <select name="priority" id="priority" required>
            <option value="1">Laag</option>
            <option value="2">Gemiddeld</option>
            <option value="3">Hoog</option>
        </select><br><br>

        <label for="complaint">Klacht:</label>
        <textarea name="complaint" id="complaint" required></textarea><br><br>

        <label for="complaint_role">Bedoelt voor:</label>
        <select name="complaint_role" id="complaint_role" required>
            <option value="1">Onderhoudsmedewerker</option>
            <option value="2">Schoonmaker</option>
            <option value="3">Administratiefmedewerker</option>
            <option value="3">Beheerder</option>
        </select><br><br>

        <input type="submit" value="submit">
    </form>
</body>

</html>