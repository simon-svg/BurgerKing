<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burger King - Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once "./php/db.php";
    $headerArr = ["active", "", "", "", "", "", "", ""];
    require_once "./components/header.php";

    $query = "SELECT * FROM home";
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_assoc($result);
    ?>

    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/home/<?php echo $row['img1']; ?>" alt="<?php echo $row['img1']; ?>">
                    </div>
                    <div class="carousel-text">
                        <h1><?php echo $row['title1']; ?></h1>
                        <p><?php echo $row['subtitle1']; ?></p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="menu.php">View Menu</a>
                            <a class="btn custom-btn" href="booking.php">Book Table</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/home/<?php echo $row['img2']; ?>" alt="<?php echo $row['img2']; ?>">
                    </div>
                    <div class="carousel-text">
                        <h1><?php echo $row['title2']; ?></h1>
                        <p><?php echo $row['subtitle2']; ?></p>
                        <div class="carousel-btn">
                            <a class="btn custom-btn" href="menu.php">View Menu</a>
                            <a class="btn custom-btn" href="booking.php">Book Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Book A Table</p>
                                <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <form action="./php/booking.php" method="POST">
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="date" placeholder="Date" data-target="#date" data-toggle="datetimepicker" required="required" />
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="time" placeholder="Time" data-target="#time" data-toggle="datetimepicker" required="required" />
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Cooking Since 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn custom-btn" href="">Book A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <p>Why Choose Us</p>
                            <h2>Our Key Features</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/feature-1.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-2.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-3.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-4.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                            </p>
                            <a class="btn custom-btn" href="">Book A Table</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>World’s best Chef</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Natural ingredients</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Best quality products</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Fresh vegetables & Meet</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Fastest door delivery</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Ground beef & Low fat</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Food Start -->
        <div class="food mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <?php

                    $query = "SELECT * FROM food_categories";
                    $result = mysqli_query($mysqli, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-4">
                            <div class="food-item">
                                <div class="food-item_img">
                                    <img src="./img/foods/<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>">
                                </div>
                                <h2><?php echo $row['name']; ?></h2>
                                <p><?php echo $row['info']; ?></p>
                                <a href="./menu.php#menu">View Menu</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Food End -->


        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Burgers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Beverages</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <?php
                                    require_once "./php/db.php";
                                    $burgers = "SELECT * FROM all_foods WHERE categories_id = 1";
                                    $result = mysqli_query($mysqli, $burgers);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="menu-item">
                                            <div class="menu-img">
                                                <img src="./img/foods/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="menu-text">
                                                <h3>
                                                    <span><?php echo $row['name'] ?></span>
                                                    <strong>$<?php if ($row['discPrice']) {
                                                                    echo $row['discPrice'];
                                                                } else {
                                                                    echo $row['price'];
                                                                } ?></strong>
                                                </h3>
                                                <p><?php echo $row['info'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-burger-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <?php
                                    $snacks = "SELECT * FROM all_foods WHERE categories_id = 2";
                                    $result = mysqli_query($mysqli, $snacks);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="menu-item">
                                            <div class="menu-img">
                                                <img src="./img/foods/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="menu-text">
                                                <h3>
                                                    <span><?php echo $row['name'] ?></span>
                                                    <strong>$<?php if ($row['discPrice']) {
                                                                    echo $row['discPrice'];
                                                                } else {
                                                                    echo $row['price'];
                                                                } ?></strong>
                                                </h3>
                                                <p><?php echo $row['info'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-snack-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <?php
                                    $beverages = "SELECT * FROM all_foods WHERE categories_id = 3";
                                    $result = mysqli_query($mysqli, $beverages);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="menu-item">
                                            <div class="menu-img">
                                                <img src="./img/foods/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="menu-text">
                                                <h3>
                                                    <span><?php echo $row['name'] ?></span>
                                                    <strong>$<?php if ($row['discPrice']) {
                                                                    echo $row['discPrice'];
                                                                } else {
                                                                    echo $row['price'];
                                                                } ?></strong>
                                                </h3>
                                                <p><?php echo $row['info'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/menu-beverage-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <?php
        require_once "./php/db.php";
        $query = "SELECT * FROM chefs";
        $result = mysqli_query($mysqli, $query);
        ?>

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Our Master Chef</h2>
                </div>
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/chefs/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                    <div class="team-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <h2><?php echo $row['name'] ?></h2>
                                    <p><?php echo $row['position'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <?php
        $query = "SELECT * FROM clients";
        $result = mysqli_query($mysqli, $query);
        ?>

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="owl-carousel testimonials-carousel">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/clients/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                            </div>
                            <p><?php echo $row['info'] ?></p>
                            <h2><?php echo $row['name'] ?></h2>
                            <h3><?php echo $row['profession'] ?></h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contact Us</p>
                    <h2>Contact For Any Query</h2>
                </div>
                <div class="row align-items-center contact-information justify-content-between">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call Us</h3>
                                <p>+374 55 32 14 13</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email Us</h3>
                                <p>simonkarapetyan605@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Follow Us</h3>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form action="./php/contact.php" method="POST" id="contactForm" name="sentMessage">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required name="name" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required name="email" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required name="subject" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required name="message"></textarea>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Blog</p>
                    <h2>Latest From Food Blog</h2>
                </div>
                <div class="row">
                    <?php

                    require_once "./php/db.php";
                    $query = "SELECT id, title1, info1, img, categories, date FROM food_blog LIMIT 2";
                    $result = mysqli_query($mysqli, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $query1 = "SELECT id FROM comment WHERE blog_id = '" . $row["id"] . "'";
                        $result1 = mysqli_query($mysqli, $query1);
                        $count = mysqli_num_rows($result1);
                    ?>
                        <div class="col-md-6">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/blogGrid/<?php echo $row['img'] ?>" alt="<?php echo $row['title1'] ?>">
                                </div>
                                <div class="blog-content">
                                    <h2 class="blog-title"><?php echo $row['title1'] ?></h2>
                                    <div class="blog-meta">
                                        <p><i class="far fa-list-alt"></i><?php echo $row['categories'] ?></p>
                                        <p><i class="far fa-calendar-alt"></i><?php echo $row['date'] ?></p>
                                        <p><i class="far fa-comments"></i><?php echo $count ?></p>
                                    </div>
                                    <div class="blog-text">
                                        <p><?php echo $row['info1'] ?></p>
                                        <a class="btn custom-btn" href="single.php?id=<?php echo $row['id'] ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <?php require_once "./components/footer.php" ?>
</body>

</html>