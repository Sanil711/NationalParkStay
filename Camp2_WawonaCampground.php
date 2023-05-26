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

    <title>Wawona Campground</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Wawona Campground";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/wawonaCamp_1.jpg" alt="WawonaCampground1" class="mainImg">

        <div class="textContent">
            <div class="phead">Wawona Campground</div>
            <div class="p">
                The Wawona Campground is located along the South Fork Merced River close to historic Wawona. At an elevation of 4,000 feet (1,219 m), the campground is located in the southern end of the park, 27 miles and approximately 45 minutes from Yosemite Valley.<br>
                The majestic Mariposa Grove of Giant Sequoias is just a short drive away and the Yosemite History Center is in nearby Wawona where you can see some of the park’s oldest structures. Wawona offers a visitor center and a market.
            </div>
            <section class="infobox2">
                <img src="assets/images/wawonaCamp_2.jpg" alt="WawonaCampground2" class="subImgs">
                <img src="assets/images/wawonaCamp_3.jpg" alt="WawonaCampground3" class="subImgs">
                <img src="assets/images/wawonaCamp_4.jpg" alt="WawonaCampground4" class="subImgs">
                <img src="assets/images/wawonaCamp_5.jpg" alt="WawonaCampground5" class="subImgs">
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
                    <td>35ft-35ft</td>
                    <td>$36</td>
                    <td>93</td>
                    <td>2</td>
                    <td>Tap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9362.174746141169!2d-119.66602324665944!3d37.53619437371881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80969101f0d69c13%3A0xdeea110e6c2d95ec!2sWawona%20Campground!5e1!3m2!1sen!2sin!4v1678386901444!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>