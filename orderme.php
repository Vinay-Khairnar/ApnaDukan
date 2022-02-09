<?php
$user="login";
include 'check_con.php';


session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$id = $_GET['pid'];
$vuser = $_GET['vuser'];
$address = "House No. : ".$_GET['address'] ." , Street : ". $_GET['address2']." , City : ". $_GET['address3']." , State : ". $_GET['address4']." , Postal Code : ". $_GET['address5']." , Country : ". $_GET['address6'];
$total = $_GET['total'];
$conn = mysqli_connect($servername, $username, $password, $dbname); 

$sql = "INSERT INTO orders(`user`,`vuser`,`address`,`pid`) VALUES ('$user','$vuser','$address','$id')";

if (mysqli_query($conn,$sql))
 {    
    header('location:order_submitted.php?total='.$total);

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);





}
?>