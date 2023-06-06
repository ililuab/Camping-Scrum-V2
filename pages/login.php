<?php

include("../php/login.php")

?>
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
    <title>Camping Scrum BV | Login-signup</title>
</head>

<?php include "../inc/header.php";  ?>

<body class="login-background">
    
    <section class="container-fluid p-0 d-flex align-items-center justify-content-center section-login">
        <div class="login-signup" id="login-signup">

            <div class="button-container">
                <button class="button-login" id="login">Login</button>
                <button class="button-signup" id="signup">SignUp</button>
            </div>

            <div class="login" id="logindiv">
                <form class="form" action="../php/login.php" method="POST">
                    <div class="input-container">
                        <input required placeholder="E-Mail" name="email" class="" type="email">
                    </div>
                    <div class="input-container">
                        <input required placeholder="Password" name="wachtwoord" class="" type="password">
                    </div>
                    <div class="input-container">
                        <input class="" name="submit" type="submit" value="Login">
                    </div>
                </form>
            </div>
            
            <div class="signup" id="signupdiv">
                <form class="form" action="../php/signup.php" method="POST">
                    <div class="input-container">
                        <input placeholder="Full Name" name="full_name" class="" type="text">
                    </div>
                    <div class="input-container">
                        <input placeholder="E-Mail" name="email" class="" type="email">
                    </div>
                    <div class="input-container">
                        <input placeholder="Password" name="wachtwoord" class="" type="password">
                    </div>
                    <div class="input-container">
                        <input placeholder="PhoneNumber" name="phone_number" class="" type="text">
                    </div>
                    <div class="input-container">
                        <input class="" name="submit-signup" type="submit" value="Sign-Up">
                    </div>
                </form>
            </div>

        </div>
    </section>

</body>
<script src="../js/login.js"></script> 
</html>