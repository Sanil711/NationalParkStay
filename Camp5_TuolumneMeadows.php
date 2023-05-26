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
    
    <title>Tuolumne Meadows</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Tuolumne Meadows";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/tuolumneMeadows_1.jpg" alt="TuolumneMeadows1" class="mainImg">

        <div class="textContent">
            <div class="phead">Tuolumne Meadows</div>
            <div class="p">
                Tuolumne Meadows Campground is Yosemite's largest, and is located along the Tioga Road, with some areas located close to the Tuolumne River.<br>
                At 8,000 feet (2,600 m) this campground is open seasonally and has wonderful summer access to many hikes, lakes, and prominent viewpoints. The campground is located approximately 1 hour and 30 minutes from Yosemite Valley but a small store, grill, and post office are located nearby in Tuolumne Meadows.
            </div>
            <section class="infobox2">
                <img src="assets/images/tuolumneMeadows_2.jpg" alt="TuolumneMeadows2" class="subImgs">
                <img src="assets/images/tuolumneMeadows_3.jpg" alt="TuolumneMeadows3" class="subImgs">
                <img src="assets/images/tuolumneMeadows_4.jpg" alt="TuolumneMeadows4" class="subImgs">
                <img src="assets/images/tuolumneMeadows_5.jpg" alt="TuolumneMeadows5" class="subImgs">
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
                    <td>8600ft/2600m</td>
                    <td>35ft-35ft</td>
                    <td>$36</td>
                    <td>304</td>
                    <td>7</td>
                    <td>Tap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9803.76876548356!2d-119.35970023777804!3d37.87344979352085!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809659c6a41efb9d%3A0x44cb0c2f5b7d30f5!2sTuolumne%20Meadows%20Campground!5e1!3m2!1sen!2sin!4v1682603500592!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>