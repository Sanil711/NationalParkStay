<!DOCTYPE html> 
<html lang="en"> 
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon link -->
    <link rel="icon" href="assets/images/favicon.png">
    <!-- CSS links -->
    <link rel="stylesheet" href="assets/css/header_footer.css">
    <link rel="stylesheet" href="assets/css/camps.css">
    <!-- Js link -->
    <script defer src="assets/js/camps.js"></script>

    <title>Camps</title> 
</head>

<body>
    <section class="blur">
        <?php include "header.php"; ?>
       
        <section class="cards">

            <div class="cardContainer">
                <div class="theCard">
                    <figure class="front card0">
                        <!--  -->
                    </figure>
                    <div class="back card0"> 
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(0)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardContainer">
                <div class="theCard">
                    <figure class="front card1">
                        <!--  -->
                    </figure>

                    <div class="back card1">
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(1)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardContainer">
                <div class="theCard">
                    <figure class="front card2">
                        <!--  -->
                    </figure>

                    <div class="back card2">
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(2)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardContainer cardContainerLast">
                <div class="theCard">
                    <figure class="front card3">
                        <!--  -->
                    </figure>

                    <div class="back card3">
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(3)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardContainer cardContainerLast">
                <div class="theCard">
                    <figure class="front card4">
                        <!--  -->
                    </figure>

                    <div class="back card4">
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(4)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardContainer cardContainerLast">
                <div class="theCard">
                    <figure class="front card5">
                        <!--  -->
                    </figure>

                    <div class="back card5">
                        <div class="opcBg">
                            <button class="btnCamps" onclick="navigateToCamp(5)">
                                RESERVE NOW
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <?php include "footer.php"; ?>

    </section>
</body>

</html>