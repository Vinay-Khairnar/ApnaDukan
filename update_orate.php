<?php

include 'check_con.php';

$itsuser = $_GET['itsuser'];
$pid=$_GET['pid'];
$orate=$_GET['orate'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}


$sql = "Update vendor_$itsuser set orate = '$orate'  where id=$pid "  ;

if (mysqli_query($conn,$sql))
 {    
    
 
    header('location:vendors.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);

 ?>