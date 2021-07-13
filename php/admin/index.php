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
        <nav id="sidebar-admin">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a class="admin__item" data-php="" href="#">Header Menu lists</a>
                </li>
                <li>
                    <a class="admin__item" href="#">Chefs</a>
                </li>
                <li class="admin__item_drop">
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle admin">Food</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="admin__item" href="#">Burgers</a>
                        </li>
                        <li>
                            <a class="admin__item" href="#">Snacks</a>
                        </li>
                        <li>
                            <a class="admin__item" href="#">Beverages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="admin__item" href="#">Contacts</a>
                </li>
            </ul>
        </nav>

<!-- ---------------------------------- HEADER MENUE LIST ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list">
            <div class="admin__section_head">
                <h3 class="admin__section_title">header menu list</h3>
            </div>
            <div class="admin__section_content">
                header List
            </div>
        </div>

<!-- ---------------------------------- CHEFS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list admin__section-none">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Chefs</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__chefs">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">img</th>
                            <th class="admin__table_title">name</th>
                            <th class="admin__table_title">position</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM chefs";
                        $result = mysqli_query($mysqli, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../img/chefs/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['name'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $row['position'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="./chefs/updateIndex.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"] ?>&position=<?php echo $row["position"] ?>&img=<?php echo $row["img"] ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./chefs/remove.php?id=<?php echo $row["id"] ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <form class="admin__form" action="./chefs/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form__flex">
                        <input class="admin__inp form-control" type="text" name="name" placeholder="Name" required>
                        <input class="admin__inp form-control" type="text" name="position" placeholder="Position" required>
                        <input class="admin__inp form-control" type="file" name="img" required>
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn">Add Chef</button>
                    </div>
                </form>
            </div>
        </div>

<!-- ---------------------------------- BURGERS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list admin__section-none">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Burgers</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__section_content">
                    <div class="admin__burgers">
                        <table class="admin__table">
                            <tr>
                                <th class="admin__table_title">name</th>
                                <th class="admin__table_title">info</th>
                                <th class="admin__table_title">img</th>
                                <th class="admin__table_title">price</th>
                                <th class="admin__table_title">discPrice</th>
                                <th class="admin__table_title">date</th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM burgers";
                            $result = mysqli_query($mysqli, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="admin__section_item">
                                    <td class="admin__section_item_td">
                                        <h3 class="admin__section_item_name">
                                            <?php echo $row['name'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['info'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <div class="admin__section_img">
                                            <img src="../../img/burgers/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                        </div>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['price'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['discPrice'] ? $row['discPrice'] : "no discount price" ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <a href="./burgers/updateIndex.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"] ?>&info=<?php echo $row["info"] ?>&img=<?php echo $row["img"] ?>&price=<?php echo $row["price"] ?>&discPrice=<?php echo $row["discPrice"] ?>">
                                            <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="./burgers/remove.php?id=<?php echo $row["id"] ?>">
                                            <i class="admin__icon fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <form class="admin__form" action="./burgers/insert.php" method="POST" enctype="multipart/form-data">
                        <div class="form__flex">
                            <input class="admin__inp admin__inp_food form-control" type="text" name="name" placeholder="Name" required>
                            <textarea class="admin__inp admin__inp_food form-control" name="info" placeholder="Info"></textarea>
                            <input class="admin__inp admin__inp_food form-control" type="file" name="img" required>
                            <input class="admin__inp admin__inp_food form-control" type="number" name="price" placeholder="Price" required>
                            <input class="admin__inp admin__inp_food form-control" type="number" name="discPrice" placeholder="Discount Price">
                        </div>
                        <div>
                            <button class="btn custom-btn admin__form_btn">Add Burger</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!-- ---------------------------------- SNACKS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list admin__section-none">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Snacks</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__section_content">
                    <div class="admin__burgers">
                        <table class="admin__table">
                            <tr>
                                <th class="admin__table_title">name</th>
                                <th class="admin__table_title">info</th>
                                <th class="admin__table_title">img</th>
                                <th class="admin__table_title">price</th>
                                <th class="admin__table_title">discPrice</th>
                                <th class="admin__table_title">date</th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM snacks";
                            $result = mysqli_query($mysqli, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr class="admin__section_item">
                                    <td class="admin__section_item_td">
                                        <h3 class="admin__section_item_name">
                                            <?php echo $row['name'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['info'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <div class="admin__section_img">
                                            <img src="../../img/snacks/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                        </div>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['price'] ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <?php echo $row['discPrice'] ? $row['discPrice'] : "no discount price" ?></h3>
                                    </td>
                                    <td class="admin__section_item_td">
                                        <a href="?id=<?php echo $row["id"] ?>&img=<?php echo $row['img'] ?>">
                                            <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="./burgers/remove.php?id=<?php echo $row["id"] ?>">
                                            <i class="admin__icon fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <?php
                    $id = '';
                    $name = '';
                    $info = '';
                    $img = '';
                    $price = '';
                    $discPrice = '';

                    if(isset($_GET["id"])){
                        $query = 'SELECT * FROM snacks WHERE id = ' . $_GET["id"];
                        $result = mysqli_query($mysqli, $query);

                        $row = mysqli_fetch_assoc($result);
                        $id = $row["id"];
                        $name = $row["name"];
                        $info = $row["info"];
                        $img = $row["img"];
                        $price = $row["price"];
                        $discPrice = $row["discPrice"];
                    }
                    ?>
                    <form class="admin__form" action="<?php if($_GET['id']){echo './snacks/update.php';}else{echo './snacks/insert.php';} ?>" method="POST" enctype="multipart/form-data">
                        <div class="form__flex">
                            <input class="admin__inp admin__inp_food form-control" type="text" name="name" placeholder="Name" required
                            value="<?php echo $name ?>">

                            <textarea class="admin__inp admin__inp_food form-control" name="info" placeholder="Info">
                                <?php echo $info ?>
                            </textarea>

                            <input class="admin__inp admin__inp_food form-control" type="file" name="img" <?php if(!$_GET["id"]){echo "required";} ?>>
                            <input class="admin__inp admin__inp_food form-control" type="number" name="price" placeholder="Price" required
                            value="<?php echo $price ?>">

                            <input class="admin__inp admin__inp_food form-control" type="number" name="discPrice" placeholder="Discount Price"
                            value="<?php echo $discPrice ?>">
                        </div>
                        <div>
                            <button class="btn custom-btn admin__form_btn">Add snack</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!-- ---------------------------------- BEVERAGES ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list admin__section-none">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Beverages</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__beverages">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">name</th>
                            <th class="admin__table_title">info</th>
                            <th class="admin__table_title">img</th>
                            <th class="admin__table_title">price</th>
                            <th class="admin__table_title">discPrice</th>
                            <th class="admin__table_title">date</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM beverages";
                        $result = mysqli_query($mysqli, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name">
                                        <?php echo $row['name'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <?php echo $row['info'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <img src="../../img/beverages/<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>">
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <?php echo $row['price'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <?php echo $row['discPrice'] ? $row['discPrice'] : "no discount price" ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="./beverages/updateIndex.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"] ?>&info=<?php echo $row["info"] ?>&img=<?php echo $row["img"] ?>&price=<?php echo $row["price"] ?>&discPrice=<?php echo $row["discPrice"] ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./beverages/remove.php?id=<?php echo $row["id"] ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <form class="admin__form" action="./beverages/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form__flex">
                        <input class="admin__inp admin__inp_food form-control" type="text" name="name" placeholder="Name" required>
                        <textarea class="admin__inp admin__inp_food form-control" name="info" placeholder="Info"></textarea>
                        <input class="admin__inp admin__inp_food form-control" type="file" name="img" required>
                        <input class="admin__inp admin__inp_food form-control" type="number" name="price" placeholder="Price" required>
                        <input class="admin__inp admin__inp_food form-control" type="number" name="discPrice" placeholder="Discount Price">
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn">Add Beverages</button>
                    </div>
                </form>
            </div>
        </div>

<!-- ---------------------------------- CONTACTS ----------------------------------------------- -->

        <div class="admin__section admin__section_header-list admin__section-none">
            <div class="admin__section_head">
                <h3 class="admin__section_title">Contacts</h3>
            </div>
            <div class="admin__section_content">
                <div class="admin__contact">
                    <table class="admin__table">
                        <tr>
                            <th class="admin__table_title">name</th>
                            <th class="admin__table_title">email</th>
                            <th class="admin__table_title">subject</th>
                            <th class="admin__table_title">message</th>
                            <th class="admin__table_title">panel</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM contact";
                        $result = mysqli_query($mysqli, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="admin__section_item">
                                <td class="admin__section_item_td">
                                    <div class="admin__section_img">
                                        <h3 class="admin__section_item_name"><?php echo $row['name'] ?></h3>
                                    </div>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_name"><?php echo $row['email'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $row['subject'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <h3 class="admin__section_item_pos"><?php echo $row['message'] ?></h3>
                                </td>
                                <td class="admin__section_item_td">
                                    <a href="./contacts/updateIndex.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["name"] ?>&email=<?php echo $row["email"] ?>&subject=<?php echo $row["subject"] ?>&message=<?php echo $row["message"] ?>">
                                        <i class="example__class admin__icon fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="./contacts/remove.php?id=<?php echo $row["id"] ?>">
                                        <i class="admin__icon fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
                <form class="admin__form" action="./contacts/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form__flex">
                        <input class="admin__inp admin__inp_header form-control" type="text" name="name" placeholder="Name" required>
                        <input class="admin__inp admin__inp_header form-control" type="text" name="email" placeholder="Email" required>
                        <input class="admin__inp admin__inp_header form-control" type="text" name="subject" placeholder="Subject" required>
                        <input class="admin__inp admin__inp_header form-control" type="text" name="message" placeholder="Message" required>
                    </div>
                    <div>
                        <button class="btn custom-btn admin__form_btn">Add contacts</button>
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