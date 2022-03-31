<!DOCTYPE html>
<html lang="en">

<head>
    <title>DevCard - Bootstrap 4 vCard &amp; Portfolio Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DevCard Bootstrap 4 Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head>

<body>

    <header class="header text-center">
        <div class="force-overflow">
            <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Simon Doe</a></h1>

            <nav class="navbar navbar-expand-lg navbar-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navigation" class="collapse navbar-collapse flex-column">
                    <div class="profile-section pt-3 pt-lg-0">
                        <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.png" alt="image">

                        <div class="bio mb-3">Hi, my name is Simon Doe and I'm a senior software engineer. Welcome to my personal website!</div>
                        <!--//bio-->
                        <ul class="social-list list-inline py-2 mx-auto">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                        </ul>
                        <!--//social-list-->
                        <hr>
                    </div>
                    <!--//profile-section-->

                    <ul class="navbar-nav flex-column text-left">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html"><i class="fas fa-briefcase fa-fw mr-2"></i>Services &amp; Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resume.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-home.html"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cogs fa-fw mr-2"></i>More Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="project.html">Project Page</a>
                                <a class="dropdown-item" href="blog-home.html">Blog Home 1</a>
                                <a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a>
                                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                            </div>
                        </li>
                    </ul>

                    <div class="my-2">
                        <a class="btn btn-primary" href="contact.php" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
                    </div>


                    <div class="dark-mode-toggle text-center w-100">
                        <hr class="mb-4">
                        <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>

                        <input class="toggle" id="darkmode" type="checkbox">
                        <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

                    </div>
                    <!--//dark-mode-toggle-->
                </div>
            </nav>
        </div>
        <!--//force-overflow-->
    </header>

    <div class="main-wrapper">
        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center single-col-max-width">
                <h2 class="heading">Contact</h2>
                <div class="intro">
                    <p>Interested in hiring me for your project or just want to say hi? You can fill in the contact form below or send me an email to <a href="mailto:#">simon.doe@yourwebsite.com</a></p>
                    <p>Want to get connected? Follow me on the social channels below.</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mb-3"><a class="twitter" href="#"><i class="fab fa-twitter fa-fw fa-lg"></i></a></li>

                        <li class="list-inline-item mb-3"><a class="linkedin" href="#"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="github" href="#"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="stack-overflow" href="#"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="medium" href="#"><i class="fab fa-medium-m fa-fw fa-lg"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="codepen" href="#"><i class="fab fa-codepen fa-fw fa-lg"></i></a></li>


                        <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw fa-lg"></i></a></li>-->


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
<?php
/*
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
*/
?>
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

<?php include('inc/footer.inc.php'); ?>


</body>

</html>