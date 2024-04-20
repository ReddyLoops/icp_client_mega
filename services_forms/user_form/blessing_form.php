<html>
<head>
    <title>Baptismal Form</title>
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
<h1 style="color:white;">Blessing Form</h1>
    <div class="progress">
    <div class="step active-step" data-title="Place"></div>
    <div class="step" data-title="Applicants"></div>
    <div class="step" data-title="Schedule"></div>
    <div class="indicator"></div>
    </div>
</nav>

<form name="myForm" class="form-create-account" action="../form_process/blessing_put.php" method="POST">
    <section class="step-of-form active-step-of-form">
    <h2>Step 1</h2>
    <h3>Place <i>(Lugar kung saan isasagawa):</i></h3>

    
    <div class="kinds-of-place">
    <div class="tale">
        <input type="checkbox" name="place" id="place1" value="house">
        <label for="place1" class="kind-of-place">
            <i class="fa-solid fa-house"></i>
            <h6>House</h6>
        </label>
    </div>
    <div class="tale">
        <input type="checkbox" name="place" id="place2" value="office">
        <label for="place2" class="kind-of-place">
            <i class="fa-solid fa-briefcase"></i>
            <h6>Office</h6>

        </label>
    </div>
    <div class="tale">
        <input type="checkbox" name="place" id="place3" value="store">
        <label for="place3" class="kind-of-place">
            <i class="fa-solid fa-store"></i>
            <h6>Store</h6>
        </label>
    </div>
    <div class="tale">
        <input type="checkbox" name="place" id="place4" value="warehouse">
        <label for="place4" class="kind-of-place">
            <i class="fa-solid fa-warehouse"></i>
            <h6>Warehouse</h6>
        </label>
    </div>
    </div>
    </section>

    <section class="step-of-form">
    <h2>Step 2</h2>
    <h3>Applicants</h3>

    <div class="row-input">
        <input type="text" class="text" name="owner_name" id="owner_name" required>
        <label for="owner_name" class="about-input">Name of Owner <i>(Pangalan ng May-ari)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="complete_address" id="complete_address" required>
        <label for="complete_address" class="about-input">Complete Address <i>(Kumpletong Lokasyon)</i>:</label>
    </div>

    <div class="row-input">
        <input type="text" class="text" name="contact_person" id="contact_person" required>
        <label for="contact_person" class="about-input">Contact Person:</label>
    </div>

    <div class="row-input">
        <input type="tel" class="text" name="contact_number" id="contact_number" required>
        <label for="contact_number" class="about-input">Contact Number:</label>
    </div>

    </section>

    <section class="step-of-form">

    <h2>Step 3</h2>
    <h3>Schedule</h3>

    <div class="row-input">
        <input type="date" class="text" name="date" id="date" required>
        <label for="date" class="about-input">Date <i>(Petsa ng Pagpapatala)</i>:</label>
    </div>

    <div class="row-input">
        <input type="time" class="text" name="time" id="time" required>
        <label for="time" class="about-input">Time <i>(Oras ng Pagpapatala)</i>:</label>
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



