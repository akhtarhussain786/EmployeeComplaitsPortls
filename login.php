<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Check if email and password keys exist
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        die("Form fields are missing. Please try again.");
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password. <a href='index.html'>Try again</a>";
        }
    } else {
        echo "No account found with this email. <a href='signup.html'>Sign Up</a>";
    }
} else {
    echo "Invalid request method.";
}
?>
