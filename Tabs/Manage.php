<?php include('../Header.php'); ?>
<!-- tab Quản lý -->
<div class="container mt-3">
    <!-- Báo cáo tổng quan -->
    <div class="col-12 d-flex align-items-center">
        <h3>Thống kê hoạt động</h3>
        <div style="height: 2px; background-color: #222f3e; flex-grow: 1;"></div>
    </div>
    <div class="col-12 d-flex flex-wrap justify-content-between my-2">
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

    <!-- Đơn hàng gần đây -->
    <div class="col-12 d-flex align-items-center">
        <h3>Đơn hàng đang xử lý</h3>
        <div style="height: 2px; background-color: #222f3e; flex-grow: 1;"></div>
    </div>
    <!-- Thống kê trạng thái các đơn hàng -->
    <div class="col-12 d-flex flex-wrap justify-content-between my-2">
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
    <table class="table table-hover mt-1">
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

    <!-- Thêm mới vào database -->
    <div class="col-12 d-flex align-items-center">
        <h3>Quản lý dữ liệu</h3>
        <div style="height: 2px; background-color: #222f3e; flex-grow: 1;"></div>
    </div>
    <div class="col-12 d-flex flex-wrap justify-content-between my-2">
        <div class="col-md-3 col-12 text-center p-2" style="background-color: #222f3e;">
            <a href="/Assignment/Tabs/AddUser.php" style="color: white;">
                <i class="bi bi-person-plus fs-4"></i> Thêm thành viên mới
            </a>
        </div>
        <div class="col-md-3 col-12 text-center p-2" style="background-color: #222f3e;">
            <a href="/Assignment/Tabs/AddProduct.php" style="color: white;">
                <i class="bi bi-database-add fs-4"></i> Thêm sản phẩm mới
            </a>
        </div>
    </div>

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
                        <a class="btn btn-danger" href="d.php?id=<?= $sp['id']; ?>"><i class="bi bi-trash"></i></a>
                        <a class="btn btn-primary" href="c.php?id=<?= $sp['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>

<?php include('../Footer.php'); ?>