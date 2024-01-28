<?php
include("dbconnect.php");
?>
<?php
$sql="SELECT * FROM voter";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_array($result)){
        echo"<hr>Username:".$row["uname"]."Password".$row["pass"];
    }
}

else{
    echo "0 results";
}
$sql="SELECT * FROM party";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_array($result)){
        echo"<hr>Party:".$row["party1"];
    }
    
}

else{
    echo "0 results";
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the counts for specific parties
$sql = "SELECT party1, COUNT(party1) AS vote_count FROM party WHERE party1 IN ('AAP', 'BJP', 'Cong', 'Congress') GROUP BY party1 ORDER BY vote_count DESC";
$result = $conn->query($sql);

// HTML content to display the election results
$htmlContent = '<html>
<head>
    <title>Election Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h1 {
            color: #333333;
        }
        .result-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .party-result {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Election Results</h1>';

if ($result->num_rows > 0) {
    // Display the party results
    while ($row = $result->fetch_assoc()) {
        $htmlContent .= '<div class="party-result">' . $row["party1"] . ': ' . $row["vote_count"] . ' votes</div>';
    }
} else {
    $htmlContent .= '<p>No votes recorded for AAP, BJP, or Congress yet.</p>';
}

$htmlContent .= '
    </div>
</body>
</html>';

// Output the generated HTML content
echo $htmlContent;

$conn->close();
?>
