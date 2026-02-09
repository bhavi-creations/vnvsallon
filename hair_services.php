<?php include  'header.php'; ?>


<div class="container-fluid snk-main-wrapper">
    <div class="row g-4">

        <div class="col-lg-2 col-md-4 snk-order-nav">
            <div class="snk-service-navigator">
                <h6 class="snk-nav-title d-flex justify-content-center">Menu</h6>
                <nav>

                
                    <a href="hair_services.php" class="snk-category-link snk-active">Hair Services</a>
                    <a href="hair_services.php" class="snk-category-link">Beauty Service</a>
                    <a href="hair_services.php" class="snk-category-link">Bridal & Groom Service</a>
                    <a href="hair_services.php" class="snk-category-link">Spa Service</a>
                    <a href="hair_services.php" class="snk-category-link">Hair extraction</a>
                    <!-- <a href="#" class="snk-category-link">Extensions</a> -->
                </nav>
            </div>
        </div>

        <div class="col-lg-7 col-md-8 snk-order-content">
            <article class="snk-content-vault">
                <div class="snk-hero-frame">
                    <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        alt="Salon Interior">
                </div>

                <h1 class="snk-section-heading ">Hair Services</h1>
                <p class="lead text-white">Experience luxury hair treatments tailored to your unique personality. We
                    combine art and science for the perfect look.</p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h4 class="text-gold hair_secton_heaign">Premium Cuts</h4>
                        <ul class="snk-feature-list ">
                            <li>Advanced Layering</li>
                            <li>Architectural Bobs</li>
                            <li>Textured Pixie Styles</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-gold hair_secton_heaign">Chemical Art</h4>
                        <ul class="snk-feature-list">
                            <li>Balayage & Ombre</li>
                            <li>Scalp Detox Therapy</li>
                            <li>Keratin Infusion</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>

        <div class="col-lg-3 col-md-12 snk-order-form">
            <div class="snk-booking-portal">
                <div class="snk-portal-header">
                    <h3>Reserve Visit</h3>
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
<?php include 'footer.php'; ?>