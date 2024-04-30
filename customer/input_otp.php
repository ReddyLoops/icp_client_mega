

<!-- input_otp.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Enter OTP</title>
</head>
<body>
    <h2>Enter OTP</h2>
    <form method="post" action="verify_otp.php">
        <label for="otp">OTP:</label><br>
        <input type="text" id="otp" name="otp" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
