<?php
include "../includes/connect.php";
include "../includes/sessions.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk het formulier voor het bijwerken van gegevens
    // Hier kun je de code toevoegen om de gegevens in de database bij te werken
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Camping Scrum BV | Locaties </title>
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
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <form action="locaties-update.php" method="POST">

                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id">
                    </div>

                    <div class="form-group">
                        <label for="cost_per_day">Kosten per dag:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&euro;</span>
                            </div>
                            <input type="text" class="form-control" name="cost_per_day">
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="in_use">
                        <label class="form-check-label" for="in_use">In gebruik</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="cleaned">
                        <label class="form-check-label" for="cleaned">Schoongemaakt</label>
                    </div>

                    <div class="form-group">
                        <label for="description">Beschrijving:</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Afbeelding:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Naam:</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                // Query om gegevens op te halen uit de database
                $sql = "SELECT * FROM camping_place";
                $result = $conn->query($sql);

                // Controleren of er resultaten zijn
                if ($result->rowCount() > 0) {
                    // Beginnen met het maken van de HTML-tabel
                    ?>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kosten P.D</th>
                                <th>In Gebruik</th>
                                <th>Schoongemaakt</th>
                                <th>Beschrijving</th>
                                <th>Plaatje</th>
                                <th>Naam</th>
                                <th>Actie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Loop door de resultaten en voeg elke rij toe aan de HTML-tabel
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row["id"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["cost_per_day"]; ?>
                                    </td>
                                    <td>
                                        <?php echo ($row["in_use"] == 1) ? "Ja" : "Nee"; ?>
                                    </td>
                                    <td>
                                        <?php echo ($row["cleaned"] == 1) ? "Ja" : "Nee"; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["description"]; ?>
                                    </td>
                                    <td style="max-width: 150px;"><img class="img-fluid" src="<?php echo $row["image"]; ?>"
                                            alt="<?php echo $row["name"]; ?>"></td>
                                    <td>
                                        <?php echo $row["name"]; ?>
                                    </td>
                                    <td>
                                        <a href="locaties-edit.php?id=<?php echo $row["id"]; ?>"
                                            class="btn btn-primary btn-sm">Bewerken</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>
</body>