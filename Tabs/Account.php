<?php include('../Header.php'); ?>
    <!-- Nếu người dùng chưa đăng nhập thì chuyển đến SignIn.php -->
    <div class="container d-flex justify-content-center">
        <div class="col-7">
            <h1 class="col-12 text-center py-3">THÔNG TIN TÀI KHOẢN</h1>
            <form action="#" method="POST" class="m-3">
                <div class="col-12 d-flex">
                    <div class="col-4" style="height: 80px;">
                        <img src="" alt="avatar.png">
                    </div>
                    <div class="col-8">
                        <div class="user-box">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Họ tên</label>
                        </div>
                        <div class="user-box">
                            <input type="date" id="birth" name="birth" required>
                            <label for="birth">Ngày sinh</label>
                        </div>
                    </div>
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
                <div class="col-12 d-flex flex-wrap justify-content-between gap-1">
                    <div class="col-5 text-center">
                        <button type="submit" class="btn btn-dark"><i class="bi bi-pencil-square"></i> Cập nhật thông tin</button>
                    </div>
                    <div class="col-5 text-center">
                        <button type="submit" class="btn btn-dark"><i class="bi bi-shield-lock"></i> Thay đổi mật khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include('../Footer.php'); ?>