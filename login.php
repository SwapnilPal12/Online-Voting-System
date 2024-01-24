<?php
session_start();
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t3'];
$special_username = "SwapnilPal";
$special_password = "swapnil@123";
$sql="SELECT * FROM voter";
$result=mysqli_query($conn,$sql);
$c=0;
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["uname"]==$un && $row["pass"]==$pd)
         {
            $c++;
        }
        else if($un == $special_username && $pd == $special_password) {
            $c--;
        }

        
    }
    if($c== 0)
    {
        header("location:wrong.html");
    }
    else if($c<=-1){
        header("location: displayuser.php");}
    
    else
    {
        header("location:voting.html");
    }
    mysqli_close($conn);
?>