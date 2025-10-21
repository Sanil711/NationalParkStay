<!DOCTYPE html>
<html lang="en"> 
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon link -->
    <link rel="icon" href="../assets/images/favicon.png">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../assets/css/reservations.css">
    <link rel="stylesheet" href="../assets/css/header_footer.css">
    <!-- Js Link -->
    <script defer src="../assets/js/reservations.js"></script>

    <title>Reservations</title>
</head>
    <body>
        <?php include "header.php"; ?>
        <?php
        session_start();
        if($_SESSION['email']==null ||$_SESSION['email']=="" ){    
            header("Location: login.php");
        }?>
    
     <section class="resBox">
        <form action="reservationschk.php" method="post" class="rForm">
            
            <div class="cCont">
                <label class="lcLabel">Campground</label>
                <input disabled type="text" class="lcselect" value="<?php echo $_SESSION['campname'] ?>" name="lodgeorcamp"/>
            </div>

            <div class="cCont dates">
                <div class="inout">
                    <label class="checkInLabel">Check in</label>
                    <input id="checkIn" type="date" class="checkIn" name="checkin">
                </div>
                <div class="inout">
                    <label class="checkOutLabel">Check out</label>
                    <input id="checkOut" type="date" class="checkOut" name="checkout">
                </div>
            </div>
            
            <div class="travelersCount">
                <label class="adultLabel">Adults</label>
                <input type="number" class="guest" value="0" id="adults" name="adults">
            </div>
            
            <div class="travelersCount">
                <label class="childLabel">Children</label>
                <input type="number" class="guest" value="0" id="children" name="children">
            </div>

            <input type="submit" value="Check availability" class="resBtn" name="resBtn">
        </form>
    </section>
    <div class="resIntro">
        <h1>MAKE YOUR RESERVATION</h1>
        <p>Other than the entrance fee, you don't need a reservation or permit to visit SGNP. However, you should
            get a lodging or campground reservation if you plan to spend the night.<br>
            This page allows you to do the exact thing !<br>
            Choose the perfect lodging for your next trip with the box on the left side that lets you select
            lodgings, campings, your check-in and check-out dates and number of members on your trip.
        </p>
    </div>



<?php
// $lodgeorcamp = $_POST['lodgeorcamp'];
// $checkin =$_POST['checkin'];
// $checkout =$_POST['checkout'];
// $adults = $_POST['adults'];
// $children = $_POST['children'];
// $userid=$_SESSION['id'];
// echo $userid;
// include "config.php";

// if(!$conn){
//     echo "Connection Failed...";
//     header("Location:http://localhost/NationalParkManagementSystem/attractions.html");
// }
// else{
//     if(isset($_POST['resBtn'])){
//         $sql = "INSERT INTO reservationsdb(lodgeorcamp,checkin,checkout,adults,children,userid) VALUES('$lodgeorcamp','$checkin','$checkout', '$adults',$children,$userid)";
//         if($conn->query($sql)){
//             //redirect to reservationDetails page
//             header("Location:http://localhost/NationalParkManagementSystem/ReservationsDetails.php");
//         }
//         else{
//             echo "Error: $conn->error";
//             header("Location:http://localhost/NationalParkManagementSystem/attractions.html");
//         }
//     }
// }
?>
</body>
</html>