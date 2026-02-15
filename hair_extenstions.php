<?php include  'header.php'; ?>


<div class="container-fluid snk-main-wrapper">
    <div class="row g-4">

        <div class="col-lg-2 col-md-4 snk-order-nav">
            <div class="snk-service-navigator">
                <h6 class="snk-nav-title d-flex justify-content-center">Menu</h6>
                  <nav>


                    <a href="hair_services.php" class="snk-category-link snk-active">Hair Services</a>
                    <a href="men_grooming_service.php" class="snk-category-link">Men’s Grooming</a>
                    <a href="bridal_service.php" class="snk-category-link">Bridal Service</a>
                    <a href="spa_servie.php" class="snk-category-link">Spa Service</a>
                    <a href="hair_extenstions.php" class="snk-category-link">Hair extraction</a>
                    <!-- <a href="#" class="snk-category-link">Extensions</a> -->
                </nav>
            </div>
        </div>

        <div class="col-lg-7 col-md-8 snk-order-content service_hair_section">

        <img src="./assets/img/hair _extension_2.png" alt="" class="img-fluid mt-2">

            <header class="hair_extensions_hero">
                <div class="container">
                    <h1>Hair Extensions</h1>
                    <p class="lead mt-4 mx-auto full_service_color" style="max-width: 800px;" >
                        At <strong>V&V Family Salon</strong>, hair extensions are handled with one clear principle: <strong>you should never feel confused, overcharged, or pressured.</strong>
                    </p>
                </div>
            </header>

            <div class="container py-5">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-10">
                        <p class="full_service_color">Extensions can be life-changing for volume and length — but only when the right type, right shade match, and right maintenance plan are chosen. We follow a consultation-first approach.</p>
                    </div>
                </div>

                <section>
                    <h2 class="hair_extensions_section_title">Hair Extension Consultation</h2>
                    <div class="hair_extensions_card">
                        <h4>Start With Clarity</h4>
                        <p class="full_service_color">Before recommending anything, we check:</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="hair_extensions_list">
                                    <li class="full_service_color"><strong>Your goal:</strong> length / volume / highlight effect</li>
                                    <li class="full_service_color"><strong>Your natural hair:</strong> thickness, density, texture</li>
                                    <li class="full_service_color"><strong>Your lifestyle:</strong> office, travel, workouts</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="hair_extensions_list">
                                    <li class="full_service_color"><strong>Budget:</strong> event use vs long-term use</li>
                                    <li class="full_service_color"><strong>Expectation:</strong> natural blend vs bold look</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5">
                    <h2 class="hair_extensions_section_title">What Makes Extensions “Premium”</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="hair_extensions_card">
                                <h4>Shade Match</h4>
                                <p class="small">We match tone and undertone so it doesn’t look “separate.”</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hair_extensions_card">
                                <h4>Texture Match</h4>
                                <p class="small">Straight or wavy — texture must match your real hair.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hair_extensions_card">
                                <h4>Weight Balance</h4>
                                <p class="small">Fullness without being heavy, preventing scalp stress.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5">
                    <h2 class="hair_extensions_section_title">Hair Extensions Options</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="hair_extensions_card">
                                <h3>Volume Extensions</h3>
                                <ul class="hair_extensions_list">
                                    <li class="full_service_color">Increases fullness and thickness</li>
                                    <li class="full_service_color">Improves styling hold</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hair_extensions_card">
                                <h3>Length Extensions</h3>
                                <ul class="hair_extensions_list">
                                    <li class="full_service_color">Adds visible length and flow</li>
                                    <li class="full_service_color">Enhances makeover effect</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="hair_extensions_highlight text-center mt-5">
                    <h4 class="full_service_color">Common Mistakes We Help You Avoid</h4>
                    <p class="mb-0 full_service_color" > Wrong shade match • Too much weight • Poor blending • No after-care</p>
                </div>

            </div>

            <footer>
                <div class="container">
                    <h2 style="color:#dcc136">Ready for a Transformation?</h2>
                    <p class="full_service_color">Our goal is to ensure you feel confident — not dependent.</p>
                    <a href="#" class="hair_extensions_btn mt-4">Book Your Consultation</a>
                </div>
            </footer>
        </div>

        <div class="col-lg-3 col-md-12 snk-order-form">
            <div class="snk-booking-portal">
                <div class="snk-portal-header">
                    <h3>Quick Salon Appointment</h3>
                    <p class="text-center small text-muted">Instant Confirmation</p>
                </div>

                <form class="mt-4">
                    <input type="text" class="snk-input-field" placeholder="Full Name">
                    <input type="text" class="snk-input-field" placeholder="Number">
                    <input type="email" class="snk-input-field" placeholder="Email Address">
                    <input type="date" class="snk-input-field">
                    <select class="snk-input-field">
                        <option selected disabled>Choose SERVICE</option>
                        <option> Hair services </option>
                        <option> Beauty services </option>
                        <option> beidal & groom services </option>
                        <option> Spa services </option>
                        <option> Hair xtraction </option>
                    </select>
                    <button type="submit" class="snk-submit-trigger">Book Now</button>
                </form>
            </div>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>