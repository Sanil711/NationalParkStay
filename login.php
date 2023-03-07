<!-- PHP Code -->
<?php
// error_reporting(0);
// if (isset($_POST['loginBtn'])){
//     $email = $_POST['email'];
//     $travel_password = $_POST['travel_password'];

//     // $mailRegex = '/^([\w\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,6})$/' ;
//     $passwordRegex = '/^([\w]{8,})$/' ;

//     if(!preg_match($mailRegex,$email)){
//         $mailError = "Enter a valid mail";
//     }
//     if(!preg_match($passwordRegex,$travel_password)){
//         $passwordError = "Password should be atleast 8 characters long and no special characters allowed";
//     }

//     if((preg_match($mailRegex,$email)) && (preg_match($passwordRegex,$travel_password))){
//         $servername = "localhost";
//         $username = "root";
//         $password = "";
//         $database = "nationalparkstaymanagement";

//         $conn = mysqli_connect($servername,$username,$password,$database);
//         if(!$conn){
//             echo "Connection Failed...";
//         }
//         else{
//             $sql = "SELECT * FROM usersdb";
//             $result = mysqli_query($conn,$sql);

//             while($row = mysqli_fetch_array($result)){
//                 $verify_email = $row['email'];
//                 $verify_password = $row['travel_password'];
//             };

//             if($verify_email == $email && $verify_password == $travel_password){
//                 header("Location: index.php");
//             }
//             else{
//                 echo "INVALID Email id or Password"; 
//             }
//         }
//     }
// }
?>

<!-- HTML Code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon link -->
    <link rel="icon" href="assets/images/favicon.png">
    <!-- CSS links -->
    <link rel="stylesheet" href="assets/css/login&register.css">
    <title>Login</title>
</head>

<body>
    <section class="loginBox">
        <form action="loginchk.php" method="POST">
            <h1>LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <input type="text" name="uname" placeholder="Email" class="mail">
            <span class="error"><?php if (isset($_POST['loginBtn'])) {
                echo $mailError;}
            ?>
            </span>
            <input type="password" name="password" placeholder="Password" class="password">
            <span class="error"><?php if (isset($_POST['loginBtn'])) {
                echo $passwordError;}
            ?>
            </span>
            <input type="submit" name="loginBtn" value="Login" class="button">
        </form>
    </section>
</body>
</html>