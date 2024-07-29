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
    
    <title>Powai Lakeside Haven</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Powai Lakeside Haven";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/powai_1.jpg" alt="powai" class="mainImg">

        <div class="textContent">
            <div class="phead">Powai Lakeside Haven</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Along the scenic shores of Powai Lake, with stunning views of the Powai skyline.</li>
                    <li class="list-group-item">Special Features: Waterfront camping experience with opportunities for boating, paddleboarding, and lakeside picnics.</li>
                    <li class="list-group-item">Amenities: Lakeside camping pitches, water sports rentals, and lakeside dining options.</li>
                    <li class="list-group-item">Estimated Cost: ₹2200/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="assets/images/powai_2.jpg" alt="powai" class="subImgs">
                <img src="assets/images/powai_3.jpg" alt="powai" class="subImgs">
                <img src="assets/images/powai_4.jpg" alt="powai" class="subImgs">
                <img src="assets/images/powai_5.jpg" alt="powai" class="subImgs">
            </section>
        </div>
    </section>

    <section class="infobox3">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13039.43259799114!2d72.90422152560389!3d19.136298529065144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c800dcff9427%3A0xc4a05fd4125d014!2sPowai%20Garden!5e1!3m2!1sen!2sin!4v1713979357345!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>