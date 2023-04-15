
<!doctype html>
<html lang="en">
<head>
    <title>Camping Scrum BV | Emailer </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<?php include "../inc/header.php";  ?>
  <body>
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="phpmailer.php" method="POST" enctype="multipart/form-data">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="emailRecipient">Email Ontvanger </label>
                                <input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="Naar wie gaat de e-mail?">
                            </div>

                            <div class="form-group">
                                <label for="emailBody">Bericht </label>
                                <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Schrijf iets..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="emailAttachments">Factuur</label>
                                <input type="file" name="emailAttachments[]" multiple="multiple" id="emailAttachments" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Email Verzenden </button>
                            <a class="btn btn-secondary" href="https://app.invoicesimple.com/invoices/new" target='_blank'>Factuur aanmaken</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
     
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
