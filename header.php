<?php error_reporting(0);?>
<header>
        <a href="http://localhost/NPS/index.php">
            <img class="logo" src="assets/images/site_logo.png" alt="logo">
        </a>

        <div class="navs">
            <div class="dropDown">
                <a href="http://localhost/NPS/attractions.php">Attractions  <img src="assets/images/triangle-bottom-arrow.svg" alt="dropdown icon"> </a>
                <ul class="sub_navs">
                    <a href="http://localhost/NPS/attractions.php#one">
                        <li>Flora</li>
                    </a>
                    <a href="http://localhost/NPS/attractions.php#two">
                        <li>Fauna</li>
                    </a>
                    <a href="http://localhost/NPS/attractions.php#three">
                        <li>Scenic Landmarks</li>
                    </a>
                </ul>
            </div>

            <a href="http://localhost/NPS/camps.php">
                Camps
            </a>

            <div class="dropDown">
                <?php 
                 session_start();
                 if ( !$_SESSION['email'] == null || !$_SESSION['email'] == "")
                 {
                     ?>
                <a href="reservationsDetails.php">Reservation Details</a>
                <?php }?>
            </div>
            </a>
        </div>

        <div class="signInUp">
            <img src="assets/images/loginIcon.png" alt="login" class="loginLogo">
            <ul class="profile_Navs">
            <?php
            if ($_SESSION['email'] == null || $_SESSION['email'] == "") {?>   
                <a href="http://localhost/NPS/register.php">
                    <li>Sign Up</li>
                </a>
                <a href="http://localhost/NPS/login.php">
                    <li>Login</li>
                </a>
                <?php } 
                else {
                    $user = $_SESSION['email']; ?>
                <a href="#">
                    <li><?php echo $user ?></li>
                </a>
                <a href="Logout.php">
                <li>Logout</li>
                </a>
                <?php } ?>
            </ul>
        </div>
</header> 