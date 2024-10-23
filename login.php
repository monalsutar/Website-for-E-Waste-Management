<?php
// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$servername = "localhost";
$database = "e_waste";
$username_db = "gita";
$password_db = "123456789";

$conn = mysqli_connect($servername, $username_db, $password_db, $database);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to check if the user is registered
$query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) 
{
    // User is registered, perform login action
    echo '<script>alert("Login successful!");</script>';
    echo '<script>window.location.href = "index.html";</script>';
}
 else
{
    // User is not registered
    echo '<script>alert("You are not registered. Please register first.");</script>';
    echo '<script>window.location.href = "index.html";</script>';
}

// Close the database connection
mysqli_close($conn);
?>
