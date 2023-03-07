<!-- HTML Code !-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Icon Link -->
        <link rel="icon" href="assets/images/favicon.png">
        <!-- CSS Link -->
        <link rel="stylesheet" href="assets/css/reservationDetails.css">
        <!-- JS Link -->
        <script defer src="assets/js/reservationDetails.js"></script>

    <title>Reservations Details</title>
</head>
<body>
    <?php 
     error_reporting(0);
     session_start();
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }    
    
    include "config.php";
    if(!$conn){
        echo "Connection Failed...";
    }
    else{
        $user=$_SESSION['id'];
        $sql_reservation = "select * from v1 where userid='$user'";
        $result = $conn->query($sql_reservation);
    }
    ?>

    <label>Your Reservation Details</label>
    <div class="container">
        <table class="table">
            <thead class="table-dark tableContent">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Lodge Or Camp</th>
                    <th scope="col">Check in Date</th>
                    <th scope="col">Check out Date</th>
                    <th scope="col">Adults</th>
                    <th scope="col">Children</th>
                    <th scope="col">E-Mail</th> 
                    <th scope="col">Edit</th> 
                    <th scope="col">Delete</th> 
                </tr>
            </thead>
    <tbody class="tableContent">
    <tr>
    <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<th scope='row'> ". $row['reservation_id']."</th>";
        echo  "<td>" . $row["lodgeorcamp"]."</td>";
        echo "<td>" . $row["checkin"]."</td>";
        echo "<td>" . $row["checkout"]."</td>";
        echo "<td>" . $row["adults"]."</td>";
        echo "<td>" . $row["children"]."</td>";
        echo "<td>" . $row["email"]."</td>";        
        
        echo '<td><b><a href="edit.php?id='. $row['reservation_id'].'">Edit</a></b></td>';
        echo '<td><b><a href="delete.php?id='. $row['reservation_id'].'">Delete</a></b></td>';
        // echo '<td><input type="button" value="Edit" class="btn btnEdit" onclick="editRes()" ></td>'; 
        // echo '<td><input type="button" value="Delete" class="btn btnDel" onclick="delRes()" ></td>'; 
        echo "</tr>";
    }
} else{
    echo "0 results";
    }?>
             
    </tbody>
    </table>
    </div>

    <input type="button" value="Go Home" class="btn btnHome" onclick="goHome()">
    <script>
        function goHome(){
            window.location.href = "http://localhost/NPS/index.php";
        }
    </script>
</body>
</html>