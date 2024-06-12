<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "tech_oman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize and validate input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$name = sanitize_input($_POST['name']);
$email = sanitize_input($_POST['email']);
$phone = sanitize_input($_POST['phone']);
$message = sanitize_input($_POST['message']);
$it_events = isset($_POST['it_events']) ? implode(", ", $_POST['it_events']) : '';
$incubation_support = isset($_POST['incubation_support']) ? implode(", ", $_POST['incubation_support']) : '';
$lms_skills = isset($_POST['lms_skills']) ? implode(", ", $_POST['lms_skills']) : '';
$it_events_suggestion = sanitize_input($_POST['it_events_suggestion']);
$incubation_suggestion = sanitize_input($_POST['incubation_suggestion']);
$lms_suggestion = sanitize_input($_POST['lms_suggestion']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO form_submissions (name, email, phone, message, it_events, incubation_support, lms_skills, it_events_suggestion, incubation_suggestion, lms_suggestion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $email, $phone, $message, $it_events, $incubation_support, $lms_skills, $it_events_suggestion, $incubation_suggestion, $lms_suggestion);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
