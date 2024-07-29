<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Link -->
    <link rel="stylesheet" href="assets/css/reservations.css">
    <link rel="stylesheet" href="assets/css/header_footer.css">
    <!-- JS Link -->
    <script defer scr="assets/js/reservations.js"></script>
    <title>Edit Reservations</title>
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
    $sql = "Select * FROM reservationsdb WHERE reservation_id=$id";

 
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
?>

  

     <section class="resBox">
        <form action="" method="post" class="rForm">
        <input type="hidden" name="id" value="<?php echo $id; ?>" required/>
            <div class="cCont">
                <label class="lcLabel">Choose your place to stay at</label>
                
                <select class="lcselect" name="lodgeorcamp" >
                    <option selected="true" value="">Choose your camp or lodging</option>
                    <option value="Bamboo Grove Retreat">Bamboo Grove Retreat</option>
                    <option value="Tulsi Lake Tranquility">Tulsi Lake Tranquility</option>
                    <option value="Tungareshwar Valley Vista">Tungareshwar Valley Vista</option>
                    <option value="Aarey Enclave Escape">Aarey Enclave Escape</option>
                    <option value="Powai Lakeside Haven">Powai Lakeside Haven</option>
                    <option value="Yeoor Hills Hideaway">Yeoor Hills Hideaway</option>
                </select>
            </div>

            <div class="cCont dates">
                <div class="inout">
                    <label class="checkInLabel" >Check in</label>
                    <input type="date" class="checkIn" name="checkin" id="checkIn" value="<?php echo $row['checkin'] ?>"required>
                </div>
                <div class="inout">
                    <label class="checkOutLabel">Check out</label>
                    <input type="date" class="checkOut" name="checkout" id="checkOut" value="<?php echo $row['checkout'] ?>"required>
                </div>
            </div>
            
            <div class="travelersCount">
                <label class="adultLabel">Adults</label>
                <input type="number" class="guest" id="adults" value="<?php echo $row['adults'] ?>" name="adults"required>
            </div> 
            
            <div class="travelersCount">
                <label class="childLabel">Children</label>
                <input type="number" class="guest" id="children" value="<?php echo $row['children'] ?>" name="children"required>
            </div>

            <input type="submit" value="Update" class="resBtn" name="resBtn">
        </form>
    </section>
<?php



if (isset($_POST['resBtn']))
{ 
$status="";
$id = $_POST['id'];
$lodgeorcamp =  validate($_POST['lodgeorcamp']);
$checkin =    validate($_POST['checkin']);
$checkout = validate($_POST['checkout']);
$adults =  validate($_POST['adults']);
$children =  validate($_POST['children']);
$update="UPDATE reservationsdb SET lodgeorcamp='$lodgeorcamp',checkin='$checkin',checkout='$checkout',adults='$adults',children='$children'  where reservation_id='".$id."'";


if($conn->query($update)){
header("Location:http://localhost/NPS/reservationsDetails.php");
}
} }

else{
    header("Location: login.php?Error deleting record:");
   }  
 }
?>
</body>
</html>