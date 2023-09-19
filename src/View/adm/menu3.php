<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/EquipamentoDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . '../Template/_includes/_head.php'; ?>
    <style>
        .sidebar li .submenu {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-left: 1rem;
            padding-right: 1rem;
        }
    </style>
</head>

<body>

    <nav class="sidebar card py-2 mb-4">
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item">
                <a class="nav-link" href="#"> Link name </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link" href="#"> Submenu links </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="#">Submenu item 1 </a></li>
                    <li><a class="nav-link" href="#">Submenu item 2 </a></li>
                    <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link" href="#"> More menus </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="#">Submenu item 4 </a></li>
                    <li><a class="nav-link" href="#">Submenu item 5 </a></li>
                    <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                    <li><a class="nav-link" href="#">Submenu item 7 </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Something </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Other link </a>
            </li>
        </ul>
    </nav>

    <?php include_once PATH . '../Template/_includes/_footer.php'; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

                element.addEventListener('click', function (e) {

                    let nextEl = element.nextElementSibling;
                    let parentEl = element.parentElement;

                    if (nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if (nextEl.classList.contains('show')) {
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            // if it exists, then close all of them
                            if (opened_submenu) {
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            }) // forEach
        }); 
    </script>
</body>

</html>