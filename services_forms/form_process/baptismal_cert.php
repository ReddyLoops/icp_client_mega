<?php
include_once "../connect.php";

session_start();

// Check if user is logged in
if (!isset($_SESSION['auth_login'])) {
    header("Location: ../index.php");
    exit; // Stop further execution
}

// Retrieve auth_id from session
$auth_id = $_SESSION['auth_login']['id'];
$auth_fname = $_SESSION['auth_login']['first_name'];
$auth_lname = $_SESSION['auth_login']['last_name'];
$auth_fullname = $auth_fname . ' ' . $auth_lname;

$fullname = $_POST["fullname"];
$birthdate = $_POST["birthdate"];
$birthplace = $_POST["birthplace"];
$father_fullname = $_POST["father_fullname"];
$mother_maidenname = $_POST["mother_maidenname"];
$purpose = $_POST["purpose"];

// Generate reference ID
$reference_id = uniqid();

// Insert data into binyag_request_certificate table
$sql = "INSERT INTO binyag_request_certificate (reference_id, fullname, birthdate, birthplace, father_fullname, mother_maidenname, purpose) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt1 = mysqli_prepare($conn, $sql);

if ($stmt1) {
    mysqli_stmt_bind_param($stmt1, "sssssss", $reference_id, $fullname, $birthdate, $birthplace, $father_fullname, $mother_maidenname, $purpose);

    $checkResult = mysqli_stmt_execute($stmt1);

    if ($checkResult) {
        // Retrieve the last inserted record from binyag_request_certificate table
        $lastId = mysqli_insert_id($conn);
        $result = mysqli_query($conn, "SELECT * FROM binyag_request_certificate WHERE id = $lastId");

        if ($result && $row = mysqli_fetch_assoc($result)) {
            // Insert data into notification table
            $services = 'Baptismal Certificate';
            $status = 'unread';
            $sql2 = "INSERT INTO notification (reference_id, services, status, customer_id, customer_name) 
                    VALUES (?, ?, ?, ?, ?)";
    
            $stmt2 = mysqli_prepare($conn, $sql2);
    
            if ($stmt2) {
                mysqli_stmt_bind_param($stmt2, "sssss", $reference_id, $services, $status, $auth_id, $auth_fullname);
    
                $checkResult2 = mysqli_stmt_execute($stmt2);
    
                if ($checkResult2) {
                    // Display success message and redirect
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
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" value="<?= $row["fullname"] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="birthdate">Birthdate:</label>
                <input type="text" class="form-control" value="<?= $row["birthdate"] ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="birthplace">Birthplace:</label>
                <input type="text" class="form-control" value="<?= $row["birthplace"] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="father_fullname">Father's Full Name:</label>
                <input type="text" class="form-control" value="<?= $row["father_fullname"] ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="mother_maidenname">Mother's Maiden Name:</label>
                <input type="text" class="form-control" value="<?= $row["mother_maidenname"] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md">
                <label for="purpose">Purpose:</label>
                <input type="text" class="form-control" value="<?= $row["purpose"] ?>" disabled>
            </div>
        </div>
       <div class="modal-footer">
                <a href="../send_baptismal_cert.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-success">OK</button></a>
            </div>
        </div>
</body>

</html>
<?php
                    exit; // Stop further execution
                } else {
                    echo "Unsuccessful in inserting data into notification table.";
                }
    
                // Close the statement
                mysqli_stmt_close($stmt2);
            } else {
                echo "Prepared statement error: " . mysqli_error($conn);
            }
        } else {
            echo "Error retrieving data from binyag_request_certificate table.";
        }
    } else {
        echo "Unsuccessful in inserting data into binyag_request_certificate table.";
    }

    // Close the statement
    mysqli_stmt_close($stmt1);
} else {
    echo "Prepared statement error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>