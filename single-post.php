<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZenBlog Bootstrap Template - Single Post</title>
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

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/blog.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <h1 class="logo me-auto text-capitalize"><a href="index">vidusha</a></h1>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="blog">Home</a></li>

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

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h1 class="mb-5">13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h1>
                            <p><span class="firstcharacter">L</span>orem ipsum dolor sit, amet consectetur adipisicing
                                elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis
                                inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate
                                expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam
                                autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae,
                                cumque autem tempore quisquam quam eligendi harum debitis.</p>

                            <figure class="my-4">
                                <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                                </figcaption>
                            </figure>
                            <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur
                                ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas
                                expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis
                                reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil,
                                tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum,
                                eligendi itaque numquam aliquam soluta.</p>
                            <p>Explicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque
                                quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi
                                reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse
                                ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus
                                maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil
                                nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.</p>
                            <p>Reprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique
                                ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima
                                qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat
                                repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque
                                labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis
                                sequi? Praesentium nulla ipsam dolor.</p>
                            <p>Dolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis,
                                doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam
                                debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed
                                ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora
                                nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?</p>
                            <p>Est soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam
                                sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste
                                reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident
                                eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum
                                quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni?
                                Perferendis cum repudiandae corrupti porro.</p>
                            <figure class="my-4">
                                <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                                </figcaption>
                            </figure>
                            <p>Quis molestiae, dolorem consequuntur labore perferendis enim accusantium commodi optio,
                                sequi magnam ad consectetur iste omnis! Voluptatibus, quia officia esse necessitatibus
                                magnam tempore reprehenderit quo aspernatur! Assumenda, minus dolorem repellendus
                                corporis corrupti quia temporibus repudiandae in. Sit rem aut, consectetur repudiandae
                                perferendis nemo alias, iure ipsam omnis quam soluta, nobis animi quis aliquam
                                blanditiis at. Dicta nemo vero sequi exercitationem.</p>
                            <p>Architecto ex id at illum aperiam corporis, quidem magnam doloribus non eligendi delectus
                                laborum porro molestiae beatae eveniet dolor odit optio soluta dolores! Eaque odit a
                                nihil recusandae, error repellendus debitis ex autem ab commodi, maiores officiis
                                doloribus provident optio, architecto assumenda! Nihil cum laboriosam eos dolore aliquid
                                perferendis amet doloremque quibusdam odio soluta vero odit, ipsa, quisquam quod nulla.
                            </p>
                            <p>Consequuntur corrupti fugiat quod! Ducimus sequi nemo illo ad necessitatibus amet nobis
                                corporis et quasi. Optio cum neque fuga. Ad excepturi magnam quisquam ex voluptatibus
                                vitae aut nam quidem doloribus, architecto perspiciatis sit consequatur pariatur alias
                                animi expedita quas? Et doloribus voluptatibus perferendis qui fugiat voluptatum autem
                                facere aspernatur quidem quae assumenda iste, sit similique, necessitatibus laborum
                                magni. Ea, dolores!</p>
                            <p>Possimus temporibus rerum illo quia repudiandae provident sed quas atque. Ipsam adipisci
                                accusamus iste optio illo aliquam molestias? Voluptatibus, veniam recusandae facilis
                                nobis perspiciatis rem similique, nisi ad explicabo ipsa voluptatum, inventore molestiae
                                natus adipisci? Fuga delectus quia assumenda totam aspernatur. Nobis hic ea rem, quaerat
                                voluptate vero illum laboriosam omnis aspernatur labore, natus ex iusto ducimus
                                exercitationem a officia.</p>
                        </div><!-- End Single Post Content -->

                        <!-- ======= Comments ======= -->
                        <div class="comments">
                            <h5 class="comment-title py-4">2 Comments</h5>
                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">Jordan Singer</h6>
                                        <span class="text-muted">2d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima ipsum at
                                        amet doloremque qui magni, placeat deserunt pariatur itaque laudantium impedit
                                        aliquam eligendi repellendus excepturi quibusdam nobis esse accusantium.
                                    </div>

                                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                                        <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                                        <div class="reply d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-4.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                    <span class="text-muted">2d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-3.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">James Parsons</h6>
                                                    <span class="text-muted">1d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                                                    dolore sed eos sapiente, praesentium.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-shrink-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex">
                                        <h6 class="me-2">Santiago Roberts</h6>
                                        <span class="text-muted">4d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in
                                        corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments -->

                        <!-- ======= Comments Form ======= -->
                        <div class="row justify-content-center mt-5">

                            <div class="col-lg-12">
                                <h5 class="comment-title">Leave a Comment</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-name">Name</label>
                                        <input type="text" class="form-control" id="comment-name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-email">Email</label>
                                        <input type="text" class="form-control" id="comment-email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="comment-message">Message</label>

                                        <textarea class="form-control" id="comment-message"
                                            placeholder="Enter your name" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="Post comment">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments Form -->

                    </div>
                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-trending" type="button" role="tab"
                                        aria-controls="pills-trending" aria-selected="false">Trending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-latest" type="button" role="tab"
                                        aria-controls="pills-latest" aria-selected="false">Latest</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                    aria-labelledby="pills-popular-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                                Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                                Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium
                                                Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples
                                                Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                                Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div> <!-- End Popular -->

                                <!-- Trending -->
                                <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                    aria-labelledby="pills-trending-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                                Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium
                                                Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                                Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples
                                                Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                                Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div> <!-- End Trending -->

                                <!-- Latest -->
                                <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                    aria-labelledby="pills-latest-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the Pimples
                                                Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                                Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                                Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                                Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and Medium
                                                Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                </div> <!-- End Latest -->

                            </div>
                        </div>

                        <div class="aside-block">
                            <h3 class="aside-title">Video</h3>
                            <div class="video-post">
                                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                    <span class="bi-play-fill"></span>
                                    <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div><!-- End Video -->

                        <div class="aside-block">
                            <h3 class="aside-title">Categories</h3>
                            <ul class="aside-links list-unstyled">
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                            </ul>
                        </div><!-- End Categories -->

                        <div class="aside-block">
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div><!-- End Tags -->

                    </div>
                </div>
            </div>
        </section>
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