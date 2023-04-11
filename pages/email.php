
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
    <link rel="stylesheet" href="../css/styles.css">
</head>
<?php include "../inc/header.php";  ?>
  <body>
      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow">

                        @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif

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
