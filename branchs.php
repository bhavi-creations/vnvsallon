<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Services - V&V Family Salon</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
            background-color: var(--sreenika-dark);
            color: #e0e0e0;
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--sreenika-accentt);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--sreenika-dark) 0%, var(--soft-black) 100%);
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, var(--border-glow) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, var(--border-glow) 0%, transparent 50%);
            opacity: 0.3;
            pointer-events: none;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 0 0 30px var(--border-glow);
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #c0c0c0;
            max-width: 900px;
            margin: 0 auto 2rem;
            line-height: 1.8;
            animation: fadeInUp 1.2s ease-out;
        }

        .gold-line {
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--sreenika-accentt), transparent);
            margin: 2rem auto;
            animation: pulse 2s ease-in-out infinite;
        }

        /* Service Card */
        .service-card {
            background: var(--soft-black);
            border: 1px solid var(--border-glow);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, var(--border-glow), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 40px var(--border-glow);
            border-color: var(--sreenika-accentt);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--sreenika-accentt), #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: var(--sreenika-dark);
            box-shadow: 0 5px 20px var(--border-glow);
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--sreenika-accentt);
        }

        .service-description {
            color: #b0b0b0;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }

        .service-list {
            list-style: none;
            padding: 0;
        }

        .service-list li {
            padding: 0.5rem 0;
            color: #d0d0d0;
            position: relative;
            padding-left: 25px;
        }

        .service-list li::before {
            content: '✦';
            position: absolute;
            left: 0;
            color: var(--sreenika-accentt);
            font-size: 1.2rem;
        }

        .best-for {
            background: rgba(220, 193, 54, 0.1);
            border-left: 3px solid var(--sreenika-accentt);
            padding: 1rem 1.5rem;
            margin-top: 1.5rem;
            border-radius: 5px;
        }

        .best-for-label {
            color: var(--sreenika-accentt);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin: 4rem 0 3rem;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 2px;
            background: var(--sreenika-accentt);
        }

        /* Consultation Box */
        .consultation-box {
            background: linear-gradient(135deg, var(--soft-black), #2a2a2a);
            border: 2px solid var(--sreenika-accentt);
            border-radius: 20px;
            padding: 3rem;
            margin: 3rem 0;
            box-shadow: 0 10px 50px var(--border-glow);
        }

        .consultation-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .consultation-step {
            text-align: center;
            padding: 1.5rem;
            background: var(--sreenika-dark);
            border-radius: 10px;
            border: 1px solid var(--border-glow);
            transition: all 0.3s ease;
        }

        .consultation-step:hover {
            transform: scale(1.05);
            border-color: var(--sreenika-accentt);
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: var(--sreenika-accentt);
            color: var(--sreenika-dark);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Difference Section */
        .difference-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .difference-item {
            background: var(--soft-black);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid var(--border-glow);
            text-align: center;
            transition: all 0.3s ease;
        }

        .difference-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px var(--border-glow);
        }

        .difference-icon {
            font-size: 3rem;
            color: var(--sreenika-accentt);
            margin-bottom: 1rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--sreenika-accentt), #f4d03f);
            padding: 4rem 0;
            margin: 4rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
        }

        .cta-title {
            font-size: 2.5rem;
            color: var(--sreenika-dark);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            color: var(--soft-black);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Target Audience */
        .audience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 3rem 0;
        }

        .audience-card {
            background: var(--soft-black);
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid var(--sreenika-accentt);
            transition: all 0.3s ease;
        }

        .audience-card:hover {
            background: rgba(220, 193, 54, 0.1);
            transform: translateX(10px);
        }

        /* Footer */
        .footer {
            background: var(--soft-black);
            padding: 3rem 0 1.5rem;
            border-top: 1px solid var(--border-glow);
            margin-top: 4rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 0.6;
            }
            50% {
                opacity: 1;
            }
        }

        @keyframes moveBackground {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 1.5rem;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--sreenika-dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--sreenika-accentt);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f4d03f;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="hero-title">HAIR SERVICES</h1>
                    <div class="gold-line"></div>
                    <p class="hero-subtitle">
                        At V&V Family Salon, hair services begin with one simple goal: get you the look you want without damaging the health of your hair. That's why we follow a consultation-first approach—so your haircut, color, or treatment is chosen based on your hair texture, scalp condition, previous chemical history, lifestyle, and maintenance comfort.
                    </p>
                    <p class="hero-subtitle">
                        Whether you want a sharp everyday style, a complete makeover, or hair that feels healthier and more manageable, our team focuses on clean finishing, balanced shape, and long-term hair strength.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Section -->
    <section class="py-5">
        <div class="container">
            <div class="consultation-box">
                <div class="text-center">
                    <div class="service-icon mx-auto">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h2 class="service-title">Hair Consultation (Start Here)</h2>
                    <p class="service-description">
                        Before we begin, we take 3–7 minutes to understand your unique needs. This step protects you from wrong service choices and ensures results that match your expectation.
                    </p>
                </div>
                
                <div class="consultation-steps">
                    <div class="consultation-step">
                        <div class="step-number">1</div>
                        <h5 style="color: var(--sreenika-accentt);">Your Hair Goal</h5>
                        <p class="mb-0">Length, volume, shine, color tone, manageability</p>
                    </div>
                    <div class="consultation-step">
                        <div class="step-number">2</div>
                        <h5 style="color: var(--sreenika-accentt);">Current Issues</h5>
                        <p class="mb-0">Hair fall, dryness, dandruff, frizz, breakage</p>
                    </div>
                    <div class="consultation-step">
                        <div class="step-number">3</div>
                        <h5 style="color: var(--sreenika-accentt);">Hair History</h5>
                        <p class="mb-0">Recent color, smoothening, bleaching, heat styling</p>
                    </div>
                    <div class="consultation-step">
                        <div class="step-number">4</div>
                        <h5 style="color: var(--sreenika-accentt);">Daily Routine</h5>
                        <p class="mb-0">Office, travel, workouts, styling habits</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Haircut & Styling Services -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Haircut & Styling Services</h2>
            </div>

            <div class="row">
                <!-- Women's Haircuts -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="service-title">Women's Haircuts</h3>
                        <p class="service-description">From clean trims to total transformations</p>
                        <ul class="service-list">
                            <li>Layer cuts, step cuts, feather cuts</li>
                            <li>Bob, lob, long layers, face-framing</li>
                            <li>Fringe/bangs shaping</li>
                            <li>Hair shaping for volume, fall, and movement</li>
                            <li>Split-end trimming and healthy length maintenance</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">Best for:</div>
                            <p class="mb-0">Upgrading your look, improving manageability, reducing flatness, refreshing damaged ends.</p>
                        </div>
                    </div>
                </div>

                <!-- Men's Haircuts -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="service-title">Men's Haircuts</h3>
                        <p class="service-description">Precision cuts that look sharp even after 2–3 weeks</p>
                        <ul class="service-list">
                            <li>Classic cuts, fades, taper, textured crops</li>
                            <li>Executive professional styles</li>
                            <li>Volume styling and hairline balancing</li>
                            <li>Styling guidance based on face shape and hair type</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">Best for:</div>
                            <p class="mb-0">Consistent grooming, office-ready look, clean finishing.</p>
                        </div>
                    </div>
                </div>

                <!-- Kids' Haircuts -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <h3 class="service-title">Kids' Haircuts</h3>
                        <p class="service-description">Comfort-first, quick, and neat</p>
                        <ul class="service-list">
                            <li>Age-appropriate styles</li>
                            <li>Gentle handling and safe finishing</li>
                            <li>Parent-friendly recommendations for easy maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Blowdry & Styling -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-wind"></i>
                        </div>
                        <h3 class="service-title">Blowdry, Iron Styling & Occasion Styling</h3>
                        <p class="service-description">For days you want your hair to look "made"</p>
                        <ul class="service-list">
                            <li>Basic blowdry (smooth finish)</li>
                            <li>Volume blowdry (bounce + lift)</li>
                            <li>Iron curls / waves / straight finish</li>
                            <li>Party styling (soft glam / bold glam)</li>
                            <li>Traditional event styling (depending on look and hair length)</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">Best for:</div>
                            <p class="mb-0">Weddings, parties, shoots, corporate events, family functions.</p>
                        </div>
                    </div>
                </div>

                <!-- Hair Wash -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-shower"></i>
                        </div>
                        <h3 class="service-title">Hair Wash & Scalp Refresh</h3>
                        <p class="service-description">Often Underrated, Highly Powerful</p>
                        <p style="color: #b0b0b0;">A professional hair wash is not just "shampoo." It resets the scalp and improves hair feel instantly.</p>
                        <ul class="service-list">
                            <li>Deep cleanse wash (for oil buildup and sweat)</li>
                            <li>Conditioning wash (for dryness and rough texture)</li>
                            <li>Scalp refresh massage (for relaxation and blood circulation)</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">Best for:</div>
                            <p class="mb-0">People who travel often, work long hours, workout regularly, or feel "heavy scalp" and dull hair.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hair Color Services -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hair Color Services</h2>
                <p class="text-center text-white3">Color is not one-size-fits-all. We help you choose the right shade based on: skin tone, your style personality (natural vs bold), maintenance willingness, and hair's current condition.</p>
            </div>

            <div class="row">
                <!-- Grey Coverage -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="service-title">Grey Coverage / Root Touch-Up</h3>
                        <ul class="service-list">
                            <li>Natural coverage that matches your base tone</li>
                            <li>Root refresh for consistent clean look</li>
                            <li>Tone balancing so color doesn't look "flat" or "too dark"</li>
                        </ul>
                    </div>
                </div>

                <!-- Global Color -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-fill-drip"></i>
                        </div>
                        <h3 class="service-title">Global Hair Color</h3>
                        <ul class="service-list">
                            <li>Full-head color for uniform fresh tone</li>
                            <li>Options from natural browns to richer fashion-inspired tones (subject to hair suitability)</li>
                        </ul>
                    </div>
                </div>

                <!-- Highlights -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="service-title">Highlights / Dimension Work</h3>
                        <ul class="service-list">
                            <li>Partial highlights for subtle glow</li>
                            <li>Full highlights for visible transformation</li>
                            <li>Face-framing brightness for a younger look</li>
                            <li>Dimension balancing to avoid harsh lines and uneven patches</li>
                        </ul>
                    </div>
                </div>

                <!-- Color Correction -->
                <div class="col-12 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h3 class="service-title">Toning & Color Correction Guidance</h3>
                        <p class="service-description">
                            If your hair has unwanted brassiness, dullness, or uneven shades, we guide you with the safest correction approach depending on hair strength.
                        </p>
                        <div class="best-for">
                            <div class="best-for-label">Safety First:</div>
                            <p class="mb-0">For advanced color work, we may suggest a strand check to avoid damage and ensure predictable results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manageability Services -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Smoothening / Keratin / Manageability Services</h2>
                <p class="text-center text-muted mt-3">If your daily problem is frizz, tangles, and time-consuming styling, manageability services can be a game changer—when chosen correctly.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3 class="service-title text-center">Frizz Control & Manageability Options</h3>
                        <p class="service-description text-center">We guide you based on: your curl pattern, frizz level, previous chemical history, and current hair health</p>
                        <ul class="service-list">
                            <li>Smoother finish for easier daily styling</li>
                            <li>Reduced puffiness and better fall</li>
                            <li>Results that look natural—not overly flat—when planned correctly</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">What you get from us:</div>
                            <p class="mb-0">Clear expectations, after-care guidance, and realistic results based on your hair type.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Texture Services -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="service-card">
                        <div class="service-icon mx-auto">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="service-title text-center">Texture Services (Volume / Curls / Shape Change)</h3>
                        <p class="service-description text-center">For clients who want a new pattern</p>
                        <ul class="service-list">
                            <li>Soft curls / waves (based on suitability)</li>
                            <li>Volume enhancement techniques (where appropriate)</li>
                            <li>Styling + maintenance guidance so the look stays practical</li>
                        </ul>
                        <div class="best-for">
                            <div class="best-for-label">Important Note:</div>
                            <p class="mb-0">This category always begins with a deeper consultation because texture changes affect your day-to-day routine.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-On Services -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Add-On Hair Services</h2>
                <p class="text-center" style="color: var(--sreenika-accentt); font-size: 1.1rem;">Small Services, Big Difference</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle" style="color: var(--sreenika-accentt); font-size: 1.5rem; margin-right: 1rem;"></i>
                                    <span>Split-end dusting</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle" style="color: var(--sreenika-accentt); font-size: 1.5rem; margin-right: 1rem;"></i>
                                    <span>Fringe trimming & reshaping</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle" style="color: var(--sreenika-accentt); font-size: 1.5rem; margin-right: 1rem;"></i>
                                    <span>Blowdry add-on after spa/color</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle" style="color: var(--sreenika-accentt); font-size: 1.5rem; margin-right: 1rem;"></i>
                                    <span>Deep conditioning boosters</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle" style="color: var(--sreenika-accentt); font-size: 1.5rem; margin-right: 1rem;"></i>
                                    <span>Scalp soothing add-on for sensitive scalp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Us Different -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Makes Our Hair Services Different</h2>
                <p class="text-center text-muted mt-3">You'll feel the difference in three ways:</p>
            </div>

            <div class="difference-grid">
                <div class="difference-item">
                    <div class="difference-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 style="color: var(--sreenika-accentt); margin-bottom: 1rem;">You Get Clarity</h4>
                    <p>We explain what suits you and why.</p>
                </div>

                <div class="difference-item">
                    <div class="difference-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h4 style="color: var(--sreenika-accentt); margin-bottom: 1rem;">You Get Confidence</h4>
                    <p>You know what result to expect before we start.</p>
                </div>

                <div class="difference-item">
                    <div class="difference-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h4 style="color: var(--sreenika-accentt); margin-bottom: 1rem;">You Get Consistency</h4>
                    <p>Our focus is repeatable quality, not random outcomes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- After-Care Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="service-card">
                        <div class="text-center mb-4">
                            <div class="service-icon mx-auto">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h2 class="service-title">After-Care Guidance</h2>
                            <p style="color: var(--sreenika-accentt); font-size: 1.1rem;">(So Your Result Lasts Longer)</p>
                        </div>
                        
                        <p class="service-description text-center">After every major hair service, we guide you on:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-arrow-right" style="color: var(--sreenika-accentt); margin-right: 1rem; margin-top: 0.3rem;"></i>
                                    <span>Wash frequency</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-arrow-right" style="color: var(--sreenika-accentt); margin-right: 1rem; margin-top: 0.3rem;"></i>
                                    <span>Heat styling do's/don'ts</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-arrow-right" style="color: var(--sreenika-accentt); margin-right: 1rem; margin-top: 0.3rem;"></i>
                                    <span>Oiling guidance (if suitable)</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-arrow-right" style="color: var(--sreenika-accentt); margin-right: 1rem; margin-top: 0.3rem;"></i>
                                    <span>How to maintain shine and softness</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-arrow-right" style="color: var(--sreenika-accentt); margin-right: 1rem; margin-top: 0.3rem;"></i>
                                    <span>When to return for refresh/maintenance</span>
                                </div>
                            </div>
                        </div>

                        <div class="best-for mt-4">
                            <p class="mb-0 text-center" style="font-style: italic;">
                                Because real hair luxury is not just how it looks on day one—it's how it behaves on day twenty.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="cta-title">Ready for Your Transformation?</h2>
                    <p class="cta-text">
                        Book your consultation today and experience hair services that prioritize both beauty and health.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who This Page Is For -->
    <section class="py-5">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Who This Page Is For</h2>
            </div>

            <div class="audience-grid">
                <div class="audience-card">
                    <i class="fas fa-graduation-cap" style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;"></i>
                    <h5 style="color: var(--sreenika-accentt);">Students</h5>
                    <p class="mb-0">Who want a confidence upgrade</p>
                </div>

                <div class="audience-card">
                    <i class="fas fa-briefcase" style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;"></i>
                    <h5 style="color: var(--sreenika-accentt);">Professionals</h5>
                    <p class="mb-0">Who need a clean, sharp, maintained look</p>
                </div>

                <div class="audience-card">
                    <i class="fas fa-ring" style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;"></i>
                    <h5 style="color: var(--sreenika-accentt);">Brides & Event Clients</h5>
                    <p class="mb-0">Who want photo-ready hair</p>
                </div>

                <div class="audience-card">
                    <i class="fas fa-hand-sparkles" style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;"></i>
                    <h5 style="color: var(--sreenika-accentt);">Hair Concerns</h5>
                    <p class="mb-0">Anyone struggling with frizz, dryness, dullness, or hair fall</p>
                </div>

                <div class="audience-card">
                    <i class="fas fa-star" style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;"></i>
                    <h5 style="color: var(--sreenika-accentt);">Transformation Seekers</h5>
                    <p class="mb-0">Anyone who wants a transformation with safe guidance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 style="color: var(--sreenika-accentt); font-size: 2rem; margin-bottom: 1rem;">V&V Family Salon</h3>
                    <p style="color: #b0b0b0;">Where Hair Health Meets Hair Beauty</p>
                    <div class="gold-line my-4"></div>
                    <p style="color: #808080; font-size: 0.9rem;">&copy; 2024 V&V Family Salon. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scroll Animation Script -->
    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all service cards
        document.querySelectorAll('.service-card, .difference-item, .audience-card, .consultation-step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>

<?php include 'footer.php'; ?>