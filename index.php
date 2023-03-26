<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vidusha - Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.cssi" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/variables.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto text-capitalize"><a href="index">vidusha</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
                    <li><a class="nav-link scrollto" href="#projects">Projects</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="./blog">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li>
                        <a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#login">Sign
                            In</a>
                    </li>
                    <li>
                        <a class="getstarted scrollto" data-bs-toggle="modal" data-bs-target="#register">Join</a>
                    </li>
                </ul>
                <!-- <i class="fa-solid fa-list mobile-nav-toggle"></i> -->
                <i class="fa-sharp fa-solid fa-bars mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <h2 class="modal-title d-flex text-center p-4 mx-auto" id="exampleModalLabel" style="color: #2b2b2b">
                    Login</h2>
                <div class="mx-auto text-center">
                    <button class="btn btn-primary btn-sm w-75 mb-2">Continue with Facebook</button>
                    <button class="btn btn-outline-dark btn-sm w-75 mb-2">Continue with Google</button>
                    <button class="btn btn-outline-dark btn-sm w-75 mb-2">Continue with Apple</button>
                </div>
                <div class="modal-body">
                    <div class="mx-auto text-center">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Username">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Password">
                        <div class="justify-content-between d-flex">

                        </div>
                    </div>
                    <div class="mx-auto text-center justify-content-between d-flex w-75 pt-3 pb-3">
                        <div class="">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Remember me</label>
                        </div>
                        <div class="">
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mx-auto text-center">
                        <button class="btn btn-success btn-sm w-75">Continue</button>
                    </div>
                </div>
                <hr style="color:#2b2b2b">
                <div class="form-group row justify-content-center d-flex mx-auto">
                    <div class="text-center text-lg-start mb-2">
                        <p class="small fw-bold">Don't have an account? <a href="#!" class="link-danger">Register</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <h2 class="modal-title d-flex text-center p-4 mx-auto" id="exampleModalLabel" style="color: #2b2b2b">
                    Register With Us</h2>
                <div class="mx-auto text-center">
                    <button class="btn btn-primary btn-sm w-75 mb-2">Continue with Facebook</button>
                    <button class="btn btn-outline-dark btn-sm w-75 mb-2">Continue with Google</button>
                    <button class="btn btn-outline-dark btn-sm w-75 mb-2">Continue with Apple</button>
                </div>
                <div class="modal-body">
                    <div class="mx-auto text-center">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Enter your Email">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Username">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Password">
                        <input class="form-control form-control-sm w-75 mb-2 mx-auto" type="text"
                            placeholder="Repeat Password">

                    </div>
                    <hr style="color:#2b2b2b">

                    <div class="mx-auto text-center">
                        <button class="btn btn-success btn-sm w-75 mb-2">Join</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About <span class="text-capitalize">Vidusha</span></h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/IMG_2773.JPG" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Web Developer &amp; Full Stack Developer</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 11 May 1990
                                    </li>
                                    <li>
                                        <i class="bi bi-rounded-right"></i> <strong>UAE Number:</strong> +971 58 825
                                        0962
                                    </li>
                                    <li>
                                        <i class="bi bi-rounded-right"></i> <strong>Home Number:</strong> +94 76 887
                                        1747
                                    </li>
                                    <li>
                                        <i class="bi bi-rounded-right"></i> <strong>City:</strong> City : Al Shajah, UAE
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 32</li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> Bachelor of
                                        Software Engineering </li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong>
                                        vidusha.wijekoon11@gmail.com</li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                            culpa magni laudantium dolores.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Bootstrap <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">ReactJS <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">MySQL <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">PHP <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">OOP / MVC<i class="val">65%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Laravel <i class="val">45%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= My Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>My Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Summery</h3>
                        <div class="resume-item pb-0">
                            <h4>Vidusha Wijekoon</h4>
                            <p>
                                <em>
                                    Software engineer with 3+ years of
                                    Experience. Being an ambitious person. My inspiring now is to pursue my professional
                                    carrier to high level. Highly organized, developing innovative projects efficiency
                                    effectiveness and analytical software engineer with web development and full stack
                                    development also having UI/UX and basic knowledge about graphic design who is able
                                    to work with alongside with other talents. That loves development perfect solution
                                    and various methods. Clean code and newest technologies create maintain websites.
                                    .
                                </em>
                            </p>
                            <p>
                            <ul>
                                <li>52/A, Mariyawatte, Gampola, Kandy, Sri Lanka</li>
                                <li>(+94) 76 887 1747</li>
                                <li>(+971) 58 825 0962 </li>
                                <li>vidusha.wijekoon11@gmail.com</li>
                            </ul>
                            </p>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor of Engineering &amp; Software Engineering</h4>
                            <h5>2015 - 2019</h5>
                            <p><em>Sichuan University, Chendu, China</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Certificate Course &amp; Software & Hardware (NVQ3)</h4>
                            <h5>2010 - 2010</h5>
                            <p><em>Hector Kobbakaduwa Institute(VTA), Peradeniya, Kandy, Sri Lanka</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Certificate Course &amp; Elementory English</h4>
                            <h5>2009 - 2009</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Full Stack Developer</h4>
                            <h5>2022/Jul - 2023/March</h5>
                            <p><em>Al Sakb Computer Devices & Mobiles Phone TR LLC, Industrial Area 5, Al Shajah, UAE
                                </em></p>
                            <p>
                            <ul>
                                <li>
                                    Developed numerous programs (financial and several department ) and made sure they
                                    exceeded the expectations of our clients
                                </li>
                                <li>
                                    Managed up to every project tasks at a given time and ensured our team met its
                                    weekly deadlines
                                </li>
                                <li>
                                    Consulted with clients on the most appropriate graphic design options based on their
                                    major marketing goals
                                </li>
                                <li>
                                    Project Consist UI/UX(Figma), HTML, CSS, JavaScript, jQuery, Ajax, MySQL, PHP, Jira,
                                    Git
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Assiciate Software Engineer</h4>
                            <h5>2021/Oct - 2022/Jun</h5>
                            <p><em>Screenline Holdings, BOI Zone, Katunayake, Colombo, Sri Lanka</em></p>
                            <p>
                            <ul>
                                <li>
                                    Lead the project and design, development and implementation of development,
                                    gathering all the requirements from the client
                                </li>
                                <li>
                                    Delegate tasks to a 3-members of software developing team and provide counsel on all
                                    aspects of the project
                                </li>
                                <li>
                                    Assess all the software(ERP) in-house server for the warehouse to ensure the quality
                                    and accuracy of their designs
                                </li>
                                <li>
                                    This project based on Php, jQuery, MySQL, Bitbukcet, Jira
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Junior Software Engineer</h4>
                            <h5>2020/Feb - 2021/Sep</h5>
                            <p><em>Soft Tech One, Nugegoda, Colombo, Sri Lanka</em></p>
                            <p>
                            <ul>
                                <li>
                                    Worked with senior software engineer to develop different projects web projects
                                </li>
                                <li>
                                    Designed templates using HTML, CSS, Bootstrap, JavaScript
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Frontend Developer(Part Time)</h4>
                            <h5>2021/Feb - 2022/Feb</h5>
                            <p><em>Haiqi Software Technology, Zhejiang , China</em></p>
                            <p>
                            <ul>
                                <li>
                                    Worked with project manager alongside to develop NFT web project.
                                </li>
                                <li>
                                    Design web page according to the UI/UX given by the project manager and submit the
                                    on time
                                </li>
                                <li>
                                    HTML, CSS, JavaScript used to create NFT web site later migrate with VueJS
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Big Data Analysis (Internship)</h4>
                            <h5>2019/Feb - 2019/Mar</h5>
                            <p><em>Hwadee Information Technology, Chengdu, Sichuan, China </em></p>
                            <p>
                            <ul>
                                <li>
                                    Worked with small group , get data and analyse to according to the requirement
                                </li>
                                <li>
                                    HTML, CSS, JavaScript, jQuery technologies used to finish this project
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Frontend Web Developer (Training)</h4>
                            <h5>2018/Jun - 2019/Feb</h5>
                            <p><em>Yeaoh Media Inc. Chengdu Sichuan, China</em></p>
                            <p>
                            <ul>
                                <li>
                                    Worked with senior software engineer to develop web project using CMS Drupal
                                </li>
                                <li>
                                    Completed the task according to requirement from senior software developer
                                </li>
                                <li>
                                    CMS, HTML, CSS, jQuery, Drupal, Ubuntu
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>IT Executive & Sales Executive</h4>
                            <h5>2012/Dec - 2015/Aug</h5>
                            <p><em>PC Plus Computers, Kandy, Sri Lanka</em></p>
                            <p>
                            <ul>
                                <li>
                                    Troubleshoot Laptop, Desktop and Network
                                </li>
                                <li>
                                    Laptop, Desktop Repairing , Software Installation
                                </li>
                                <li>
                                    Sales and Customer Support
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <a href="./assets/resume/2023_Vidusha_CV.pdf" download="2023 Vidusha CV.pdf">
                    <button class="btn btn-success btn-sm"><i class="fa-solid fa-download" download
                            style="margin-right: 4px;"></i>Download Resume</button>
                </a>

            </div>
        </section>
        <!-- End My Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="projects" class="resume">
            <div class="container">
                <div class="section-title">
                    <h2>My Projects</h2>
                </div>

                <div class="row">

                    <div class="col-lg-10 mx-auto">
                        <h3 class="resume-title">Projects Involved</h3>
                        <div class="resume-item">
                            <h4>Warehouse ERP System</h4>
                            <p><em>Al Sakb Computer Devices & Mobiles Phone TR LLC, Industrial Area 5, Al Shajah, UAE
                                </em></p>
                            <ul>
                                <li>
                                    Project Consist UI/UX(Figma), HTML, CSS, JavaScript, jQuery, Ajax, MySQL, PHP, Jira,
                                    Git </li>
                                <li>Features - User, Inventory, Sales, Accounts, Payroll, Packing, Employee Performance
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Nsoft ERP System</h4>
                            <p><em>Screenline Holdings, BOI Zone, Katunayake, Colombo, Sri Lanka</em></p>
                            <ul>
                                <li>
                                    Developed numerous programs (financial and several department ) and made sure they
                                    exceeded the expectations of our clients
                                </li>
                                <li>Features - </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Nsoft ERP System</h4>
                            <p><em>PC Plus Computers, Kandy, Sri Lanka</em></p>
                            <ul>
                                <li>
                                    Developed numerous programs (financial and several department ) and made sure they
                                    exceeded the expectations of our clients
                                </li>
                                <li>Features - </li>
                            </ul>
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Nsoft ERP System</h4>
                            <p><em>PC Plus Computers, Kandy, Sri Lanka</em></p>
                            <ul>
                                <li>
                                    Developed numerous programs (financial and several department ) and made sure they
                                    exceeded the expectations of our clients
                                </li>
                                <li>Features - </li>
                            </ul>
                            </p>
                        </div>


                    </div>
                </div>


            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-4 mt-md-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>My Address</h3>
                                    <p>52/A, Mariyawatte, Gampola, Sri Lanka</p>
                                    <p>Abu Shagara, Al Sharjah, UAE</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Address</h3>
                                    <p>vidusha.wijekoon11@gmail.com<br>vidusha.wijekoon11@outlook.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Contact Number</h3>
                                    <p>+94 76 887 1747<br>+971 58 825 0962</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Vidusha</h3>
                        <p>
                            52/A Mariyawatte <br>
                            Gampola, Kandy 20000<br>
                            Sri Lanka <br><br>
                            <strong>Phone:</strong> +971 58 825 0962<br>
                            <strong>Phone:</strong> +94 76 887 1747<br>
                            <strong>Email:</strong> vidusha.wijekoon11@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">ERP System</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>My Social Networks</h4>
                        <p>Free to contact via any of this social media link</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="facebook"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fa-brands fa-skype"></i></a>
                            <a href="#" class="facebook"><i class="fa-brands fa-linkedin"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Vidusha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">Vidusha Wijekoon</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>