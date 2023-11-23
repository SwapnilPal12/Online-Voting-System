<?php
$aap=$_POST['p1'];
$bjp=$_POST['p2'];
$cong=$_POST['p3'];


$servername="localhost";
$username= "root";
$password= "";
$dbname= "abes";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
    die("Connection Failed: ". mysqli_error($conn));
}
$sql = "INSERT INTO party(party1,party2,party3)
VALUES('$aap','$bjp','$cong')";
if(mysqli_query($conn, $sql)){
    header("location:sucess.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>

