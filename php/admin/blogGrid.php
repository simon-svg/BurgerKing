<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burger King - Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>

    <?php require_once "../db.php" ?>

    <div class="admin">
        <?php
        $navArr = ["index.php", "chefs.php", "foodCategories.php", "allFoods.php", "blogGrid.php", "contacts.php"];
        require_once "../../components/adminFoodNav.php";
        ?>

        <!-- ---------------------------------- BURGERS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Blog Grid</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__section_content">
                    <?php

                    $id = '';
                    $title1 = '';
                    $title2 = '';
                    $title3 = '';
                    $info1 = '';
                    $info2 = '';
                    $info3 = '';
                    $img = '';
                    $categories = '';
                    $comments = '';

                    if (isset($_GET["id"])) {
                        $query = 'SELECT * FROM food_blog WHERE id = ' . $_GET["id"];
                        $result = mysqli_query($mysqli, $query);

                        $row = mysqli_fetch_assoc($result);
                        $id = $row["id"];
                        $title1 = $row["title1"];
                        $title2 = $row["title2"];
                        $title3 = $row["title3"];
                        $info1 = $row["info1"];
                        $info2 = $row["info2"];
                        $info3 = $row["info3"];
                        $img = $row["img"];
                        $categories = $row["categories"];
                        $comments = $row["comments"];
                    }

                    ?>
                    <form class="admin__form mb-5" action="<?php if (isset($_GET['id'])) {
                                                            echo './blogGrid/update.php?id=' . $id;
                                                        } else {
                                                            echo './blogGrid/insert.php';
                                                        } ?>" method="POST" enctype="multipart/form-data">
                        <div class="form__flex flex-wrap">
                            <input class="admin__inp admin__inp_food form-control" type="text" name="title1" value="<?php echo $title1; ?>" placeholder="Title1" required>

                            <input class="admin__inp admin__inp_food form-control" type="text" name="title2" value="<?php echo $title2; ?>" placeholder="Title2" required>

                            <input class="admin__inp admin__inp_food form-control" type="text" name="title3" value="<?php echo $title3; ?>" placeholder="Title3" required>

                            <textarea class="admin__inp admin__inp_food form-control" name="info1" placeholder="Info1"><?php echo $info1; ?></textarea>

                            <textarea class="admin__inp admin__inp_food form-control" name="info2" placeholder="Info2"><?php echo $info1; ?></textarea>

                            <textarea class="admin__inp admin__inp_food form-control" name="info3" placeholder="Info3"><?php echo $info1; ?></textarea>
                            <br>


                            <input class="admin__inp admin__inp_food form-control" type="file"
                            name="img" <?php if (!isset($_GET['id'])) {echo 'required';} ?>>

                            <input class="admin__inp admin__inp_food form-control" type="text" name="categories" value="<?php echo $categories; ?>" placeholder="Categories" required>

                            <input class="admin__inp admin__inp_food form-control" type="text" name="comments" value="<?php echo $comments; ?>" placeholder="Comments">

                            <input type="hidden" name="img" value="<?php echo $img ?>">
                        </div>
                        <div>
                            <button class="btn custom-btn admin__form_btn">Add Burger</button>
                        </div>
                    </form>
                    <div class="admin__burgers">
                        <table class="admin__table">
                            <tr>
                                <th class="admin__table_title">title1</th>
                                <th class="admin__table_title">title2</th>
                                <th class="admin__table_title">title3</th>
                                <th class="admin__table_title">info1</th>
                                <th class="admin__table_title">info2</th>
                                <th class="admin__table_title">info3</th>
                                <th class="admin__table_title">img</th>
                                <th class="admin__table_title">categories</th>
                                <th class="admin__table_title">comments</th>
                                <th class="admin__table_title">date</th>
                                <th class="admin__table_title">panel</th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM food_blog";
                            $result = mysqli_query($mysqli, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="admin__section_item">
                                    <td class="admin__section_item_td">
                                        <?php echo $row['title1'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['title2'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['title3'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['info1'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['info2'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['info3'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <div class="admin__section_img">
                                            <img src="../../img/blogGrid/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                        </div>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['categories'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['comments'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['date'] ?>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <a href="?id=<?php echo $row["id"] ?>">
                                            <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="./blogGrid/remove.php?id=<?php echo $row["id"] ?>">
                                            <i class="admin__icon fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src='../../lib/easing/easing.min.js'></script>
    <script src='../../lib/owlcarousel/owl.carousel.min.js'></script>
    <script src='../../lib/tempusdominus/js/moment.min.js'></script>
    <script src='../../lib/tempusdominus/js/moment-timezone.min.js'></script>
    <script src='../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'></script>

    <!-- Contact Javascript File -->
    <script src='../../mail/jqBootstrapValidation.min.js'></script>
    <script src='../../mail/contact.js'></script>

    <!-- Template Javascript -->
    <script src='../../js/admin.js'></script>
</body>

</html>