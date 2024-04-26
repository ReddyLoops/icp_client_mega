<?php
// session_start();
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if (isset($_GET["order_username"], $_GET["order_phonenumber"], $_GET["order_address"])) {
//     $order_username = $_GET["order_username"];
//     $order_phonenumber = $_GET["order_phonenumber"];
//     $order_address = $_GET["order_address"];
//     $product_name = $_GET["product_name"];
//     $product_price = $_GET["product_price"];
//     $grandtotal = $_GET["grandtotal"];
//     $email = $_SESSION['auth_login']['email'];

//     // Check if the email address is not empty
//     if (!empty($email)) {
//         $mail = new PHPMailer(true);

//         $mail->isSMTP();
//         $mail->Host = 'smtp.hostinger.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'immaculate@devdojo.cloud';
//         $mail->Password = 'immaculateEmail$123';
//         $mail->SMTPSecure = 'ssl';
//         $mail->Port = 465;

//         $mail->setFrom('immaculate@devdojo.cloud');

//         $mail->addAddress($email);

//         $mail->isHTML(true);

//         $mail->Subject = 'Thank You';
//         $mail->Body    = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: linear-gradient(#93C572, #FFFFFF);">
//         <div style="background-color: #008000; text-align: center; padding: 10px;">
//             <img src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791868/logo_white_lio37e.png" alt="Sample Logo" style="display: inline-block; max-width: 200px;">
//         </div>
//         <h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">Your Order Has Been Placed</h2>
//                     <p style="font-size: 16px;"><strong>Product Name:</strong> ' . $product_name. '</p>
//                     <p style="font-size: 16px;"><strong>Product Price:</strong> ' . $product_price. '</p>
//                     <p style="font-size: 16px;"><strong>Full Name:</strong> ' . $order_username . '</p>
//                     <p style="font-size: 16px;"><strong>Phone Number:</strong> ' . $order_phonenumber . '</p>
//                     <p style="font-size: 16px;"><strong>Order Address:</strong> ' . $order_address . '</p>
//                     <p style="font-size: 16px;"><strong>Total:</strong> ' . $grandtotal . '</p>
//                     <p style="font-size: 16px;">(The application has been submitted successfully, kindly wait for the approvals through email!)</p>';
//         $mail->AltBody = 'Application Submitted Successfully
//                     Product Name: ' . $product_name. '
//                     Product Price: ' . $product_price. '
//                     Full Name: ' . $order_username . '
//                     Phone Number: ' . $order_phonenumber . '
//                     Order Address: ' . $order_address . '
//                     Total: ' . $grandtotal . '
//                     (The application has been submitted successfully, kindly wait for the approvals through email!)';

//         if ($mail->send()) {
//             echo "
//                         <script>
//                         alert('Sent Successfully');
//                         document.location.href = 'orders.php';
//                         </script>
//                         ";
//         } else {
//             echo "Error: " . $mail->ErrorInfo;
//         }
//     } else {
//         echo "Error: Email address is empty.";
//     }
// } else {
//     echo "Error: Required parameters not set.";
// }
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
        <h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">Your Order Has Been Placed</h2>
                    <p style="font-size: 16px;"><strong>Product Name:</strong> ' . $product_name. '</p>
                    <p style="font-size: 16px;"><strong>Product Price:</strong> ' . $product_price. '</p>
                    <p style="font-size: 16px;"><strong>Full Name:</strong> ' . $order_username . '</p>
                    <p style="font-size: 16px;"><strong>Phone Number:</strong> ' . $order_phonenumber . '</p>
                    <p style="font-size: 16px;"><strong>Order Address:</strong> ' . $order_address . '</p>
                    <p style="font-size: 16px;"><strong>Total:</strong> ' . $grandtotal . '</p>
                    <p style="font-size: 16px;">(The application has been submitted successfully, kindly wait for the approvals through email!)</p>';
        $mail->AltBody = 'Application Submitted Successfully
                    Product Name: ' . $product_name. '
                    Product Price: ' . $product_price. '
                    Full Name: ' . $order_username . '
                    Phone Number: ' . $order_phonenumber . '
                    Order Address: ' . $order_address . '
                    Total: ' . $grandtotal . '
                    (The application has been submitted successfully, kindly wait for the approvals through email!)';

        if ($mail->send()) {
            echo "
                        <script>
                        alert('Sent Successfully');
                        document.location.href = 'orders.php';
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
