<?php
include_once "../connect.php";

// Start session
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

// Extract form data
$selectedPurpose = $_POST["purpose"];
$otherPurpose = $_POST["otherPurpose"]; 

$purpose = ($selectedPurpose === "Purpose") ? $otherPurpose : $selectedPurpose;
$name = $_POST["name"];
$date = $_POST["date"];

// Generate reference ID
$reference_id = "mass-" . uniqid();
$services = 'Mass'; // Assuming you want to insert 'mass' into the 'services' column
$status = 'unread';

$currentUserId = $_SESSION['auth_login']['id']; 
$sql = "SELECT email, first_name FROM login WHERE id = '$currentUserId'";
$result = mysqli_query($conn, $sql);

if ($result && $row = mysqli_fetch_assoc($result)) {
    $currentUserEmail = $row['email'];
    $currentUserFirstName = $row['first_name'];

    $sql = "INSERT INTO mass (client_id, user_email, user_first_name, reference_id, purpose, name, date) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt1 = mysqli_prepare($conn, $sql);

    if ($stmt1) {
        mysqli_stmt_bind_param($stmt1, "sssssss", $currentUserId, $currentUserEmail, $currentUserFirstName, $reference_id, $purpose, $name, $date);

        $checkResult1 = mysqli_stmt_execute($stmt1);

        mysqli_stmt_close($stmt1);

        if ($checkResult1) {

            // Retrieve the last inserted record from mass table
            $lastId = mysqli_insert_id($conn);
            $result = mysqli_query($conn, "SELECT * FROM mass WHERE id = $lastId");

            if ($result && $row = mysqli_fetch_assoc($result)) {
                // Insert data into mass_notification table
                $sql2 = "INSERT INTO notification (reference_id, services, status, customer_id, customer_name) 
        VALUES (?, ?, ?, ?, ?)";

                $stmt2 = mysqli_prepare($conn, $sql2);

                if ($stmt2) {
                    mysqli_stmt_bind_param($stmt2, "sssss", $reference_id, $services, $status, $auth_id, $auth_fullname);

                    $checkResult2 = mysqli_stmt_execute($stmt2);

                    mysqli_stmt_close($stmt2);

                    if ($checkResult2) {
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
                                    <p>(The Mass application has been submitted successfully, kindly wait for the approvals through
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

                            <fieldset>

                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="purpose">Purpose:</label>
                                        <input type="text" class="form-control" value="<?= $row["purpose"] ?>" disabled>
                                    </div>
                                    
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" value="<?= $row["name"] ?>" disabled>
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="date">Date:</label>
                                        <input type="text" class="form-control" value="<?= $row["date"] ?>" disabled>
                                    </div>

                                </div>
                            </fieldset>
                            <div class="modal-footer">
                                <a href="../send_mass_application.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-success">OK</button></a>
                            </div>
                        </div>
                    </body>

                    </html>
                    <?php
                    } else {
                        echo "Unsuccessful in inserting data into mass_notification table.";
                    }
                } else {
                    echo "Prepared statement error: " . mysqli_error($conn);
                }
            } else {
                echo "Error retrieving data from mass table.";
            }
        } else {
            echo "Unsuccessful in inserting data into mass table.";
        }
    } else {
        echo "Prepared statement error: " . mysqli_error($conn);
    }
} else {
    echo "Error retrieving user data from login table.";
}

mysqli_close($conn);
?>
