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
    $headerArr = ["", "", "", "", "", "", "active", ""];
    require_once "./components/header.php" ?>

    <?php
    $title = "Blog Detail";
    require_once "./components/topSection.php";
    ?>

    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php

                    require_once "./php/db.php";
                    $query = "SELECT * FROM food_blog WHERE id=$_GET[id]";
                    $result = mysqli_query($mysqli, $query);
                    $row = mysqli_fetch_assoc($result);

                    ?>
                    <div class="single-content">
                        <img src="img/blogGrid/<?php echo $row['img'] ?>" />
                        <h2><?php echo $row['title1'] ?></h2>
                        <p><?php echo $row['info1'] ?></p>
                        <h2><?php echo $row['title2'] ?></h2>
                        <p><?php echo $row['info2'] ?></p>
                        <h2><?php echo $row['title3'] ?></h2>
                        <p><?php echo $row['info3'] ?></p>
                    </div>
                    <?php
                    $newText = $row['tag'];
                    $blogs = explode(",", $newText);
                    ?>
                    <div class="single-tags">
                        <?php
                        foreach ($blogs as $blog) {
                        ?>
                            <a href="blog.php?tag=<?php echo $blog ?>"><?php echo $blog ?></a>
                        <?php
                        }
                        ?>
                    </div>
                    <?php

                    require_once "php/db.php";
                    $query = "SELECT * FROM comment WHERE blog_id = '" . $_GET['id'] . "' AND parent_id = 0";
                    $queryCount = "SELECT * FROM comment WHERE blog_id = '" . $_GET['id'] . "'";
                    $result = mysqli_query($mysqli, $query);
                    $resultCount = mysqli_query($mysqli, $queryCount);
                    $count = mysqli_num_rows($resultCount);

                    ?>
                    <div class="single-comment">
                        <h2><?php echo $count; ?> Comments</h2>
                        <ul class="comment-list">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="img/user-4.png" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href=""><?php echo $row['name']; ?> <?php echo $row['last_name']; ?></a></h3>
                                            <p><span><?php echo date("Y/m/d H:i:s", $row['date']); ?></span></p>
                                            <p class="comments__message"><?php echo $row['message']; ?></p>
                                            <a class="btn" href="?id=<?php echo $_GET['id'] ?>&reply=<?php echo $row['id'] ?>">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="comment-child">
                                        <?php
                                        $query1 = "SELECT * FROM comment WHERE blog_id = '" . $_GET['id'] . "' AND parent_id = '" . $row['id'] . "'";
                                        $result1 = mysqli_query($mysqli, $query1);
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                        ?>
                                            <li class="comment-item">
                                                <div class="comment-body">
                                                    <div class="comment-img">
                                                        <img src="img/user-4.png" />
                                                    </div>
                                                    <div class="comment-text">
                                                        <h3><a href=""><?php echo $row['name']; ?> <?php echo $row['last_name']; ?></a></h3>
                                                        <p><span><?php echo date("Y/m/d H:i:s", $row['date']); ?></span></p>
                                                        <p class="comments__message"><?php echo $row['message']; ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                    $reply = 0;
                    if (isset($_GET['reply'])) {
                        $reply = $_GET['reply'];
                    }
                    ?>
                    <div class="comment-form">
                        <h2>Leave a comment</h2>
                        <form action="php/singleComment.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" class="form-control" id="lastName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>

                            <input type="hidden" name="getId" value="<?php echo $_GET['id'] ?>">
                            <input type="hidden" name="replyId" value="<?php echo $reply; ?>">
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn custom-btn">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Recent Post</h2>
                            <div class="recent-post">
                                <?php

                                $query = "SELECT id, img, title1 FROM food_blog";
                                $result = mysqli_query($mysqli, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/blogGrid/<?php echo $row['img']; ?>" />
                                        </div>
                                        <div class="post-text">
                                            <a href="?id=<?php echo $row['id']; ?>"><?php echo $row['title1']; ?></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="category-widget">
                                <ul>
                                    <?php
                                    $query = "SELECT id, name FROM food_categories";
                                    $result = mysqli_query($mysqli, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $query1 = "SELECT id FROM all_foods WHERE categories_id = '" . $row['id'] . "'";
                                        $result1 = mysqli_query($mysqli, $query1);
                                        $count = mysqli_num_rows($result1);
                                    ?>
                                        <li><a href="menu.php#menu"><?php echo $row["name"] ?></a><span>(<?php echo $count; ?>)</span></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Tags Cloud</h2>
                            <div class="tag-widget">
                                <?php
                                $query = "SELECT * FROM tags";
                                $result = mysqli_query($mysqli, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <a href="blog.php?&tag=<?php echo $row['name']; ?>"><?php echo $row["name"]; ?></a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Text Widget</h2>
                            <div class="text-widget">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id augue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->

    <?php require_once "./components/footer.php" ?>
</body>

</html>