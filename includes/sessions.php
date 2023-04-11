<?php

include("util.php");

session_start();

$email = $_SESSION["email"];

if (empty($email)) {
    redirect("login.php");
}