<?php

require "../connect.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Delete the row with the specified ID
    $delete_sql = "DELETE FROM hold_otp WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Row with ID $id deleted successfully";
    } else {
        echo "Error deleting row with ID $id: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "No ID specified";
}

$conn->close();
?>
