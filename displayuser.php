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
?>