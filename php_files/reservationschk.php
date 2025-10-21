<?php
 
session_start(); 

include "config.php";
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$lodgeorcamp =  $_SESSION['campname']; 
$checkin =    validate($_POST['checkin']); 
$checkout = validate($_POST['checkout']);
$adults =  validate($_POST['adults']);
$children =  validate($_POST['children']);
$userid=$_SESSION['id'];
echo $userid;

include "config.php";

if(!$conn){
    echo "Connection Failed...";
    header("Location:http://localhost/NPS/index.php");
}
else{
    if(isset($_POST['resBtn'])){
        $sql = "INSERT INTO `reservationsdb` ( `lodgeorcamp`, `checkin`, `checkout`, `adults`, `children`, `userid`)  VALUES('$lodgeorcamp','$checkin','$checkout', '$adults','$children','$userid')";
        if($conn->query($sql)){
            //redirect to reservationDetails page
            header("Location:http://localhost/NPS/reservationsDetails.php");
        }
        else{
            echo "Error: $conn->error";
            header("Location:http://localhost/NPS/index.php");
        }
    }
}

?>