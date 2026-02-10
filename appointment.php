<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V&V Salon - Appointments & Branches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --sreenika-dark: #0b0b0b;
            --sreenika-accent: #dcc136;
            --border-glow: rgba(220, 193, 54, 0.3);
            --card-bg: #1a1a1a;
            --text-muted: #b0b0b0;
        }

        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            padding-bottom: 60px;
        }

        /* --- Branch Cards Styles --- */
        .snk-v2-branch-card {
            background-color: var(--sreenika-dark);
            border: 1px solid var(--sreenika-accent);
            color: #ffffff;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            cursor: pointer;
            height: 100%;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }

        .snk-v2-branch-card:hover,
        .snk-v2-branch-card.active {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px var(--border-glow);
            border-color: #ffffff;
        }

        .snk-v2-branch-card.active {
            background: linear-gradient(145deg, #0b0b0b 0%, #1a1a1a 100%);
            border-width: 2px;
        }

        .snk-v2-card-title {
            color: var(--sreenika-accent);
            font-family: 'Garamond', serif;
            font-weight: bold;
            font-size: 1.4rem;
            border-bottom: 1px solid var(--border-glow);
            padding-bottom: 12px;
            margin-bottom: 15px;
        }

        .snk-v2-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            font-size: 0.9rem;
            color: #e0e0e0;
        }

        .snk-v2-icon {
            color: var(--sreenika-accent);
            margin-right: 12px;
            font-size: 1rem;
        }

        /* --- Appointment & Map Section --- */
        .snk-v2-main-container {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #333;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .snk-v2-form-control {
            background-color: #252525;
            border: 1px solid #444;
            color: #fff;
            padding: 12px;
        }

        .snk-v2-form-control:focus {
            background-color: #2d2d2d;
            border-color: var(--sreenika-accent);
            color: #fff;
            box-shadow: 0 0 8px var(--border-glow);
        }

        .snk-v2-btn-book {
            background-color: gold !important;
            font-size: 20px;
            color: #000;
            font-weight: 800;
            border: none;
            padding: 15px;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .snk-v2-btn-book:hover {
            background-color: #fff;
            color: #000;
            transform: scale(1.02);
        }

        .snk-v2-map-wrapper iframe {
            width: 100%;
            height: 100%;
            min-height: 450px;
            border: 0;
            filter: grayscale(0.3) contrast(1.1);
        }

        @media (max-width: 991px) {
            .snk-v2-map-wrapper iframe {
                height: 350px;
            }
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 style="color: var(--sreenika-accent); font-weight: bold;">OUR BRANCHES</h2>
            <p class="text-secondary">Select a branch to book your appointment</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="snk-v2-branch-card p-4 active" onclick="selectBranch('MVP Branch', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.000000000000!2d83.3333333!3d17.7333333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3943376673574b%3A0xf639a0499e71000!2sMVP%20Colony!5e0!3m2!1sen!2sin!4v1700000000000')">
                    <h2 class="snk-v2-card-title text-center">MVP Branch</h2>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-geo-alt-fill snk-v2-icon"></i>
                        <span>Mvp double Rd, opp. Jet TTd, Visakhapatnam, AP 530017</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-telephone-fill snk-v2-icon"></i>
                        <span>+91-8125801107</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-whatsapp snk-v2-icon"></i>
                        <span>+91-8125801107</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-envelope-fill snk-v2-icon"></i>
                        <span>vandvsalonvizag@gmail.com</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-clock-fill snk-v2-icon"></i>
                        <span>9am - 9pm</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="snk-v2-branch-card p-4" onclick="selectBranch('V&V SALON & SPA (Kakinada)', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3816.000000000000!2d82.2333333!3d16.9333333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a38284200000000%3A0x0!2sKakinada!5e0!3m2!1sen!2sin!4v1700000000000')">
                    <h2 class="snk-v2-card-title text-center">Kakinada Branch</h2>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-geo-alt-fill snk-v2-icon"></i>
                        <span>Mummidivari St, Surya Rao Peta, Kakinada, AP 533001</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-telephone-fill snk-v2-icon"></i>
                        <span>+91-9000021107</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-whatsapp snk-v2-icon"></i>
                        <span>+91-9000021107</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-envelope-fill snk-v2-icon"></i>
                        <span>vnvkakinada@gmail.com</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-clock-fill snk-v2-icon"></i>
                        <span>9am - 9pm</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="snk-v2-branch-card p-4" onclick="selectBranch('Madhurwada Branch', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.000000000000!2d83.3500000!3d17.8000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39500000000000%3A0x0!2sMadhurwada!5e0!3m2!1sen!2sin!4v1700000000000')">
                    <h2 class="snk-v2-card-title text-center">Madhurwada Branch</h2>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-geo-alt-fill snk-v2-icon"></i>
                        <span>Fab India Bldg, PM Palem, Madhurwada, Vizag, AP 530041</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-telephone-fill snk-v2-icon"></i>
                        <span>+91-9011186999</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-whatsapp snk-v2-icon"></i>
                        <span>+91-9011186999</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-envelope-fill snk-v2-icon"></i>
                        <span>vandvsalonmadhurwada@gmail.com</span>
                    </div>
                    <div class="snk-v2-info-item">
                        <i class="bi bi-clock-fill snk-v2-icon"></i>
                        <span>9am - 9pm</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0 snk-v2-main-container mb-5">
            <div class="col-lg-6 p-4 p-md-5">
                <h3 class="mb-4" style="color: var(--sreenika-accent);">Book Appointment</h3>
                <form id="appointmentForm">
                    <div class="mb-3">
                        <!-- <label class="form-label text-secondary small">BRANCH SELECTED</label> -->
                        <!-- <input type="text" id="selectedBranch" class="form-control snk-v2-form-control" readonly value="MVP Branch"> -->
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label small">NAME</label>
                            <input type="text" class="form-control snk-v2-form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small">PHONE</label>
                            <input type="tel" class="form-control snk-v2-form-control" placeholder="Mobile number" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label small">SERVICE</label>
                            <select class="form-select snk-v2-form-control">
                                <option selected disabled>Choose Service</option>
                                <option>Hair Cut & Styling</option>
                                <option>Hair Coloring</option>
                                <option>Facial & Skin Care</option>
                                <option>Luxury Spa</option>
                                <option>Bridal / Occasion Makeup</option>
                            </select>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label small">Branch</label>
                            <select class="form-select snk-v2-form-control">
                                <option selected disabled>Choose Branch</option>
                                <<option> Kakinada </option>
                                    <option>Visakhapatnam </option>
                                    <option> Madhuravada </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small">DATE</label>
                            <input type="date" class="form-control snk-v2-form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label small">Meassage</label>
                            <input type="text" class="form-control snk-v2-form-control" placeholder="meassage">
                        </div>
                    </div>

                    <button type="submit" class="btn snk-v2-btn-book w-100 mt-3 text-uppercase">Book Now</button>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="snk-v2-map-wrapper h-100">
                    <iframe id="branchMap"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.000000000000!2d83.3333333!3d17.7333333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3943376673574b%3A0xf639a0499e71000!2sMVP%20Colony!5e0!3m2!1sen!2sin!4v1700000000000"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectBranch(branchName, mapUrl) {
            // 1. Form lo branch name update cheyadam
            document.getElementById('selectedBranch').value = branchName;

            // 2. Map update cheyadam
            document.getElementById('branchMap').src = mapUrl;

            // 3. Click chesina card ki gold border (Active state) ivvadam
            const cards = document.querySelectorAll('.snk-v2-branch-card');
            cards.forEach(card => {
                card.classList.remove('active');
                // Title match ayithe active class add chestundhi
                if (card.querySelector('h2').innerText.trim() === branchName ||
                    branchName.includes(card.querySelector('h2').innerText.trim())) {
                    card.classList.add('active');
                }
            });

            // 4. Smooth ga form daggara scroll avvadam
            document.querySelector('.snk-v2-main-container').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }

        // Form Submit handling
        document.getElementById('appointmentForm').onsubmit = function(e) {
            e.preventDefault();
            const branch = document.getElementById('selectedBranch').value;
            alert('Success! Your appointment request for ' + branch + ' has been sent. We will call you back soon.');
        };
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>

<?php include 'footer.php '; ?>