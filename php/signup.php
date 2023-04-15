<?php

include("../includes/connect.php");
include("../includes/util.php");

global $conn;

if (isset($_POST["submit-signup"])) {
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    $phoneNumber = $_POST["phone_number"];
    
    if (empty($email) || empty($fullName) || empty($wachtwoord) || empty($phoneNumber)) {
        $error = "You need to fill all forms!";
        echo "You need to fill all forms!";
        redirect("../pages/login.php");
        var_dump($_POST);
    } else {
        $query = "SELECT * FROM account WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if($stmt->rowCount() == 1) {
            redirect("../pages/login.php");
        } else {
            $query = "INSERT INTO account(full_name, email, phonenumber, password, account_role) VALUES (:full_name, :email, :phonenumber, :password, 0)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":full_name", $fullName);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phonenumber", $phoneNumber);
            $stmt->bindParam(":password", $wachtwoord);
            $stmt->execute();
            redirect("../pages/login.php");
        }
    }
}