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
    


    <div class="row">
        <div class="col-6">
            <div class="w-100">
                <!--creating the booking form-->
                <form action="bookingconnect.php" method="post" style="margin-top: -90px;">
                    <center>
                        <h2 style=" padding:10px;"> TUNUKIWA BOOKING </h2>
                    </center>

                    <p>Book your upcoming immunizations here</p>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="FirstName"><b>First Name</b></label>
                            <input type="text" name='FirstName' id='FirstName' required placeholder="FirstName">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="Surname"><b>Surname</b></label>
                            <input type="text" name='Surname' id='Surname' required placeholder="Surname">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="DOB">Date of Birth</label>
                            <input type="date" name="DOB" id="DOB">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="Gender">Gender</label>
                            <select name='Gender' id='Gender' required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="bisexual">Bisexual</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style='width:50%;'>
                            <label for="HomeAddress"><b> Home Address</b></label>
                            <input type="text" name='HomeAddress' id='HomeAddress' required placeholder="Enter Home Address">
                        </div>

                        <div class="col" style='width:50%;'>
                            <label for="County">County</label>
                            <select name='County' id='County'>
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
                                <option value="UasinGishu">Uasin Gishu</option>
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
                        </div>


                        <label for="MedicalHistory">MedicalHistory</label>
                        <textarea id="MedicalHistory" name="MedicalHistory"></textarea>

                        <label for="Vaccines">Vaccines</label>
                        <select name='Vaccines' id='Vaccines' required>
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

                        <label for="Hospital">Hospital</label>
                        <select name='Hospital' id='Hospital' required>
                            <option value="Mombasa Referral Hospital">Mombasa Referral Hospital</option>
                            <option value="Kwale Referral Hospital">Kwale Referral Hospital</option>
                            <option value="Kilifi Referral Hospital">Kilifi Referral Hospital</option>
                            <option value="TanaRiver Referral Hospital">Tana Referral Hospital River</option>
                            <option value="Lamu Referral Hospital">Lamu Referral Hospital</option>
                            <option value="TaitaTaveta Referral Hospital">TaitaTaveta Referral Hospital</option>
                            <option value="Garissa Referral Hospital">Garissa Referral Hospital</option>
                            <option value="Wajir Referral Hospital">Wajir Referral Hospital</option>
                            <option value="Marsabit Referral Hospital">Marsabit Referral Hospital</option>
                            <option value="Mandera Referral Hospital">Mandera Referral Hospital</option>
                            <option value="Isiolo Referral Hospital">Isiolo Referral Hospital</option>
                            <option value="Meru Referral Hospital">Meru Referral Hospital</option>
                            <option value="Tharaka-Nithi Referral Hospital">Tharaka-Nithi Referral Hospital</option>
                            <option value="Embu Referral Hospital">Embu Referral Hospital</option>
                            <option value="Machakos Referral Hospital">Machakos Referral Hospital</option>
                            <option value="Makueni Referral Hospital">Makueni Referral Hospital</option>
                            <option value="Nyandarua Referral Hospital">Nyandarua Referral Hospital</option>
                            <option value="Nyeri Referral Hospital">Nyeri Referral Hospital</option>
                            <option value="Kirinyaga Referral Hospital">Kirinyaga Referral Hospital</option>
                            <option value="Muranga Referral Hospital">Muranga Referral Hospital</option>
                            <option value="Kiambu Referral Hospital">Kiambu Referral Hospital</option>
                            <option value="Turkana Referral Hospital">Turkana Referral Hospital</option>
                            <option value="WestPokot Referral Hospital">WestPokot Referral Hospital</option>
                            <option value="Samburu Referral Hospital">Samburu Referral Hospital</option>
                            <option value="Trans Referral Hospital-Nzoia"> Referral HospitalTrans-Nzoia</option>
                            <option value="UasinGishu Referral Hospital">UasinGishu Referral Hospital</option>
                            <option value="Elgeyo-Marakwet Referral Hospital">Elgeyo-Marakwet Referral Hospital</option>
                            <option value="Nandi Referral Hospital">Nandi Referral Hospital</option>
                            <option value="Baringo Referral Hospital">Baringo Referral Hospital</option>
                            <option value="Laikipia Referral Hospital">Laikipia Referral Hospital</option>
                            <option value="Nakuru Referral Hospital">Nakuru Referral Hospital</option>
                            <option value="Narok Referral Hospital">Narok Referral Hospital</option>
                            <option value="Kajiado Referral Hospital">Kajiado Referral Hospital</option>
                            <option value="Kericho Referral Hospital">Kericho Referral Hospital</option>
                            <option value="Bomet Referral Hospital">Bomet Referral Hospital</option>
                            <option value="Kakamega Referral Hospital">Kakamega Referral Hospital</option>
                            <option value="Vihiga Referral Hospital">Vihiga Referral Hospital</option>
                            <option value="Bungoma Referral Hospital">Bungoma Referral Hospital</option>
                            <option value="Busia Referral Hospital">Busia Referral Hospital</option>
                            <option value="Siaya Referral Hospital">Siaya Referral Hospital</option>
                            <option value="HomaBay Referral Hospital">HomaBay Referral Hospital</option>
                            <option value="Migori Referral Hospital">Migori Referral Hospital</option>
                            <option value="Kisii Referral Hospital">Kisii Referral Hospital</option>
                            <option value="Nyamira Referral Hospital">Nyamira Referral Hospital</option>
                            <option value="Nairobi Referral Hospital">Nairobi Referral Hospital</option>
                            <option value="Kilifi Referral Hospital">Kilifi Referral Hospital</option>
                        </select>

                        <div class="row">
                            <div class="col" style='width:50%;'>
                                <label for="VaccinationDate">Vaccination Date</label>
                                <input type="date" name="VaccinationDate" id="VaccinationDate" required>
                            </div>

                            <div class="col" style='width:50%;'>
                                <label for="VaccinationTime">VaccinationTime</label>
                                <input type="time" name="VaccinationTime" id="VaccinationTime" required>
                            </div>
                        </div>

                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" required>

                        <button class="btn-cta" type="submit">Submit</button>
                        <div class="col" style='width:50%;'>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-6">
            <div class="portal-img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6187605656282!2d34.558049515324186!3d0.5730590637368338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d68cc6ae7ccb%3A0x9e56d86a170a49af!2sBungoma%20County%20Referral%20Hospital!5e0!3m2!1sen!2ske!4v1652895401362!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</body>

</html>

