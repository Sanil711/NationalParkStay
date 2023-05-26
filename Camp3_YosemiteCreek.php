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
    
    <title>Yosemite Creek Campground</title>
</head>

<body> 
    <?php include "header.php";
    $_SESSION["campname"] = "Yosemite Creek Campground";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/yosemiteCreek_1.jpg" alt="YosemiteCreekCampground1" class="mainImg">

        <div class="textContent">
            <div class="phead">Yosemite Creek Campground</div>
            <div class="p">
                Yosemite Creek Campground is located nearly 5 miles off the Tioga Road (via a rough road) 26 miles west of Tuolumne Meadows, and a little over an hour from Yosemite Valley.<br>
                Located in the forest at 7,700 feet (2,300 m) many campsites are close to Yosemite Creek, which is the only water source (must be filtered, treated, or boiled). RVs and Trailers are not recommended for this harder to access, and more primitive campground. There are no visitor services close to the campground.
            </div>
            <section class="infobox2">
                <img src="assets/images/yosemiteCreek_2.jpg" alt="YosemiteCreekCampground2" class="subImgs">
                <img src="assets/images/yosemiteCreek_3.jpg" alt="YosemiteCreekCampground3" class="subImgs">
                <img src="assets/images/yosemiteCreek_4.jpg" alt="YosemiteCreekCampground4" class="subImgs">
                <img src="assets/images/yosemiteCreek_5.jpg" alt="YosemiteCreekCampground5" class="subImgs">
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
                    <td>7700ft/2300m</td>
                    <td>RV/Trailer not recommended</td>
                    <td>$24</td>
                    <td>75</td>
                    <td>2</td>
                    <td>Creek(boil)</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.618862457675!2d-119.59792228492034!3d37.82643511695903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8096faa9039d5b4d%3A0xd2b96739de954890!2sYosemite%20Creek%20Campground!5e1!3m2!1sen!2sin!4v1678386789332!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>