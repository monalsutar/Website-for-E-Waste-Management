<?php
//error_reporting(0);
$name = $_POST['name'];
$email=$_POST['email'];
$message = $_POST['message'];

$servername = "localhost";
$dbname = "e_waste";
$username = "gita";
$password = "123456789";
$conn = new mysqli("localhost", "gita", "123456789", "e_waste");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    $sql1="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
    if ($conn->query($sql1) === TRUE) 
    {
        echo '<script>alert("Contact successful!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }

    $conn->close();
}


?>
