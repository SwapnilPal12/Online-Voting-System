<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$em=$_POST['t3'];
$mb=$_POST['t4'];

$servername="localhost";
$username= "root";
$password= "";
$dbname= "abes";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn){
    die("Connection Failed: ". mysqli_error($conn));
}
$sql = "INSERT INTO voter(uname,emailid,pass,voterid)
VALUES('$un','$pd','$em','$mb')";
if(mysqli_query($conn, $sql)){
    header("location:index.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>

