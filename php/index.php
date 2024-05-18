
<?php





// Create connection

$co=mysqli_connect("localhost","root","","evening");
if($co!=true){

echo "error";

}



// Check connection
if($co!=true){

echo "error";

}








if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize input data
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO Card (email, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $message);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method";
}



?>