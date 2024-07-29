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
    
    <title>Aarey Enclave Escape</title>
</head>

<body>
    <?php include "header.php";
    $_SESSION["campname"] = "Aarey Enclave Escape";
    ?>
    
    <section class="infobox1">
        <img src="assets/images/aarey_1.jpg" alt="aarey" class="mainImg">

        <div class="textContent">
            <div class="phead">Aarey Enclave Escape</div>
            <div class="p">
                <ul class="list-group">
                    <li class="list-group-item">Location: Surrounded by the dense Aarey Milk Colony forest, offering a tranquil escape from city life.</li>
                    <li class="list-group-item">Special Features: Abundant birdlife including peafowls and kingfishers. Ideal for nature enthusiasts and wildlife photographers.</li>
                    <li class="list-group-item">Amenities: Secluded camping spots, birdwatching towers, and butterfly gardens nearby.</li>
                    <li class="list-group-item">Estimated Cost: ₹1600/-</li>
                </ul>
            </div>
            <section class="infobox2">
                <img src="assets/images/aarey_2.jpg" alt="aarey" class="subImgs">
                <img src="assets/images/aarey_3.jpg" alt="aarey" class="subImgs">
                <img src="assets/images/aarey_4.jpg" alt="aarey" class="subImgs">
                <img src="assets/images/aarey_5.jpg" alt="aarey" class="subImgs">
            </section>
        </div>
    </section>

    <section class="infobox3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28699.07101119161!2d72.85859240039456!3d19.153164842604628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7ea97555043%3A0xedc3ab3e5ae395c3!2sAarey%20Colony%2C%20Goregaon%2C%20Mumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1713977580941!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
        <button class="resBtn" onclick="navigateToReservations()">Reserve Campsite</button>
    </section>
    
    <?php include "footer.php"; ?>
</body>
</html>