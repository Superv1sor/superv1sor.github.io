<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevCard: Heiko Frosch > Contact</title>

    <!-- Meta -->
    <meta name="robots" content="noindex" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCard: Heiko Frosch > Contact" />
    <link rel="shortcut icon" href="favicon.ico" />
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
                <h2 class="heading">Contact</h2>
                <div class="intro">
                    <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a href="mailto:#">hf@leet.de</a></p>
                    <p>Want to get connected? Follow me on the social channels below.</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mb-3"><a class="linkedin" href="https://www.linkedin.com/in/heiko-frosch/"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="github" href="https://github.com/Superv1sor"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="stack-overflow" href="https://stackexchange.com/users/1689395/bazi"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="medium" href="https://codesandbox.io/u/Superv1sor"><i class="fas fa-code"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="codepen" href="https://codepen.io/superv1sor"><i class="fab fa-codepen fa-fw fa-lg"></i></a></li>
                    </ul>
                    <!--//social-list-->

                </div>
                <!--//container-->
        </section>
        <section class="contact-section px-3 py-5 p-md-5">
            <div class="container">
                <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
                    <h3 class="text-center mb-3">Get In Touch</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="sr-only" for="cname">Name</label>
                            <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="sr-only" for="cemail">Email</label>
                            <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true">
                        </div>
                        <!--
                        <div class="form-group col-12">
                            <select id="services" class="custom-select" name="services">
                                <option selected>Select a service package you're interested in...</option>
                                <option value="basic">Basic</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                                <option value="not sure">Not sure</option>
                            </select>
                            <small class="form-text text-muted pt-1"><i class="fas fa-info-circle mr-2 text-primary"></i>Want to know what's included in each package? Check the <a href="services.html" target="_blank">Services &amp; Pricing</a> page.</small>
                        </div>
-->
                        <div class="form-group col-12">
                            <label class="sr-only" for="cmessage">Your message</label>
                            <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary py-2">Send Now</button>
                        </div>
                    </div>
                    <!--//form-row-->
                </form>
            </div>
            <!--//container-->
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
    <script type="text/javascript" src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/form.js"></script>

    <!-- Dark Mode -->
    <script src="assets/plugins/js-cookie.min.js"></script>
    <script src="assets/js/dark-mode.js"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>


</body>

</html>