<?php 
    require_once "../connect.php";
    $is_customer_logged_in = isset($_SESSION['auth_login']);
?>
<?php
    if ( isset($_SESSION['auth_login']) ) {
		$auth = $_SESSION['auth_login'];
        $auth_full_name = $auth['first_name'] . $auth['last_name'];
}
?>
<html>

<head>
    <title>Request for Certificates</title>
    <link rel="stylesheet" href="styles/services.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MODAL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> -->
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script> -->
</head>

<style>
.modal-dialog {
    max-width: 1200px !important;
    margin: 1.75rem auto;
    font-family: "Montserrat";
}

.fa-question-circle {
    color: #888888;
}

.services {
    width: 90%;
    display: flex;
    flex-direction: column;
    margin-left: auto;
    margin-right: auto;

}

:root {
    --color-text: #616161;
    --color-text-btn: #ffffff;
    --color1: #11998e;
    --color2: #38ef7d;
}

.card {
    margin: 0;
    height: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    gap: 40px;
    background: transparent;
    border: 0px solid rgba(0,0,0,.125) !important;

    
}
@media only screen and (max-device-width: 480px){
        .section-b {
            max-width: 90%;
        }
        
        .card {
            flex-direction: column; /* Change flex direction to column for smaller screens */
            column-gap: 20px;
            height: auto; /* Adjust height as needed for smaller screens */
            display: grid;
            grid-template-columns: 40% 1fr;
            padding-left: 100px;
            justify-items: center;


            .card-wrap {
                width: 350px;
            }
            .card-wrap:hover {
                transform: scale(1);
            }
        }
    }

.card-wrap {
    width: 20%;
    height: 440px;
    background: #fff;
    border-radius: 20px;
    border: 5px solid #fff;
    overflow: hidden;
    color: var(--color-text);
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    cursor: pointer;
    justify-content: center;
    transition: all 0.2s ease-in-out;
    
}

.card-wrap:hover {
    transform: scale(1.1);
}

.card-header {
    padding: 0 !important;
    height: 200px;
    width: 100%;
    background: white;
    border-radius: 100% 0% 100% 0% / 0% 50% 50% 100% !important;
    /* display: grid; */
    place-items: center;
}

.card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 80%;
    margin: 0 auto;
}

.card-title {
    text-align: center;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 20px;
}

.card-text {
    height: 80px;
    text-align: left;
    font-size: 14px;
    margin-bottom: 20px;
}

.card-btn {
    position: block;
    border: none;
    width: 200px;
    border-radius: 100px;
    padding: 10px 20px;
    color: #fff;
    margin-bottom: 10px;
    text-transform: uppercase;
    background: linear-gradient(to left,
            var(--color1),
            var(--color2));
}

.card-header {
    background: linear-gradient(to bottom left,
            var(--color1),
            var(--color2));
}

.section-b {
    width: 95%;
    position: relative;
    margin: 20px 40px 90px 40px;
    background: url(image/banner2.jpg) no-repeat bottom center/cover;
    height: 250px;
    border-radius: 10px 10px 10px 10px;
    /* box-shadow: 20px 10px 20px 5px #eee; */
    padding-top: 100px;
}

.back_button {
display: block;
  width: 100px;
  margin-top: 10px;
  margin-left: 25px;
  padding:10px 25px 10px 25px;
  border: 2px solid rgb(246, 246, 246);
  border-radius: 30px;
  background-color: green;
  text-decoration: none;
  color: rgb(255, 255, 255);
  text-align: center;
  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.3),
  inset 0 -2px 3px rgba(0, 0, 0, 0.3);
transition: 0.5s;
}
.back_button:hover {
  background-color: rgb(255, 255, 255);
  color: green;
}
</style>
<a class="back_button" href="../index.php">
    <i class='bx bx-arrow-back' style='font-size:12px'></i>Back
</a>

<script>
    function goBack() {
        window.history.back();
    }
</script>
<section id="about" class="section-b"></section>

<div class="card">
    <div class="card-wrap">
        <img class="card-header" src="image/wedding.jpg">
        <div class="card-content">
            <h1 class="card-title">WEDDING</h1>
            <p class="card-text">Apply for marriage in church: Visit, fill a form, and submit details for a memorable
                ceremony.</p>
            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#exampleModal4">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
    </div>
    <div class="card-wrap">
        <img class="card-header" src="image/baptismal.jpg">
        <div class="card-content">
            <h1 class="card-title">BAPTISMAL</h1>
            <p class="card-text">Apply for baptism in church: Complete a form, submit details, and embrace a spiritual
                journey through this sacred initiation.</p>
            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#baptismalrequest">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
    </div>


    <div class="services">

        <!-- Wedding Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Wedding</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="form_process/wedding_cert.php" method="POST"
                            enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-row">
                                <div class="form-group col-md">
                                        <label for="date_of_marriage">Date of Marriage:</label>
                                        <input type="date" class="form-control" name="date_of_marriage" id="date_of_marriage"
                                            onchange="calculateMonths()" required max="<?= date('Y-m-d'); ?>">
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="place_of_marriage">Place of Marriage:</label>
                                        <input type="text" class="form-control" name="place_of_marriage" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="groom_fname">Groom First Name:</label>
                                        <input type="text" class="form-control" name="groom_fname" required>
                                    </div>

                                    <div class="form-group col-md">
                                        <label for="groom_mname">Groom Middle Name:</label>
                                        <input type="text" class="form-control" name="groom_mname" required>
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="groom_lname">Groom Last Name:</label>
                                        <input type="text" class="form-control" name="groom_lname" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md">
                                        <label for="bride_fname">Bride First Name:</label>
                                        <input type="text" class="form-control" name="bride_fname" required>
                                    </div>

                                    <div class="form-group col-md">
                                        <label for="bride_mname">Bride Middle Name:</label>
                                        <input type="text" class="form-control" name="bride_mname" required>
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="bride_lname">Bride Last Name:</label>
                                        <input type="text" class="form-control" name="bride_lname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="purpose">Purpose:</label>
                                        <input type="text" class="form-control" name="purpose" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="SUBMIT">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baptismal Modal -->
        <div class="modal fade" id="baptismalrequest" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Baptismal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="form_process/baptismal_cert.php" method="POST"
                            enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="fullname">Full Name:</label>
                                        <input type="text" class="form-control" name="fullname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="birthdate">Birth Date:</label>
                                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                                            onchange="calculateMonths()" required max="<?= date('Y-m-d'); ?>">
                                    </div>

                                    <div class="form-group col-md">
                                        <label for="birthplace">Birth Place:</label>
                                        <input type="text" class="form-control" name="birthplace" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="father_fullname">Father's Full Name:</label>
                                        <input type="text" class="form-control" name="father_fullname" required>
                                    </div>

                                    <div class="form-group col-md">
                                        <label for="mother_maidenname">Mother's Maiden Name:</label>
                                        <input type="text" class="form-control" name="mother_maidenname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="purpose">Purpose:</label>
                                        <input type="text" class="form-control" name="purpose" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="SUBMIT">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</html>
<script>
function calculateMonths() {
    var birthdate = document.getElementById('birthdate').value;
    if (birthdate) {
        var currentDate = new Date();
        var birthDate = new Date(birthdate);

        var ageInMonths = (currentDate.getFullYear() - birthDate.getFullYear()) * 12 +
            (currentDate.getMonth() - birthDate.getMonth());
        document.getElementById('months').value = ageInMonths;
    }
}
var today = new Date();
var yyyy = today.getFullYear();
var mm = String(today.getMonth() + 1).padStart(2, '0');
var dd = String(today.getDate()).padStart(2, '0');

var maxDate = yyyy + '-' + mm + '-' + dd;
document.getElementById('birthdate').max = maxDate;

function validateAge(inputId) {
    var ageInput = document.getElementById(inputId);
    var enteredAge = parseInt(ageInput.value, 10);

    if (enteredAge < 16) {
        alert("Age must be 16 or above.");
        ageInput.value = "";
    }
}
document.getElementById('marriage').addEventListener('change', function() {
    var marriageValue = this.value;
    var marriageLocationInput = document.getElementById('marriageLocation');
    marriageLocationInput.disabled = (marriageValue === 'hindi');
    // Clear the input value when disabled
    if (marriageLocationInput.disabled) {
        marriageLocationInput.value = '';
    }
});

function handlePlace() {
    var placeSelect = document.getElementById("place");
    var otherPlaceContainer = document.getElementById("otherPlaceContainer");
    var otherPlaceInput = document.getElementById("otherPlace");

    if (placeSelect.value === "Other") {
        otherPlaceContainer.style.display = "block";
        otherPlaceInput.required = true;
    } else {
        otherPlaceContainer.style.display = "none";
        otherPlaceInput.required = false;
    }
}


$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})


function handleCivilStatus() {
    var civilStatus = document.getElementById("civil_status").value;
    var spouseNameInput = document.getElementById("spouse_name");
    var numberOfChildInput = document.getElementById("number_of_child");

    if (civilStatus === "Single") {
        spouseNameInput.value = "";
        numberOfChildInput.value = "";
        spouseNameInput.disabled = true;
        numberOfChildInput.disabled = true;
    } else {
        spouseNameInput.disabled = false;
        numberOfChildInput.disabled = false;
    }
}
</script>