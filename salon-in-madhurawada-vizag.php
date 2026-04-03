<?php include 'header.php' ; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VNV Salons – Best Hair & Beauty Salon in Madhurawada Vizag</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;600&display=swap" rel="stylesheet"/>




    <meta name="title" content="Best Salon in Madhurawada Vizag | Hair & Beauty – VNV Salons">
    <meta name="description" content="Looking for a salon in Madhurawada Vizag? VNV Salons offers expert hair styling, skin care & bridal makeup services. Visit us and book your appointment today!">

    <link rel="canonical" href="https://vnvsalons.com/salon-in-madhurawada-vizag" />



  <style>
    :root {
      --mdw-dark: #000000;
      --mdw-accentt: #dcc136;
      --mdw-border-glow: rgba(220, 193, 54, 0.3);
      --mdw-soft-black: #1a1a1a;
      --mdw-text-light: #f4f4f4;
      --mdw-card-bg: #111111;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background-color: var(--mdw-dark);
      color: var(--mdw-text-light);
      font-family: 'Lato', sans-serif;
      font-weight: 300;
      line-height: 1.8;
    }

    /* ── SEO INTRO WRAPPER ── */
    .mdw-seo-wrapper {
      background: var(--mdw-dark);
      padding: 48px 20px;
      border-bottom: 1px solid var(--mdw-border-glow);
    }

    /* ── SEO INTRO BOX ── */
    .mdw-seo-intro {
      background: var(--mdw-soft-black);
      color: #ffffff;
      font-size: 1rem;
      text-align: center;
      padding: 40px 44px;
      letter-spacing: 0.02em;
      line-height: 1.9;
      max-width: 860px;
      margin: 0 auto;
      border: 4px solid var(--mdw-border-glow);
      border-radius: 12px;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
      cursor: default;
    }
    .mdw-seo-intro:hover {
      border-color: var(--mdw-accentt);
      box-shadow: 0 0 32px rgba(220, 193, 54, 0.18);
      transform: translateY(-5px);
    }

    /* ── HERO ── */
    .mdw-hero {
      background: linear-gradient(135deg, #000 60%, #1a1500 100%);
      border-bottom: 2px solid var(--mdw-accentt);
      padding: 90px 20px 70px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .mdw-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 50% 0%, rgba(220,193,54,0.12) 0%, transparent 70%);
      pointer-events: none;
    }
    .mdw-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 5vw, 3.4rem);
      color: var(--mdw-accentt);
      letter-spacing: 0.03em;
      margin-bottom: 20px;
      text-shadow: 0 2px 24px rgba(220,193,54,0.25);
    }
    .mdw-hero p {
      max-width: 720px;
      margin: 0 auto;
      font-size: 1.05rem;
      color: #ccc;
      font-weight: 300;
    }
    .mdw-divider {
      width: 64px;
      height: 2px;
      background: var(--mdw-accentt);
      margin: 28px auto;
      border-radius: 2px;
    }

    /* ── SECTION TITLE ── */
    .mdw-section-title {
      font-family: 'Playfair Display', serif;
      color: var(--mdw-accentt);
      font-size: clamp(1.4rem, 3vw, 2rem);
      margin-bottom: 14px;
      letter-spacing: 0.02em;
    }

    /* ── CARDS ── */
    .mdw-card {
      background: var(--mdw-card-bg);
      border: 1px solid var(--mdw-border-glow);
      border-radius: 10px;
      padding: 36px 30px;
      height: 100%;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }
    .mdw-card:hover {
      border-color: var(--mdw-accentt);
      box-shadow: 0 0 28px rgba(220,193,54,0.18);
      transform: translateY(-4px);
    }
    .mdw-card .mdw-icon {
      font-size: 2.2rem;
      margin-bottom: 18px;
      display: block;
    }
    .mdw-card p {
      color: #b0b0b0;
      font-size: 0.97rem;
    }

    /* ── LIST ── */
    .mdw-list {
      list-style: none;
      padding: 0;
      margin: 14px 0 0;
    }
    .mdw-list li {
      color: #ccc;
      padding: 5px 0;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .mdw-list li::before {
      content: '';
      display: inline-block;
      width: 7px;
      height: 7px;
      background: var(--mdw-accentt);
      border-radius: 50%;
      flex-shrink: 0;
    }

    /* ── WHY CHOOSE ── */
    .mdw-why {
      background: var(--mdw-soft-black);
      border-top: 1px solid var(--mdw-border-glow);
      border-bottom: 1px solid var(--mdw-border-glow);
    }
    .mdw-why-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 10px 0;
    }
    .mdw-check {
      color: var(--mdw-accentt);
      font-size: 1.1rem;
      margin-top: 2px;
      flex-shrink: 0;
    }
    .mdw-why-item span {
      color: #ccc;
      font-size: 1rem;
    }

    /* ── ADDRESS CARD ── */
    .mdw-address-card {
      background: var(--mdw-card-bg);
      border: 1px solid var(--mdw-accentt);
      border-radius: 10px;
      padding: 36px 30px;
      text-align: center;
    }
    .mdw-address-card p {
      color: #bbb;
      margin-bottom: 8px;
      font-size: 1rem;
    }
    .mdw-address-card a {
      color: var(--mdw-accentt);
      text-decoration: none;
    }
    .mdw-address-card a:hover { text-decoration: underline; }

    /* ── SECTION PADDING ── */
    .mdw-section { padding: 72px 0; }

    /* ── FOOTER ── */
    .mdw-footer {
      background: #000;
      border-top: 1px solid var(--mdw-border-glow);
      text-align: center;
      padding: 22px;
      color: #555;
      font-size: 0.82rem;
      letter-spacing: 0.04em;
    }
    .mdw-footer span { color: var(--mdw-accentt); }
  </style>
</head>
<body>

<!-- SEO Intro -->
<div class="mdw-seo-wrapper">
  <div class="mdw-seo-intro">
    VNV Salons is a premium hair and beauty salon in Madhurawada Vizag, offering expert services in hair styling, skin care, and bridal makeup. Our experienced professionals use advanced techniques and high-quality products to deliver personalized beauty solutions. If you are searching for a salon in Madhurawada Vizag, VNV Salons is your trusted destination.
  </div>
</div>

<!-- HERO -->
<section class="mdw-hero">
  <div class="container">
    <h1>Best Hair &amp; Beauty Salon in Madhurawada Vizag</h1>
    <div class="mdw-divider"></div>
    <p>
      VNV Salons is a premium hair and beauty salon in Madhurawada Vizag, offering expert services in hair styling, skin care, and bridal makeup. Our experienced professionals use advanced techniques and high-quality products to deliver personalized beauty solutions.
    </p>
  </div>
</section>

<!-- SERVICES -->
<section class="mdw-section">
  <div class="container">
    <div class="row g-4">

      <!-- Hair Styling -->
      <div class="col-12 col-md-4">
        <div class="mdw-card">
          <span class="mdw-icon">✂️</span>
          <h2 class="mdw-section-title">Professional Hair Styling &amp; Hair Care in Madhurawada Vizag</h2>
          <p>At VNV Salons, we provide a wide range of hair services tailored to your style and the latest trends.</p>
          <ul class="mdw-list">
            <li>Haircuts &amp; styling</li>
            <li>Hair smoothening &amp; keratin treatments</li>
            <li>Hair coloring &amp; highlights</li>
            <li>Hair spa &amp; nourishment treatments</li>
          </ul>
          <p class="mt-3">We focus on maintaining hair health while delivering stylish and long-lasting results, making us a top hair salon in Madhurawada Vizag.</p>
        </div>
      </div>

      <!-- Skin & Beauty -->
      <div class="col-12 col-md-4">
        <div class="mdw-card">
          <span class="mdw-icon">✨</span>
          <h2 class="mdw-section-title">Advanced Skin &amp; Beauty Services in Madhurawada Vizag</h2>
          <p>Get glowing and healthy skin with our advanced beauty treatments. Our experts provide customized solutions based on your skin type.</p>
          <ul class="mdw-list">
            <li>Facials &amp; skin rejuvenation</li>
            <li>Detan &amp; glow treatments</li>
            <li>Cleanup &amp; hydration therapies</li>
          </ul>
          <p class="mt-3">We ensure safe and effective treatments, making us a trusted beauty salon in Visakhapatnam.</p>
        </div>
      </div>

      <!-- Bridal Makeup -->
      <div class="col-12 col-md-4">
        <div class="mdw-card">
          <span class="mdw-icon">💄</span>
          <h2 class="mdw-section-title">Bridal Makeup Services in Madhurawada Vizag</h2>
          <p>Make your big day special with our professional bridal makeup services. We create flawless, elegant, and long-lasting looks.</p>
          <ul class="mdw-list">
            <li>HD bridal makeup</li>
            <li>Pre-bridal grooming packages</li>
            <li>Bridal hair styling</li>
          </ul>
          <p class="mt-3">For the best bridal makeup in Madhurawada Vizag, VNV Salons is the perfect choice.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="mdw-why mdw-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-12 col-md-5">
        <h2 class="mdw-section-title">Why Choose VNV Salons in Madhurawada Vizag?</h2>
        <div class="mdw-divider" style="margin: 20px 0;"></div>
        <p style="color:#aaa; font-size:0.97rem;">We ensure a premium salon experience for every client — from the moment you walk in to the moment you leave feeling your best.</p>
      </div>
      <div class="col-12 col-md-7">
        <div class="mdw-why-item"><span class="mdw-check">✦</span><span>Experienced professionals</span></div>
        <div class="mdw-why-item"><span class="mdw-check">✦</span><span>Premium-quality products</span></div>
        <div class="mdw-why-item"><span class="mdw-check">✦</span><span>Hygienic and comfortable environment</span></div>
        <div class="mdw-why-item"><span class="mdw-check">✦</span><span>Customized beauty services</span></div>
        <div class="mdw-why-item"><span class="mdw-check">✦</span><span>Latest techniques and trends</span></div>
      </div>
    </div>
  </div>
</section>

<!-- VISIT / ADDRESS -->
<section class="mdw-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="mdw-address-card">
          <h2 class="mdw-section-title">Visit Our Madhurawada Vizag Salon</h2>
          <div class="mdw-divider"></div>
          <p>📍 VNV Salons, Madhurawada,<br>Visakhapatnam, Andhra Pradesh</p>
          <p class="mt-3" style="color:#888; font-size:0.92rem;">Visit VNV Salons today and experience professional beauty services in Madhurawada Vizag.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="mdw-footer">
  © 2025 <span>VNV Salons</span>, Madhurawada Vizag. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<?php include 'footer.php' ; ?>