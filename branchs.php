<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V&V Family Salon - Kakinada Flagship Branch</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --sreenika-dark: #000000;
            --sreenika-accentt: #dcc136;
            --border-glow: rgba(220, 193, 54, 0.3);
            --soft-black: #1a1a1a;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
            overflow-x: hidden;
        }
        
        .section-main {
            background: linear-gradient(135deg, var(--sreenika-dark) 0%, var(--soft-black) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .section-main::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: radial-gradient(circle, var(--border-glow) 0%, transparent 70%);
            animation: pulse 8s ease-in-out infinite;
            pointer-events: none;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.1); }
        }
        
        /* Hero Section */
        .hero-section {
            padding: 100px 0;
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--sreenika-accentt);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            text-shadow: 0 0 30px var(--border-glow);
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: #e0e0e0;
            font-weight: 300;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .flagship-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--sreenika-accentt), #b89a2e);
            color: var(--sreenika-dark);
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 20px var(--border-glow);
            margin-bottom: 40px;
        }
        
        /* Why Choose Section */
        .why-choose-section {
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }
        
        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--sreenika-accentt);
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .section-heading::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--sreenika-accentt), transparent);
        }
        
        .feature-card {
            background: linear-gradient(135deg, rgba(220, 193, 54, 0.05), rgba(26, 26, 26, 0.8));
            border: 1px solid var(--border-glow);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, var(--border-glow) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px var(--border-glow);
            border-color: var(--sreenika-accentt);
        }
        
        .feature-card:hover::before {
            opacity: 1;
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--sreenika-accentt);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .feature-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--sreenika-accentt);
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }
        
        .feature-text {
            color: #d0d0d0;
            font-size: 0.95rem;
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }
        
        /* Services Section */
        .services-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--soft-black), #0f0f0f);
            position: relative;
            z-index: 1;
        }
        
        .service-card {
            background: rgba(0, 0, 0, 0.6);
            border: 2px solid var(--border-glow);
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            border-color: var(--sreenika-accentt);
            box-shadow: 0 10px 30px var(--border-glow);
        }
        
        .service-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--sreenika-accentt);
            margin-right: 20px;
            min-width: 60px;
        }
        
        .service-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--sreenika-accentt);
            margin: 0;
        }
        
        .service-subtitle {
            color: #b0b0b0;
            font-size: 0.9rem;
            font-style: italic;
            margin-top: 5px;
        }
        
        .service-description {
            color: #d0d0d0;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .service-list {
            list-style: none;
            padding: 0;
        }
        
        .service-list li {
            padding: 8px 0 8px 30px;
            position: relative;
            color: #c0c0c0;
            font-size: 0.95rem;
        }
        
        .service-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--sreenika-accentt);
        }
        
        /* Areas Section */
        .areas-section {
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }
        
        .areas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 40px;
        }
        
        .area-tag {
            background: linear-gradient(135deg, rgba(220, 193, 54, 0.1), rgba(26, 26, 26, 0.8));
            border: 1px solid var(--border-glow);
            border-radius: 10px;
            padding: 15px 20px;
            text-align: center;
            color: #e0e0e0;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .area-tag:hover {
            background: var(--sreenika-accentt);
            color: var(--sreenika-dark);
            transform: scale(1.05);
            font-weight: 600;
        }
        
        /* Experience Section */
        .experience-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #0a0a0a, var(--soft-black));
            position: relative;
            z-index: 1;
        }
        
        .experience-box {
            background: rgba(220, 193, 54, 0.05);
            border: 2px solid var(--sreenika-accentt);
            border-radius: 20px;
            padding: 50px;
            text-align: center;
            box-shadow: 0 0 50px var(--border-glow);
        }
        
        .experience-list {
            list-style: none;
            padding: 0;
            margin-top: 30px;
        }
        
        .experience-list li {
            font-size: 1.2rem;
            color: #e0e0e0;
            padding: 15px 0;
            border-bottom: 1px solid rgba(220, 193, 54, 0.2);
            position: relative;
            padding-left: 40px;
        }
        
        .experience-list li:last-child {
            border-bottom: none;
        }
        
        .experience-list li::before {
            content: '\f005';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--sreenika-accentt);
            font-size: 1rem;
        }
        
        /* Who Visits Section */
        .who-visits-section {
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }
        
        .visitor-card {
            background: linear-gradient(135deg, rgba(220, 193, 54, 0.08), rgba(0, 0, 0, 0.6));
            border: 1px solid var(--border-glow);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .visitor-card:hover {
            transform: translateX(10px);
            border-color: var(--sreenika-accentt);
        }
        
        .visitor-icon {
            font-size: 2rem;
            color: var(--sreenika-accentt);
            margin-right: 20px;
            min-width: 50px;
        }
        
        .visitor-text {
            color: #d0d0d0;
            font-size: 1rem;
            margin: 0;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--sreenika-dark), #1a1a0a);
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .cta-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--sreenika-accentt);
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            color: #d0d0d0;
            margin-bottom: 40px;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--sreenika-accentt), #b89a2e);
            color: var(--sreenika-dark);
            padding: 18px 50px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px var(--border-glow);
        }
        
        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px var(--border-glow);
            color: var(--sreenika-dark);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-heading {
                font-size: 2rem;
            }
            
            .service-title {
                font-size: 1.4rem;
            }
            
            .areas-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="section-main">
        
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="flagship-badge">
                            <i class="fas fa-crown"></i> Flagship Branch
                        </div>
                        <h1 class="hero-title">V&V Family Salon</h1>
                        <p class="hero-subtitle">
                            Kakinada's Premier Destination for Hair, Beauty & Wellness<br>
                            Where Premium Styling Meets Professional Spa Experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="container">
                <h2 class="section-heading">Why Kakinada Chooses V&V</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3 class="feature-title">Consultation First</h3>
                            <p class="feature-text">
                                We don't push services. We understand your goal first—then recommend what suits your hair/skin/body and your maintenance comfort. You'll feel clarity before the service begins.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3 class="feature-title">Flagship Spa Experience</h3>
                            <p class="feature-text">
                                Our Kakinada branch is known for its spa strength and premium wellness experience. Two-floor setup ensures salon and spa operations work smoothly without crowding or noise.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 class="feature-title">Hygiene & Professional Standards</h3>
                            <p class="feature-text">
                                From tools to service setups, we follow hygiene-first practices. The experience is respectful and professional—especially important for spa and skincare services.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="feature-title">Built for Families, Not Just Individuals</h3>
                            <p class="feature-text">
                                V&V is a true family salon in Kakinada—services for men, women, and kids, with a welcoming waiting zone and service flow that suits family schedules. One trusted place for everyone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <h2 class="section-heading">What You Can Experience at V&V</h2>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Professional Spa Services</h3>
                                    <p class="service-subtitle">Our Flagship Strength</p>
                                </div>
                            </div>
                            <p class="service-description">
                                If your body feels tired, your mind feels overloaded, or you just want a premium self-care day, our spa therapies are designed to reset your energy. The Kakinada flagship spa setup includes a premium, comfort-first environment with dedicated spaces designed for professional therapy experiences.
                            </p>
                            <ul class="service-list">
                                <li>Stress relief and mental relaxation</li>
                                <li>Muscle recovery and stiffness reduction</li>
                                <li>Improved sleep and freshness</li>
                                <li>Neck/shoulder/back tension release</li>
                                <li>Complete wellness reset during hectic work weeks</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-cut"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Hair Services</h3>
                                    <p class="service-subtitle">Men, Women & Kids</p>
                                </div>
                            </div>
                            <p class="service-description">
                                Your hair should look good today and stay healthy tomorrow. Our hair services are designed for clean finishing and easy maintenance.
                            </p>
                            <ul class="service-list">
                                <li>Fresh, face-suitable haircuts</li>
                                <li>Styling for meetings, events, and functions</li>
                                <li>Hair spa and repair rituals for dryness and frizz</li>
                                <li>Scalp refresh for sweat/oil buildup</li>
                                <li>Hair color guidance (natural, premium-looking results)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-magic"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Skin & Beauty Services</h3>
                                    <p class="service-subtitle">Glow with Comfort</p>
                                </div>
                            </div>
                            <p class="service-description">
                                Skin services are customized based on skin type and season—especially important in humid and coastal conditions where oiliness, tan, and dullness can build up quickly.
                            </p>
                            <ul class="service-list">
                                <li>Skin cleanups for regular maintenance</li>
                                <li>Detan and brightening rituals</li>
                                <li>Glow facials for event-ready freshness</li>
                                <li>Oil control and acne-support routines</li>
                                <li>Hydration and calming care for sensitive skin</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="service-card">
                            <div class="service-header">
                                <div class="service-icon">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Bridal & Event Grooming</h3>
                                    <p class="service-subtitle">Planned, Calm, Premium</p>
                                </div>
                            </div>
                            <p class="service-description">
                                Bridal grooming is not a single appointment—it's a timeline. At V&V Kakinada, we help brides and families plan a structured grooming journey so everything feels organized and stress-free.
                            </p>
                            <ul class="service-list">
                                <li>Pre-bridal skin glow planning</li>
                                <li>Hair health recovery and styling prep</li>
                                <li>Event-ready facials and detan</li>
                                <li>Relaxation therapies for stress management</li>
                                <li>Family grooming packages for photo-ready confidence</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who Visits Section -->
        <section class="who-visits-section">
            <div class="container">
                <h2 class="section-heading">Who Visits Our Kakinada Branch</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <p class="visitor-text">Working professionals who want a clean, premium look</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <p class="visitor-text">Families who want one reliable salon for everyone</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-female"></i>
                            </div>
                            <p class="visitor-text">Women who want consistent skincare and self-care routines</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-male"></i>
                            </div>
                            <p class="visitor-text">Men who want sharp grooming and maintenance-friendly styles</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-ring"></i>
                            </div>
                            <p class="visitor-text">Bridal clients who want planning, not panic</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="visitor-card">
                            <div class="visitor-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <p class="visitor-text">Clients who prefer hygiene, privacy, and a respectful atmosphere</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Areas We Serve Section -->
        <section class="areas-section">
            <div class="container">
                <h2 class="section-heading">Areas We Serve Across Kakinada</h2>
                <p class="text-center text-muted mb-4">
                    Clients visit us from across Kakinada and nearby areas for premium salon and spa services
                </p>
                <div class="areas-grid">
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Sarpavaram</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Bhanugudi Junction</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Ramanayyapeta</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Jagannaickpur</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Vidyut Nagar</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Indrapalem</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Turangi</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> Samalkot</div>
                    <div class="area-tag"><i class="fas fa-map-marker-alt"></i> East Godavari Routes</div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="experience-section">
            <div class="container">
                <h2 class="section-heading">The V&V Experience</h2>
                <div class="experience-box">
                    <p style="font-size: 1.2rem; color: #e0e0e0; margin-bottom: 30px;">
                        When you walk in, you can expect:
                    </p>
                    <ul class="experience-list">
                        <li>A clear service recommendation (not confusion)</li>
                        <li>A comfortable waiting experience</li>
                        <li>A neat, premium finish for hair and grooming</li>
                        <li>A calm spa environment for wellness therapies</li>
                        <li>Guidance after your service so results last longer</li>
                    </ul>
                    <p style="font-size: 1.3rem; color: var(--sreenika-accentt); margin-top: 40px; font-weight: 600;">
                        We want you to leave feeling lighter, fresher, and more confident—not just "done."
                    </p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Experience the V&V Difference</h2>
                <p class="cta-text">
                    Your trusted destination for hair, beauty, and wellness in Kakinada
                </p>
                <a href="#" class="cta-button">
                    <i class="fas fa-calendar-check"></i> Book Your Appointment
                </a>
            </div>
        </section>

    </div>

    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include "footer.php"; ?>