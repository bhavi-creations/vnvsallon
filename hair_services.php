<?php include 'header.php' ; ?>
    <style>
        :root {
            --snk-primary-black: #000000;
            --snk-accent-gold: #dcc136;
            --snk-glass-border: rgba(220, 193, 54, 0.25);
            --snk-card-bg: #111111;
            --snk-input-bg: #080808;
            --snk-text-dim: #b0b0b0;
        }

        body {
            background-color: var(--snk-primary-black);
            color: #ffffff;
            font-family: 'Inter', 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        /* Unique Container Layout */
        .snk-main-wrapper {
            padding: 60px 20px;
        }

        /* --- Left Side: Service Navigation --- */
        .snk-service-navigator {
            position: sticky;
            top: 20px;
        }
        .snk-nav-title {
            color: var(--snk-accent-gold);
            font-size: 0.9rem;
            letter-spacing: 2px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .snk-category-link {
            display: block;
            padding: 14px 18px;
            background: var(--snk-card-bg);
            border: 1px solid var(--snk-glass-border);
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .snk-category-link:hover, .snk-category-link.snk-active {
            background: var(--snk-accent-gold);
            color: var(--snk-primary-black);
            border-color: var(--snk-accent-gold);
            font-weight: 600;
            transform: translateX(8px);
        }

        /* --- Middle: Core Content Area --- */
        .snk-content-vault {
            background: linear-gradient(145deg, #111, #050505);
            border: 1px solid var(--snk-glass-border);
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
        .snk-hero-frame {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 30px;
        }
        .snk-hero-frame img {
            width: 100%;
            display: block;
            transition: transform 0.8s ease;
        }
        .snk-hero-frame:hover img {
            transform: scale(1.05);
        }
        .snk-section-heading {
            color: var(--snk-accent-gold);
            font-weight: 800;
            font-size: 2.2rem;
            margin-bottom: 15px;
        }
        .snk-feature-list {
            list-style: none;
            padding: 0;
        }
        .snk-feature-list li {
            padding: 8px 0;
            color: var(--snk-text-dim);
        }
        .snk-feature-list li::before {
            content: '✦';
            color: var(--snk-accent-gold);
            margin-right: 10px;
        }

        /* --- Right Side: Booking Portal --- */
        .snk-booking-portal {
            background: var(--snk-card-bg);
            border: 1px solid var(--snk-accent-gold);
            border-radius: 20px;
            padding: 30px;
            position: sticky;
            top: 20px;
        }
        .snk-portal-header h3 {
            color: var(--snk-accent-gold);
            text-align: center;
            font-size: 1.5rem;
        }
        .snk-input-field {
            background: var(--snk-input-bg);
            border: 1px solid #333;
            color: #fff;
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 15px;
            width: 100%;
            transition: 0.3s;
        }
        .snk-input-field:focus {
            outline: none;
            border-color: var(--snk-accent-gold);
            box-shadow: 0 0 10px var(--snk-glass-border);
        }
        .snk-submit-trigger {
            background: var(--snk-accent-gold);
            color: var(--snk-primary-black);
            width: 100%;
            border: none;
            padding: 14px;
            border-radius: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: 0.3s;
        }
        .snk-submit-trigger:hover {
            background: #fff;
            transform: translateY(-3px);
        }

        /* --- Responsive Logic --- */
        @media (max-width: 991px) {
            .snk-order-content { order: 1; }
            .snk-order-nav { order: 2; }
            .snk-order-form { order: 3; }
            .snk-main-wrapper { padding: 30px 15px; }
        }
    </style>
</head>
<body>

<div class="container-fluid snk-main-wrapper">
    <div class="row g-4">
        
        <div class="col-lg-2 col-md-4 snk-order-nav">
            <div class="snk-service-navigator">
                <h6 class="snk-nav-title">Menu</h6>
                <nav>
                    <a href="#" class="snk-category-link snk-active">Hair Services</a>
                    <a href="#" class="snk-category-link">Bridal Rituals</a>
                    <a href="#" class="snk-category-link">Skin Therapy</a>
                    <a href="#" class="snk-category-link">Grooming</a>
                    <a href="#" class="snk-category-link">Extensions</a>
                </nav>
            </div>
        </div>

        <div class="col-lg-7 col-md-8 snk-order-content">
            <article class="snk-content-vault">
                <div class="snk-hero-frame">
                    <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Salon Interior">
                </div>
                
                <h1 class="snk-section-heading">Hair Services</h1>
                <p class="lead text-dim">Experience luxury hair treatments tailored to your unique personality. We combine art and science for the perfect look.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h4 class="text-accent">Premium Cuts</h4>
                        <ul class="snk-feature-list">
                            <li>Advanced Layering</li>
                            <li>Architectural Bobs</li>
                            <li>Textured Pixie Styles</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-accent">Chemical Art</h4>
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
                    <input type="email" class="snk-input-field" placeholder="Email Address">
                    <input type="date" class="snk-input-field">
                    <select class="snk-input-field">
                        <option selected disabled>Choose Slot</option>
                        <option>Morning (10AM - 1PM)</option>
                        <option>Afternoon (1PM - 4PM)</option>
                        <option>Evening (4PM - 8PM)</option>
                    </select>
                    <button type="submit" class="snk-submit-trigger">Book Now</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>