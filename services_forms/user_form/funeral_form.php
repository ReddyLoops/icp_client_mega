<html>
<head>
    <title>Baptismal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .back_button {
    width: 100px;
    margin: 25px;
    padding:10px 25px 10px 25px;
    border: 2px solid rgb(37 141 54);
    border-radius: 30px;
    /* display: block; */
    text-decoration: none;
    color: green;
    text-align: center;

  }
  .back_button:hover {
    background-color: green;
    color: #FFFF;
  }
  .header_application {
    padding:35px 0 0 0;
  }
a {
  font-size:20px;
  font-weight:500;
}
</style>

<header class="header_application">
<a class="back_button" href="../apply.php"><i class="fa fa-arrow-circle-left" style="font-size:20px;"></i> Back</a>
<!-- <a href="../admin_tables/baptismal_table.php"><button type="button">View Data</button></a> -->
</header>
<body>

<main class="wrapper">
<nav class="progress-form">
<h1 style="color:white;">Funeral Form</h1>
    <div class="progress">
    <div class="step active-step" data-title="Deceased Details"></div>
    <div class="step" data-title="Status"></div>
    <div class="step" data-title="Location and Schedule"></div>
    <div class="step" data-title="Confirmation"></div>
    <div class="indicator"></div>
    </div>
</nav>

<form name="myForm" class="form-create-account" action="../form_process/funeral_put.php" method="POST">
    <section class="step-of-form active-step-of-form">
    <h2>Step 1</h2>
    <h3>Deceased Details</h3>

        <input type="hidden" name="book_number" id="book_number">
 

    <div class="row-input">
        <input type="text" class="text" name="deceased_fullname" id="deceased_fullname" required>
        <label for="deceased_fullname" class="about-input">Deceased Fullname <i>(Buong Pangalan ng Yumao)</i>:</label>
    </div>

    <div class="row-input">
        <input type="date" class="text" name="date_of_death" id="date_of_death" required>
        <label for="date_of_death" class="about-input">Date of Death <i>(Petsa ng Kamatayan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="cause_of_death" id="cause_of_death" required>
        <label for="cause_of_death" class="about-input">Cause of Death <i>(Sanhi ng Kamatayan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="number" class="text" name="age" id="age" required>
        <label for="age" class="about-input">Age<i>(Edad)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="current_address" id="current_address" required>
        <label for="current_address" class="about-input">Current Address <i>(Kasalukuyang Tirahan)</i>:</label>
    </div> 

    </section>

    <section class="step-of-form">
    <h2>Step 2</h2>
    <h3>Status</h3>

    <div class="row-input">
        <input type="text" class="text" name="civil_status" id="civil_status" required>
        <label for="civil_status" class="about-input">Civil Status <i>(Estado ng Buhay)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="mother_name" id="mother_name" required>
        <label for="mother_name" class="about-input">Mother Name <i>(Pangalan ng Ina)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="father_name" id="father_name" required>
        <label for="father_name" class="about-input">Father Name <i>(Pangalan ng Ama)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="spouse_name" placeholder="N/A ang lagay kung wala" id="spouse_name" required>
        <label for="spouse_name" class="about-input">Spouse Name <i>(Pangalan ng Asawa)</i>:</label>
    </div>

    <div class="row-input">
        <input type="number" min=0 class="text" name="number_of_child" id="number_of_child" required>
        <label for="number_of_child" class="about-input">Number of Child <i>(Bilang ng Anak)</i>:</label>
    </div>

    </section>

    <section class="step-of-form">
    <h2>Step 3</h2>
    <h2>Schedule and Location</h2>


    <div>
    <label for="has_sacrament" class="about-input">Have she/he ever received the sacrament of anointing with oil or viatico before death?<br><i>(Nakatanggap na bang sakramento ng pagpapahid ng langis o viatico bago namatay?)</i></label>
        <input type="radio" class="" name="has_sacrament" value="yes"> Yes <i>(Oo)</i><br>
        <input type="radio" class="" name="has_sacrament" value="no"> No <i>(Hindi)</i>    
    </div>

    <div>
    <label for="allowed_to_mass" class="about-input">Will there be a mass for the deceased?<i>(Dudulutan pa ba ng misa ang yumao?)</i>:</label>
        <input type="radio" class="" name="allowed_to_mass" value="yes"> Yes <i>(Oo)</i><br>
        <input type="radio" class="" name="allowed_to_mass" value="no"> No <i>(Hindi)</i>   
    </div>

    <b>Schedule and Location</b><i>(Kailan at Saan?)</i>

    <div class="row-input">
        <input type="date" class="text" name="mass_date" id="mass_date" required>
        <label for="mass_date" class="about-input">Mass Date <i>(Petsa ng Misa)</i>:</label>
    </div>

    <div class="row-input">
        <input type="time" class="text" name="mass_time" id="mass_time" required>
        <label for="mass_time" class="about-input">Mass Time <i>(Oras ng Misa)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="mass_location" id="mass_location" required>
        <label for="mass_location" class="about-input">Mass Location <i>(Lugar ng Pagmimisahan)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="burial_place" id="burial_place" required>
        <label for="burial_place" class="about-input">Burial Place <i>(Lugar ng Libingan)</i>:</label>
    </div>

    </section>

    <section class="step-of-form">

    <h2>Step 4</h2>
    <h3>Confirmation</h3>

    <div class="row-input">
        <input type="text" class="text" name="client_name" id="client_name" required>
        <label for="client_name" class="about-input">Name<i>(Pangalan ng Nagpalista)</i>:</label>
    </div>
    
    <div class="row-input">
        <input type="date" class="text" name="date" id="date" required>
        <label for="date" class="about-input">Date <i>(Petsa noong Nagpalista)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="relationship" id="relationship" required>
        <label for="relationship" class="about-input">Relationship <i>(Relasyon sa Yumao)</i>:</label>
    </div>

    <div class="row-input">
        <input type="tel" class="text" name="age" id="age" required>
        <label for="age" class="about-input">Age<i>(Edad)</i>:</label>
    </div>

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

