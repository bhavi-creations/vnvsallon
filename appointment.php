<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V&V Salon Branch Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --sreenika-dark: #000000;
            --sreenika-accentt: #dcc136;
            --border-glow: rgba(220, 193, 54, 0.3);
        }

        body {
            background-color: #121212; /* Dark background to make cards pop */
            padding: 50px 0;
        }

        /* Unique Class Names for the Card */
        .snk-branch-card {
            background-color: var(--sreenika-dark);
            border: 1px solid var(--sreenika-accentt);
            color: #ffffff;
            transition: all 0.3s ease-in-out;
            text-decoration: none; /* Removes underline from link */
            height: 100%;
            display: block;
            border-radius: 8px;
        }

        .snk-branch-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--border-glow);
            border-color: #ffffff;
            color: #ffffff;
        }

        .snk-card-title {
            color: var(--sreenika-accentt);
            font-family: 'Serif', 'Garamond', serif;
            font-size: 1.5rem;
            border-bottom: 1px solid var(--border-glow);
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .snk-contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #e0e0e0;
        }

        .snk-icon {
            color: var(--sreenika-accentt);
            margin-right: 12px;
            font-size: 1.1rem;
        }

        .snk-address-text {
            line-height: 1.4;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row g-4">
        
        <div class="col-md-4">
            <a href="https://your-link-here.com" class="snk-branch-card p-4">
                <h2 class="snk-card-title text-center">MVP Branch</h2>
                
                <div class="snk-contact-item">
                    <i class="bi bi-geo-alt-fill snk-icon"></i>
                    <span class="snk-address-text">Mvp double Rd, ttd Kalyana mandapam road, opp. Jet TTd, Visakhapatnam, Andhra Pradesh 530017</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-telephone-fill snk-icon"></i>
                    <span>+91-8125801107</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-whatsapp snk-icon"></i>
                    <span>+91-8125801107</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-envelope-fill snk-icon"></i>
                    <span>vandvsalonvizag@gmail.com</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-clock-fill snk-icon"></i>
                    <span>9am-9pm</span>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="snk-branch-card p-4">
                <h2 class="snk-card-title text-center">V&V SALON & SPA</h2>
                
                <div class="snk-contact-item">
                    <i class="bi bi-geo-alt-fill snk-icon"></i>
                    <span class="snk-address-text">Mummidivari Street, Surya Rao Peta, Kakinada, Andhra Pradesh, 533001<br>
                    <small class="text-secondary">(Landmark: Apollo Hospital Back side)</small></span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-telephone-fill snk-icon"></i>
                    <span>+91-9000021107</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-whatsapp snk-icon"></i>
                    <span>+91-9000021107</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-envelope-fill snk-icon"></i>
                    <span>vnvkakinada@gmail.com</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-clock-fill snk-icon"></i>
                    <span>9am-9pm</span>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="snk-branch-card p-4">
                <h2 class="snk-card-title text-center">Madhurwada Branch</h2>
                
                <div class="snk-contact-item">
                    <i class="bi bi-geo-alt-fill snk-icon"></i>
                    <span class="snk-address-text">Fab India building, 3rd floor, midhilapuri colony, pm.palem, madhurwada, Visakhapatnam, Andhra Pradesh - 530041</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-telephone-fill snk-icon"></i>
                    <span>+91-9011186999</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-whatsapp snk-icon"></i>
                    <span>+91-9011186999</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-envelope-fill snk-icon"></i>
                    <span>vandvsalonmadhurwada@gmail.com</span>
                </div>

                <div class="snk-contact-item">
                    <i class="bi bi-clock-fill snk-icon"></i>
                    <span>9am-9pm</span>
                </div>
            </a>
        </div>

    </div>
</div>

</body>
</html>