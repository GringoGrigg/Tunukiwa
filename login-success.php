<?php
    // Turn on error reporting to display any errors or warnings
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // At the beginning of the file
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {    
    } else {
        // Redirect back to the home page
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row">
        <div class="col-12">
            <h2>Login Successful!</h2>
            <!-- Display any additional login success message or information here -->
        </div>
    </div>
    
    <?php 
        // Include the navbar.php file to display the navigation bar
        include __DIR__ . '/navbar.php'; 
    ?>
</body>
</html>
