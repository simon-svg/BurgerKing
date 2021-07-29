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
        $navArr = ["index.php", "chefs.php", "foodCategories.php", "allFoods.php", "blogGrid.php", "contacts.php", "booking.php", "#", "tags.php"];
        require_once "../../components/adminFoodNav.php";
        ?>

        <!-- ---------------------------------- CHEFS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Home Section</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__chefs">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">title1</th>
                            <th class="admin__table_title">title2</th>
                            <th class="admin__table_title">subtitle1</th>
                            <th class="admin__table_title">subtitle2</th>
                            <th class="admin__table_title">img1</th>
                            <th class="admin__table_title">img2</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM home";
                        $result = mysqli_query($mysqli, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['title1'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['title2'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['subtitle1'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['subtitle2'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../img/home/<?php echo $row['img1'] ?>" alt="bg">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../img/home/<?php echo $row['img2'] ?>" alt="bg">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="?id=<?php echo $row["id"] ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <?php

                $id = '';
                $title1 = '';
                $title2 = '';
                $subtitle1 = '';
                $subtitle2 = '';
                $img1 = '';
                $img2 = '';

                if (isset($_GET["id"])) {
                    $query = 'SELECT * FROM home WHERE id = ' . $_GET["id"];
                    $result = mysqli_query($mysqli, $query);

                    $row = mysqli_fetch_assoc($result);
                    $id = $row["id"];
                    $title1 = $row["title1"];
                    $title2 = $row["title2"];
                    $subtitle1 = $row["subtitle1"];
                    $subtitle2 = $row["subtitle2"];
                    $img1 = $row["img1"];
                    $img2 = $row["img2"];
                }

                ?>
                <form class="admin__form" action="<?php if (isset($_GET['id'])) {
                                                        echo './home/update.php';
                                                    } else {
                                                        echo './home/insert.php';
                                                    } ?>" method="POST" enctype="multipart/form-data">
                    <div class="form__flex">
                        <input class="admin__inp form-control" type="text" name="title1" value="<?php echo $title1; ?>" placeholder="Title1" required>

                        <input class="admin__inp form-control" type="text" name="title2" value="<?php echo $title2; ?>" placeholder="Title2" required>

                        <input class="admin__inp form-control" type="text" name="subtitle1" value="<?php echo $subtitle1 ?>" placeholder="Subtitle1" required>

                        <input class="admin__inp form-control" type="text" name="subtitle2" value="<?php echo $subtitle2 ?>" placeholder="Subtitle2" required>

                        <input class="admin__inp form-control" type="file" name="img1" <?php if (!isset($_GET['id'])) {
                                                                                            echo 'required';
                                                                                        } ?>>

                        <input class="admin__inp form-control" type="file" name="img2" <?php if (!isset($_GET['id'])) {
                                                                                            echo 'required';
                                                                                        } ?>>

                        <input type="hidden" name="img1" value="<?php echo $img1 ?>">
                        <input type="hidden" name="img2" value="<?php echo $img2 ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn">Add Chef</button>
                    </div>
                </form>
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