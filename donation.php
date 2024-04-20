<?php 
	require_once "connect.php";
	$is_customer_logged_in = isset($_SESSION['auth_login']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>DONATIONS - ICP</title>
</head>
<?php include 'nav.php';?>
<body>
    <h3 style="margin-left: 500px; margin-top: 50px;">Support us via:</h3>
    <img style="max-width: 400px; display:block; margin-right: auto; margin-left:auto; margin-top:50px;"src="image/gcash.jpg" alt="gcash account">
</body>
<?php include 'footer.php';?>
</html>