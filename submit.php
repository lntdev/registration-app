<?php
$host = "sqlXXX.infinityfree.com"; // Your actual host
$dbname = "if0_38687515_appdb";    // Replace with yours
$username = "if0_38687515";        // Replace with your DB username
$password = "SC73RA9lGxInq5W";       // Replace with your DB password

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$comments = $_POST['comments'];

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO registrations (name, email, phone, course, comments) 
        VALUES ('$name', '$email', '$phone', '$course', '$comments')";
$conn->query($sql);
$conn->close();

// Email confirmation
$subject = "Registration Received";
$message = "Hi $name,\n\nThank you for registering for $course!\n\nRegards,\nTeam Manohar";
$headers = "From: noreply@yourdomain.com";  // You can use your domain email here

mail($email, $subject, $message, $headers);

echo "<h2>✅ Registration Successful</h2><p>Confirmation sent to $email</p>";
?>
