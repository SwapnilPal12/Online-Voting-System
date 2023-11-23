<?php
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t3'];
$sql="SELECT * FROM voter";
$result=mysqli_query($conn,$sql);
$c=0;
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["uname"]==$un && $row["pass"]==$pd)
         {
            $c++;
        }
        
    }
    if($c== 0)
    {
        header("location:wrong.html");
    }
    else
    {
        header("location:voting.html");
    }
    mysqli_close($conn);
?>