<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <!-- Include external stylesheets and scripts -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <!-- <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script> -->
    <!-- <script src="/js/validation.js" defer></script> -->

    <link rel="stylesheet" href="./style.css?version=51"> <!-- Link to local stylesheet -->

</head>
<body>
    <div class="signup-bg-img">
    
    <h1>Signup</h1>
    
    <form action="process-signup.php" method="post" id="signup" novalidate> <!-- Form to submit user details to "process-signup.php" file -->
        <div>
            <label for="name">Name</label> <!-- Label for name field -->
            <input type="text" id="name" name="name"> <!-- Input field for name -->
        </div>
        
        <div>
            <label for="email">email</label> <!-- Label for email field -->
            <input type="email" id="email" name="email"> <!-- Input field for email -->
        </div>
        
        <div>
            <label for="password">Password</label> <!-- Label for password field -->
            <input type="password" id="password" name="password"> <!-- Input field for password -->
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label> <!-- Label for password confirmation field -->
            <input type="password" id="password_confirmation" name="password_confirmation"> <!-- Input field for password confirmation -->
        </div>
        
        <button>Sign up</button> <!-- Button to submit form data -->

                     <br>
                        <a href="login.php">Have an account? Go back to Log in Page</a> <!-- Link to login page -->
                    </br>
    </form>

    </div>
    
</body>
</html>
<!--
The code is for a signup form that allows users to create a new account on a website. The form contains several input fields, including name, email, password, and a password confirmation field.

The form data is sent to a PHP script (process-signup.php) using the HTTP POST method when the user submits the form by clicking the "Sign up" button. The script will handle the submitted data, validate it, and insert it into a database if it is valid.

The HTML code includes some commented-out links to CSS and JavaScript files that may be used to style and validate the form. The final link is to a local CSS file (style.css), which contains the actual styling for the form and the background image.

At the bottom of the form, there is also a link to the login page for users who already have an account-->