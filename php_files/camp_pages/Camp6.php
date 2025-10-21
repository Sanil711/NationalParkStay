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
    
    <title>Yeoor Hills Hideaway</title>
</head>

<body>
    <?php include "../header.php";
    $_SESSION["campname"] = "Yeoor Hills Hideaway";
    ?>
    
    <section class="infobox1">
        <img src="../../assets/images/yeorHills_1.jpg" alt="yeorHills" class="mainImg">

        <div class="textContent">
            <div class="phead">Yeoor Hills Hideaway</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Nestled in the serene Yeoor Hills, surrounded by diverse flora and fauna.</li>
                    <li class="list-group-item">Special Features: Tranquil forest setting with occasional sightings of rare orchids and butterflies. Known for its resident leopard population.</li>
                    <li class="list-group-item">Amenities: Hillside camping terraces, forest safaris, and night treks with trained naturalists.</li>
                    <li class="list-group-item">Estimated Cost: ₹2500/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="../../assets/images/yeorHills_2.jpg" alt="yeorHills" class="subImgs">
                <img src="../../assets/images/yeorHills_3.jpg" alt="yeorHills" class="subImgs">
                <img src="../../assets/images/yeorHills_4.jpg" alt="yeorHills" class="subImgs">
                <img src="../../assets/images/yeorHills_5.jpg" alt="yeorHills" class="subImgs">
            </section>
        </div>
    </section>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16514.7334140748!2d72.92853561232842!3d19.235939887736002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ba2ada5d5f83%3A0xee246ee0cdac06eb!2sYeoor%20Hills%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1713979562700!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "../footer.php"; ?>
</body>
</html>