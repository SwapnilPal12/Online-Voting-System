<?php
session_start();
include("dbconnect.php");
?>
<?php
if(isset($_SESSION['uname']) && isset($_SESSION['pass'])) {
    $un = $_SESSION['uname'];
    $pd = $_SESSION['pass'];

    // Create a prepared statement
    $query = "DELETE FROM voter WHERE uname = '$un' AND pass = '$pd' ";
    if(mysqli_query($con,$query)) {
        header("location:index.html");
        echo "profile deleted";
    }
    else {
        echo "Error: " . mysqli_error($conn);
    }
    exit(0);
}
?>