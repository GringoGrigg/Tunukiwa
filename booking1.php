<?php
/*echo "<pre>";
    print_r($_POST);
echo'</pre>';*/

    $message_sent= false;
    if(isset($_POST['email']) && $_POST['email'] != '')
    {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            //submit the form
            $fname=$_POST['fname'];
            $sname=$_POST['sname'];
            $mname=$_POST['mname'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $haddress=$_POST['haddress'];
            $county=$_POST['county'];
            $medical_history=$_POST['medical_history'];
            $vaccines=$_POST['vaccines'];
            $vaccination_date=$_POST['vaccination_date'];
            $vaccination_time=$_POST['vaccination_time'];
            $email=$_POST['email'];


            $to = "equidza@gmail.com";
            $subject="Vaccination Booking Confirmation";
            $body="";
            
            $body .= "From :".$fname. "\r\n";
            $body .= "sname :".$sname. "\r\n";
            $body .= "mname :".$mname. "\r\n";
            $body .= "dob :".$dob. "\r\n";
            $body .= "gender :".$gender. "\r\n";
            $body .= "haddress :".$haddress. "\r\n";
            $body .= "county :".$county. "\r\n";
            $body .= "medical_history :".$medical_history. "\r\n";
            $body .= "vaccines :".$vaccines. "\r\n";
            $body .= "vaccination_date :".$vaccination_date. "\r\n";
            $body .= "vaccination_time :".$vaccination_time. "\r\n";
            $body .= "email :".$email. "\r\n";

            mail($to,$subject,$body);

            $message_sent= true;
        }
  
    }

    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $mname=$_POST['mname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $haddress=$_POST['haddress'];
    $county=$_POST['county'];
    $medical_history=$_POST['medical_history'];
    $vaccines=$_POST['vaccines'];
    $vaccination_date=$_POST['vaccination_date'];
    $vaccination_time=$_POST['vaccination_time'];
    $email=$_POST['email'];


    $to = "equidza@gmail.com";
    $subject="Vaccination Booking Confirmation";
    $body="";
    
    $body .= "From :".$fname. "\r\n";
    $body .= "sname :".$sname. "\r\n";
    $body .= "mname :".$mname. "\r\n";
    $body .= "dob :".$dob. "\r\n";
    $body .= "gender :".$gender. "\r\n";
    $body .= "haddress :".$haddress. "\r\n";
    $body .= "county :".$county. "\r\n";
    $body .= "medical_history :".$medical_history. "\r\n";
    $body .= "vaccines :".$vaccines. "\r\n";
    $body .= "vaccination_date :".$vaccination_date. "\r\n";
    $body .= "vaccination_time :".$vaccination_time. "\r\n";
    $body .= "email :".$email. "\r\n";

   mail($to,$subject,$body);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tunukiwa</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- main style document -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  
    <?php
    if($message_sent):
    ?>
        <h3>Thank you for booking your vaccine</h3>

    <?php
    else:
    ?>

    <div class="container">
        <div class="topnavigation">
            <a href="index.php"><img src="./immunization2.png" class="logo"></a>
            
                <a href="index.php">home</a>
                <a href="booking1.php">booking</a>
                <a href="contacts.html">contacts</a>
                <a href="aboutus.html">aboutus</a>
                                 
        </div>
        
    </div>

    <div class="container">
        <div class="booking-bg-img">
                       

            <!--creating the booking form-->
            <h1>TUNUKIWA IMMUNISATION SYSTEM</h1>
            <form action="booking1.php" method="POST" class="booking1.php">
            <div class="booking">
        
                <label for="fname"><b>First Name</b></label>
                <input type="text" name='fname' id='fname'
                placeholder="Enter First Name">

                <label for="sname"><b>sname</b></label>
                <input type="text" name='sname' id='sname'
                placeholder="Enter sname">

                <label for="mname"><b> Middle name</b></label>
                <input type="text" name='mname' id='mname'
                placeholder="Enter Middle Name">

                <label for ="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob">

                <label for ="gender">gender</label>
                 <select name='gender' id='gender'>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="bisexual">Bi</option>
                 </select>

                 <label for="haddress"><b> Home Address</b></label>
                 <input type="text" name='haddress' id='haddress'
                placeholder="Enter Home Address">
                               
                <label for="county">county</label>
                <select name='county' id='county'>
                    <option value="Mombasa">Mombasa</option>
                    <option value="Kwale">Kwale</option>
                    <option value="Kilifi">Kilifi</option>
                    <option value="TanaRiver">Tana River</option>
                    <option value="Lamu">Lamu</option>
                    <option value="TaitaTaveta">TaitaTaveta</option>
                    <option value="Garissa">Garissa</option>
                    <option value="Wajir">Wajir</option>
                    <option value="Marsabit">Marsabit</option>
                    <option value="Mandera">Mandera</option>
                    <option value="Isiolo">Isiolo</option>
                    <option value="Meru">Meru</option>
                    <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                    <option value="Embu">Embu</option>
                    <option value="Machakos">Machakos</option>
                    <option value="Makueni">Makueni</option>
                    <option value="Nyandarua">Nyandarua</option>
                    <option value="Nyeri">Nyeri</option>
                    <option value="Kirinyaga">Kirinyaga</option>
                    <option value="Muranga">Muranga</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Turkana">Turkana</option>
                    <option value="WestPokot">WestPokot</option>
                    <option value="Samburu">Samburu</option>
                    <option value="Trans-Nzoia">Trans-Nzoia</option>
                    <option value="UasinGishu">UasinGishu</option>
                    <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                    <option value="Nandi">Nandi</option>
                    <option value="Baringo">Baringo</option>
                    <option value="Laikipia">Laikipia</option>
                    <option value="Nakuru">Nakuru</option>
                    <option value="Narok">Narok</option>
                    <option value="Kajiado">Kajiado</option>
                    <option value="Kericho">Kericho</option>
                    <option value="Bomet">Bomet</option>
                    <option value="Kakamega">Kakamega</option>
                    <option value="Vihiga">Vihiga</option>
                    <option value="Bungoma">Bungoma</option>
                    <option value="Busia">Busia</option>
                    <option value="Siaya">Siaya</option>
                    <option value="HomaBay">HomaBay</option>
                    <option value="Migori">Migori</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Nyamira">Nyamira</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kilifi">Kilifi</option>      
    
                </select>
                
                <label for="medical_history">medical_history</label>
                <textarea id="medical_history" name="medical_history"></textarea>

                <label for="vaccines">vaccines</label>
                <select name='vaccines' id='vaccines'required>
                    <option value="Diphtheria">Diphtheria</option>
                    <option value="Tetanus">Tetanus</option>
                    <option value="AcellularPertussis">Acellular Pertussis</option>
                    <option value="HepatitisB"> Hepatitis B</option>
                    <option value="Rotavirus">Rotavirus</option>
                    <option value="HaemophilusInfluenzae">Haemophilus Influenzae</option>
                    <option value="PneumococcalConjugate">Pneumococcal Conjugate</option>
                    <option value="InactivatedPoliovirus">Inactivated Poliovirus</option>
                    <option value="Influeza">Influeza</option>
                    <option value="Measles">Measles</option>
                    <option value="Mumps">Mumps</option>
                    <option value="Rubella">Rubella</option>
                    <option value="Varicella">Varicella</option>
                    <option value="HepatitisA">Hepatitis A</option>
                    <option value="PneumococcalPolysaccharide">Pneumococcal Polysaccharide</option>
                    <option value="Dengue">Dengue</option>
                    <option value="HumanPapillomavirus">Human Papillomavirus</option>
                    <option value="Meningococcal">Meningococcal</option>
                    <option value="MeningococcalB">Meningococcal B</option>
                    <option value="BCG">BCG</option>
                    <option value="Polio">Polio</option>
                    <option value="Pentavalent">Pentavalent</option>
                    <option value="Vitamins">Vitamins</option>
                    <option value="YellowFever">Yellow Fever</option>
                    <option value="Flu">Flu</option>
                    <option value="Prevenar13">Prevenar 13</option>
                    <option value="Rotarix">Rotarix</option>
                    <option value="Typhoid">Typhoid</option>
                    <option value="Dewormer">Dewormer</option>
                    <option value="IPV">IPV</option>
                    <option value="Antirabies/Verorab">Antirabies/Verorab</option>
                    <option value="COVID_19">COVID_19</option>
                        
                </select>

                <label for="vaccination_date">Vaccination Date</label>
                <input type="date" name="vaccination_date" id="vaccination_date" >

                <label for="vaccination_time">vaccination_time</label>
                <input type="time" name="vaccination_time" id="vaccination_time" >

                <label for="email">email</label>
                <input type="email" name="email" id="email" >

                <button type="Submit" name="Submit" id="Submit">Submit</button>
                <button type="Clear" name="Clear" id="Clear">Clear</button>
                </div>
            <div>
          </div>
    </form>
    </div>
    </div>
     
    <?php
    endif;
    ?>

</body>
</html>