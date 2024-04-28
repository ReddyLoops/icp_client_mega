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
    if (isset($_GET["group_order"])) {
        $group_order = $_GET["group_order"];
        $sql = mysqli_query($conn, "SELECT * FROM `orders` WHERE `group_order` = '$group_order'");
        if ($sql) {
            $product_data = array(); // Initialize an array to store product data
            $grandtotal = 0; // Initialize grandtotal

            while ($row = mysqli_fetch_assoc($sql)) {
                // Calculate total for each product
                $total = $row['product_quantity'] * $row['product_price'];
                // Add total to grandtotal
                $grandtotal += $total;

                $product_data[] = array(
                    'product_name' => $row['product_name'],
                    'product_price' => $row['product_price'],
                    'product_quantity' => $row['product_quantity'],
                    'total' => $total, // Include total in product data
                    'order_phonenumber' => $row['order_phonenumber'],
                    'order_username' => $row['order_username'],
                    'order_address' => $row['order_address']
                );
            }

            $email = $_SESSION['auth_login']['email'];

            // Check if the email address is not empty
            if (!empty($email)) {
                $mail = new PHPMailer(true);

                // Configure SMTP settings
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'immaculate@devdojo.cloud';
                $mail->Password = 'immaculateEmail$123';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Set email parameters
                $mail->setFrom('immaculate@devdojo.cloud');
                $mail->addAddress($email);
                $mail->isHTML(true);

                // Set email content
                $mail->Subject = 'Thank You';
                $mail->Body = '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: linear-gradient(#93C572, #FFFFFF);">
                <div style="background-color: #008000; text-align: center; padding: 10px;">
                <img src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791868/logo_white_lio37e.png" alt="Sample Logo" style="display: inline-block; max-width: 200px;">
                </div>
                <h2 style="color: #333333; font-size: 24px; font-weight: bold; text-align: center;">Your Order Has Been Placed</h2>';

                foreach ($product_data as $product) {
                    $mail->Body .= '<p style="font-size: 16px;"><strong>Product Name:</strong> ' . $product['product_name']. '</p><p style="font-size: 16px;"><strong>Product Price:</strong> ' . $product['product_price']. '</p>
                    <p style="font-size: 16px;"><strong>Product Quantity:</strong> ' . $product['product_quantity']. '</p>';
                }

                $mail->Body .= 
                '<p style="font-size: 16px;"><strong>Total:</strong> ' . $grandtotal . '</p>
                <p style="font-size: 16px;"><strong>Full Name:</strong> ' . $product['order_username'] . '</p>
                <p style="font-size: 16px;"><strong>Phone Number:</strong> ' . $product['order_phonenumber'] . '</p>
                <p style="font-size: 16px;"><strong>Order Address:</strong> ' . $product['order_address'] . '</p>
                <p style="font-size: 16px;">(The application has been submitted successfully, kindly wait for the approvals through email!)</p>';

                $mail->AltBody = 'Application Submitted Successfully
                Total: ' . $grandtotal . '
                Full Name: ' . $product['order_username'] . '
                Phone Number: '. $product['order_phonenumber'] . '
                Order Address: ' . $product['order_address'] . '
                (The application has been submitted successfully, kindly wait for the approvals through email!)';

                // Send email
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
