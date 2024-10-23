<?php
//error_reporting(0);
$name = $_POST['name'];
$address = $_POST['address'];
$mob_no = $_POST['mob'];
$email = $_POST['email'];
$material = $_POST['things'];
$date=$_POST['date'];

$servername = "localhost";
$dbname = "e_waste";
$username = "gita";
$db_password = "123456789";
$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql1 = "INSERT INTO donate(name, address, mobile_No, email, material,date) VALUES('$name','$address','$mob_no','$email','$material','$date')";
    
    if ($conn->query($sql1) === TRUE) 
    {
        echo '<script>alert("Data Submitted Successfully*!");</script>';
        echo '<script>window.location.href = "index.html";</script>';
    } 
    else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
