<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "crs";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];

    // Validate form data (add more validation as needed)
    if (empty($name) || empty($email) || empty($gender) || empty($mobile) || empty($course)) {
        echo '<div style="color: red;">All fields are required.</div>';
    } else {
        // Check if the user is already registered for the selected course using prepared statement
        $check_query = "SELECT * FROM form WHERE mobile = ? AND course = ?";
        $stmt = $conn->prepare($check_query);
        $stmt->bind_param("ss", $mobile, $course);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User is already registered for this course
            echo '<script>alert("You are already registered for this course.");</script>';
            echo '<script>window.location = "form.php";</script>';
        } else {
            // User is not registered, so insert the registration into the database using prepared statement
            $insert_query = "INSERT INTO form (name, email, gender, mobile, course) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("sssss", $name, $email, $gender, $mobile, $course);

            if ($stmt->execute()) {
                echo '<script>alert("Registration Successful!");</script>';
                echo '<script>window.location = "form.php";</script>';
            } else {
                echo '<div style="color: red;">Registration Failed: ' . $stmt->error . '</div>';
            }
        }
    }
}

// Close the database connection
$conn->close();

