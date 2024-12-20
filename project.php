<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Projects</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* body {
            margin: 0;
            overflow: hidden;
        } */

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

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            /* background-color: #282c34; */
            /* color: white; */
            /* z-index: 1000; */
            /* Pastikan di atas elemen lainnya */
            padding: 10px 20px;
        }

        .navbar.scrolled {
            background-color: #000000;
            /* Warna navbar ketika di section 2 */
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

        /* .project-card img:hover {
            transform: scale(1.05);
        } */

        @keyframes tonext {
            75% {
                left: 0;
            }

            95% {
                left: 100%;
            }

            98% {
                left: 100%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes tostart {
            75% {
                left: 0;
            }

            95% {
                left: -300%;
            }

            98% {
                left: -300%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes snap {
            96% {
                scroll-snap-align: center;
            }

            97% {
                scroll-snap-align: none;
            }

            99% {
                scroll-snap-align: none;
            }

            100% {
                scroll-snap-align: center;
            }
        }

        * {
            box-sizing: border-box;
            /* scrollbar-color: transparent transparent; */
            /* thumb and track color */
            scrollbar-width: 0px;
        }

        *::-webkit-scrollbar {
            width: 0;
        }

        *::-webkit-scrollbar-track {
            background: transparent;
        }

        *::-webkit-scrollbar-thumb {
            background: transparent;
            border: none;
        }

        * {
            -ms-overflow-style: none;
        }

        ol,
        li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .carousel {
            position: relative;
            padding-top: 75%;
            filter: drop-shadow(0 0 10px #0003);
            perspective: 100px;
        }

        .carousel__viewport {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            overflow-x: scroll;
            overflow-y: hidden;
            counter-reset: item;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
        }

        .carousel__slide {
            position: relative;
            flex: 0 0 100%;
            width: 100%;
            background-color: #f99;
            counter-increment: item;
        }

        .carousel__slide:nth-child(even) {
            background-color: #99f;
        }

        .carousel__slide:before {
            /* content: (item); */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -40%, 70px);
            color: #fff;
            font-size: 2em;
        }

        .carousel__snapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            scroll-snap-align: center;
        }

        @media (hover: hover) {
            .carousel__snapper {
                animation-name: tonext, snap;
                animation-timing-function: ease;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            .carousel__slide:last-child .carousel__snapper {
                animation-name: tostart, snap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel__snapper {
                animation-name: none;
            }
        }

        .carousel:hover .carousel__snapper,
        .carousel:focus-within .carousel__snapper {
            animation-name: none;
        }

        .carousel__navigation {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .carousel__navigation-list,
        .carousel__navigation-item {
            display: inline-block;
        }

        .carousel__navigation-button {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            background-color: #333;
            background-clip: content-box;
            border: 0.25rem solid transparent;
            border-radius: 50%;
            font-size: 0;
            transition: transform 0.1s;
        }

        .carousel::before,
        .carousel::after,
        .carousel__prev,
        .carousel__next {
            position: absolute;
            top: 0;
            margin-top: 37.5%;
            width: 4rem;
            height: 4rem;
            transform: translateY(-50%);
            border-radius: 50%;
            font-size: 0;
            outline: 0;
        }

        .carousel::before,
        .carousel__prev {
            left: -1rem;
        }

        .carousel::after,
        .carousel__next {
            right: -1rem;
        }

        .carousel::before,
        .carousel::after {
            content: '';
            z-index: 1;
            background-color: #333;
            background-size: 1.5rem 1.5rem;
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
            font-size: 2.5rem;
            line-height: 4rem;
            text-align: center;
            pointer-events: none;
        }

        .carousel::before {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        .carousel::after {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body>
    <div id="test" class="scroll-container">
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

                <div class="carousel" aria-label="Gallery">
                    <ol class="carousel__viewport">
                        <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper">
                                <img src="img/Hoseki1.png">
                                <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                            </div>
                        </li>
                        <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>
                            <img src="img/Hoseki2.png">
                            <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                        </li>
                        <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>
                            <img src="img/Hoseki3.png">
                            <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                        </li>
                        <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper"></div>

                            <img src="img/Hoseki4.png">
                            <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                            <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                        </li>
                    </ol>
                    <aside class="carousel__navigation">
                        <ol class="carousel__navigation-list">
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                            </li>
                            <li class="carousel__navigation-item">
                                <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                            </li>
                        </ol>
                    </aside>
                </div>
            </div>
        </section>

        <section id="">
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
                    <img src="img/lielien1.png">
                </div>
            </div>
        </section>
        <section id="project-react">
            <div class="project-card">
                <div class="text-content">
                    <h3>November 2022: Progressive Web App Layout (ReactJs)</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Created a dashboard for a pharmacy.</li>
                        <li>Developed using ReactJs for learning purposes.</li>
                        <li>Focused on creating a user-friendly UI/UX design.</li>
                    </ul>
                </div>
                <div>
                    <img src="img/react1.png" alt="Progressive Web App Layout" />
                    <img src="img/react.png" alt="Progressive Web App Layout" />
                </div>
            </div>
        </section>

        <section id="project-erp">
            <div class="project-card">
                <div class="text-content">
                    <h3>August 2023: Enterprise Resource Planning (ERP) - Abhati Group</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Enhanced the ERP system by adding new features and fixing bugs.</li>
                        <li>Developed using PHP Native, jQuery, and other libraries.</li>
                        <li>Modules include Logistics, Purchasing, Sales, Production, Finance (Accounts Payable,
                            Accounts Receivable, Chart of Accounts, Trial Balance, etc.).</li>
                    </ul>
                    <p><b>Technologies:</b> PHP Native</p>
                </div>
                <div>
                    <img src="img/ERP.png" alt="ERP Abhati Group" />
                </div>
            </div>
        </section>

        <section id="project-qc">
            <div class="project-card">
                <div class="text-content">
                    <h3>December 2023: Quality Control System - Abhati Group</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Developed to support the ERP system as a mutual integration tool.</li>
                        <li>Built using CodeIgniter 4.</li>
                        <li>Serves as a communication bridge between the Quality Control department and other
                            departments.</li>
                    </ul>
                    <p><b>Technologies:</b> CodeIgniter 4</p>
                </div>
                <div>
                    <img src="img/QC.png" alt="Quality Control System" />
                </div>
            </div>
        </section>

        <section id="project-rab">
            <div class="project-card">
                <div class="text-content">
                    <h3>July 2024: RAB Calculator - Depo Aplus</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Freelance project to assist Depo Aplus in calculating material needs.</li>
                        <li>Developed using CodeIgniter 4 and Tailwind CSS.</li>
                        <li>Calculates construction materials and integrates with WhatsApp API for communication with
                            customers.</li>
                    </ul>
                    <p><b>Technologies:</b> CodeIgniter 4, Tailwind CSS</p>
                </div>
                <div>
                    <img src="img/RAB.png" alt="RAB Calculator" />
                </div>
            </div>
        </section>

        <section id="project-lms">
            <div class="project-card">
                <div class="text-content">
                    <h3>September 2024: Learning Management System - Abhati Group</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Developed an LMS for training purposes at Abhati Group.</li>
                        <li>Built using CodeIgniter 4.</li>
                        <li>Includes three user roles: admin, participant, and mentor.</li>
                        <li>Points are automatically calculated based on participants' activity in courses.</li>
                        <li>Admins can easily monitor participants' progress.</li>
                    </ul>
                    <p><b>Technologies:</b> CodeIgniter 4</p>
                </div>
                <div>
                    <img src="img/LMS.png" alt="Learning Management System" />
                </div>
            </div>
        </section>

        <section id="project-sac">
            <div class="project-card">
                <div class="text-content">
                    <h3>November 2024: Sales Activity Control</h3>
                    <p><b>Project Overview:</b></p>
                    <ul>
                        <li>Ongoing project targeted for completion in 2025.</li>
                        <li>Developed using Flutter for the frontend and CodeIgniter 4 for the backend.</li>
                        <li>Facilitates sales activity monitoring and job assignment for sales teams.</li>
                    </ul>
                    <p><b>Technologies:</b> Flutter, CodeIgniter 4</p>
                </div>
                <div>
                    <img src="img/SAC.png" alt="Sales Activity Control" />
                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section>
            <div class="text-center">
                <a href="mailto:mgunawan10@gmail.com" class="btnghost"><i class="fa fa-envelope"></i> Request Similar
                    Project</a>
                <a href="index" class="btnghost"><i class="fa fa-camera"></i> Back to Projects
                    Gallery</a>
            </div>
        </section>

    </div>

    <script>const test = document.querySelector("#test");

        test.addEventListener("scroll", () => {
            const navbar = document.querySelector(".navbar");
            const section2 = document.querySelector("section");

            // Hitung posisi Section 2 relatif terhadap kontainer
            const section2Top = section2.getBoundingClientRect().top - test.getBoundingClientRect().top;
            const navbarHeight = navbar.offsetHeight;

            // Tambahkan kelas jika Section 2 berada di viewport kontainer
            if (section2Top <= navbarHeight && section2Top >= -test.offsetHeight + navbarHeight) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

    </script>
</body>

</html>