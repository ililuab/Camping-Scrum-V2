<?php
include("../includes/connect.php");
if (!isset($_POST['submit-rerservation'])) {
    header('Location: reserveren.php');
    exit();
};


