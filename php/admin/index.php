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
        $navArr = ["#", "chefs.php", "foodCategories.php", "allFoods.php", "blogGrid.php", "contacts.php"];
        require_once "../../components/adminFoodNav.php";
        ?>

        <!-- ---------------------------------- HEADER MENUE LIST ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">header menu list</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__contact">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">id</th>
                            <th class="admin__table_title">parentId</th>
                            <th class="admin__table_title">name</th>
                            <th class="admin__table_title">link</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM header_list";
                        $result = mysqli_query($mysqli, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['id'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['parent_id'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['name'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $row['link'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="?id=<?php echo $row["id"] ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./headerList/remove.php?id=<?php echo $row["id"] ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <?php

                $id = '';
                $parentId = '';
                $name = '';
                $link = '';

                if (isset($_GET["id"])) {
                    $query = 'SELECT * FROM header_list WHERE id = ' . $_GET["id"];
                    $result = mysqli_query($mysqli, $query);

                    $row = mysqli_fetch_assoc($result);
                    $id = $row["id"];
                    $parentId = $row["parent_id"];
                    $name = $row["name"];
                    $link = $row["link"];
                }

                ?>
                <form class="admin__form"
                action="<?php if (isset($_GET['id'])) {echo './headerList/update.php?id=' . $id;} else {echo './headerList/insert.php';} ?>"
                method="POST">
                    <div class="form__flex">
                        <input class="admin__inp admin__inp_header form-control" type="text" name="name" value="<?php echo $name ?>" placeholder="Name" required>

                        <input class="admin__inp admin__inp_header form-control" type="text" name="link" value="<?php echo $link ?>" placeholder="Link" required>

                        <select id="parentId" name="parentId">
                            <option value="0">no</option>
                            <?php
                            $query = 'SELECT * FROM header_list';
                            $result = mysqli_query($mysqli, $query);

                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn">Add Header Item</button>
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
    <script>
        $('option[value="<?php echo $parentId ?>"]').attr('selected', true);
    </script>
</body>

</html>