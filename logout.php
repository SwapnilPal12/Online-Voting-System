<?php
session_start();
if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true)) {
    echo '<script>
    var confirmLogout = confirm("Are you sure you want to log out?");
    if (confirmLogout) {
        // User clicked "OK" in the confirmation prompt
        window.location.href = "logout.php"; // Replace with the actual logout URL
    } else {
        // User clicked "Cancel" in the confirmation prompt
        // You can add additional logic here if needed
    }
    </script>';
    
}
session_unset();
session_destroy();
header("location: vansh_login.html");
exit;

session_unset();
session_destroy();
header("location:index.html");
?>