<?php
//error_reporting(0);
$u_name = $_POST['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$mob_no = $_POST['mob'];
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$dbname = "e_waste";
$username = "gita";
$db_password = "123456789";
$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql1 = "INSERT INTO register(Username, Name, Address, Mobile_No, Email, Password) VALUES('$u_name','$name','$address','$mob_no','$email','$password')";
    
    if ($conn->query($sql1) === TRUE) 
    {
        echo '<script>alert("Registration successful!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } 
    else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
