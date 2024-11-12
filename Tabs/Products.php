<?php include('../Header.php'); ?>

<!-- tab Sản phẩm -->
<div class="container d-flex flex-wrap">
    <!-- Bộ lọc kết quả hiển thị sản phẩm -->
    <div class="col-md-2 col-12 p-2 sticky-filter" style="background-color: #c8d6e5;">
        <h4 class="d-md-block d-none">Lọc sản phẩm</h4>
        <div class="d-md-block d-none">
            <div class="mb-3">
                <h5>Phân loại</h5>
                <div>
                    <input type="checkbox" id="category-shirt" value="shirt">
                    <label for="category-shirt">Áo</label>
                </div>
                <div>
                    <input type="checkbox" id="category-pants" value="pants">
                    <label for="category-pants">Quần</label>
                </div>
                <div>
                    <input type="checkbox" id="category-accessories" value="accessories">
                    <label for="category-accessories">Phụ kiện</label>
                </div>
            </div>
            <div class="mb-3">
                <h5>Cho</h5>
                <div>
                    <input type="checkbox" id="gender-male" value="male">
                    <label for="gender-male">Nam</label>
                </div>
                <div>
                    <input type="checkbox" id="gender-female" value="female">
                    <label for="gender-female">Nữ</label>
                </div>
                <div>
                    <input type="checkbox" id="gender-unisex" value="unisex">
                    <label for="gender-unisex">Unisex</label>
                </div>
            </div>
            <div class="mb-3">
                <h5>Bộ sưu tập</h5>
                <select class="form-select" id="collection">
                    <option value="">Chọn bộ sưu tập</option>
                    <option value="collection1">Bộ sưu tập 1</option>
                    <option value="collection2">Bộ sưu tập 2</option>
                </select>
            </div>
            <div class="mb-3">
                <h5>Giá cả</h5>
                <div class="d-flex">
                    <input type="number" class="form-control" id="minPrice" placeholder="Giá tối thiểu" min="0">
                    <input type="number" class="form-control ms-2" id="maxPrice" placeholder="Giá tối đa" min="0">
                </div>
            </div>
            <div class="mb-3">
                <h5>Sắp xếp theo giá</h5>
                <select class="form-select" id="sortPrice">
                    <option value="asc">Tăng dần</option>
                    <option value="desc">Giảm dần</option>
                </select>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn" style="background-color: #576574; color: white;">Áp dụng bộ lọc</button>
            </div>
        </div>
        <!-- Nút nhấn ở màn hình nhỏ để hiển thị bộ lọc -->
        <div class="d-md-none col-12">
            <button class="btn col-12" style="background-color: #576574; color: white;" data-bs-toggle="collapse" data-bs-target="#mobileFilters">
                <i class="bi bi-funnel"></i> Hiện bộ lọc
            </button>
            <div class="collapse" id="mobileFilters">
                <div class="mb-3">
                    <h5>Phân loại</h5>
                    <div>
                        <input type="checkbox" id="category-shirt-mobile" value="shirt">
                        <label for="category-shirt-mobile">Áo</label>
                    </div>
                    <div>
                        <input type="checkbox" id="category-pants-mobile" value="pants">
                        <label for="category-pants-mobile">Quần</label>
                    </div>
                    <div>
                        <input type="checkbox" id="category-accessories-mobile" value="accessories">
                        <label for="category-accessories-mobile">Phụ kiện</label>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Cho</h5>
                    <div>
                        <input type="checkbox" id="gender-male-mobile" value="male">
                        <label for="gender-male-mobile">Nam</label>
                    </div>
                    <div>
                        <input type="checkbox" id="gender-female-mobile" value="female">
                        <label for="gender-female-mobile">Nữ</label>
                    </div>
                    <div>
                        <input type="checkbox" id="gender-unisex-mobile" value="unisex">
                        <label for="gender-unisex-mobile">Unisex</label>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Bộ sưu tập</h5>
                    <select class="form-select" id="collection-mobile">
                        <option value="">Chọn bộ sưu tập</option>
                        <option value="collection1">Bộ sưu tập 1</option>
                        <option value="collection2">Bộ sưu tập 2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <h5>Giá cả</h5>
                    <div class="d-flex">
                        <input type="number" class="form-control" id="minPrice-mobile" placeholder="Giá tối thiểu" min="0">
                        <input type="number" class="form-control ms-2" id="maxPrice-mobile" placeholder="Giá tối đa" min="0">
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Sắp xếp theo giá</h5>
                    <select class="form-select" id="sortPrice-mobile">
                        <option value="asc">Tăng dần</option>
                        <option value="desc">Giảm dần</option>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn" style="background-color: #576574; color: white;">Áp dụng bộ lọc</button>
                </div>
            </div>
        </div>
    </div>
    

<!-- Hiển thị sản phẩm -->
    <div class="displayProduct col-md-10 col-12 p-2">
        <h2 class="text-center my-3">Sản Phẩm</h2>
        <!-- Product Grid -->
        <div class="row">
            <?php
            // giả sử có tập sản phẩm products, để demo layout
            $products = [
                ['id' => 1, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 2, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 3, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
                ['id' => 4, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 5, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 6, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 7, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 8, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 9, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 10, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 11, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 12, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 13, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
                ['id' => 14, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 15, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 16, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 17, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 18, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 19, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 20, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 21, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 22, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 23, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 24, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 25, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 26, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 27, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 28, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 29, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
                ['id' => 30, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 31, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 32, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 33, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 34, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 35, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 36, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 37, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 38, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
                ['id' => 39, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
                ['id' => 40, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 41, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 42, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
                ['id' => 43, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                ['id' => 44, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                ['id' => 45, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
                ['id' => 46, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg']

            ];

            // Phân trang: mỗi trang chứa 20 sản phẩm
            $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $products_per_page = 20;
            $total_products = count($products);
            $total_pages = ceil($total_products / $products_per_page);
            $start_index = ($current_page - 1) * $products_per_page;
            $current_products = array_slice($products, $start_index, $products_per_page);

            foreach ($current_products as $product):
            ?>
                <div class="col-md-3 col-6 mb-4 fade-in">
                    <a href="/Assignment/Tabs/ProductDetail.php" class="text-decoration-none text-dark">
                        <div class="card border-0">
                            <div class="col-12 d-flex justify-content-center align-items-center product-image">
                                <img src="<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>" 
                                    onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/017/173/007/original/can-not-load-corrupted-image-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg';" 
                                    style="object-fit: contain; height: 100%;">
                            </div>

                            <div class="card-body p-1 text-center">
                                <h5 class="card-title"><?= $product['name']; ?></h5>
                                <p class="card-text"><?= $product['price']; ?></p>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-danger"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" style="margin-top: 20px;">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= ($current_page == 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="<?= ($current_page > 1) ? '?page=' . ($current_page - 1) : '#'; ?>" style="background-color: <?= ($current_page == 1) ? '#ccc' : '#576574'; ?>; color: white;">
                        Previous
                    </a>
                </li>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= ($i == $current_page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?= $i; ?>" style="background-color: <?= ($i == $current_page) ? '#576574' : 'white'; ?>; color: <?= ($i == $current_page) ? 'white' : '#576574'; ?>;">
                            <?= $i; ?>
                        </a>
                    </li>
                <?php endfor; ?>

                <li class="page-item <?= ($current_page == $total_pages) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="<?= ($current_page < $total_pages) ? '?page=' . ($current_page + 1) : '#'; ?>" style="background-color: <?= ($current_page == $total_pages) ? '#ccc' : '#576574'; ?>; color: white;">
                        Next
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>


<?php include('../Footer.php') ?>