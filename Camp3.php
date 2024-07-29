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
    
    <title>Tungareshwar Valley Vista</title>
</head>

<body> 
    <?php include "header.php";
    $_SESSION["campname"] = "Tungareshwar Valley Vista";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/tungareshwar_1.jpg" alt="tungareshwar" class="mainImg">

        <div class="textContent">
            <div class="phead">Tungareshwar Valley Vista</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Perched on the slopes of Tungareshwar Hill, overlooking the lush valleys of the national park.</li>
                    <li class="list-group-item">Special Features: Spectacular sunrise views over the mist-covered valleys. Known for occasional leopard sightings at dawn.</li>
                    <li class="list-group-item">Amenities: Elevated camping decks, nature interpretation center, and guided wildlife trails.</li>
                    <li class="list-group-item">Estimated Cost: ₹2000/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="assets/images/tungareshwar_2.jpg" alt="tungareshwar" class="subImgs">
                <img src="assets/images/bodybg2.jpg" alt="tungareshwar" class="subImgs">
                <img src="assets/images/tungareshwar_4.jpg" alt="tungareshwar" class="subImgs">
                <img src="assets/images/tungareshwar_5.jpg" alt="tungareshwar" class="subImgs">
            </section>
        </div>
    </section>


    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13414.472597383692!2d72.92285925061763!3d19.264259397241236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1713977223325!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>