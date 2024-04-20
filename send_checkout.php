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
$sql = mysqli_query($conn, "SELECT * FROM `orders` WHERE `id` = $id");
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


$mail->Subject = 'Thank You';
$mail->Body    = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: linear-gradient(#93C572, #FFFFFF);">
<div style="background-color: #008000; text-align: center; padding: 10px;">
    <img src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791868/logo_white_lio37e.png" alt="Sample Logo" style="display: inline-block; max-width: 200px;">
</div>
<h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">Blessing Application Submitted Successfully</h2>
            <p style="font-size: 16px;"><strong>Reference Number:</strong> ' . $row["reference_id"] . '</p>
            <p style="font-size: 16px;"><strong>place:</strong> ' . $row["place"] . '</p>
            <p style="font-size: 16px;"><strong>Owner Name:</strong> ' . $row["owner_name"] . '</p>
            <p style="font-size: 16px;"><strong>Complete Address:</strong> ' . $row["complete_address"] . '</p>
            <p style="font-size: 16px;"><strong>Contact Person:</strong> ' . $row["contact_person"] . '</p>
            <p style="font-size: 16px;"><strong>Contact Number:</strong> ' . $row["contact_number"] . '</p>
            <p style="font-size: 16px;"><strong>Date:</strong> ' . $row["date"] . '</p>
            <p style="font-size: 16px;"><strong>Time:</strong> ' . $row["time"] . '</p>
            <p style="font-size: 16px;"><strong>Date Added:</strong> ' . $row["date_added"] . '</p>
            <p style="font-size: 16px;">(The application has been submitted successfully, kindly wait for the approvals through email!)</p>';
$mail->AltBody = 'Application Submitted Successfully
            Reference Number: ' . $row["reference_id"] . '
            place: ' . $row["place"] . '
            Owner Name: ' . $row["owner_name"] . '
            Complete Address: ' . $row["complete_address"] . '
            Contact Person: ' . $row["contact_person"] . '
            Contact Number: ' . $row["contact_number"] . '
            Date: ' . $row["date"] . '
            Time: ' . $row["time"] . '
            Date Added: ' . $row["date_added"] . '
            (The application has been submitted successfully, kindly wait for the approvals through email!)';

            $mail->addAddress($email);

            if ($mail->send()) {
                echo "
                <script>
                alert('Sent Successfully');
                document.location.href = 'apply.php';
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