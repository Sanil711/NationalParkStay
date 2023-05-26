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
    
    <title>Camp 4</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Camp 4";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/campFour_1.jpg" alt="CampFour1" class="mainImg">

        <div class="textContent">
            <div class="phead">Camp 4</div>
            <div class="p">
                Camp 4 is located in Yosemite Valley near the base of granite cliffs close to Yosemite Falls. Yosemite Valley is centrally located in the park and boasts some of Yosemite's most iconic features.<br>
                This campground is located at 4,000 feet (1,200 m) elevation and can be accessed from all park roads. Camp 4 is within biking and walking distance of many services in Yosemite Valley and is located near the free shuttle route. There are food and grocery services nearby at Yosemite Valley Lodge and Yosemite Village
            </div>
            <section class="infobox2">
                <img src="assets/images/campFour_2.jpg" alt="CampFour2" class="subImgs">
                <img src="assets/images/campFour_3.jpg" alt="CampFour3" class="subImgs">
                <img src="assets/images/campFour_4.jpg" alt="CampFour4" class="subImgs">
                <img src="assets/images/campFour_5.jpg" alt="CampFour5" class="subImgs">
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
                    <td>No RV or Trailers</td>
                    <td>$10/ person</td>
                    <td>61</td>
                    <td>0</td>
                    <td>Tap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.0852989164573!2d-119.60520027300961!3d37.741073857165254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8096ed939b66e9d9%3A0xfc3014985c27ae0a!2sCamp%204%20Yosemite%20Valley!5e1!3m2!1sen!2sin!4v1678386391080!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>