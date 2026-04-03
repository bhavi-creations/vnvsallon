<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VNV Salons – Best Hair & Beauty Salon in MVP Colony Vizag</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;600&display=swap" rel="stylesheet" />

  <meta name="title" content="Best Salon in MVP Colony Vizag | Hair & Beauty – VNV Salons">
  <meta name="description" content="Searching for a salon in MVP Colony Vizag? VNV Salons offers expert hair styling, skin care & bridal makeup services. Visit us near MVP Double Road. Book now!">

  <link rel="canonical" href="https://vnvsalons.com/salon-in-mvp-colony-vizag" />
  <style>
    :root {
      --mvp-dark: #000000;
      --mvp-accentt: #dcc136;
      --mvp-border-glow: rgba(220, 193, 54, 0.3);
      --mvp-soft-black: #1a1a1a;
      --mvp-text-light: #f4f4f4;
      --mvp-card-bg: #111111;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--mvp-dark);
      color: var(--mvp-text-light);
      font-family: 'Lato', sans-serif;
      font-weight: 300;
      line-height: 1.8;
    }

    /* ── SEO INTRO ── */
    .mvp-seo-intro {
      background: var(--mvp-soft-black);
      color: #aaa;
      font-size: 1rem;
      text-align: center;
      padding: 40px 40px;
      border-bottom: 1px solid var(--mvp-border-glow);
      letter-spacing: 0.02em;
      line-height: 1.9;
      max-width: 860px;
      margin: 0 auto;
      border-left: none;
      border-right: none;
    }

    /* ── HERO ── */
    .mvp-hero {
      background: linear-gradient(135deg, #000 60%, #1a1500 100%);
      border-bottom: 2px solid var(--mvp-accentt);
      padding: 90px 20px 70px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .mvp-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 50% 0%, rgba(220, 193, 54, 0.12) 0%, transparent 70%);
      pointer-events: none;
    }

    .mvp-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 5vw, 3.4rem);
      color: var(--mvp-accentt);
      letter-spacing: 0.03em;
      margin-bottom: 20px;
      text-shadow: 0 2px 24px rgba(220, 193, 54, 0.25);
    }

    .mvp-hero p {
      max-width: 720px;
      margin: 0 auto;
      font-size: 1.05rem;
      color: #ccc;
      font-weight: 300;
    }

    .mvp-divider {
      width: 64px;
      height: 2px;
      background: var(--mvp-accentt);
      margin: 28px auto;
      border-radius: 2px;
    }

    /* ── SECTION TITLE ── */
    .mvp-section-title {
      font-family: 'Playfair Display', serif;
      color: var(--mvp-accentt);
      font-size: clamp(1.4rem, 3vw, 2rem);
      margin-bottom: 14px;
      letter-spacing: 0.02em;
    }

    /* ── CARDS ── */
    .mvp-card {
      background: var(--mvp-card-bg);
      border: 1px solid var(--mvp-border-glow);
      border-radius: 10px;
      padding: 36px 30px;
      height: 100%;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
    }

    .mvp-card:hover {
      border-color: var(--mvp-accentt);
      box-shadow: 0 0 28px rgba(220, 193, 54, 0.18);
      transform: translateY(-4px);
    }

    .mvp-card .mvp-icon {
      font-size: 2.2rem;
      margin-bottom: 18px;
      display: block;
    }

    .mvp-card p {
      color: #b0b0b0;
      font-size: 0.97rem;
    }

    /* ── LIST ── */
    .mvp-list {
      list-style: none;
      padding: 0;
      margin: 14px 0 0;
    }

    .mvp-list li {
      color: #ccc;
      padding: 5px 0;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .mvp-list li::before {
      content: '';
      display: inline-block;
      width: 7px;
      height: 7px;
      background: var(--mvp-accentt);
      border-radius: 50%;
      flex-shrink: 0;
    }

    /* ── WHY CHOOSE ── */
    .mvp-why {
      background: var(--mvp-soft-black);
      border-top: 1px solid var(--mvp-border-glow);
      border-bottom: 1px solid var(--mvp-border-glow);
    }

    .mvp-why-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 10px 0;
    }

    .mvp-check {
      color: var(--mvp-accentt);
      font-size: 1.1rem;
      margin-top: 2px;
      flex-shrink: 0;
    }

    .mvp-why-item span {
      color: #ccc;
      font-size: 1rem;
    }

    /* ── ADDRESS CARD ── */
    .mvp-address-card {
      background: var(--mvp-card-bg);
      border: 1px solid var(--mvp-accentt);
      border-radius: 10px;
      padding: 36px 30px;
      text-align: center;
    }

    .mvp-address-card p {
      color: #bbb;
      margin-bottom: 8px;
      font-size: 1rem;
    }

    .mvp-address-card a {
      color: var(--mvp-accentt);
      text-decoration: none;
    }

    .mvp-address-card a:hover {
      text-decoration: underline;
    }

    /* ── SECTION PADDING ── */
    .mvp-section {
      padding: 72px 0;
    }

    /* ── FOOTER ── */
    .mvp-footer {
      background: #000;
      border-top: 1px solid var(--mvp-border-glow);
      text-align: center;
      padding: 22px;
      color: #555;
      font-size: 0.82rem;
      letter-spacing: 0.04em;
    }

    .mvp-footer span {
      color: var(--mvp-accentt);
    }
  </style>
</head>

<body>






  <!-- SEO Intro -->

  <div class="container">


    <div style="background: var(--mvp-soft-black); border-bottom: 1px solid var(--mvp-border-glow);">
      <div class="mvp-seo-intro">
        VNV Salons is a premium hair and beauty salon in MVP Colony Vizag, offering expert services in hair styling, skin care, and bridal makeup. With skilled professionals and modern techniques, we provide personalized beauty solutions that enhance your confidence and style. If you are searching for a salon in MVP Colony Vizag, VNV Salons is your trusted destination.
      </div>
    </div>
  </div>
  <!-- HERO -->
  <section class="mvp-hero">
    <div class="container">
      <h1>Best Hair &amp; Beauty Salon in MVP Colony Vizag</h1>
      <div class="mvp-divider"></div>
      <p>
        VNV Salons is a premium hair and beauty salon in MVP Colony Vizag, offering expert services in hair styling, skin care, and bridal makeup. With skilled professionals and modern techniques, we provide personalized beauty solutions that enhance your confidence and style.
      </p>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="mvp-section">
    <div class="container">
      <div class="row g-4">

        <!-- Hair Styling -->
        <div class="col-12 col-md-4">
          <div class="mvp-card">
            <span class="mvp-icon">✂️</span>
            <h2 class="mvp-section-title">Professional Hair Styling &amp; Hair Care in MVP Colony Vizag</h2>
            <p>At VNV Salons, we offer a wide range of hair services designed to match the latest trends and your individual style.</p>
            <ul class="mvp-list">
              <li>Haircuts &amp; styling</li>
              <li>Hair smoothening &amp; keratin</li>
              <li>Hair coloring &amp; highlights</li>
              <li>Hair spa treatments</li>
            </ul>
            <p class="mt-3">We use premium products to ensure healthy and long-lasting results, making us a top hair salon in MVP Colony Vizag.</p>
          </div>
        </div>

        <!-- Skin & Beauty -->
        <div class="col-12 col-md-4">
          <div class="mvp-card">
            <span class="mvp-icon">✨</span>
            <h2 class="mvp-section-title">Advanced Skin &amp; Beauty Services in MVP Colony Vizag</h2>
            <p>Achieve radiant and healthy skin with our customized beauty treatments. Our experts analyze your skin type and provide suitable solutions.</p>
            <ul class="mvp-list">
              <li>Facials &amp; skin rejuvenation</li>
              <li>Detan &amp; glow treatments</li>
              <li>Cleanup &amp; hydration therapies</li>
            </ul>
            <p class="mt-3">We are known as a trusted beauty salon in Visakhapatnam for delivering visible results.</p>
          </div>
        </div>

        <!-- Bridal Makeup -->
        <div class="col-12 col-md-4">
          <div class="mvp-card">
            <span class="mvp-icon">💄</span>
            <h2 class="mvp-section-title">Bridal Makeup Services in MVP Colony Vizag</h2>
            <p>Make your special day unforgettable with our expert bridal makeup services. We create elegant, flawless, and long-lasting looks.</p>
            <ul class="mvp-list">
              <li>HD bridal makeup</li>
              <li>Pre-bridal packages</li>
              <li>Bridal hair styling</li>
            </ul>
            <p class="mt-3">For the best bridal makeup in MVP Colony Vizag, choose VNV Salons.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- WHY CHOOSE -->
  <section class="mvp-why mvp-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-12 col-md-5">
          <h2 class="mvp-section-title">Why Choose VNV Salons in MVP Colony Vizag?</h2>
          <div class="mvp-divider" style="margin: 20px 0;"></div>
          <p style="color:#aaa; font-size:0.97rem;">We ensure every client enjoys a premium salon experience — from the moment you walk in to the moment you leave feeling your best.</p>
        </div>
        <div class="col-12 col-md-7">
          <div class="mvp-why-item"><span class="mvp-check">✦</span><span>Experienced professionals</span></div>
          <div class="mvp-why-item"><span class="mvp-check">✦</span><span>Premium-quality products</span></div>
          <div class="mvp-why-item"><span class="mvp-check">✦</span><span>Hygienic environment</span></div>
          <div class="mvp-why-item"><span class="mvp-check">✦</span><span>Customized services</span></div>
          <div class="mvp-why-item"><span class="mvp-check">✦</span><span>Latest beauty techniques</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- VISIT / ADDRESS -->
  <section class="mvp-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="mvp-address-card">
            <h2 class="mvp-section-title">Visit Our MVP Colony Vizag Salon</h2>
            <div class="mvp-divider"></div>
            <p>📍 Kalyana Mandapam, MVP Double Road,<br>Opp. Jet TTD, MVP Sector 7, Sector 5,<br>Visakhapatnam, Andhra Pradesh 530017</p>
            <p>📞 <a href="tel:+918125801107">+91 81258 01107</a></p>
            <p class="mt-3" style="color:#888; font-size:0.92rem;">Visit VNV Salons today and experience professional beauty services in MVP Colony Vizag.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="mvp-footer">
    © 2025 <span>VNV Salons</span>, MVP Colony Vizag. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include 'footer.php'; ?>