<?php include('../Header.php'); ?>
<!-- giỏ hàng -->
<div class="container my-3">
    <h1 class="text-center mb-4">Giỏ Hàng Của Bạn</h1>
    <!-- Thông tin đặt hàng -->
    <div class="col-12">
        <div class="col-12 px-2 d-flex flex-wrap">
            <h6 class="col-2 fw-bold">Họ tên: </h6>
            <span>Lê Văn A</span>
        </div>
        <div class="col-12 px-2 d-flex flex-wrap">
            <h6 class="col-2 fw-bold">SĐT: </h6>
            <span>097 036 0222</span>
        </div>
        <div class="col-12 px-2 d-flex flex-wrap">
            <h6 class="col-2 fw-bold">Email: </h6>
            <span>levana@gmail.com</span>
        </div>
        <div class="col-12 px-2 d-flex flex-wrap">
            <h6 class="col-2 fw-bold">Địa chỉ: </h6>
            <span>333 đường Trần Phú, phường 12, quận An, TPHCM</span>
        </div>
    </div>
    <!-- Nút nhấn chuyển đến lịch sử mua hàng -->
    <div class="col-12 d-flex justify-content-end">
        <div class="col-md-3 col-6 text-center p-2" style="background-color: #222f3e;">
            <a href="/Assignment/Tabs/OrderHistory.php" style="color: white;"><i class="bi bi-receipt-cutoff"></i> Xem lịch sử đơn hàng</a>
        </div>
    </div>

    <table class="table border-0 mt-1">
        <thead class="table-dark">
            <tr>
                <th>STT</th>
                <th class="d-md-block d-none">Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Giả sử bạn đã có dữ liệu sản phẩm trong một mảng $cartItems
            $cartItems = [
                ['id' => 1, 'name' => 'Áo Sơ Mi Nam', 'size' => 'M', 'quantity' => 2, 'price' => 365000, 'image' => 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-premium-31-0022590/1fa60b11-028c-3600-7014-001ade6f3c26.jpg?w=540&h=756&c=true&ntf=false'],
                ['id' => 2, 'name' => 'Áo Thun Nữ', 'size' => 'L', 'quantity' => 1, 'price' => 250000, 'image' => 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-premium-31-0022590/1fa60b11-028c-3600-7014-001ade6f3c26.jpg?w=540&h=756&c=true&ntf=false'],
                ['id' => 3, 'name' => 'Áo Sơ Mi Nam', 'size' => 'SM', 'quantity' => 2, 'price' => 1010000, 'image' => 'https://example.com/image1.jpg'],
                ['id' => 4, 'name' => 'Áo Thun Nữ', 'size' => 'XL', 'quantity' => 1, 'price' => 350000, 'image' => 'https://example.com/image2.jpg'],
                ['id' => 5, 'name' => 'Áo Sơ Mi Nam', 'size' => 'M', 'quantity' => 2, 'price' => 125000, 'image' => 'https://example.com/image1.jpg'],
                ['id' => 6, 'name' => 'Áo Thun Nữ', 'size' => 'XL', 'quantity' => 1, 'price' => 25000, 'image' => 'https://example.com/image2.jpg'],
                ['id' => 7, 'name' => 'Áo Sơ Mi Nam', 'size' => 'M', 'quantity' => 2, 'price' => 365000, 'image' => 'https://example.com/image1.jpg'],
                ['id' => 8, 'name' => 'Áo Thun Nữ', 'size' => 's', 'quantity' => 1, 'price' => 753000, 'image' => 'https://example.com/image2.jpg'],
                // ... thêm các sản phẩm khác
            ];

            $totalQuantity = 0;
            $totalPrice = 0;

            foreach ($cartItems as $index => $item):
                $totalQuantity += $item['quantity'];
                $itemTotal = $item['quantity'] * $item['price']; // Tính thành tiền cho sản phẩm
                $totalPrice += $itemTotal;
            ?>
                <tr style="border-bottom: 1px solid #576574; vertical-align: middle;">
                    <td><?= $index + 1; ?></td>
                    <td class="d-md-block d-none border-0">
                        <img src="<?= $item['image']; ?>" alt="<?= $item['name']; ?>" style="width: 100px; height: auto;">
                    </td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['size']; ?></td>
                    <td><?= $item['quantity']; ?></td>
                    <td><?= number_format($item['price'], 0, ',', '.') . ' VND'; ?></td>
                    <td>
                        <button class="btn btn-secondary"><i class="bi bi-dash"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <button class="btn btn-secondary"><i class="bi bi-plus"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="col-12 fs-5">
        <form>
            <strong>Cách thức nhận hàng:</strong>
            <div class="col-12 fw-light d-flex flex-wrap">
                <div class="col-md-3 col-12">
                    <input class="form-check-input" type="radio" name="method" value="get" id="get">
                    <label class="form-check-label" for="get">Lấy tại cửa hàng</label>
                </div>
                <div class="col-md-9 col-12">
                    <select class="form-select" id="address">
                        <option value="" disabled selected>Chọn cửa hàng gần bạn...</option>
                        <option>666 đường 36, phường ANM, quận 9, TPHCM</option>
                        <option>888 đường 36, phường ANM, quận 9, TPHCM</option>
                        <option>22 đường 36, phường ANM, quận 9, TPHCM</option>
                        <option>666 đường 36, phường ANM, quận 9, TPHCM</option>
                        <option>224 đường 36, phường ANM, quận 9, TPHCM</option>
                        <option>654 đường 36, phường ANM, quận 9, TPHCM</option>
                    </select>
                </div>
            </div>
            <div class="col-12 fw-light d-flex">
                <div class="col-12">
                    <input class="form-check-input" type="radio" name="method" value="delivery" id="delivery">
                    <label class="form-check-label" for="delevery">Giao đến địa chỉ của bạn</label>
                </div>
            </div>
            <strong>Ghi chú:</strong>
            <div class="col-12 fw-light d-flex">
                <div class="col-12">
                    <input class="form-control" type="text" name="note" id="note" placeholder="Ghi chú...">
                </div>
            </div>
        </form>
    </div>

    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center mt-4 fs-4">
        <div class="col-md-5 col-12">
            <strong>Tổng số lượng sản phẩm: <?= $totalQuantity; ?></strong>
        </div>
        <div class="col-md-5 col-12">
            <strong>Tổng tiền: <?= number_format($totalPrice, 0, ',', '.') . ' VND'; ?></strong> <!-- Tổng tiền -->
        </div>
        <div class="col-md-2 col-12">
            <button class="btn btn-success w-100">Đặt hàng</button>
        </div>
    </div>
</div>


<?php include('../Footer.php'); ?>