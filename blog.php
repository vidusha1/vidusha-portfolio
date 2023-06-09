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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/blog.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto text-capitalize"><a href="index">vidusha</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index">Home</a></li>
                    <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#create_post">Create
                            Post</a></li>

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
    </header>
    <!-- End Header -->
    <!-- Modal -->
    <div class="modal fade" id="create_post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <h2 class="modal-title d-flex text-center px-4 mt-2 mx-auto" id="exampleModalLabel"
                    style="color: #2b2b2b">
                    Create New Post</h2>
                <div class="modal-body">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control form-control-sm" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control form-control-sm" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <input type="text" class="form-control form-control-sm" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group my-3">
                            <textarea class="form-control form-control-sm" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <hr style="color:#2b2b2b">

                        <div class="text-center"><button class="btn btn-success btn-sm" type="submit">Create a
                                Post</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal -->
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
    <!-- Register Modal -->
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
        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="single-post.php"><img src="assets/img/post-landscape-1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="single-post.php">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil
                                tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe
                                perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                                atque eveniet, quo, praesentium dignissimos</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Cameron Williamson</h3>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-2.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-5.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Food</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                    <h2><a href="single-post.php">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-7.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Design</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="single-post.php">Why Craigslist Tampa Is One of The Most Interesting
                                            Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-3.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">6 Easy Steps To Create Your Own Cute Merch For
                                            Instagram</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-6.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Tech</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                    <h2><a href="single-post.php">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-8.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Travel</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">5 Great Startup Tips for Female Founders</a></h2>
                                </div>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Trending</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="single-post.php">
                                                <span class="number">1</span>
                                                <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                                <span class="author">Jane Cooper</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.php">
                                                <span class="number">2</span>
                                                <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your
                                                    New Haircut</h3>
                                                <span class="author">Wade Warren</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.php">
                                                <span class="number">3</span>
                                                <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons
                                                </h3>
                                                <span class="author">Esther Howard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.php">
                                                <span class="number">4</span>
                                                <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                                <span class="author">Cameron Williamson</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-post.php">
                                                <span class="number">5</span>
                                                <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                                <span class="author">Jenny Wilson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- End Trending Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        <!-- ======= Culture Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Culture</h2>
                    <div><a href="category" class="more">See All Culture</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">

                        <div class="d-lg-flex post-entry-2">
                            <a href="single-post.php" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">Culture</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h3><a href="single-post.php">What is the son of Football Coach John Gruden, Deuce
                                        Gruden doing Now?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error
                                    deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?
                                </p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-entry-1 border-bottom">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-1.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">11 Work From Home Part-Time Jobs You Can
                                            Do Now</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>

                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">5 Great Startup Tips for Female
                                            Founders</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-2.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">How to Avoid Distraction and Stay
                                            Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">How to Avoid Distraction and Stay Focused During
                                    Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">17 Pictures of Medium Length Hair in Layers That
                                    Will Inspire Your New Haircut</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">9 Half-up/half-down Hairstyles for Long and
                                    Medium Hair</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">Life Insurance And Pregnancy: A Working Mom’s
                                    Guide</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">The Best Homemade Masks for Face (keep the
                                    Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">10 Life-Changing Hacks Every Working Mom Should
                                    Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Culture Category Section -->

        <!-- ======= Business Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Business</h2>
                    <div><a href="category" class="more">See All Business</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9 order-md-2">

                        <div class="d-lg-flex post-entry-2">
                            <a href="single-post.php" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                                <img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">Business</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h3><a href="single-post.php">What is the son of Football Coach John Gruden, Deuce
                                        Gruden doing Now?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                    exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error
                                    deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?
                                </p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-4.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Wade Warren</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-entry-1 border-bottom">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-5.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">11 Work From Home Part-Time Jobs You Can
                                            Do Now</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>

                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">5 Great Startup Tips for Female
                                            Founders</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-7.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">How to Avoid Distraction and Stay
                                            Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">How to Avoid Distraction and Stay Focused During
                                    Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">17 Pictures of Medium Length Hair in Layers That
                                    Will Inspire Your New Haircut</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">9 Half-up/half-down Hairstyles for Long and
                                    Medium Hair</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">Life Insurance And Pregnancy: A Working Mom’s
                                    Guide</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">The Best Homemade Masks for Face (keep the
                                    Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.php">10 Life-Changing Hacks Every Working Mom Should
                                    Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Business Category Section -->

        <!-- ======= Lifestyle Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Lifestyle</h2>
                    <div><a href="category" class="more">See All Lifestyle</a></div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="single-post.php"><img src="assets/img/post-landscape-8.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="single-post.php">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil
                                tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe
                                perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi
                                atque eveniet, quo, praesentium dignissimos</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Esther Howard</h3>
                                </div>
                            </div>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.php">The Best Homemade Masks for Face (keep the
                                    Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.php">10 Life-Changing Hacks Every Working Mom Should
                                    Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-6.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-5.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                    <h2><a href="single-post.php">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-4.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                    <h2><a href="single-post.php">Why Craigslist Tampa Is One of The Most Interesting
                                            Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-3.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">6 Easy Steps To Create Your Own Cute Merch For
                                            Instagram</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-2.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                    <h2><a href="single-post.php">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                </div>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/post-landscape-1.jpg" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2><a href="single-post.php">5 Great Startup Tips for Female Founders</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">How to Avoid Distraction and Stay
                                            Focused During Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">17 Pictures of Medium Length Hair in
                                            Layers That Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">9 Half-up/half-down Hairstyles for Long
                                            and Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">Life Insurance And Pregnancy: A Working
                                            Mom’s Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">The Best Homemade Masks for Face (keep
                                            the Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="single-post.php">10 Life-Changing Hacks Every Working Mom
                                            Should Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section><!-- End Lifestyle Category Section -->

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

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>