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
        $error = "You need to fill all forms!";
        redirect("../pages/login.php");
    } else {
        $query = "SELECT * FROM account WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $wachtwoord);
        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch();
            $_SESSION['user_id'] = $row['id'];
            
            $query = "SELECT account_role FROM account WHERE email = :email";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $row = $stmt->fetch();
            
            if($row['account_role'] == 1) {
                redirect("../php/dashboardAdmin.php");
            } else {
                redirect("../pages/account.php");
            }
        } else {
            redirect("../pages/login.php");
        }        
    }
}