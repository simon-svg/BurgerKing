<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Burger King - Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
</head>

<body>
    <form class="admin__form" action="./update.php?id=<?php echo $_GET["id"] ?>&name=<?php echo $_GET["name"] ?>&info=<?php echo $_GET["info"] ?>&img=<?php echo $_GET["img"] ?>&price=<?php echo $_GET["price"] ?>&discPrice=<?php echo $_GET["discPrice"] ?>" method="POST" enctype="multipart/form-data">
        <div class="form__flex">
            <input class="admin__inp admin__inp_food form-control"
            type="text" name="name" placeholder="Name" value="<?php echo $_GET["name"] ?>">

            <textarea class="admin__inp admin__inp_food form-control"
            name="info" placeholder="Info"><?php echo $_GET["info"] ?></textarea>

            <input class="admin__inp admin__inp_food form-control" type="file" name="img">
            <input class="admin__inp admin__inp_food form-control"
            value="<?php echo $_GET["price"] ?>" type="number" name="price" placeholder="Price">

            <input class="admin__inp admin__inp_food form-control"
            value="<?php echo $_GET["discPrice"] ?>" type="number" name="discPrice" placeholder="Discount Price">
        </div>
        <div>
            <button class="btn custom-btn admin__form_btn">Add Burger</button>
        </div>
    </form>



    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src='../../../lib/easing/easing.min.js'></script>
    <script src='../../../lib/owlcarousel/owl.carousel.min.js'></script>
    <script src='../../../lib/tempusdominus/js/moment.min.js'></script>
    <script src='../../../lib/tempusdominus/js/moment-timezone.min.js'></script>
    <script src='../../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'></script>

    <!-- Contact Javascript File -->
    <script src='../../../mail/jqBootstrapValidation.min.js'></script>
    <script src='../../../mail/contact.js'></script>

    <!-- Template Javascript -->
    <script src='../../../js/admin.js'></script>
</body>

</html>