<?php
    // Set error reporting to show all errors
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    // Initialize variable to track if login attempt is invalid
    $is_invalid = false;

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Require the database connection
        $mysqli = require __DIR__ . "/database.php";

        // Construct the SQL query to select the user with the email from the form
        $sql = sprintf(
            "SELECT * FROM users
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"])
        );

        // Execute the query and get the result set
        $result = $mysqli->query($sql);

        // Get the first row of the result set as an associative array
        $user = $result->fetch_assoc();

        // If a user is found with the email from the form
        if ($user) {

            // Verify that the password from the form matches the hashed password in the database
            if (password_verify($_POST["password"], $user["password_hash"])) {

                // Start a new session and regenerate the session ID to prevent session fixation attacks
                session_start();
                session_regenerate_id();

                // Set the user ID in the session
                $_SESSION["user_id"] = $user["id"];

                // After successful login
                $_SESSION['logged_in'] = true;

                // Redirect to the login success page and exit the script
                header("Location: login-success.php");
                exit;
            }
        }

        // If the login attempt is invalid, set the flag
        $is_invalid = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta charset="UTF-8">

    <!-- Load the Google Fonts stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Load the main stylesheet -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="portal-bg-img">
            <h1>Login</h1>
            <div class="Login">
                <?php if ($is_invalid) : ?>
                    <!-- Display an error message if the login attempt is invalid -->
                    <em>Invalid login</em>
                <?php endif; ?>

                <!-- Create a form to handle the login attempt -->
                <form method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button>Log in</button>
                    <br>
                    <a href="signup.php">Don't have an account? Sign Up</a>
                    </br>
                    <br>
                    <a href="index.php">Go to Home Page</a>
                    </br>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
