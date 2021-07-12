<?php

echo "<div class='navbar navbar-expand-lg bg-light navbar-light'>
    <div class='container-fluid'>
        <a href='index.php' class='navbar-brand'>Burger <span>King</span></a>
        <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarCollapse'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse justify-content-between' id='navbarCollapse'>
            <div class='navbar-nav ml-auto'>
                <a href='index.php' class='nav-item nav-link $headerArr[0]'>Home</a>
                <a href='about.php' class='nav-item nav-link $headerArr[1]'>About</a>
                <a href='feature.php' class='nav-item nav-link $headerArr[2]'>Feature</a>
                <a href='team.php' class='nav-item nav-link $headerArr[3]'>Chef</a>
                <a href='menu.php' class='nav-item nav-link $headerArr[4]'>Menu</a>
                <a href='booking.php' class='nav-item nav-link $headerArr[5]'>Booking</a>
                <div class='nav-item dropdown'>
                    <a href='#' class='nav-link dropdown-toggle $headerArr[6] $headerArr[7]' data-toggle='dropdown'>Pages</a>
                    <div class='dropdown-menu'>
                        <a href='blog.php' class='dropdown-item $headerArr[6]'>Blog Grid</a>
                        <a href='single.php' class='dropdown-item $headerArr[7]'>Blog Detail</a>
                    </div>
                </div>
                <a href='contact.php' class='nav-item nav-link $headerArr[8]'>Contact</a>
            </div>
        </div>
    </div>
</div>";