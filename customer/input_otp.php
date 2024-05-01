<?php

require "../connect.php";

$id = isset($_GET["id"]) ? $_GET["id"] : null;

$email = ""; // Initialize email variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM hold_otp WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row["email"]; // Fetch the email from the database

        // Debugging: Output fetched email
        echo "<script>console.log('Fetched email: " . $email . "');</script>";

        $stored_otp = $row["otp"];
        $entered_otp = $_POST["otp"]; // Assuming the OTP entered by the user is sent via POST

        // Get the current time
        $current_time = date('Y-m-d H:i:s');

        // Check if expiry_time is less than current time
        $expiry_time = $row["expiry_time"];
        if ($expiry_time < $current_time) {
            echo "<script>alert('OTP has expired. Please request a new OTP.');</script>";
            // Here you can include a form or link to go back to the OTP request page
        } else if ($stored_otp == $entered_otp) {
            // OTP matched, insert data into the login table
            $password = password_hash($row["password"], PASSWORD_DEFAULT); // Assuming you want to hash the password

            // Insert query to insert data from hold_otp into login
            $insert_sql = "INSERT INTO login (first_name, last_name, birthday, gender, mobile_number, email, password, date_created)
                        SELECT first_name, last_name, birthday, gender, mobile_number, email, ?, NOW()
                        FROM hold_otp
                        WHERE id = ?";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("si", $password, $id);

            if ($stmt->execute()) {
                // Data inserted successfully, show success message
                echo "<script>alert('Success! Your information has been registered. You can now login using your email and password.'); window.location.href = 'login.php';</script>";

                // Delete the row from hold_otp
                $delete_sql = "DELETE FROM hold_otp WHERE id = ?";
                $stmt = $conn->prepare($delete_sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
            } else {
                echo "<script>alert('Error: " . $stmt->error . "');</script>";
            }
        } else {
            echo "<script>alert('Entered OTP does not match. Please try again.');</script>";
            // Here you can include a form or link to go back to the OTP verification page
        }
    } else {
        echo "<script>alert('No valid OTP found for the provided ID.');</script>";
        // Here you can include a form or link to go back to the OTP request page
    }
    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Enter OTP</title>
</head>
<body>
<h2>Enter OTP</h2>
<?php if(!empty($email)): ?>
    <p>The OTP has been sent to your email: <?php echo htmlspecialchars($email); ?></p>
<?php endif; ?>
<form id="otpForm" method="post">
    <label for="otp">Enter OTP:</label><br>
    <input type="text" id="otp" name="otp" required><br><br>
    <input type="submit" id="submitBtn" value="Submit">
</form>
<button onclick="fetchOTP()">Fetch OTP</button>
<p id="timer"></p>

<script>
    var timeLeft = 300; // 5 minutes in seconds
    var timerInterval;

    function startTimer() {
        timerInterval = setInterval(updateTimer, 1000);
    }

    function updateTimer() {
        timeLeft--;
        document.getElementById("timer").innerText = "Time left: " + formatTime(timeLeft);

        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            document.getElementById("submitBtn").disabled = true;
        }
    }

    function formatTime(seconds) {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;
        return min.toString().padStart(2, '0') + ":" + sec.toString().padStart(2, '0');
    }

    startTimer();

    function fetchOTP() {
        // Get the ID from the query parameter in the URL
        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('id');

        // Redirect to your PHP file with the ID
        window.location.href = 'send_otp.php?id=' + id ;
    }
</script>

</body>
</html>
