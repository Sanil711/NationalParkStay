<?php 
session_start();  
include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);


    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM usersdb WHERE email='".$uname."' AND travel_password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] ===$uname && $row['travel_password'] ===$pass) {
                echo "Logged in!";
                $_SESSION['user_name'] = $row['travel_username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['user_id'];
                header("Location: http://localhost/NPS/index.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect User  or password");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}