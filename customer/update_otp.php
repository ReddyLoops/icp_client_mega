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

$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($id) {
    $otp = mt_rand(100000, 999999);

    $current_time = new DateTime(null, new DateTimeZone('Asia/Shanghai'));
    $current_time->add(new DateInterval('PT5M'));
    $expiry_time = $current_time->format('Y-m-d H:i:s');

    $update_sql = "UPDATE hold_otp SET otp = ?, expiry_time = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("isi", $otp, $expiry_time, $id);
    if ($stmt->execute()) {
        $sql = "SELECT email FROM hold_otp WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row["email"];

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
            $mail->Subject = 'Your Updated OTP for verification';
            $mail->Body = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: linear-gradient(#93C572, #FFFFFF);">
            <div style="background-color: #008000; text-align: center; padding: 10px;">
                <img src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791868/logo_white_lio37e.png" alt="Sample Logo" style="display: inline-block; max-width: 200px;">
            </div>
            <h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">UPDATED OTP</h2>
            <p style="font-size: 24px;  text-align: center;"><strong>YOUR OTP:</strong> ' . $otp . '</p>';
    

            if ($mail->send()) {
                echo "<script>alert('New OTP has been sent to $email.'); window.location.href = 'input_otp.php?id=$id';</script>";
            } else {
                echo "<script>alert('Failed to send email.');</script>";
            }            
        } else {
            echo "<script>alert('No valid email found for the provided ID.');</script>";
        }
    } else {
        echo "<script>alert('Failed to update OTP.');</script>";
    }
} else {
    echo "<script>alert('Invalid ID.');</script>";
}

$stmt->close();
$conn->close();
?>
