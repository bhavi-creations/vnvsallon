

<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V&V Family Salon | Kakinada Flagship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --sreenika-dark: #000000;
            --sreenika-accentt: #dcc136; /* Gold */
            --border-glow: rgba(220, 193, 54, 0.3);
            --soft-black: #1a1a1a;
        }

        body {
            background-color: var(--sreenika-dark);
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, .premium-font {
            font-family: 'Playfair Display', serif;
        }

        .text-gold { color: var(--sreenika-accentt); }
        
        /* Hero Section */
        .hero-section {
            padding: 120px 0;
            background: linear-gradient(45deg, #000000 30%, #1a1a1a 100%);
            border-bottom: 1px solid var(--border-glow);
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .gold-divider {
            width: 80px;
            height: 3px;
            background: var(--sreenika-accentt);
            margin: 20px auto;
        }

        /* Card Styling */
        .feature-card {
            background: var(--soft-black);
            border: 1px solid var(--border-glow);
            padding: 40px 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
        }

        .feature-card:hover {
            border-color: var(--sreenika-accentt);
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(220, 193, 54, 0.15);
        }

        .card-icon-text {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--sreenika-accentt);
            margin-bottom: 15px;
            display: block;
        }

        /* Section Layouts */
        .section-padding { padding: 80px 0; }

        .btn-premium {
            background: transparent;
            color: var(--sreenika-accentt);
            border: 1px solid var(--sreenika-accentt);
            padding: 12px 35px;
            border-radius: 0;
            font-weight: 600;
            letter-spacing: 2px;
            transition: 0.3s;
        }

        .btn-premium:hover {
            background: var(--sreenika-accentt);
            color: var(--sreenika-dark);
        }

        .experience-box {
            border-left: 2px solid var(--sreenika-accentt);
            padding-left: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <section class="hero-section">
        <div class="container">
            <span class="card-icon-text">Flagship Branch</span>
            <h1 class="hero-title">V&V Family Salon – Kakinada</h1>
            <div class="gold-divider"></div>
            <p class="lead col-lg-8 mx-auto text-light opacity-75">
                The best salon in Kakinada combining premium styling with a professional spa experience. 
                Experience our model location where excellence in hygiene, comfort, and expert consultation meet.
            </p>
            <div class="mt-5">
                <a href="#" class="btn btn-premium">BOOK AN EXPERIENCE</a>
            </div>
        </div>
    </section>

    <section class="section-padding bg-black">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 premium-font">Why Kakinada Chooses V&V</h2>
                <p class="text-gold">Redefining Salon Standards</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <span class="card-icon-text">01. Personalized</span>
                        <h4 class="premium-font h5">Consultation First</h4>
                        <p class="small opacity-75">We don’t push services. We understand your goals first—then recommend what suits your hair, skin, and maintenance comfort.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <span class="card-icon-text">02. Architecture</span>
                        <h4 class="premium-font h5">Two-Floor Luxury</h4>
                        <p class="small opacity-75">Designed so salon and spa operations work smoothly without noise or confusion. A peaceful environment from start to finish.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <span class="card-icon-text">03. Safety</span>
                        <h4 class="premium-font h5">Hygiene Standards</h4>
                        <p class="small opacity-75">Strict hygiene-first practices for all tools and setups. A respectful and professional atmosphere for your safety.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <span class="card-icon-text">04. Inclusive</span>
                        <h4 class="premium-font h5">Built for Families</h4>
                        <p class="small opacity-75">Welcoming services for men, women, and kids with a dedicated waiting zone designed for family schedules.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background-color: var(--soft-black);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="premium-font display-5 mb-4">A Complete <br><span class="text-gold">Lifestyle Experience</span></h2>
                    <p class="opacity-75">V&V Kakinada is built for those who want more than a quick haircut. We offer a holistic journey of beauty and wellness.</p>
                </div>
                <div class="col-lg-6">
                    <div class="experience-box">
                        <h5 class="text-gold premium-font">Hair + Beauty + Skin</h5>
                        <p class="small">Our flagship branch is the benchmark for consistent quality and expert recommendations.</p>
                        
                        <h5 class="text-gold premium-font mt-4">Professional Spa Strength</h5>
                        <p class="small">Specialized wellness therapies designed to reset your energy in a calm, well-managed setup.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="section-padding text-center border-top border-secondary">
        <div class="container">
            <h3 class="premium-font italic">"You’ll feel clarity before the service begins."</h3>
            <p class="text-gold mt-3 small tracking-widest text-uppercase">V&V Family Salon - The Flagship Standard</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



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
                        <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            alt="Salon Interior">
                    </div>

                    <h1 class="snk-section-heading">Hair Services</h1>
                    <p class="lead text-dim">Experience luxury hair treatments tailored to your unique personality. We
                        combine art and science for the perfect look.</p>

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
