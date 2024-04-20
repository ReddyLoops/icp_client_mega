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
    <title>Apply for Services</title>
    <!-- <link rel="stylesheet" href="styles/services.css"> -->
    <link rel="stylesheet" href="styles/apply-mobile.css">
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
    margin: 0 auto;
    height: 0;
    width: 95%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
    gap: 20px;
    background: transparent;
    border: 0px solid rgba(0, 0, 0, .125) !important;


}

@media only screen and (max-device-width: 480px) {
    .section-b {
        max-width: 90%;
    }

    .card {
        flex-direction: column;
        /* Change flex direction to column for smaller screens */
        column-gap: 20px;
        height: auto;
        /* Adjust height as needed for smaller screens */
        display: grid;
        grid-template-columns: 40% 1fr;
        padding-left: 100px;
        justify-items: center;


        .card-wrap {
            width: 100%;
            /* Full width for smaller screens */
            margin-bottom: 20px;
        }

        .card-wrap:hover {
            transform: scale(1);
        }
    }

}

.card-wrap {
    width: calc(16.66% - 20px);
    height: 440px;
    background: #fff;
    border-radius: 20px;
    border: 5px solid #fff;
    overflow: hidden;
    color: var(--color-text);
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    /* cursor: pointer; */
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
    margin: 10px 0;
    text-transform: uppercase;
    background: linear-gradient(to left,
            var(--color1),
            var(--color2));
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
    color: black !important;
    font-size: 18px !important;
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
    background: url('image/banner1.jpg') no-repeat bottom center/cover;
    height: 250px;
    border-radius: 10px 10px 10px 10px;
    /* box-shadow: 20px 10px 20px 5px #eee; */
    padding-top: 100px;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.back_button {
    display: block;
    width: 100px;
    margin-top: 10px;
    margin-left: 25px;
    padding: 10px 25px 10px 25px;
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
<!-- SERVICES CARD -->
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
        <img class="card-header" src="image/mass.jpg">
        <div class="card-content">
            <h1 class="card-title">MASS</h1>
            <p class="card-text">Apply for Mass: Embrace a sacred journey of faith from the comfort of your home. Apply
                online for a spiritual connection.</p>

            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#massModal">Apply Now</button>
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
            <button class="card-btn" data-toggle="modal" data-target="#exampleModal">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
    </div>

    <div class="card-wrap">
        <img class="card-header" src="image/funeral.jpg">
        <div class="card-content">
            <h1 class="card-title">FUNERAL</h1>
            <p class="card-text">Apply for a church funeral ceremony: Fill a form, provide details, and honor the
                departed with a dignified and spiritual farewell.</p>
            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#exampleModal1">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
    </div>

    <div class="card-wrap">
        <img class="card-header" src="image/blessing.jpg">
        <div class="card-content">
            <h1 class="card-title">BLESSING</h1>
            <p class="card-text">Apply for a church blessing: Complete a form, share details, and seek divine favor for
                your journey through a sacred ritual.</p>
            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#exampleModal2">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
    </div>

    <div class="card-wrap">

        <img class="card-header" src="image/sickcall.jpg">

        <div class="card-content">
            <h1 class="card-title">SICKCALL</h1>
            <p class="card-text">Apply for a church sick call: Fill a form, provide details, and request spiritual
                support for healing and comfort.</p>
            <?php if ($is_customer_logged_in) { ?>
            <button class="card-btn" data-toggle="modal" data-target="#exampleModal3">Apply Now</button>
            <?php } else { ?>
            <a href="../customer/login.php"><button class="card-btn">Apply Now</button></a>
            <?php } ?>
        </div>
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
                    <form method="post" action="form_process/wedding_put.php" method="POST"
                        enctype="multipart/form-data">
                        <fieldset>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="groom_name">Groom's Name:</label>
                                    <input type="text" class="form-control" name="groom_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="groom_age">Groom's Age:</label>
                                    <input type="number" class="form-control" name="groom_age" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="groom_father_name">Groom's Father Name:</label>
                                    <input type="text" class="form-control" name="groom_father_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="groom_mother_name">Groom's Mother Name:</label>
                                    <input type="text" class="form-control" name="groom_mother_name" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="bride_name">Bride's Name:</label>
                                    <input type="text" class="form-control" name="bride_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="bride_age">Bride's Age:</label>
                                    <input type="number" class="form-control" name="bride_age" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="bride_father_name">Bride's Father Name:</label>
                                    <input type="text" class="form-control" name="bride_father_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="bride_mother_name">Bride's Mother Name:</label>
                                    <input type="text" class="form-control" name="bride_mother_name" required>

                                </div>
                            </div>

                            <div>
                                <hr>
                                <h4>MGA DOKUMENTO SA KASAL</h4>
                                <br>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="psa_cenomar_photocopy_groom">Groom's PSA Cenomar Photocopy:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="psa_cenomar_photocopy_groom"
                                         required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="psa_cenomar_photocopy_bride">Bride's PSA Cenomar Photocopy:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="psa_cenomar_photocopy_bride"
                                         required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="baptismal_certificates_groom">Groom's Baptismal Certificates:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="baptismal_certificates_groom"
                                         required>
                                </div>
                                <div class="form-group col-md">
                                    <label for="baptismal_certificates_bride">Bride's Baptismal Certificates:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="baptismal_certificates_bride"
                                         required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="psa_birth_certificate_photocopy_groom">Groom's PSA Birth
                                        Certificate:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="psa_birth_certificate_photocopy_groom"
                                         required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="psa_birth_certificate_photocopy_bride">Bride's PSA Birth
                                        Certificate:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="psa_birth_certificate_photocopy_bride"
                                         required>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="id_picture_groom">Groom's ID Picture:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="The background color should be white, and the size should be 2 by 2 inches."></i>
                                    <input type="file" class="form-control" name="id_picture_groom" 
                                        required>
                                </div>
                                <div class="form-group col-md">
                                    <label for="id_picture_bride">Bride's ID Picture:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="The background color should be white, and the size should be 2 by 2 inches."></i>
                                    <input type="file" class="form-control" name="id_picture_bride" 
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="confirmation_certificates">Confirmation Certificates:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="Choose an image:(JPEG,PNG,GIF)"></i>
                                    <input type="file" class="form-control" name="confirmation_certificates"
                                         required>
                                </div>
                                <div class="form-group col-md">
                                    <label for="computerized_name_of_sponsors">Computerized Name of
                                        Sponsors/Entourage:</label>
                                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right"
                                        title="A list of sponsors in PDF form, that includes the entire entourage. These are the bridesmaids, groomsmen, and godparents."></i>
                                    <input type="file" class="form-control" name="computerized_name_of_sponsors"
                                        accept="application/pdf" required>
                                </div>


                            </div>
                            <br>
                            <div>
                                <hr>
                                <h4>MGA KINAKAILANGANG DALUHAN </h4>
                                <br><i> (to be scheduled by Parish Secretary
                                    upon
                                    submission of all required documents except for entourage and name of sponsors)</i>

                                <ul>
                                    <li>Dulog</li>
                                    <li>Pre-Cana Seminar</li>
                                    <li>Mass and Confession</li>
                                    <li>Baptism and/or Confirmation</li>
                                    <li>Checking of Contract</li>
                                </ul>
                            </div>
                            <div>
                                <hr>
                                <h4>FEES</h4>
                                <br>
                                <i>(to be pay and process over the counter)</i>

                                <ul>
                                    <strong>Marriage Fee: ₱2,250.00</strong><br>
                                    <b>INCLUSION</b>
                                    <li>Mass</li>
                                    <li>Electricity</li>
                                    <li>Marriage Contract Registration Fee</li>
                                    <b>OPTIONAL:</b>
                                    <li>Choir ₱500.00</li>
                                    <li>Carpet ₱500.00</li>
                                    <li>Candle ₱400.00</li>
                                </ul>
                            </div>
                        </fieldset>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- mass modal -->
    <div class="modal fade" id="massModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Mass</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="form_process/mass_put.php" method="POST">
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="purpose">Purpose:</label>
                                    <div class="input-group">
                                    <select class="form-control" name="purpose" id="purpose" required
                                            onchange="handlePurpose()">
                                            <option value="For Thanks Giving">For Thanks Giving</option>
                                            <option value="For Birthdays">For Birthdays</option>
                                            <option value="For the Soul">For the Soul</option>
                                            <option value="For Healing">For Healing</option>
                                            <option value="Special Intention">Special Intention</option>
                                            <option value="Purpose">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md" id="otherPurposeContainer" style="display: none;">
                                    <label for="otherPurpose">Others, Please Specify:</label>
                                    <input type="text" class="form-control" name="otherPurpose" id="otherPurposee">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="date">Date:</label>
                                    <?php
                                    date_default_timezone_set('Asia/Manila');
                                    $currentDate = date('Y-m-d');
                                ?>
                                    <input type="date" class="form-control" name="date"
                                        min="<?php echo $currentDate; ?>" required>
                                </div>
                            </div>

                        </fieldset>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Baptismal Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Baptismal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="form_process/baptismal_put.php" method="POST"
                        enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="child_first_name">Pangalan:</label>
                                    <input type="text" class="form-control" name="child_first_name"
                                        title="Please enter a the name of the child" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="mother_maiden_lastname">Apelyido ng Ina (Dalaga):</label>
                                    <input type="text" class="form-control" name="mother_maiden_lastname" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="father_lastname">Apelyido ng Ama:</label>
                                    <input type="text" class="form-control" name="father_lastname" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="birthdate">Petsa ng Kapanganakan:</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate"
                                        onchange="calculateMonths()" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="months">Edad(Buwan):</label>
                                    <input type="text" class="form-control" name="months" id="months" readonly required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="birthplace">Lugar ng Kapanganakan:</label>
                                    <input type="text" class="form-control" name="birthplace" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="baptismal_date">Petsa ng Binyag:</label>
                                    <?php
                                date_default_timezone_set('Asia/Manila');
                                $currentDate = date('Y-m-d');
                                ?>
                                    <input type="date" class="form-control" name="baptismal_date"
                                        min="<?php echo $currentDate; ?>" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="marriage">Kasal:</label>
                                    <select class="form-control" name="marriage" id="marriage" required>
                                        <option value="hindi">Hindi</option>
                                        <option value="oo">Oo</option>
                                    </select>
                                </div>

                                <div class="form-group col-md">
                                    <label for="marriage_location">Saan Kinasal:</label>
                                    <input type="text" class="form-control" name="marriage_location"
                                        id="marriageLocation" required disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="father_name">Pangalan ng Ama:</label>
                                    <input type="text" class="form-control" name="father_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="father_origin_place">Lugar na Pinagmulan ng Ama:</label>
                                    <input type="text" class="form-control" name="father_origin_place" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="mother_maiden_fullname">Pangalan ng Ina sa Pagkadalaga:</label>
                                    <input type="text" class="form-control" name="mother_maiden_fullname" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="mother_origin_place">Lugar na Pinagmulan ng Ina:</label>
                                    <input type="text" class="form-control" name="mother_origin_place" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="current_address">Kasalukuyang Tirahan:</label>
                                    <input type="text" class="form-control" name="current_address" required>
                                </div>
                            </div>
                            <div>
                                <hr>
                                <h4>NINONG AT NINANG</h4>
                                <i>(Bawal ang palayaw at kailangan 16 anyos pataas lamang at
                                    binyagang
                                    katoliko)</i>

                            </div> <br>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="godfather">Ninong:</label>
                                    <input type="text" class="form-control" name="godfather" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godfather_age">Edad:</label>
                                    <input type="number" class="form-control" name="godfather_age" min="16" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godfather_religion">Relihiyon:</label>
                                    <select class="form-control" name="godfather_religion" required>
                                        <option value="Roman Catholic">Roman Catholic</option>
                                    </select>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godfather_address">Tirahan:</label>
                                    <input type="text" class="form-control" name="godfather_address" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="godmother">Ninang:</label>
                                    <input type="text" class="form-control" name="godmother" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godmother_age">Edad:</label>
                                    <input type="number" class="form-control" name="godmother_age" min="16" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godmother_religion">Relihiyon:</label>
                                    <select class="form-control" name="godmother_religion" required>
                                        <option value="Roman Catholic">Roman Catholic</option>
                                    </select>
                                </div>

                                <div class="form-group col-md">
                                    <label for="godmother_address">Tirahan:</label>
                                    <input type="text" class="form-control" name="godmother_address" required>
                                </div>
                            </div>

                            <hr>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="client_name">Pangalan ng nagpalista:</label>
                                    <input type="text" class="form-control" name="client_name" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="client_relationship">Relasyon ng nagpalista:</label>
                                    <input type="text" class="form-control" name="client_relationship" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="client_contact_number">Contact number:</label>
                                    <input type="text" class="form-control" name="client_contact_number" maxlength="11"
                                        pattern="[0-9]{11}" title="Please enter a valid 11-digit contact number"
                                        required>
                                </div>
                            </div>


                            <h4>DOCUMENTS</h4>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="copy_birth_certificate">Kopya ng Birth certificate:</label>
                                    <input type="file" class="form-control" name="copy_birth_certificate" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="copy_marriage_certificate">Kopya ng Marriage certificate:</label>
                                    <input type="file" class="form-control" name="copy_marriage_certificate" required>
                                </div>
                            </div>
                        </fieldset>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- Funeral Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Funeral</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="form_process/funeral_put.php" method="POST">
                        <fieldset>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="deceased_fullname">Deceased Full Name:</label>
                                    <input type="text" class="form-control" name="deceased_fullname" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="age">Age:</label>
                                    <input type="number" class="form-control" name="age">
                                </div>


                                <div class="form-group col-md">
                                    <label for="date_of_death">Date of Death:</label>
                                    <input type="date" class="form-control" name="date_of_death" id="date_of_death"
                                        onchange="calculateMonths()" required max="<?= date('Y-m-d'); ?>">
                                </div>


                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="civil_status">Civil Status:</label>
                                    <select class="form-control" name="civil_status" id="civil_status" required
                                        onchange="handleCivilStatus()">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>

                                <div class="form-group col-md">
                                    <label for="spouse_name">Spouse Name:</label>
                                    <input type="text" class="form-control" name="spouse_name" id="spouse_name"
                                        disabled>
                                </div>

                                <div class="form-group col-md">
                                    <label for="number_of_child">Number of Children:</label>
                                    <input type="number" class="form-control" name="number_of_child"
                                        id="number_of_child" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="mother_name">Mother's Name:</label>
                                    <input type="text" class="form-control" name="mother_name">
                                </div>

                                <div class="form-group col-md">
                                    <label for="father_name">Father's Name:</label>
                                    <input type="text" class="form-control" name="father_name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="current_address">Current Address:</label>
                                    <input type="text" class="form-control" name="current_address">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="cause_of_death">Cause of Death:</label>
                                    <input type="text" class="form-control" name="cause_of_death">
                                </div>

                                <div class="form-group col-md">
                                    <label for="has_sacrament">Has Sacrament:</label>
                                    <select class="form-control" name="has_sacrament" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md">
                                    <label for="client_name">Client Name:</label>
                                    <input type="text" class="form-control" name="client_name">
                                </div>

                                <div class="form-group col-md">
                                    <label for="relationship">Relationship:</label>
                                    <input type="text" class="form-control" name="relationship">
                                </div>

                                <div class="form-group col-md">
                                    <label for="contact_number">Contact number:</label>
                                    <input type="text" class="form-control" name="contact_number" maxlength="11"
                                        pattern="[0-9]{11}" title="Please enter a valid 11-digit contact number"
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="allowed_to_mass">Allowed to Mass:</label>
                                    <select class="form-control" name="allowed_to_mass" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>


                                <div class="form-group col-md">
                                    <label for="mass_location">Mass Location:</label>
                                    <input type="text" class="form-control" name="mass_location">
                                </div>

                                <div class="form-group col-md">
                                    <label for="mass_time">Mass Time:</label>
                                    <input type="time" class="form-control" name="mass_time">
                                </div>

                                <div class="form-group col-md">
                                    <label for="mass_date">Mass Date:</label>
                                    <input type="date" class="form-control" name="mass_date">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="burial_place">Burial Place:</label>
                                    <input type="text" class="form-control" name="burial_place">
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Blessing Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Blessing</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="form_process/blessing_put.php" method="POST">
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="place">Place:</label>
                                    <div class="input-group">
                                        <select class="form-control" name="place" id="place" required
                                            onchange="handlePlace()">
                                            <option value="House">House</option>
                                            <option value="Store">Store</option>
                                            <option value="Warehouse">Warehouse</option>
                                            <option value="Office">Office</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md" id="otherPlaceContainer" style="display: none;">
                                    <label for="otherPlace">Others, Please Specify:</label>
                                    <input type="text" class="form-control" name="otherPlace" id="otherPlace">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="owner_name">Owner Name:</label>
                                    <input type="text" class="form-control" name="owner_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="complete_address">Complete Address:</label>
                                    <input type="text" class="form-control" name="complete_address" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="contact_person">Contact Person:</label>
                                    <input type="text" class="form-control" name="contact_person" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" name="contact_number" maxlength="11"
                                        pattern="[0-9]{11}" title="Please enter a valid 11-digit contact number"
                                        required>
                                </div>


                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="date">Date:</label>
                                    <?php
                                    date_default_timezone_set('Asia/Manila');
                                    $currentDate = date('Y-m-d');
                                ?>
                                    <input type="date" class="form-control" name="date"
                                        min="<?php echo $currentDate; ?>" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="time">Time:</label>
                                    <input type="time" class="form-control" name="time" required>
                                </div>
                            </div>

                        </fieldset>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Sickcall Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Sickcall</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="form_process/sickcall_put.php" method="POST">
                        <fieldset>

                            <!-- ... (Other code remains unchanged) ... -->

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="patients_name">Patient's Name:</label>
                                    <input type="text" class="form-control" name="patients_name" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="age">Age:</label>
                                    <input type="number" class="form-control" name="age" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="hospital">Hospital:</label>
                                    <input type="text" class="form-control" name="hospital" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="room_number">Room Number:</label>
                                    <input type="number" class="form-control" name="room_number" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="illness">Illness:</label>
                                    <input type="text" class="form-control" name="illness" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="can_eat">Can Eat:</label>
                                    <select class="form-control" name="can_eat" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-md">
                                    <label for="can_speak">Can Speak:</label>
                                    <select class="form-control" name="can_speak" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="contact_person">Contact Person:</label>
                                    <input type="text" class="form-control" name="contact_person" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" name="contact_number" maxlength="11"
                                        pattern="[0-9]{11}" title="Please enter a valid 11-digit contact number"
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="date">Date:</label>
                                    <?php
                                    date_default_timezone_set('Asia/Manila');
                                    $currentDate = date('Y-m-d');
                                ?>
                                    <input type="date" class="form-control" name="date"
                                        min="<?php echo $currentDate; ?>" required>
                                </div>

                                <div class="form-group col-md">
                                    <label for="time">Time:</label>
                                    <input type="time" class="form-control" name="time" required>
                                </div>
                            </div>

                        </fieldset>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="SUBMIT">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
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
function handlePurpose() {
    var purposeSelect = document.getElementById("purpose");
    var otherPurposeContainer = document.getElementById("otherPurposeContainer");
    var otherPurposeInput = document.getElementById("otherPurposee");

    if (purposeSelect.value === "Purpose") {
        otherPurposeContainer.style.display = "block";
        otherPurposeInput.required = true;
    } else {
        otherPurposeContainer.style.display = "none";
        otherPurposeInput.required = false;
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

document.getElementById('copy_birth_certificate').addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    document.getElementById('fileLabel').innerText = fileName;
});
document.getElementById('copy_marriage_certificate').addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    document.getElementById('fileLabel').innerText = fileName;
});
</script>