<?php
include('../includes/connect.php');

try {

    // Data ophalen uit het formulier
    $id = $_POST['id'];
    $cost_per_day = $_POST['cost_per_day'];
    $in_use = isset($_POST['in_use']) ? 1 : 0;
    $cleaned = isset($_POST['cleaned']) ? 1 : 0;
    $description = $_POST['description'];
    $image = $_POST['image'];
    $name = $_POST['name'];

    // Query opstellen om de data in de database te zetten
    $sql = "INSERT INTO camping_place (id, cost_per_day, in_use, cleaned, description, image, name)
    VALUES (:id, :cost_per_day, :in_use, :cleaned, :description, :image, :name)";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':cost_per_day', $cost_per_day);
    $stmt->bindParam(':in_use', $in_use);
    $stmt->bindParam(':cleaned', $cleaned);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':name', $name);

    // Execute statement
    $stmt->execute();
    header('Location: locaties.php');
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Connectie sluiten
$conn = null;

?>