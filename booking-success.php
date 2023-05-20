<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- main style document -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- A row element is created that contains two columns. The first column is the booking success message and the second column is an image. -->
    <div class="row">
        <div class="col-6">
            <!-- A hyperlink is created that takes the user back to the home page. -->
            <a href="index.php" style="padding: 20px;">Go back to the home page</a>

            <!-- A message is displayed to the user indicating that the booking was successful. -->
            <div class="w-100" style="padding: 100px;">
                <center>
                    <p>
                        Your booking has been made successfully!!
                    </p>
                    <p>
                        We are looking foward to your child's immunisation day :)
                    </p>
                </center>

                <!-- A hyperlink is created that takes the user to their Google calendar so that they can set a reminder for the immunization day. -->
                <span>
                    Would you like to set reminders for the day?
                    <a href="https://calendar.google.com" target="_blank">
                        Set it here.
                    </a>
                </span>
            </div>
        </div>
        <div class="col-6">
            <!-- An image is displayed in the second column that shows a confirmation of the booking. -->
            <img class="booking-success-img" src="./confirmation.jpg" alt="Image details" />
        </div>
    </div>

</body>

</html>
