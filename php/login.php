<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

session_start();

$_SESSION['email'] = "";

if (isset($_POST["submit"])) {
    $_SESSION['email'] = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_SESSION['email'];

    var_dump($_POST);
    if (empty($email) || empty($wachtwoord)) {
        $error = "Je moet alle velden invullen!";
        redirect("../login.php");
    } else {
        $query = "SELECT * FROM account WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $wachtwoord);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $query = "SELECT account_role FROM account WHERE email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $row = $stmt->fetch();
            if($row['account_role'] == 0) {
                redirect("../admin/adminhome.php");
            } else {
                redirect("../userprofiles.php");
            }
        } else {
            redirect("../login.php");
        }
    }
}

function printError(): string {
    global $error;
    return $error;
}