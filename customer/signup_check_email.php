<?php
// Include database connection
include '../connect.php';

// Function to check if email exists
function checkEmailExists($email) {
    global $pdo;
    
    $checkEmailQuery = "SELECT COUNT(*) as count FROM login WHERE email = :email";
    $checkEmailStmt = $pdo->prepare($checkEmailQuery);
    $checkEmailStmt->bindValue(':email', $email);
    $checkEmailStmt->execute();
    $emailCount = $checkEmailStmt->fetch(PDO::FETCH_ASSOC)['count'];

    return $emailCount > 0 ? 'exists' : 'not_exists';
}

// Check if email is provided in the request
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo checkEmailExists($email);
}
?>
