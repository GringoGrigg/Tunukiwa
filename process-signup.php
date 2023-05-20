<?php

// Check if name is empty
if (empty($_POST["name"])) {
    die("Name is required");
}

// Check if email is valid
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

// Check if password is at least 8 characters
if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

// Check if password contains at least one letter
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

// Check if password contains at least one number
if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

// Check if both passwords match 
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

// Hash the password using the default algorithm
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Require the database connection
$mysqli = require __DIR__ . "/database.php";

// Prepare the SQL statement
$sql = "INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();

// Check if the statement was prepared successfully
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// Bind the parameters to the statement
$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

// Execute the statement and handle success or errors
if ($stmt->execute()) {
    // Redirect to success page
    header("Location: signup-success.html");
    exit;
} else {
    // Handle duplicate email error or other database error
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>
