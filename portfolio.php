<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevCard: Heiko Frosch > Portfolio</title>

    <!-- Meta -->
    <meta name="robots" content="noindex" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCard: Heiko Frosch > Portfolio" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head>

<body>
    <?php include('inc/header.inc.php'); ?>
    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center single-col-max-width">
                <h2 class="heading">Portfolio</h2>
                <div class="intro">
                    <p>Welcome to my online portfolio. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. I'm taking on freelance work at the moment. Want some help building your software?</p>

                </div>
                <a class="btn btn-primary" href="/contact/" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>


            </div>
            <!--//container-->
        </section>
        <section class="projects-list px-3 py-5 p-md-5">
            <div class="container">
                <div class="text-center">
                    <ul id="filters" class="filters mb-5 mx-auto pl-0">
                        <li class="type active mb-3 mb-lg-0" data-filter="*">All</li>
                        <li class="type  mb-3 mb-lg-0" data-filter=".webapp">We App</li>
                        <li class="type  mb-3 mb-lg-0" data-filter=".mobileapp">Mobile App</li>
                        <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
                        <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
                    </ul>
                    <!--//filters-->
                </div>

                <div class="project-cards row isotope">
                    <div class="isotope-item col-md-6 mb-5 mobileapp frontend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">ISBN.is</a></h5>
                                        <p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                        <p class="card-text"><small class="text-muted">Client: Google</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 webapp frontend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-2.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 mobileapp">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-3.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: Google</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 webapp backend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-4.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: Startup Hub</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 mobileapp frontend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-5.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: SalesForce</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 webapp backend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-6.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: Uber</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 webapp frontend backend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-7.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: Lyft</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                    <div class="isotope-item col-md-6 mb-5 webapp frontend">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <img src="assets/images/project/project-8.jpg" class="card-img" alt="image">
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                        <p class="card-text"><small class="text-muted">Client: GitLab</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="project.html">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

            </div>
        </section>

        <footer class="footer text-center py-4">
            <small class="copyright">Made with <i class="far fa-heart" style="color: red"></i> in Munich – 2021</small>
        </footer>

    </div>
    <!--//main-wrapper-->

    <?php // include('inc/header.inc.php'); 
    ?>

    <!-- Javascript -->
    <script src="assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Page Specific JS -->
    <script type="text/javascript" src="assets/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/plugins/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="assets/js/isotope-custom.js"></script>

    <!-- Dark Mode -->
    <script src="assets/plugins/js-cookie.min.js"></script>
    <script src="assets/js/dark-mode.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>


</body>

</html>