<!-- header chung cho các tab -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment</title>
        <meta charset="utf-8">
        <meta name="description" content="Assignment">
        <meta name="keywords" content="fashion thời trang">
        <meta name="author" content="AssignmentTeam">
        <meta name="copyright" content="CSE HCMUT 2024">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap framework -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> <!--icon bootstrap-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> <!--icon google-->
        <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@400;700&display=swap" rel="stylesheet"> <!--font Signika Negative-->
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet"> <!--font Asap-->
        <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;700&display=swap" rel="stylesheet"> <!-- font WindSong -->
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet"> <!--font Asap-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
        <link href="/Assignment/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery framework -->
    </head>

    <body>

        <!-- Navigation bar -->
        <div class="navbar nbar navbar-light fixed-top navbar-expand-lg" style="font-family: 'Signika Negative', sans-serif;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Assignment/index.php">
                    <img src="https://th.bing.com/th/id/OIP.3nmDniLn753Ub3m0acgBjAHaHe?rs=1&pid=ImgDetMain" alt="Logo" width="40px">
                </a>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Nhãn Hiệu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link nlink active px-2" aria-current="page" href="/Assignment/index.php" data-tab="home">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nlink px-2" href="/Assignment/Tabs/Products.php" data-tab="product">SẢN PHẨM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nlink px-2" href="/Assignment/Tabs/Introduction.php" data-tab="introduction">VỀ CHÚNG TÔI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nlink px-2" href="/Assignment/Tabs/Contact.php" data-tab="contact">LIÊN HỆ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nlink px-2" href="/Assignment/Tabs/Manage.php" data-tab="manage">QUẢN LÝ</a>
                            </li>
                        </ul>
                        <form action="/Assignment/Tabs/search.php" method="GET" class="search">
                            <div>
                                <input type="text" name="query" placeholder="Tìm sản phẩm..." required>
                            </div>
                        </form>
                        <!-- <form class="d-flex" role="search">
                            <input class="form-control me-2 opacity-75" id="searchInput" type="search" placeholder="Tìm kiếm" 
                                aria-label="Search" style="background-color: #fff; color: #000;">
                        </form> -->
                    </div>
                </div>
                <ul class="navbar-nav flex-row justify-content-end align-items-center flex-grow-1 gap-2">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="/Assignment/Tabs/Cart.php">
                            <span class="material-icons-round text-white">shopping_cart</span>
                            <span class="position-absolute top-10 start-90 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Assignment/Tabs/SignIn.php">
                            <span class="material-icons-round text-white">account_circle</span>
                        </a>
                    </li>
                </ul>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" style="border: none;">
                    <span class="material-icons-round" style="color: white;">menu</span>
                </button>
            </div>
        </div>