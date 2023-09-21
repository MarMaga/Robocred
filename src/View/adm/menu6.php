<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/EquipamentoDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . '../Template/_includes/_head.php'; ?>
    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <!-- Collapse 1 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
                        aria-controls="collapseExample1">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Expanded menu</span>
                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample1" class="collapse show list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                    </ul>
                    <!-- Collapse 1 -->

                    <!-- Collapse 2 -->
                    <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
                        data-mdb-toggle="collapse" href="#collapseExample2" aria-expanded="true"
                        aria-controls="collapseExample2">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Collapsed menu</span>
                    </a>
                    <!-- Collapsed content -->
                    <ul id="collapseExample2" class="collapse list-group list-group-flush">
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                        <li class="list-group-item py-1">
                            <a href="" class="text-reset">Link</a>
                        </li>
                    </ul>
                    <!-- Collapse 2 -->
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="25"
                        alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                    <input autocomplete="off" type="search" class="form-control rounded"
                        placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px;" />
                    <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icon -->
                    <li class="nav-item">
                        <a class="nav-link me-3 me-lg-0" href="#">
                            <i class="fas fa-fill-drip"></i>
                        </a>
                    </li>
                    <!-- Icon -->
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>

                    <!-- Icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="united kingdom flag m-0"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                                    <i class="fa fa-check text-success ms-2"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                                height="22" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4"></div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias consequuntur laboriosam eum, explicabo rerum quis facere nisi veniam. Quidem veritatis, obcaecati quibusdam at aliquid necessitatibus aut ea. Facere aliquam dolorem, atque, quisquam ab vel eveniet deleniti obcaecati modi dolore voluptates assumenda perferendis eligendi quibusdam ullam esse ex delectus fugit ut excepturi a eos. Commodi delectus ratione enim tempore doloremque corrupti repellat hic alias amet quod, odit aspernatur nesciunt necessitatibus perspiciatis. Maiores necessitatibus eos tempora nesciunt recusandae, neque provident non odit reprehenderit, deserunt suscipit tenetur tempore quasi, hic error! Eligendi praesentium sed eum asperiores fugit. Labore a in est ut consequuntur minus vero, eligendi nemo, inventore necessitatibus unde. Magnam officia optio accusantium veritatis itaque dignissimos doloremque reprehenderit quos dolores omnis, ut nihil cupiditate dicta molestiae dolorum ducimus numquam doloribus, eius tempora beatae. Nemo quam nulla voluptatum ea eos mollitia consequatur voluptatibus reprehenderit necessitatibus incidunt! Enim commodi beatae numquam excepturi, earum illum? Dicta quo dolorem sequi dolor beatae culpa et odio voluptatibus rem ratione! Velit quod aspernatur optio sequi expedita possimus, nobis in itaque, accusamus, architecto modi. Ad, numquam quia! Saepe molestiae vel quia! Ex illum corporis hic dolor voluptates assumenda omnis quibusdam, voluptatem possimus molestiae! Reiciendis commodi in nam accusantium consequatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias consequuntur laboriosam eum, explicabo rerum quis facere nisi veniam. Quidem veritatis, obcaecati quibusdam at aliquid necessitatibus aut ea. Facere aliquam dolorem, atque, quisquam ab vel eveniet deleniti obcaecati modi dolore voluptates assumenda perferendis eligendi quibusdam ullam esse ex delectus fugit ut excepturi a eos. Commodi delectus ratione enim tempore doloremque corrupti repellat hic alias amet quod, odit aspernatur nesciunt necessitatibus perspiciatis. Maiores necessitatibus eos tempora nesciunt recusandae, neque provident non odit reprehenderit, deserunt suscipit tenetur tempore quasi, hic error! Eligendi praesentium sed eum asperiores fugit. Labore a in est ut consequuntur minus vero, eligendi nemo, inventore necessitatibus unde. Magnam officia optio accusantium veritatis itaque dignissimos doloremque reprehenderit quos dolores omnis, ut nihil cupiditate dicta molestiae dolorum ducimus numquam doloribus, eius tempora beatae. Nemo quam nulla voluptatum ea eos mollitia consequatur voluptatibus reprehenderit necessitatibus incidunt! Enim commodi beatae numquam excepturi, earum illum? Dicta quo dolorem sequi dolor beatae culpa et odio voluptatibus rem ratione! Velit quod aspernatur optio sequi expedita possimus, nobis in itaque, accusamus, architecto modi. Ad, numquam quia! Saepe molestiae vel quia! Ex illum corporis hic dolor voluptates assumenda omnis quibusdam, voluptatem possimus molestiae! Reiciendis commodi in nam accusantium consequatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias consequuntur laboriosam eum, explicabo rerum quis facere nisi veniam. Quidem veritatis, obcaecati quibusdam at aliquid necessitatibus aut ea. Facere aliquam dolorem, atque, quisquam ab vel eveniet deleniti obcaecati modi dolore voluptates assumenda perferendis eligendi quibusdam ullam esse ex delectus fugit ut excepturi a eos. Commodi delectus ratione enim tempore doloremque corrupti repellat hic alias amet quod, odit aspernatur nesciunt necessitatibus perspiciatis. Maiores necessitatibus eos tempora nesciunt recusandae, neque provident non odit reprehenderit, deserunt suscipit tenetur tempore quasi, hic error! Eligendi praesentium sed eum asperiores fugit. Labore a in est ut consequuntur minus vero, eligendi nemo, inventore necessitatibus unde. Magnam officia optio accusantium veritatis itaque dignissimos doloremque reprehenderit quos dolores omnis, ut nihil cupiditate dicta molestiae dolorum ducimus numquam doloribus, eius tempora beatae. Nemo quam nulla voluptatum ea eos mollitia consequatur voluptatibus reprehenderit necessitatibus incidunt! Enim commodi beatae numquam excepturi, earum illum? Dicta quo dolorem sequi dolor beatae culpa et odio voluptatibus rem ratione! Velit quod aspernatur optio sequi expedita possimus, nobis in itaque, accusamus, architecto modi. Ad, numquam quia! Saepe molestiae vel quia! Ex illum corporis hic dolor voluptates assumenda omnis quibusdam, voluptatem possimus molestiae! Reiciendis commodi in nam accusantium consequatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias consequuntur laboriosam eum, explicabo rerum quis facere nisi veniam. Quidem veritatis, obcaecati quibusdam at aliquid necessitatibus aut ea. Facere aliquam dolorem, atque, quisquam ab vel eveniet deleniti obcaecati modi dolore voluptates assumenda perferendis eligendi quibusdam ullam esse ex delectus fugit ut excepturi a eos. Commodi delectus ratione enim tempore doloremque corrupti repellat hic alias amet quod, odit aspernatur nesciunt necessitatibus perspiciatis. Maiores necessitatibus eos tempora nesciunt recusandae, neque provident non odit reprehenderit, deserunt suscipit tenetur tempore quasi, hic error! Eligendi praesentium sed eum asperiores fugit. Labore a in est ut consequuntur minus vero, eligendi nemo, inventore necessitatibus unde. Magnam officia optio accusantium veritatis itaque dignissimos doloremque reprehenderit quos dolores omnis, ut nihil cupiditate dicta molestiae dolorum ducimus numquam doloribus, eius tempora beatae. Nemo quam nulla voluptatum ea eos mollitia consequatur voluptatibus reprehenderit necessitatibus incidunt! Enim commodi beatae numquam excepturi, earum illum? Dicta quo dolorem sequi dolor beatae culpa et odio voluptatibus rem ratione! Velit quod aspernatur optio sequi expedita possimus, nobis in itaque, accusamus, architecto modi. Ad, numquam quia! Saepe molestiae vel quia! Ex illum corporis hic dolor voluptates assumenda omnis quibusdam, voluptatem possimus molestiae! Reiciendis commodi in nam accusantium consequatur.</p>
    </main>
    <!--Main layout-->


    <?php include_once PATH . '../Template/_includes/_footer.php'; ?>

    <script>

    </script>
</body>

</html>