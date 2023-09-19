<?php
include_once dirname(__DIR__, 2) . '/Resource/dataview/EquipamentoDV.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . '../Template/_includes/_head.php'; ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bootstrap 5 <span class="badge bg-primary">Mega Menu</span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-content">
                <div class="navbar-toggler-icon">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">Multilevel</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="#">Gallery</a></li>
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li class="dropstart">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu
                                    Left</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 4</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside">Submenu Right</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href=""> Second level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 3</a></li>
                                    <li class="dropend">
                                        <a href="#" class="dropdown-item dropdown-toggle"
                                            data-bs-toggle="dropdown">Let's go deeper!</a>
                                        <ul class="dropdown-menu dropdown-submenu shadow">
                                            <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 3</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 4</a></li>
                                            <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Third level 5</a></li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">Megamenu</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-3 py-4">
                                            <h5>Title</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Mega Menu Link</a>
                                                <a class="list-group-item" href="#">Mega Menu Link</a>
                                                <a class="list-group-item" href="#">Mega Menu Link</a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-3 py-4">
                                            <h5>Card Title</h5>
                                            <div class="card">
                                                <img src="img/banner-image.jpg" class="img-fluid" alt="image">
                                                <div class="card-body">
                                                    <p class="card-text">Description goes here...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-3 py-4">
                                            <h5>Title</h5>
                                            <p>Description goes here...</p>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 py-4">
                                            <h5>Title</h5>
                                            <div class="list-group">
                                                <a class="list-group-item" href="#">Menu Link</a>
                                                <a class="list-group-item" href="#">Menu Link</a>
                                                <a class="list-group-item" href="#">Menu Link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <div class="input-group">
                        <input class="form-control border-0 mr-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-primary border-0" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>TESTE</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officiis, quasi quia, dolorum autem quisquam sed
            eveniet temporibus, perspiciatis sequi illo suscipit libero? Error at neque quas, id quis cum rem
            consequatur nisi sint expedita similique dignissimos debitis repellendus mollitia blanditiis animi,
            temporibus rerum ratione. Aperiam deserunt at incidunt hic quia ab consequatur minus laudantium, quas
            tenetur dolor nobis tempora facere illo molestiae repellat similique rem voluptas exercitationem, illum
            possimus. Suscipit, nostrum, dicta nulla assumenda asperiores qui quaerat nisi in veniam libero eos!
            Reiciendis saepe tempore dolorem doloribus aut natus culpa ratione perferendis. Repellendus iusto voluptas
            deleniti, quia voluptatem nisi.
        </p>
    </div>

    <script>
        document.addEventListener('click', function (e) {
            // Hamburger menu
            if (e.target.classList.contains('hamburger-toggle')) {
                e.target.children[0].classList.toggle('active');
            }
        }) 
    </script>

    <?php include_once PATH . '../Template/_includes/_footer.php'; ?>
</body>

</html>