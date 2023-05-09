<?php
include "../includes/connect.php";
include "../includes/sessions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verwerk het formulier voor het bijwerken van gegevens
    $id = $_POST['id'];
    $cost_per_day = $_POST['cost_per_day'];
    $in_use = isset($_POST['in_use']) ? 1 : 0;
    $cleaned = isset($_POST['cleaned']) ? 1 : 0;
    $description = $_POST['description'];
    $image = $_POST['image'];
    $name = $_POST['name'];

    // Voer de query uit om de gegevens bij te werken
    $sql = "UPDATE camping_place SET cost_per_day = :cost_per_day, in_use = :in_use, cleaned = :cleaned, description = :description, image = :image, name = :name WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cost_per_day', $cost_per_day);
    $stmt->bindParam(':in_use', $in_use);
    $stmt->bindParam(':cleaned', $cleaned);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect to the page displaying the updated location data
    header("Location: locaties.php");
    exit();
} else {
    // Check if the ID parameter exists in the query string
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch the location data from the database based on the ID
        $sql = "SELECT * FROM camping_place WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $location = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if a location with the given ID exists
        if (!$location) {
            echo "Location not found";
            exit();
        }
    } else {
        echo "Invalid ID";
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Camping Scrum BV | Locatie bewerken</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa    5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <form action="locaties-edit.php" method="POST">

                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $location['id']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="cost_per_day">Kosten per dag:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">&euro;</span>
                            </div>
                            <input type="text" class="form-control" name="cost_per_day" value="<?php echo $location['cost_per_day']; ?>">
                        </div>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="in_use" <?php if ($location['in_use'] == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="in_use">In gebruik</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="cleaned" <?php if ($location['cleaned'] == 1) echo "checked"; ?>>
                        <label class="form-check-label" for="cleaned">Schoongemaakt</label>
                    </div>

                    <div class="form-group">
                        <label for="description">Beschrijving:</label>
                        <textarea class="form-control" name="description"><?php echo $location['description']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Afbeelding:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="image" value="<?php echo $location['image']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Naam:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $location['name']; ?>">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
