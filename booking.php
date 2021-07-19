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
    $headerArr = ["", "", "", "", "", "active", "", "", "", "", ""];
    require_once "./components/header.php" ?>

    <?php
    $title = "Book A Table";
    require_once "./components/topSection.php";
    ?>

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
                        <form>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Mobile" required="required" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" />
                                    <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <select class="custom-select form-control">
                                        <option selected>Guest</option>
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guest</option>
                                        <option value="3">3 Guest</option>
                                        <option value="4">4 Guest</option>
                                        <option value="5">5 Guest</option>
                                        <option value="6">6 Guest</option>
                                        <option value="7">7 Guest</option>
                                        <option value="8">8 Guest</option>
                                        <option value="9">9 Guest</option>
                                        <option value="10">10 Guest</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
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
                                                <strong>$<?php if($row['discPrice']){echo $row['discPrice'];}else{echo $row['price'];} ?></strong>
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
                                                <strong>$<?php if($row['discPrice']){echo $row['discPrice'];}else{echo $row['price'];} ?></strong>
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
                                                <strong>$<?php if($row['discPrice']){echo $row['discPrice'];}else{echo $row['price'];} ?></strong>
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

    <?php require_once "./components/footer.php" ?>
</body>

</html>