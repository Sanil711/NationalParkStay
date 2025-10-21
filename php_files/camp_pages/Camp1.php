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

    <title>Bamboo Grove Retreat</title>
</head>

<body>
    <?php include "../header.php";
    $_SESSION["campname"] = "Bamboo Grove Retreat";
    ?>
    
    <section class="infobox1">
        <img src="../../assets/images/bambooGroveRetreat_1.jpg" alt="bambooGroveRetreat" class="mainImg">

        <div class="textContent">
            <div class="phead">Bamboo Grove Retreat</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Nestled amidst a lush bamboo forest at the foothills of Kanheri Caves.</li>
                    <li class="list-group-item">Special Features: Serene ambiance with the soothing rustle of bamboo leaves. Offers a glimpse of native deer and langur monkeys in their natural habitat.</li>
                    <li class="list-group-item">Amenities: Eco-friendly camping platforms, guided nature walks to Kanheri Caves, and proximity to seasonal waterfalls.</li>
                    <li class="list-group-item">Estimated Cost: ₹1500/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="../../assets/images/bambooGroveRetreat_2.jpg" alt="bambooGroveRetreat" class="subImgs">
                <img src="../../assets/images/bambooGroveRetreat_3.jpg" alt="bambooGroveRetreat" class="subImgs">
                <img src="../../assets/images/bambooGroveRetreat_4.jpg" alt="bambooGroveRetreat" class="subImgs">
                <img src="../../assets/images/bodybg4.jpg" alt="bambooGroveRetreat" class="subImgs">
            </section>
        </div>
    </section>


    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22515.382092861455!2d72.90863045702685!3d19.218111367602646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0c88b1d3d9f%3A0x3621dd69daa8e2cf!2sSanjay%20Gandhi%20National%20Park!5e1!3m2!1sen!2sin!4v1713971457310!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "../footer.php"; ?>
</body>
</html>