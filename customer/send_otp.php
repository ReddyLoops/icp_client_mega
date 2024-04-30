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
    // Fetch the ID from the URL parameter
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    echo "ID: " . $id . " ";
    $sql = "SELECT email FROM hold_otp WHERE id = ? AND expiry_time < NOW() LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row["email"];

        $otp = mt_rand(100000, 999999);
        // Calculate the expiry time as current time + 30 minutes
        $current_time = new DateTime(null, new DateTimeZone('Asia/Shanghai'));
        $current_time->add(new DateInterval('PT5M'));
            $expiry_time = $current_time->format('Y-m-d H:i:s');

        
        $update_sql = "UPDATE hold_otp SET otp = ?, expiry_time = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("isi", $otp, $expiry_time, $id);
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
                echo "<script>alert('Email has been sent.'); window.location.href = 'input_otp.php?id=$id';</script>";
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else {
        // echo "<script>alert('No valid OTP found for the provided ID.'); window.location.href = 'signup.php';</script>";
        echo "No valid OTP found for the provided ID.";
        exit;
    }

    $stmt->close();
    $conn->close();
    ?>