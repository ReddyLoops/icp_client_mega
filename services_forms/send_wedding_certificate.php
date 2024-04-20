<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$hostname="localhost";
$username="root";
$password="";
$dbname="thesis_latest";

$conn=mysqli_connect($hostname, $username,$password,$dbname);


if ($conn) {
if (isset($_GET["id"])) {
$id = $_GET["id"];
$sql = mysqli_query($conn, "SELECT * FROM `wedding_request_certificate` WHERE `id` = $id");
if ($sql && $row = mysqli_fetch_assoc($sql)) {
$email = $_SESSION['auth_login']['email'];

// Check if the email address is not empty
if (!empty($email)) {
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPAuth = true;
$mail->Username = 'immaculate@devdojo.cloud';
$mail->Password = 'immaculateEmail$123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('immaculate@devdojo.cloud');

$mail->addAddress($email);

$mail->isHTML(true);


$mail->Subject = 'Wedding Certificate Thank youu..';
$mail->Body = '
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: linear-gradient(#93C572, #FFFFFF);">
        <div style="background-color: #008000; text-align: center; padding: 10px;">
            <img src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791868/logo_white_lio37e.png" alt="Sample Logo" style="display: inline-block; max-width: 200px;">
        </div>
        <h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">Wedding Request Certificate Submitted Successfully</h2>
        <p style="font-size: 16px;"><strong>Reference Number:</strong> ' . $row["reference_id"] . '</p>
        <p style="font-size: 16px;"><strong>Date of Marriage:</strong> ' . $row["date_of_marriage"] . '</p>
        <p style="font-size: 16px;"><strong>Place of Marriage:</strong> ' . $row["place_of_marriage"] . '</p>
        <p style="font-size: 16px;"><strong>Groom First Name:</strong> ' . $row["groom_fname"] . '</p>
        <p style="font-size: 16px;"><strong>Groom Middle Name:</strong> ' . $row["groom_mname"] . '</p>
        <p style="font-size: 16px;"><strong>Groom Last Name:</strong> ' . $row["groom_lname"] . '</p>
        <p style="font-size: 16px;"><strong>Bride First Name:</strong> ' . $row["bride_fname"] . '</p>
        <p style="font-size: 16px;"><strong>Bride Middle Name:</strong> ' . $row["bride_mname"] . '</p>
        <p style="font-size: 16px;"><strong>Bride Last Name:</strong> ' . $row["bride_lname"] . '</p>
        <p style="font-size: 16px;"><strong>Wedding Purpose:</strong> ' . $row["purpose"] . '</p>
        <p style="font-size: 16px;">(The Request has been submitted successfully, kindly wait for the approvals through email!)</p>
    </div>';
$mail->AltBody = 'Request Submitted Successfully
        Reference Number: ' . $row["reference_id"] . '
        Date of Marriage: ' . $row["date_of_marriage"] . '
        Place of Marriage: ' . $row["place_of_marriage"] . '
        Groom First Name: ' . $row["groom_fname"] . '
        Groom Middle Name: ' . $row["groom_mname"] . '
        Groom Last Name: ' . $row["groom_lname"] . '
        Bride First Name: ' . $row["bride_fname"] . '
        Bride Middle Name: ' . $row["bride_mname"] . '
        Bride Last Name: ' . $row["bride_lname"] . '
        Wedding Purpose: ' . $row["purpose"] . '
        (The Request has been submitted successfully, kindly wait for the approvals through email!)';

            $mail->addAddress($email);

            if ($mail->send()) {
                echo "
                <script>
                alert('Sent Successfully');
                document.location.href = 'request.php';
                </script>
                ";
            } else {
                echo "Error: " . $mail->ErrorInfo;
            }
        } else {
            echo "Error: Email address is empty.";
        }
    } else {
        echo "Error: Unable to fetch email address.";
    }
} else {
    echo "Error: ID parameter not set.";
}
} else {
echo "Error: Database connection failed.";
}

mysqli_close($conn);
?>