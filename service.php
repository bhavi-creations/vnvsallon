<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="te">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sreenika Services - 3 Column Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>



    </style>
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="service-header">Our Premium Services</h2>
            </div>
        </div>

        <div class="row g-4 row-gap justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="./assets/img/hair_servie_1.png" class="service-img" alt="Hair Service">
                    </div>
                    <div class="service-content">
                        <h5 class="service-title">Hair Service</h5>
                        <p class="service-text">Professional hair styling and luxury treatments for a modern look.</p>
                        <a href="hair_services.php" class="service-btn">READ MORE</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="./assets/img/men_grooming_1.png" class="service-img" alt="Beauty Service">
                    </div>
                    <div class="service-content">
                        <h5 class="service-title">Men’s Grooming</h5>
                        <p class="service-text">Upgrade your style with expert haircuts, beard shaping, and complete grooming care.</p>
                        <a href="men_grooming_service.php" class="service-btn">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="./assets/img/bridal_img_1.png" class="service-img" alt="Bridal Service">
                    </div>
                    <div class="service-content">
                        <h5 class="service-title">Bridal  Service</h5>
                        <p class="service-text">Making your wedding day magical with elite makeup and styling.</p>
                        <a href="bridal_service.php" class="service-btn">READ MORE</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="./assets/img/spa_1.png" class="service-img" alt="Spy Device">
                    </div>
                    <div class="service-content">
                        <h5 class="service-title">Spa Service</h5>
                        <p class="service-text">dvanced hygiene standards and professional therapists for your comfort</p>
                        <a href="spa_servie.php" class="service-btn">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-img-container">
                        <img src="./assets/img/hair _extension_1.png" class="service-img" alt="Groom Service">
                    </div>
                    <div class="service-content">
                        <h5 class="service-title">Hair Extensions</h5>
                        <p class="service-text">Safe and hygienic techniques for smooth, clean skin.</p>
                        <a href="hair_extenstions.php" class="service-btn">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include 'footer.php'; ?>