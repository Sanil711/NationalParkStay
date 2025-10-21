<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon link -->
    <link rel="icon" href="../assets/images/favicon.png">
    <!-- CSS links -->
    <link rel="stylesheet" href="../assets/css/login&register.css">
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