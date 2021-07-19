<nav id="sidebar-admin">
    <div class="sidebar-header">
        <h3>Admin Panel</h3>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a class="admin__item" href="<?php echo $navArr[0]; ?>">Header Menu lists</a>
        </li>
        <li>
            <a class="admin__item" href="<?php echo $navArr[1]; ?>">Chefs</a>
        </li>
        <li>
            <a class="admin__item" href="<?php echo $navArr[2]; ?>">Food Categories</a>
        </li>
        <li class="admin__item_drop">
            <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle admin">Food</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <?php
                require_once "../db.php";
                $query = "SELECT * FROM food_categories";
                $result = mysqli_query($mysqli, $query);

                while($row = mysqli_fetch_assoc($result)){
                    echo "<li>
                        <a class='admin__item' href='$row[name].php?catId=$row[id]'>$row[name]</a>
                    </li>";
                }
                ?>
            </ul>
        </li>
        <li>
            <a class="admin__item" href="<?php echo $navArr[3]; ?>">All Foods</a>
        </li>
        <li>
            <a class="admin__item" href="<?php echo $navArr[4]; ?>">Blog Grid</a>
        </li>
        <li>
            <a class="admin__item" href="<?php echo $navArr[5]; ?>">Contacts</a>
        </li>
    </ul>
</nav>