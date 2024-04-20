<html>
<head>
    <title>Sickcall Form</title>
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

<main class="wrapper">
<nav class="progress-form">
<h1 style="color:white;">Sickcall Form</h1>
    <div class="progress">
    <div class="step active-step" data-title="Patient"></div>
    <div class="step" data-title="Disease"></div>
    <div class="step" data-title="Contact"></div>
    <div class="indicator"></div>
    </div>
</nav>

<form name="myForm" class="form-create-account" action="../form_process/sickcall_put.php" method="POST">
    <section class="step-of-form active-step-of-form">
    <h2>Step 1</h2>
    <h3>Patient <i>(Detalye ng Pasyente):</i></h3>

    <div class="row-input">
        <input type="text" class="text" name="patients_name" id="patients_name" required>
        <label for="patients_name" class="about-input">Patient’s Name:</label>
    </div>

    <div class="row-input">
        <input type="num" class="text" name="age" id="age" required>
        <label for="age" class="about-input">Age:</label>
    </div>
    
    <div class="row-input">
        <input type="text" class="text" name="address" id="address" required>
        <label for="address" class="about-input">Address:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="hospital" id="hospital" required>
        <label for="hospital" class="about-input">Hospital:</label>
    </div>

    <div class="row-input">
        <input type="num" class="text" name="room_number" id="room_number" required>
        <label for="room_number" class="about-input">Room Number:</label>
    </div>

    </section>

    <section class="step-of-form">
    <h2>Step 2</h2>
    <h3>Disease </h3>

    <div class="row-input">
        <input type="text" class="text" name="illness" id="illness" required>
        <label for="illness" class="about-input">Patient’s Disease: <i>(Sakit ng Pasyente)</i>:</label>
    </div>
    
    
    <div>
    <label for="can_eat	" class="about-input">Can Eat? <i>(Nakakakain)</i>:</label>
        <input type="radio" class="" name="can_eat" value="yes"> Yes <br>
        <input type="radio" class="" name="can_eat" value="no"> No <br>     
    </div>

    <div>
    <label for="can_speak" class="about-input">Can Speak? <i>(Nakakapagsalita)</i>:</label>
        <input type="radio" class="" name="can_speak" value="yes"> Yes <br>
        <input type="radio" class="" name="can_speak" value="no"> No <br>     
    </div>
   
    </section>

    <section class="step-of-form">

    <h2>Step 3</h2>
    <h3>Contact</h3>

    <div class="row-input">
        <input type="text" class="text" name="contact_person" id="contact_person" required>
        <label for="contact_person" class="about-input">Contact Person: </label>
    </div>

    <div class="row-input">
        <input type="tel" class="text" name="contact_number" id="contact_number" required>
        <label for="contact_number" class="about-input">Contact Number:</label>
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



