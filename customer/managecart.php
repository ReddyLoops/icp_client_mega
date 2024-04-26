<?php
require_once "../connect.php";

// Function to decrease product stock
function decreaseProductStock($product_id, $product_quantity, $pdo) {
    // Prepare SQL statement to update product stock
    $sql = "UPDATE inventory SET product_stock = product_stock - ? WHERE product_id = ?";
    $stmt = $pdo->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->execute([$product_quantity, $product_id]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        return true; // Stock updated successfully
    } else {
        return false; // Failed to update stock
    }
}

// Check if checking out
if (isset($_POST['cart_checkout'])) {
    session_start(); // Start session if not already started

    $auth = $_SESSION['auth_login'];
    $cart_name = 'cart-' . $auth['id'] . '-cart';

    // Create cart if not exists
    if (!isset($_SESSION[$cart_name])) {
        $_SESSION[$cart_name] = [];
    }

    // Extract order details from POST data
    $order_username = $_POST['order_username'];
    $order_phonenumber = $_POST['order_phonenumber'];
    $order_address = $_POST['order_address'];
    $payment_method = "Cash on Delivery";
    $order_courier = "J&T";
    $status = "Order Placed";
    $group_order = uniqid();
    $auth_id = $auth['id'];

    foreach ($_SESSION[$cart_name] as $cart) {
        extract($cart);

        // Insert order details into orders table
        $sql = "INSERT INTO orders (order_username, order_phonenumber, order_address, order_courier, group_order, customer_id, product_name, product_price, product_quantity, product_image, order_payment, status) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$order_username, $order_phonenumber, $order_address, $order_courier, $group_order, $auth_id, $product_name, $product_price, $product_quantity, $product_image, $payment_method, $status]);
        $order_id = $pdo->lastInsertId();

        // Decrease product stock
        decreaseProductStock($product_id, $product_quantity, $pdo);
    }

    // Clear the cart after checkout
    unset($_SESSION[$cart_name]);

       // Redirect to checkout receipt page
    header("location: ../checkout_reciept.php?order_id=$order_id");
    exit;
}


	# Remove item and go back to the customer panel
	if( isset($product_id) ){
		unset( $_SESSION[$cart_name][$product_id] );
		header("location: index.php"); exit;
	}

	# Put the item into the cart
	if( isset( $product_add ) ){
		array_push($_SESSION[$cart_name], [
			"name" 		=> $product_name,
			"price" 	=> $product_price,
			"image"		=> $product_image
		]);

		$_SESSION['alert'] = "Product added";
	}
    
	# Redirect back
	header("location: ../index.php");
?>


