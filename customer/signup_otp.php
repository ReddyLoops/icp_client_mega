<?php
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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM hold_otp LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row["email"];

    $otp = mt_rand(100000, 999999);
    $expiry_time = date('Y-m-d H:i:s', strtotime('+5 minutes'));

    $update_sql = "UPDATE hold_otp SET otp = ?, expiry_time = ? WHERE email = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("iss", $otp, $expiry_time, $email);
    if ($stmt->execute()) {
        $mail = new PHPMailer;
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
        $mail->Subject = 'Your OTP for verification';
        $mail->Body = 'Your OTP is: ' . $otp;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "<script>alert('Email has been sent.'); window.location.href = 'input_otp.php';</script>";
        }

        // Delay the deletion of expired OTPs
        sleep(300); // Sleep for 300 seconds (5 minutes) before deleting expired OTPs

        // Delete expired OTPs
        $delete_sql = "DELETE FROM hold_otp WHERE email = ? AND expiry_time <= NOW()";
        $delete_stmt = $conn->prepare($delete_sql);
        $delete_stmt->bind_param("s", $email);
        if ($delete_stmt->execute()) {
            // Deleted expired OTPs successfully
        } else {
            echo "Error deleting expired OTPs: " . $conn->error;
        }

    } else {
        echo "Error updating record: " . $conn->error;
    }

} else {
    echo "<script>alert('No valid OTP found in hold_otp table'); window.location.href = 'signup.php';</script>";
    exit;
}

$stmt->close();
$conn->close();
?>
