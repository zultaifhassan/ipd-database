<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/team.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <title>Document</title>
</head>

<body>

    <!-- Preloader -->
    <!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <div class="logo">
            <a class="navbar-brand logo-image" href="index.html"><img src="images/favicon.png" alt="alternative"></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/index.html" class="nav-link h6" style="font-weight: bold; color: #000;">Institiute of
                    Professional Development</a>
            </li>
        </ul>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link page-scroll" style="color: #000;" href="/index.html">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: #000;" class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="aboutus.html"><span class="item-text">Want To Know About Us
                                ?</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="team.html"><span class="item-text">Our Staff</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="instructors.html"><span class="item-text">Our
                                Instructors</span></a>
                    </div>
                </li>

                <li class="nav-item course-link">
                    <a style="color: #000;" class="nav-link page-scroll" href="/courses.html" target="_blank">COURSES</a>
                </li>

                <!-- Dropdown Menu -->
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a style="color: #000;" class="nav-link page-scroll" href="/blog.html" target="_blank" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
                </li>
                <li class="nav-item">
                    <a style="color: #000;" class="nav-link page-scroll" href="/contact.html" target="_blank" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT</a>
                </li>
            </ul>
            <!-- <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link" class="top-links">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link" class="top-links">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span> -->
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- <div class="team-section">
    <img src="/images/slider-images/slider-image-1.jpg" alt="">
    <div class="overlay"></div>
    <div class="text">
        <h2>Increasing <span class="auto-typed"></span></h2>
    </div>
</div> -->
    <!-- Header -->
    <div class="container-fluid">
        <div class="container">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form">
                <div class="row col-md-10 img-name">
                    <div class="logo-side col-md-2 mt-5">
                        <img src="logo PNG.png" alt="">
                    </div>
                    <div class="name-ins col-md-7 mt-5 mb-4">
                        <!-- <h4>KARAKORAM INTERNATIONAL UNIVERSITY</h4> -->
                        <h4>INSTITUTE OF PROFESSIONAL DEVELOPEMENT KIU</h4>
                        <h6>Gilgit-Baltistan</h6>
                    </div>
                </div>


                    <div class="row col-md-10 mb-1 mt-4">
                        <h5>Course Information</h5>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <!-- <label for="form12" class="form-label">Select Couses</label> -->
                            <select class="form-select col-md-12" id="course_name" name="course_name" aria-label="Default select example">
                                <option selected>Select Course</option>
                                <option value="Chinese Language">Chinese Language</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Android Developement">Android Developement</option>
                            </select>
                        </div>
                        <div class="col-md mt-3">
                            <select class="form-select col-md-12" id="cousre_duration" name="cousre_duration" aria-label="Default select example">
                                <option selected>Select Duration</option>
                                <option value="One Month">One Month</option>
                                <option value="Three Month">Three Month</option>
                                <option value="Six Month">Six Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-md-10 mb-1 mt-4">
                        <h5>Personal Information</h5>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Candidate Name" aria-label="Candidate Name">
                        </div>
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father's Name" aria-label="Father's Name">
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email">
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="cnic" name="cnic" placeholder="CNIC No" aria-label="CNIC No">
                        </div>
                        <div class="col-md mt-3">
                            <input type="date" class="form-control" id="dob" name="dob" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" placeholder="Date of Birth" aria-label="Date Of Birth">
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-lg mt-3">
                            <label>Gender:</label>&nbsp; &nbsp; &nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="gender" value="male">
                            <label for="male" class="form-input-label">Male</label>
                            &nbsp; &nbsp; &nbsp;&nbsp;
                            <input type="radio" class="form-check-input" name="gender" id="gender" value="Female">
                            <label for="Female" class="form-input-label">Female</label>

                        </div>
                        <div class="col-md mt-3">
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number" aria-label="Phone Number">
                        </div>
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" placeholder="Whatsapp Number" aria-label="Whatsapp Number">
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="district" name="district" placeholder="District" aria-label="District">
                        </div>
                        <div class="col-md mt-3">
                            <select class="form-select" id="profession" name="profession" aria-label="Default select example">
                                <option selected>Select Profession</option>
                                <option value="Student">Student</option>
                                <option value="Employee">Employee</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" aria-label="Address">
                        </div>
                    </div>
                    <div class="row col-md-10 mb-1 mt-4">
                        <h5>Qualification</h5>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md mt-3">
                            <select class="form-select col-md-12" id="education" name="education" aria-label="Default select example">
                                <option selected>Education Level</option>
                                <option value="Graduation">Graduation</option>
                                <option value="Fsc">Fsc</option>
                                <option value="Matric">Matric</option>
                            </select>
                        </div>
                        <div class="col-md mt-3">
                            <input type="text" class="form-control" id="institute" name="institute" placeholder="Name of Institute" aria-label="Name of Institute">
                        </div>
                        <div class="col-md mt-3">
                            <input type="date text" class="form-control" id="passout_date" name="passout_date" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" value="Passout Date" placeholder="Passout Date" aria-label="Passout Date">
                        </div>
                    </div>
                    <div class="row col-md-10 mt-4">
                        <div class="col-md mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-10 mt-4 mb-4">
                        <div class="col-md mt-3">
                            <button type="submit" name="submit" value= "submit" class="btn btn-primary col-md-6">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>IPD</h5>
                        <p class="p-small">Institute of professional development KIU</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-col second">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Terms & Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Privacy Policy</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Article Details</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col third">
                        <h5>Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Article Details</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Terms & Conditions</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news & updates follow us</p>
                        <a href="#your-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="#">D4 Developers</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        var typed = new Typed('.auto-typed', {
            strings: ['Skills', 'Productivity', 'Employment'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script>

</body>

</html>