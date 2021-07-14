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
                    <a class="admin__item" href="#">Header Menu lists</a>
                </li>
                <li>
                    <a class="admin__item" href="chefs.php">Chefs</a>
                </li>
                <li>
                    <a class="admin__item" href="foodCategories.php">Food Categories</a>
                </li>
                <li class="admin__item_drop">
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle admin">Food</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="admin__item" href="burgers.php">Burgers</a>
                        </li>
                        <li>
                            <a class="admin__item" href="snacks.php">Snacks</a>
                        </li>
                        <li>
                            <a class="admin__item" href="beverages.php">Beverages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="admin__item" href="allFoods.php">All Foods</a>
                </li>
                <li>
                    <a class="admin__item" href="contacts.php">Contacts</a>
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