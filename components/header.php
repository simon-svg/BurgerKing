<?php
require_once "php/db.php";

$query = "SELECT * FROM header_list";
$result = mysqli_query($mysqli, $query);
?>

<div class='navbar navbar-expand-lg bg-light navbar-light'>
    <div class='container-fluid'>
        <a href='index.php' class='navbar-brand'>Burger <span>King</span></a>
        <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarCollapse'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse justify-content-between' id='navbarCollapse'>
            <div class='navbar-nav ml-auto'>
                <?php $i = 0; while ($row = mysqli_fetch_assoc($result)) { ?>
                    <a href="<?php echo $row['link'] ?>" class='nav-item nav-link <?php echo $headerArr[$i]; ?>'><?php echo $row['name'] ?></a>
                <?php $i++; } ?>
            </div>
        </div>
    </div>
</div>