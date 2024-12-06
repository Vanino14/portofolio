<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Projects</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        header,
        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            scroll-snap-align: start;
        }

        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
        }

        header {
            background: #282c34;
            color: white;
            padding: 40px 20px;
        }

        section {
            padding: 40px 20px;
        }

        section:nth-child(even) {
            background-color: #f4f4f4;
        }

        section:nth-child(odd) {
            background-color: #fff;
        }

        h1,
        h2 {
            margin: 0 0 20px;
            font-size: 2rem;
        }

        p {
            margin: 10px 0;
        }

        .project-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: center;
            margin-bottom: 40px;
        }

        .project-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .project-card img:hover {
            transform: scale(1.05);
        }

        .carousel {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
            /* Ensuring width is 100% of the carousel container */
        }

        .carousel-item {
            flex: 0 0 100%;
            /* Ensures each item takes up 100% of the width */
            display: block;
        }

        .carousel-item img {
            width: 100%;
            border-radius: 10px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 2rem;
            padding: 10px;
            cursor: pointer;
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        .btnghost {
            margin: 10px 5px;
            padding: 10px 20px;
            border: 2px solid #007bff;
            color: #007bff;
            background: transparent;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            display: inline-block;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .btnghost:hover {
            background: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <div class="scroll-container">
        <!-- Header Section -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <h1 class="brand-heading">PROJECTS</h1>
                    <p class="intro-text">
                        All of my History Projects
                    </p>
                    <a href="#project-steps" class="btnghost">
                        <i class="fa fa-angle-double-down animated"></i> View Projects
                    </a>
                </div>
            </div>
        </header>

        <!-- PT. Hoseki Prima Indonesia -->
        <section id="project-steps">
            <div class="project-card">
                <div class="text-content">
                    <h3>June-2021: Website Profile PT. Hoseki Prima Indonesia</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Developed a professional company profile website for PT. Hoseki Prima Indonesia.</li>
                        <li>Built using HTML, CSS, and JavaScript, with a focus on showcasing the company’s brand and
                            services.</li>
                        <li>Created a user-friendly interface with a modern design that highlights key information.</li>
                    </ul>
                </div>

                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item ">
                            <img src="img/hoseki1.png" alt="PT. Hoseki Prima Indonesia" />
                        </div>
                        <div class="carousel-item ">
                            <img src="img/hoseki2.png" alt="PT. Hoseki Prima Indonesia" />
                        </div>
                        <div class="carousel-item">
                            <img src="img/hoseki3.png" alt="PT. Hoseki Prima Indonesia" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="javascript:void(0)" onclick="moveToPrevSlide()">
                        <span class="fa fa-chevron-left"></span>
                    </a>
                    <a class="carousel-control-next" href="javascript:void(0)" onclick="moveToNextSlide()">
                        <span class="fa fa-chevron-right"></span>
                    </a>
                </div>
            </div>
        </section>

        <section id="project-steps">
            <div class="project-card">
                <div class="text-content">
                    <h3>August-2022: Website E-Commerce Lielien Shop</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Developed E-Commerce website for Lielien Shop.</li>
                        <li>Built using HTML, CSS, JavaScript,and PHP with a focus on showcasing the company’s brand and
                            services.</li>
                        <li>Created a user-friendly interface with a modern design that highlights key information.</li>
                    </ul>
                </div>
                <div>
                    <img src="img/lielien2.png" alt="PT. Hoseki Prima Indonesia" />
                    <img src="img/lielien1.png" alt="PT. Hoseki Prima Indonesia" />
                    <img src="img/lielien3.png" alt="PT. Hoseki Prima Indonesia" />
                </div>

            </div>
        </section>

        <section id="project-steps">
            <div class="project-card">
                <div class="text-content">
                    <h3>November-2022: Progressive Web App layout (ReactJs)</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Developed E-Commerce website for Lielien Shop.</li>
                        <li>Built using HTML, CSS, JavaScript,and PHP with a focus on showcasing the company’s brand and
                            services.</li>
                        <li>Created a user-friendly interface with a modern design that highlights key information.</li>
                    </ul>
                </div>
                <div>
                    <img src="img/react.png" alt="PT. Hoseki Prima Indonesia" />
                    <img src="img/react1.png" alt="PT. Hoseki Prima Indonesia" />
                </div>

            </div>
        </section>
        <!-- Contact Section -->
        <section>
            <div class="text-center">
                <a href="mailto:mgunawan10@gmail.com" class="btnghost"><i class="fa fa-envelope"></i> Request Similar
                    Project</a>
                <a href="index.html#portfolio" class="btnghost"><i class="fa fa-camera"></i> Back to Projects
                    Gallery</a>
            </div>
        </section>

    </div>

    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;

        // Function to move to next slide
        function moveToNextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        }

        // Function to move to previous slide
        function moveToPrevSlide() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        }

        // Function to update the carousel slide
        function updateCarousel() {
            const carouselInner = document.querySelector('.carousel-inner');
            const offset = -currentIndex * 100;  // This moves the container by 100% for each item
            carouselInner.style.transform = `translateX(${offset}%)`;  // Use translateX to slide the images
        }

        // Auto-slide every 5 seconds
        setInterval(moveToNextSlide, 5000);
    </script>
</body>

</html>