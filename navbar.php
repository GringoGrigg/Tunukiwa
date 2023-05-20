<?php
// Check if a user is logged in
if (isset($_SESSION["user_id"])) {
    // Connect to the database
    $mysqli = require __DIR__ . "/database.php";

    // SQL query to fetch user details from the database
    $sql = "SELECT * FROM users WHERE id = {$_SESSION["user_id"]}";

    // Execute the query
    $result = $mysqli->query($sql);

    // Fetch user details as an associative array
    $user = $result->fetch_assoc();
}
?>

<!-- Check if user is logged in -->
<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) : ?>
    <div class="login-success">
        <span class="success-message">WELCOME TO TUNUKIWA IMMUNIZATION SYSTEM</span>
        <i class="active-icon"></i>
        <a href="logout.php">Log out</a>
    </div>
<?php endif; ?>



<!-- HTML code for navigation menu -->
<div class="container">
    <div class="topnavigation">
        <!-- Logo -->
        <a href="index.php"><img src="./immunization2.png" class="logo"></a>

        <!-- Navigation links -->
        <ul style="padding: 15px; margin-right: 50px;">
            <li>
                <a href="booking.php">Booking</a>
                <a href="contacts.php">Contacts</a>
                <a href="aboutus.php">About Us</a>
            </li>
        </ul>

        <!-- Display user information and login/logout links -->
        <?php if (isset($user)) : ?>
            <?php $firstName = substr($user["name"], 0, strpos($user['name'], ' ')); ?>
           
            <a style="margin-left: -200px;" href="logout.php">Log out</a>
        <?php else : ?>
            <a href="login.php">Log in</a>
        <?php endif; ?>
    </div>
</div>
