<?php
// Include the connect.php file to establish a database connection
include_once "connect.php";

// Check if user is logged in
if (!isset($_SESSION['auth_login'])) {
    header("Location: index.php");
    exit; // Stop further execution
}

// Check if the 'order_id' parameter is set in the URL
if (!isset($_GET['group_order'])) {
    echo "No order ID provided.";
    exit;
}

// Sanitize the 'order_id' parameter
$auth_id = $_SESSION['auth_login']['id'];
// Set a default value for $group_order (or get it from somewhere)
$group_order = $_GET['group_order'];

// Debugging: Echo the SQL query and the sanitized order_id
$query = "SELECT * FROM `orders` WHERE `customer_id` = ? AND `group_order` = ? ORDER BY date_added DESC;";
echo "Query: " . $query . "<br>";
echo "Order ID: " . $auth_id . "<br>";
echo "Group Order: " . $group_order . "<br>";

$stmt_products = $conn->prepare($query);
$stmt_products->bind_param("is", $auth_id, $group_order);
if (!$stmt_products->execute()) {
    echo "Error executing statement: " . $stmt_products->error;
    exit;
}

$result_products = $stmt_products->get_result();

// Check if any products were found
if ($result_products->num_rows > 0) {
    // Display the receipt using the fetched data
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Receipt</title>
    </head>
    <body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
        <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
            <thead>
                <tr>
                    <th style="text-align:left;"><img style="max-width: 250px;" src="https://res.cloudinary.com/dqtbveriz/image/upload/v1711791860/logo2_bfmyws.png" alt="ICP LOGO"></th>
                    <th style="text-align:right;font-weight:400;"></th>
                </tr>
            </thead>
            <tbody id="products_body">
                <?php
                // Initialize grand total variable
                $grand_total = 0;

                // Loop through each product to calculate subtotal and add to grand total
                while ($product = $result_products->fetch_assoc()) {
                    // Store data in variables
                    $date_added = $product["date_added"];
                    $product_image = $product["product_image"];
                    $status = $product["status"];
                    $product_name = $product['product_name'];
                    $group_order = $product["group_order"];
                    $product_price = $product["product_price"];
                    $order_username = $product["order_username"];
                    $order_phonenumber = $product["order_phonenumber"];
                    $customer_id = $product["customer_id"];
                    $order_address = $product["order_address"];
                    $order_payment = $product["order_payment"];
                    $order_courier = $product["order_courier"];
                    $product_quantity = $product["product_quantity"];
                    $subtotal = $product_quantity * $product_price;
                    $grand_total += $subtotal;
                    ?>
                    
                    <tr>
                        <td style="height:35px;"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
                            <!-- Product details -->
                            <p style="font-size:14px;margin:0 0 0 0;">
                                <span style="font-weight:bold;display:inline-block;min-width:146px;"></span>
                                <img src="image/<?= $product_image ?>" alt="Product Image" style="max-width:100px; float: right;">
                            </p>
                            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Order status</span><b style="color:green;font-weight:normal;margin:0"><?= $status ?></b></p>
                            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:150px">Product</span><b style="font-weight:normal;margin:0"><?= $product_name ?></b></p>
                            <p style="font-size:14px;margin:0 0 6px 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Transaction ID</span><?= $group_order ?></p>
                            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Order amount</span>₱ <?= $product_price ?></p>
                            <p style="font-size:14px;margin:0 0 0 0;"><span style="font-weight:bold;display:inline-block;min-width:146px">Product Quantity</span><?= $product_quantity ?></p>
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- Display grand total -->
                    <tr>
                        <td colspan="2" style="font-size: 14px; padding: 10px 20px; text-align: right;">
                            <strong>Grand Total: </strong> ₱ <?= number_format($grand_total, 2) ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:35px;"></td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:20px;vertical-align:top">
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Purchased Date</span> <?= $date_added ?></p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px">Name</span> <?= $order_username ?></p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Phone Number</span><?= $order_phonenumber ?></p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">ID No.</span> <?= $customer_id ?></p>
                        </td>
                        <td style="width:50%;padding:20px;vertical-align:top">
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Address</span><?= $order_address ?></p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Order Payment</span><?= $order_payment ?></p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Order Courier</span> <?= $order_courier ?></p>
                        </td>
                    </tr>
            </tbody>
            <tfooter>
                <tr>
                    <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
                        <strong style="display:block;margin:0 0 10px 0;">Regards</strong>Immaculate Conception Parish<br> J.P Rizal St, Pandi, 3014 Bulacan<br><br>
                        <b>Phone:</b>0977 693 0848<br>
                        <b>Email:</b> immaculateconceptionparish@gmail.com
                    </td>
                </tr>
                <td><a href="send_checkout.php?group_order=<?= $group_order ?>"><button type="button" class="btn btn-success">OK</button></a></td>

            </tfooter>
        </table>
    </body>

    </body>
    </html>
    <?php
} else {
    echo "Order not found.";
}
?>
