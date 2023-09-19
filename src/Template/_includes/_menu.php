<div class="container-fluid">
    <div class="row">
        <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
            <div class="mt-4">
                <a class="text-white text-decoration-none d-flex align-items-center ms-4" role="button">
                    <span class="fs-5">Menu</span>
                </a>
                <hr class="text-white">
                <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-gauge"></i>
                            <span class="ms-2">Item 1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-house"></i>
                            <span class="ms-2">Item 2</span>
                        </a>
                    </li>
                    <li class="nav-item disabled">
                        <a href="#sidemenu" data-bs-toggle="collapse" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-gauge"></i>
                            <span class="ms-2">Item 3</span>
                        </a>
                        <ul class="nav collapse ms-1" id="sidemenu" data-bs-parent="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-current="page">Sub 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sub 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="fa fa-users"></i>
                            <span class="ms-2">Item 4</span>
                        </a>
                    </li>
                </ul>
                <div class="dropdown open">
                    <a class="btn border-none outline-none dropdown-toggle text-white" type="button" id="triggerId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i><span>Marcelo</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item disabled" href="#">Configurações</a>
                    </div>
                </div>
                </ul>
            </div>
        </div>
    </div>
</div>