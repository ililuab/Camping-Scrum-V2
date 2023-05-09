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
