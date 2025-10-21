<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
}
     
    
include "config.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

if(!$conn){
    echo "Connection Failed...";
}
else{
    if (isset($_GET['id']) && is_numeric($_GET['id']))
    {
        $id = validate($_GET['id']);
        $sql = "DELETE FROM reservationsdb WHERE reservation_id=$id";
        
        if($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location: reservationsDetails.php");
        }
        else{
            echo "Error deleting record: " . $conn->error;
            header("Location: login.php?error=Error deleting record");
        }
    }
    
    else{
        header("Location: login.php?Error deleting record:");
    }
}
    
?>
</body>
</html>