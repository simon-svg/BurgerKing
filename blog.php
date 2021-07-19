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
    $headerArr = ["", "", "", "", "", "", "active", "", "", "", ""];
    require_once "./components/header.php" ?>

    <?php
    $title = "Food Blog";
    require_once "./components/topSection.php";
    ?>


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
                $query = "SELECT id, title1, info1, img, categories, comments, date FROM food_blog";
                $result = mysqli_query($mysqli, $query);
                while($row = mysqli_fetch_assoc($result)){
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
                                <p><i class="far fa-comments"></i><?php echo $row['comments'] ?></p>
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
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <?php require_once "./components/footer.php" ?>
</body>

</html>