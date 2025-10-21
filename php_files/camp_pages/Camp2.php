<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon link -->
    <link rel="icon" href="../../assets/images/favicon.png">
    <!-- CSS links -->
    <link rel="stylesheet" href="../../assets/css/header_footer.css">
    <link rel="stylesheet" href="../../assets/css/camp_sites.css">
    <!-- Js link -->
    <script defer src="../../assets/js/camps.js"></script>

    <title>Tulsi Lake Tranquility</title>
</head>

<body>
    <?php include "../header.php";
    $_SESSION["campname"] = "Tulsi Lake Tranquility";
    ?>
    
    <section class="infobox1">
        <img src="../../assets/images/tulsiLake_1.jpg" alt="tulsiLake" class="mainImg">

        <div class="textContent">
            <div class="phead">Tulsi Lake Tranquility</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Set along the tranquil shores of Tulsi Lake, surrounded by dense vegetation.</li>
                    <li class="list-group-item">Special Features: Picturesque lake views and birdwatching opportunities with sightings of migratory birds during winter months.</li>
                    <li class="list-group-item">Amenities: Lakeside camping spots, fishing docks, and birdwatching blinds for enthusiasts.</li>
                    <li class="list-group-item">Estimated Cost: ₹1800/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="../../assets/images/tulsiLake_2.jpg" alt="tulsiLake" class="subImgs">
                <img src="../../assets/images/tulsiLake_3.jpg" alt="tulsiLake" class="subImgs">
                <img src="../../assets/images/tulsiLake_4.png" alt="tulsiLake" class="subImgs">
                <img src="../../assets/images/tulsiLake_5.jpg" alt="tulsiLake" class="subImgs">
            </section>
        </div>
    </section>


    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6588.011969773521!2d72.91324234550689!3d19.192008225811577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9007d204423%3A0x6684783761102a0c!2sTulsi%20Lake!5e1!3m2!1sen!2sin!4v1713973326422!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "../footer.php"; ?>
</body>
</html>