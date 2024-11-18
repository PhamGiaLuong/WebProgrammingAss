<?php include('../Header.php'); ?>
<!-- tab Chi tiết sản phẩm -->
<div class="container d-flex flex-wrap mt-4">
    <!-- Breadcrumb -->
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Assignment/Tabs/Products.php">Products</a></li>
                <li class="breadcrumb-item"><a href="#">Clothing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Men's Shirts</li>
            </ol>
        </nav>
    </div>

    <!-- Cột hiển thị hình ảnh sản phẩm lớn với trình chiếu hình ảnh tự động -->
    <div class="col-md-7 col-12" style="height: 60vh;">
        <div id="productImageCarousel" class="carousel slide h-100" data-bs-ride="carousel" style="overflow: hidden;">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756"
                        class="d-block w-100 h-100"
                        alt="Product Image 1"
                        style="object-fit: contain;">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756"
                        class="d-block w-100 h-100"
                        alt="Product Image 2"
                        style="object-fit: contain;">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756"
                        class="d-block w-100 h-100"
                        alt="Product Image 3"
                        style="object-fit: contain;">
                </div>
                <!-- Thêm các hình ảnh khác nếu cần -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productImageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productImageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="col-md-5 col-12 p-2 text-center">
        <h2>Áo sơ mi nam</h2>
        <h2>251,000 VND</h2>
        <form action="">
            <div class="d-flex flex-wrap justify-content-center mb-3">
                <button type="button" class="btn btn-outline-secondary me-2" data-size="S">S</button>
                <button type="button" class="btn btn-outline-secondary me-2" data-size="M">M</button>
                <button type="button" class="btn btn-outline-secondary me-2" data-size="L">L</button>
                <button type="button" class="btn btn-outline-secondary me-2" data-size="XL">XL</button>
                <button type="button" class="btn btn-outline-secondary" data-size="XXL">XXL</button>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <button type="button" id="decreaseBtn" class="btn btn-secondary">-</button>
                <input type="number" id="quantityInput" value="1" min="1" class="form-control mx-2 text-center" style="width: 60px;" readonly>
                <button type="button" id="increaseBtn" class="btn btn-secondary">+</button>
            </div>

            <button type="submit" id="addToCartBtn" class="btn btn-outline-danger w-50 my-2"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</button>
            <button type="submit" id="addToCartBtn" class="btn btn-danger w-50 my-2">Mua ngay</button>
        </form>
        <div class="col-12 d-flex flex-wrap justify-content-around gap-1">
            <a href="" class="border-b fade-in p-2">Áo nam</a>
            <a href="" class="border-b fade-in p-2">Bán chạy</a>
            <a href="" class="border-b fade-in p-2">Bộ sưu tập NA</a>
            <a href="" class="border-b fade-in p-2">Thun lạnh</a>
            <a href="" class="border-b fade-in p-2">Oversize</a>
            <a href="" class="border-b fade-in p-2">Tay dài</a>
            <a href="" class="border-b fade-in p-2">Cổ cao</a>
        </div>
    </div>

    <!-- Tab con chứa Hình ảnh sản phẩm, Chi tiết sản phẩm, và Đánh giá -->
    <div class="col-12 mt-4 border-top">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link text-dark active" data-bs-toggle="pill" href="#productImages">
                    Hình ảnh sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#productDetails">
                    Chi tiết sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="pill" href="#productReviews">
                    Đánh giá
                </a>
            </li>
        </ul>
        <div class="tab-content p-3" id="productTabsContent">
            <!-- Tab Hình ảnh sản phẩm -->
            <div class="tab-pane fade show active" id="productImages">
                <div class="d-flex justify-content-center flex-wrap gap-3 col-12">
                    <img src="https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756" class="mb-2" alt="Product Image 1">
                    <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="mb-2" alt="Product Image 2">
                    <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="mb-2" alt="Product Image 3">
                    <!-- Thêm các hình ảnh khác nếu cần -->
                </div>
            </div>

            <!-- Tab Chi tiết sản phẩm -->
            <div class="tab-pane fade" id="productDetails">
                <p>Chi tiết sản phẩm sẽ hiển thị ở đây.</p>
            </div>

            <!-- Tab Đánh giá -->
            <div class="tab-pane fade" id="productReviews">
                <div class="reviews border rounded p-2">
                    <div class="review mb-3">
                        <h5>Nguyễn Văn A <span>★★★★★</span></h5>
                        <p class="fst-italic">2024-10-31</p>
                        <p>Rất tốt, sản phẩm đẹp.</p>
                    </div>
                    <!-- Thêm các đánh giá khác nếu có -->
                </div>
                <!-- Form gửi đánh giá -->
                <form class="mt-4 border rounded p-2 d-flex flex-wrap justify-content-end">
                    <h4 class="col-12">Đánh giá của bạn</h4>
                    <div class="col-md-6 col-12 mb-3 d-flex">
                        <div class="col-3">
                            <label for="reviewerName" class="form-label fw-bold fst-italic">Nickname</label>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="reviewerName" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-3 d-flex">
                        <div class="col-3">
                            <label class="form-label fw-bold fst-italic">Đánh giá</label>
                        </div>
                        <div class="col-8">
                            <div id="starRating" class="star-rating">
                                <i class="bi bi-star" data-value="1"></i>
                                <i class="bi bi-star" data-value="2"></i>
                                <i class="bi bi-star" data-value="3"></i>
                                <i class="bi bi-star" data-value="4"></i>
                                <i class="bi bi-star" data-value="5"></i>
                            </div>
                            <input type="hidden" id="reviewRating" name="reviewRating" required>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="form-control" id="reviewDetails" rows="3" required placeholder="Đánh giá của bạn..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark col-md-3 col-6">Gửi đánh giá</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Gợi ý các sản phẩm liên quan -->
    <div class="col-12 mt-4">
        <div class="col-12 p-2" style="background-color: #222f3e;color: white;">
            <h4 class="m-0">Có thể bạn sẽ thích</h4>
        </div>
        <div id="relatedProductsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <?php
                    $products = [
                        ['id' => 1, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
                        ['id' => 2, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
                        ['id' => 3, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver144-0021849/bb49e3f6-6f7f-6e00-9591-001a33e033ba.jpg?w=800'],
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

                    ];
                    foreach ($products as $index => $product): ?>
                        <div class="col-md-3 col-6 d-flex align-items-stretch product-item">
                        <a href="/Assignment/Tabs/ProductDetail.php" class="text-decoration-none text-dark">
                            <div class="card border-0 flex-fill">
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
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">Nổi bật</span>
                        </div>
                        <?php if (($index + 1) % 4 === 0 && $index + 1 < count($products)): ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#relatedProductsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#relatedProductsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<?php include('../Footer.php'); ?>