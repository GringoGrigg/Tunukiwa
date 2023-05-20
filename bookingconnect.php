<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "tunzwa";

$con = new mysqli($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error) {
    die("Connection failed:" . $con->connect_error);
} else {
    echo "Connected successfully <br />";
}
//receive  values from user form and trim white spaces
$FirstName = ($_POST['FirstName']);
$Surname = ($_POST['Surname']);
$DOB = ($_POST['DOB']);
$Gender = ($_POST['Gender']);
$HomeAddress = ($_POST['HomeAddress']);
$County = ($_POST['County']);
$MedicalHistory = ($_POST['MedicalHistory']);
$Vaccines = ($_POST['Vaccines']);
$Hospital = ($_POST['Hospital']);
$VaccinationDate = ($_POST['VaccinationDate']);
$VaccinationTime = ($_POST['VaccinationTime']);
$Email = ($_POST['Email']);


//now insert the received values into database using defined variables
$sqli = "INSERT INTO booking(FirstName,Surname,DOB,Gender,HomeAddress,County,MedicalHistory,Vaccines,Hospital,VaccinationDate,VaccinationTime,Email) VALUES ('$FirstName','$Surname','$DOB','$Gender','$HomeAddress','$County','$MedicalHistory','$Vaccines','$Hospital','$VaccinationDate','$VaccinationTime','$Email');";
if ($con->query($sqli) === TRUE) {
    echo "Booking successfull";

    //connect to google cloud after submission
    header("Location: booking-success.php");
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reasons
