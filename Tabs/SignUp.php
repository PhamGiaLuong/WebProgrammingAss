<!-- tab Đăng ký -->
<?php include('../Header.php'); ?>
        <div class="col-12 d-flex flex-wrap justify-content-md-between justify-content-center">
            <div class="col-3 d-none d-md-flex flex-wrap align-items-end">
                <img src="/Assignment/Images/left2.png" class="img-fluid" alt="left.png">
            </div>
            <div class="col-md-4 col-11 d-flex flex-wrap justify-content-center align-items-center">
                <div class="col-11 d-flex flex-wrap justify-content-center align-items-center rounded-5 my-2 sign-box pb-2">
                    <div class="col-12 d-flex flex-wrap justify-content-center pt-3 rounded-bottom-0 rounded-5" style="background-color: #222f3e;">
                        <img src="https://th.bing.com/th/id/OIP.3nmDniLn753Ub3m0acgBjAHaHe?rs=1&pid=ImgDetMain" alt="logo" width="60">
                        <h1 class="text-center col-12 my-3 " style="font-family: 'WindSong', san-serif; color: white;">
                            xin chào
                        </h1>
                    </div>
                    <form action="#" method="POST" class="p-3 col-12">
                        <div class="user-box">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Họ tên</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="phone" name="phone" required>
                            <label for="phone">Số điện thoại</label>
                        </div>
                        <div class="user-box">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="address" name="address" required>
                            <label for="address">Địa chỉ</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="password" name="password" required>
                            <label for="password">Mật Khẩu</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="rePassword" name="rePassword" required>
                            <label for="rePassword">Nhập lại mật Khẩu</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Đăng Ký</button>
                        </div>
                    </form>
                    <div class="col-12 m-2 text-center">
                        <a href="SignIn.php" class=" text-dark">Bạn đã có tài khoản? <strong>Đăng nhập ngay!</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-3 d-none d-md-flex flex-wrap align-items-end">
                <img src="/Assignment/Images/right2.png" class="img-fluid" alt="right.png">
            </div>
        </div>
<?php include('../Footer.php'); ?>