<!doctype html>
<html lang="en">

<head>
    <title>Camping Scrum BV | Klachten</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <form method="post" action="klachten-update.php">
            <div class="mb-3">
                <label for="priority" class="form-label">Prioriteit:</label>
                <select name="priority" id="priority" class="form-select" required>
                    <option value="1">Laag</option>
                    <option value="2">Gemiddeld</option>
                    <option value="3">Hoog</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="complaint" class="form-label">Klacht:</label>
                <input name="complaint" id="complaint" class="form-control" required></input>
            </div>

            <div class="mb-3">
                <label for="complaint_role" class="form-label">Bedoelt voor:</label>
                <select name="complaint_role" id="complaint_role" class="form-select" required>
                    <option value="1">Onderhoudsmedewerker</option>
                    <option value="2">Schoonmaker</option>
                    <option value="3">Administratief medewerker</option>
                    <option value="3">Beheerder</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-m3k5v2J8I2LVyHHCD7aAwKzZoYNxKIt9f+wdXpF+ICLXsSvnKx9qDxEMAR6Avfc1"
        crossorigin="anonymous"></script>
</body>

</html>
