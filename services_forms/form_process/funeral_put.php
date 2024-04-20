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


$deceased_fullname = $_POST["deceased_fullname"];
$date_of_death = $_POST["date_of_death"];
$civil_status = $_POST["civil_status"];

$spouse_name = null;
$number_of_child = null;

if ($civil_status === "Married") {

    $spouse_name = $_POST["spouse_name"];
    $number_of_child = $_POST["number_of_child"];
}

$mother_name = $_POST["mother_name"];
$father_name = $_POST["father_name"];
$age = $_POST["age"];
$current_address = $_POST["current_address"];
$cause_of_death = $_POST["cause_of_death"];
$has_sacrament = $_POST["has_sacrament"];
$client_name = $_POST["client_name"];
$relationship = $_POST["relationship"];
$contact_number = $_POST["contact_number"];
$allowed_to_mass = $_POST["allowed_to_mass"];
$mass_time = $_POST["mass_time"];
$mass_date = $_POST["mass_date"];
$mass_location = $_POST["mass_location"];
$burial_place = $_POST["burial_place"];

// Generate reference ID
$reference_id = "funeral-" . uniqid();

// Prepare SQL statement for insertion
$sql1 = "INSERT INTO funeral (reference_id, deceased_fullname, date_of_death, civil_status,
    spouse_name, mother_name, father_name, age, number_of_child, current_address, cause_of_death,
    has_sacrament, client_name, relationship, contact_number, allowed_to_mass, mass_time, mass_date,
    mass_location, burial_place
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt1 = mysqli_prepare($conn, $sql1);

if ($stmt1) {
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt1, "ssssssssssssssssssss", $reference_id, $deceased_fullname, $date_of_death, $civil_status,
        $spouse_name, $mother_name, $father_name, $age, $number_of_child, $current_address, $cause_of_death,
        $has_sacrament, $client_name, $relationship, $contact_number, $allowed_to_mass, $mass_time, $mass_date,
        $mass_location, $burial_place);
    
    $checkResult1 = mysqli_stmt_execute($stmt1);

    if ($checkResult1) {
        // Retrieve the last inserted record from the funeral table
        $lastId = mysqli_insert_id($conn);
        $result = mysqli_query($conn, "SELECT * FROM funeral WHERE id = $lastId");

        if ($result && $row = mysqli_fetch_assoc($result)) {
            // Insert data into notification table
            $services = 'Funeral';
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
                <label for="deceased_fullname">Deceased Full Name:</label>
                <input type="text" class="form-control" value="<?= $deceased_fullname ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="age">Age:</label>
                <input type="number" class="form-control" value="<?= $age ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="date_of_death">Date of Death:</label>
                <input type="text" class="form-control" value="<?= $date_of_death ?>" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="civil_status">Civil Status:</label>
                <input type="text" class="form-control" value="<?= $civil_status ?>" disabled>
            </div>

            <?php
            if ($civil_status === "Married") {
                ?>
            <div class="form-group col-md">
                <label for="spouse_name">Spouse Name:</label>
                <input type="text" class="form-control" value="<?= $spouse_name ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="number_of_child">Number of Children:</label>
                <input type="text" class="form-control" value="<?= $number_of_child ?>" disabled>
            </div>
            <?php
            }
            ?>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="mother_name">Mother's Name:</label>
                <input type="text" class="form-control" value="<?= $mother_name ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="father_name">Father's Name:</label>
                <input type="text" class="form-control" value="<?= $father_name ?>" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="current_address">Current Address:</label>
                <input type="text" class="form-control" value="<?= $current_address ?>" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="cause_of_death">Cause of Death:</label>
                <input type="text" class="form-control" value="<?= $cause_of_death ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="has_sacrament">Has Sacrament:</label>
                <input type="text" class="form-control" value="<?= $has_sacrament ?>" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="client_name">Client Name:</label>
                <input type="text" class="form-control" value="<?= $client_name ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="relationship">Relationship:</label>
                <input type="text" class="form-control" value="<?= $relationship ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" value="<?= $contact_number ?>" disabled>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md">
                <label for="allowed_to_mass">Allowed to Mass:</label>
                <input type="text" class="form-control" value="<?= $allowed_to_mass ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="mass_time">Mass Time:</label>
                <input type="text" class="form-control" value="<?= $mass_time ?>" disabled>
            </div>
            <div class="form-group col-md">
                <label for="mass_date">Mass Date:</label>
                <input type="text" class="form-control" value="<?= $mass_date ?>" disabled>
            </div>

            <div class="form-group col-md">
                <label for="mass_location">Mass Location:</label>
                <input type="text" class="form-control" value="<?= $mass_location ?>" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md">
                <label for="burial_place">Burial Place:</label>
                <input type="text" class="form-control" value="<?= $burial_place ?>" disabled>
            </div>
        </div>

        <div class="modal-footer">
            <a href="../send_funeral_application.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-success">OK</button></a>
        </div>
    </div>


</body>
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
            echo "Error retrieving data from funeral table.";
        }
    } else {
        echo "Unsuccessful in inserting data into funeral table.";
    }

    // Close the statement
    mysqli_stmt_close($stmt1);
} else {
    echo "Prepared statement error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>