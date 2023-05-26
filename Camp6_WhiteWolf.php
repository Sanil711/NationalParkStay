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
    
    <title>White Wolf Campground</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "White Wolf Campground";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/whiteWolf_1.jpg" alt="WhiteWolfCampground1" class="mainImg">

        <div class="textContent">
            <div class="phead">White Wolf Campground</div>
            <div class="p">
                White Wolf Campground is located off the Tioga Road between Tuolumne Meadows and Crane Flat, approximately an hour from Yosemite Valley at 8,000 feet (2,400 m).<br>
                The campground is tucked into the forest about a mile from Tioga Road near White Wolf Lodge. 
                Trailheads nearby lead to Lukens and Harden Lakes and the area is popular for those accessing other wilderness destinations. Minimal services may be available at White Wolf Lodge (if open). There are no other visitor services close to the campground. 
            </div>
            <section class="infobox2">
                <img src="assets/images/whiteWolf_2.jpg" alt="WhiteWolfCampground2" class="subImgs">
                <img src="assets/images/whiteWolf_3.jpg" alt="WhiteWolfCampground3" class="subImgs">
                <img src="assets/images/whiteWolf_4.jpg" alt="WhiteWolfCampground4" class="subImgs">
                <img src="assets/images/whiteWolf_5.jpg" alt="WhiteWolfCampground5" class="subImgs">
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
                    <td>8000ft/2400m</td>
                    <td>27ft-35ft</td>
                    <td>$30</td>
                    <td>74</td>
                    <td>0</td>
                    <td>Tap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1695.8380665118582!2d-119.65098752412554!3d37.85710291313043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8096e4454e5c7939%3A0xb7a31d7c9cc9ed0a!2sWhite%20Wolf%20Campground!5e1!3m2!1sen!2sin!4v1678386710380!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>