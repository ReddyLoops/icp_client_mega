<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // File upload handling
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // ... (rest of the file upload logic)

    if ($uploadOk == 1) {
        // If everything is OK, try to upload the file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";

            // Insert data into the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "thesis_latest";  // Use your actual database name

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $imagePath = $targetFile;

            $sql = "INSERT INTO form_data (image_path) VALUES ('$imagePath')";

            if ($conn->query($sql) === TRUE) {
                echo "Image path has been successfully inserted into the database.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Invalid request.";
}
?>
