<!-- PHP Code -->
<?php
error_reporting(0);
if(isset($_POST['registerBtn'])){
    $travel_username = $_POST['travel_username'];
    $email = $_POST['email'];
    $travel_password = $_POST['travel_password'];
    $phone_no = $_POST['phone_no'];

    $usernameRegex = '/^([\w ]{5,})$/' ;
    $mailRegex = '/^([\w\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,6})$/' ;
    $passwordRegex = '/^([\w]{8,})$/' ;
    $phoneRegex = '/^([0-9]{10})$/';


    if(!preg_match($usernameRegex,$travel_username)){
        $usernameError = "Enter a valid username, no special characters allowed";
    }
    if(!preg_match($mailRegex,$email)){
        $mailError = "Enter a valid mail";
    }
    if(!preg_match($passwordRegex,$travel_password)){
        $passwordError = "Password should be atleast 8 characters long and no special characters allowed";
    }
    if(!preg_match($phoneRegex,$phone_no)){
        $phoneError = "Phone number should be atleast 10 digits long and no characters allowed";
    }

    if((preg_match($usernameRegex,$travel_username)) && (preg_match($mailRegex,$email)) && (preg_match($passwordRegex,$travel_password)) && (preg_match($phoneRegex,$phone_no))){
        // register procedure
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "nationalparkstaymanagement";

        $conn = mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            echo "Connection Failed...";
        }
        else{
            if(isset($_POST['registerBtn'])){
                $sql = "INSERT INTO usersdb(travel_username,email,travel_password,phone_no) VALUES ('$travel_username','$email','$travel_password','$phone_no')";
                if($conn->query($sql)){
                    //redirect to login page
                    header("Location:http://localhost/NPS/login.php");
                }
                else{
                    echo "Error: $conn->error";
                }
            }
        }
    }
}
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
    <title>Register</title>
</head>
<body> 
    <section class="loginBox">
        <form action="" method="POST">
            <h1>Sign Up</h1>
            <input name="travel_username" type="text" placeholder="Username" class="username">
            <span class="error"><?php if(isset($_POST['registerBtn'])){
                echo $usernameError; } 
            ?></span>

            <input name="email" type="text" placeholder="Email" class="mail">
            <span class="error"><?php if(isset($_POST['registerBtn'])){
                echo $mailError; }
            ?></span>

            <input name="travel_password" type="password" placeholder="Password" class="password">
            <span class="error"><?php if(isset($_POST['registerBtn'])){
                echo $passwordError; }
            ?></span>

            <input name="phone_no" type="text" placeholder="Phone Number" class="phno password">
            <span class="error"><?php if(isset($_POST['registerBtn'])){
                echo $phoneError; }
            ?></span>
            <input type="submit" name="registerBtn" value="Register" class="button">
        </form>
    </section> 
</body>
</html>