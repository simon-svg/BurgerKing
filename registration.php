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
    $headerArr = ["", "", "", "", "", "", "", "", "", "", "active"];
    require_once "./components/header.php" ?>

    <?php
    $title = "Registration";
    require_once "./components/topSection.php";
    ?>

    <div class="container">
        <div class="row">
            <form class="form form-log-reg col-12" action="./php/registration.php" method="POST" id="contactForm">
                <div class="control-group">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required name="name" />
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="lastName" placeholder="Your Last Name" required name="lastName" />
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" required name="email" />
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="login" placeholder="Your Login" required name="login" />
                </div>
                <div class="control-group">
                    <input type="password" class="form-control" id="password" placeholder="Your Password" required name="password" />
                </div>
                <div>
                    <button class="btn custom-btn" type="submit" id="sendMessageButton">Registration</button>
                </div>
            </form>
        </div>
    </div>














    <?php require_once "./components/footer.php" ?>
</body>

</html>