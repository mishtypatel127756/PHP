<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user data from the form
    $userid = htmlspecialchars($_POST["userid"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $password = $_POST["password"];

    // Store user data in session
    $_SESSION["userid"] = $userid;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["password_set"] = strlen($password) > 0;

    // Redirect to display page
    header("Location: display.php");
    exit();
} else {
    // If accessed directly without form submission, redirect to form
    header("Location: form.php");
    exit();
}
?>
