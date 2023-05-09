<?php
include "../includes/connect.php";
session_start();
if (!isset($_POST['submit'])) {
    header('Location: klachten.php');
    exit();
}

// Gegevens uit het formulier ophalen
$account_id = $_SESSION['user_id'];
$priority = $_POST['priority'];
$complaint = $_POST['complaint'];
$complaint_role = $_POST['complaint_role'];

// Query voor het invoegen van de gegevens in de database
$sql = "INSERT INTO complaints (account_id, priority, complaint, complaint_role) VALUES (:account_id, :priority, :complaint, :complaint_role)";

// Voorbereiden van de query
$stmt = $conn->prepare($sql);

// Binden van de parameters aan de query
$stmt->bindParam(':account_id', $_SESSION['user_id']);
$stmt->bindParam(':priority', $priority);
$stmt->bindParam(':complaint', $complaint);
$stmt->bindParam(':complaint_role', $complaint_role);

// Uitvoeren van de query
$stmt->execute();

// Melding instellen 
$_SESSION['complaint_success'] = "Uw klacht is succesvol ingediend.";

// Gebruiker doorsturen naar de klachten pagina
header('Location: klachten.php'); 
exit(); 
?>