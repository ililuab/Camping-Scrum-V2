<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Camping Scrum | Klachten</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="klachten.php">Klachten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Uitloggen</a>
                </li>
            </ul>
        </div>
    </nav>

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

            <button type="submit" class="btn btn-primary">Verzenden</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-m3k5v2J8I2LVyHHCD7aAwKzZoYNxKIt9f+wdXpF+ICLXsSvnKx9qDxEMAR6Avfc1"
        crossorigin="anonymous"></script>
</body>

</html>
