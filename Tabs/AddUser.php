<?php include('../Header.php'); ?>
    <!-- chỉ admin có quyền thêm thành viên staff, không thể thêm customer-->
    <div class="container d-flex justify-content-center">
        <div class="col-md-5 col-10 p-2 m-3 border border-1 rounded-5">
            <h1 class="col-12 text-center py-3">THÊM THÀNH VIÊN MỚI</h1>
            <form action="#" method="POST" class="m-3">
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
                <label for="role" class="form-label">Chức vụ</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="" disabled selected>Chọn chức vụ</option>
                    <option value="">Nhân viên</option>
                    <option value="manager">Quản lý</option>
                    <option value="other">Khác</option>
                </select>
                
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-dark">Tạo tài khoản mới</button>
                </div>
            </form>
        </div>
    </div>

<?php include('../Footer.php'); ?>