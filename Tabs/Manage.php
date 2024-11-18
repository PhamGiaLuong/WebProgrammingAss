<?php include('../Header.php'); ?>
<!-- tab Quản lý -->
<div class="container">
    <!-- Tab Navigation -->
    <div class="px-2" style="background-color: #c8d6e5;">
        <ul class="nav nav-underline d-flex flex-nowrap justify-content-between gap-3">
            <li class="nav-item">
                <a class="nav-link text-dark active" data-bs-toggle="pill" href="#orders-list">DANH SÁCH ĐƠN HÀNG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#your-orders">ĐƠN HÀNG CỦA BẠN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#sales">DOANH SỐ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#members-list">DANH SÁCH NHÂN VIÊN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#products-list">DANH SÁCH SẢN PHẨM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#news">TIN TỨC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#branch">THÔNG TIN THƯƠNG HIỆU</a>
            </li>
        </ul>
    </div>

    <!-- Tab Content -->
    <div class="tab-content mt-3 col-12">
        <!-- Tab Danh sách đơn hàng -->
        <div class="tab-pane fade show active" id="orders-list">
            <h1 class="col-12 text-center m-2">
                DANH SÁCH ĐƠN HÀNG ĐANG XỬ LÝ
            </h1>
            <!-- Thống kê trạng thái các đơn hàng -->
            <div class="col-12 d-flex flex-wrap justify-content-between my-2 gap-3">
                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-danger d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-bag fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Chưa nhận</strong></div>
                        <div>15 đơn</div>
                    </div>
                </div>

                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-warning d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-bag-dash fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Đang xử lý</strong></div>
                        <div>30 đơn</div>
                    </div>
                </div>

                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-success d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-bag-check fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Đã hoàn thành</strong></div>
                        <div>80 đơn</div>
                    </div>
                </div>
            </div>
            <!-- Thông tin đơn hàng chưa hoàn thành -->
            <div class="col-12  overflow-x-auto">
                <table class="table table-hover mt-1 col-12">
                    <thead class="table-dark">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Số lượng</th>
                            <th>Số tiền</th>
                            <th>Thời gian mua</th>
                            <th>Trạng thái</th>
                            <th>Nhận đơn hàng</th>
                            <th>Nhân viên nhận</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Giả sử bạn có dữ liệu lịch sử đơn hàng trong một mảng $orderHistory
                        $orderHistory = [
                            ['order_id' => 'DH001', 'quantity' => 3, 'total' => 1095000, 'date' => '2024-10-31', 'name' => 'Lê Văn A', 'phone' => '098755126', 'address' => '125, đường 15, phường 2, Quận 4, tphcm', 'staff' => 'Trần Quang Huy', 'details' => [
                                ['index' => 1, 'image' => 'https://example.com/image1.jpg', 'name' => 'Áo Sơ Mi Nam', 'size' => 'M', 'quantity' => 1, 'price' => 365000],
                                ['index' => 2, 'image' => 'https://example.com/image2.jpg', 'name' => 'Áo Thun Nữ', 'size' => 'L', 'quantity' => 2, 'price' => 365000],
                            ]],
                            ['order_id' => 'DH002', 'quantity' => 2, 'total' => 750000, 'date' => '2024-10-25', 'name' => 'Hồ Văn A', 'phone' => '098364126', 'address' => '125, đường 15, phường 2, Quận 4, tphcm', 'staff' => 'Nguyễn Quốc Cường', 'details' => [
                                ['index' => 1, 'image' => 'https://example.com/image3.jpg', 'name' => 'Áo Thun Nam', 'size' => 'S', 'quantity' => 1, 'price' => 250000],
                                ['index' => 2, 'image' => 'https://example.com/image4.jpg', 'name' => 'Áo Khoác Nữ', 'size' => 'M', 'quantity' => 1, 'price' => 500000],
                            ]],
                        ];

                        foreach ($orderHistory as $order):
                        ?>
                            <tr onclick="toggleDetails('details-<?= $order['order_id']; ?>')">
                                <td><?= $order['order_id']; ?></td>
                                <td><?= $order['name']; ?></td>
                                <td><?= $order['phone']; ?></td>
                                <td><?= $order['address']; ?></td>
                                <td><?= $order['quantity']; ?></td>
                                <td><?= number_format($order['total'], 0, ',', '.') . ' VND'; ?></td>
                                <td><?= $order['date']; ?></td>
                                <td>
                                    <span class="badge rounded-pill text-bg-success">Đang giao</span>
                                    <span class="badge rounded-pill text-bg-danger">Chưa nhận</span>
                                    <span class="badge rounded-pill text-bg-warning">Đang xử lý</span>
                                </td>
                                <td><button class="btn btn-secondary" type="button">Nhận đơn</button></td>
                                <td><?= $order['staff']; ?></td>
                            </tr>
                            <!-- Bảng chi tiết đơn hàng -->
                            <tr id="details-<?= $order['order_id']; ?>" class="collapse">
                                <td colspan="5">
                                    <table class="table mb-0">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th>STT</th>
                                                <th>Hình ảnh</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Size</th>
                                                <th>Số lượng</th>
                                                <th>Đơn giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($order['details'] as $item): ?>
                                                <tr>
                                                    <td><?= $item['index']; ?></td>
                                                    <td><img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>" style="width: 60px;"></td>
                                                    <td><?= $item['name']; ?></td>
                                                    <td><?= $item['size']; ?></td>
                                                    <td><?= $item['quantity']; ?></td>
                                                    <td><?= number_format($item['price'], 0, ',', '.') . ' VND'; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Đơn hàng của nhân viên -->
        <div class="tab-pane fade" id="your-orders">
            <h1 class="col-12 text-center m-2">
                ĐƠN HÀNG BẠN XỬ LÝ
            </h1>
            <div class="overflow-x-auto">
                <table class="table table-hover mt-1">
                    <thead class="table-dark">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Số lượng</th>
                            <th>Số tiền</th>
                            <th>Thời gian mua</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Giả sử bạn có dữ liệu lịch sử đơn hàng trong một mảng $orderHistory
                        $orderHistory = [
                            ['order_id' => 'DH001', 'quantity' => 3, 'total' => 1095000, 'date' => '2024-10-31', 'details' => [
                                ['index' => 1, 'image' => 'https://example.com/image1.jpg', 'name' => 'Áo Sơ Mi Nam', 'size' => 'M', 'quantity' => 1, 'price' => 365000],
                                ['index' => 2, 'image' => 'https://example.com/image2.jpg', 'name' => 'Áo Thun Nữ', 'size' => 'L', 'quantity' => 2, 'price' => 365000],
                            ]],
                            ['order_id' => 'DH002', 'quantity' => 2, 'total' => 750000, 'date' => '2024-10-25', 'details' => [
                                ['index' => 1, 'image' => 'https://example.com/image3.jpg', 'name' => 'Áo Thun Nam', 'size' => 'S', 'quantity' => 1, 'price' => 250000],
                                ['index' => 2, 'image' => 'https://example.com/image4.jpg', 'name' => 'Áo Khoác Nữ', 'size' => 'M', 'quantity' => 1, 'price' => 500000],
                            ]],
                        ];

                        foreach ($orderHistory as $order):
                        ?>
                            <tr onclick="toggleDetails('details-<?= $order['order_id']; ?>')">
                                <td><?= $order['order_id']; ?></td>
                                <td><?= $order['quantity']; ?></td>
                                <td><?= number_format($order['total'], 0, ',', '.') . ' VND'; ?></td>
                                <td><?= $order['date']; ?></td>
                                <td>
                                    <span class="badge rounded-pill text-bg-success">Đã giao</span>
                                    <span class="badge rounded-pill text-bg-danger">Đã hủy</span>
                                    <span class="badge rounded-pill text-bg-warning">Đang giao</span>
                                </td>
                                <td class="d-flex gap-2 border-0">
                                    <a class="btn btn-success" href="">
                                        <i class="bi bi-clipboard-check"></i>
                                    </a>
                                    <a class="btn btn-danger" href="">
                                        <i class="bi bi-clipboard-x"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Bảng chi tiết đơn hàng -->
                            <tr id="details-<?= $order['order_id']; ?>" class="collapse">
                                <td colspan="5">
                                    <table class="table mb-0">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th>STT</th>
                                                <th>Hình ảnh</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Size</th>
                                                <th>Số lượng</th>
                                                <th>Đơn giá</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($order['details'] as $item): ?>
                                                <tr>
                                                    <td><?= $item['index']; ?></td>
                                                    <td><img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>" style="width: 60px;"></td>
                                                    <td><?= $item['name']; ?></td>
                                                    <td><?= $item['size']; ?></td>
                                                    <td><?= $item['quantity']; ?></td>
                                                    <td><?= number_format($item['price'], 0, ',', '.') . ' VND'; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Doanh số -->
        <div class="tab-pane fade" id="sales">
            <div class="col-12 d-flex flex-wrap justify-content-between gap-3">
                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-success d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-cash-stack fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Doanh thu</strong></div>
                        <div>2 505 000VND</div>
                    </div>
                </div>

                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-primary d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-bag fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Sản phẩm bán ra</strong></div>
                        <div>5 214 sản phẩm</div>
                    </div>
                </div>

                <div class="col-md-3 col-12 border rounded-3 p-2 d-flex flex-wrap bg-secondary bg-opacity-25">
                    <div class="col-3 bg-info d-flex justify-content-center align-items-center text-white">
                        <i class="bi bi-person-add fs-3"></i>
                    </div>
                    <div class="col-9 px-2">
                        <div><strong>Khách hàng mới</strong></div>
                        <div>125 người</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Tab Danh sách thành viên -->
        <div class="tab-pane fade" id="members-list">
            <div class="col-md-3 col-12 text-center p-2 mb-2" style="background-color: #222f3e;">
                <a href="/Assignment/Tabs/AddUser.php" style="color: white;">
                    <i class="bi bi-person-plus fs-4"></i> Thêm nhân viên mới
                </a>
            </div>
            <h1 class="col-12 text-center m-2">
                DANH SÁCH NHÂN VIÊN
            </h1>

        </div>

        <!-- Tab Danh sách sản phẩm -->
        <div class="tab-pane fade" id="products-list">
            <div class="col-md-3 col-12 text-center p-2 mb-2" style="background-color: #222f3e;">
                <a href="/Assignment/Tabs/AddProduct.php" style="color: white;">
                    <i class="bi bi-database-add fs-4"></i> Thêm sản phẩm mới
                </a>
            </div>
            <h1 class="col-12 text-center m-2">
                DANH SÁCH SẢN PHẨM
            </h1>
            <?php
            $proData = [
                [
                    "id" => 1,
                    "image" => "images/product1.jpg", // Đường dẫn đến hình ảnh sản phẩm
                    "name" => "Sản phẩm 1",
                    "description" => "Mô tả chi tiết sản phẩm 1",
                    "price" => 100000, // Giá sản phẩm
                    "stock" => 50 // Số lượng tồn kho
                ],
                [
                    "id" => 2,
                    "image" => "images/product2.jpg",
                    "name" => "Sản phẩm 2",
                    "description" => "Mô tả chi tiết sản phẩm 2",
                    "price" => 150000,
                    "stock" => 30
                ],
                [
                    "id" => 3,
                    "image" => "images/product3.jpg",
                    "name" => "Sản phẩm 3",
                    "description" => "Mô tả chi tiết sản phẩm 3",
                    "price" => 200000,
                    "stock" => 20
                ],
                // Thêm các sản phẩm khác tương tự
            ];
            ?>
            <div class="overflow-x-auto">
                <table class="table text-start table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Tồn kho</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proData as $item): ?>
                            <tr style="vertical-align: middle;">
                                <td><?= $item['id']; ?></td>
                                <td><img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>" style="width: 60px;"></td>
                                <td><?= $item['name']; ?></td>
                                <td><?= $item['description']; ?></td>
                                <td><?= number_format($item['price'], 0, ',', '.') . ' VND'; ?></td>
                                <td><?= $item['stock']; ?></td>
                                <td class="d-flex gap-2 border-0">
                                    <!-- Xóa sản phẩm -->
                                    <a class="btn btn-danger" href="#"><i class="bi bi-trash"></i></a>
                                    <!-- Chỉnh sửa thông tin của sản phẩm -->
                                    <a class="btn btn-primary" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Tin tức -->
        <div class="tab-pane fade" id="news">
            <h1 class="col-12 text-center m-2">
                THÔNG TIN BÀI VIẾT
            </h1>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="col-md-6 col-11 border rounded-5 my-3">
                    <form action="#" method="POST" class="m-3">                    
                        <div class="user-box">
                            <input type="text" id="title" name="title" required>
                            <label for="title">Tiêu đề</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="image" name="image" required>
                            <label for="image">Hình ảnh</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="description" name="description" required>
                            <label for="description">Mô tả</label>
                        </div>
                        <div class="user-box">
                            <input type="date" id="date" name="date" required>
                            <label for="date">Ngày xuất bản</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="link" name="link" required>
                            <label for="link">Link bài viết</label>
                        </div>
                        <div class="col-12 d-flex flex-wrap justify-content-center gap-1">
                            <div class="col-5 text-center">
                                <button type="submit" class="btn btn-dark"><i class="bi bi-pencil-square"></i> Thêm bài viết</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <?php
            $newsList = [
                [
                    "title" => "Bông hoa nho nhỏ",
                    "image" => "images/product1.jpg",
                    "date" => "22/11/2024",
                    "description" => "Mô tả chút xíu về bài viết này nha, hoa tím cánh vàng cành đen rễ dài lá rụng",
                    "link" => "https://eva.vn/thoi-trang/nhung-kieu-ao-dai-dep-thuot-tha-danh-cho-cac-co-giao-gen-z-sanh-dieu-ma-van-nen-na-c36a615648.html"
                ],
                [
                    "title" => "Con bò nho nhỏ",
                    "image" => "images/product1.jpg",
                    "date" => "3/1/2019",
                    "description" => "Mô tả chút xíu về bài viết này nha, hoa tím cánh vàng cành đen rễ dài lá rụng",
                    "link" => "https://eva.vn/thoi-trang/nhung-kieu-ao-dai-dep-thuot-tha-danh-cho-cac-co-giao-gen-z-sanh-dieu-ma-van-nen-na-c36a615648.html"
                ],
                [
                    "title" => "Áo dài Việt Nam",
                    "image" => "images/product1.jpg",
                    "date" => "25/6/2023",
                    "description" => "Mô tả chút xíu về bài viết này nha, áo dài hai tà có cổ màu xanh, hoa tím cánh vàng cành đen rễ dài lá rụng",
                    "link" => "https://eva.vn/thoi-trang/nhung-kieu-ao-dai-dep-thuot-tha-danh-cho-cac-co-giao-gen-z-sanh-dieu-ma-van-nen-na-c36a615648.html"
                ],
                // Thêm các sản phẩm khác tương tự
            ];
            ?>
            <div class="overflow-x-auto">
                <table class="table text-start table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Ảnh minh họa</th>
                            <th>Tiêu đề</th>
                            <th>Ngày xuất bản</th>
                            <th>Mô tả</th>
                            <th>Link</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($newsList as $item): ?>
                            <tr style="vertical-align: middle;">
                                <td><img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>" style="width: 60px;"></td>
                                <td><?= $item['title']; ?></td>
                                <td><?= $item['date']; ?></td>
                                <td><?= $item['description']; ?></td>
                                <td><?= $item['link']; ?></td>
                                <td class="d-flex gap-2 border-0">
                                    <!-- Xóa sản phẩm -->
                                    <a class="btn btn-danger" href="#"><i class="bi bi-trash"></i></a>
                                    <!-- Chỉnh sửa thông tin của sản phẩm -->
                                    <a class="btn btn-primary" href="#">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab Thông tin thương hiệu -->
        <div class="tab-pane fade" id="branch">
            <h1 class="col-12 text-center m-2">
                THÔNG TIN THƯƠNG HIỆU
            </h1>
            <div class="d-flex justify-content-center flex-wrap">
                <div class="col-7">
                    <form action="#" method="POST" class="m-3">
                        <div class="col-12 d-flex">
                            <div class="col-4" style="height: 80px;">
                                <img src="" alt="avatar.png">
                            </div>
                            <div class="col-8">
                                <div class="user-box">
                                    <input type="text" id="name" name="name" required>
                                    <label for="name">Tên thương hiệu</label>
                                </div>
                                <div class="user-box">
                                    <input type="date" id="birth" name="birth" required>
                                    <label for="birth">Ngày thành lập</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="user-box">
                            <input type="text" id="phone" name="phone" required>
                            <label for="phone">Hotline</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="facebook" name="facebook" required>
                            <label for="facebook">Link Facebook</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="tiktok" name="tiktok" required>
                            <label for="tiktok">Link Tiktok</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="instagram" name="instagram" required>
                            <label for="instagram">Link Instagram</label>
                        </div>
                        <div class="user-box">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="user-box">
                            <input type="text" id="address" name="address" required>
                            <label for="address">Địa chỉ</label>
                        </div>
                        <div class="col-12 d-flex flex-wrap justify-content-center gap-1">
                            <div class="col-5 text-center">
                                <button type="submit" class="btn btn-dark"><i class="bi bi-pencil-square"></i> Cập nhật thông tin</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

</div>

<?php include('../Footer.php'); ?>