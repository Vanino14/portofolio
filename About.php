<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work History</title>
    <style>
        /* Basic styling */
        .job-section {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .job-section img.job-logo {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }

        .hidden {
            visibility: hidden;
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }

        .scroll-btn {
            display: block;
            margin: 20px auto 0;
            text-align: center;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .scroll-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Work History</h1>
                        <p class="intro-text">
                            My professional journey over the years.
                        </p>
                        <a href="#work-history" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Work History Section -->
    <section id="work-history">
        <div class="container content-section">
            <h2 class="text-center">My Career</h2>
            <div class="job-section" id="job1">
                <img src="https://www.abhatigroup.com/wp-content/uploads/2022/01/Main-Logo-Abhati.png"
                    alt="ABHATI GROUP Logo" class="job-logo">
                <h3>Information Technology Programmer</h3>
                <h4>ABHATI GROUP · Full-time</h4>
                <p><strong>Jul 2023 - Present · 1 yr 6 mos</strong></p>
                <p><em>North Jakarta, Jakarta, Indonesia · On-site</em></p>
                <ul>
                    <li>Developing and maintaining ERP systems focused on logistics, finance, and quality control.</li>
                    <li>Programming using PHP, CodeIgniter 4, ReactJS, and Laravel.</li>
                    <li>Creating RESTful APIs and optimizing database performance with raw SQL and query builders.</li>
                    <li>Mentoring junior developers and promoting best practices in coding and system design.</li>
                </ul>
                <!-- <button class="scroll-btn" data-target="job2">Next</button> -->
            </div>
            <hr>
            <div class="job-section " id="job2">
                <img src="https://media.licdn.com/dms/image/v2/D560BAQHDCVEjOpEInA/company-logo_100_100/company-logo_100_100/0/1704171454772?e=1741824000&v=beta&t=YR57eg8Z2FULZyVGFWa4097Xu36Kt-XWHGsfOOqxN8Q"
                    alt="PT. Nijes Bayu Lestari Logo" class="job-logo">
                <h3>Production Planning Control</h3>
                <h4>PT. Nijes Bayu Lestari · Full-time</h4>
                <p><strong>Jan 2021 - Jun 2023 · 2 yrs 6 mos</strong></p>
                <p><em>Kota Bekasi, Jawa Barat, Indonesia · On-site</em></p>
                <ul>
                    <li>Controlling stock materials and creating production plans.</li>
                    <li>Calculating costs (work, transport, packing) and integrating them into quotations.</li>
                    <li>Communicating with suppliers and developing procedures based on SOP.</li>
                </ul>
                <!-- <button class="scroll-btn" data-target="job3">Next</button> -->
            </div>
            <hr>
            <div class="job-section " id="job3">
                <img src="https://media.licdn.com/dms/image/v2/D560BAQHDCVEjOpEInA/company-logo_100_100/company-logo_100_100/0/1704171454772?e=1741824000&v=beta&t=YR57eg8Z2FULZyVGFWa4097Xu36Kt-XWHGsfOOqxN8Q"
                    alt="Freelance Logo" class="job-logo">
                <h3>Accountant</h3>
                <h4>PT. Nijes Bayu Lestari · Full-time</h4>
                <p><strong>Jun 2018 - Dec 2020 · 2 yrs 7 mos</strong></p>
                <p><em>Bekasi Timur, West Java, Indonesia</em></p>
                <ul>
                    <li>Prepared monthly income and cash flow reports.</li>
                    <li>Reported monthly tax invoices.</li>
                    <li>Managed invoicing and mailing processes.</li>
                </ul>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const jobSections = document.querySelectorAll('.job-section');
            const scrollButtons = document.querySelectorAll('.scroll-btn');

            // Intersection Observer for animations
            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            entry.target.classList.remove('hidden');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.1 }
            );

            jobSections.forEach(section => observer.observe(section));

            // Add scroll functionality to buttons
            scrollButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.dataset.target;
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        });
    </script>
</body>

</html>