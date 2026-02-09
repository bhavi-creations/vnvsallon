<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V&V Premium Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --sreenika-dark: #000000;
            --sreenika-accent: #dcc136;
            --border-glow: rgba(220, 193, 54, 0.3);
            --soft-black: #1a1a1a;
        }

        body {
            background-color: var(--sreenika-dark);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .gold-text {
            color: var(--sreenika-accent);
        }

        /* Carousel Container */
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 450px;
            border-radius: 20px;
            border: 2px solid var(--soft-black);
            transition: all 0.5s ease;
            filter: brightness(0.4) grayscale(1);
            transform: scale(0.8);
            overflow: hidden;
        }

        /* The Focused Image (Center) - Highlighting Symmetry */
        .swiper-slide-active {
            filter: brightness(1) grayscale(0);
            transform: scale(1.1);
            border-color: var(--sreenika-accent);
            box-shadow: 0px 10px 40px var(--border-glow);
            z-index: 10;
        }

        /* Ensuring side slides are also visible and balanced */
        .swiper-slide-prev,
        .swiper-slide-next {
            filter: brightness(0.6) grayscale(0.5);
            transform: scale(0.9);
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
        }

        /* Navigation */
        .nav-btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .custom-nav {
            width: 55px;
            height: 55px;
            border: 1px solid var(--sreenika-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--sreenika-accent);
            transition: 0.3s;
            background: transparent;
        }

        .custom-nav:hover {
            background: var(--sreenika-accent);
            color: #000;
            box-shadow: 0 0 15px var(--border-glow);
        }

        /* Filter Badges with Gold Theme */
        .filter-pills .badge {
            background: transparent;
            border: 1px solid var(--soft-black);
            color: #fff;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .filter-pills .badge.active,
        .filter-pills .badge:hover {
            background: var(--sreenika-accent);
            color: #000;
            border-color: var(--sreenika-accent);
        }

        /* review content   */
        .swiper-slide {
            position: relative;
        }

        /* Review Overlay Card */
        .review-box {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: #fff;
            padding: 15px;
            font-size: 14px;
            text-align: left;
            border-radius: 0 0 18px 18px;
        }

        .review-box p {
            font-size: 13px;
            margin: 5px 0;
        }

        .review-box h6 {
            color: var(--sreenika-accent);
            font-size: 13px;
            margin: 0;
        }

        .service-title-head {
            font-size: 30px;
            letter-spacing: 5px;
            font-weight: 700;
            text-shadow: 0 0 15px var(--border-glow);
            margin-bottom: 1rem;
            color: #dcc136;
        }
    </style>

</head>

<body>

    <div class="container py-5 text-center">
        <!-- <p class="text-uppercase small tracking-widest gold-text fw-bold">V&V Premium Gallery</p>
        <h1 class="fw-bold mb-3">Our Visual Diary</h1>
        <p class="text-secondary">Experience luxury through our lens.<br>Symmetry in every frame.</p> -->

        <div class="review-title-wrapper  text-center">
            <!-- <h6 class="testmonials-badge" style="letter-spacing: 3px; display: inline-block;">
                TESTIMONIALS
            </h6> -->
            <h1 class="service-title-head">TESTIMONIALS</h1>
            <h2 class="mt-3" style="font-family: 'Cinzel', serif; color: gold;">Elite Client Circle</h2>
            <div class="mt-2" style="width: 50px; height: 2px; background: var(--review-soft-gold); margin: 0 auto;"></div>
        </div>
        <!-- 
        <div class="filter-pills d-flex flex-wrap justify-content-center gap-2 my-4">
            <span class="badge active">All</span>
            <span class="badge">Salons</span>
            <span class="badge">Celebrities</span>
            <span class="badge">Interiors</span>
            <span class="badge">Academy</span>
        </div> -->

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=600" />

                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"> <img
                        src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=600" />

                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=600" />
                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?auto=format&fit=crop&w=600" />
                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=600" />
                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=600" />
                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
                <div class="swiper-slide"><img
                        src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=600" />
                    <div class="review-box">
                        ⭐⭐⭐⭐⭐
                        <p>V & V Salon service is amazing! Staff very professional and luxury experience.</p>
                        <h6>- Priya Sharma</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-btn-container">
            <div class="custom-nav prev-slide">←</div>
            <div class="custom-nav next-slide">→</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true, // Center image focus
            loop: true, // Infinite loop
            slidesPerView: "auto",
            initialSlide: 2, // Starts from middle image
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 0, // No rotation for clean look
                stretch: 0, // No stretching
                depth: 100, // Distance of side images
                modifier: 2.5, // Scale effect
                slideShadows: false,
            },
            navigation: {
                nextEl: ".next-slide",
                prevEl: ".prev-slide",
            },
            // Breakpoints for perfect symmetry on all screens
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: -30
                } // Shows 1 center + 1 left + 1 right clearly
            }
        });
    </script>

</body>

</html>