<!-- tab Đăng nhập -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment</title>
        <meta charset="utf-8">
        <meta name="description" content="Assignment">
        <meta name="keywords" content="fashion thời trang">
        <meta name="author" content="Pham Gia Luong">
        <meta name="copyright" content="CSE HCMUT 2024">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;700&display=swap" rel="stylesheet"> <!-- font WindSong -->
        <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet"> <!--font Asap-->
        <link href="/Assignment/style.css" rel="stylesheet">
    </head>

    <body class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 d-flex flex-wrap justify-content-md-between justify-content-center p-3">
            <div class="col-3 d-md-block d-none d-flex flex-wrap align-items-end">
                <img src="/Assignment/Images/left1.png" class="img-fluid" alt="left.png">
            </div>
            <div class="col-md-4 col-11 d-flex justify-content-center align-items-center">
                <div class="col-11 rounded-5 my-5 sign-box pb-2">
                    <div class="col-12 d-flex flex-wrap justify-content-center pt-3 rounded-bottom-0 rounded-5" style="background-color: #222f3e;">
                        <div class="col-2">
                            <img src="https://th.bing.com/th/id/OIP.3nmDniLn753Ub3m0acgBjAHaHe?rs=1&pid=ImgDetMain" 
                                alt="logo" class="img-fluid">
                        </div>
                        <h1 class="text-center col-12 my-3" style="font-family: 'WindSong', san-serif; color: white;">
                            xin chào
                        </h1>
                    </div>
                    <form action="#" method="POST" class="mt-md-5 m-3">
                        <div class="user-box">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="password" name="password" required>
                            <label for="password">Mật Khẩu</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Đăng Nhập</button>
                        </div>
                    </form>
                    <div class="m-2 text-center">
                        <a href="SignUp.php" class=" text-dark">Chưa có tài khoản? <strong>Đăng ký ngay!</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-md-block d-none d-flex flex-wrap align-items-end">
                <img src="/Assignment/Images/right1.png" class="img-fluid" alt="right.png">
            </div>
        </div>
    </body>

</html>