<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/EquipamentoDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . '../Template/_includes/_head.php'; ?>
    <style>

    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Menu</a>
                </div>
                <!-- Sidebar navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Tools & Components
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2">Profile</i>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>


    <?php include_once PATH . '../Template/_includes/_footer.php'; ?>

    <script>

    </script>
</body>

</html>