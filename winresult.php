<?php
include("dbconnect.php");
?>
<?php
$bjp=0;$congress=0;$aap=0;
$sql="SELECT * FROM voter";
$result=mysqli_query($conn,$sql);
$sql="SELECT * FROM party";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)> 0){
    while($row=mysqli_fetch_array($result))
    {
        if($row["party1"]=="BJP")
        $bjp++;
        if($row["party1"]=="Congress")
        $congress++;

    }
    
}


?>