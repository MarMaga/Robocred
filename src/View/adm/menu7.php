<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/EquipamentoDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . '../Template/_includes/_head.php'; ?>
    <style>
        :root {
            --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        nav {
            display: block;
        }

        body {
            margin: 0;
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #515151;
            text-align: left;
            background-color: #e9edf4;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        a {
            color: #3f84fc;
            text-decoration: none;
            background-color: transparent;
            border-radius: 5px;
        }

        a:hover {
            color: #0458eb;
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: "Nunito", sans-serif;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1,
        .h1 {
            font-size: 2.5rem;
            font-weight: normal;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            text-align: center;
        }

        .dashboard {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 100vh;
        }

        .dashboard-app {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
            margin-top: 84px;
        }

        .dashboard-content {
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
            padding: 25px;
        }

        .dashboard-nav {
            min-width: 238px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow: auto;
            background-color: #373193;
        }

        .dashboard-compact .dashboard-nav {
            display: none;
        }

        .dashboard-nav header {
            min-height: 84px;
            padding: 8px 27px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .dashboard-nav header .menu-toggle {
            display: none;
            margin-right: auto;
        }

        .dashboard-nav a {
            color: #515151;
        }

        .dashboard-nav a:hover {
            text-decoration: none;
        }

        .dashboard-nav {
            background-color: #343a40;
        }

        .dashboard-nav a {
            color: #bcc3cb;
        }

        .brand-logo {
            font-family: "Nunito", sans-serif;
            font-weight: bold;
            font-size: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            color: #515151;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .brand-logo:focus,
        .brand-logo:active,
        .brand-logo:hover {
            color: #dbdbdb;
            text-decoration: none;
        }

        .brand-logo i {
            color: #d2d1d1;
            font-size: 27px;
            margin-right: 10px;
        }

        .dashboard-nav-list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-item {
            min-height: 56px;
            padding: 8px 20px 8px 70px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            letter-spacing: 0.02em;
            transition: ease-out 0.5s;
        }

        .dashboard-nav-item i {
            width: 36px;
            font-size: 19px;
            margin-left: -40px;
        }

        .dashboard-nav-item:hover {
            /* background: rgba(255, 255, 255, 0.04); */
            background: rgba(255, 255, 255, 0.2);
        }

        .active {
            /* background: rgba(0, 0, 0, 0.1); */
            background: #ebecec;
            color: #343a40 !important;
        }

        .dashboard-nav-dropdown {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-dropdown.show {
            background: rgba(255, 255, 255, 0.02);
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle {
            font-weight: bold;
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle:after {
            -webkit-transform: none;
            -o-transform: none;
            transform: none;
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-menu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .dashboard-nav-dropdown-toggle:after {
            content: "";
            margin-left: auto;
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid rgba(81, 81, 81, 0.8);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .dashboard-nav .dashboard-nav-dropdown-toggle:after {
            border-top-color: rgba(255, 255, 255, 0.72);
        }

        .dashboard-nav-dropdown-menu {
            display: none;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-dropdown-item {
            min-height: 40px;
            padding: 8px 20px 8px 70px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            transition: ease-out 0.5s;
        }

        .dashboard-nav-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .menu-toggle {
            position: relative;
            width: 42px;
            height: 42px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            /* color: #443ea2; */
            color: #7c7e81;
        }

        .menu-toggle:hover,
        .menu-toggle:active,
        .menu-toggle:focus {
            text-decoration: none;
            /* color: #875de5; */
            color: #343a40;
        }

        .menu-toggle i {
            font-size: 20px;
        }

        .dashboard-toolbar {
            min-height: 84px;
            background-color: #dfdfdf;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 8px 27px;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1000;
        }

        .dashboard-footer {
            min-height: 84px;
            background-color: #dfdfdf;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            /* padding: 1px 27px; */
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 1000;
        }

        .nav-item-divider {
            height: 1px;
            margin: 1rem 0;
            overflow: hidden;
            background-color: rgba(236, 238, 239, 0.3);
        }

        @media (min-width: 992px) {
            .dashboard-app {
                margin-left: 238px;
            }

            .dashboard-compact .dashboard-app {
                margin-left: 0;
            }
        }


        @media (max-width: 768px) {
            .dashboard-content {
                padding: 15px 0px;
            }
        }

        @media (max-width: 992px) {
            .dashboard-nav {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                z-index: 1070;
            }

            .dashboard-nav.mobile-show {
                display: block;
            }
        }

        @media (max-width: 992px) {
            .dashboard-nav header .menu-toggle {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        @media (min-width: 992px) {
            .dashboard-toolbar {
                left: 238px;
            }

            .dashboard-compact .dashboard-toolbar {
                left: 0;
            }
        }
    </style>

</head>

<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i
                        class="fas fa-anchor"></i> <span>BRAND</span></a></header>
            <hr class="text-white" style="margin-top: 0px">
            <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
                    Home </a><a href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i>
                    dashboard
                </a><a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>
                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-photo-video"></i>
                        Media </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a
                            href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#"
                            class="dashboard-nav-dropdown-item">Images</a><a href="#"
                            class="dashboard-nav-dropdown-item">Video</a></div>
                </div>
                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Users </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a
                            href="#" class="dashboard-nav-dropdown-item">Subscribed</a><a href="#"
                            class="dashboard-nav-dropdown-item">Non-subscribed</a><a href="#"
                            class="dashboard-nav-dropdown-item">Banned</a><a href="#"
                            class="dashboard-nav-dropdown-item">New</a></div>
                </div>
                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-money-check-alt"></i>
                        Payments </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">All</a><a
                            href="#" class="dashboard-nav-dropdown-item">Recent</a><a href="#"
                            class="dashboard-nav-dropdown-item"> Projections</a>
                    </div>
                </div>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a href="#"
                    class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
                <div class="nav-item-divider"></div>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Welcome back Jim</h1>
                        </div>
                        <div class='card-body'>
                            <p>Your account type is: Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once PATH . '../Template/_includes/_footer.php'; ?>

    <script>
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function () {
            $(".dashboard-nav-dropdown-toggle").click(function () {
                $(this).closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent()
                    .siblings()
                    .removeClass("show");
            });
            $(".menu-toggle").click(function () {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                    $(".dashboard-footer").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                    $(".dashboard-footer").toggleClass("dashboard-compact");
                }
            });
        });
    </script>
</body>