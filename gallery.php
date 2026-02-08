<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Gallery Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        .gold-text {
            color: #d4af37;
        }

        /* Filter Buttons */
        .filter-btn {
            border: 1px solid #d4af37;
            color: #d4af37;
            background: transparent;
            padding: 8px 25px;
            margin: 5px;
            border-radius: 30px;
            transition: 0.4s;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background-color: #d4af37;
            color: #000;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.4);
        }

        /* Image Gallery */
        .gallery-item {
            transition: all 0.5s ease;
            display: block;
        }

        /* The Moving/Zoom Effect */
        .img-box {
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid #222;
            position: relative;
        }

        .img-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .img-box:hover img {
            transform: scale(1.1);
        }

        /* Animation for filtering */
        .hide {
            display: none;
        }

        .show {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold"> <span class="gold-text">Gallery</span></h2>
            <div class="mt-4">
                <button class="filter-btn active" onclick="filterSelection('all')">Show All</button>
                <button class="filter-btn" onclick="filterSelection('kakinada')">Kakinada</button>
                <button class="filter-btn" onclick="filterSelection('vizag')">Vizag</button>
                <button class="filter-btn" onclick="filterSelection('hyderabad')">Hyderabad</button>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4 gallery-item kakinada">
                <div class="img-box">
                    <img src="./assets/img/g1.jpg" alt="Kakinada">
                </div>
                <!-- <p class="mt-2 text-center gold-text">Kakinada Port</p> -->
            </div>

            <div class="col-md-4 gallery-item vizag">
                <div class="img-box">
                    <img src="./assets/img/g2.jpeg" alt="Vizag">
                </div>
                <!-- <p class="mt-2 text-center gold-text">Vizag Beach</p> -->
            </div>

            <div class="col-md-4 gallery-item hyderabad">
                <div class="img-box">
                    <img src="./assets/img/g3.jpg" alt="Hyderabad">
                </div>
                <!-- <p class="mt-2 text-center gold-text">Charminar</p> -->
            </div>

            <div class="col-md-4 gallery-item kakinada">
                <div class="img-box">
                    <img src="./assets/img/g4.jpg" alt="Kakinada">
                </div>
                <!-- <p class="mt-2 text-center gold-text">Kakinada City</p> -->
            </div>

            <div class="col-md-4 gallery-item vizag">
                <div class="img-box">
                    <img src="./assets/img/g5.jpg" alt="Vizag">
                </div>
                <!-- <p class="mt-2 text-center gold-text">RK Beach</p> -->
            </div>
        </div>
    </div>




    <!-- galleru slider  -->

    <div class="container py-5 text-center">
        <p class="text-uppercase small tracking-widest gold-text fw-bold">V&V Premium Gallery</p>
        <h1 class="fw-bold mb-3">Our Visual Diary</h1>
        <p class="text-secondary">Experience luxury through our lens.<br>Symmetry in every frame.</p>

        <div class="filter-pills d-flex flex-wrap justify-content-center gap-2 my-4">
            <span class="badge active">All</span>
            <span class="badge">Salons</span>
            <span class="badge">Celebrities</span>
            <span class="badge">Interiors</span>
            <span class="badge">Academy</span>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=600" /></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=600" /></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?auto=format&fit=crop&w=600" /></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=600" /></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=600" /></div>
                <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=600" /></div>
            </div>
        </div>

        <div class="nav-btn-container">
            <div class="custom-nav prev-slide">←</div>
            <div class="custom-nav next-slide">→</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("gallery-item");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                w3AddClass(x[i], "hide");
                if (x[i].className.indexOf(c) > -1) {
                    w3RemoveClass(x[i], "hide");
                    w3AddClass(x[i], "show");
                }
            }

            // Update active button state
            let btns = document.getElementsByClassName("filter-btn");
            for (let btn of btns) {
                btn.classList.remove("active");
            }
            event.currentTarget.classList.add("active");
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
    </script>

</body>

</html>

<?php include 'footer.php'; ?>