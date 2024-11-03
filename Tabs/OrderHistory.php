<?php include('../Header.php'); ?>
<!-- Lịch sử mua hàng -->
    <div class="container my-3">
        <h2 class="text-center mb-4">Lịch sử đơn hàng của bạn</h2>
        
        <!-- Nút nhấn chuyển đến Giỏ hàng hiện tại -->
        <div class="col-12 d-flex justify-content-end">
            <div class="col-md-3 col-6 text-center p-2" style="background-color: #222f3e;">
                <a href="/Assignment/Tabs/Cart.php" style="color: white;"><i class="bi bi-basket3"></i> Xem giỏ hàng của bạn</a>
            </div>
        </div>

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
                        <td><button class="btn btn-dark" type="button">Xem chi tiết</button></td>
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
<?php include('../Footer.php'); ?>