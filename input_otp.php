<?php
require "connect.php";

$id = isset($_GET["id"]) ? $_GET["id"] : null;

$email = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM hold_otp WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row["email"];
        $stored_otp = $row["otp"];
        $otp1 = $_POST["otp1"];
        $otp2 = $_POST["otp2"];
        $otp3 = $_POST["otp3"];
        $otp4 = $_POST["otp4"];
        $otp5 = $_POST["otp5"];
        $otp6 = $_POST["otp6"];

        $entered_otp = $otp1.$otp2.$otp3.$otp4.$otp5.$otp6;

        echo "<script>console.log('Fetched email: " . $email . "');</script>";
        
        $current_time = date('Y-m-d H:i:s');


        $expiry_time = $row["expiry_time"];
        if ($expiry_time < $current_time) {
            echo "<script>alert('OTP has expired. Please request a new OTP.');</script>";

        } else if ($stored_otp == $entered_otp) {

            $password = $row["password"]; 
        
            $insert_sql = "INSERT INTO login (first_name, last_name, birthday, gender, mobile_number, email, password, date_created)
                            SELECT first_name, last_name, birthday, gender, mobile_number, email, ?, NOW()
                            FROM hold_otp
                            WHERE id = ?";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("si", $password, $id);
            $stmt->execute();
        
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Success! Your information has been registered. You can now login using your email and password.'); window.location.href = 'customer/login.php';</script>";
                
                $delete_sql = "DELETE FROM hold_otp WHERE id = ?";
                $stmt_delete = $conn->prepare($delete_sql);
                $stmt_delete->bind_param("i", $id);
                $stmt_delete->execute();
            } else {
                echo "<script>alert('Error: Unable to insert data.');</script>";
            }
        } else {
            echo "<script>alert('Entered OTP does not match. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('No valid OTP found for the provided ID.');</script>";
    }
    $stmt->close();
    $conn->close();
}

function getResendUrl($id) {
    return 'update_otp.php?id=' . $id;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter OTP</title>
    <style>
.otp-Form {
    width: 350px;
    height: 370px;
    background-color: rgb(255, 255, 255);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 20px 30px;
    gap: 20px;
    position: relative;
    box-shadow: 0px 0px 20px rgb(15, 15, 15);
    border-radius: 15px;
}
.mainHeading {
  font-size: 1.1em;
  color: rgb(15, 15, 15);
  font-weight: 700;
}

.otpSubheading {
  font-size: 0.7em;
  color: black;
  line-height: 17px;
  text-align: center;
}

.inputContainer {
  width: 100%;
  display: flex;
  flex-direction: row;
  gap: 10px;
  align-items: center;
  justify-content: center;
}

.otp-input {
  background-color: rgba(0, 0, 0, 0.2);
  width: 30px;
  height: 30px;
  text-align: center;
  border: none;
  border-radius: 7px;
  caret-color: rgb(127, 129, 255);
  color: rgb(44, 44, 44);
  outline: none;
  font-weight: 600;
}

.otp-input:focus,
.otp-input:valid {
  background-color: rgba(127, 129, 255, 0.199);
  transition-duration: .3s;
}

.verifyButton {
  width: 100%;
  height: 30px;
  border: none;
  background-color: #258d36;
  color: white;
  font-weight: 600;
  cursor: pointer;
  border-radius: 10px;
  transition-duration: .2s;
}

.verifyButton:hover {
  background-color: #258d36;
  transition-duration: .2s;
}

.exitBtn {
  position: absolute;
  top: 5px;
  right: 5px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.171);
  background-color: rgb(255, 255, 255);
  border-radius: 50%;
  width: 25px;
  height: 25px;
  border: none;
  color: black;
  font-size: 1.1em;
  cursor: pointer;
}

.resendNote {
  font-size: 0.7em;
  color: black;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

.resendBtn {
  background-color: transparent;
  border: none;
  color: gray;
  cursor: pointer;
  font-size: 1.1em;
  font-weight: 700;
}
.container {
    display: grid;
    justify-content: center;
    padding-top: 7em;
}
    </style>
    <?php include 'nav.php';?>
</head>
<body>

<div></div>
<div class="container">
<form class="otp-Form" id="otpForm" method="post">
<span class="mainHeading">Enter OTP</span>
<p id="timer" style="
    font-size: 20px;
    font-weight: bold;"></p>
  <p class="otpSubheading">The OTP WILL EXPIRED AFTER 5 MINUTES <br> We have sent a verification code to your mobile number </p>
  <div class="inputContainer">
    <input type="text" class="otp-input" id="otp" name="otp1" maxlength="1" required>
    <input type="text" class="otp-input" id="otp" name="otp2" maxlength="1" required>
    <input type="text" class="otp-input" id="otp" name="otp3" maxlength="1" required>
    <input type="text" class="otp-input" id="otp" name="otp4" maxlength="1" required>
    <input type="text" class="otp-input" id="otp" name="otp5" maxlength="1" required>
    <input type="text" class="otp-input" id="otp" name="otp6" maxlength="1" required><br><br>
    </div>
    <input class="verifyButton" type="submit" id="submitBtn" value="Submit">
</form>
</div>
<p class="resendNote">Didn't receive the code?
<button class="resendBtn" id="resendBtn" onclick="resendOTP('<?php echo $id; ?>')">Resend</button></p>

<script>
    var timeLeft = 60 * 5;
    var timerInterval;

    function startTimer() {
        timerInterval = setInterval(updateTimer, 1000);
    }

    function updateTimer() {
    timeLeft--;
    document.getElementById("timer").innerText = " " + formatTime(timeLeft);

    if (timeLeft <= 0) {
        clearInterval(timerInterval);
        document.getElementById("submitBtn").disabled = true;
        document.querySelector(".verifyButton").style.backgroundColor = "gray"; // Change background color of .resendNote to gray
        document.getElementById("resendBtn").disabled = false;
        document.querySelector(".resendBtn").style.color = "#258d36";
    } else {
        document.getElementById("resendBtn").disabled = true;
    }
}


    function formatTime(seconds) {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;
        return min.toString().padStart(2, '0') + ":" + sec.toString().padStart(2, '0');
    }

    function resendOTP(id) {
        console.log('Resend clicked with ID: ' + id);
        window.location.href = 'update_otp.php?id=' + id;
    }

    startTimer();
</script>
<?php include 'footer.php';?>
</body>
</html>
