<?php include('../Header.php'); ?>
<!-- thêm sản phẩm mới -->
    <div class="container d-flex justify-content-center">
        <div class="col-md-5 col-10 p-2 m-3 border border-1 rounded-5">
            <h3 class="col-12 text-center py-3">THÊM SẢN PHẨM MỚI</h3>
            <form action="#" method="POST" class="m-3">
                <div class="user-box">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Tên sản phẩm</label>
                </div>
                <div class="user-box">
                    <input type="number" id="price" name="price" required>
                    <label for="price">Giá</label>
                </div>
                <div class="user-box">
                    <input type="number" id="quantity" name="quantity" required>
                    <label for="quantity">Số lượng</label>
                </div>
                <label for="collection" class="form-label">Bộ sưu tập</label>
                <select class="form-select mb-2" id="collection" name="collection" required onchange="toggleOtherInput()">
                    <option value="" disabled selected>Chọn Bộ sưu tập</option>
                    <option value="">A</option>
                    <option value="manager">B</option>
                    <option value="other">Thêm Bộ sưu tập mới</option>
                </select>
                <!-- Vùng nhập liệu sẽ xuất hiện khi người dùng chọn "Thêm bộ sưu tập mới" -->
                <input type="text" id="otherCollection" name="otherCollection" class="form-control mb-2" placeholder="Nhập tên Bộ sưu tập mới" style="display: none;">
                <div class="col-12 d-flex flex-wrap justify-content-evenly gap-1 mb-2">
                    <p class="col-12">Size</p>
                    <div class="col-2">
                        <input type="checkbox" id="s" value="s">
                        <label for="s">S</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" id="m" value="m">
                        <label for="m">M</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" id="l" value="l">
                        <label for="l">L</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" id="xl" value="xl">
                        <label for="xl">XL</label>
                    </div>
                </div>
                <div class="col-12 d-flex flex-wrap justify-content-evenly gap-1 mb-2">
                    <p class="col-12">Màu sắc</p>
                    <div class="col-2">
                        <input type="checkbox" id="green" value="green">
                        <label for="green">Xanh lá</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" id="red" value="red">
                        <label for="red">Đỏ</label>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" id="yellow" value="yellow">
                        <label for="yellow">Vàng</label>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <label for="description" class="form-label">Mô tả sản phẩm</label>
                    <textarea class="form-control" id="description" rows="4" required placeholder="Mô tả sản phẩm"></textarea>
                </div>
                
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-dark">Tạo sản phẩm mới</button>
                </div>
            </form>
        </div>
    </div>

<?php include('../Footer.php'); ?>