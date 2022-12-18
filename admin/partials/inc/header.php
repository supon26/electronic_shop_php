

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>
    <link rel="shortcut icon" href="../../public/assets/image/admin/image/images-icon.png" type="image/x-icon">
    <!-- Add custom css -->
    <link rel="stylesheet" href="../../public/assets/css/admin/css/style.css">
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap Icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <!-- Vertical navbar start -->
        <div class="vertical-nav bg-white" id="sidebar">
            <div class="py-4 px-3 mb-4 bg-light">
                <div class="media d-flex align-items-center">
                    <img src="../../public/assets/image/admin/image/dashborad-profile.jpg" width="80" height="80"
                        alt="Profile" class="me-3 rounded-circle img-thumbnail shadow-sm">
                    <div class="media-body">
                        <h4 class="m-0">Supon</h4>
                        <p class="fw-normal text-muted mb-0">Web Developer</p>
                    </div>
                </div>
            </div>

            <!-- ------ ---------->
            <p class="text-gray fw-bold text-uppercase px-3 small pb-4 mb-0 border-bottom">Dashboard</p>
            <ul class="nav flex-column bg-white mb-0">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link text-dark">
                        <i class="bi bi-house-door-fill me-3 text-primary"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-file-earmark-person-fill me-3 text-primary"></i>About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-box2-fill me-3 text-primary"></i>Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-image me-3 text-primary"></i>Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a href="table.php" class="nav-link text-dark">
                        <i class="bi bi-table me-3 text-primary"></i>Table
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../users/index.php" class="nav-link text-dark">
                        <i class="bi bi-r-square-fill me-3 text-primary"></i>Users
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../catagory/index.php" class="nav-link text-dark">
                        <i class="bi bi-box-seam-fill me-3 text-primary"></i>Catagory
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../product/index.php" class="nav-link text-dark">
                        <i class="bi bi-diagram-3-fill me-3 text-primary"></i>Product
                    </a>
                </li>
            </ul>
            <!-- ------------- -->
            <p class="text-gray fw-bold text-uppercase px-3 small py-4 mb-0">Charts</p>
            <ul class="nav flex-column mb-0">
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-clipboard-data-fill me-3 text-primary"></i>Area Charts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-bar-chart-line-fill me-3 text-primary"></i>Bar Charts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-pie-chart-fill me-3 text-primary"></i>Pie Charts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-graph-up-arrow me-3 text-primary"></i>Line Charts
                    </a>
                </li>
            </ul>
        </div>
        <!-- Vertical navbar end -->
    </header>
    <main>
        <section>
            <!-- Page Content holder -->
            <div class="page-content" id="content">
                <!-- Navbar start -->
                <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
                    <div class="container">
                        <div class="input-group">
                            <div class="form-outline d-flex">
                                <input type="search" id="form1" class="form-control" placeholder="Search" />
                                <button type="button" class="btn btn-primary">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../../public/assets/image/admin/image/dashborad-profile.jpg"
                                                width="50" height="50" alt="Profile"
                                                class="me-3 rounded-circle img-thumbnail shadow-sm">
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i>
                                                    My Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">
                                                    <i class="bi bi-gear-fill"></i> Setting</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>
                                                    Log Out</a></li>
                                        </ul>
                                    </li>
                                    <a class="navbar-brand me-1" href="#">SUPON</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="text-light bi bi-download"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar end -->

                