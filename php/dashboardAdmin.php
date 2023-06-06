<?php
include '../includes/connect.php';
global $conn;


if(isset($_POST['create-account'])) {
    $id = $_POST['inputAccount_Role'];
    $fullName = $_POST['inputFull_Name'];
    $email = $_POST['inputEmail'];
    $phoneNumber = $_POST['inputPhoneNumber'];
    $password = $_POST['inputPassword'];

    $sql = "INSERT INTO account (account_role, full_name, email, phonenumber, password)
            VALUES ('$id', '$fullName', '$email', '$phoneNumber', '$password')";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['inputAcount_Role']);
    $stmt->bindParam(":full_name", $_POST['inputFull_Name']);
    $stmt->bindParam(":email", $_POST['inputEmail']);
    $stmt->bindParam(":phonenumber", $_POST['inputPhoneNumber']);
    $stmt->bindParam(":password", $_POST['inputPassword']);
    $stmt->execute();

    header("Location: ../pages/dashboardAdmin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Dashboard Admin</title>
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
                    <a class="nav-link" href="locaties.php">Locaties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="email.php">Mailer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/logout.php">Uitloggen</a>
                </li>
            </ul>
        </div>
    </nav>

</body>

</html>


