<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Camping Scrum BV | Reserveren</title>
</head>
<?php include "../inc/header.php";  ?>
<body>
  <div class="m-0 container-fluid reserveer">
      <form class="reserveer-form" action="">
        <div class="col-xxl-3 col-3  d-flex flex-column">
          <label class="ms-4 text-white" for=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sunglasses" viewBox="0 0 16 16"><path d="M3 5a2 2 0 0 0-2 2v.5H.5a.5.5 0 0 0 0 1H1V9a2 2 0 0 0 2 2h1a3 3 0 0 0 3-3 1 1 0 1 1 2 0 3 3 0 0 0 3 3h1a2 2 0 0 0 2-2v-.5h.5a.5.5 0 0 0 0-1H15V7a2 2 0 0 0-2-2h-2a2 2 0 0 0-1.888 1.338A1.99 1.99 0 0 0 8 6a1.99 1.99 0 0 0-1.112.338A2 2 0 0 0 5 5H3zm0 1h.941c.264 0 .348.356.112.474l-.457.228a2 2 0 0 0-.894.894l-.228.457C2.356 8.289 2 8.205 2 7.94V7a1 1 0 0 1 1-1z"/></svg>Waar heen?</label>
          <input class="ms-4" placeholder="Camping plaats" type="text">
        </div>
        <div class="col-xxl-3 col-3 d-flex flex-column">
          <label class="ms-4 text-white" for=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16"><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/><path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/></svg>Vanaf wanneer?</label>
          <input class="ms-4" name="start_datum" placeholder="Start datum" type="date">
        </div>
        <div class="col-xxl-3 col-3 pl-3 d-flex flex-column">
          <label class="ms-4 text-white" for=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16"><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/><path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/></svg>Tot wanneer?</label>
          <input class="ms-4" name="eind_datum" placeholder="Eind datum" type="date">
        </div>
        <button class="mt-4 ms-4 btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>Zoeken</button>
      </form>
  </div>


  <div class="database-results-container">
      <div class="leftbar"><h1>Onder constuctie</h1></div>

      <div class="container-fluid main-content">
        <div class="row">
        <?php 
        include_once('../includes/connect.php');

        $stmt = $conn->prepare("SELECT * FROM camping_place");
        $stmt->execute();
        $camping_place = $stmt->fetchAll();

        foreach ($camping_place as $camping_place) {?>
          <div class="col-xxl-3 col-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo $camping_place['image']; ?>" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $camping_place['name']; ?></h5>
              <p class="card-text"><?php echo $camping_place['cost_per_day']; ?>,-</p>
              <p class="card-text"><?php echo $camping_place['description']; ?></p>
              <a href="#" class="btn btn-outline-success">Reserveer voor de sfeer</a>
            </div>
        </div>
        </div>
            <?php }
        ?>
        </div>
      </div>
  </div>
  
</body>
</html>