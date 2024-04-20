<html>
<head>
    <title>Baptismal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

</head>
<style>

</style>

<header class="header_application">
<a class="back_button" href="../apply.php"><i class="fa fa-arrow-circle-left" style="font-size:20px;"></i> Back</a>
</header>
<body>

<main class="wrapper">
<nav class="progress-form">
    <h1 style="color:white;">Baptismal Form</h1>
    <div class="progress">
        <div class="step active-step" data-title="Baptized Child"></div>
        <div class="step" data-title="Parents"></div>
        <div class="step" data-title="Godparents"></div>
        <div class="step" data-title="Confirmation"></div><div class="indicator"></div>
    </div>
</nav>


<form name="myForm" class="form-create-account" action="../form_process/baptismal_put.php" method="POST">
    <section class="step-of-form active-step-of-form">
    <h2>Step 1</h2>
    <h3>Baptized Child</h3>

    <div class="row-input">
        <input type="text" class="text" name="child_first_name" id="child_first_name" required>
        <label for="first-name" class="about-input">First Name <i>(Pangalan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="mother_maiden_lastname" id="mother_maiden_lastname" required>
        <label for="mother_maiden_lastname" class="about-input">Middle Name <i>(Apelyido ng Ina noong Dalaga)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="father_lastname" id="father_lastname" required>
        <label for="father_lastname" class="about-input">Last Name <i>(Apelyido ng Ama)</i>:</label>
    </div>

    <div class="row-input">
        <input type="number" class="text" name="months" id="months" required>
        <label for="months" class="about-input">Months <i>(Ilang Buwan na ang Bata)</i>:</label>
    </div>

    <div class="row-input">
        <input type="date" class="text" name="birthdate" id="date" required>
        <label for="birthdate" class="about-input">Date of Birth <i>(Petsa ng Kapanganakan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="birthplace" id="birthplace" required>
        <label for="birthplace" class="about-input">Birthplace <i>(Lugar ng Kapanganakan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="date" class="text" name="baptismal_date" id="date" required>
        <label for="baptismal_date" class="about-input">Date of Baptismal <i>(Petsa ng Binyag)</i>:</label>
    </div>

    </section>
    <section class="step-of-form">
    <h2>Step 2</h2>
    <h3>Parents</h3>

    <div class="row-input">
        <input type="text" class="text" name="father_name" id="father_name" required>
        <label for="father_name" class="about-input">Father <i>(Pangalan ng Ama)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="father_origin_place" id="father_origin_place" required>
        <label for="father_origin_place" class="about-input">Origin Place <i>(Lugar na Pinagmulan ng Ama)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="mother_maiden_fullname" id="mother_maiden_fullname" required>
        <label for="mother_maiden_fullname" class="about-input">Mother Maiden Name <i>(Pangalan ng Ina sa Pagkadalaga)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="mother_origin_place" id="mother_origin_place" required>
        <label for="mother_origin_place" class="about-input">Origin Place <i>(Lugar na Pinagmulan ng Ina)</i>:</label>
    </div>

    <div>
    <label for="marriage" class="about-input">Married <i>(Kasal o Hindi)</i>:</label>
        <input type="radio" class="" name="marriage" value="yes"> Yes <i>(Kasal)</i><br>
        <input type="radio" class="" name="marriage" value="no"> No <i>(Hindi)</i>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="marriage_location" id="marriage_location" placeholder=" Iwang blangko kung di kasal" required>
        <label for="marriage_location" class="about-input">Marriage Location <i>(San kinasal?)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="current_address" id="current_address" required>
        <label for="current_address" class="about-input">Current Address <i>(Kasalukuyang Tirahan)</i>:</label>
    </div>

    </section>

    <section class="step-of-form">
    <h2>Step 3</h2>
    <h3>Godparents <i>(Bawal ang palayaw at kailangang 16 anyos pataas lamang at binyagang Katoliko)</i></h3>

    <div class="row-input">
        <input type="text" class="text" name="godfather" id="godfather" required>
        <label for="godfather" class="about-input">Godfather<i>(Ninong)</i>:</label>
    </div>

    <div class="row-input">
        <input type="number" class="text" name="godfather_age" id="godfather_age" required>
        <label for="godfather_age" class="about-input">Age<i>(Edad)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="godfather_religion" id="godfather_religion" required>
        <label for="godfather_religion" class="about-input">Religion<i>(Relihiyon)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="godfather_address" id="godfather_address" required>
        <label for="godfather_address" class="about-input">Address<i>(Tirahan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="godmother" id="godmother" required>
        <label for="godmother" class="about-input">Godmother<i>(Ninang)</i>:</label>
    </div>

    <div class="row-input">
        <input type="number" class="text" name="godmother_age" id="godmother_age" required>
        <label for="godmother_age" class="about-input">Age<i>(Edad)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="godmother_religion" id="godmother_religion" required>
        <label for="godmother_religion" class="about-input">Religion<i>(Relihiyon)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="godmother_address" id="godmother_address" required>
        <label for="godmother_address" class="about-input">Address<i>(Tirahan)</i>:</label>
    </div>

    </section>


    <section class="step-of-form">

    <h2>Step 4</h2>
    <h3>Confirmation</h3>

    <div class="row-input">
        <input type="text" class="text" name="client_name" id="client_name" required>
        <label for="client_name" class="about-input">Name<i>(Pangalan ng Nagpalista)</i>:</label>
    </div>

    <div>
    <label for="client_relationship" class="about-input">Relationship <i>(Relasyon sa Bibinyagan)</i>:</label>
        <input type="radio" class="" name="client_relationship" value="mother"> Mother <i>(Ina)</i><br>
        <input type="radio" class="" name="client_relationship" value="father"> Father <i>(Ama)</i><br>
        <input type="radio" class="" name="client_relationship" value="tito/tita"> Uncle or Antie <i>(Tito o Tita)</i><br>
        <input type="radio" class="" name="client_relationship" value="lolo/lola"> Grandmother or Grandfather <i>(Lolo o Lola)</i><br>
        <input type="radio" class="" name="client_relationship" value="cousin"> Cousin <i>(Pinsan)</i>        
    </div>

    <div class="row-input">
        <input type="tel" class="text" name="client_contact_number" id="client_contact_number" required>
        <label for="client_contact_number" class="about-input">Mobile Number:</label>
    </div>
    
    <div class="row-input">
        <input type="date" class="text" name="date" id="date" required>
        <label for="date" class="about-input">Date <i>(Petsa ng Pagpapatala)</i>:</label>
    </div>

    <div class="row-input">
        <input type="time" class="text" name="time" id="time" required>
        <label for="time" class="about-input">Time <i>(Oras ng Pagpapatala)</i>:</label>
    </div>
<style>
    .upload{
        font-family: "Montserrat";
        border: solid 1px black;
        display: block;
        /* width: 100%; */
        padding: 3% 2%;
        border-radius: 8px;
        outline: none;
        transition: 0.5s;
    }
</style>
    <div>
    <label for="copy_birth_certificate" class="about-input">Copy Birth Certificate <i>(Kopya ng Birth Certificate)</i>:</label>
        <!-- <input type="radio" class="" name="copy_birth_certificate" value="have"> Have <i>(Meron)</i><br>
        <input type="radio" class="" name="copy_birth_certificate" value="none"> None <i>(Wala)</i>     -->
        <br>
        <input class="upload" type="file" id="copy_birth_certificate" name="copy_birth_certificate" accept="image/*">

    </div>

    <div>
    <label for="copy_marriage_certificate" class="about-input">Copy Marriage Certificate <i>(Kopya ng Marriage Certificate)</i>:</label>
        <!-- <input type="radio" class="" name="copy_marriage_certificate" value="have"> Have <i>(Meron)</i><br>
        <input type="radio" class="" name="copy_marriage_certificate" value="none"> None <i>(Wala)</i>     -->
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>

    <br><i>Ito ay bilang pagpapatunay na ang lahat ng nakatala o nakasulat dito ay pawang sinang-ayunan, nilagdaan at pinag-aralang mabuti ng tang nagpalista na anumang pagkakamali ay walang pananagutan ang opisina.</i>

    </section>
    <div class="btns">
    <input type="button" value="BACK" class="back" disabled>
    <input type="button" value="NEXT" class="next">
    <input type="submit" value="SUBMIT" class="submit hidden-btn">
    </div>
</form>
</main>
</body>
<script src="../js/form.js"></script>
</html>

