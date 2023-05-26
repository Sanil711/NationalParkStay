<!DOCTYPE html> 
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="icon" href="assets/images/favicon.png">
    <!-- CSS links -->
    <link rel="stylesheet" href="assets/css/header_footer.css">
    <link rel="stylesheet" href="assets/css/camp_sites.css">
    <!-- Js link -->
    <script defer src="assets/js/camps.js"></script>

    <title>Pines Campground</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Pines Campground";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/pinesCamp_1.jpg" alt="PinesCampground1" class="mainImg">

        <div class="textContent">
            <div class="phead">Pines Campground</div>
            <div class="p">
                Pines Campground is located along the Merced River in Yosemite Valley. Yosemite Valley is centrally located in the park and boasts some of Yosemite's most iconic features.<br>
                This campground is located at 4,000 feet (1,219 m) elevation and can be accessed from all park roads. Pines Camp is within biking and walking distance of many services and trailheads in Yosemite Valley and is located on the free shuttle route.<br> 
                There are food and grocery services nearby at Curry Village and Yosemite Village.
            </div>
            <section class="infobox2">
                <img src="assets/images/pinesCamp_2.jpg" alt="PinesCampground2" class="subImgs">
                <img src="assets/images/pinesCamp_3.jpg" alt="PinesCampground3" class="subImgs">
                <img src="assets/images/pinesCamp_4.jpg" alt="PinesCampground4" class="subImgs">
                <img src="assets/images/pinesCamp_5.jpg" alt="PinesCampground5" class="subImgs">
            </section>
        </div>
    </section>

    <div class="container">
        <table class="table table-light tableContent" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">Elevation</th>
                    <th scope="col">Maximum RV/Trailer Length</th>
                    <th scope="col">Daily Fees</th>
                    <th scope="col">Sites</th>
                    <th scope="col">Access sites for Disabled people</th>
                    <th scope="col">Water</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4000ft/1200m</td>
                    <td>40ft-35ft</td>
                    <td>$36</td>
                    <td>238</td>
                    <td>10</td>
                    <td>Tap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.2811115159607!2d-119.56381203613464!3d37.7362470556947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8096f24a1bc3a93d%3A0xbda9e022a9515b5a!2sUpper%20Pines%20Campground!5e1!3m2!1sen!2sin!4v1682600387572!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>