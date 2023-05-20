<?php
session_start();

// Check if the user is logged in
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Include external CSS files for styling -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation bar -->
    <div class="container">
        <div class="topnavigation">
            <!-- logo -->
            <a href="index.php"><img src="./immunization2.png" class="logo"></a>
            <!-- navigation links -->
            <ul style="padding: 15px; margin-right: 50px;">
                <li>
                    <a href="booking.php">booking</a>
                    <a href="contacts.php">contacts</a>
                    <a href="aboutus.php">about us</a>
                </li>
            </ul>
            <?php if ($is_logged_in) : ?>
                <!-- active online icon and logout button -->
                <div>
                    <span>Active Online Icon</span>
                    <a href="logout.php">Logout</a>
                </div>
            <?php else : ?>
                <!-- login button -->
                <a href="login.php">Log in</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="body-bg-img">
            <div class="col-6" style="margin-left:35% ;">
                <center><h1>TUNUKIWA IMMUNISATION SYSTEM</h1></center>
            </div>
            <div class="col-6" style="margin-left: 25%; padding-top:100px;" >
                <center>
                    <p>Tunukiwa Immunization System is a website designed to ease the long, hectic but vital process of immunization of children. Instead of using physical schedule books that are at risks of losing important vaccination data, this systems allows its users to book immunization dates and it safely saves the information data in a secure database. It then sends reminders on the immunization dates to prevent cases of forgetfulness that in turn leads to missing important vaccines.</p>
                    <p>Tunukiwa Immunization System functions with a goal of easing the entire immunization process and increasing the immunization rates among children. Missing essential vaccines might lead to permanent disorders like paralysis or even death. Hence, the system functions to aid in reducing and ultimately eradicating child deaths due to missing vaccinations.</p>
                    <p>Tunukiwa system allows every accessor to get some essential facts and education on the importance of child immunization before anything else. It allows account creation for every accessor that would like to use the system to book vaccination dates. Once the user has successfully registered themselves into the system, they go ahead to book their vaccination dates. They will then receive constant reminders to ensure they do not miss their vaccination sessions.</p>
                </center>
            </div>
        </div>
    </div>

</body>
</html>
