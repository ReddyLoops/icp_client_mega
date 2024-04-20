<?php
include_once "../connect.php";

$date_of_marriage = $_POST["date_of_marriage"] ?? '';
$place_of_marriage = $_POST["place_of_marriage"] ?? '';
$groom_fname = $_POST["groom_fname"] ?? '';
$groom_mname = $_POST["groom_mname"] ?? '';
$groom_lname = $_POST["groom_lname"] ?? '';
$bride_fname = $_POST["bride_fname"] ?? '';
$bride_mname = $_POST["bride_mname"] ?? '';
$bride_lname = $_POST["bride_lname"] ?? '';
$purpose = $_POST["purpose"] ?? '';

$reference_id = uniqid();

$sql = "INSERT INTO wedding_request_certificate (reference_id, date_of_marriage, place_of_marriage, groom_fname, groom_mname, groom_lname, bride_fname, bride_mname, bride_lname, purpose) 
        VALUES ('$reference_id', '$date_of_marriage', '$place_of_marriage', '$groom_fname', '$groom_mname', '$groom_lname', '$bride_fname', '$bride_mname', '$bride_lname',  '$purpose')";

$checkResult = mysqli_query($conn, $sql);

if ($checkResult) {
    $lastId = mysqli_insert_id($conn);
    $result = mysqli_query($conn, "SELECT * FROM wedding_request_certificate WHERE id = $lastId");

    if ($result && $row = mysqli_fetch_assoc($result)) {
 
        ?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="confirmation.css">
<!-- FONT -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!-- ICON -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- MODAL -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body>

    <div class="form">
        <div class="funds-success-message-container">
            <div class="funds-checkmark-text-container">
                <div class="funds-checkmark-container">
                    <svg class="funds-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="funds-checkmark-circle" cx="26" cy="26" r="25" fill="none" />
                        <path class="funds-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                    </svg>

                    <div class="funds-display-on-ie">
                        <svg class="funds-ie-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="funds-ie-checkmark-circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="funds-ie-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                </div>

                <h1 class="funds-success-done-text">Done!</h1>
            </div>

            <div class="funds-success-message">

                <h2>Application Submitted Successfully</h2>
                <span class="data-title"><strong>Reference Number:</strong></span>
                <?= $row["reference_id"] ?><br><br>
                <p>(The application has been submitted successfully, kindly wait for the approvals through
                    email!)
                </p>
            </div>
        </div>

        <style>
        .form {
            width: 70%;
            margin-top: 1%;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid green;
            padding: 20px 20px 0px 20px;

        }
        </style>
        <hr>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="date_marriage">Date of Marriage:</label>
                <input type="text" class="form-control" value="<?= $row["date_of_marriage"] ?>" disabled>

            </div>
        
            <div class="form-group col-md">
                <label for="place_marriage">Place of Marriage:</label>
                <input type="text" class="form-control" value="<?= $row["place_of_marriage"] ?>" disabled>
            </div>
        </div>
        
        <div class="form-row">
             <div class="form-group col-md">
                <label for="groom_fname">Groom First Name:</label>
                <input type="text" class="form-control" value="<?= $row["groom_fname"] ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="groom_mname">Groom Middle Name:</label>
                <input type="text" class="form-control" value="<?= $row["groom_mname"] ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="groom_lname">Groom Last Name:</label>
                <input type="text" class="form-control" value="<?= $row["groom_lname"] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
             <div class="form-group col-md">
                <label for="bride_fname">Bride First Name:</label>
                <input type="text" class="form-control" value="<?= $row["bride_fname"] ?>" disabled>
            </div>
            
            <div class="form-group col-md">
                <label for="bride_mname">Bride Middle Name:</label>
                <input type="text" class="form-control" value="<?= $row["bride_mname"] ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="bride_lname">Bride Last Name:</label>
                <input type="text" class="form-control" value="<?= $row["bride_lname"] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="purpose">Purpose:</label>
                <input type="text" class="form-control" value="<?= $row["purpose"] ?>" disabled>
            </div>
        </div>
       <div class="modal-footer">
                <a href="../send_wedding_certificate.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-success">OK</button></a>
            </div>
        </div>
</body>

</html>
<?php
    } else {
        echo "Error retrieving data: " . mysqli_error($conn);
    }
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>