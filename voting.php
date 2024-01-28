<?php
$aap = $_POST['p1'];
$bjp = $_POST['p2'];
$cong = $_POST['p3'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO party (party1) VALUES ('$aap'), ('$bjp'), ('$cong')";
if ($conn->query($sql) === TRUE) {
    header("location: sucess.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
