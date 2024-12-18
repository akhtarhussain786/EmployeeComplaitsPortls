<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $aadhar_no = $_POST['aadhar_no'];
    $employee_id = $_POST['employee_id'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, mobile_no, aadhar_no, employee_id, password) 
              VALUES ('$name', '$email', '$mobile_no', '$aadhar_no', '$employee_id', '$password')";

if (mysqli_query($conn, $query)) {
    echo "<div style='
        font-family: Arial, sans-serif;
        color: green;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
        padding: 20px;
        border: 3px solid green; /* Adds a border around the message */
        border-radius: 10px; /* Optional: gives rounded corners */
        background-color: #f0f8f0; /* Light green background for the success message */
        width: 80%; /* Adjust width */
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
    '>
        <h2>Welcome to LK Company</h2>
        <p>Signup successful! Redirecting to login page...</p>
    </div>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'index.html';
            }, 3000); // 3-second delay
          </script>";
    exit();
}



    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
