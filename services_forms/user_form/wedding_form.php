<html>
<head>
    <title>Wedding Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header class="header_application">
<a class="back_button" href="../apply.php"><i class="fa fa-arrow-circle-left" style="font-size:20px;"></i> Back</a>
</header>
<body>
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
<main class="wrapper">
<nav class="progress-form">
<h1 style="color:white;">Wedding Form</h1>
    <div class="progress">
    <div class="step active-step" data-title="Documents"></div>
    <div class="step" data-title="Attended"></div>
    <div class="step" data-title="Fees"></div>
    <div class="indicator"></div>
    </div>
</nav>

<form name="myForm" class="form-create-account" action="../form_process/wedding_put.php" method="POST">
    <section class="step-of-form active-step-of-form">
    <h2>Step 1</h2>
    <h3>Documents <i>(Dokumento ng Ikakaksal):</i></h3>

    <div>
    <label for="copy_marriage_certificate" class="about-input">Marriage License <i>(Lisensya ng Kasal)</i>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    <label for="copy_marriage_certificate" class="about-input">Copy of PSA CENOMAR <i>(Kopya ng PSA CENOMAR)</i>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    <label for="copy_marriage_certificate" class="about-input">Baptismal Certificate <strong>for Marriage Purpose</strong>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    </div>
    <label for="copy_marriage_certificate" class="about-input">Confirmation Certificate <strong>for Marriage Purpose</strong>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    <label for="copy_marriage_certificate" class="about-input">Copy of PSA Birth Certificate<i>(Kopya ng PSA Birth Certificate)</i>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    <label for="copy_marriage_certificate" class="about-input">ID Picture of Bride<i>(use white background)</i>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>
    <label for="copy_marriage_certificate" class="about-input">ID Picture of Groom<i>(use white background)</i>:</label>
        <br>
        <input class="upload" type="file" id="copy_marriage_certificate" name="copy_marriage_certificate" accept="image/*">
    </div>

    </section>

    <section class="step-of-form">
    <h2>Step 2</h2>
    <h3>MGA KINAKAILANGANG DALUHAN</h3>
<p>(to be scheduled by Parish Secretary upon submission of all required documents except for entourage and name of sponsors)</p>


 <ul>
    <li>Dulog </li>
    <li>Pre-Cana Seminar  </li>
    <li>Mass and Confession </li>
    <li>Baptism and/or Confirmation </li>
    <li>Checking of Contract </li>
 </ul>
   
    </section>

    <section class="step-of-form">

    <h2>Step 3</h2>
    <h3>Fees</h3>

    <strong>Marriage Fee: </strong>
    <p>P 2,250.00</p>
    <strong>INCLUSION: </strong>
    <p>Mass; Electricity; Marriage Contract Registration Fee</p>
 <style>
    .optional{
        display: flex;
    /* margin: 15px auto 0 auto; */
    /* width: 95%; */
    text-align: center;
    }
 </style>
    <label > OPTIONAL:</label>
        <input type="checkbox" class="" name="inclusion" value="Choir"> Choir - P500.00 <br>
        <input type="checkbox" class="" name="inclusion" value="Carpet"> Carpet - P500.00<br>     
        <input type="checkbox" class="" name="inclusion" value="Candle"> Candle - P500.00 <br>     
    </div>
    </section>
    
    <div>
    



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



